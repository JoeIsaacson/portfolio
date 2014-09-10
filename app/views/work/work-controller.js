'use strict';

angular.module('myApp.work-controller', ['ngRoute'])

.controller('workController', ['$scope', function($scope) {


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


}]);
