<?php


class Backend extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }
    
    public function dashboard(){
        if($this->session->userdata('logged_in')){
         
            $data['user_data'] = $this->db->order_by('user_id', 'asc')
            ->select('*')
            ->where('api_id', '1')
            ->from('users')
            ->get()
            ->result();

           
            $data['main_content'] = 'backend/pages/dashboard';
            $data['title'] = 'รายชื่อผู้ใช้งาน';
            $this->load->view('backend/templates/admin_template', $data);


        }else{
            redirect(base_url() . 'main/login', 'refresh');
        }
    }

    public function logout(){
        // destroy session
        $this->session->unset_userdata('logged_in');
        session_destroy();
        redirect(base_url() . 'main/login', 'refresh');
    }
}