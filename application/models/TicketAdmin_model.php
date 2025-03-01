<?php
class TicketAdmin_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_all_admins() {
        return $this->db->get('ticket_admins')->result();
    }

    public function get_admin_by_id($id) {
        return $this->db->get_where('ticket_admins', ['id' => $id])->row();
    }

	public function get_admin_by_login($login) {
        return $this->db->get_where('ticket_admins', ['login' => $login])->row();
    }

    public function create_admin($data) {
        return $this->db->insert('ticket_admins', $data);
    }

    public function update_admin($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('ticket_admins', $data);
    }

    public function delete_admin($id) {
        return $this->db->delete('ticket_admins', ['id' => $id]);
    }
	
	public function login($email, $password) {
        // Query the database to check if the credentials match
        $this->db->where('email', $email);
        $query = $this->db->get('ticket_admins');

        // Check if a matching record is found
        if ($query->num_rows() == 1) {
            $admin = $query->row();

            // Verify password (assuming it's hashed)
            if (password_verify($password, $admin->password)) {
                return $admin;  // Return the admin record if authentication is successful
            }
        }

        return FALSE;  // Return FALSE if credentials don't match
    }
}
?>
