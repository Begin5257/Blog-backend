var express = require('express');
var router = express.Router();

//var mongo =require('./mongo');

/* GET home page. */
var getID =[];
router.post('/shopping',function(req,res,next){
  var id =req.body;
  getID.push(id);
  console.log(req.body);
});

router.get('/', function(req, res, next) {
  res.render('shopping', { title: '购物车', ID: getID });
});
module.exports = router;