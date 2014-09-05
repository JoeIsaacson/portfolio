'use strict';

// Declare app level module which depends on views, and components
angular.module('myApp', [
    'ngRoute'
]).
config(['$routeProvider', function($routeProvider) {

    $routeProvider.otherwise({redirectTo: '/home'});

    $routeProvider.when('/home', {
        templateUrl: 'views/home/home.html'
    });

    $routeProvider.when('/healthyout', {
        templateUrl: 'views/work/healthyout.html'
    });

    $routeProvider.when('/houseplans', {
        templateUrl: 'views/work/houseplans.html',
    });

    $routeProvider.when('/ikea', {
        templateUrl: 'views/work/ikea.html',
    });

}]);
