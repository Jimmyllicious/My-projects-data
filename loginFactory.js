app.factory("loginFactory", function($q, $http){


			return {

			userLoginChecking: function(userID, password)
			{

				var userLoginDefer = $q.defer();

				var userData = {

					'userID' : userID,
					'passwd': password
					
				}

				$http.defaults.headers.post['Content-Type'] = 'application/x-www-form-urlencoded;charset=UTF-8;';
				$http.post('http://localhost/Absa/APIs/selectOneApi.php', userData)

				.then(function(data){

					userLoginDefer.resolve(data);

				})
				.catch(function(data){

					userLoginDefer.reject(data);

				});

				return userLoginDefer.promise;

			}

	}




});