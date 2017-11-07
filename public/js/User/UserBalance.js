app.controller('UserBalanceController', function ($scope, $http) {
    $scope.userBalanceList = [];
    $scope.totalBalance = 0;

    $http.get('UserController/loadAllUserWithBalance')
        .then(function (resp) {
            angular.copy(resp.data, $scope.userBalanceList);

            for(var i = 0; i < $scope.userBalanceList.length; i++) {
                $scope.totalBalance += parseFloat($scope.userBalanceList[i].BALANCE);
            }

        }, function (err) {
            console.log(err);
        });
});