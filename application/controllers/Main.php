<?php

class Main extends CI_Controller {
    
    function __construct(){
        parent::__construct();

        // load model
        $this->load->model('Activity_model', '', true);
    }

    public function index(){
        $data['main_content'] = 'frontend/pages/activity_page';
        $data['query'] = $this->Activity_model->get_activity();
        $data['title'] = 'Activity';
        $this->load->view('frontend/templates/default_template', $data);
    }

    public function detail_activity(){
        $data['main_content'] = 'frontend/pages/detail_activity_page';
        $data['title'] = 'Detail Activity';
        $this->load->view('frontend/templates/default_template', $data);
    }
    

    public function login()
    {
        $data['main_content'] = 'frontend/pages/login';
        $data['title'] = 'Login';
        $this->load->view('frontend/templates/default_template', $data);
    }

    public function login_process()
    {
        // รับค่าจากฟอร๋ม
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $result = $this->Activity_model->login($username, $password);

        if ($result) {

            // สร้างตัวแปร array ไว้เก็บ session ของ user ที่ล็อกอินเข้ามา
            $sess_array = array();

            foreach ($result as $row) {
                $sess_array = array(
                    'user_id' => $row->user_id,
                    'username' => $row->username,
                    'password' => $row->password,
                    'email' => $row->email,
                    'role' => $row->role,
                );
            }

            $this->session->set_userdata('logged_in', $sess_array);
            echo "Login success";
            // ส่งไปหน้า dashboard
            redirect('main/index', 'refresh');

            // print_r($sess_array);

        } else {
            redirect('main/login', 'refresh');
        }
    }

    public function register()
    {
        $data['main_content'] = 'frontend/pages/register';
        $data['title'] = 'Register';
        $this->load->view('frontend/templates/default_template', $data);
    }

    public function create_user()
    {
		$data = array(
		'username' => $this->input->post('username'),
		'password' => $this->input->post('password'),
		'email' => $this->input->post('email'),
		'api_id' => $this->input->post('api_id')
		);
       
		$this->Activity_model->insertUser($data);
    }


}
