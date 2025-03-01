<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TicketController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('TicketUser_model');
		$this->load->model('Ticket_model');
		$this->load->model('TicketStatus_model');
		$this->load->model('TicketComment_model');
	}

	public function getTickets()
	{
		$user_id = $this->session->userdata('user_id');
		$tickets = $this->Ticket_model->get_user_tickets($user_id);
		echo json_encode($tickets);  // Use $tickets instead of $data['tickets']
	}
	public function getTicketStatus()
	{
		$status = $this->TicketStatus_model->get_all_statuses();
		echo json_encode($status);
	}
	public function createTicket()
	{
		$data = array(
			'title' => $this->input->post('title'),
			'description' => $this->input->post('description'),
			'ticket_status_is' => $this->input->post('ticket_status_is'),
			'ticket_users_id' => $this->input->post('ticket_users_id'),
			'is_closed' => 0 // Default to open
		);

		$insert = $this->Ticket_model->create_ticket($data);

		if ($insert) {
			echo json_encode(["status" => "success"]);
		} else {
			echo json_encode(["status" => "error", "message" => "Failed to create ticket."]);
		}
	}

	public function closeTicket($id)
	{
		// Call the model to close the ticket
		$insert = $this->Ticket_model->close_ticket($id);

		if ($insert) {
			echo json_encode(["status" => "success"]);
		} else {
			echo json_encode(["status" => "error", "message" => "Failed to close ticket."]);
		}
	}


	public function respondToTicket()
	{
		$ticketId = $this->input->post('ticketId');
		$response = $this->input->post('response');
		$ticketAdminId = $this->session->userdata('admin_id'); 
		$ticketUserId = $this->session->userdata('user_id');

		if (empty($ticketId) || empty($response)) {
			echo json_encode(['status' => 'error', 'message' => 'Invalid input.']);
			return;
		}

		// Insert the response into the database
		$insert = $this->TicketComment_model->insert_ticket_response($ticketId, $response, $ticketAdminId, $ticketUserId);

		if ($insert) {
			echo json_encode(['status' => 'success']);
		} else {
			echo json_encode(['status' => 'error', 'message' => 'Failed to submit response.']);
		}
	}
}
