<?php
/**
 * Created by PhpStorm.
 * User: onik
 * Date: 10/21/17
 * Time: 3:27 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>BKASH BALANCE</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="stylesheet" href="public/css/bootstrap.min.css">

        <script src="public/js/jquery-3.2.1.slim.min.js"></script>
        <script src="public/js/popper.min.js"></script>
        <script src="public/js/bootstrap.min.js"></script>


        <script src="public/js/angular.min.js"></script>
        <script src="public/js/angular-route.js">"></script>


    </head>

    <body>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#/!">BKASH BALANCE</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                <ul class="nav navbar-nav">
                    <li class="custNav"><a href="#!addUserForm">USER</a></li>
                    <li class="custNav"><a href="#!transaction">TRANSACTION</a></li>
                </ul>
            </div>
        </div>
    </nav>

<!--    <script>-->
<!--        $('.custNav').on('click', function () {-->
<!--            $('.navbar-toggle').click();-->
<!--        });-->
<!--    </script>-->

        <div class="container" style="margin-bottom: 20px;" ng-app="bkashApp">
            <div ng-view></div>
        </div>
    </body>

    <script>
        var app = angular.module("bkashApp", [ "ngRoute" ]);

        app.config(function ($routeProvider) {
            $routeProvider
                .when("/", {
                    templateUrl: "UserController/getUserBalanceView",
                    controller: "UserBalanceController"
                })
                .when("/addUserForm", {
                    templateUrl : "UserController/addUserForm",
                    controller : "UserController"
                })
                .when("/userList", {
                    templateUrl: "UserController/userList",
                    controller: "UserListController"
                })
                .when("/transaction", {
                    templateUrl: "TransactionController",
                    controller: "TransactionController"
                });
        });

    </script>
    <script src="<?php echo base_url(); ?>public/js/User/User.js"></script>
    <script src="<?php echo base_url(); ?>public/js/User/UserList.js"></script>
    <script src="<?php echo base_url(); ?>public/js/User/UserBalance.js"></script>
    <script src="<?php echo base_url(); ?>public/js/Transaction/TransactionController.js"></script>
</html>
