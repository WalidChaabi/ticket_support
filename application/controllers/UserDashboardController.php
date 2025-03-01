<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserDashboardController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('TicketUser_model');

        // Ensure user is logged in
        if (!$this->session->userdata('logged_in')) {
            redirect('auth/login');
        }
    }

    public function index() {
        $user_id = $this->session->userdata('user_id');
        $data['tickets'] = $this->TicketUser_model->get_user_tickets($user_id);
        $this->load->view('user/dashboard', $data);
    }

    public function create_ticket() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
        
        if ($this->form_validation->run() === FALSE) {
            $this->session->set_flashdata('error', 'All fields are required.');
            redirect('dashboard');
        } else {
            $ticket_data = [
                'user_id' => $this->session->userdata('user_id'),
                'title' => $this->input->post('title'),
                'description' => $this->input->post('description'),
                'status' => 'open',
                'created_at' => date('Y-m-d H:i:s')
            ];
            $this->TicketUser_model->create_ticket($ticket_data);
            $this->session->set_flashdata('success', 'Ticket created successfully.');
            redirect('dashboard');
        }
    }

    public function respond_ticket($ticket_id) {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('response', 'Response', 'required');
        
        if ($this->form_validation->run() === FALSE) {
            $this->session->set_flashdata('error', 'Response cannot be empty.');
            redirect('dashboard');
        } else {
            $response_data = [
                'ticket_id' => $ticket_id,
                'user_id' => $this->session->userdata('user_id'),
                'response' => $this->input->post('response'),
                'created_at' => date('Y-m-d H:i:s')
            ];
            $this->TicketUser_model->add_response($response_data);
            $this->session->set_flashdata('success', 'Response added successfully.');
            redirect('dashboard');
        }
    }
}
