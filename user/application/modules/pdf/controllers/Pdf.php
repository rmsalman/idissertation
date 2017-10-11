<?php defined("BASEPATH") OR exit("No direct script access allowed");

class Pdf extends CI_Controller {

  function __construct() {
    parent::__construct();

      // $this->load->model('pdfs');
  }

  /**
     * This function is used to load page view
     * @return Void
     */


    public function index($email = '')
    {
        is_login();
        $result = '';
        if(CheckPermission("users", "own_read")){
	      $result = $this->db->
	      select('*')
	            ->from('ids_allz')
	            ->get();
	      $result->result();
        
        } else {
        
        if($email == '') {
            	$email = $this->session->userdata('user_details') [0]->email;
        }
	        $result = $this->db->
	        select('*')
	            ->from('ids_allz')
	            ->where('email',$email)
	            ->get();
	        $result->result();
        }
        
        $this->load->view('include/header');
        $this->load->view('index', compact('result'));
        $this->load->view('include/footer');
    }


    public function id($id = '')
    {
        is_login();
        $result = '';
        if($id == ''){
            $result = '';
        }else {
            $result = $this->db->
            select('*')
                ->from('ids_allz')
                ->where('id',$id)
                ->get();
            $result->result();
        }
        $this->load->view('include/header');
        $this->load->view('single', compact('result'));
        $this->load->view('include/footer');
    }

    public function admin_edit($id = '')
    {
        is_login();


        if(CheckPermission("users", "own_read") && $id !== ''){


            if($this->input->post()){
                if($this->db->update('ids_allz', $this->input->post() ,'id = '.  $id)){
                    $this->session->set_flashdata('success', 'Sucessfully updated Status for id .'. $id);
                    redirect('pdf');
                }else {
                    $this->session->set_flashdata('failed', 'Sorry could not update data for some reason . '. $id);
                    redirect('pdf');
                }
            }

            $result = $this->db->
            select('*')
                ->from('ids_allz')
                ->where('id',$id)
                ->get();
            $result->result();
            $this->load->view('include/header');
            $this->load->view('admin_edit', compact('result'));
            $this->load->view('include/footer');
        }else {
            redirect('pdf');
        }
    }

    public function edit_status($id = '')
    {
        is_login();
        if(CheckPermission("users", "own_read") && $id !== ''){
            redirect('pdf');
        }else {
            if($this->input->post()){
               if($this->db->update('ids_allz', $this->input->post() ,'id = '.  $id)){
                   $this->session->set_flashdata('success', 'Sucessfully updated Status for id .'. $id);
                   redirect('pdf');
               }else {
                   $this->session->set_flashdata('failed', 'Sorry could not update data for some reason . '. $id);
                   redirect('pdf');
               }
            }

            $result = $this->db->
            select('*')
                ->from('ids_allz')
                ->where('id',$id)
                ->get();
            $result->result();
            $this->load->view('include/header');
            $this->load->view('user_edit', compact('result'));
            $this->load->view('include/footer');
        }
    }
}
?>