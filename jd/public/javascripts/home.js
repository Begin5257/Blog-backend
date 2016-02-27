/**
 * Created by begin5257 on 16/2/27.
 */
var app = angular.module("homeApp",[]);
app.controller ("homeCtrl",function($scope) {
    var content = document.getElementById("list").innerHTML;
    var arr = JSON.parse("["+content+"]");
    console.log(content);
    console.log(arr);

    $scope.items = arr;
});