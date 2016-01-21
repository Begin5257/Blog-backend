/**
 * Created by 83916 on 2015/11/21.
 */
var Width = window.innerWidth;
function onScreenChange() {
    $(document).ready(function () {
        $(window).resize(function () {
            mediaInquire();
        });
    });
}
function mediaInquire() {
        if(Width < 1400){
        var parentsTools = document.getElementById("container");
        var childTools = document.getElementById("tools");
        parentsTools.removeChild(childTools);
        document.getElementById("block").style.width = "100%";
         }
    }


function showSidebar() {
    $(document).ready(function () {
        $("#sidebar").click(function () {
            $("#sidebar-detail").toggle();
        });
    });
}

$(function(){
    var fix = $(".fix"), fixtop = $(".fix-top"), fixStartTop = $(".fix-startTop"), fixStartBottom = $(".fix-startBottom"), fixbottom = $(".fix-bottom"), fixfooter = $(".fix-footer");
    fix.scrollFix();
})


//function showLeftBorder(){
//    $(document).ready(function(){
//        $("#article-h2").mouseenter(function(){
//           $("#border").toggle();
//        });
//    });
//}


showSidebar();

var start = new Date();
start.setFullYear(2015);
start.setMonth(0);
start.setDate(6);
start.setHours(12);
start.setMinutes(16);
start.setSeconds(11);

function memoryTime1(date){
    var current = Date();
    var seconds = (Date.parse(current)-Date.parse(date))/1000;
    var days = Math.floor(seconds/(24*60*60));
    seconds = seconds % (3600 * 24);
    var hours = Math.floor(seconds/(60*60));
    seconds = seconds % 3600;
    var minutes = Math.floor(seconds/60);
    seconds = seconds % 60;
    var result =" "+days+" days" +  hours+" hours"  + minutes+"  minutes" + seconds+" seconds"+" ";
    $("#elapseClock").html(result);
}

setInterval(function(){
    memoryTime1(start)
},500);
















