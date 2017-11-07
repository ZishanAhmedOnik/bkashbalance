
app.controller("UserController", function ($scope, $http) {
    $scope.userName = "";
    $scope.userList = [];

    loadUsers();

    $scope.save = function () {
        if($scope.userName != undefined && $scope.userName != "") {
            $http.get('UserController/addNewUser/' + $scope.userName)
                .then(function (resp) {
                    console.log(resp.data);
                    loadUsers();
                }, function (err) {
                    console.log(err);
                });
        }
        else {
            console.log(":/:/");
        }
    }
    
    function loadUsers() {
        $http.get("UserController/loadAllUser")
            .then(function (resp) {
                angular.copy(resp.data, $scope.userList);
                console.log(resp.data);
            }, function (err) {
                console.log(err);
            });
    }
});