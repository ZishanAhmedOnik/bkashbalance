<?php
/**
 * Created by PhpStorm.
 * User: onik
 * Date: 10/21/17
 * Time: 5:02 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="row">
<div class="col-sm-6">
    <h2 style="text-align: center;">USER LIST</h2>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>USER ID</th>
                <th>USER NAME</th>
            </tr>
        </thead>

        <tbody>
            <tr ng-repeat="user in userList">
                <td>{{ user.USER_ID }}</td>
                <td>{{ user.USER_NAME }}</td>
            </tr>
        </tbody>
    </table>
</div>

<div class="col-sm-6">
    <h2 style="text-align: center;">ADD NEW USER</h2>

    <table class="table table-bordered">
        <tr>
            <td>NAME:</td>
            <td>
                <input type="text" class="form-control" ng-model="userName">
            </td>
        </tr>

        <tr>
            <td></td>
            <td>
                <button class="btn btn-success" ng-click="save()">SAVE</button>
            </td>
        </tr>
    </table>
</div>
</div>