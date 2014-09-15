'use strict';

// Declare app level module which depends on views, and components
angular.module('myApp', [
    'ngRoute',
    'myApp.work-controller'
])
.config(['$routeProvider', function($routeProvider, $provide) {

    $routeProvider.otherwise({redirectTo: '/home'});

    $routeProvider.when('/home', {
        templateUrl: 'views/home/home.html'
    });

    $routeProvider.when('/healthyout', {
        templateUrl: 'views/work/healthyout.html',
        controller: 'workController'
    });

    $routeProvider.when('/houseplans', {
        templateUrl: 'views/work/houseplans.html',
        controller: 'workController'
    });

    $routeProvider.when('/ikea', {
        templateUrl: 'views/work/ikea.html',
        controller: 'workController'
    });

}]);
