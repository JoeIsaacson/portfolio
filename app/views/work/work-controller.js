'use strict';

angular.module('myApp.work-controller', ['ngRoute'])

.controller('workController', [
    '$scope',
    '$rootScope',
    '$location',
    '$anchorScroll',
    '$routeParams',
    function($scope, $rootScope, $location, $anchorScroll, $routeParams) {

        $scope.wireframeOne = true;
        $scope.wireframeTwo = true;

        $scope.showWireframes = function(wireframeNumber) {
            console.log(wireframeNumber);
            if (wireframeNumber === 'wireframeOne') {
                $scope.wireframeOne = !$scope.wireframeOne;
            } else {
                $scope.wireframeTwo = !$scope.wireframeTwo;
            };
        };

    // $scope.scrollTo = function(id) {
    //     $location.hash(id);
    //     $anchorScroll();
    //     console.log("hellow!");
    // };

  $scope.scrollTo = function(location) {
    $location.hash(location);
    console.log("hello!")
    $anchorScroll();
  };



}]);
