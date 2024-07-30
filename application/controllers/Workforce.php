<?php
class Workforce extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Workforce_model');
    }

    public function index() {
        $data['workforces'] = $this->Workforce_model->get_all();
        $this->load->view('workforce/index', $data);
    }

    public function add() {
        $this->load->view('workforce/add');
    }

    public function create() {
        $data = array(
            'name' => $this->input->post('name'),
            'address' => $this->input->post('address'),
            'description' => $this->input->post('description'),
            'aadhar_number' => $this->input->post('aadhar_number'),
            'mobile_number' => $this->input->post('mobile_number'),
            'status' => $this->input->post('status')
        );
        $this->Workforce_model->insert($data);
        redirect('workforce');
    }

    public function edit($id) {
        $data['workforce'] = $this->Workforce_model->get_by_id($id);
        $this->load->view('workforce/edit', $data);
    }

    public function update($id) {
        $data = array(
            'name' => $this->input->post('name'),
            'address' => $this->input->post('address'),
            'description' => $this->input->post('description'),
            'aadhar_number' => $this->input->post('aadhar_number'),
            'mobile_number' => $this->input->post('mobile_number'),
            'status' => $this->input->post('status')
        );
        $this->Workforce_model->update($id, $data);
        redirect('workforce');
    }

    public function delete($id) {
        $this->Workforce_model->delete($id);
        redirect('workforce');
    }
}