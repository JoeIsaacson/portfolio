'use strict';

// Declare app level module which depends on views, and components
angular.module('myApp', [
    'ngRoute',
    'ui.router',
    'home-controller',
    'work-controller'
])
.config(function($stateProvider, $urlRouterProvider) {


    // For any unmatched url, redirect to /state1
    $urlRouterProvider.otherwise("/home/work");

    $stateProvider
        .state('home', {
            url: "/home",
            templateUrl: "views/home/home.tpl.html",
            controller: 'homeController'
        })
        .state('home.work', {
            url: "/work",
            views: {
                'work': {
                    templateUrl: "views/work/_work-overview.tpl.html"
                }
            }
        })
        .state('home.about', {
            url: "/about",
            views: {
                'about': {
                    templateUrl: "views/about/_about.tpl.html"
                }
            }
        })
        .state('crowdsurge', {
            url: "/crowdsurge",
            templateUrl: "views/work/_crowdsurge.tpl.html"
        })
        .state('healthyout', {
            url: "/healthyout",
            templateUrl: "views/work/_healthyout.tpl.html"
        });
});
