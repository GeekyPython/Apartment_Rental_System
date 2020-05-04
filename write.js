var mysql = require('mysql');
var express = require('express');

var app = express();
var con = mysql.createConnection({
    host:"localhost",
    username: "root@localhost",
    password: "monkey@201",
    database: "arcs"
});

con.connect(function(err){
    if(err) throw err;
    console.log("Connected");
});
