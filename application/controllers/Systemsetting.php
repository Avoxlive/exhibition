<?php if (!defined('BASEPATH')) exit('No direct script access allowed');



class Systemsetting extends CI_Controller {

    function __construct() {
        parent::__construct();
        		$this->load->database();							// load database library
        		$this->load->library('session');					//Load library for session
                $this->load->model('advertisment_model');

    }
/**default functin, redirects to login page if no admin logged in yet***/
    public function index() {
        	if ($this->session->userdata('admin_login', 'exhibition_id' ) != 1)
            redirect(base_url() . 'login', 'refresh');
        	if ($this->session->userdata('admin_login', 'exhibition_id') == 1)
            redirect(base_url() . 'admin/dashboard', 'refresh');
    }


   /************** Manage system setings  ********************/
	function system_settings($param1 = '', $param2 = '', $param3 = '')
	{
    if ($this->session->userdata('admin_login', ) != 1)
    redirect(base_url() . 'login', 'refresh');
        if ($param1 == 'do_update') {
        $this->crud_model->update_settings();
        $this->session->set_flashdata('flash_message', get_phrase('Data Updated'));
        redirect(base_url(). 'systemsetting/system_settings', 'refresh');
    }
    if ($param1 == 'upload_logo')
	{
       $this->crud_model->system_logo();
       $this->session->set_flashdata('flash_message', get_phrase('settings_updated'));
       redirect(base_url() . 'systemsetting/system_settings', 'refresh');
    }
    if ($param1 == 'themeSettings')
	{
        $this->crud_model->update_themee();
        $this->session->set_flashdata('flash_message', get_phrase('Theme Selected'));
        redirect(base_url() . 'systemsetting/system_settings', 'refresh');
    }
    if ($param1 == 'changetheme')
	{
        $this->crud_model->change_themee($param2);
        $this->session->set_flashdata('flash_message', get_phrase('Theme Selected'));
        redirect(base_url() . 'systemsetting/system_settings', 'refresh');
    }

    if ($param1 == 'changelogo')
	{
        $this->crud_model->change_logo($param2);
        $this->session->set_flashdata('flash_message', get_phrase('Theme Selected'));
        redirect(base_url() . 'systemsetting/system_settings', 'refresh');
    }
    if ($param1 == 'themesecodarySettings')
	{
        $this->crud_model->update_secondary_theme();
        $this->session->set_flashdata('flash_message', get_phrase('Theme Selected'));
        redirect(base_url() . 'systemsetting/system_settings', 'refresh');
    }
    $page_data['page_name']  = 'system_settings';
    $page_data['page_title'] = get_phrase('system_settings');
    $page_data['settings']   = $this->db->get_where('settings', array('exhibition_id' => $exhibition_id))->result_array();
    $this->load->view('backend/index', $page_data);
    }

    function theme_change ($param1 = null, $param2 = null, $param3 = null){
        if($param1 == 'create'){
            $this->crud_model->update_themee();
            $this->session->set_flashdata('flash_message', get_phrase('Theme Selected'));
            redirect(base_url() . 'systemsetting/theme_change', 'refresh');
        }
        if($param1 == 'update'){
            $this->crud_model->update_theme_primary($param2);
            $this->session->set_flashdata('flash_message', get_phrase('Data updated successfully'));
            redirect(base_url() . 'systemsetting/theme_change', 'refresh');
        }
        if($param1 == 'delete'){
            // $this->visitor_model->deleteNewvisitor($param2);
            // $this->session->set_flashdata('flash_message', get_phrase('Data deleted successfully'));
            // redirect(base_url(). 'admin/visitor_information', 'refresh');
        }
        $page_data['page_name']     = 'system_settings';
        // $exhibition_id = $this->session->userdata('exhibition_id');
        $page_data['page_title']    = get_phrase('Manage settings');
        $this->load->view('backend/index', $page_data);
    }

}
