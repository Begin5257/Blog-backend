/**
 * Created by 83916 on 2015/12/10.
 */
function liStatus(){
    var li = document.getElementsByTagName("li");
    for (var i =0;i<li.length; i++) {
        li[i].index = i;
        li[i].onclick = function () {

            li[this.index].style.color = "red";
            li[this.index].selected = true;
            var k = this.index;
            //传递到下一级时居然可以这么玩
            var num = this.getElementsByTagName("span")[0].innerHTML;
            console.log(num);

            var newLable = document.createElement("input");
            newLable.setAttribute("type","hidden");
            newLable.setAttribute("name","showNum");
            newLable.setAttribute("value",num);

            var element = document.getElementById("putIn");
            element.appendChild(newLable);
            for (var j=0;j<li.length; j++) {
                if(j !== k) {
                    li[j].style.color="#777";
                    li[j].selected = false;
                }
            }
        }
    }
}
liStatus();