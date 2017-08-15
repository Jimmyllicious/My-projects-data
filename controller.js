var app = angular.module("mainModule", ["ngRoute"]);


app.controller('userController' , function($scope, $http){
	

 });


app.config(function ($routeProvider) {
	$routeProvider
	.when('/',{
		templateUrl : "login.html",
		controller: "loginCtrl"
	})
	.when('/register', {

		templateUrl : "register.html",
		contorller: "registrationCtrl"	
	})
	.when('/forgotpass',{
		templateUrl : "forgotpass.html",
		
	})
	.otherwise({
		redirectTo: '/'
	})

});