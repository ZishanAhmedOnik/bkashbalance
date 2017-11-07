app.controller("TransactionController", function ($scope, $http) {
    $scope.userList = [];
    $scope.transactionDetailsList = [];

    $http.get("UserController/loadAllUser")
        .then(function (resp) {
            angular.copy(resp.data, $scope.userList);
        }, function (err) {
            console.log(err);
        });

    $scope.formSubmit = function () {
        $http({
            method: "POST",
            url: "TransactionController/transactionSubmit",
            headers: {'Content-Type': 'application/json'},
            data: JSON.stringify($scope.transaction)
        }).then(function (resp) {
            console.log(resp.data);
            getAllTransactionDetails();
        }, function (err) {
            console.log(err);
        });
    }

    getAllTransactionDetails = function () {
        $http.get('TransactionController/getAllTransactionDetails')
            .then(function (resp) {
                angular.copy(resp.data, $scope.transactionDetailsList);
            }, function (err) {
                console.log(err);
            });
    }
    getAllTransactionDetails();
});