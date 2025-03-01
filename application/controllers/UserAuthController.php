<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserAuthController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('TicketUser_model');
        $this->load->library('session');
        $this->load->helper('url');
    }

    public function login() {
        $this->load->view('auth/user_login');
    }

    public function do_login() {
        $login = $this->input->post('login');
        $password = $this->input->post('password');

        $user = $this->TicketUser_model->get_user_by_login($login);

        if ($user && password_verify($password, $user->password)) {
            $session_data = [
                'user_id' => $user->id,
                'role' => 'user',
                'logged_in' => TRUE
            ];
            $this->session->set_userdata($session_data);
            redirect('user/dashboard');
        } else {
            $this->session->set_flashdata('error', 'Invalid login or password');
            redirect('user/login');
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('user/login');
    }
}
?>
