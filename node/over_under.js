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

curl('http://feed.sportsdt.com/soccer/index_kr.aspx?type=getouoddsinfo&from=oddsconnet&gameid=1583660', function () {
    var result = JSON.parse(this.body);
    for(var key in result.OddsDatas) {
        var cid = result.OddsDatas[key].CId;
        var name = result.OddsDatas[key].Name;
        var isrun = result.OddsDatas[key].IsRun;
        for(var key2 in result.OddsDatas[key].Logs) {
            odds_datas_query(1583660, cid, name, isrun, result.OddsDatas[key].Logs[key2].Data, result.OddsDatas[key].Logs[key2].Date);
        }
    }
});

function odds_datas_query(key, cid, name, isrun, data, date) {
    var dt = new Date(parseInt(date));
    con.query("select count(*) as cnt from ex_overunder where game_no='" + key + "' and cid='" + cid + "' and date='" + (dt.getFullYear()+"-"+(dt.getMonth()+1)+"-"+dt.getDate()) + "'", function(err, rows) {
        if(rows[0].cnt == "0") {
            var sql = "insert into ex_overunder(game_no, cid, name, isrun, data1, data2, data3, date, insert_dt) values('"+key+"','"+cid+"','"+name+"','"+isrun+"','"+data[0]+"','"+data[1]+"','"+data[2]+"','"+(dt.getFullYear()+"-"+(dt.getMonth()+1)+"-"+dt.getDate())+"',now())";
            con.query(sql, function(err) {
                console.log(sql);
            });
        } else {
            var sql = "update ex_overunder set name='"+name+"',isrun='"+isrun+"',data1='"+data[0]+"',data2='"+data[0]+"',data3='"+data[0]+"', where game_no='"+key+"' and cid='"+cid+"' and date='"+(dt.getFullYear()+"-"+(dt.getMonth()+1)+"-"+dt.getDate())+"'";
            con.query(sql, function(err) {
                console.log(sql);
            });
        }
    });
}