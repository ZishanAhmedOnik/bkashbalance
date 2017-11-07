
app.controller('UserListController', function ($scope, $http) {
    $scope.userList = [];

    $http.get("UserController/loadAllUser")
        .then(function (resp) {
            angular.copy(resp.data, $scope.userList);
        }, function (err) {
            console.log(err);
        })
});