

app.controller("registrationCtrl", function($scope, registrationFactory){

			//$scope.results;

		//registerUser(firstname, lastname, email, password)

		$scope.registerUser = function(firstname, lastname, email, password)
		{

			var userRegistrationPromise = registrationFactory.userRegistration(firstname, lastname, email, password);

			userRegistrationPromise.then(function(result){

				alert("successful");
				//console.log(result.data)

				//$scope.results = result.data;

				//$state.go('/home')


			}, function(error){


				console.log("not successful");

				//$state.go('/register')

			})


		}

});