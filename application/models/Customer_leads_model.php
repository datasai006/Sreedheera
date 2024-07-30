<?php
class Customer_leads_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    // Create new customer
    public function create_customer($data) {
        return $this->db->insert('tbl_customer_leads', $data);
    }

    // Get all customers
    public function get_all_customers() {
        $query = $this->db->get_where('tbl_customer_leads', array('status' => 'active'));
        return $query->result_array();
    }

    // Get all customers
    public function get_all_customers_by_employee($id) {
        $query = $this->db->get_where('tbl_customer_leads', array('status' => 'active','employee_id' => $id));
        var_dump($this->db->last_query()); exit;
        return $query->result_array();
    }

    // Get customer by ID
    public function get_customer_by_id($id) {
        $query = $this->db->get_where('tbl_customer_leads', array('id' => $id));
        return $query->row_array();
    }

    // Update customer
    public function update_customer($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('tbl_customer_leads', $data);
    }

    // Soft delete customer (set status to inactive)
    public function delete_customer($id) {
        $this->db->where('id', $id);
        return $this->db->update('tbl_customer_leads', array('status' => 'inactive'));
    }

    // Create new customer
    public function entry_lead_call($data) {
        return $this->db->insert('tbl_lead_calls', $data);
    }

    // Get customer by ID
    public function getLeadCallDataByEmpId($id) {
        // $query = $this->db->get_where('tbl_lead_calls', array('employee_id' => $id));
        // // var_dump($query->row_array()); exit;
        // return $query->result();



        $this->db->select('tbl_lead_calls.*, mst_employee.employee_name')
         ->from('tbl_lead_calls')
         ->join('mst_employee', 'tbl_lead_calls.employee_id = mst_employee.sk_employee_id')
         ->where('tbl_lead_calls.lead_id',$id);
   $query = $this->db->get();
   // var_dump($this->db->last_query()); exit;
   return $query->result();
    }

    // Get customer by ID
    public function getLeadCallData($id) {
        $query = $this->db->get_where('tbl_lead_calls', array('lead_id' => $id));
        // var_dump($query->row_array()); exit;
        return $query->result();



        // $this->db->select('tbl_lead_calls.*, mst_employee.employee_name')
        //  ->from('tbl_lead_calls')
        //  ->join('mst_employee', 'tbl_lead_calls.employee_id = mst_employee.sk_employee_id')
        //  ->where('tbl_lead_calls.lead_id',$id);
   // $query = $this->db->get();
   // var_dump($this->db->last_query()); exit;
   // return $query->result();
    }

    // public function getCallDetails($call_id) {
    //     $query = $this->db->get_where('tbl_lead_calls', array('id' => $call_id));
    //     return $query->row_array();


    //     $this->db->select('tbl_lead_calls.*, mst_employee.employee_name, tbl_customer_leads.first_name, tbl_customer_leads.last_name, tbl_customer_leads.phone_number,tbl_customer_leads.preferred_contact_method,tbl_customer_leads.contact_time')
    //      ->from('tbl_lead_calls')
    //      ->join('mst_employee', 'tbl_lead_calls.employee_id = mst_employee.sk_employee_id')
    //      ->where('tbl_lead_calls.lead_id',$id);
    // }
}
?>