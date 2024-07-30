<?php $this->load->view('includes/header') ?>
<?php $this->load->view('includes/sidebar'); ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Experience Setup</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Employee</a></li>
              <li class="breadcrumb-item active">Family</li>
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
          <div class="col-md-8">
            <!-- jquery validation -->
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title">Employee Experience <small>Details</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?php if($employeeData){foreach($employeeData as $emp_info){
$sk_employee_id="";
$employee_type="";$designation="";$employee_code="";$doj="";$doj1="";$qualification="";$experience="";$employee_name="";$dob="";$dob1="";
$religion="";$mobile="";$aadhar="";$driving_licence="";$blood_group="";$gender="";$father_name="";$country="";$state="";
$place="";$permanent_address="";$residence_country="";$residence_state="";$residence_place="";$residence_address="";
$emergency_name="";$emergency_no="";$contact_address="";

$sk_employee_id=$emp_info->sk_employee_id;
$employee_type=$emp_info->employee_type;
$designation=$emp_info->designation;
$employee_code=$emp_info->employee_code; 
$doj1=strtotime($emp_info->doj); 
$qualification=$emp_info->qualification;
$experience=$emp_info->experience;
$employee_name=$emp_info->employee_name;
$dob1=strtotime($emp_info->dob);
$religion=$emp_info->religion;
$mobile=$emp_info->mobile;
$email=$emp_info->email;
$aadhar=$emp_info->aadhar;
$driving_licence=$emp_info->driving_licence;
$blood_group=$emp_info->blood_group;
$gender=$emp_info->gender;
$father_name=$emp_info->father_name;
$country=$emp_info->country;
$state=$emp_info->state;
$place=$emp_info->place; 
$permanent_address=$emp_info->permanent_address;
$residence_country=$emp_info->residence_country;
$residence_state=$emp_info->residence_state;
$residence_place=$emp_info->residence_place;
$residence_address=$emp_info->residence_address;
$emergency_name=$emp_info->emergency_name;
$emergency_no=$emp_info->emergency_no;
$contact_address=$emp_info->contact_address;
$employee_pic=$emp_info->employee_pic;
$path="uploads/employee/";
$dob = date("d/m/Y", $dob1);
$doj = date("d/m/Y", $doj1);
              }} ?>
              
                <div class="card-body row">
                  

                  <div class="form-group col-md-4">
                    <label for="employee_name">Name</label>
                    <input type="text" name="employee_name" value="<?=$employee_name?>" class="form-control" id="employee_name" placeholder="XXXXX" required readonly>
                  </div>

                 

                  <div class="form-group col-md-4">
                  <label>Date Of Birth</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input type="text" name="dob" id="dob" value="<?=$dob?>" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask required readonly>
                  </div>
                  <!-- /.input group -->
                </div>

                
                  <div class="form-group col-md-4">
                    <label for="vehicle_brand">Mobile</label>
                    <input type="text" name="mobile" value="<?=$mobile?>" class="form-control" id="mobile" placeholder="XXXX" required readonly>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="email">Email</label>
                    <input type="email" name="email" value="<?=$email?>" class="form-control" id="email" placeholder="XXXX" required readonly>
                  </div>

                  <div class="form-group col-md-4">
                    <label for="exampleInputFile">Photo</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <?php if($employee_pic!=""){$employee_pic1=base_url().$path.$employee_pic;}else{$employee_pic1="";} ?>
                        
                      
                         
                      </div>
                      <div class="input-group-append">
                        
                      <img src="<?=$employee_pic1?>" width="200px;"/> 
                      <!-- <span class="input-group-text" id="">Upload</span>-->
                      </div>
                    </div>
                  </div>

                 


                </div>
              
             
            </div>
            <!-- /.card -->
            
            <div class="">
          <div class="card card-default">
            <div class="card-header">
              <h3 class="card-title">Experience Details </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body"> 
              <table class="table table-bordered table-striped" style="overflow: scroll;">
                <thead>
                <tr>
                  <th>Language Name</th>                
                  <th>Read</th>                  
                  <th>Write</th>                 
                  <th>Speak</th>
                  <th>Action</th>
                </tr>
                </thead>               
                <tbody>
                <?php if($otherData){foreach ($otherData as $info){ if($info->other_status!=0){?>
                <tr>
                	<td><?=$info->language_name?></td>
                	<td><?=$info->read_lan?></td>
                	<td><?=$info->write_lan?></td> 
                	<td><?=$info->speak_lan?></td> 
                	<td> <a href="<?=base_url()?>employee/otherManage/<?=base64_encode($info->employee_id)?>/<?=base64_encode($info->sk_emp_other_id)?>"><i title="Delete" class="nav-icon fas fa-trash"></i></a></td>
                 </tr>               
                <?php }}} ?>
                </tbody>
                
              </table>
            </div>
           </div>
          </div>
            </div>





            <div class="col-md-4">
            <!-- jquery validation -->
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title">Experience Details <small></small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="quickForm" name="myForm" action="<?=base_url()?>employee/other_save/<?=base64_encode($sk_employee_id )?>" method="post">
                <div class="card-body row">
                   
                   <div class="form-group col-md-12">
                    <label for="transfer_qty">Language Name</label>
                    <input type="text" name="language_name" class="form-control" id="language_name" placeholder="XXXX" required >
                  </div>
                  <div class="form-group col-md-12">
                    <label for="transfer_qty">Read</label>
                    <select name="read_lan" class="form-control" id="read_lan" placeholder="XXXX" required>
                    <option value=""></option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option> 
                    </select>
                  </div>
                  
                  <div class="form-group col-md-12">
                    <label for="transfer_qty">Write</label> 
                    <select name="write_lan" class="form-control" id="write_lan" placeholder="XXXX" required>
                    <option value=""></option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option> 
                    </select>
                  </div> 
                   
                  <div class="form-group col-md-12">
                    <label for="transfer_qty">Speak</label>
                    <select  name="speak_lan" id="speak_lan" class="form-control" required >
                    <option value=""></option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option> 
                    </select>
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
          <!--/.col (left) -->
          <!-- right column -->
                  <!--/.col (right) -->
        </div>
        <!-- /.row -->
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

   <?php $this->load->view('includes/footer.php');?>


