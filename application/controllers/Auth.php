<?php

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth_model');
    }

    public function index()
    {
        redirect('auth/login');
    }

    public function login()
    {
        if ($this->auth_model->current_user()) {
            redirect('dashboard');
        }
        $this->load->model('auth_model');
        $this->load->library('form_validation');

        $rules = $this->auth_model->rules();
        $this->form_validation->set_rules($rules);

        if ($this->form_validation->run() == FALSE) {
            return $this->load->view('auth/login');
        }

        $email = $this->input->post('email');
        $password = $this->input->post('password');

        if ($this->auth_model->login($email, $password)) {
            redirect('dashboard');
        } else {
            $this->session->set_flashdata('message_login_error', 'Login gagal!, pastikan username dan password benar!');
        }

        $this->load->view('auth/login');
    }

    public function register()
    {
        if ($this->auth_model->current_user()) {
            redirect('dashboard');
        }
        return $this->load->view("register");
    }

    public function logout()
    {
        $this->load->model('auth_model');
        $this->auth_model->logout();
        redirect(site_url());
    }
}
