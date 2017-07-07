// 需要接收路由传递进来的参数，所以需要注入$stateParams服务
app.controller("detailController",function($scope,$stateParams){
   	
   	$scope.obj = {
   		Name:$stateParams.name,
   		Country:$stateParams.city,
   		Country:$stateParams.country,
   		Age:$stateParams.age
   	}
   	$scope.goBack=function(){
   		window.history.back();//调用浏览器的返回事件，实现返回到主页
   	}
})