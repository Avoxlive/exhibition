<?php if (!defined('BASEPATH'))exit('No direct script access allowed');


class Home extends CI_Controller {

    function __construct() {
      parent::__construct();

		$this->load->database();
		$this->load->library('session');
    }

    function login(){
      $this->load->view('backend/login');
    }

    function feature(){
      $this->load->view('backend/feature');

  }
  function pricing(){
    $this->load->view('backend/pricing');

}
function contactus(){
  $this->load->view('backend/contactus');
}
function signup(){
  $this->load->view('backend/signup');
}
function signin(){
  $this->load->view('backend/signin');
}

}
