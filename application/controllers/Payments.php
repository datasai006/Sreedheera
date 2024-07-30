<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payments extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Payments_model');
         $this->load->model('Project_model');
         $this->load->model('Vendor_model');
          $this->load->model('Employee_model');
    }

    // Display all payments
    public function index() {
        $data['payments'] = $this->Payments_model->get_all();
        $this->load->view('payments/index', $data);
    }

    // Show form to create a new payment
    public function create() {
        $data['vendors'] = $this->Vendor_model->get_all_vendors();
        $data['projects'] = $this->Project_model->get_all_projects();
        $data['employees'] = $this->Employee_model->get_all_employees(); 
            $data['payment_modes'] = [
            'cash' => 'Cash',
            'check' => 'Check',
            'bank_transfer' => 'Bank Transfer',
            'upi' => 'UPI'
        ];
        $this->load->view('payments/Add',$data);
    }

    // Handle form submission to create a new payment
    public function store() {
        $data = array(
            'bill_number' => $this->input->post('bill_number'),
            'payment_ref_no' => $this->input->post('payment_ref_no'),
            'payment_date' => $this->input->post('payment_date'),
            'description' => $this->input->post('description'),
            'payment_towards' => $this->input->post('payment_towards'),
            'payment_category' => $this->input->post('payment_category'),
            'payment_to' => $this->input->post('payment_to'),
            'mode_of_payment' => $this->input->post('mode_of_payment'),
            'amount' => $this->input->post('amount'),
            'transaction_ref_no' => $this->input->post('transaction_ref_no'),
             'created_by' => $this->input->post('created_by') ?: 1, // Default to 1 if not set
        'updated_by' => $this->input->post('updated_by') ?: 1, // Default to 1 if not set
        'approved_by' => $this->input->post('approved_by') ?: 1, 
            // 'status' => $this->input->post('status')
        );
        $this->Payments_model->create($data);
        redirect('payments');
    }

    // Show form to edit a payment
    public function edit($id) {
            $data['payment_modes'] = [
            'cash' => 'Cash',
            'check' => 'Check',
            'bank_transfer' => 'Bank Transfer',
            'upi' => 'UPI'
            // Add more options as needed
        ];
        $data['payment'] = $this->Payments_model->get_by_id($id);
        $this->load->view('payments/edit', $data);
    }

    // Handle form submission to update a payment
    public function update($id) {
        $data = array(
            'bill_number' => $this->input->post('bill_number'),
            'payment_ref_no' => $this->input->post('payment_ref_no'),
            'payment_date' => $this->input->post('payment_date'),
            'description' => $this->input->post('description'),
            'payment_towards' => $this->input->post('payment_towards'),
            'payment_category' => $this->input->post('payment_category'),
            'payment_to' => $this->input->post('payment_to'),
            'mode_of_payment' => $this->input->post('mode_of_payment'),
            'amount' => $this->input->post('amount'),
            'transaction_ref_no' => $this->input->post('transaction_ref_no'),
            'created_by' => $this->input->post('created_by'),
            'updated_by' => $this->input->post('updated_by'),
            'approved_by' => $this->input->post('approved_by'),
            'status' => $this->input->post('status')
        );
        $this->Payments_model->update($id, $data);
        redirect('payments');
    }

    // Delete a payment
    public function delete($id) {
        $this->Payments_model->delete($id);
        redirect('payments');
    }
}