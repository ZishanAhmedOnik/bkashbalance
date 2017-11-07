<?php
/**
 * Created by PhpStorm.
 * User: onik
 * Date: 10/23/17
 * Time: 5:37 PM
 */

class Transaction extends CI_Model {
    public $USER_ID;
    public $TYPE;
    public $DETAILS;
    public $AMOUNT;

    public function saveTransaction() {
        $this->db->insert('TRANSACTION', $this);
    }

    public function getAllTransaction() {
        $query = $this->db->get('TRANSACTION');

        return $query->result();
    }
}