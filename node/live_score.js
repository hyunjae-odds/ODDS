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

curl('http://feed.sportsdt.com/soccer/index_kr.aspx?type=getlivedata&from=oddsconnet', function () {
    var result = JSON.parse(this.body);
    var dt = new Date(parseInt(result.SeverTime));
    for(var key in result.LiveData) {
        live_data_query((dt.getFullYear()+"-"+(dt.getMonth()+1)+"-"+dt.getDate()), key, result.LiveData[key].Status, result.LiveData[key].Score, result.LiveData[key].Half == "" ? ['',''] : result.LiveData[key].Half.split('-'), result.LiveData[key].RedCard, result.LiveData[key].YellowCard, result.LiveData[key].TStartTime == undefined ? "0" : result.LiveData[key].TStartTime, result.LiveData[key].ScoreAll, result.LiveData[key].ScorePoint == undefined ? ['',''] : result.LiveData[key].ScorePoint);
    }
});

function live_data_query(servertime, key, status, score, half, redcard, yellowcard, tstarttime, scoreall, scorepoint) {
    var dt = new Date(parseInt(tstarttime));
    con.query("select count(*) as cnt from ex_live_score where game_no = '" + key + "'", function(err, rows) {
        if(rows[0].cnt == "0") {
            var sql = "insert into ex_live_score(game_no, status, date, home_score, visit_score, home_half, visit_half, home_red, visit_red, home_yellow, visit_yellow, home_score_all, visit_score_all, home_scorepoint, visit_scorepoint, insert_dt, servertime) values('" + key + "','" + status + "','" + (tstarttime == "0" ? "" : (dt.getFullYear()+"-"+(dt.getMonth()+1)+"-"+dt.getDate())) + "','" + score[0] + "','" + score[1] + "','" + half[0] + "','" + half[1] + "','" + redcard[0] + "','" + redcard[1] + "','" + yellowcard[0] + "','" + yellowcard[1] + "','" + scoreall[0] + "','" + scoreall[1] + "','" + scorepoint[0] + "','" + scorepoint[1] + "',now(),'" + servertime + "')";
            con.query(sql, function(err) {
                console.log(sql);
            });
        } else {
            var sql = "update ex_live_score set status='"+status+"',date='"+(tstarttime == "0" ? "" : (dt.getFullYear()+"-"+(dt.getMonth()+1)+"-"+dt.getDate()))+"',home_score='"+score[0]+"',visit_score='"+score[1]+"',home_half='"+half[0]+"',visit_half='"+half[1]+"',home_red='"+redcard[0]+"',visit_red='"+redcard[1]+"',home_yellow='"+yellowcard[0]+"',visit_yellow='"+yellowcard[1]+"',home_score_all='"+scoreall[0]+"',visit_score_all='"+scoreall[1]+"',home_scorepoint='"+score[0]+"',visit_scorepoint='"+score[0]+"',servertime='"+servertime+"' where game_no='"+key+"'";
            con.query(sql, function(err) {
                console.log(sql);
            });
        }
    });
}