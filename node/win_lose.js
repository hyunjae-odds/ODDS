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
curl('http://feed.sportsdt.com/soccer/index_kr.aspx?type=gethdaoddsinfo&from=oddsconnet&gameid=1583660', function () {
    var result = JSON.parse(this.body);
    for(var key in result.Datas) {
        datas_query(1583660, result.Datas[key].Cid, result.Datas[key].Name, result.Datas[key].Data, result.Datas[key].Date);
    }
});

function datas_query(key, cid, name, data, date) {
    var dt = new Date(parseInt(date));
    con.query("select count(*) as cnt from ex_winlose where game_no='" + key + "' and cid='" + cid + "' and date='" + (dt.getFullYear()+"-"+(dt.getMonth()+1)+"-"+dt.getDate()) + "'", function(err, rows) {
        if(rows[0].cnt == "0") {
            var sql = "insert into ex_winlose(game_no, cid, name, data1, data2, data3, data4, data5, data6, data7, data8, data9, data10, data11, data12, data13, data14, date, insert_dt) values('"+key+"','"+cid+"','"+name+"','"+data[0]+"','"+data[1]+"','"+data[2]+"','"+data[3]+"','"+data[4]+"','"+data[5]+"','"+data[6]+"','"+data[7]+"','"+data[8]+"','"+data[9]+"','"+data[10]+"','"+data[11]+"','"+data[12]+"','"+data[13]+"','"+(dt.getFullYear()+"-"+(dt.getMonth()+1)+"-"+dt.getDate())+"',now())";
            con.query(sql, function(err) {
                console.log(sql);
            });
        } else {
            var sql = "update ex_winlose set name='"+name+"',data1='"+data[0]+"',data2='"+data[1]+"',data3='"+data[2]+"',data4='"+data[3]+"',data5='"+data[4]+"',data6='"+data[5]+"',data7='"+data[6]+"',data8='"+data[7]+"',data9='"+data[8]+"',data10='"+data[9]+"',data11='"+data[10]+"',data12='"+data[11]+"',data13='"+data[12]+"',data14='"+data[13]+"' where game_no='"+key+"' and cid='" + cid + "' and date='" + (dt.getFullYear()+"-"+(dt.getMonth()+1)+"-"+dt.getDate()) + "'";
            con.query(sql, function(err) {
                console.log(sql);
            });
        }
    });
}