var express = require("express");
var app = express();
var swig = require("swig");


app.use("/public",express.static(__dirname + "/public"));

swig.setDefaults({
  cache: false
})
app.set('view cache', false);

app.set('views','./views/pages/');
app.set('view engine','html');
app.engine('html', swig.renderFile);

app.use("/",require("./router/main"));

app.listen(8081);