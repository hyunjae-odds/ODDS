var curl = require('node-curl');
var mysql = require('mysql');
var fs = require('fs');
var schedule = require('node-schedule');

var con = mysql.createConnection({
    host: "oddsconnet.com",
    user: "odds",
    password: "odds8313$",
    database: "odds",
    multipleStatements: true
});
handleDisconnect(con);
function handleDisconnect(client) {
  client.on('error', function (error) {
    if (!error.fatal) return;
    if (error.code !== 'PROTOCOL_CONNECTION_LOST') throw error;


    console.error('> Re-connecting lost MySQL connection: ' + error.stack);

    // NOTE: This assignment is to a variable from an outer scope; this is extremely important
    // If this said `client =` it wouldn't do what you want. The assignment here is implicitly changed
    // to `global.mysqlClient =` in node.
    global.con = mysql.createConnection({
        host: "oddsconnet.com",
        user: "odds",
        password: "odds8313$",
        database: "odds",
        multipleStatements: true
    });
    handleDisconnect(global.con);
    global.con.connect();
  });
}

curl('http://feed.sportsdt.com/soccer/index_kr.aspx?type=getrevocatorygame&from=oddsconnet', function () {
    var result = JSON.parse(this.body);
    for(var key in result.Games) {
        schedule_query(result.Games[key].Id, result.Games[key].Date, result.Games[key].N, result.Games[key].Note == undefined ? "" : result.Games[key].Note);
    }
});

function schedule_query(id, date, n, note) {
    var dt = new Date(parseInt(date));
    con.query("select count(*) as cnt from ex_schedule where game_no='" + id[0] +  "'", function(err, rows) {
        if(rows[0].cnt == "0") {
            var sql = "insert into ex_schedule(game_no,league_no,home_team,visit_team,date,center_yn,cancel_yn,cancel_descript) values('"+id[0]+"','"+id[1]+"','"+id[2]+"','"+id[3]+"','"+(dt.getFullYear()+"-"+(dt.getMonth()+1)+"-"+dt.getDate())+"','"+n+"','Y','"+note+"')";
            con.query(sql, function(err) {
                console.log(sql);
            });
        } else {
            var sql = "update ex_schedule set cancel_yn='Y',cancel_descript='"+note+"' where game_no='"+id[0]+"'";
            con.query(sql, function(err) {
                console.log(sql);
            });
        }
    });
}