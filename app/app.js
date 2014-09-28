'use strict';

// Declare app level module which depends on views, and components
angular.module('myApp', [
    'ngRoute',
    'ui.router',
    'work-controller',
    'home-controller'
])
.config(function($stateProvider, $urlRouterProvider) {

    // For any unmatched url, redirect to /state1
    $urlRouterProvider.otherwise("/home");

    $stateProvider
        .state('home', {
            url: "/home",
            templateUrl: "views/home/home.tpl.html",
            controller: 'homeController'
        })
        .state('home.about', {
            url: "/about",
            views: {
                'about': {
                    templateUrl: "views/about/_about.tpl.html"
                }
            }
        })
        .state('home.healthyOut', {
            url: "/healthyout",
            views: {
                'about': {
                    templateUrl: "views/about/_about.tpl.html"
                }
            }
        });


    // $routeProvider.otherwise({redirectTo: '/home'});

    // $routeProvider.when('/home', {
    //     templateUrl: 'views/home/home.html'
    // });
    //
    // $routeProvider.when('/healthyout', {
    //     templateUrl: 'views/work/healthyout.html',
    //     controller: 'workController'
    // });
    //
    // $routeProvider.when('/houseplans', {
    //     templateUrl: 'views/work/houseplans.html',
    //     controller: 'workController'
    // });
    //
    // $routeProvider.when('/ikea', {
    //     templateUrl: 'views/work/ikea.html',
    //     controller: 'workController'
    // });

});
