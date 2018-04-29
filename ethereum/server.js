var expres = require('express');
var helmet = require('helmet');
var router = require('./Router/router');
const port = 8000;

var app = expres();
app.use(helmet());
app.use('/', router);

app.listen(port);
console.log("Etherum Service Sever running at" + " " + port);