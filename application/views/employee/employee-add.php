<?php $this->load->view('includes/header') ?>
<?php $this->load->view('includes/sidebar'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>New Employee</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Employee</a></li>
              <li class="breadcrumb-item active">New</li>
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
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title">Add New <small>Employee</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form"  enctype="multipart/form-data" id="quickForm" name="myForm" action="<?php echo base_url()?>employee/employee_save" method="post">
                <div class="card-body row">
                  <div class="form-group col-md-4">
                    <label for="employee_type">Employee Type</label>
                    <select type="text" name="employee_type" class="form-control" id="employee_type" required>
                      <option value="Permanent">Permanent</option>
                      <option value="Contract">Contract</option>
                    </select>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="designation">Designation</label>
                    <select name="designation" class="form-control" id="designation" required>
                    <?php if($designationData){foreach($designationData as $dinfo){ ?> 
                      <option value="<?=$dinfo->sk_designation_id?>"><?=$dinfo->designation_name?></option>
                      <?php }} ?> 
                    </select>
                  </div>
                  
                  <div class="form-group col-md-4">
                    <label for="department">Department</label>
                    <select name="department" class="form-control" id="department" required>
                    <option value="">Select Department</option>
                    <?php if($departmentData){foreach($departmentData as $dinfo){ ?> 
                      <option value="<?=$dinfo->sk_department_id?>"><?=$dinfo->department_name?></option>
                      <?php }} ?> 
                    </select>
                  </div>

                  <div class="form-group col-md-4">
                    <label for="employee_code">Employee Code</label>
                    <input type="text" name="employee_code" class="form-control" id="employee_code" placeholder="0012" required>
                  </div>


                  <div class="form-group col-md-4">
                  <label>Date Of Joining</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      
                    </div>
                    <input type="date" name="doj" id="doj" class="form-control"  required>
                  </div>
                  <!-- /.input group -->
                </div>

                 <div class="form-group col-md-4">
                    <label for="qualification">Qualification</label>
                    <input type="text" name="qualification" class="form-control" id="qualification" placeholder="BE/BCA/MCA" required>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="qualification">Experience In Years</label>
                    <input type="text" name="experience" class="form-control" id="experience" placeholder="1.2" required>
                  </div>
                  
                  <div class="form-group col-md-4">
                    <label for="qualification">ESI No</label>
                    <input type="text" name="esi" class="form-control" id="esi" placeholder="" required>
                  </div>
                  
                  <div class="form-group col-md-4">
                    <label for="qualification">PF No</label>
                    <input type="text" name="pf" class="form-control" id="pf" placeholder="" required>
                  </div>

                  <div class="form-group col-md-4">
                    <label for="qualification">Insurance No</label>
                    <input type="text" name="insurance" class="form-control" id="insurance" placeholder="" required>
                  </div>
                  
                  <div class="form-group col-md-4">
                    <label for="department">Skill Type</label>
                    <select name="skill_type" class="form-control" id="skill_type" required>
                    <option value="">Select Skill Type</option>
                    <option value="Un-Skilled">Un-Skilled</option>
                    <option value="Semi-Skilled">Semi-Skilled</option>
                    <option value="Skilled">Skilled</option>
                    <option value="Highly-Skilled">Highly-Skilled</option>
                    </select>
                  </div>


                  <div class="form-group col-md-4">
                    <label for="department">Category</label>
                    <select name="category" class="form-control" id="category" required>
                    <option value="">Select Category</option>
                    <option value="MBC">MBC</option>
                    <option value="SSC">SSC</option>
                    <option value="JBC">JBC</option>
                    <option value="JBI">JBI</option>
                    <option value="JBN">JBN</option>
                    <option value="TMC">TMC</option>
                    <option value="OGC">OGC</option>
                    <option value="PROJECTS">PROJECTS</option>
                    <option value="OTHERS">OTHERS</option>
                    <option value="Supp .Staff">Supp .Staff</option>
                    </select>
                  </div>
                                    

                  <div class=" col-md-12">
                  <h5 class="mt-2 mb-2">Personal Information</h5>
                  </div>

                  <div class="form-group col-md-4">
                    <label for="employee_name">Employee Name</label>
                    <input type="text" name="employee_name" class="form-control" id="employee_name" placeholder="XXXXX" required>
                  </div>

                 

                  <div class="form-group col-md-4">
                  <label>Date Of Birth</label>

                  <div class="input-group">
                    <div class="input-group-prepend">

                    </div>
                    <input type="date" name="dob" id="dob" class="form-control"  required>
                  </div>
                  <!-- /.input group -->
                </div>

                  <div class="form-group col-md-4">
                    <label for="religion">Religion</label>
                    <select name="religion" class="form-control" id="religion" required>
                      <option value="">Select</option>
                      <option value="Hindhu">Hindhu</option>
                      <option value="Muslim">Muslim</option>
                      <option value="Chrsitian">Chrsitian</option>
                      <option value="Others">Others</option>
                    </select>
                  </div>

                  <div class="form-group col-md-4">
                    <label for="religion">Nationality</label>
                    <select name="nationality" class="form-control" id="nationality" required>
                      <option value="">Select Nationality</option>
                      <option value="Indian">Indian</option>
                      <option value="Others">Others</option>
                    </select>
                  </div>

                  <div class="form-group col-md-4">
                    <label for="religion">Caste</label>
                    <select name="caste" class="form-control" id="caste" required>
                      <option value="">Select Caste</option>
                      <option value="SC">SC</option>
                      <option value="ST">ST</option>
                      <option value="OBC">OBC</option>
                      <option value="General">General</option>
                    </select>
                  </div>

                  <div class="form-group col-md-4">
                    <label for="religion">Martial Status</label>
                    <select name="martial_status" class="form-control" id="martial_status" required>
                      <option value="">Select Marital Status</option>
                      <option value="Married">Married</option>
                      <option value="UnMarried">UnMarried</option>
                      <option value="Dicorce">Dicorce</option>
                    </select>
                  </div>

                  <div class="form-group col-md-4">
                    <label for="religion">Resident State</label>
                    <!-- <select name="resident_status" class="form-control" id="resident_status" required>
                      <option value="">Select Resident Status</option>
                      <option value="Kannadiga">Kannadiga</option>
                      <option value="Non-Kannadiga">Non-Kannadiga</option>
                    </select> -->
                    <input type="text" name="resident_status" class="form-control" id="resident_status" placeholder="XXXXX" required>
                  </div>

                  <div class="form-group col-md-4">
                    <label for="religion">Physically Handicaped / Ex-servicemen</label>
                    <select name="physically_handicaped" class="form-control" id="physically_handicaped" required>
                      <option value="">Select</option>
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                    </select>
                  </div>

                  <div class="form-group col-md-4">
                    <label for="vehicle_brand">Mobile</label>
                    <input type="text" name="mobile" class="form-control" id="mobile" placeholder="XXXX" required >
                  </div>
                  <div class="form-group col-md-4">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="XXXX" required>
                  </div>

                 <!--  <div class="form-group col-md-4">
                    <label for="exampleInputFile">Photo</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="" id="employee_pic" required>
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        
                      </div>
                    </div>
                  </div> -->

                   <div class="form-group col-md-4">
                    <label for="aadhar">Photo</label>
                    <input type="file" name="employee_pic" class="form-control" id="employee_pic" placeholder="XXXX" required>
                  </div>

                  <div class="form-group col-md-4">
                    <label for="aadhar">Aadhar</label>
                    <input type="text" name="aadhar" class="form-control" id="aadhar" placeholder="XXXX" required>
                  </div>

                  <div class="form-group col-md-4">
                    <label for="driving_licence">Driving Licence</label>
                    <input type="text" name="driving_licence" class="form-control" id="driving_licence" placeholder="XXXX" required>
                  </div>

                   <div class="form-group col-md-4">
                    <label for="blood_group">Blood Group</label>
                    <input type="text" name="blood_group" class="form-control" id="blood_group" placeholder="XXXX" required>
                  </div>

                 
                  <div class="form-group col-md-4">
                    <label for="country">Gender</label>
                    <select name="gender" class="form-control" id="gender" required>
                      <option value=""></option>
                      <option value="Male">Male</option>
                      <option value="FeMale">FeMale</option>
                     
                    </select>
                  </div>


                  <div class="form-group col-md-4">
                    <label for="father_name">Father Name</label>
                    <input type="text" name="father_name" class="form-control" id="father_name" placeholder="XXXX" required>
                  </div>
                  
                   <div class="form-group col-md-4">
                    <label for="mother_name">Mother Name</label>
                    <input type="text" name="mother_name" class="form-control" id="mother_name" placeholder="XXXX" required>
                  </div>



                  <div class=" col-md-12">
                  <h5 class="mt-2 mb-2">Permanent Address</h5>
                  </div>
                  <div class="form-group col-md-2">
                    <label for="country">Country</label>
                    <select name="country" class="form-control" id="country" onchange="getStates(this.value,'state')" required>
                      <option value="">Select</option>
                      <?php if($countryData){foreach($countryData as $info){ ?>
                      <option value="<?=$info->sk_country_id?>"><?=$info->country_name?></option>
                      <?php }} ?>
                     
                    </select>
                  </div>
                  <div class="form-group col-md-2">
                    <label for="state">State</label>
                    <select name="state" class="form-control" id="state" required>
                    </select>
                  </div>

                  <div class="form-group col-md-2">
                    <label for="place">City/Place</label>
                    <input type="text" name="place" class="form-control" id="place" placeholder="XXXX" required>
                  </div>

                  <div class="form-group col-md-3">
                    <label for="place">Pincode</label>
                    <input type="text" name="pincode" class="form-control" id="pincode" placeholder="XXXX" required>
                  </div>

                   <div class="form-group col-md-3">
                    <label for="permanent_address">Permanent Address</label>
                    <input type="text" name="permanent_address" class="form-control" id="permanent_address" placeholder="" required>
                  </div>


                  <div class=" col-md-12">
                  <h5 class="mt-2 mb-2">Residence Address</h5>
                  </div>
                  <div class="form-group col-md-2">
                    <label for="residence_country">Country</label>
                    <select name="residence_country" class="form-control" id="residence_country" onchange="getStates(this.value,'residence_state')" required>
                      <option value="">Select</option>
                      <?php if($countryData){foreach($countryData as $info){ ?>
                      <option value="<?=$info->sk_country_id?>"><?=$info->country_name?></option>
                      <?php }} ?>
                    </select>
                  </div>
                  <div class="form-group col-md-2">
                    <label for="residence_state">State</label>
                    <select name="residence_state" class="form-control" id="residence_state" required>

                    </select>
                  </div>

                  <div class="form-group col-md-2">
                    <label for="residence_place">City/Place</label>
                    <input type="text" name="residence_place" class="form-control" id="residence_place" placeholder="XXXX" required>
                  </div>

                  <div class="form-group col-md-3">
                    <label for="place">Pincode</label>
                    <input type="text" name="residence_pincode" class="form-control" id="residence_pincode" placeholder="XXXX" required>
                  </div>
                  
                   <div class="form-group col-md-3">
                    <label for="residence_address">Residence Address</label>
                    <input type="text" name="residence_address" class="form-control" id="residence_address" placeholder="" required>
                  </div>

                  
                  <div class=" col-md-12">
                  <h5 class="mt-2 mb-2">Emergency Contact</h5>
                  </div>
                  <div class="form-group col-md-3">
                    <label for="emergency_name">Contact Name</label>
                    <input type="text" name="emergency_name" class="form-control" id="emergency_name" required>
                  </div>

                  <div class="form-group col-md-3">
                    <label for="emergency_no">Contact Number</label>
                    <input type="text" name="emergency_no" class="form-control" id="emergency_no" required>
                  </div>
                  

                

                   <div class="form-group col-md-6">
                    <label for="contact_address">Contact Address</label>
                    <input type="text" name="contact_address" class="form-control" id="contact_address" placeholder="" required>
                  </div>

                  <div class=" col-md-12">
                  <h5 class="mt-2 mb-2">Login Credentials</h5>
                  </div>
                  <div class="form-group col-md-3">
                    <label for="emergency_name">User Name</label>
                    <input type="text" name="username" class="form-control" id="usermane" required>
                  </div>

                  <div class="form-group col-md-3">
                    <label for="emergency_no">Password</label>
                    <input type="text" name="password" class="form-control" id="password" required>
                  </div>
<!-- 
                  <div class=" col-md-12">
                  <h5 class="mt-2 mb-2">Role</h5>
                  </div> -->

                   <div class="form-group col-md-4">
                    <label for="role_id">Select Role</label>
                    <select name="role_id" class="form-control" id="residence_country"  required>
                      <option value="">Select</option>
                      <?php if($getRole){foreach($getRole as $info){ ?>
                      <option value="<?=$info->id?>"><?=$info->role?></option>
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
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

   <?php $this->load->view('includes/footer.php');?>

