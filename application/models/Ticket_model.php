<?php
class Ticket_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_all_tickets() {
        return $this->db->get('tickets')->result();
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
}
?>
