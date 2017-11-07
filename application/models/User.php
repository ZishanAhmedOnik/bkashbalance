<?php
/**
 * Created by PhpStorm.
 * User: onik
 * Date: 10/21/17
 * Time: 6:06 PM
 */

class User extends CI_Model {
    public $USER_ID;
    public $USER_NAME;

    public function newUser() {
        $this->db->insert('USER', $this);

        return $this->db->insert_id();
    }

    public function load() {
        $query = $this->db->get('USER');

        return $query->result();
    }
}