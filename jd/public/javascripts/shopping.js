/**
 * Created by begin5257 on 16/2/25.
 */
var app = angular.module("shopping",[]);

app.controller ("shoppingList",function($scope,$http) {
    var num = document.getElementById("getI").innerHTML;
    var price = document.getElementById("total-price");
    $http.get('./data.json')
        .success(function (response) {
            var count = num.split(",");
            //根据服务端传来的商品id展示购物车列表
            $scope.list = [];
            $scope.price = [];
            $scope.title = [];
            for (var i = 0; i < count.length; i++) {
                if (response[count[i]] != undefined) {
                    $scope.items = response[count[i]];
                    $scope.list.push($scope.items);
                    $scope.price.push(Number(response[count[i]].price));
                }
            }

            console.log($scope.price);
            $scope.selected = [];
            $scope.order = [];
            $scope.image = [];
            $scope.sumitem =[];
            //如果商品选中,则价格增加,取消选中后价格减去
            $scope.toggle = function (item1,list1,item2,list2,item3,list3) {
                var idx1 = list1.indexOf(item1);
                if (idx1 > -1) $scope.order.splice(idx1, 1);
                else
                    $scope.order.push(item1);

                console.log($scope.order);

                var idx2 = list2.indexOf(item2);
                if (idx2 > -1) $scope.selected.splice(idx2, 1);
                else
                    $scope.selected.push(item2);

                console.log($scope.selected);

                var idx3 = list3.indexOf(item3);
                if (idx3 > -1) $scope.image.splice(idx3, 1);
                else
                    $scope.image.push(item3);

                console.log($scope.image);


                var sum = 0;
                for(var j=0;j<$scope.selected.length;j++){
                    sum += Number($scope.selected[j]);
                }

                console.log(sum);
                price.innerHTML = sum;
            };

            $scope.exists = function (item1,list1,item2,list2,item3,list3) {
                return list1.indexOf(item1) > -1;
                return list2.indexOf(item2) > -1;
                return list3.indexOf(item3) > -1;

            };
        });

            //全选后所有checkbox状态变为checked,且合计变为所有商品的价格
            $scope.total = function () {
                var check = $(".spot");
                console.log(check.length);
                for (var i = 0; i < check.length; i++) {
                    check[i].checked = true;
                }
            };

            //提交订单
            $scope.submit = function (){
                var order = {
                    title: $scope.order[0],
                    img: $scope.image[0],
                    price: Number(price.innerHTML)
                };
                console.log(order);
                $http.post("/home/home", order)
                    .success(function () {
                        console.log("success~");
                    });
            }
});


