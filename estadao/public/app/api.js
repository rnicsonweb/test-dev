.controller('Hello', function($scope, $http) {
    $http.get('http://localhost/api/carros').
        then(function(response) {
            $scope.carros = response.data;
        });
});