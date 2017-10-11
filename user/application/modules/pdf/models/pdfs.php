<?php
class Pdfs extends CI_Model {
	function __construct(){            
	  	parent::__construct();
		$this->user_id =isset($this->session->get_userdata()['user_details'][0]->id)?$this->session->get_userdata()['user_details'][0]->users_id:'1';
	}

    function all () {
        $results = $this->db->
        select('*')
            ->from('ids_allz')
            ->get();
        return $results->result();
    }
    function user_pdfs ($email = '') {
	    if($email == '') {
            $email = $this->session->userdata('user_details') [0]->email;
        }
        $results = $this->db->
        select('*')
            ->from('ids_allz')
            ->where('email',$email)
            ->get();
        return $results->result();
    }


}