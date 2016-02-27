/**
 * Created by begin5257 on 16/2/21.
 */
//获取json
var app = angular.module('list', []);

app.controller('listShow', function ($scope, $http) {
    $http.get('./data.json')
        .success(function (response) {
            $scope.items = response;
        });
    $scope.getId = function ($index) {
        console.log($index);
        var id = [$index];
        $http.post("/shopping/shopping", id)
            .success(function () {
                console.log("success~");
            });
    }
});
//图片自动轮播
function autoReturn() {
    $(document).ready(function () {
        var i = 0;
        setInterval(function () {
            i++;
            var img = document.getElementsByClassName("scroll-image");
            var pot = document.getElementsByClassName("spot");
            img[i - 1].style.display = "inline";
            pot[i - 1].style.background = 'white';
            for (var k = 0; k < pot.length; k++) {
                if (k !== i - 1) {
                    pot[k].style.background = 'transparent';
                }
            }
            for (var l = 0; l < img.length; l++) {
                if (l !== i - 1) {
                    img[l].style.display = "none";
                }
            }
            if (i == 5) {
                i = 0;
            }
        }, 3000);
    })
}
autoReturn();

var startX = 0, startY = 0;
var count = [];
//touchstart事件
function touchSatrtFunc(evt) {
    try {
        evt.preventDefault(); //阻止触摸时浏览器的缩放、滚动条滚动等

        var touch = evt.touches[0]; //获取第一个触点
        var x = Number(touch.pageX); //页面触点X坐标
        var y = Number(touch.pageY); //页面触点Y坐标
        count.push(x);
        //记录触点初始位置
        startX = x;
        startY = y;

        var text = 'TouchStart事件触发：（' + x + ', ' + y + '）';
        //console.log(text);
    }
    catch (e) {
        console.log('touchSatrtFunc：' + e.message);
    }
}
//touchmove事件，这个事件无法获取坐标
function touchMoveFunc(evt) {
    try {
        evt.preventDefault(); //阻止触摸时浏览器的缩放、滚动条滚动等
        var touch = evt.touches[0]; //获取第一个触点
        var x = Number(touch.pageX); //页面触点X坐标
        var y = Number(touch.pageY); //页面触点Y坐标

        var text = 'TouchMove事件触发：（' + x + '）';
        //判断滑动方向
        if (x - startX != 0) {
            text += '<br/>左右滑动';
        }
        if (y - startY != 0) {
            text += '<br/>上下滑动';
        }
        //console.log(text);
    }
    catch (e) {
        console.log('touchMoveFunc：' + e.message);
    }
}
var num = [];
//touchend事件
function touchEndFunc(evt) {
    try {
        evt.preventDefault(); //阻止触摸时浏览器的缩放、滚动条滚动等

        var text = 'TouchEnd事件触发';
        var x = evt.changedTouches[0].clientX;
        count.push(x);
        console.log(text);
        console.log(count);
        var img = document.getElementsByClassName("scroll-image");
        var pot = document.getElementsByClassName("spot");
        var i = 0;
        //触摸右滑时,图片向右滚动
        if (count[0] - count[1] > 80) {
            console.log("you");
            i++;
            num.push(i);
            console.log(num.length);
            if (num.length == 5) {
                num = [];
            }
            img[num.length].style.display = "inline";
            pot[num.length].style.background = 'white';
            for (var l = 0; l < img.length; l++) {
                if (l !== num.length) {
                    img[l].style.display = "none";
                }
            }
            for (var k = 0; k < pot.length; k++) {
                if (k !== num.length) {
                    pot[k].style.background = 'transparent';
                }
            }
        }
        //触摸左滑时,图片向左滚动
        if (count[1] - count[0] > 80) {
            console.log("zuo");
            i++;
            if (num.length == 0) {
                num = [1, 1, 1, 1, 1];
            }
            num.pop(i);
            console.log(num.length);
            img[num.length].style.display = "inline";
            pot[num.length].style.background = 'white';
            for (var m = 0; m < img.length; m++) {
                if (m !== num.length) {
                    img[m].style.display = "none";
                }
            }
            for (var n = 0; n < pot.length; n++) {
                if (n !== num.length) {
                    pot[n].style.background = 'transparent';
                }
            }
        }
        count = [];
    }
    catch (e) {
        console.log('touchEndFunc：' + e.message);
    }
}

//绑定事件
var scroll = document.getElementById("scroll-img");
function bindEvent() {
    scroll.addEventListener('touchstart', touchSatrtFunc, false);
    scroll.addEventListener('touchmove', touchMoveFunc, false);
    scroll.addEventListener('touchend', touchEndFunc, false);
}

//判断是否支持触摸事件
function isTouchDevice() {
    console.log(navigator.appVersion);
    try {
        document.createEvent("TouchEvent");
        console.log("支持TouchEvent事件！");

        bindEvent(); //绑定事件
    }
    catch (e) {
        console.log("不支持TouchEvent事件！" + e.message);
    }
}

window.onload = isTouchDevice;
//下滑到固定div nav颜色变深
function changeNav() {
    var div = document.getElementById('quick-nav');
    var nav = document.getElementById('header');
    var container = document.getElementById('jd-container');
    container.onmousewheel = function (event) {
        event = event || window.event;
        if (event.wheelDelta < 0) {
            nav.style.backgroundColor = "rgba(196,0,0,0.8)";
        }
    };
    div.onmousewheel = function (event) {
        event = event || window.event;
        if (event.wheelDelta > 0) {
            nav.style.backgroundColor = "transparent";
        }
    }
}
changeNav();



