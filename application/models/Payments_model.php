<?php
class Payments_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // Create a new payment
    public function create($data) {
        return $this->db->insert('tbl_payments', $data);
    }

    // Read all payments
    public function get_all() {
        $query = $this->db->get('tbl_payments');
        return $query->result_array();
    }

    // Read a single payment by ID
    public function get_by_id($id) {
        $query = $this->db->get_where('tbl_payments', array('id' => $id));
        return $query->row_array();
    }

    // Update a payment by ID
    public function update($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('tbl_payments', $data);
    }

    // Delete a payment by ID
    public function delete($id) {
        return $this->db->delete('tbl_payments', array('id' => $id));
    }
}