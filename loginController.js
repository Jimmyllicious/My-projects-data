

app.controller('loginCtrl', function($scope, $rootScope, $http, $state, loginFactory){


	// Receives the user identification and password and
	// validate all the fields. 
	// If inserted datas are successful, the function sends
	// datas to the factory and make authentication through
	// the factory. The success message determine wether
	// the login is successful or unsuccessfulvar 

  
	$scope.loginUser = function(userID, password)	{


			var userLoginPromise = loginFactory.userLoginChecking($scope.userID, $scope.password);                                         

			userLoginPromise.then(function(result){

				console.log(result);

				//Test empty datas too

				if (result == "")
				{
					Alert("Invalid credentials", "Login credentials incorrect! Please try again", "error");
				}
				else
				{
					$state.go('/register');

					//Get the identity of the logged in person

					console.log(JSON.stringify(result));

					//This will come from the result which is just a result of the promise

					//$scope.userID = result.userID;
					//$scope.password = result.password;

					console.log("logged in");

				}


			}, function(error){

				sweetAlert("Invalid credentials", "Login credentials incorrect! Please try again", "error");

			});

	}


});