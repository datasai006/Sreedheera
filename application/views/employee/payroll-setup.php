<?php $this->load->view('includes/header') ?>
<?php $this->load->view('includes/sidebar'); ?>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Payroll Setup</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Employee</a></li>
                            <li class="breadcrumb-item active">Setup</li>
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
                                    <a class="nav-link " data-bs-toggle="tab"
                                       href="<?=base_url();?>employee/employeeManage/edit/<?= $this->uri->segment(3) ?>"
                                       aria-selected="false" role="tab" tabindex="-1">Info</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#" aria-selected="true"
                                       role="tab">Payroll</a>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <a class="nav-link bg-color" data-bs-toggle="tab"
                                       href="<?=base_url();?>employee/employee_salary_payslip/<?= $this->uri->segment(3) ?>"
                                       aria-selected="true" role="tab">Pay Slips</a>
                                </li>



                                <li class="nav-item" role="presentation">
                                    <a class="nav-link " data-bs-toggle="tab"
                                       href="<?=base_url();?>employee/employee_advance_salary/<?= $this->uri->segment(3) ?>"
                                       aria-selected="true" role="tab">Advance </a>
                                </li>

                                <!-- <li class="nav-item" role="presentation">
                                    <a class="nav-link bg-color" data-bs-toggle="tab"
                                       href="<?=base_url();?>store/issued-stock/<?= $this->uri->segment(3)?>" aria-selected="true" role="tab">Issued
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
                                    <a class="nav-link " data-bs-toggle="tab" href="#Gate Pass" aria-selected="true"
                                       role="tab">Gate Pass</a>
                                </li> -->
                            </ul>
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
                                            <h3 class="card-title">Setup Payroll <small></small></h3>
                                        </div>
                                        <!-- /.card-header -->
                                        <!-- form start -->
                                        <?php if ($employee_type == 'Permanent') { ?>
                                            <form role="form" id="quickForm" name="myForm"
                                                  action="<?= base_url() ?>employee/payroll_save/<?= base64_encode($sk_employee_id) ?>"
                                                  method="post">
                                                <div class="card-body row">


                                                    <div class="form-group col-md-12">
                                                        <label for="transfer_qty">Basic</label>
                                                        <input type="text" name="basic_salary" class="form-control"
                                                               id="basic_salary" placeholder="XXXX" required
                                                               value="<?= $basic ?>">
                                                    </div>
                                                    <!--                                        <div class="form-group col-md-4">-->
                                                    <!--                                            <label for="transfer_qty">HRA%</label>-->
                                                    <!--                                            <input type="text" name="hra_per" class="form-control" id="hra_per"-->
                                                    <!--                                                   placeholder="XXXX" value="-->
                                                    <? //= $hra_per ?><!--" required-->
                                                    <!--                                                   onchange="get_hra();">-->
                                                    <!--                                        </div>-->
                                                    <div class="form-group col-md-8">
                                                        <label for="transfer_qty">HRA</label>
                                                        <input type="text" name="hra" class="form-control" id="hra"
                                                               placeholder="XXXX" value="<?= $hra ?>" required>
                                                    </div>

                                                    <!--                                        <div class="form-group col-md-4">-->
                                                    <!--                                            <label for="transfer_qty">Allowances%</label>-->
                                                    <!--                                            <input type="text" name="allowances_per" class="form-control"-->
                                                    <!--                                                   id="allowances_per" value="-->
                                                    <? //= $allowances_per ?><!--" placeholder="XXXX"-->
                                                    <!--                                                   required onchange="get_allowances();">-->
                                                    <!--                                        </div>-->
                                                    <div class="form-group col-md-8">
                                                        <label for="transfer_qty">Allowances</label>
                                                        <input type="text" name="allowances" class="form-control"
                                                               id="allowances"
                                                               value="<?= $allowances ?>" placeholder="XXXX">
                                                    </div>

                                                    <!--                                        <div class="form-group col-md-4">-->
                                                    <!--                                            <label for="transfer_qty">PF%</label>-->
                                                    <!--                                            <input type="text" name="pf_per" class="form-control" id="pf_per"-->
                                                    <!--                                                   placeholder="XXXX" value="-->
                                                    <? //= $pf_per ?><!--" required-->
                                                    <!--                                                   onchange="get_pf();">-->
                                                    <!--                                        </div>-->
                                                    <div class="form-group col-md-8">
                                                        <label for="transfer_qty">PF</label>
                                                        <input type="text" name="pf" class="form-control" id="pf"
                                                               placeholder="XXXX"
                                                               value="<?= $pf ?>">
                                                    </div>

                                                    <div class="form-group col-md-12">
                                                        <label for="transfer_qty">PT</label>
                                                        <input type="text" name="pt" class="form-control" id="pt"
                                                               placeholder="XXXX"
                                                               value="<?= $pt ?>">
                                                    </div>
                                                    <!--                                        <div class="form-group col-md-12">-->
                                                    <!--                                            <label for="transfer_qty">Total Salary</label>-->
                                                    <!--                                            <input type="text" name="total" class="form-control" id="total"-->
                                                    <!--                                                   value="-->
                                                    <? //= $total ?><!--" placeholder="XXXX" required readonly="">-->
                                                    <!--                                        </div>-->


                                                </div>
                                                <!-- /.card-body -->
                                                <div class="card-footer">
                                                    <button type="submit" class="btn btn-primary">Save</button>
                                                </div>
                                            </form>
                                        <?php } else { ?>
                                            <form role="form" id="quickForm" name="myForm"
                                                  action="<?= base_url() ?>employee/payroll_save/<?= base64_encode($sk_employee_id) ?>"
                                                  method="post">
                                                <div class="card-body row">

                                                    <div class="form-group col-md-12">
                                                        <label for="transfer_qty">Daily wage</label>
                                                        <input type="text" name="total" class="form-control"
                                                               id="total_wage"
                                                               placeholder="In Rupees" required value="">
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label for="transfer_qty">Per Hour</label>
                                                        <input type="text" name="per_hour" class="form-control"
                                                               id="per_hour"
                                                               placeholder="In Rupees" required value="">
                                                    </div>

                                                </div>
                                                <div class="card-footer">
                                                    <button type="submit" class="btn btn-primary">Save</button>
                                                </div>
                                            </form>
                                        <?php } ?>
                                    </div>
                                    <!-- /.card -->
                                </div>
                                <div class="col-md-8">
                                    <!-- jquery validation -->
                                    <div class="card card-default">
                                        <div class="card-header">
                                            <h3 class="card-title">Payroll </h3>
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body row">
                                            <table class="table table-bordered table-striped">
                                                <?php if ($employee_type == 'Permanent') { ?>
                                                    <thead>
                                                    <tr>
                                                        <th>Basic</th>

                                                        <th>HRA</th>
                                                        <th>Allowances</th>

                                                        <th>PF</th>

                                                        <th>PT</th>
                                                        <!--                                                <th>Total Salary</th>-->
                                                        <th>Status</th>
                                                    </tr>
                                                    </thead>
                                                    <?php if ($ShowPayroll) { ?>
                                                        <tbody>
                                                        <tr>
                                                            <?php foreach ($ShowPayroll

                                                            as $inf){
                                                            if ($inf->payroll_status == 1) {
                                                                $pstatus = "active";
                                                            } else {
                                                                $pstatus = "inactive";
                                                            } ?>
                                                            <td><?= $inf->basic ?></td>
                                                            <td><?= $inf->hra ?></td>
                                                            <td><?= $inf->allowances ?></td>
                                                            <td><?= $inf->pf ?></td>
                                                            <td><?= $inf->pt ?></td>
                                                            <td><?= $pstatus ?></td>
                                                        </tr>
                                                        <?php } ?>
                                                        </tbody>
                                                    <?php } ?>
                                                <?php } else { ?>
                                                    <thead>
                                                    <tr>
                                                        <th>Start Date</th>
                                                        <th>Daily Wage</th>
                                                        <th>Per Hour(in Rupees)</th>
                                                        <th>Status</th>
                                                    </tr>
                                                    </thead>
                                                    <?php if ($ShowPayroll) { ?>
                                                        <tbody>
                                                        <tr>
                                                            <?php foreach ($ShowPayroll

                                                            as $inf){
                                                            if ($inf->payroll_status == 1) {
                                                                $pstatus = "active";
                                                            } else {
                                                                $pstatus = "inactive";
                                                            } ?>
                                                            <td><?= $inf->payroll_set_date ?></td>
                                                            <td><?= $inf->gross_salary ?> </td>
                                                            <td><?= $inf->per_hour ?> </td>
                                                            <td><?= $pstatus ?></td>
                                                        </tr>
                                                        <?php } ?>
                                                        </tbody>
                                                    <?php } ?>
                                                <?php } ?>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- /.card -->

                                </div>


                            </div>
                            <!--/.col (left) -->
                            <!-- right column -->
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


