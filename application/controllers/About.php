<?php

class About extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth_model');
        $this->load->model('data_model');
        if (!$this->auth_model->current_user()) {
            redirect('auth/login');
        }
    }

    public function index()
    {
        $data = [
            "current_user" => $this->auth_model->current_user(),
        ];
        return $this->load->view("about", $data);
    }
}
