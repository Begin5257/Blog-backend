/**
 * Created by 83916 on 2015/11/26.
 */
/**
 * Created by 83916 on 2015/11/21.
 */
//点击sidebar来切换sidebar-detail隐藏/显示
function showSidebar() {
    //点击sidebar图标出现侧边栏.touchstart防止误触
//        $("#sidebar").on("click touchstart",function(e){
//            $("#sidebar-detail").css("display","inline");
//        });
    //再点一下隐藏
    $(document).ready(function () {
        $("#sidebar").click(function () {
            $("#sidebar-detail").toggle();
        });
    });
}
//下滑时固定

//function showLeftBorder(){
//    $(document).ready(function(){
//        $("#article-h2").mouseenter(function(){
//           $("#border").toggle();
//        });
//    });
//}
showSidebar();
//显示日期
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
















