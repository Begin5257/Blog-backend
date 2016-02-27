var express = require('express');
var router = express.Router();

//var mongo =require('./mongo');

/* GET home page. */
router.get('/', function(req, res, next) {
  res.render('index', { title: '京东' });
});

//router.get('/', mongo.askFind);

module.exports = router;
