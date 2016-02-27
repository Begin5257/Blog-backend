/**
 * Created by begin5257 on 16/2/24.
 */
var express = require('express');
var mongoose =require('mongoose');
var $ = require('jquery');

    $.getJSON('../data.json',function(json){
        var num = json;
        console.log(num);
    });

//askSchema
var itemSchema =mongoose.Schema({
    title:{type:String},
    price:{type:String},
    img:{type:String}
});
var itemModel =mongoose.model('item',itemSchema);

var db=mongoose.connect("mongodb://@127.0.0.1:27017/test");
db.connection.on("error", function (error) {
    console.log("数据库连接失败：" + error);
});
db.connection.on("open", function () {
    console.log("------数据库连接成功！------");
});

exports.itemInsert=function() {
    var Entity = new itemModel(items);
    Entity.save(function (error, doc) {
        if (error) {
            console.log(error);
        } else {
            console.log(doc);
        }
    });
};

//req,res必须这样写= =
exports.itemFind=function(req,res,next){
    itemModel.find({},function(error,doc){
        console.log(doc);
    });
}


