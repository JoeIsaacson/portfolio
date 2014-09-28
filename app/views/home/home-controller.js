'use strict';

angular.module('home-controller', ['ngRoute'])

.controller('homeController', function ($scope, $rootScope, $location, $routeParams, $state, $stateParams) {

    $rootScope.location = $state.current.name;

    $rootScope.$on('$stateChangeSuccess', function(event, toState, toParams, fromState, fromParams){
        $rootScope.location = $state.current.name;
    });


});
