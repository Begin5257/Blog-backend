/**
 * Created by begin5257 on 16/2/27.
 */
var express = require('express');
var router = express.Router();

//var mongo =require('./mongo');

/* GET home page. */
var list = [];
router.post('/home',function(req){
    var content =req.body;
    var str = JSON.stringify(content);
    list.push(str);
    console.log(req.body);
    console.log(list);
});

router.get('/', function(req, res) {
    res.render('home', { title: '我的主页', list: list });
});


module.exports = router;