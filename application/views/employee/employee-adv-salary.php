<?php $this->load->view('includes/header') ?>
<?php $this->load->view('includes/sidebar'); ?>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Employee Advance Sal</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Employee</a></li>
                            <li class="breadcrumb-item active">Advance Salary</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 card card-primary card-outline card-outline-tabs">
                        <div class="card-header p-0 border-bottom-0">


                            <ul class="nav nav-tabs" role="tablist">


                                <li class="nav-item" role="presentation">
                                    <a class="nav-link bg-color" data-bs-toggle="tab"
                                       href="<?= base_url(); ?>employee/employeeManage/edit/<?= $this->uri->segment(3) ?>"
                                       aria-selected="false" role="tab" tabindex="-1">Info</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link bg-color" data-bs-toggle="tab"
                                       href="<?= base_url(); ?>employee/payroll_setup/<?= $this->uri->segment(3) ?>"
                                       aria-selected="true" role="tab">Payroll</a>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <a class="nav-link bg-color" data-bs-toggle="tab"
                                       href="<?= base_url(); ?>employee/employee_salary_payslip/<?= $this->uri->segment(3) ?>"
                                       aria-selected="true" role="tab">Pay Slips</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active bg-color" data-bs-toggle="tab"
                                       href="#"
                                       aria-selected="true" role="tab">Advance </a>
                                </li>

                              <!--   <li class="nav-item" role="presentation">
                                    <a class="nav-link bg-color" data-bs-toggle="tab"
                                       href="<?= base_url(); ?>store/issued-stock/<?= $this->uri->segment(3) ?>"
                                       aria-selected="true" role="tab">Issued
                                        Stock</a>
                                </li> -->
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link bg-color" data-bs-toggle="tab"
                                       href="<?= base_url(); ?>employee/employee_experience/<?= $this->uri->segment(3) ?>"
                                       aria-selected="true" role="tab">Experience</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link bg-color" data-bs-toggle="tab"
                                       href="<?= base_url(); ?>employee/employee_education/<?= $this->uri->segment(3) ?>"
                                       aria-selected="true" role="tab">Education</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link bg-color" data-bs-toggle="tab"
                                       href="<?= base_url(); ?>employee/employee_family/<?= $this->uri->segment(3) ?>"
                                       aria-selected="true" role="tab">Family</a>
                                </li>
                                <li class="nav-item" role="presentation" >
                                    <a class="nav-link bg-color" data-bs-toggle="tab"
                                       href="<?= base_url(); ?>employee/employee_document/<?= $this->uri->segment(3) ?>"
                                       aria-selected="true" role="tab">Documents</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link bg-color" data-bs-toggle="tab"
                                       href="<?= base_url(); ?>employee/employee_bank/<?= $this->uri->segment(3) ?>" aria-selected="true"
                                       role="tab">Bank Details</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link " data-bs-toggle="tab" href="<?= base_url(); ?>employee/employee_supervisor/<?= $this->uri->segment(3) ?>" aria-selected="true"
                                       role="tab">Assign Supervisor</a>
                                </li>

                                <!-- <li class="nav-item" role="presentation">
                                    <a class="nav-link bg-color" data-bs-toggle="tab" href="#Gate Pass"
                                       aria-selected="true" role="tab">Gate Pass</a>

                                </li> -->
                            </ul>
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

                                    $sk_employee_id = $emp_info->sk_employee_id;
                                    $employee_type = $emp_info->employee_type;
                                    $designation = $emp_info->designation;
                                    $employee_code = $emp_info->employee_code;
                                    $doj1 = strtotime($emp_info->doj);
                                    $qualification = $emp_info->qualification;
                                    $experience = $emp_info->experience;
                                    $employee_name = $emp_info->employee_name;
                                    $dob1 = strtotime($emp_info->dob);
                                    $religion = $emp_info->religion;
                                    $mobile = $emp_info->mobile;
                                    $email = $emp_info->email;
                                    $aadhar = $emp_info->aadhar;
                                    $driving_licence = $emp_info->driving_licence;
                                    $blood_group = $emp_info->blood_group;
                                    $gender = $emp_info->gender;
                                    $father_name = $emp_info->father_name;
                                    $country = $emp_info->country;
                                    $state = $emp_info->state;
                                    $place = $emp_info->place;
                                    $permanent_address = $emp_info->permanent_address;
                                    $residence_country = $emp_info->residence_country;
                                    $residence_state = $emp_info->residence_state;
                                    $residence_place = $emp_info->residence_place;
                                    $residence_address = $emp_info->residence_address;
                                    $emergency_name = $emp_info->emergency_name;
                                    $emergency_no = $emp_info->emergency_no;
                                    $contact_address = $emp_info->contact_address;
                                    $employee_pic = $emp_info->employee_pic;
                                    $path = "uploads/employee/";
                                    $dob = date("d/m/Y", $dob1);
                                    $doj = date("d/m/Y", $doj1);
                                }
                            } ?>
                            <!-- left column -->
                            <div class="pt-3 row">
                                <div class="col-md-4">
                                    <!-- jquery validation -->
                                    <div class="card card-default">
                                        <div class="card-header">
                                            <h3 class="card-title">Pay advances <small></small></h3>
                                        </div>
                                        <!-- /.card-header -->
                                        <!-- form start -->
                                        <form role="form" id="quickForm" name="myForm"
                                              action="<?= base_url() ?>employee/advance_save/<?= base64_encode($sk_employee_id) ?>"
                                              method="post">
                                            <div class="card-body row">
                                                <div class="form-group col-md-12">
                                                    <label for="transfer_qty">Paid Date</label>
                                                    <input type="date" name="date" class="form-control" id="date"
                                                           placeholder="XXXX"
                                                           required value="">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="transfer_qty">Amount</label>
                                                    <input type="text" name="advance" class="form-control" id="advance"
                                                           placeholder="0" value="" required onchange="get_hra();">
                                                </div>
                                            </div>
                                            <!-- /.card-body -->
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- /.card -->
                                </div>
                                <div class="col-md-5">
                                    <!-- jquery validation -->
                                    <div class="card card-default">
                                        <div class="card-header">
                                            <h3 class="card-title">Advances Paid </h3>
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body">
                                            <table class="table table-bordered table-striped">
                                                <thead>
                                                <tr>
                                                    <th>Date</th>

                                                    <th>Amount</th>
                                                </tr>

                                                </thead>
                                                <tbody>
                                                <?php foreach ($employeeAdvanceSalData as $sal) {
                                                    ?>
                                                    <tr>
                                                        <td><?= $sal->date; ?></td>
                                                        <td><?= $sal->advance_amount; ?></td>
                                                    </tr>
                                                <?php } ?>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!--/.col (left) -->
                            <!-- right column -->
                            <!--/.col (right) -->
                        </div>
                        <!-- /.row -->

                    </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

    <?php $this->load->view('includes/footer.php'); ?>


