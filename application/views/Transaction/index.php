<?php
/**
 * Created by PhpStorm.
 * User: onik
 * Date: 10/22/17
 * Time: 7:04 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="row">
    <div class="col-sm-6">
        <div  style="height: 80vh; overflow-y: auto;">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>DATE</th>
                    <th>USER</th>
                    <th>DETAILS</th>
                    <th>#</th>
                </tr>
            </thead>

            <tbody>
                <tr ng-repeat="transaction in transactionDetailsList">
                    <td>{{ transaction.DATE }}</td>
                    <td>{{ transaction.USER_NAME }}</td>
                    <td>{{ transaction.DETAILS }}</td>
                    <td>{{ transaction.AMOUNT }}</td>
                </tr>
            </tbody>
        </table>
        </div>
    </div>

    <div class="col-sm-6">
        <form>
            <div class="form-group">
                <label for="userId">USER:</label>
                <select name="userId" id="userId" class="form-control" ng-model="transaction.userId">
                    <option ng-repeat="user in userList" value="{{ user.USER_ID }}">
                        {{ user.USER_NAME }}
                    </option>
                </select>
            </div>

            <div class="form-group">
                <label for="transactionTypeId">TRANSACTION TYPE:</label>
                <select name="transactionTypeId"
                        id="transactionTypeId"
                        class="form-control"
                        ng-model="transaction.transactionTypeId">
                    <option value="1">DEPOSIT</option>
                    <option value="2">WITHDRAW</option>
                </select>
            </div>

            <div class="form-group">
                <label for="details">DETAILS:</label>
                <input type="text" class="form-control" id="details" name="details" ng-model="transaction.details"/>
            </div>

            <div class="form-group">
                <label for="ammount">AMMOUNT:</label>
                <input type="number" class="form-control" id="ammount" name="ammount" ng-model="transaction.ammount"/>
            </div>

            <button type="submit" class="btn btn-default" ng-click="formSubmit();">SAVE</button>
        </form>
    </div>
</div>
