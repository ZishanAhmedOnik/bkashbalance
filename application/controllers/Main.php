<?php
/**
 * Created by PhpStorm.
 * User: onik
 * Date: 10/21/17
 * Time: 3:29 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
    public function index() {
        $this->load->view('main');
    }
}