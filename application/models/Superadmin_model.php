<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Superadmin_model extends CI_Model {

	function __construct()
    {
        parent::__construct();
    }



    function insert_exhibition(){

        $page_data = array(
            'exhibition_id'             => $this->input->post('exhibition_id'),
            'exhibition_name'           => $this->input->post('exhibition_name'),
            'exhibition_admin_email'    => $this->input->post('exhibition_admin_email'),
			'password'              => sha1($this->input->post('password')),
			'location'              => $this->input->post('location'),
        	'phone'                 => $this->input->post('phone'),
        	'exhibition_email'          => $this->input->post('exhibition_email'),
            'language'              => $this->input->post('language'),
            'text_align'            => $this->input->post('text_align'),
            'skin_colour'           => $this->input->post('skin_colour'),
            'session'               => $this->input->post('session'),
            'footer'                => $this->input->post('footer'),

			);
        $this->db->insert('exhibition', $page_data);



    }


    function update_exhibition($param2){
        $page_data = array(
            'exhibition_name'           => $this->input->post('exhibition_name'),
            'exhibition_admin_email'    => $this->input->post('exhibition_admin_email'),
			'password'              => sha1($this->input->post('password')),
			'location'              => $this->input->post('location'),
        	'phone'                 => $this->input->post('phone'),
        	'exhibition_email'          => $this->input->post('exhibition_email'),
            'language'              => $this->input->post('language'),
            'text_align'            => $this->input->post('text_align'),
            'skin_colour'           => $this->input->post('skin_colour'),
            'session'               => $this->input->post('session'),
            'footer'                => $this->input->post('footer'),
            'paypal_email'          => $this->input->post('paypal_email'),
            'stripe_setting'        => $this->input->post('stripe_setting'),
            'paypal_setting'        => $this->input->post('paypal_setting'),
			);

        $this->db->where('exhibition_id', $param2);
        $this->db->update('exhibition', $page_data);
    }

    function delete_exhibition($param2){
        $this->db->where('exhibition_id', $param2);
        $this->db->delete('exhibition');
    }

    function select_all_the_administrator_from_exhibition_table(){
        $all_selected_administrator = $this->db->get('exhibition');
        return $all_selected_administrator->result_array();

    }



}

