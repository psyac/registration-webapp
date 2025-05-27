var mysql = require('mysql')

var con = mysql.createConnection
({
    host: "localhost",
    user: "root",
    password: "root@lsc",
    database: "lscregdb"
});

con.connect(function(err){
    if (err) throw err;
    con.query("SELECT * FROM Registrations", function (err,result, fields)
    {
        if (err) throw err;
        console.log(result)
    });
    console.log("Connected");
})