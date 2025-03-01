<?php
class Ticket_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

	public function get_user_tickets($user_id) {
		$this->db->select('tickets.id, tickets.title, tickets.description, ticket_status.name as status');
		$this->db->from('tickets');
		$this->db->where('tickets.ticket_users_id', $user_id);
		$this->db->join('ticket_status', 'tickets.ticket_status_is = ticket_status.id', 'left');
		$query = $this->db->get();
		return $query->result();
	}	
	
	public function close_ticket($id) {

		$this->db->where('id', $id);
		return $this->db->update('tickets', ['ticket_status_is' => 3]); 
	}

    public function get_ticket_by_id($id) {
        return $this->db->get_where('tickets', ['id' => $id])->row();
    }

    public function create_ticket($data) {
        return $this->db->insert('tickets', $data);
    }

	public function update_ticket($id, $data) {
		$this->db->where('id', $id);
		return $this->db->update('tickets', $data);
	}

    public function delete_ticket($id) {
        return $this->db->delete('tickets', ['id' => $id]);
    }

	public function get_all_tickets() {
		$this->db->select('tickets.id, tickets.title, tickets.description, ticket_status.name as status');
		$this->db->from('tickets');
		$this->db->join('ticket_status', 'tickets.ticket_status_is = ticket_status.id', 'left');
		$query = $this->db->get();
		return $query->result();
	}
}
?>
