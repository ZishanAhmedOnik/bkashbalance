<?php
/**
 * Created by PhpStorm.
 * User: onik
 * Date: 10/21/17
 * Time: 5:04 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div>
    <h1>USER LIST</h1>

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
