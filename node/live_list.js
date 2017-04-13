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

curl('http://feed.sportsdt.com/soccer/index_kr.aspx?type=getlivegame&from=oddsconnet', function () {
    var result = JSON.parse(this.body);
    var i;
    for(i=0; i<result.Schedule.length; i++) {
        schedule_query(result.Schedule[i].Id == undefined ? ['','','',''] : result.Schedule[i].Id, result.Schedule[i].Date == undefined ? "" : result.Schedule[i].Date, result.Schedule[i].N == undefined ? "" : result.Schedule[i].N, result.Schedule[i].Rank == undefined ? ['',''] : result.Schedule[i].Rank, result.Schedule[i].Score == undefined ? ['',''] : result.Schedule[i].Score, result.Schedule[i].RedCard == undefined ? ['',''] : result.Schedule[i].RedCard, result.Schedule[i].YellowCard == undefined ? ['',''] : result.Schedule[i].YellowCard, result.Schedule[i].Half == undefined || result.Schedule[i].Half == '' ? ['',''] : result.Schedule[i].Half.split('-'), result.Schedule[i].ScoreAll == undefined ? ['',''] : result.Schedule[i].ScoreAll, result.Schedule[i].Weather == undefined ? '' : result.Schedule[i].Weather);
    }
    for(var key in result.Competition) {
        competition_query(key, result.Competition[key].Name, result.Competition[key].ShortName, result.Competition[key].Color == undefined ? "" : result.Competition[key].Color);
    }
    for(var key in result.Team) {
        team_query(key, result.Team[key].Name, result.Team[key].ShortName);
    }
});

function schedule_query(id, date, n, rank, score, redcard, yellowcard, half, scoreall, weather) {
    var dt = new Date(parseInt(date));
    con.query("select count(*) as cnt from ex_schedule where game_no='" + id[0] + "'", function(err, rows) {
        if(rows[0].cnt == "0") {
            var sql = "insert into ex_schedule(game_no,league_no,home_team,visit_team,date,center_yn,home_rank,visit_rank,home_score,visit_score,home_red,visit_red,home_yellow,visit_yellow,home_half,visit_half,home_score_all,visit_score_all,weather,insert_dt,live_yn) values('"+id[0]+"','"+id[1]+"','"+id[2]+"','"+id[3]+"','"+(dt.getFullYear()+"-"+(dt.getMonth()+1)+"-"+dt.getDate())+"','"+n+"','"+rank[0]+"','"+rank[1]+"','"+score[0]+"','"+score[1]+"','"+redcard[0]+"','"+redcard[1]+"','"+yellowcard[0]+"','"+yellowcard[1]+"','"+half[0]+"','"+half[1]+"','"+scoreall[0]+"','"+scoreall[1]+"','"+weather+"',now(),'Y')";
            con.query(sql, function(err) {
                console.log(sql);
            });
        } else {
            var sql = "update ex_schedule set date='"+(dt.getFullYear()+"-"+(dt.getMonth()+1)+"-"+dt.getDate())+"',center_yn='"+n+"',home_rank='"+rank[0]+"',visit_rank='"+rank[1]+"',home_score='"+score[0]+"',visit_score='"+score[1]+"',home_red='"+redcard[0]+"',visit_red='"+redcard[1]+"',home_yellow='"+yellowcard[0]+"',visit_yellow='"+yellowcard[1]+"',home_half='"+half[0]+"',visit_half='"+half[1]+"',home_score_all='"+scoreall[0]+"',visit_score_all='"+scoreall[1]+"',weather='"+weather+"',live_yn='Y' where game_no='"+id[0]+"'";
            con.query(sql, function(err) {
//                console.log(sql);
            });
        }
    });
}
function competition_query(key, name, shortname, color) {
    con.query("select count(*) as cnt from ex_league where league_id='" + key + "'", function(err, rows) {
        if(rows[0].cnt == "0") {
            var sql = "insert into ex_league(league_id,name,short_name,color,insert_dt) values('"+key+"','"+name+"','"+shortname+"','"+color+"',now())";
            con.query(sql, function(err) {
                console.log(sql);
            });
        } else {
            var sql = "update ex_league set name='"+name+"',short_name='"+shortname+",color='"+color+"' where league_id='" + key + "'";
            con.query(sql, function(err) {
                console.log(sql);
            });
        }
    });
}
function team_query(key, name, shortname) {
    con.query("select count(*) as cnt from ex_team where team_id='" + key + "'", function(err, rows) {
        if(rows[0].cnt == "0") {
            var sql = "insert into ex_team(team_id,name,short_name,insert_dt) values('"+key+"','"+name+"','"+shortname+"',now())";
            con.query(sql, function(err) {
                console.log(sql);
            });
        } else {
            var sql = "update ex_team set name='"+name+"',short_name='"+shortname+"' where team_id='" + key + "'";
            con.query(sql, function(err) {
                console.log(sql);
            });
        }
    });
}