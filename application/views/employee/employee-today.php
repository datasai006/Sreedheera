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
            <div class="card-body">
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
                </tr>
                </thead>
                <tbody>
                <?php $i=1;;
                if($employeeData){
                  $designation='';
                   foreach($employeeData as $inf) {
                    $designation=$inf->designation;
                   
                  
                ?>
                <tr>
                  <td><?php echo $i;?></td>
                  <td><?php echo $inf->employee_code?></td>
                  <td><?php echo $inf->employee_name?></td>
                  <td><?php echo $inf->father_name?></td>
                  <td><?php echo $inf->designation_name?></td> 
                
                  <td><?php echo $inf->mobile?></td> 
                  <td><?php echo $inf->gender?></td>                  
                </tr>
                    <?php $i++;} } ?>
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


