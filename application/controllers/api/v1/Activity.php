<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Activity extends CI_Controller {
    function __construct(){
        parent::__construct();
    }

    // GET METHOD

    // http://localhost/register_activity/index.php/api/v1/activity/activity_list
    public function activity_list(){
        $result = $this->db->select('*')->from('dt_activity')->get()->result();

        echo json_encode($result);
    }

    // POST METHOD

    // http://localhost/register_activity/index.php/api/v1/activity/activity_create
    public function activity_create(){
        // รับค่าจาก client
        $inputJSON = file_get_contents('php://input');

        // แปล json เป็น array ---->> json_decode() <<------
        $input = json_decode($inputJSON, true);
        // print_r($input);
        // exit();

        $activity_data = array(
            'title' => $input['title'],
            'description' => $input['description'],
            'img' => $input['img']
        );

        $this->db->insert('dt_activity', $activity_data);

        if($this->db->affected_rows() > 0){
            echo '{"Success": {"text": "Add new activity success"}}';
        }else {
            echo '{"Error": {"text": "Add new activity fail"}}';
        }
    }

    // PUT METHOD

    // http://localhost/register_activity/index.php/api/v1/activity/activity_update
    public function activity_update($id){
        // รับค่าจาก client
        $inputJSON = file_get_contents('php://input');

        // แปลง JSON เป็น array
        $input = json_decode($inputJSON, true);

        $where_activity_data = array(
            'dt_id' => $dt_id
        );

        $activity_data = array(
            'title' => $input['title'],
            'description' => $input['description'],
            'img' => $input['img']
        );

        $this->db->where($where_activity_data);
        $this->db->update('dt_activity', $activity_data);

        if($this->db->affected_rows() > 0){
            echo '{"Success": {"text": "Update activity success"}}';
        }else {
            echo '{"Error": {"text": "Update activity fail"}}';
        }
    }

    // DELETE METHOD

    // http://localhost/register_activity/index.php/api/v1/activity/activity_delete
    public function activity_delete($dt_id){
        $where_activity_data = array(
            'dt_id' => $dt_id
        );

        $this->db->where($where_activity_data);
        $this->db->delete('dt_activity');

        if($this->db->affected_rows() > 0){
            echo '{"Success":{"text":"Deleted activity success"}}';
        }else{
            echo '{"Error":{"text":"Deleted activity fail"}}';

        }

    }



}