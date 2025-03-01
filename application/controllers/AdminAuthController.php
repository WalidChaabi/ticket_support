<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminAuthController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('TicketAdmin_model');
        $this->load->library('session');
        $this->load->helper('url');
    }

    public function login() {
        $this->load->view('auth/admin_login');
    }

    public function do_login() {
        $login = $this->input->post('login');
        $password = $this->input->post('password');

        $admin = $this->TicketAdmin_model->get_admin_by_login($login);

        if ($admin && password_verify($password, $admin->password)) {
            $session_data = [
                'admin_id' => $admin->id,
                'role' => 'admin',
                'logged_in' => TRUE
            ];
            $this->session->set_userdata($session_data);
            redirect('admin/dashboard');
        } else {
            $this->session->set_flashdata('error', 'Invalid email or password');
            redirect('admin/login');
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('admin/login');
    }
}
?>
