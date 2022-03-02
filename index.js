var http = require('http');
var express = require('express');
var bodyParser = require('body-parser');
var app = express();
var port = 8080;

// koneksi ke database
var mysql = require('mysql');
var db = mysql.createConnection({
    host: "localhost",
    user: "root",
    password: "19KK23O15P",
    database:"ewarning_system"
});
db.connect(function(err) {
    if (err) throw err;
    console.log("Connected!");
});