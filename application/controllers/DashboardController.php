<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('TicketUser_model');
        $this->load->model('Ticket_model');

        // Ensure user is logged in
        if (!$this->session->userdata('logged_in')) {
            redirect('auth/login');
        }
    }

    public function indexUser() {
        $user_id = $this->session->userdata('user_id');
        $data['tickets'] = $this->TicketUser_model->get_user_tickets($user_id);
        $this->load->view('user/dashboard', $data);
    }
    public function indexAdmin() {
        $data['tickets'] = $this->Ticket_model->get_all_tickets();
        $this->load->view('admin/dashboard', $data);
    }

}
