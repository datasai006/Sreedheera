<?php
class Workforce_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
    }

    public function get_all() {
        $query = $this->db->get('tbl_workforce');
        return $query->result_array();
    }

    public function get_by_id($id) {
        $query = $this->db->get_where('tbl_workforce', array('id' => $id));
        return $query->row_array();
    }

    public function insert($data) {
        return $this->db->insert('tbl_workforce', $data);
    }

    public function update($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('tbl_workforce', $data);
    }

    public function delete($id) {
        return $this->db->delete('tbl_workforce', array('id' => $id));
    }
}