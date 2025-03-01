<?php
class TicketComment_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

	public function insert_ticket_response($ticketId, $response, $ticketAdminId = null, $ticketUserId = null) {
		$data = [
			'tickets_id' => $ticketId,
			'comment' => $response,
		];
	
		// Add admin and user IDs if provided
		if ($ticketAdminId !== null) {
			$data['ticket_admins_id'] = $ticketAdminId;
		}
		if ($ticketUserId !== null) {
			$data['ticket_users_id'] = $ticketUserId;
		}
	
		return $this->db->insert('ticket_comments', $data);
	}
	

    public function get_comments_by_ticket_id($ticket_id) {
        return $this->db->get_where('ticket_comments', ['tickets_id' => $ticket_id])->result();
    }

    public function create_comment($data) {
        return $this->db->insert('ticket_comments', $data);
    }

    public function update_comment($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('ticket_comments', $data);
    }

    public function delete_comment($id) {
        return $this->db->delete('ticket_comments', ['id' => $id]);
    }
}
?>
