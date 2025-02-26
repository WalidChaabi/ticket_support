<?php
class TicketUser_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_all_users() {
        return $this->db->get('ticket_users')->result();
    }

    public function get_user_by_id($id) {
        return $this->db->get_where('ticket_users', ['id' => $id])->row();
    }

    public function create_user($data) {
        return $this->db->insert('ticket_users', $data);
    }

    public function update_user($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('ticket_users', $data);
    }

    public function delete_user($id) {
        return $this->db->delete('ticket_users', ['id' => $id]);
    }
	
	public function login($email, $password) {
        // Query the database to check if the credentials match
        $this->db->where('email', $email);
        $query = $this->db->get('ticket_users');

        // Check if a matching record is found
        if ($query->num_rows() == 1) {
            $user = $query->row();

            // Verify password (assuming it's hashed)
            if (password_verify($password, $user->password)) {
                return $user;  // Return the user record if authentication is successful
            }
        }

        return FALSE;  // Return FALSE if credentials don't match
    }
}
?>
