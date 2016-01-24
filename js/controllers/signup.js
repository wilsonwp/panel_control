'use strict';

// signup controller
app.controller('SignupFormController', ['$scope', '$http','$state','SignResource','toaster','multipartForm','EquiposResource', function($scope, $http, $state,SignResource,toaster,multipartForm,EquiposResource) {
    $scope.user = {};
    $scope.equipos = EquiposResource.query();
    $scope.customer = {};
    $scope.toaster = {
        type: 'success',
        title: 'Exito',
        text: 'Usuario Registrado con Exito'
    };
    $scope.authError = null;
    $scope.signup = function($response) {
            console.log($scope.user);
            var uploadUrl='http://localhost:8000/hinchas';
            multipartForm.post(uploadUrl,$scope.user);
            $scope.pop();
            
        
    }
     $scope.pop = function(){
        toaster.pop($scope.toaster.type, $scope.toaster.title, $scope.toaster.text);
    };
    
   

  }])
 ;