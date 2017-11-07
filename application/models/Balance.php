<?php
/**
 * Created by PhpStorm.
 * User: onik
 * Date: 10/22/17
 * Time: 8:09 AM
 */
class Balance extends CI_Model {
    public $BALANCE_ID;
    public $USER_ID;
    public $BALANCE;

    public function newBalance() {
        $this->db->insert('BALANCE', $this);
    }

    public function getAll() {
        $query = $this->db->get('BALANCE');

        return $query->result();
    }

    public function getByUserId($userId) {
        $query = $this->db->get_where('BALANCE', ['USER_ID' => $userId]);

        return $query->row();
    }

    public function updateBalance($data) {
        $this->db->where('BALANCE_ID', $data->BALANCE_ID);
        $this->db->update('BALANCE', $data);
    }
}