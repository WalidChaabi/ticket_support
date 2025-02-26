<?php
class TicketStatus_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_all_statuses() {
        return $this->db->get('ticket_status')->result();
    }

    public function get_status_by_id($id) {
        return $this->db->get_where('ticket_status', ['id' => $id])->row();
    }

    public function create_status($data) {
        return $this->db->insert('ticket_status', $data);
    }

    public function update_status($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('ticket_status', $data);
    }

    public function delete_status($id) {
        return $this->db->delete('ticket_status', ['id' => $id]);
    }
}
?>
