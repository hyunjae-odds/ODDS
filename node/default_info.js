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

curl('http://feed.sportsdt.com/soccer/index_kr.aspx?type=getgameinfo&from=oddsconnet&gameid=1637791', function () {
    var result = JSON.parse(this.body);
    default_info_query(result.HomeTeam.Id, result.HomeTeam.Photo === undefined ? "" : result.HomeTeam.Photo, result.AwayTeam.Id, result.AwayTeam.Photo === undefined ? "" : result.AwayTeam.Photo);
});
//사진정보 가져오기
function default_info_query(home_key, home_photo, away_key, away_photo) {
        console.log(home_key);
        console.log(away_key);
        if (home_photo != "") {
            var sql = "update ex_team set photo='" + home_photo + "' where team_id='" + home_key + "'";
            con.query(sql, function (err) {
                console.log(sql);
            });
        }
        if(away_photo != "") {
            var sql2 = "update ex_team set photo='" + away_photo + "' where team_id='" + away_key + "'";
            con.query(sql2, function (err) {
                console.log(sql2);
            });
        }
}