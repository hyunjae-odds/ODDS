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

curl('http://feed.sportsdt.com/soccer/index_kr.aspx?type=getgameprediction&from=oddsconnet&gameid=1583660', function () {
    var result = JSON.parse(this.body);
    tip_query(1583660, result.Tip);
    for(var key in result.Lineup.HomePlayers) {
        lineup_query(1583660, 'Y', result.Lineup.HomePlayers[key].Id, result.Lineup.HomePlayers[key].Name, result.Lineup.HomePlayers[key].Shit_No, result.Lineup.HomePlayers[key].Pos, result.Lineup.HomePlayers[key].Status);
    }
    for(var key in result.Lineup.AwayPlayers) {
        lineup_query(1583660, 'N', result.Lineup.HomePlayers[key].Id, result.Lineup.HomePlayers[key].Name, result.Lineup.HomePlayers[key].Shit_No, result.Lineup.HomePlayers[key].Pos, result.Lineup.HomePlayers[key].Status);
    }
});

function tip_query(key, tip) {
    con.query("select count(*) as cnt from ex_schedule_dept where game_no='" + key + "'", function(err, rows) {
        if(rows[0].cnt == "0") {
            var sql = "insert into ex_schedule_dept(game_no, home_recent, visit_recent, home_odds, visit_odds, confidence, results, content, insert_dt) values('"+key+"','"+tip.HomeRecentTendency+"','"+tip.AwayRecentTendency+"','"+tip.HomeOddsWinLose+"','"+tip.AwayOddsWinLose+"','"+tip.Confidence+"','"+tip.ResultsOfTheMatch+"','"+tip.Content+"',now())";
            con.query(sql, function(err) {
                console.log(sql);
            });
        } else {
            var sql = "update ex_schedule_dept set home_recent='"+tip.HomeRecentTendency+"',visit_recent='"+tip.AwayRecentTendency+"',home_odds='"+tip.HomeOddsWinLose+"',visit_odds='"+tip.AwayOddsWinLose+"',confidence='"+tip.Confidence+"',results='"+tip.ResultsOfTheMatch+"',content='"+tip.Content+"' where game_no='" + key + "'";
            con.query(sql, function(err) {
                console.log(sql);
            });
        }
    });
}
function lineup_query(key, home, id, name, shitno, pos, status) {
    con.query("select count(*) as cnt from ex_schedule_player where game_no='" + key + "' and home_yn='" + home + "' and player_no='" + id + "'", function(err, rows) {
        if(rows[0].cnt == "0") {
            var sql = "insert into ex_schedule_player(game_no, home_yn, player_no, name, shirt_no, pos, status, insert_dt) values('"+key+"','"+home+"','"+id+"','"+name+"','"+shitno+"','"+pos+"','"+status+"',now())";
            con.query(sql, function(err) {
                console.log(sql);
            });
        } else {
            var sql = "update ex_schedule_player set name='"+name+"',shirt_no='"+shitno+"',pos='"+pos+"',status='"+status+"' where game_no='"+key+"' and home_yn='"+home+"' and player_no='"+id+"'";
            con.query(sql, function(err) {
                console.log(sql);
            });
        }
    });
}