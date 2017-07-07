var app = angular.module("app",['ionic','ui.router']);
app.config(function($stateProvider,$urlRouterProvider){
	$urlRouterProvider.otherwise('/home');//打开就在主页面
	//配置路由器
	//主页：
	$stateProvider.state(
			"home",{
				url:'/home',
				templateUrl:"template/home.html",
				controller:"homeController"
			}
		)
	//详情页
	.state('detail',{
		// 此处跳转到详情页，需要通过路由进行传值,把对象的每个信息单独穿过
		url:'/detail/:name/:city/:country/:age',
		templateUrl:'template/detail.html',
		controller:'detailController'
	})
})