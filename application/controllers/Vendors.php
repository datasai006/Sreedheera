<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendors extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Vendor_model');
    }

    public function index() {
        $data['vendors'] = $this->Vendor_model->get_all_vendors();
        $this->load->view('vendors/index', $data);
    }

    public function create() {
        $this->load->view('vendors/create');
    }

    public function store() {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email_id', 'Email ID', 'required|valid_email');
        $this->form_validation->set_rules('mobile', 'Mobile', 'required');
        // Add more validation rules as needed

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('vendors/create');
        } else {
            $data = array(
                'name' => $this->input->post('name'),
                'email_id' => $this->input->post('email_id'),
                'mobile' => $this->input->post('mobile'),
                'gst_number' => $this->input->post('gst_number'),
                'gst_state' => $this->input->post('gst_state'),
                'pan' => $this->input->post('pan'),
                'tds_percentage' => $this->input->post('tds_percentage'),
                'billing_address' => $this->input->post('billing_address'),
                'created_by' => 1, // example user ID
                'updated_by' => 1 // example user ID
            );

            $this->Vendor_model->insert_vendor($data);
            redirect('vendors');
        }
    }

    public function edit($id) {
        $data['vendor'] = $this->Vendor_model->get_vendor_by_id($id);
        $this->load->view('vendors/edit', $data);
    }

    public function update($id) {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email_id', 'Email ID', 'required|valid_email');
        $this->form_validation->set_rules('mobile', 'Mobile', 'required');
        // Add more validation rules as needed

        if ($this->form_validation->run() == FALSE) {
            $data['vendor'] = $this->Vendor_model->get_vendor_by_id($id);
            $this->load->view('vendors/edit', $data);
        } else {
            $data = array(
                'name' => $this->input->post('name'),
                'email_id' => $this->input->post('email_id'),
                'mobile' => $this->input->post('mobile'),
                'gst_number' => $this->input->post('gst_number'),
                'gst_state' => $this->input->post('gst_state'),
                'pan' => $this->input->post('pan'),
                'tds_percentage' => $this->input->post('tds_percentage'),
                'billing_address' => $this->input->post('billing_address'),
                'updated_by' => 1 // example user ID
            );

            $this->Vendor_model->update_vendor($id, $data);
            redirect('vendors');
        }
    }

    public function delete($id) {
        $this->Vendor_model->delete_vendor($id);
        redirect('vendors');
    }
}