<?php $this->load->view('includes/header') ?>
<?php $this->load->view('includes/sidebar'); ?>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper ">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <form action="<?php echo base_url() ?>/employee/employee_salary_payslip/<?= $this->uri->segment(3) ?>"
                  method="POST">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Payslip</h1>

                        </div>

                        <section class="content  col-md-12 ">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12 card card-primary card-outline card-outline-tabs">
                                        <div class="card-header p-0 border-bottom-0">


                                            <ul class="nav nav-tabs" role="tablist">

                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link " data-bs-toggle="tab"
                                                       href="<?= base_url(); ?>employee/employeeManage/edit/<?= $this->uri->segment(3) ?>"
                                                       aria-selected="false" role="tab" tabindex="-1">Info</a>


                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link bg-color" data-bs-toggle="tab"
                                                       href="<?= base_url(); ?>employee/payroll_setup/<?= $this->uri->segment(3) ?>"
                                                       aria-selected="true" role="tab">Payroll</a>
                                                </li>

                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link active bg-color" data-bs-toggle="tab" href="#"
                                                       aria-selected="false" role="tab" tabindex="-1">Pay Slips</a>
                                                </li>

                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link bg-color" data-bs-toggle="tab"
                                                       href="<?= base_url(); ?>employee/employee_advance_salary/<?= $this->uri->segment(3) ?>"
                                                       aria-selected="true" role="tab">Advance </a>
                                                </li>

                                                <!-- <li class="nav-item" role="presentation">
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
                                               <!--  <li class="nav-item" role="presentation">
                                                    <a class="nav-link bg-color" data-bs-toggle="tab" href="#Gate Pass"
                                                       aria-selected="true" role="tab">Gate Pass</a>
                                                   </li> -->

                                            </ul>


                                            <div class="container-fluid">
                                                <div class="col-12 card card-primary card-outline card-outline-tabs">
                                                    <div class="row">
                                                        <div class="col-md-6"></div>
                                                        <div class="col-sm-3" style="padding-top:2%">

                                                            <input min="2020-10" max="<?php echo date('Y-m'); ?>"
                                                                   type="month" value="<?= $year ?>-<?= $month ?>"
                                                                   name="date" id="date"
                                                                   max="<?php echo date("Y-m-d"); ?>"
                                                                   class="form-control">
                                                        </div>
                                                        <div class="col-md-3" style="padding-top: 2%">
                                                            <button type="submit" class="btn btn-primary">Get Payslip
                                                            </button>
                                                        </div>
                                                    </div>
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
                                                            $pf_no = "";
                                                            $esi_no = "";

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
                                                            $pf_no = $emp_info->pf;
                                                            $esi_no = $emp_info->esi;
                                                            $path = "uploads/employee/";
                                                            $dob = date("d/m/Y", $dob1);
                                                            $doj = date("d/m/Y", $doj1);
                                                        }
                                                    }
                                                    $des = "";
                                                    if ($designationData) {
                                                        foreach ($designationData as $dinfo) {
                                                            if ($dinfo->sk_designation_id == $designation) {
                                                                $des = $dinfo->designation_name;
                                                            }
                                                        }
                                                    }

                                                    $days = date("t");
                                                    $advanceSal = 0;

                                                    foreach ($employeeAdvanceSalData as $advSal) {
                                                        if ($advSal->status == 'Active') {
                                                            $advanceSal += $advSal->advance_amount;
                                                        }

                                                    }
                                                    $basic = 0;
                                                    $per_hour = 0;
                                                    $hra = 0;
                                                    $pf = 0;
                                                    $pt = 0;
                                                    $esi = 0;
                                                    $allowances = 0;
                                                    $dailyWage = 0;
                                                    foreach ($employeePayrollData as $payroll) {
                                                        if ($payroll->payroll_status == '1') {
                                                            $basic = $payroll->basic;
                                                            $hra = $payroll->hra;
                                                            $allowances = $payroll->allowances;
                                                            $pf = $payroll->pf;
                                                            $pt = $payroll->pt;
                                                            $per_hour = $payroll->per_hour;
                                                            $dailyWage = $payroll->gross_salary;
                                                        }

                                                    }
                                                    $dayBasic = $basic / $days;
                                                    $monthBasic = 0;
                                                    $totalEar = $basic + $hra + $allowances;

                                                    $month_name = date("F", mktime(0, 0, 0, $month, 10));

                                                    if ($employee_type == 'Permanent') {
                                                    $leaveCount = 0;
                                                    $sunCount = 0;
                                                    $weekendDays = 0;
                                                    $presentDays = 0;
                                                    foreach ($employeeWorkingData as $wdays) {
                                                        $weekDay = date('w', strtotime($wdays->attendance_date));

                                                        if ($wdays->attendance == 'P') {
                                                            if ($weekDay == 0) {
                                                                $weekendDays++;
                                                            }
                                                            $presentDays++;
                                                        }

                                                        if ($wdays->attendance == 'A') {
                                                            if ($weekDay == 0 && $sunCount < 2) {
                                                                $sunCount++;
                                                            } else {
                                                                $leaveCount++;
                                                            }
                                                        }
                                                        if ($wdays->attendance == 'HL') {
                                                            $presentDays = $presentDays + 0.5;
                                                        }

                                                    }
                                                    $monthBasic = $presentDays * $dayBasic;
                                                    $totalGross = $monthBasic + $hra + $allowances;
                                                    $totalDed = $advanceSal + $pt + $pf;
                                                    $ctc = $totalGross + $pf;
                                                    $netPay = $totalGross - $totalDed;
                                                    $takeHome = $totalGross - $totalDed;

                                                    foreach ($employeePayslip as $payslip) {

                                                        $monthBasic = $payslip->basic;
                                                        $hra = $payslip->hra;
                                                        $allowances = $payslip->allowance;
                                                        $extra = $payslip->extra;
                                                        $presentDays = $payslip->present_days;
                                                        $otHours = $payslip->ot_hours;
                                                        $totalGross = $payslip->gross_salary;
                                                        $ctc = $payslip->ctc;
                                                        $pf = $payslip->epf;
                                                        $esi = $payslip->esi;
                                                        $pt = $payslip->pt;
                                                        $advanceSal = $payslip->advance;
                                                        $takeHome = $payslip->take_home;
                                                        $totalDed = $payslip->total_deduction;
                                                        $netPay = $payslip->gross_salary;
                                                    }
                                                    ?>

                                                    <div class="container mt-5 mb-5" style="width:70%">
                                                        <div class="row">
                                                            <form role="form" id="quickForm" name="myForm"
                                                                  action="<?= base_url() ?>employee/payslip_save/<?= base64_encode($sk_employee_id) ?>"
                                                                  method="post">
                                                                <input min="2020-10" max="<?php echo date('Y-m'); ?>"
                                                                       type="hidden" value="<?= $year ?>-<?= $month ?>"
                                                                       name="date" id="date"
                                                                       max="<?php echo date("Y-m-d"); ?>"
                                                                       class="form-control">
                                                                <div class="col-md-12">
                                                                    <div class="text-center lh-1 mb-2">
                                                                        <h6 class="fw-bold">Payslip</h6> <span
                                                                                class="fw-normal">Payment slip for the month of <?php echo $month_name; ?>  <?= $year; ?></span>
                                                                    </div>
                                                                    <!--                    <div class="d-flex justify-content-end"> <span>Working Branch:ROHINI</span> </div>-->

                                                                    <input type="hidden" value="<?= $dayBasic ?>"
                                                                           id="dayBasic">
                                                                    <div class="row">
                                                                        <div class="col-md-10">
                                                                            <div class="row">
                                                                                <div class="col-md-6">

                                                                                    <!--                                           --><?php //echo "dayyyyyyyyyyyyyy"+$weekDay; ?>
                                                                                    <div><span class="fw-bolder">Employee Name:&nbsp;</span>
                                                                                        <span class="ms-3"><strong><?= $employee_name ?></strong></span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div><span class="fw-bolder">EMP Code</span>
                                                                                        <span
                                                                                                class="ms-3"><?= $employee_code ?></span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div><span class="fw-bolder">Emp Type.</span>
                                                                                        <span
                                                                                                class="ms-3"><?= $employee_type ?></span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div>
                                                                                        <span class="fw-bolder">PF No.</span>
                                                                                        <span
                                                                                                class="ms-3"><?= $pf_no ?></span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div>
                                                                                        <span class="fw-bolder">ESI No.</span>
                                                                                        <span
                                                                                                class="ms-3"><?= $esi_no ?></span>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div><span class="fw-bolder">Designation</span>
                                                                                        <span
                                                                                                class="ms-3"><?= $des ?></span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div>
                                                                                        <span class="fw-bolder">Ac No.</span>
                                                                                        <span
                                                                                                class="ms-3">*******0701</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <table class="mt-4 table table-bordered">
                                                                            <thead class="bg-dark text-white">
                                                                            <tr>
                                                                                <th scope="col">Description</th>
                                                                                <th scope="col">Amount (Current Month
                                                                                    Earnings)
                                                                                </th>
                                                                                <th scope="col">Amount (Fixed)</th>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                            <tr>
                                                                                <td scope="row">Basic</td>
                                                                                <td><input type="number" min="0"
                                                                                           id="basic" name="basic"
                                                                                           style="border:none;background-color: #f4f6f9;width: 100%;"
                                                                                           value="<?= $monthBasic ?>"
                                                                                           readonly></td>
                                                                                <td><?= $basic; ?></td>
                                                                            </tr>

                                                                            <tr>
                                                                                <td scope="row">HRA</td>
                                                                                <td><input type="number" min="0"
                                                                                           id="hra" name="hra"
                                                                                           style="border:none;background-color: #f4f6f9;width: 100%;"
                                                                                           value="<?= $hra; ?>"
                                                                                           onchange="adjustPay()"></td>
                                                                                <td><?= $hra; ?></td>


                                                                            </tr>
                                                                            <tr>
                                                                                <td scope="row">Special Allowance</td>
                                                                                <td><input type="number" min="0"
                                                                                           id="allowances"
                                                                                           name="allowances"
                                                                                           style="border:none;background-color: #f4f6f9;width: 100%;"
                                                                                           value="<?= $allowances; ?>"
                                                                                           onchange="adjustPay()"></td>
                                                                                <td><?= $allowances; ?></td>

                                                                            </tr>
                                                                            <tr>
                                                                                <td scope="row">Extra(Days)</td>
                                                                                <td><input type="number" id="extra"
                                                                                           min="0" name="extra"
                                                                                           style="border:none;background-color: #f4f6f9;width: 100%;"
                                                                                           value="0"
                                                                                           onchange="adjustPay()"></td>
                                                                                <td>0</td>

                                                                            </tr>
                                                                            <tr>
                                                                                <td scope="row">Total Present(Days)</td>
                                                                                <td><input type="number"
                                                                                           id="presentDays"
                                                                                           name="presentDays"
                                                                                           style="border:none;background-color: #f4f6f9;width: 100%;"
                                                                                           value="<?= $presentDays ?>"
                                                                                           onchange="adjustPay()"></td>
                                                                                <td><?= $days ?></td>
                                                                            </tr>

                                                                            <tr>
                                                                                <th scope="row">Gross Salary(A)</th>
                                                                                <td><input type="text" min="0"
                                                                                           id="grossSalary"
                                                                                           name="grossSalary"
                                                                                           style="border:none;background-color: #f4f6f9;width: 100%;"
                                                                                           value="<?= $totalGross ?>"
                                                                                           readonly></td>
                                                                                <td><?= $totalEar; ?></td>


                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row">CTC(A+B)</th>
                                                                                <td><input type="text" min="0" id="ctc"
                                                                                           name="ctc"
                                                                                           style="border:none;background-color: #f4f6f9;width: 100%;"
                                                                                           value="<?= $ctc ?>" readonly>
                                                                                </td>
                                                                                <td><?= $totalEar + $pf; ?></td>


                                                                            </tr>

                                                                            <tr>
                                                                                <th></th>
                                                                                <th scope="row">Take Home Calculations
                                                                                </th>
                                                                                <th scope="row"></th>
                                                                            </tr>

                                                                            <tr>
                                                                                <th scope="row">Deductions(B)</th>
                                                                                <td></td>
                                                                                <td></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td scope="row">Employer Provident
                                                                                    Fund
                                                                                </td>
                                                                                <td><input type="number" min="0" id="pf"
                                                                                           name="pf"
                                                                                           style="border:none;background-color: #f4f6f9;width: 100%;"
                                                                                           value="<?= $pf ?>"
                                                                                           onchange="adjustPay()"></td>
                                                                                <td><?= $pf ?></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td scope="row">Professional Tax</td>
                                                                                <td><input type="number" min="0" id="pt"
                                                                                           name="pt"
                                                                                           style="border:none;background-color: #f4f6f9;width: 100%;"
                                                                                           value="<?= $pt ?>"
                                                                                           onchange="adjustPay()"></td>
                                                                                <td><?= $pt; ?></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td scope="row">ESIC</td>
                                                                                <td><input type="number" min="0"
                                                                                           id="esi" name="esi"
                                                                                           style="border:none;background-color: #f4f6f9;width: 100%;"
                                                                                           value="<?= $esi ?>" value="0"
                                                                                           onchange="adjustPay()"></td>
                                                                                <td></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td scope="row">Advance Salary
                                                                                    Deductions
                                                                                </td>
                                                                                <td><input type="number" min="0"
                                                                                           id="advance" name="advance"
                                                                                           style="border:none;background-color: #f4f6f9;width: 100%;"
                                                                                           value="<?= $advanceSal ?>"
                                                                                           onchange="adjustPay()"></td>
                                                                                <td>0</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td scope="row">Total Deductions(D)</td>
                                                                                <td><input type="text" min="0"
                                                                                           id="totalDeductions"
                                                                                           name="totalDeductions"
                                                                                           style="border:none;background-color: #f4f6f9;width: 100%;"
                                                                                           value="<?= $totalDed; ?>"
                                                                                           readonly></td>
                                                                                <td><?= $pt + $pf ?></td>
                                                                            </tr>

                                                                            <tr class="border-top">

                                                                                <th scope="row">Take Home(A-D)</th>
                                                                                <td><input type="text" min="0"
                                                                                           id="totalEarnings"
                                                                                           name="totalEarnings"
                                                                                           style="border:none;background-color: #f4f6f9;width: 100%;"
                                                                                           value="<?= $takeHome; ?>"
                                                                                           readonly></td>
                                                                                <td><?= $totalEar - ($pf + $pt) ?></td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-4"><br> <span id="netPay"
                                                                                                         class="fw-bold">Net Pay : <?= $takeHome ?></span>
                                                                        </div>
                                                                        <div class="border col-md-8">
                                                                            <div class="d-flex flex-column"
                                                                                 id="amountWords"><span>In Words</span>
                                                                                <span><?= "Rupees  Only" ?></span></div>
                                                                        </div>
                                                                    </div>
                                                                    <!--                            <div class="d-flex justify-content-end">-->
                                                                    <!--                                <div class="d-flex flex-column mt-2"><span class="fw-bolder">For Sreemayee</span> <span-->
                                                                    <!--                                            class="mt-4">Authorised Signatory</span></div>-->
                                                                    <!--                            </div>-->
                                                                    <div></div>
                                                                    <div class="d-flex justify-content-end">
                                                                    </div>
                                                                </div>
                                                        </div>
                                                        <br>
            <button type="submit" class="btn btn-primary" style="float: right">Approve Payslip</button>
                        </section>
            
    
                    </div>
                </div>
            </form>

<?php } else {
    $dayCount = 0;
    $otHours = 0;
    $presentDays = 0;
    $basic = 0;
    $hra = 0;
    $pf = 0;
    $pt = 0;
    $esi = 0;
    $allowances = 0;
    foreach ($employeeWorkingData as $wdays) {
        if ($wdays->attendance == 'P') {
            $presentDays++;
            $otHours = $otHours + $wdays->total_hrs;
        }

    }
    $monthBasic = $presentDays * $dailyWage;
    $basic = $dailyWage * $days;
    $otAmount = $otHours * $per_hour;
    $totalGross = $monthBasic + $hra + $allowances + $otAmount;
    $totalDed = $advanceSal + $pt + $pf;
    $ctc = $totalGross + $pf;
    $netPay = $totalGross - $totalDed;
    $takeHome = $totalGross - $totalDed;
//                $basicAmount = $BasicHours * $per_hour;
//                $totalEarnings = $basicAmount + $otAmount;
//                $netPay = $totalEarnings + $advanceSal;
//            echo date('Y-m-01');
//            echo date('Y-m-t');
//            echo $basicAmount;
//            echo $otAmount;
    foreach ($employeePayslip as $payslip) {

        $monthBasic = $payslip->basic;
        $hra = $payslip->hra;
        $allowances = $payslip->allowance;
        $extra = $payslip->extra;
        $presentDays = $payslip->present_days;
        $otHours = $payslip->ot_hours;
        $totalGross = $payslip->gross_salary;
        $ctc = $payslip->ctc;
        $pf = $payslip->epf;
        $esi = $payslip->esi;
        $pt = $payslip->pt;
        $advanceSal = $payslip->advance;
        $takeHome = $payslip->take_home;
        $totalDed = $payslip->total_deduction;
        $netPay = $payslip->gross_salary;
        $otAmount = $payslip->ot_earnings;
    }
    ?>
    <input value="<?= $per_hour ?>" id="perHour" type="hidden">
    <div class="container mt-5 mb-5" style="width:70%">
        <div class="row">
            <form role="form" id="quickForm" name="myForm"
                  action="<?= base_url() ?>employee/payslip_save/<?= base64_encode($sk_employee_id) ?>"
                  method="post">
                <input min="2020-10" max="<?php echo date('Y-m'); ?>" type="hidden" value="<?= $year ?>-<?= $month ?>"
                       name="date" id="date" max="<?php echo date("Y-m-d"); ?>" class="form-control">
                <div class="col-md-12">
                    <div class="text-center lh-1 mb-2">
                        <h6 class="fw-bold">Payslip</h6> <span
                                class="fw-normal">Payment slip for the month of <?php echo $month_name; ?>  <?= $year; ?></span>
                    </div>
                    <!--                    <div class="d-flex justify-content-end"> <span>Working Branch:ROHINI</span> </div>-->

                    <input type="hidden" value="<?= $dailyWage ?>" id="dayBasic">
                    <div class="row">
                        <div class="col-md-10">
                            <div class="row">
                                <div class="col-md-6">

                                    <!--                                           --><?php //echo "dayyyyyyyyyyyyyy"+$weekDay; ?>
                                    <div><span class="fw-bolder">Employee Name:&nbsp;</span> <span
                                                class="ms-3"><strong><?= $employee_name ?></strong></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div><span class="fw-bolder">EMP Code</span> <span
                                                class="ms-3"><?= $employee_code ?></span></div>
                                </div>
                                <div class="col-md-6">
                                    <div><span class="fw-bolder">Emp Type.</span> <span
                                                class="ms-3"><?= $employee_type ?></span></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div><span class="fw-bolder">PF No.</span> <span
                                                class="ms-3"><?= $pf_no ?></span></div>
                                </div>
                                <div class="col-md-6">
                                    <div><span class="fw-bolder">ESI No.</span> <span
                                                class="ms-3"><?= $esi_no ?></span></div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div><span class="fw-bolder">Designation</span> <span
                                                class="ms-3"><?= $des ?></span></div>
                                </div>
                                <div class="col-md-6">
                                    <div><span class="fw-bolder">Ac No.</span> <span
                                                class="ms-3">*******0701</span></div>
                                </div>
                            </div>
                        </div>
                        <table class="mt-4 table table-bordered">
                            <thead class="bg-dark text-white">
                            <tr>
                                <th scope="col">Description</th>
                                <th scope="col">Amount (Current Month Earnings)</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td scope="row">Basic</td>
                                <td><input type="number" min="0" id="basic" name="basic"
                                           style="border:none;background-color: #f4f6f9;width: 100%;"
                                           value="<?= $monthBasic ?>" readonly></td>
                            </tr>

                            <tr>
                                <td scope="row">Overtime Earnings</td>
                                <td><input type="text" id="otEarnings" min="0" name="otEarnings"
                                           style="border:none;background-color: #f4f6f9;width: 100%;"
                                           value="<?= $otAmount ?>" readonly onchange="adjustPay()"></td>

                            </tr>

                            <tr>
                                <td scope="row">HRA</td>
                                <td><input type="number" min="0" id="hra" name="hra"
                                           style="border:none;background-color: #f4f6f9;width: 100%;"
                                           value="<?= $hra; ?>" onchange="adjustPay()"></td>


                            </tr>
                            <tr>
                                <td scope="row">Special Allowance</td>
                                <td><input type="number" min="0" id="allowances" name="allowances"
                                           style="border:none;background-color: #f4f6f9;width: 100%;"
                                           value="<?= $allowances; ?>" onchange="adjustPay()"></td>

                            </tr>
                            <tr>
                                <td scope="row">OT Hours</td>
                                <td><input type="number" id="otHours" min="0" name="otHours"
                                           style="border:none;background-color: #f4f6f9;width: 100%;"
                                           value="<?= $otHours ?>" onchange="adjustPay()"></td>

                            </tr>
                            <tr>
                                <td scope="row">Total Present(Days)</td>
                                <td><input type="number" id="presentDays" max="31" name="presentDays"
                                           style="border:none;background-color: #f4f6f9;width: 100%;"
                                           value="<?= $presentDays ?>" onchange="adjustPay()"></td>
                            </tr>

                            <tr>
                                <th scope="row">Gross Salary(A)</th>
                                <td><input type="text" min="0" id="grossSalary" name="grossSalary"
                                           style="border:none;background-color: #f4f6f9;width: 100%;"
                                           value="<?= $totalGross ?>" readonly></td>


                            </tr>
                            <tr>
                                <th scope="row">CTC(A+B)</th>
                                <td><input type="text" min="0" id="ctc" name="ctc"
                                           style="border:none;background-color: #f4f6f9;width: 100%;"
                                           value="<?= $ctc ?>" readonly></td>


                            </tr>

                            <tr>
                                <th></th>
                                <th scope="row">Take Home Calculations</th>
                            </tr>

                            <tr>
                                <th scope="row">Deductions(B)</th>
                                <td></td>
                            </tr>
                            <tr>
                                <td scope="row">Employer Provident Fund</td>
                                <td><input type="number" min="0" id="pf" name="pf"
                                           style="border:none;background-color: #f4f6f9;width: 100%;" value="<?= $pf ?>"
                                           onchange="adjustPay()"></td>
                            </tr>
                            <tr>
                                <td scope="row">Professional Tax</td>
                                <td><input type="number" min="0" id="pt" name="pt"
                                           style="border:none;background-color: #f4f6f9;width: 100%;" value="<?= $pt ?>"
                                           onchange="adjustPay()"></td>
                            </tr>
                            <tr>
                                <td scope="row">ESIC</td>
                                <td><input type="number" min="0" id="esi" name="esi"
                                           style="border:none;background-color: #f4f6f9;width: 100%;"
                                           value="<?= $esi ?>" value="0"
                                           onchange="adjustPay()"></td>
                            </tr>
                            <tr>
                                <td scope="row">Advance Salary Deductions</td>
                                <td><input type="number" min="0" id="advance" name="advance"
                                           style="border:none;background-color: #f4f6f9;width: 100%;"
                                           value="<?= $advanceSal ?>"
                                           onchange="adjustPay()"></td>
                            </tr>
                            <tr>
                                <td scope="row">Total Deductions(D)</td>
                                <td><input type="text" min="0" id="totalDeductions" name="totalDeductions"
                                           style="border:none;background-color: #f4f6f9;width: 100%;"
                                           value="<?= $totalDed; ?>" readonly></td>
                            </tr>

                            <tr class="border-top">

                                <th scope="row">Take Home(A-D)</th>
                                <td><input type="text" min="0" id="totalEarnings" name="totalEarnings"
                                           style="border:none;background-color: #f4f6f9;width: 100%;"
                                           value="<?= $takeHome; ?>" readonly></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><br> <span id="netPay"
                                                         class="fw-bold">Net Pay : <?= $takeHome ?></span></div>
                        <div class="border col-md-8">
                            <div class="d-flex flex-column" id="amountWords"><span>In Words</span>
                                <span><?= "Rupees  Only" ?></span></div>
                        </div>
                    </div>
                    <!--                            <div class="d-flex justify-content-end">-->
                    <!--                                <div class="d-flex flex-column mt-2"><span class="fw-bolder">For Sreemayee</span> <span-->
                    <!--                                            class="mt-4">Authorised Signatory</span></div>-->
                    <!--                            </div>-->
                    <div></div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Approve Payslip</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php } ?>
<input id="netPey" type="hidden" value="<?= $netPay ?>">
</section>
<!-- /.content -->
</div>

<?php $this->load->view('includes/footer.php'); ?>


