<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Employee extends CI_Controller
{

    var $data = array();

    public function __construct()
    {
        parent::__construct();
        $this->load->model('CommonModel', '', TRUE);
        $this->load->library('session');
        $this->load->helper('url');
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

    public function employee_add()
    {
        $data = $this->common_data();
        $data['menu_open'] = "employee";
        $data['menu_active'] = "employee_add";

        $data['countryData'] = $this->CommonModel->getDetails('mst_geo_country', 'sk_country_id', 'All');
        $data['designationData'] = $this->CommonModel->getDetails('mst_employee_designation', 'sk_designation_id', 'All');
        $data['departmentData'] = $this->CommonModel->getDetails('mst_department', 'department_status', '1');
        $data['getRole']=$this->CommonModel->getRole("");
        $this->load->view('employee/employee-add', $data);
    }

    public function employee_save()
    {
        $data = $this->common_data();
        $employee_type = "";
        $designation = "";
        $department = "";
        $employee_code = "";
        $doj = "";
        $doj1 = "";
        $qualification = "";
        $experience = "";
        $employee_name = "";
        $dob = "";
        $dob1 = "";
        $religion = "";
        $mobile = "";
        $aadhar = "";
        $driving_licence = "";
        $blood_group = "";
        $gender = "";
        $father_name = "";
        $mother_name = "";
        $country = "";
        $state = "";
        $place = "";
        $permanent_address = "";
        $residence_country = "";
        $residence_state = "";
        $residence_place = "";
        $residence_address = "";
        $emergency_name = "";
        $emergency_no = "";
        $contact_address = "";
        $employee_type = $this->input->post('employee_type');
        $designation = $this->input->post('designation');
        $department = $this->input->post('department');
        $employee_code = $this->input->post('employee_code');
        $doj1 = strtotime($this->input->post('doj'));
        $qualification = $this->input->post('qualification');
        $experience = $this->input->post('experience');
        $esi = $this->input->post('esi');
        $pf = $this->input->post('pf');

        $insurance = $this->input->post('insurance');
        $skill_type = $this->input->post('skill_type');
        $category = $this->input->post('category');

        $employee_name = $this->input->post('employee_name');
        $dob1 = strtotime($this->input->post('dob'));
        $religion = $this->input->post('religion');

        $nationality = $this->input->post('nationality');
        $caste = $this->input->post('caste');
        $martial_status = $this->input->post('martial_status');
        $resident_status = $this->input->post('resident_status');
        $physically_handicaped = $this->input->post('physically_handicaped');


        $mobile = $this->input->post('mobile');
        $email = $this->input->post('email');
        $aadhar = $this->input->post('aadhar');
        $driving_licence = $this->input->post('driving_licence');
        $blood_group = $this->input->post('blood_group');
        $gender = $this->input->post('gender');
        $father_name = $this->input->post('father_name');
        $mother_name = $this->input->post('mother_name');
        $country = $this->input->post('country');
        $state = $this->input->post('state');
        $place = $this->input->post('place');

        $pincode = $this->input->post('pincode');

        $permanent_address = $this->input->post('permanent_address');
        $residence_country = $this->input->post('residence_country');
        $residence_state = $this->input->post('residence_state');
        $residence_place = $this->input->post('residence_place');

        $residence_pincode = $this->input->post('residence_pincode');

        $residence_address = $this->input->post('residence_address');
        $emergency_name = $this->input->post('emergency_name');
        $emergency_no = $this->input->post('emergency_no');
        $contact_address = $this->input->post('contact_address');

        $date = date('Y-m-h');

        $dob = date("Y-m-d", $dob1);
        $doj = date("Y-m-d", $doj1);


        $sk_employee_id = $this->CommonModel->getMax('mst_employee', 'sk_employee_id');

        $picname = "";
        $allowedExts = array('png', 'jpg', 'jpeg');
        $temp = explode(".", $_FILES["employee_pic"]["name"]);

        $extension = end($temp);

        if (in_array($extension, $allowedExts) === false) {
            $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
        }
        if (empty($errors) == true) {
            $path = "uploads/employee/";

            $picname = $sk_employee_id . "." . $extension;
            move_uploaded_file($_FILES["employee_pic"]["tmp_name"], $path . $picname);
        }

        $employee_save_data = array(
            'employee_type' => $employee_type,
            'designation' => $designation,
            'department' => $department,
            'employee_code' => $employee_code,
            'doj' => $doj,
            'qualification' => $qualification,
            'experience' => $experience,
            'esi' => $esi,
            'pf' => $pf,
            'insurance' => $insurance,
            'skill_type' => $skill_type,
            'category' => $category,
            'employee_name' => $employee_name,
            'dob' => $dob,
            'religion' => $religion,
            'nationality' => $nationality,
            'caste' => $caste,
            'martial_status' => $martial_status,
            'resident_status' => $resident_status,
            'physically_handicaped' => $physically_handicaped,
            'mobile' => $mobile,
            'email' => $email,
            'employee_pic' => $picname,
            'aadhar' => $aadhar,
            'driving_licence' => $driving_licence,
            'blood_group' => $blood_group,
            'gender' => $gender,
            'father_name' => $father_name,
            'mother_name' => $mother_name,
            'country' => $country,
            'state' => $state,
            'place' => $place,
            'pincode' => $pincode,
            'permanent_address' => $permanent_address,
            'residence_country' => $residence_country,
            'residence_state' => $residence_state,
            'residence_place' => $residence_place,
            'residence_pincode' => $residence_pincode,
            'residence_address' => $residence_address,
            'emergency_name' => $emergency_name,
            'emergency_no' => $emergency_no,
            'contact_address' => $contact_address,
            'login_status' => 1,
            'login_password' => 'sme',
            'resignation_date' => $date,
            'employee_status' => 1
        );
        $employee_id = $this->CommonModel->save($employee_save_data, 'mst_employee');
        // $userdata  = array('username' => $email,
        //     'email' => $email,
        //     'password' => md5($password),
        //     'employee_id' => $employee_id
        //      );

        $userdata = array(
                'name' => $employee_name,
                'username' => $this->input->post('username'),
                'email' => $email,
                'mobile' => $this->input->post('mobile'),
                'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
                'employee_id' => $employee_id,
                'role_id'=>$this->input->post('role_id'),
                'status' => 'active'
            );
        $this->CommonModel->save($userdata, 'tbl_users');

        redirect(base_url() . "employee/employee_add");
    }

    function employee_view()
    {
        $data = $this->common_data();
        $data['menu_open'] = "employee";
        $data['menu_active'] = "employee_view";

        $data['employeeActiveData'] = $this->CommonModel->getEmployeesActive();
        $data['employeeInActiveData'] = $this->CommonModel->getEmployeesInActive();
        $this->load->view('employee/employee-view', $data);
    }

    function employee_today()
    {
        $data = $this->common_data();
        $data['menu_open'] = "employee";
        $data['menu_active'] = "employee_today";

        $data['employeeData'] = $this->CommonModel->getEmployeeToday();
        //$data['employeeData']=
        $this->load->view('employee/employee-today', $data);
    }

    function employeeManage()
    {
        $data = $this->common_data();
        $data['menu_open'] = "employee";
        $data['menu_active'] = "employee_view";

        $operation = $this->uri->segment(3);
        $employee_id = base64_decode($this->uri->segment(4));

        if ($operation == 'edit') {
            $data['countryData'] = $this->CommonModel->getDetails('mst_geo_country', 'sk_country_id', 'All');
            $data['designationData'] = $this->CommonModel->getDetails('mst_employee_designation', 'sk_designation_id', 'All');
            $data['employeeData'] = $this->CommonModel->getDetails('mst_employee', 'sk_employee_id', $employee_id);

            $data['departmentData'] = $this->CommonModel->getDetails('mst_department', 'department_status', '1');
            $data['getRole']=$this->CommonModel->getRole("");
            $filter = "employee_id=".$employee_id;

            $data['getUser']=$this->CommonModel->getDataWithFilters('tbl_users',$filter);

            $this->load->view('employee/employee-edit', $data);
        } else if ($operation == 'delete') {
            $save_data = array(
                "employee_status" => '0'
            );
            $this->CommonModel->Update('mst_employee', 'sk_employee_id', $employee_id, $save_data);
            redirect('employee/employee_view');
        } else if ($operation == 'active') {
            $save_data = array(
                "employee_status" => '1'
            );
            $this->CommonModel->Update('mst_employee', 'sk_employee_id', $employee_id, $save_data);
            redirect('employee/employee_view');
        } else if ($operation == 'update') {
            $employee_id = base64_decode($this->uri->segment(4));
            $employee_type = "";
            $designation = "";
            $employee_code = "";
            $doj = "";
            $doj1 = "";
            $qualification = "";
            $experience = "";
            $employee_name = "";
            $dob = "";
            $dob1 = "";
            $religion = "";
            $mobile = "";
            $aadhar = "";
            $driving_licence = "";
            $blood_group = "";
            $gender = "";
            $father_name = "";
            $country = "";
            $state = "";
            $place = "";
            $permanent_address = "";
            $residence_country = "";
            $residence_state = "";
            $residence_place = "";
            $residence_address = "";
            $emergency_name = "";
            $emergency_no = "";
            $contact_address = "";
            $employee_pic1 = "";
            $esi = "";
            $pf = "";

            $employee_pic1 = $this->input->post('employee_pic1');
            $employee_type = $this->input->post('employee_type');
            $designation = $this->input->post('designation');
            $department = $this->input->post('department');
            $employee_code = $this->input->post('employee_code');
            $doj1 = strtotime($this->input->post('doj'));
            $qualification = $this->input->post('qualification');
            $experience = $this->input->post('experience');
            $esi = $this->input->post('esi');
            $pf = $this->input->post('pf');

            $insurance = $this->input->post('insurance');
            $skill_type = $this->input->post('skill_type');
            $category = $this->input->post('category');

            $employee_name = $this->input->post('employee_name');
            $dob1 = strtotime($this->input->post('dob'));
            $religion = $this->input->post('religion');

            $nationality = $this->input->post('nationality');
            $caste = $this->input->post('caste');
            $martial_status = $this->input->post('martial_status');
            $resident_status = $this->input->post('resident_status');
            $physically_handicaped = $this->input->post('physically_handicaped');

            $mobile = $this->input->post('mobile');
            $email = $this->input->post('email');
            $aadhar = $this->input->post('aadhar');
            $driving_licence = $this->input->post('driving_licence');
            $blood_group = $this->input->post('blood_group');
            $gender = $this->input->post('gender');
            $father_name = $this->input->post('father_name');
            $mother_name = $this->input->post('mother_name');
            $country = $this->input->post('country');
            $state = $this->input->post('state');
            $place = $this->input->post('place');
            $pincode = $this->input->post('pincode');
            $permanent_address = $this->input->post('permanent_address');
            $residence_country = $this->input->post('residence_country');
            $residence_state = $this->input->post('residence_state');
            $residence_place = $this->input->post('residence_place');
            $residence_pincode = $this->input->post('residence_pincode');
            $residence_address = $this->input->post('residence_address');
            $emergency_name = $this->input->post('emergency_name');
            $emergency_no = $this->input->post('emergency_no');
            $contact_address = $this->input->post('contact_address');

            $date = date('Y-m-h');

            $dob = date("Y-m-d", $dob1);
            $doj = date("Y-m-d", $doj1);

            $picname = "";
            $allowedExts = array('png', 'jpg', 'jpeg');
            $temp = explode(".", $_FILES["employee_pic"]["name"]);

            $extension = end($temp);

            if (in_array($extension, $allowedExts) === false) {
                $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
            }
            if (empty($errors) == true) {
                $path = "uploads/employee/";

                $picname = $employee_id . "." . $extension;
                move_uploaded_file($_FILES["employee_pic"]["tmp_name"], $path . $picname);
            }
            $emp_pic = "";
            if ($_FILES["employee_pic"]["name"] != "") {
                $emp_pic = $picname;
            } else {
                $emp_pic = $employee_pic1;
            }

            $employee_save_data = array(
                'employee_type' => $employee_type,
                'designation' => $designation,
                'department' => $department,
                'employee_code' => $employee_code,
                'doj' => $doj,
                'qualification' => $qualification,
                'experience' => $experience,
                'esi' => $esi,
                'pf' => $pf,
                'insurance' => $insurance,
                'skill_type' => $skill_type,
                'category' => $category,
                'employee_name' => $employee_name,
                'dob' => $dob,
                'religion' => $religion,
                'nationality' => $nationality,
                'caste' => $caste,
                'martial_status' => $martial_status,
                'resident_status' => $resident_status,
                'physically_handicaped' => $physically_handicaped,
                'mobile' => $mobile,
                'email' => $email,
                'employee_pic' => $emp_pic,
                'aadhar' => $aadhar,
                'driving_licence' => $driving_licence,
                'blood_group' => $blood_group,
                'gender' => $gender,
                'father_name' => $father_name,
                'mother_name' => $mother_name,
                'country' => $country,
                'state' => $state,
                'place' => $place,
                'pincode' => $pincode,
                'permanent_address' => $permanent_address,
                'residence_country' => $residence_country,
                'residence_state' => $residence_state,
                'residence_place' => $residence_place,
                'residence_pincode' => $residence_pincode,
                'residence_address' => $residence_address,
                'emergency_name' => $emergency_name,
                'emergency_no' => $emergency_no,
                'contact_address' => $contact_address
            );
            $this->CommonModel->Update('mst_employee', 'sk_employee_id', $employee_id, $employee_save_data);
            redirect('employee_view');
        }
    }


    function employee_bank()
    {
        $data = $this->common_data();
        $data['menu_open'] = "employee";
        $data['menu_active'] = "employee_view";

        $employee_id = base64_decode($this->uri->segment(3));

        $data['employeeData'] = $this->CommonModel->getDetails('mst_employee', 'sk_employee_id', $employee_id);
        $data['bankDetails'] = $this->CommonModel->getData('txn_employee_bank', 'employee_bank', $employee_id);

        $this->load->view('employee/employee-bank', $data);
    }

    public function bank_save()
    {
        $data = $this->common_data();
        date_default_timezone_set('Asia/Kolkata');
        $payroll_set_date = date('Y-m-d');
        $employee_id = base64_decode($this->uri->segment(3));

        $update_data = array("bank_status" => '0');
        $this->CommonModel->Update('txn_employee_bank', 'employee_id', $employee_id, $update_data);

        $save_data = array('bank_name' => $this->input->post('bank_name'),
            'account_no' => $this->input->post('account_no'),
            'ifsc_code' => $this->input->post('ifsc_code'),
            'branch_name' => $this->input->post('branch_name'),
            'employee_id' => $employee_id,
            'bank_status' => 1,
            'create_date' => $payroll_set_date
        );
        $this->CommonModel->save($save_data, 'txn_employee_bank');

        redirect(base_url() . "employee/employee_bank/" . base64_encode($employee_id));
    }

    function employee_family()
    {
        $data = $this->common_data();
        $data['menu_open'] = "employee";
        $data['menu_active'] = "employee_view";

        $employee_id = base64_decode($this->uri->segment(3));

        $data['employeeData'] = $this->CommonModel->getDetails('mst_employee', 'sk_employee_id', $employee_id);
        $data['familyData'] = $this->CommonModel->getDetails('txn_employee_family', 'employee_id', $employee_id);

        $this->load->view('employee/employee-family', $data);
    }

    function family_save()
    {
        $data = $this->common_data();
        $post_date = $data["post_date"];
        $employee_id = base64_decode($this->uri->segment(3));

        $save_data = array('name' => $this->input->post('name'),
            'relationship' => $this->input->post('relationship'),
            'dob' => $this->input->post('dob'),
            'qualification' => $this->input->post('qualification'),
            'occupation' => $this->input->post('occupation'),
            'annual_income' => $this->input->post('annual_income'),
            'famliy_status' => 1,
            'create_date' => $post_date,
            'employee_id' => $employee_id
        );
        $this->CommonModel->save($save_data, 'txn_employee_family');
        redirect(base_url() . "employee/employee_family/" . $this->uri->segment(3));
    }

    function familyManage()
    {
        $employee_id = base64_decode($this->uri->segment(3));
        $emp_family_id = base64_decode($this->uri->segment(4));
        $save_data = array(
            "famliy_status" => '0'
        );
        $this->CommonModel->Update('txn_employee_family', 'sk_emp_family_id', $emp_family_id, $save_data);

        redirect(base_url() . "employee/employee_family/" . $this->uri->segment(3));
    }


    function employee_education()
    {
        $data = $this->common_data();
        $data['menu_open'] = "employee";
        $data['menu_active'] = "employee_view";

        $employee_id = base64_decode($this->uri->segment(3));

        $data['employeeData'] = $this->CommonModel->getDetails('mst_employee', 'sk_employee_id', $employee_id);
        $data['educationData'] = $this->CommonModel->getDetails('txn_employee_education', 'employee_id', $employee_id);

        $this->load->view('employee/employee-education', $data);
    }

    function education_save()
    {
        $data = $this->common_data();
        $post_date = $data["post_date"];
        $employee_id = base64_decode($this->uri->segment(3));
        $save_data = array('qualification' => $this->input->post('qualification'),
            'branch' => $this->input->post('branch'),
            'institute_name' => $this->input->post('institute_name'),
            'marks_obtained' => $this->input->post('marks_obtained'),
            'percentage' => $this->input->post('percentage'),
            'grade' => $this->input->post('grade'),
            'year_pass' => $this->input->post('year_pass'),
            'education_status' => 1,
            'create_date' => $post_date,
            'employee_id' => $employee_id
        );
        $this->CommonModel->save($save_data, 'txn_employee_education');
        redirect(base_url() . "employee/employee_education/" . $this->uri->segment(3));
    }

    function educationManage()
    {
        $employee_id = base64_decode($this->uri->segment(3));
        $emp_edu_id = base64_decode($this->uri->segment(4));
        $save_data = array(
            "education_status" => '0'
        );
        $this->CommonModel->Update('txn_employee_education', 'sk_emp_edu_id', $emp_edu_id, $save_data);

        redirect(base_url() . "employee/employee_education/" . $this->uri->segment(3));
    }

    function employee_experience()
    {
        $data = $this->common_data();
        $data['menu_open'] = "employee";
        $data['menu_active'] = "employee_view";

        $employee_id = base64_decode($this->uri->segment(3));

        $data['employeeData'] = $this->CommonModel->getDetails('mst_employee', 'sk_employee_id', $employee_id);
        $data['experienceData'] = $this->CommonModel->getDetails('txn_employee_experience', 'employee_id', $employee_id);

        $this->load->view('employee/employee-experience', $data);
    }

    function experience_save()
    {
        $data = $this->common_data();
        $post_date = $data["post_date"];
        $employee_id = base64_decode($this->uri->segment(3));

        $date = date('Y-m-h');
        $doj = "";
        $dol = "";
        if ($this->input->post('doj') != "") {
            $doj = date("Y-m-d", strtotime($this->input->post('doj')));
        }
        if ($this->input->post('dol') != "") {
            $dol = date("Y-m-d", strtotime($this->input->post('dol')));
        }


        $save_data = array('organization_name' => $this->input->post('organization_name'),
            'designation_starting' => $this->input->post('designation_starting'),
            'designation_leaving' => $this->input->post('designation_leaving'),
            'doj' => $doj,
            'dol' => $dol,
            'salary_starting' => $this->input->post('salary_starting'),
            'salary_leaving' => $this->input->post('salary_leaving'),
            'experience_status' => 1,
            'create_date' => $post_date,
            'employee_id' => $employee_id
        );
        $this->CommonModel->save($save_data, 'txn_employee_experience');
        redirect(base_url() . "employee/employee_experience/" . $this->uri->segment(3));
    }

    function experienceManage()
    {
        $employee_id = base64_decode($this->uri->segment(3));
        $emp_exp_id = base64_decode($this->uri->segment(4));
        $save_data = array(
            "experience_status" => '0'
        );
        $this->CommonModel->Update('txn_employee_experience', 'sk_emp_exp_id', $emp_exp_id, $save_data);

        redirect(base_url() . "employee/employee_experience/" . $this->uri->segment(3));
    }

    function employee_other()
    {
        $data = $this->common_data();
        $data['menu_open'] = "employee";
        $data['menu_active'] = "employee_view";

        $employee_id = base64_decode($this->uri->segment(3));

        $data['employeeData'] = $this->CommonModel->getDetails('mst_employee', 'sk_employee_id', $employee_id);
        $data['otherData'] = $this->CommonModel->getDetails('txn_employee_other', 'employee_id', $employee_id);

        $this->load->view('employee/employee-others', $data);
    }

    function other_save()
    {
        $data = $this->common_data();
        $post_date = $data["post_date"];
        $employee_id = base64_decode($this->uri->segment(3));
        $save_data = array('language_name' => $this->input->post('language_name'),
            'read_lan' => $this->input->post('read_lan'),
            'write_lan' => $this->input->post('write_lan'),
            'speak_lan' => $this->input->post('speak_lan'),
            'other_status' => 1,
            'create_date' => $post_date,
            'employee_id' => $employee_id
        );
        $this->CommonModel->save($save_data, 'txn_employee_other');
        redirect(base_url() . "employee/employee_other/" . $this->uri->segment(3));
    }

    function otherManage()
    {
        $employee_id = base64_decode($this->uri->segment(3));
        $emp_other_id = base64_decode($this->uri->segment(4));
        $save_data = array(
            "other_status" => '0'
        );
        $this->CommonModel->Update('txn_employee_other', 'sk_emp_other_id', $emp_other_id, $save_data);

        redirect(base_url() . "employee/employee_other/" . $this->uri->segment(3));
    }


    function employee_document()
    {
        $data = $this->common_data();
        $data['menu_open'] = "employee";
        $data['menu_active'] = "employee_view";

        $employee_id = base64_decode($this->uri->segment(3));

        $data['employeeData'] = $this->CommonModel->getDetails('mst_employee', 'sk_employee_id', $employee_id);
        $data['employee_doc'] = $this->CommonModel->getData('txn_employee_doc', 'employee_document', $employee_id);

        $this->load->view('employee/employee-document', $data);
    }

    function document_save()
    {
        $data = $this->common_data();
        $post_date = $data["post_date"];
        $employee_id = base64_decode($this->uri->segment(3));


        $doc_name = $this->input->post('doc_name');

        if (!is_dir('uploads/employee/' . $employee_id)) {
            mkdir('uploads/employee/' . $employee_id , 0777, true);
        }
        $config['upload_path'] = 'uploads/employee/' . $employee_id;
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['file_name'] = $_FILES['doc']['name'];
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
//        var_dump($doc_name); exit;
        if ($this->upload->do_upload('doc')) {
            $uploadData = $this->upload->data();
            $photo1 = $uploadData['file_name'];
            echo $photo1;
        } else {
            $photo1 = '';
        }
        $date2 = str_replace('/', '-', $this->input->post('doc_expire'));
        $doc_expire_date = date('Y-m-d', strtotime($date2));

        $data = array('doc_name' => $doc_name,
            'doc_expire' => $doc_expire_date,
            'doc' => $photo1,
            'employee_id' => $employee_id,
            'doc_uploaded_date' => $post_date,
            'doc_status' => 1);
        $this->CommonModel->Save($data, 'txn_employee_doc');
        redirect(base_url() . "employee/employee_document/" . $this->uri->segment(3));
    }

    function documentManage()
    {
        $data = $this->common_data();


        $operation = $this->uri->segment(3);
        $employee_id = base64_decode($this->uri->segment(4));
        $doc_id = base64_decode($this->uri->segment(5));

        if ($operation == 'delete') {
            $save_data = array(
                "doc_status" => '0'
            );
            $this->CommonModel->Update('txn_employee_doc', 'sk_doc_id', $doc_id, $save_data);
            redirect(base_url() . "employee/employee_document/" . $this->uri->segment(4));
        } else if ($operation == 'active') {
            $save_data = array(
                "doc_status" => '1'
            );
            $this->CommonModel->Update('txn_employee_doc', 'sk_doc_id', $doc_id, $save_data);
            redirect(base_url() . "employee/employee_document/" . $this->uri->segment(4));
        }
    }

    function employee_payroll()
    {
        $data = $this->common_data();
        $data['menu_open'] = "payroll";
        $data['menu_active'] = "payroll_setup";

        $data['employeeData'] = $this->CommonModel->getdesign();
        $this->load->view('payroll/payroll', $data);
    }

    function employee_advance_salary()
    {
        $data = $this->common_data();
        $employee_id = base64_decode($this->uri->segment(3));
        $data['menu_open'] = "payroll";
        $data['menu_active'] = "salary";
        $data['countryData'] = $this->CommonModel->getDetails('mst_geo_country', 'sk_country_id', 'All');
        $data['designationData'] = $this->CommonModel->getDetails('mst_employee_designation', 'sk_designation_id', 'All');
        $data['employeeData'] = $this->CommonModel->getDetails('mst_employee', 'sk_employee_id', $employee_id);
        $data['employeeAdvanceSalData'] = $this->CommonModel->getDetails('txn_employee_advance_salary', 'employee_id', $employee_id);
        $this->load->view('employee/employee-adv-salary', $data);
    }

    function employee_salary()
    {
        $data = $this->common_data();
        $data['menu_open'] = "payroll";
        $data['menu_active'] = "salary-slip";
        $data['employeeData'] = $this->CommonModel->getdesign();
        $this->load->view('employee/employee-view', $data);
    }

    function employee_salary_payslip()
    {
        $data = $this->common_data();
        $getDate = $this->input->post('date');
        if($getDate==null){
            $month  = date('m');
            $year = date('Y');
        }else{
            $date = explode("-",$getDate);
            $month = $date[1];
            $year = $date[0];
        }

        $employee_id = base64_decode($this->uri->segment(3));
        $data['menu_open'] = "payroll";
        $data['menu_active'] = "salary-slip";
        $data['employeeData'] = $this->CommonModel->getDetails('mst_employee', 'sk_employee_id', $employee_id);
        $data['employeeWorkingData'] = $this->CommonModel->getWorkingData($month, $year, $employee_id);
//        var_dump($month);
//        var_dump($year);
//        var_dump($employee_id);
//        var_dump($data['employeeWorkingData']);
//        exit;
        $data['employeePayslip'] = $this->CommonModel->getPayslip($month, $year, $employee_id);
        $data['employeeAdvanceSalData'] = $this->CommonModel->getAdvanceSal($month, $year, $employee_id);
        $data['employeePayrollData'] = $this->CommonModel->getData('mst_employee_payroll', 'payroll', $employee_id);
        $data['designationData'] = $this->CommonModel->getDetails('mst_employee_designation', 'sk_designation_id', 'All');
        $data['month'] = $month;
        $data['year'] = $year;
        $this->load->view("employee/employee-payslip", $data);
    }

    public function payslip_save()
    {
        $data = $this->common_data();
        $employee_id = base64_decode($this->uri->segment(3));
        $getDate = $this->input->post('date');
        if($getDate==null){
            $month  = date('m');
            $year = date('Y');
        }else{
            $date = explode("-",$getDate);
            $month = $date[1];
            $year = $date[0];
        }
        $save_data = array('basic' => $this->input->post('basic_salary'),
            'employee_id' => $employee_id,
            'basic' => $this->input->post('basic'),
            'hra' => $this->input->post('hra'),
            'allowance' => $this->input->post('allowances'),
            'extra' => $this->input->post('extra'),
            'present_days' => $this->input->post('presentDays'),
            'ot_hours' => $this->input->post('otHours'),
            'ot_earnings' => $this->input->post('otEarnings'),
            'gross_salary' => $this->input->post('grossSalary'),
            'ctc' => $this->input->post('ctc'),
            'epf' => $this->input->post('pf'),
            'esi' => $this->input->post('esi'),
            'pt' => $this->input->post('pt'),
            'advance' => $this->input->post('advance'),
            'total_deduction' => $this->input->post('totalDeductions'),
            'take_home' => $this->input->post('totalEarnings'),
            'month' => $month,
            'year' => $year
        );

        $getData = $this->CommonModel->getPayslip($month,$year,$employee_id);
        if(empty($getData)) {
            $this->CommonModel->save($save_data, 'txn_employee_payslip');
        }else{
            $this->CommonModel->updatePayroll( $month,$year,$employee_id,$save_data, 'txn_employee_payslip');
        }

        redirect(base_url() . "employee/employee_salary_payslip/" . base64_encode($employee_id));
    }

//    public function attendance()
//    {
//        $data = $this->common_data();
//        $getDate = $this->input->post('date');
//        $data['menu_open'] = "payroll";
//        $data['menu_active'] = "attendance";
//        if ($getDate != null) {
//            $data['post_date'] = $getDate;
//        }
////        var_dump($data['getDate']); exit;
//        $data['employeeData'] = $this->CommonModel->getdesign();
//        $this->load->view('payroll/attendance', $data);
//    }


    function payroll_setup()
    {
        $data = $this->common_data();
        $data['menu_open'] = "payroll";
        $data['menu_active'] = "payroll_setup";


        $data['basic'] = "";
        $data['hra_per'] = "";
        $data['hra'] = "";
        $data['allowances_per'] = "";
        $data['allowances'] = "";
        $data['pf_per'] = "";
        $data['pf'] = "";
        $data['pt'] = "";
        $data['total'] = "";
        $employee_id = base64_decode($this->uri->segment(3));
        $data['ShowPayroll'] = $this->CommonModel->GetData('mst_employee_payroll', 'payroll', $employee_id);
        /* foreach($ShowPayroll as $inf)
        {
            $data['basic']=$inf->basic;
            $data['hra_per']=$inf->hra_per;
            $data['hra']=$inf->hra;
            $data['allowances_per']=$inf->allowances_per;
            $data['allowances']=$inf->allowances;
            $data['pf_per']=$inf->pf_per;
            $data['pf']=$inf->pf;
            $data['pt']=$inf->pt;
            $data['total']=$inf->gross_salary;
        } */
        $data['countryData'] = $this->CommonModel->getDetails('mst_geo_country', 'sk_country_id', 'All');
        $data['designationData'] = $this->CommonModel->getDetails('mst_employee_designation', 'sk_designation_id', 'All');
        $data['employeeData'] = $this->CommonModel->getDetails('mst_employee', 'sk_employee_id', $employee_id);

        $this->load->view('employee/payroll-setup', $data);
    }

    public function payroll_save()
    {
        $data = $this->common_data();
        date_default_timezone_set('Asia/Kolkata');
        $payroll_set_date = date('Y-m-d');
        $employee_id = base64_decode($this->uri->segment(3));

        $save_data = array(
            "payroll_status" => '0'
        );
        $this->CommonModel->Update('mst_employee_payroll', 'employee_id', $employee_id, $save_data);
        $save_data = array('basic' => $this->input->post('basic_salary'),
            'employee_id' => $employee_id,
            'hra_per' => $this->input->post('hra_per'),
            'hra' => $this->input->post('hra'),
            'allowances_per' => $this->input->post('allowances_per'),
            'allowances' => $this->input->post('allowances'),
            'pf_per' => $this->input->post('pf_per'),
            'pf' => $this->input->post('pf'),
            'pt' => $this->input->post('pt'),
            'gross_salary' => $this->input->post('total'),
            'per_hour' => $this->input->post('per_hour'),
            'payroll_set_date' => $payroll_set_date
        );
        $this->CommonModel->save($save_data, 'mst_employee_payroll');

        //$this->CommonModel->payrollUpdate($data,$employee_id) ;
        redirect(base_url() . "employee/payroll_setup/" . base64_encode($employee_id));
    }

    public function advance_save()
    {
        $data = $this->common_data();
        date_default_timezone_set('Asia/Kolkata');
        $date = $this->input->post('date');
        $advance = $this->input->post('advance');
        $employee_id = base64_decode($this->uri->segment(3));
        $save_data = array(
            'employee_id' => $employee_id,
            'advance_amount' => $advance,
            'date' => $date,
            'status' => 'Active'
        );
        $this->CommonModel->save($save_data, 'txn_employee_advance_salary');
        redirect(base_url() . "employee/employee-advance-salary/" . base64_encode($employee_id));
    }

    public function attendance()
    {
        $data = $this->common_data();
        $getDate = $this->input->post('date');
        $data['menu_open'] = "payroll";
        $data['menu_active'] = "attendance";
        if ($getDate != null) {
            $data['post_date'] = $getDate;
        }
//      var_dump($data['getDate']); exit;
        $data['employeeData'] = $this->CommonModel->getEmployeesActive();
        $this->load->view('payroll/attendance', $data);
    }

    public function setAttendance()
    {
        $data = $this->common_data();
        $employee_id = $this->input->post('employee_id');
        $attendance = $this->input->post('attendance');
        $hours = $this->input->post('hours');
        $date = $this->input->post('date');
        $year = $data['post_year'];
//      $date=$data['post_date'];
//      var_dump($date); exit();
        $employee_session_id = $data["employee_session_id"];

        $data = array('employee_id' => $employee_id,
            'attendance_date' => $date,
            'attendance' => $attendance,
            'start_time' => null,
            'end_time' => null,
            'total_hrs' => $hours,
            'login_id' => $employee_session_id,
            'attendance_status' => 'active'
        );


        echo $this->CommonModel->setAttendance($year, $employee_id, $attendance, $date, $data);

    }

    public function attendance_calendar()
    {
        $data = $this->common_data();
        $data['menu_open'] = "payroll";
        $data['menu_active'] = "attendance";
        $employee_id = base64_decode($this->uri->segment(3));
        $data["selected_year"] = $this->uri->segment(4);
        $data["selected_month"] = $this->uri->segment(5);
        $data['employee_id'] = $employee_id;

        $data['employeeData'] = $this->CommonModel->getDetails('mst_employee', 'sk_employee_id', $employee_id);
        $this->load->view('payroll/attendance-calendar', $data);
    }

    function employee_registration()
    {
        $data = $this->common_data();
        $data['menu_open'] = "employee";
        $data['menu_active'] = "employee_view";

        $employee_id = base64_decode($this->uri->segment(3));

        $data['sk_employee_id'] = "";
        $data['employee_type'] = "";
        $data['employee_name'] = "";
        $data['aadhar'] = "";
        $data['blood_group'] = "";
        $data['designation'] = "";
        $data['department'] = "";
        $data['dob'] = "";
        $data['esi'] = "";
        $data['gender'] = "";
        $data['father_name'] = "";
        $data['mother_name'] = "";
        $data['employee_code'] = "";
        $data['doj'] = "";
        $data['religion'] = "";
        $data['residence_state'] = "";
        $data['mobile'] = "";
        $data['country'] = "";
        $data['state'] = "";
        $data['place'] = "";
        $data['permanent_address'] = "";
        $data['residence_country'] = "";
        $data['residence_state'] = "";
        $data['residence_place'] = "";
        $data['residence_address'] = "";
        $data['designation_name'] = "";
        $data['department_name'] = "";
        $data['country_name'] = "";
        $data['state_name'] = "";
        $data['residencecountry_name'] = "";
        $data['residencestate_name'] = "";
        $data['emergency_name'] = "";
        $data['emergency_no'] = "";
        $data['bank_name'] = "";
        $data['account_no'] = "";
        $data['ifsc_code'] = "";
        $data['branch_name'] = "";
        $data['vendor_code'] = "";
        $data['vendor_name'] = "";
        $data['insurance'] = "";
        $data['skill_type'] = "";
        $data['category'] = "";
        $data['nationality'] = "";
        $data['caste'] = "";
        $data['martial_status'] = "";
        $data['resident_status'] = "";
        $data['physically_handicaped'] = "";
        $data['pincode'] = "";
        $data['residence_pincode'] = "";

        $data['employeeData'] = $this->CommonModel->getDetails('mst_employee', 'sk_employee_id', $employee_id);
        foreach ($data['employeeData'] as $inf) {
            $data['sk_employee_id'] = $inf->sk_employee_id;
            $data['employee_type'] = $inf->employee_type;
            $data['employee_name'] = $inf->employee_name;
            $data['employee_pic'] = $inf->employee_pic;
            $data['aadhar'] = $inf->aadhar;
            $data['blood_group'] = $inf->blood_group;
            $data['designation'] = $inf->designation;
            $data['department'] = $inf->department;
            $data['dob'] = $inf->dob;
            $data['esi'] = $inf->esi;

            $data['insurance'] = $inf->insurance;
            $data['skill_type'] = $inf->skill_type;
            $data['category'] = $inf->category;

            $data['nationality'] = $inf->nationality;
            $data['caste'] = $inf->caste;
            $data['martial_status'] = $inf->martial_status;
            $data['resident_status'] = $inf->resident_status;
            $data['physically_handicaped'] = $inf->physically_handicaped;

            $data['pincode'] = $inf->pincode;
            $data['residence_pincode'] = $inf->residence_pincode;

            $data['gender'] = $inf->gender;
            $data['father_name'] = $inf->father_name;
            $data['mother_name'] = $inf->mother_name;
            $data['employee_code'] = $inf->employee_code;
            $data['doj'] = $inf->doj;
            $data['religion'] = $inf->religion;
            $data['residence_state'] = $inf->residence_state;
            $data['mobile'] = $inf->mobile;
            $data['country'] = $inf->country;
            $data['state'] = $inf->state;
            $data['place'] = $inf->place;
            $data['permanent_address'] = $inf->permanent_address;
            $data['residence_country'] = $inf->residence_country;
            $data['residence_state'] = $inf->residence_state;
            $data['residence_place'] = $inf->residence_place;
            $data['residence_address'] = $inf->residence_address;

            $data['emergency_name'] = $inf->emergency_name;
            $data['emergency_no'] = $inf->emergency_no;

            $data['CompanyDetails'] = $this->CommonModel->getData('mst_company', '', 'sk_company_id');
            foreach ($data['CompanyDetails'] as $inf0) {
                $data['vendor_code'] = $inf0->vendor_code;
                $data['vendor_name'] = $inf0->company_name;
            }

            $data['Designation'] = $this->CommonModel->getData('mst_employee_designation', 'employee_designation', $inf->designation);
            foreach ($data['Designation'] as $inf1) {
                $data['designation_name'] = $inf1->designation_name;
            }
            $data['Department'] = $this->CommonModel->getData('mst_department', 'department', $inf->department);
            foreach ($data['Department'] as $inf2) {
                $data['department_name'] = $inf2->department_name;
            }
            $data['Country'] = $this->CommonModel->getData('mst_geo_country', 'country', $inf->country);
            foreach ($data['Country'] as $inf3) {
                $data['country_name'] = $inf3->country_name;
            }
            $data['State'] = $this->CommonModel->getData('mst_geo_state', 'state', $inf->state);
            foreach ($data['State'] as $inf4) {
                $data['state_name'] = $inf4->state_name;
            }
            $data['ResidenceCountry'] = $this->CommonModel->getData('mst_geo_country', 'country', $inf->residence_country);
            foreach ($data['ResidenceCountry'] as $inf5) {
                $data['residencecountry_name'] = $inf5->country_name;
            }
            $data['ResidenceState'] = $this->CommonModel->getData('mst_geo_state', 'state', $inf->residence_state);
            foreach ($data['ResidenceState'] as $inf6) {
                $data['residencestate_name'] = $inf6->state_name;
            }
            $data['BankDetails'] = $this->CommonModel->getData('txn_employee_bank', 'employee_details', $inf->sk_employee_id);
            foreach ($data['BankDetails'] as $inf7) {
                $data['bank_name'] = $inf7->bank_name;
                $data['account_no'] = $inf7->account_no;
                $data['ifsc_code'] = $inf7->ifsc_code;
                $data['branch_name'] = $inf7->branch_name;
            }
            $this->load->view('employee/employee-registration', $data);
        }
    }




    function employee_supervisor()
    {
        $data = $this->common_data();
        $data['menu_open'] = "employee";
        $data['menu_active'] = "employee_view";

        $employee_id = base64_decode($this->uri->segment(3));
        $data['employeeData'] = $this->CommonModel->getDetails('mst_employee', 'sk_employee_id', $employee_id);
        $data['supervisorData'] = $this->CommonModel->getSupervisorData($employee_id);
        $data['employeeActiveData'] = $this->CommonModel->getEmployeesActive();
        // var_dump($data['employeeActiveData']); exit;
        foreach ($data['employeeActiveData'] as $key => $value) {
           if($value->sk_employee_id == $employee_id) {
            unset($data['employeeActiveData'][$key]);
           }
            // var_dump($value->sk_employee_id); exit;
        }
       
        $this->load->view('employee/employee-supervisor', $data);
    }

    public function employee_supervisor_save()
    {
        $data = $this->common_data();
        date_default_timezone_set('Asia/Kolkata');
        $employee_id = base64_encode($this->input->post('employee_id'));
        $save_data = array(
            'employee_id' => $this->input->post('employee_id'),
            'supervisor_id' => $this->input->post('supervisor_id')
            
        );
        if(base64_decode(($employee_id)) == $this->input->post('supervisor_id')){
            $this->session->set_flashdata('message', '<span style="color:red;line-height: 20px;text-align: right;font-size: 14px; display: inline-block; margin-bottom:10px">Cannot add self supervision</span>');
        }else{
            $this->CommonModel->save($save_data, 'mst_employee_supervisor');
        }

        redirect(base_url() . "employee/employee_supervisor/".$employee_id);
    }

    public function employeeSupervisorManage()
    {
        $operation= $this->uri->segment(3);
        $employee_id= $this->uri->segment(4);
        $id = base64_decode($this->uri->segment(5));
        $data = $this->common_data();
        $data['menu_open'] = "client";
        $data['menu_active'] = "client_add";
        if ($operation == 'delete') {
            // $save_data = array(
            //     "status" => 'inactive'
            // );
            // $this->CommonModel->Update('mst_employee_supervisor', 'id', $id, $save_data);
             $this->CommonModel->delete_row('mst_employee_supervisor', 'id', $id);

            redirect(base_url() . "employee/employee_supervisor/".$employee_id);
        }
    }


    public function getEmployeedByRoles()
    {
        var_dump('hello'); 
        $data = $this->common_data();
        $role_id = $this->input->post('role_id');
        var_dump($role_id); 
        $empData = "";
        $empData = $this->CommonModel->getEmployeedByRoles($role_id);
        // var_dump($empData); exit;
        $output = "<option value=''>Select Employee</option>";
        if ($empData) {
            foreach ($empData as $info) {
                $output = $output . "<option value='$info->sk_employee_id'>$info->employee_name</option>";
            }
        }
        echo $output;
    }

}