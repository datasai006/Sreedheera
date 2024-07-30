<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_all_vendors() {
        return $this->db->get('tbl_vendor')->result_array();
    }    

    public function get_vendor_by_id($id) {
        return $this->db->get_where('tbl_vendor', ['id' => $id])->row_array();
    }

    public function insert_vendor($data) {
        return $this->db->insert('tbl_vendor', $data);
    }

    public function update_vendor($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('tbl_vendor', $data);
    }

    public function delete_vendor($id) {
        $this->db->where('id', $id);
        return $this->db->delete('tbl_vendor');
    }
}