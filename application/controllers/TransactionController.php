<?php
/**
 * Created by PhpStorm.
 * User: onik
 * Date: 10/22/17
 * Time: 7:00 PM
 */

class TransactionController extends CI_Controller {
    public function __construct() {
        parent::__construct();

        $this->load->model('Transaction');
        $this->load->model('Balance');
        $this->load->model('User');
    }

    public function index() {
        $this->load->view('Transaction/index');
    }

    public function transactionSubmit() {
        $obj = json_decode(file_get_contents("php://input"));

        $this->Transaction->USER_ID = $obj->userId;
        $this->Transaction->TYPE = $obj->transactionTypeId;
        $this->Transaction->DETAILS = $obj->details;

        $balanceObj = $this->Balance->getByUserId($obj->userId);
        if($obj->transactionTypeId == 1) {
            $balanceObj->BALANCE += +$obj->ammount;
            $this->Transaction->AMOUNT = $obj->ammount;
        }
        else {
            $balanceObj->BALANCE -= +$obj->ammount;
            $this->Transaction->AMOUNT = -$obj->ammount;
        }

        $this->Balance->updateBalance($balanceObj);

        $this->Transaction->saveTransaction();

        header('Content-Type: application/json');
        echo json_encode($obj);
    }

    public function getAllTransactionDetails() {
        $userList = $this->User->load();
        $transactionList = $this->Transaction->getAllTransaction();

        foreach ($transactionList as $transaction) {
            foreach ($userList as $user) {
                if($transaction->USER_ID == $user->USER_ID) {
                    $transaction->USER_NAME = $user->USER_NAME;
                }
            }

            if($transaction->TYPE == 1) {
                $transaction->TYPE_NAME = 'DEPOSIT';
            }
            else if($transaction->TYPE == 2) {
                $transaction->TYPE_NAME = 'WITHDRAW';
            }
            $transaction->DATE = date_format(date_create($transaction->DATE), 'd-m-y h:i A');
        }

        header('Content-Type: application/json');
        echo json_encode($transactionList);
    }
}