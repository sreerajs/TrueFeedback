/**
 * @fileoverview Main router for Express Application
 * author Jithin Zacharia 
 */

var express = require('express');
var router = express.Router();

router.get('/', function(req, res) {
    res.send("Hello from Etherum server service");
})

module.exports = router;