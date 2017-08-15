app.factory("registrationFactory", function($q, $http){


			return {

			userRegistration: function(firstname, lastname, email, password)
			{

				var userRegistrationDefer = $q.defer();

				var userDatas = {

					//Key value pair 
					// Matching keys to their values

					'fname' : firstname,
					'lname' : lastname,
					'email': email,
					'passwd': password
					
				}

				$http.defaults.headers.post['Content-Type'] = 'application/x-www-form-urlencoded;charset=UTF-8;';
				$http.post('http://localhost/Absa/APIs/registrationApi.php', userDatas)

				.then(function(data){

					userRegistrationDefer.resolve(data);

				})
				.catch(function(data){

					userRegistrationDefer.reject(data);

				});

				return userRegistrationDefer.promise;

			}

	}




});