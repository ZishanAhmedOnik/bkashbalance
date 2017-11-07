<?php
/**
 * Created by PhpStorm.
 * User: onik
 * Date: 10/22/17
 * Time: 8:56 AM
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div>
    <h2 style="text-align: center">BALANCES</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>USER ID</th>
                <th>USER NAME</th>
                <th>BALANCE</th>
            </tr>
        </thead>

        <tbody>
            <tr ng-repeat="user in userBalanceList">
                <td>{{ user.USER_ID }}</td>
                <td>{{ user.USER_NAME }}</td>
                <td>{{ user.BALANCE }}</td>
            </tr>

            <tr>
                <td></td>
                <td>Total</td>
                <td>{{ totalBalance }}</td>
            </tr>

            <tr>
                <td></td>
                <td>Withdrawable</td>
                <td>{{ (totalBalance * 0.9815).toFixed(2) }}</td>
            </tr>
        </tbody>
    </table>
</div>
