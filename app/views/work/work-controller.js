'use strict';

angular.module('myApp.work-controller', ['ngRoute'])

.controller('workController', ['$scope', function($scope) {

    console.log('controller working!');

    $scope.showWireframes = function(wireframeNumber) {
        console.log('show wireframes!');
        console.log(wireframeNumber);
        $scope.wireframeStatus =! wireframeNumber 
    };

    $scope.wireframeStatus = function(wireframeNumber) {

    };


}]);
