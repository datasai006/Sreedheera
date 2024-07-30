<?php $this->load->view('includes/header') ?>
<?php $this->load->view('includes/sidebar'); ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>View Employee</h1>
          </div>
          <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Employee</a></li>
              <li class="breadcrumb-item active">View</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-4">
            <!-- jquery validation -->
            <div class="card card-default">
              
            
            </div>
            <!-- /.card -->
            </div>



            <div class="card col-md-12">
            <div class="card-header">
              <h3 class="card-title">Employee</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body ">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sl.No</th>
                  <th>Employee Code</th>
                  <th>Employee Name</th>
                  <th>Father Name</th>
                  <th>Designation</th>
                  <th>Mobile</th>
                 
                 
                  <th>Gender</th>                 
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $i=1;

                  $designation='';
                   foreach($employeeActiveData as $inf) {
                    $designation=$inf->designation;
                   
                  
                ?>
                <tr>
                  <td><?php echo $i;?></td>
                  <td><?php echo $inf->employee_code?></td>
                  <td><?php echo $inf->employee_name?></td>
                  <td><?php echo $inf->employee_type?></td>
                  <td><?php echo $inf->designation_name?></td> 
                
                  <td><?php echo $inf->mobile?></td> 
                  <td><?php echo $inf->gender?></td>                  
                  <td> 
                      <?php if($inf->employee_status) {?>
                      <a target="blank" href="<?=base_url()?>employee/employee-registration/<?=base64_encode($inf->sk_employee_id)?>"><i title="Print" class="nav-icon fas fa-print"></i></a> |
<!--                      <a href="--><?//=base_url()?><!--employee/employee-document/--><?//=base64_encode($inf->sk_employee_id)?><!--"><i title="Upload Document" class="nav-icon fas fa-address-card"></i></a> |-->
<!--                       <a href="--><?//=base_url()?><!--employee/employee-education/--><?//=base64_encode($inf->sk_employee_id)?><!--"><i title="Education Qualification" class="nav-icon fas fa-book"></i></a> | -->
<!--                       <a href="--><?//=base_url()?><!--employee/employee-experience/--><?//=base64_encode($inf->sk_employee_id)?><!--"><i title="Work Experience" class="nav-icon fas fa-briefcase"></i></a> | -->
<!--                       <a href="--><?//=base_url()?><!--employee/employee-family/--><?//=base64_encode($inf->sk_employee_id)?><!--"><i title="Family Details" class="nav-icon fas fa-users"></i></a> | -->
<!--                       <a href="--><?//=base_url()?><!--employee/employee-bank/--><?//=base64_encode($inf->sk_employee_id)?><!--"><i title="Bank Details" class="nav-icon fas fa-piggy-bank"></i></a> | -->
<!--                       <a href="--><?//=base_url()?><!--employee/employee-other/--><?//=base64_encode($inf->sk_employee_id)?><!--"><i title="Other Details" class="nav-icon fas fa-info-circle"></i></a> | -->
                       <a href="<?=base_url()?>employee/employeeManage/edit/<?=base64_encode($inf->sk_employee_id)?>"><i title="Edit" class="nav-icon fas fa-edit"></i></a>
                        |
                       <a href="<?=base_url()?>employee/employeeManage/delete/<?=base64_encode($inf->sk_employee_id)?>"><i title="Delete" class="nav-icon fas fa-trash"></i></a>
                      <?php }else {?>
                        <a href="<?=base_url()?>employee/employeeManage/active/<?=base64_encode($inf->sk_employee_id)?>"><i title="Activate" class="nav-icon fas fa-check"></i></a>
                      <?php }?>
                  </td>
                </tr>
                    <?php $i++;}
                foreach($employeeInActiveData as $inf) {
                $designation=$inf->designation;
                ?>
                <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $inf->employee_code?></td>
                    <td><?php echo $inf->employee_name?></td>
                    <td><?php echo $inf->employee_type?></td>
                    <td><?php echo $inf->designation_name?></td>

                    <td><?php echo $inf->mobile?></td>
                    <td><?php echo $inf->gender?></td>
                    <td>
                        <?php if($inf->employee_status) {?>
                            <a target="blank" href="<?=base_url()?>employee/employee-registration/<?=base64_encode($inf->sk_employee_id)?>"><i title="Print" class="nav-icon fas fa-print"></i></a> |
                            <a href="<?=base_url()?>employee/employee-document/<?=base64_encode($inf->sk_employee_id)?>"><i title="Upload Document" class="nav-icon fas fa-address-card"></i></a> |
                            <a href="<?=base_url()?>employee/employee-education/<?=base64_encode($inf->sk_employee_id)?>"><i title="Education Qualification" class="nav-icon fas fa-book"></i></a> |
                            <a href="<?=base_url()?>employee/employee-experience/<?=base64_encode($inf->sk_employee_id)?>"><i title="Work Experience" class="nav-icon fas fa-briefcase"></i></a> |
                            <a href="<?=base_url()?>employee/employee-family/<?=base64_encode($inf->sk_employee_id)?>"><i title="Family Details" class="nav-icon fas fa-users"></i></a> |
                            <a href="<?=base_url()?>employee/employee-bank/<?=base64_encode($inf->sk_employee_id)?>"><i title="Bank Details" class="nav-icon fas fa-piggy-bank"></i></a> |
                            <a href="<?=base_url()?>employee/employee-other/<?=base64_encode($inf->sk_employee_id)?>"><i title="Other Details" class="nav-icon fas fa-info-circle"></i></a> |
                            <a href="<?=base_url()?>employee/employeeManage/edit/<?=base64_encode($inf->sk_employee_id)?>"><i title="Edit" class="nav-icon fas fa-edit"></i></a>
                            <!-- |
                       <a href="<?=base_url()?>employee/employeeManage/delete/<?=base64_encode($inf->sk_employee_id)?>"><i title="Delete" class="nav-icon fas fa-trash"></i></a>
                        -->    <?php }else {?>
                            <a href="<?=base_url()?>employee/employeeManage/active/<?=base64_encode($inf->sk_employee_id)?>"><i title="Activate" class="nav-icon fas fa-check"></i></a>
                        <?php }?>
                    </td>
                </tr>
                <?php $i++;} ?>
                </tbody>
               
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

   <?php $this->load->view('includes/footer.php');?>
   


