<?php if (!defined('BASEPATH'))exit('No direct script access allowed');


class Home extends CI_Controller {

    function __construct() {
      parent::__construct();

		$this->load->database();
		$this->load->library('session');
    }

    function feature(){
      $this->load->view('backend/feature');

  }
  function pricing(){
    $this->load->view('backend/pricing');

}

}
