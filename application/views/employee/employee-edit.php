<?php $this->load->view('includes/header') ?>
<?php $this->load->view('includes/sidebar'); ?>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Employee</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Employee</a></li>
                            <li class="breadcrumb-item active">Edit</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->


        <section class="content">

            <div class="container-fluid">

                <div class="row">
                    <div class="card card-primary card-outline card-outline-tabs">
                        <div class="card-header p-0 border-bottom-0">


                            <ul class="nav nav-tabs" role="tablist">


                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active bg-color" data-bs-toggle="tab" href="#"
                                       aria-selected="false" role="tab" tabindex="-1">Info</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link bg-color" data-bs-toggle="tab"
                                       href="<?=base_url();?>employee/payroll_setup/<?= $this->uri->segment(4) ?>"
                                       aria-selected="true" role="tab">Payroll</a>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <a class="nav-link bg-color" data-bs-toggle="tab"
                                       href="<?=base_url();?>employee/employee_salary_payslip/<?= $this->uri->segment(4) ?>"
                                       aria-selected="true" role="tab">Pay Slips</a>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <a class="nav-link bg-color" data-bs-toggle="tab"
                                       href="<?=base_url();?>employee/employee_advance_salary/<?= $this->uri->segment(4) ?>"
                                       aria-selected="true" role="tab">Advance </a>
                                </li>

                                <!-- <li class="nav-item" role="presentation">
                                    <a class="nav-link bg-color" data-bs-toggle="tab"
                                       href="<?=base_url();?>store/issued-stock/<?= $this->uri->segment(4)?>" aria-selected="true" role="tab">Issued
                                        Stock</a>
                                </li> -->
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link bg-color" data-bs-toggle="tab"
                                       href="<?= base_url(); ?>employee/employee_experience/<?= $this->uri->segment(4) ?>"
                                       aria-selected="true" role="tab">Experience</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link bg-color" data-bs-toggle="tab"
                                       href="<?= base_url(); ?>employee/employee_education/<?= $this->uri->segment(4) ?>"
                                       aria-selected="true" role="tab">Education</a>
                                </li>

                                <li class="nav-item" role="presentation" >
                                    <a class="nav-link bg-color" data-bs-toggle="tab"
                                       href="<?= base_url(); ?>employee/employee_document/<?= $this->uri->segment(4) ?>"
                                       aria-selected="true" role="tab">Documents</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link bg-color" data-bs-toggle="tab"
                                       href="<?= base_url(); ?>employee/employee_family/<?= $this->uri->segment(4) ?>"
                                       aria-selected="true" role="tab">Family</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link bg-color" data-bs-toggle="tab"
                                       href="<?= base_url(); ?>employee/employee_bank/<?= $this->uri->segment(4) ?>" aria-selected="true"
                                       role="tab">Bank Details</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link " data-bs-toggle="tab" href="<?= base_url(); ?>employee/employee_supervisor/<?= $this->uri->segment(4) ?>" aria-selected="true"
                                       role="tab">Assign Supervisor</a>
                                </li>
                                <!-- <li class="nav-item" role="presentation">
                                    <a class="nav-link bg-color" data-bs-toggle="tab" href="#Gate Pass"
                                       aria-selected="true" role="tab">Gate Pass</a>

                                </li> -->
                            </ul>

                            <!-- left column -->
                            <div class="col-md-12">
                                <!-- jquery validation -->
                                <div class="card-default">
                                    <div class="card-header">
                                        <h3 class="card-title">Edit <small>Employee</small></h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <?php if ($employeeData) {
                                        foreach ($employeeData as $emp_info) {
                                            $sk_employee_id = "";
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
                                            $mother_name = "";
                                            $esi = "";
                                            $pf = "";
                                            $insurance = "";
                                            $skill_type = "";
                                            $category = "";
                                            $pincode = "";
                                            $residence_pincode = "";
                                            $nationality = "";
                                            $caste = "";
                                            $martial_status = "";
                                            $resident_status = "";
                                            $physically_handicaped = "";

                                            $sk_employee_id = $emp_info->sk_employee_id;
                                            $employee_type = $emp_info->employee_type;
                                            $designation = $emp_info->designation;
                                            $department = $emp_info->department;
                                            $employee_code = $emp_info->employee_code;
                                            $doj1 = strtotime($emp_info->doj);
                                            $qualification = $emp_info->qualification;
                                            $experience = $emp_info->experience;
                                            $esi = $emp_info->esi;
                                            $pf = $emp_info->pf;
                                            $insurance = $emp_info->insurance;
                                            $skill_type = $emp_info->skill_type;
                                            $category = $emp_info->category;

                                            $employee_name = $emp_info->employee_name;
                                            $dob1 = strtotime($emp_info->dob);
                                            $religion = $emp_info->religion;
                                            $nationality = $emp_info->nationality;
                                            $caste = $emp_info->caste;
                                            $martial_status = $emp_info->martial_status;
                                            $resident_status = $emp_info->resident_status;
                                            $physically_handicaped = $emp_info->physically_handicaped;
                                            $mobile = $emp_info->mobile;
                                            $email = $emp_info->email;
                                            $aadhar = $emp_info->aadhar;
                                            $driving_licence = $emp_info->driving_licence;
                                            $blood_group = $emp_info->blood_group;
                                            $gender = $emp_info->gender;
                                            $father_name = $emp_info->father_name;
                                            $mother_name = $emp_info->mother_name;
                                            $country = $emp_info->country;
                                            $state = $emp_info->state;
                                            $place = $emp_info->place;
                                            $pincode = $emp_info->pincode;
                                            $permanent_address = $emp_info->permanent_address;
                                            $residence_country = $emp_info->residence_country;
                                            $residence_state = $emp_info->residence_state;
                                            $residence_place = $emp_info->residence_place;
                                            $residence_pincode = $emp_info->residence_pincode;
                                            $residence_address = $emp_info->residence_address;
                                            $emergency_name = $emp_info->emergency_name;
                                            $emergency_no = $emp_info->emergency_no;
                                            $contact_address = $emp_info->contact_address;
                                            $employee_pic = $emp_info->employee_pic;

                                            $path = "uploads/employee/";
                                            $dob = date("d/m/Y", $dob1);
                                            $doj = date("d/m/Y", $doj1);
                                        }
                                    } 
