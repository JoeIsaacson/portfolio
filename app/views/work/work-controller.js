'use strict';

angular.module('myApp.work-controller', ['ngRoute'])

.controller('workController', [
    '$scope',
    '$rootScope',
    '$location',
    '$anchorScroll',
    '$routeParams',
    function($scope, $rootScope, $location, $routeParams) {

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

        $scope.scrollTo = function(id) {
            console.log('id');
            $location.hash(id);
        };
}]);
