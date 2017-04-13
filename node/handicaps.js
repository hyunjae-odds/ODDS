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
curl('http://feed.sportsdt.com/soccer/index_kr.aspx?type=getahoddslist&from=oddsconnet&t=1&pid=3000271', function () {
    var result = JSON.parse(this.body);
    for(var key in result.Datas) {
        datas_query(result.Datas[key].GameId, 3000271, result.Datas[key].IsRun, result.Datas[key].Data, result.Datas[key].Date);
    }
});

function datas_query(gameid, cid, isrun, data, date) {
    var dt = new Date(parseInt(date));
    con.query("select count(*) as cnt from ex_handicaps where game_no='"+gameid+"' and cid='"+cid+"' and date='"+(dt.getFullYear()+"-"+(dt.getMonth()+1)+"-"+dt.getDate())+"'", function(err, rows) {
        if(rows[0].cnt == "0") {
            var sql = "insert into ex_handicaps(game_no, cid, isrun, data1, data2, data3, data4, data5, data6, date, insert_dt) values('"+gameid+"','"+cid+"','"+isrun+"','"+data[0]+"','"+data[1]+"','"+data[2]+"','"+data[3]+"','"+data[4]+"','"+data[5]+"','"+(dt.getFullYear()+"-"+(dt.getMonth()+1)+"-"+dt.getDate())+"',now())";
            con.query(sql, function(err) {
                console.log(sql);
            });
        } else {
            var sql = "update ex_handicaps set data1='"+data[0]+"',data2='"+data[1]+"',data3='"+data[2]+"',data4='"+data[3]+"',data5='"+data[4]+"',data6='"+data[5]+"' where game_no='"+gameid+"' and cid='"+cid+"' and date='"+(dt.getFullYear()+"-"+(dt.getMonth()+1)+"-"+dt.getDate())+"'";
            con.query(sql, function(err) {
                console.log(sql);
            });
        }
    });
}