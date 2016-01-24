'use strict';

/* Controllers */
  // signin controller
app.controller('LogoutCtrl', ['$scope','$location','$state', function($scope,$location,$state) {
        localStorage.removeItem("email");
         $state.go('access.signin', {});
  }])
;