foreach ($getUser as $key => $value) {
    $role_id = $value->role_id;
    # code...
}
                                    ?>


                                    <form role="form" enctype="multipart/form-data" id="quickForm" name="myForm"
                                          action="<?php echo base_url() ?>employee/employeeManage/update/<?= base64_encode($sk_employee_id) ?>"
                                          method="post">
                                        <div class="card-body row">
                                            <div class="form-group col-md-4">
                                                <label for="employee_type">Employee Type</label>
                                                <select type="text" name="employee_type" class="form-control"
                                                        id="employee_type" required>
                                                    <option value="Permanent" <?php if ($employee_type == "Permanent") {
                                                        echo "selected";
                                                    } else {
                                                        echo "";
                                                    } ?>>Permanent
                                                    </option>
                                                    <option value="Contract" <?php if ($employee_type == "Contract") {
                                                        echo "selected";
                                                    } else {
                                                        echo "";
                                                    } ?>>Contract
                                                    </option>
                                                    <option value="Labour" <?php if ($employee_type == "Labour") {
                                                        echo "selected";
                                                    } else {
                                                        echo "";
                                                    } ?>>Labour
                                                    </option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="designation">Designation</label>
                                                <select name="designation" class="form-control" id="designation"
                                                        required>
                                                    <?php if ($designationData) {
                                                        foreach ($designationData as $dinfo) { ?>
                                                            <option value="<?= $dinfo->sk_designation_id ?>" <?php if ($dinfo->sk_designation_id == $designation) {
                                                                echo "selected";
                                                            } ?> ><?= $dinfo->designation_name ?></option>
                                                        <?php }
                                                    } ?>
                                                </select>
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="department">Department</label>
                                                <select name="department" class="form-control" id="department" required>
                                                    <?php if ($departmentData) {
                                                        foreach ($departmentData as $dinfo) { ?>
                                                            <option value="<?= $dinfo->sk_department_id ?>" <?php if ($dinfo->sk_department_id == $department) {
                                                                echo "selected";
                                                            } ?> ><?= $dinfo->department_name ?></option>
                                                        <?php }
                                                    } ?>
                                                </select>
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="employee_code">Employee Code</label>
                                                <input type="text" name="employee_code" value="<?= $employee_code ?>"
                                                       class="form-control" id="employee_code"
                                                       placeholder="KA 34 N XXXX" required>
                                            </div>


                                            <div class="form-group col-md-4">
                                                <label>Date Of Joining</label>

                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                    class="far fa-calendar-alt"></i></span>
                                                    </div>
                                                    <input type="text" name="doj" value="<?= $doj ?>" id="doj"
                                                           class="form-control" data-inputmask-alias="datetime"
                                                           data-inputmask-inputformat="dd/mm/yyyy" data-mask required>
                                                </div>
                                                <!-- /.input group -->
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="qualification">Qualification</label>
                                                <input type="text" name="qualification" value="<?= $qualification ?>"
                                                       class="form-control" id="qualification" placeholder="BE/BCA/MCA"
                                                       required>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="qualification">Experience In Years</label>
                                                <input type="text" name="experience" value="<?= $experience ?>"
                                                       class="form-control" id="experience" placeholder="1.2" required>
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="qualification">ESI No</label>
                                                <input type="text" name="esi" value="<?= $esi ?>" class="form-control"
                                                       id="esi" placeholder="" required>
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="qualification">PF No</label>
                                                <input type="text" name="pf" value="<?= $pf ?>" class="form-control"
                                                       id="pf" placeholder="" required>
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="qualification">Insurance No</label>
                                                <input type="text" name="insurance" class="form-control" id="insurance"
                                                       value="<?= $insurance ?>" placeholder="" required>
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="department">Skill Type</label>
                                                <select name="skill_type" class="form-control" id="skill_type" required>

                                                    <option value=""></option>
                                                    <option value="Un-Skilled" <?php if ($skill_type == "Un-Skilled") {
                                                        echo "selected";
                                                    } else {
                                                        echo "";
                                                    } ?>>Un-Skilled
                                                    </option>
                                                    <option value="Semi-Skilled" <?php if ($skill_type == "Semi-Skilled") {
                                                        echo "selected";
                                                    } else {
                                                        echo "";
                                                    } ?>>Semi-Skilled
                                                    </option>
                                                    <option value="Skilled" <?php if ($skill_type == "Skilled") {
                                                        echo "selected";
                                                    } else {
                                                        echo "";
                                                    } ?>>Skilled
                                                    </option>
                                                    <option value="Highly-Skilled" <?php if ($skill_type == "Highly-Skilled") {
                                                        echo "selected";
                                                    } else {
                                                        echo "";
                                                    } ?>>Highly-Skilled
                                                    </option>
                                                </select>
                                            </div>


                                            <div class="form-group col-md-4">
                                                <label for="department">Category</label>
                                                <select name="category" class="form-control" id="category" required>

                                                    <option value=""></option>
                                                    <option value="MBC" <?php if ($category == "MBC") {
                                                        echo "selected";
                                                    } else {
                                                        echo "";
                                                    } ?>>MBC
                                                    </option>
                                                    <option value="SSC" <?php if ($category == "SSC") {
                                                        echo "selected";
                                                    } else {
                                                        echo "";
                                                    } ?>>SSC
                                                    </option>
                                                    <option value="JBC" <?php if ($category == "JBC") {
                                                        echo "selected";
                                                    } else {
                                                        echo "";
                                                    } ?>>JBC
                                                    </option>
                                                    <option value="JBI" <?php if ($category == "JBI") {
                                                        echo "selected";
                                                    } else {
                                                        echo "";
                                                    } ?>>JBI
                                                    </option>
                                                    <option value="JBN" <?php if ($category == "JBN") {
                                                        echo "selected";
                                                    } else {
                                                        echo "";
                                                    } ?>>JBN
                                                    </option>
                                                    <option value="TMC" <?php if ($category == "TMC") {
                                                        echo "selected";
                                                    } else {
                                                        echo "";
                                                    } ?>>TMC
                                                    </option>
                                                    <option value="OGC" <?php if ($category == "OGC") {
                                                        echo "selected";
                                                    } else {
                                                        echo "";
                                                    } ?>>OGC
                                                    </option>
                                                    <option value="PROJECTS" <?php if ($category == "PROJECTS") {
                                                        echo "selected";
                                                    } else {
                                                        echo "";
                                                    } ?>>PROJECTS
                                                    </option>
                                                    <option value="OTHERS" <?php if ($category == "OTHERS") {
                                                        echo "selected";
                                                    } else {
                                                        echo "";
                                                    } ?>>OTHERS
                                                    </option>
                                                    <option value="Supp .Staff" <?php if ($category == "Supp .Staff") {
                                                        echo "selected";
                                                    } else {
                                                        echo "";
                                                    } ?>>Supp .Staff
                                                    </option>

                                                </select>
                                            </div>


                                            <div class=" col-md-12">
                                                <h5 class="mt-2 mb-2">Personal Information</h5>
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="employee_name">Employee Name</label>
                                                <input type="text" name="employee_name" value="<?= $employee_name ?>"
                                                       class="form-control" id="employee_name" placeholder="XXXXX"
                                                       required>
                                            </div>


                                            <div class="form-group col-md-4">
                                                <label>Date Of Birth</label>

                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                    class="far fa-calendar-alt"></i></span>
                                                    </div>
                                                    <input type="text" name="dob" id="dob" value="<?= $dob ?>"
                                                           class="form-control" data-inputmask-alias="datetime"
                                                           data-inputmask-inputformat="dd/mm/yyyy" data-mask required>
                                                </div>
                                                <!-- /.input group -->
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="religion">Religion</label>
                                                <select name="religion" class="form-control" id="religion" required>
                                                    <option value=""></option>
                                                    <option value="Hindhu" <?php if ($religion == "Hindhu") {
                                                        echo "selected";
                                                    } else {
                                                        echo "";
                                                    } ?>>Hindhu
                                                    </option>
                                                    <option value="Muslim" <?php if ($religion == "Muslim") {
                                                        echo "selected";
                                                    } else {
                                                        echo "";
                                                    } ?>>Muslim
                                                    </option>
                                                    <option value="Chrsitian" <?php if ($religion == "Chrsitian") {
                                                        echo "selected";
                                                    } else {
                                                        echo "";
                                                    } ?>>Chrsitian
                                                    </option>
                                                    <option value="Others" <?php if ($religion == "Others") {
                                                        echo "selected";
                                                    } else {
                                                        echo "";
                                                    } ?>>Others
                                                    </option>
                                                </select>
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="religion">Nationality</label>
                                                <select name="nationality" class="form-control" id="nationality"
                                                        required>
                                                    <option value=""></option>
                                                    <option value="Indian" <?php if ($nationality == "Indian") {
                                                        echo "selected";
                                                    } else {
                                                        echo "";
                                                    } ?>>Indian
                                                    </option>
                                                    <option value="Others" <?php if ($nationality == "Others") {
                                                        echo "selected";
                                                    } else {
                                                        echo "";
                                                    } ?>>Others
                                                    </option>

                                                </select>
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="religion">Caste</label>
                                                <select name="caste" class="form-control" id="caste" required>
                                                    <option value=""></option>
                                                    <option value="SC" <?php if ($caste == "SC") {
                                                        echo "selected";
                                                    } else {
                                                        echo "";
                                                    } ?>>SC
                                                    </option>
                                                    <option value="ST" <?php if ($caste == "ST") {
                                                        echo "selected";
                                                    } else {
                                                        echo "";
                                                    } ?>>ST
                                                    </option>
                                                    <option value="OBC" <?php if ($caste == "OBC") {
                                                        echo "selected";
                                                    } else {
                                                        echo "";
                                                    } ?>>OBC
                                                    </option>
                                                    <option value="General" <?php if ($caste == "General") {
                                                        echo "selected";
                                                    } else {
                                                        echo "";
                                                    } ?>>General
                                                    </option>
                                                </select>
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="religion">Martial Status</label>
                                                <select name="martial_status" class="form-control" id="martial_status"
                                                        required>
                                                    <option value=""></option>
                                                    <option value="Married" <?php if ($martial_status == "Married") {
                                                        echo "selected";
                                                    } else {
                                                        echo "";
                                                    } ?>>Married
                                                    </option>
                                                    <option value="UnMarried" <?php if ($martial_status == "UnMarried") {
                                                        echo "selected";
                                                    } else {
                                                        echo "";
                                                    } ?>>UnMarried
                                                    </option>
                                                    <option value="Dicorce" <?php if ($martial_status == "Dicorce") {
                                                        echo "selected";
                                                    } else {
                                                        echo "";
                                                    } ?>>Dicorce
                                                    </option>
                                                </select>
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="religion">Resident State</label>
                                                <!-- <select name="resident_status" class="form-control" id="resident_status"
                                                        required>
                                                    <option value=""></option>
                                                    <option value="Kannadiga" <?php if ($resident_status == "Kannadiga") {
                                                        echo "selected";
                                                    } else {
                                                        echo "";
                                                    } ?>>Kannadiga
                                                    </option>
                                                    <option value="Non-Kannadiga" <?php if ($resident_status == "Non-Kannadiga") {
                                                        echo "selected";
                                                    } else {
                                                        echo "";
                                                    } ?>>Non-Kannadiga
                                                    </option>
                                                </select> -->
                                                <input type="text" name="resident_status" value="<?= $resident_status ?>" class="form-control" id="resident_status" placeholder="XXXXX" required>
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="religion">Physically Handicaped / Ex-servicemen</label>
                                                <select name="physically_handicaped" class="form-control"
                                                        id="physically_handicaped" required>
                                                    <option value=""></option>
                                                    <option value="Yes" <?php if ($physically_handicaped == "Yes") {
                                                        echo "selected";
                                                    } else {
                                                        echo "";
                                                    } ?>>Yes
                                                    </option>
                                                    <option value="No" <?php if ($physically_handicaped == "No") {
                                                        echo "selected";
                                                    } else {
                                                        echo "";
                                                    } ?>>No
                                                    </option>

                                                </select>
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="vehicle_brand">Mobile</label>
                                                <input type="text" name="mobile" value="<?= $mobile ?>"
                                                       class="form-control" id="mobile" placeholder="XXXX" required>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="email">Email</label>
                                                <input type="email" name="email" value="<?= $email ?>"
                                                       class="form-control" id="email" placeholder="XXXX" required>
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="exampleInputFile">Photo</label>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <?php if ($employee_pic != "") {
                                                            $employee_pic1 = base_url() . $path . $employee_pic;
                                                        } else {
                                                            $employee_pic1 = "";
                                                        } ?>

                                                        <input type="file" class="custom-file-input" name="employee_pic"
                                                               id="employee_pic">
                                                        <label class="custom-file-label" for="exampleInputFile">Choose
                                                            file</label>

                                                    </div>
                                                    <div class="input-group-append">
                                                        <input type='hidden' value='<?= $employee_pic ?>'
                                                               name='employee_pic1'/>
                                                        <img src="<?= $employee_pic1 ?>" width="100px;"/>
                                                        <!-- <span class="input-group-text" id="">Upload</span>-->
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="aadhar">Aadhar</label>
                                                <input type="text" name="aadhar" value="<?= $aadhar ?>"
                                                       class="form-control" id="aadhar" placeholder="XXXX" required>
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="driving_licence">Driving Licence</label>
                                                <input type="text" name="driving_licence"
                                                       value="<?= $driving_licence ?>" class="form-control"
                                                       id="driving_licence" placeholder="XXXX" required>
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="blood_group">Blood Group</label>
                                                <input type="text" name="blood_group" value="<?= $blood_group ?>"
                                                       class="form-control" id="blood_group" placeholder="XXXX"
                                                       required>
                                            </div>


                                            <div class="form-group col-md-4">
                                                <label for="country">Gender</label>
                                                <select name="gender" class="form-control" id="gender" required>
                                                    <option value=""></option>
                                                    <option value="Male" <?php if ($gender == "Male") {
                                                        echo "selected";
                                                    } else {
                                                        echo "";
                                                    } ?>>Male
                                                    </option>
                                                    <option value="FeMale" <?php if ($gender == "FeMale") {
                                                        echo "selected";
                                                    } else {
                                                        echo "";
                                                    } ?>>FeMale
                                                    </option>

                                                </select>
                                            </div>


                                            <div class="form-group col-md-4">
                                                <label for="father_name">Father Name</label>
                                                <input type="text" name="father_name" value="<?= $father_name ?>"
                                                       class="form-control" id="father_name" placeholder="XXXX"
                                                       required>
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="mother_name">Mother Name</label>
                                                <input type="text" name="mother_name" value="<?= $mother_name ?>"
                                                       class="form-control" id="mother_name" placeholder="XXXX"
                                                       required>
                                            </div>


                                            <div class=" col-md-12">
                                                <h5 class="mt-2 mb-2">Permanent Address</h5>
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label for="country">Country</label>
                                                <select name="country" class="form-control" id="country"
                                                        onchange="getStates(this.value,'state')" required>
                                                    <option value=""></option>
                                                    <?php if ($countryData) {
                                                        foreach ($countryData as $info) { ?>
                                                            <option value="<?= $info->sk_country_id ?>" <?php if ($info->sk_country_id == $country) {
                                                                echo "selected";
                                                            } else {
                                                                echo "";
                                                            } ?>><?= $info->country_name ?></option>
                                                        <?php }
                                                    } ?>

                                                </select>
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label for="state">State</label>
                                                <select name="state" class="form-control" id="state" required>
                                                    <option value=""></option>
                                                    <?php $statesData = $this->CommonModel->getDetails('mst_geo_state', 'country_id', $country);
                                                    if ($statesData) {
                                                        foreach ($statesData as $state_info) { ?>
                                                            <option value="<?= $state_info->sk_state_id ?>" <?php if ($state_info->sk_state_id == $state) {
                                                                echo "selected";
                                                            } else {
                                                                echo "";
                                                            } ?> ><?= $state_info->state_name ?></option>
                                                        <?php }
                                                    } ?>
                                                </select>
                                            </div>

                                            <div class="form-group col-md-2">
                                                <label for="place">City/Place</label>
                                                <input type="text" name="place" value="<?= $place ?>"
                                                       class="form-control" id="place" placeholder="XXXX" required>
                                            </div>

                                            <div class="form-group col-md-3">
                                                <label for="permanent_address">Pincode</label>
                                                <input type="text" name="pincode" value="<?= $pincode ?>"
                                                       class="form-control" id="pincode" placeholder="" required>
                                            </div>

                                            <div class="form-group col-md-3">
                                                <label for="permanent_address">Permanent Address</label>
                                                <input type="text" name="permanent_address"
                                                       value="<?= $permanent_address ?>" class="form-control"
                                                       id="permanent_address" placeholder="" required>
                                            </div>


                                            <div class=" col-md-12">
                                                <h5 class="mt-2 mb-2">Residence Address</h5>
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label for="residence_country">Country</label>
                                                <select name="residence_country" class="form-control"
                                                        id="residence_country"
                                                        onchange="getStates(this.value,'residence_state')" required>
                                                    <option value=""></option>
                                                    <?php if ($countryData) {
                                                        foreach ($countryData as $info) { ?>
                                                            <option value="<?= $info->sk_country_id ?>" <?php if ($info->sk_country_id == $residence_country) {
                                                                echo "selected";
                                                            } else {
                                                                echo "";
                                                            } ?>><?= $info->country_name ?></option>
                                                        <?php }
                                                    } ?>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label for="residence_state">State</label>
                                                <select name="residence_state" class="form-control" id="residence_state"
                                                        required>
                                                    <option value=""></option>
                                                    <?php $statesData = $this->CommonModel->getDetails('mst_geo_state', 'country_id', $residence_country);
                                                    if ($statesData) {
                                                        foreach ($statesData as $state_info) { ?>
                                                            <option value="<?= $state_info->sk_state_id ?>" <?php if ($state_info->sk_state_id == $residence_state) {
                                                                echo "selected";
                                                            } else {
                                                                echo "";
                                                            } ?> ><?= $state_info->state_name ?></option>
                                                        <?php }
                                                    } ?>
                                                </select>
                                            </div>

                                            <div class="form-group col-md-2">
                                                <label for="residence_place">City/Place</label>
                                                <input type="text" name="residence_place"
                                                       value="<?= $residence_place ?>" class="form-control"
                                                       id="residence_place" placeholder="XXXX" required>
                                            </div>

                                            <div class="form-group col-md-3">
                                                <label for="permanent_address">Pincode</label>
                                                <input type="text" name="residence_pincode"
                                                       value="<?= $residence_pincode ?>" class="form-control"
                                                       id="residence_pincode" placeholder="" required>
                                            </div>


                                            <div class="form-group col-md-3">
                                                <label for="residence_address">Residence Address</label>
                                                <input type="text" name="residence_address"
                                                       value="<?= $residence_address ?>" class="form-control"
                                                       id="residence_address" placeholder="" required>
                                            </div>


                                            <div class=" col-md-12">
                                                <h5 class="mt-2 mb-2">Emergency Contact</h5>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="emergency_name">Contact Name</label>
                                                <input type="text" name="emergency_name" value="<?= $emergency_name ?>"
                                                       class="form-control" id="emergency_name" required>
                                            </div>

                                            <div class="form-group col-md-3">
                                                <label for="emergency_no">Contact Number</label>
                                                <input type="text" name="emergency_no" value="<?= $emergency_no ?>"
                                                       class="form-control" id="emergency_no" required>
                                            </div>


                                            <div class="form-group col-md-6">
                                                <label for="contact_address">Contact Address</label>
                                                <input type="text" name="contact_address"
                                                       value="<?= $contact_address ?>" class="form-control"
                                                       id="contact_address" placeholder="" required>
                                            </div>
                                            <div class=" col-md-12">
                                              <h5 class="mt-2 mb-2">Role</h5>
                                              </div>

                                               <div class="form-group col-md-4">
                                                <label for="role_id">Select Role</label>
                                                <select name="role_id" class="form-control" id="residence_country"  required>
                                                  <option value=""></option>
                                                  <?php if($getRole){
                                                    foreach($getRole as $info){ ?>
                                                  <option <?php if($info->id==$role_id) { ?> selected <?php }?>
                                                    value="<?=$info->id?>"><?=$info->role?></option>
                                                  <?php }} ?>
                                                </select>
                                              </div>


                                            </div>
                                        <!-- /.card-body -->
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.card -->
                            </div>
                            <!--/.col (left) -->
                            <!-- right column -->
                            <div class="col-md-6">

                            </div>
                            <!--/.col (right) -->
                        </div>
                        <!-- /.row -->
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- /.content -->
    </div>

    <?php $this->load->view('includes/footer.php'); ?>
