<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Leads extends CI_Controller
{

    var $data = array();

    public function __construct()
    {
        parent::__construct();
        $this->load->model('CommonModel', '', TRUE);
        $this->load->model('Customer_leads_model', '', TRUE);
        $this->load->library('session');
        $this->load->helper('url');
        // Check if user is logged in
        if (!$this->session->userdata('logged_in')) {
            redirect('auth/login');
        }
    }

    /****************Common Data*********************/
    public function common_data()
    {
        date_default_timezone_set('Asia/Kolkata');
        $post_date = date('Y-m-d');
        $post_year = date('Y');
        $timestamp = date("Y-m-d H:i:s");
        $data["post_date"] = $post_date;
        $data["post_year"] = $post_year;
        $data["timestamp"] = $timestamp;
        $data["menu_open"] = "";
        $data["menu_active"] = "";

        // if ($this->session->userdata("employee_session_id") == "" || $this->session->userdata("employee_session_id") == null) {
        //     redirect("auth");
        // }

        $data['employee_session_id'] = "";
        $data['employee_session_email'] = "";
        $data['employee_session_type'] = "";
        $data['employee_session_id'] = $this->session->userdata("employee_session_id");
        $data['employee_session_email'] = $this->session->userdata("employee_session_email");
        $data['employee_session_type'] = $this->session->userdata("employee_session_type");
        $data['employee_session_name'] = $this->session->userdata("employee_session_name");


        return $data;
    }

    

    

    public function create_lead()
    {
        $data = $this->common_data();
        $data['menu_open'] = "employee";
        $data['menu_active'] = "employee_add";
        $data['employeeActiveData'] = $this->CommonModel->getEmployeesActive();
        $this->load->view('leads/create-leads', $data);
    }

    // Create new customer
    public function create() {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $employee_id = $this->session->userdata('employee_id');
        $this->form_validation->set_rules('first_name', 'First Name', 'required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required');
        // $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[tbl_customer.email]');
        $this->form_validation->set_rules('phone_number', 'Phone Number', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('city', 'City', 'required');
        $this->form_validation->set_rules('state', 'State', 'required');
        $this->form_validation->set_rules('zip_code', 'Zip Code', 'required');
        $this->form_validation->set_rules('country', 'Country', 'required');
        $this->form_validation->set_rules('preferred_contact_method', 'Preferred Contact Method', 'required');
        $this->form_validation->set_rules('contact_time', 'Contact Time', 'required');
        $this->form_validation->set_rules('interested_property_type', 'Interested Property Type', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('leads/create-leads');
        } else {
            $data = array(
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'email' => $this->input->post('email'),
                'phone_number' => $this->input->post('phone_number'),
                'address' => $this->input->post('address'),
                'city' => $this->input->post('city'),
                'state' => $this->input->post('state'),
                'zip_code' => $this->input->post('zip_code'),
                'country' => $this->input->post('country'),
                'preferred_contact_method' => $this->input->post('preferred_contact_method'),
                'contact_time' => $this->input->post('contact_time'),
                'interested_property_type' => $this->input->post('interested_property_type'),
                'lead_source' => $this->input->post('lead_source'),
                'employee_id' => $this->input->post('employee_id'),
                'created_by' => $employee_id,
                'status' => 'active'
            );

            $this->Customer_leads_model->create_customer($data);
            redirect('leads/create');
        }
    }

    // Edit customer
    public function edit($id) {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['lead'] = $this->Customer_leads_model->get_customer_by_id($id);

        $data['employeeActiveData'] = $this->CommonModel->getEmployeesActive();

        $this->form_validation->set_rules('first_name', 'First Name', 'required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required');
        // $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('phone_number', 'Phone Number', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('city', 'City', 'required');
        $this->form_validation->set_rules('state', 'State', 'required');
        $this->form_validation->set_rules('zip_code', 'Zip Code', 'required');
        $this->form_validation->set_rules('country', 'Country', 'required');
        $this->form_validation->set_rules('preferred_contact_method', 'Preferred Contact Method', 'required');
        $this->form_validation->set_rules('contact_time', 'Contact Time', 'required');
        $this->form_validation->set_rules('interested_property_type', 'Interested Property Type', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('leads/edit', $data);
        } else {
            $update_data = array(
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'email' => $this->input->post('email'),
                'phone_number' => $this->input->post('phone_number'),
                'address' => $this->input->post('address'),
                'city' => $this->input->post('city'),
                'state' => $this->input->post('state'),
                'zip_code' => $this->input->post('zip_code'),
                'country' => $this->input->post('country'),
                'preferred_contact_method' => $this->input->post('preferred_contact_method'),
                'contact_time' => $this->input->post('contact_time'),
                'interested_property_type' => $this->input->post('interested_property_type'),
                'lead_source' => $this->input->post('lead_source'),
                'employee_id' => $this->input->post('employee_id'),
            );

            $this->Customer_leads_model->update_customer($id, $update_data);
            redirect('leads/view_leads');
        }
    }

    // Delete customer
    public function delete($id) {
        $update_data = array(
                'status' => 'inactive'
            );
        $this->Customer_leads_model->update_customer($id, $update_data);
        redirect('leads/view_leads');
    }


    public function view_leads()
    {
        $data = $this->common_data();
        $data['menu_open'] = "employee";
        $data['menu_active'] = "employee_add";
        $role_id = $this->session->userdata('role_id');
        $employee_id = $this->session->userdata('employee_id');
        if($role_id==4 || $role_id==5){
            $data['leads'] = $this->Customer_leads_model->get_all_customers_by_employee($employee_id);
        }else{
            $data['leads'] = $this->Customer_leads_model->get_all_customers();
        }
        // $data['leads'] = $this->Customer_leads_model->get_all_customers();
        $this->load->view('leads/view-leads', $data);
    }

    public function perform_action_leads($id)
    {
        $data = $this->common_data();

        $role_id = $this->session->userdata('role_id');
        $data['menu_open'] = "employee";
        $data['menu_active'] = "employee_add";
        $data['lead'] = $this->Customer_leads_model->get_customer_by_id($id);
        $data['call'] = $this->Customer_leads_model->getLeadCallDataByEmpId($id);
        // var_dump($data); exit;
        if($role_id==5){
            $this->load->view('leads/sales-leads-action', $data);
        }else{
            $this->load->view('leads/leads-action', $data);
        }
    }

    // Create new customer
    public function entryLeadCall() {
        $this->load->helper('form');
        $this->load->library('form_validation');

        // $this->form_validation->set_rules('first_name', 'First Name', 'required');
        // $this->form_validation->set_rules('last_name', 'Last Name', 'required');
        // $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[tbl_customer.email]');
        // $this->form_validation->set_rules('phone_number', 'Phone Number', 'required');
        // $this->form_validation->set_rules('address', 'Address', 'required');
        // $this->form_validation->set_rules('city', 'City', 'required');
        // $this->form_validation->set_rules('state', 'State', 'required');
        // $this->form_validation->set_rules('zip_code', 'Zip Code', 'required');
        // $this->form_validation->set_rules('country', 'Country', 'required');
        // $this->form_validation->set_rules('preferred_contact_method', 'Preferred Contact Method', 'required');
        // $this->form_validation->set_rules('contact_time', 'Contact Time', 'required');
        // $this->form_validation->set_rules('interested_property_type', 'Interested Property Type', 'required');

        // if ($this->form_validation->run() === FALSE) {
        //     $this->load->view('leads/leads-action');
        // } else {
            $data = array(
                'lead_id' => $this->input->post('lead_id'),
                'employee_id' => $this->input->post('employee_id'),
                'call_status' => $this->input->post('call_status'),
                'schedule_date' => $this->input->post('schedule_date'),
                'schedule_time' => $this->input->post('schedule_time'),
                'interested_property_type' => $this->input->post('interested_property_type'),
                'interested_project' => $this->input->post('interested_project'),
                'remarks' => $this->input->post('remarks'),
                'site_visit_status' => $this->input->post('site_visit_status'),
                'site_visit_schedule_date' => $this->input->post('site_visit_schedule_date'),
                'assign_to' => $this->input->post('assign_to'),
                'assign_to' => $this->input->post('assign_to_employee'),
                'status' => 'active'
            );

            $this->Customer_leads_model->entry_lead_call($data);

            $assign_to = $this->input->post('assign_to');
            if($assign_to!=""){
                $update_data = array(
                    'employee_id' => $this->input->post('assign_to_employee')
                );

                $this->Customer_leads_model->update_customer($this->input->post('lead_id'), $update_data);
            }
            redirect('leads/perform_action_leads/'.$this->input->post('lead_id'));
        // }
    }

    // public function viewLeadCall($call_id) {
    //     $data['call'] = $this->Customer_leads_model->getCallDetails($call_id);
    //     $this->load->view('leads/view', $data);
    // }

    // Create new customer
    public function entryLeadSalesCall() {
        $this->load->helper('form');
        $this->load->library('form_validation');
            $data = array(
                'lead_id' => $this->input->post('lead_id'),
                'employee_id' => $this->input->post('employee_id'),
                'site_visit_status' => $this->input->post('site_visit_status'),
                'site_visit_schedule_date' => $this->input->post('site_visit_schedule_date'),
                'remarks' => $this->input->post('remarks'),
                'status' => 'active'
            );

            $this->Customer_leads_model->entry_lead_call($data);

            $assign_to = $this->input->post('assign_to');
            if($assign_to!=""){
                $update_data = array(
                    'employee_id' => $this->input->post('assign_to_employee')
                );

                $this->Customer_leads_model->update_customer($id, $update_data);
            }
            redirect('leads/perform_action_leads/'.$this->input->post('lead_id'));
        
    }

}