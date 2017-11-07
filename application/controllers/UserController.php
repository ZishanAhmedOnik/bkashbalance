<?php
/**
 * Created by PhpStorm.
 * User: onik
 * Date: 10/21/17
 * Time: 5:01 PM
 */

class UserController extends CI_Controller {
    public function __construct() {
        parent::__construct();

        $this->load->model('User');
        $this->load->model('Balance');
    }

    public function addUserForm() {
        $this->load->view('User/add_user_form');
    }

    public function userList() {
        $this->load->view('User/user_list');
    }

    public function addNewUser($userName) {
        try {
            $this->User->USER_NAME = $userName;
            $userId = $this->User->newUser();

            $this->Balance->USER_ID = $userId;
            $this->Balance->BALANCE = 0.0;
            $this->Balance->newBalance();
        } catch (Exception $e) {
            print_r($e);
            exit;
        }

        echo $userName;
    }

    public function loadAllUser() {
        header('Content-Type: application/json');
        echo json_encode($this->User->load());
    }

    public function getUserBalanceView() {
        $this->load->view('User/user_balance');
    }

    public function loadAllUserWithBalance() {
        header('Content-Type: application/json');

        $users = $this->User->load();
        $balance = $this->Balance->getAll();

        for($i = 0; $i < count($users); $i++) {
            $users[$i]->BALANCE = $balance[$i]->BALANCE;
        }

        echo json_encode($users);
    }
}