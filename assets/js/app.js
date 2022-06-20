//const express = require('express');
const mysql = require('mysql');

// Create a connection
const db = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: 'root',
    database: 'onlinecourses'
});

db.connect((err) => {
    if(err) throw err;
    console.log('My SQL Connected.....')
});

//const app = express();

//app.listen('3000', () => {
 //   console.log('Server started on port 3000');
//});

let query = db.query(`INSERT INTO student VALUES (3, 'gazzar', '14123123', 'gazar@gmail.com', 'gazara123')`, (err, results) => {
    if(err) throw err;
    console.log(results);
});

