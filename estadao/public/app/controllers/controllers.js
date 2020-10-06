app.controller('HomeCtrl', function($rootScope, $location)
{
   angular.module('aplicacao', []);
angular.module('aplicacao').controller('Rest', function ($scope, $http){
  $http.get('http://localhost/api/carros/1').
      success(function(data) {
          $scope.carros = data;
      }
  );
});
});

app.controller('SobreCtrl', function($rootScope, $location)
{
   $rootScope.activetab = $location.path();
});