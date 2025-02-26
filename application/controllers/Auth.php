<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('TicketAdmin_model');
        $this->load->model('TicketUser_model');
    }

    public function login() {
        if ($this->session->userdata('logged_in')) {
            redirect('dashboard'); // Redirect if already logged in
        }

        // Set validation rules
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() === FALSE) {
            // If validation fails, load the login view
            $this->load->view('auth/login');
        } else {
            // Get form data
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            // Check if admin login
            $admin = $this->TicketAdmin_model->login($email, $password);
            if ($admin) {
                // Admin login successful
                $this->session->set_userdata('logged_in', TRUE);
                $this->session->set_userdata('role', 'admin'); // Set user role
                $this->session->set_userdata('user_id', $admin->id); // Store user ID
                redirect('admin/dashboard'); // Redirect to admin dashboard
            } 
            // Check if user login
            else {
                $user = $this->TicketUser_model->login($email, $password);
                if ($user) {
                    // User login successful
                    $this->session->set_userdata('logged_in', TRUE);
                    $this->session->set_userdata('role', 'user'); // Set user role
                    $this->session->set_userdata('user_id', $user->id); // Store user ID
                    redirect('user/dashboard'); // Redirect to user dashboard
                }
            }

            // Invalid login credentials, show error message
            $this->session->set_flashdata('error', 'Invalid email or password');
            redirect('auth/login');
        }
    }

    public function logout() {
        // Destroy the session to log out
        $this->session->sess_destroy();
        redirect('auth/login'); // Redirect to login page
    }
}
?>
