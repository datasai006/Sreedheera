<?php $this->load->view('includes/header') ?>
<?php $this->load->view('includes/sidebar'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Call Leads</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('Dashboard') ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Leads</a></li>
                        <li class="breadcrumb-item active">marketing</li>
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
                            <h3 class="card-title">Call <small>Leads</small></h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <?php echo form_open('leads/entryLeadCall', array('id' => 'quickForm', 'name' => 'myForm')); ?>
                        <div class="card-body row">
                            <div class="form-group col-md-4">
                                <label for="first_name">Name</label>
                                <input type="text" name="first_name" class="form-control" value="<?php echo $lead['first_name']; ?>" id="first_name"  disabled>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="last_name">Mobile</label>
                                <input type="text" name="last_name" class="form-control" value="<?php echo $lead['phone_number']; ?>" id="last_name"  disabled>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="preferred_contact_method">Preferred Contact Method</label>
                                <select name="preferred_contact_method" class="form-control"
                                    id="preferred_contact_method" disabled>
                                    <option value="phone"
                                        <?php echo $lead['preferred_contact_method'] == 'phone' ? 'selected' : ''; ?>>
                                        Phone</option>
                                    <option value="email"
                                        <?php echo $lead['preferred_contact_method'] == 'email' ? 'selected' : ''; ?>>
                                        Email</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="contact_time">Contact Time</label>
                                <input type="time" name="contact_time" value="<?php echo $lead['contact_time']; ?>"
                                    class="form-control" id="contact_time"  disabled>
                            </div>
                            
                            <div class="form-group col-md-4">
                                <label for="interested_property_type">Call Status</label>
                                <select name="call_status" class="form-control"
                                    id="call_status" required>
                                    <option value="Interested to Visit Site">Interested to Visit Site</option>
                                    <option value="Scheduled Visit">Scheduled Visit</option>
                                    <option value="Schedule Later">Schedule Later</option>
                                    <option value="Unanswered">Unanswered</option>
                                    <option value="Not Interested">Not Interested</option>
                                    <option value="Clicked on Ad by Mistake">Clicked on Ad by Mistake</option>
                                    <option value="Invalid Lead/Number">Invalid Lead/Number</option>
                                    <option value="Agent">Agent</option>
                                    <option value="Existing Buyer">Existing Buyer</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="address">Schedule Date</label>
                                <input name="schedule_date" type="date" id="schedule_date" class="form-control">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="address">Schedule Time</label>
                                <input name="schedule_time" type="time" id="schedule_time" class="form-control">
                            </div>

                            <div class="form-group col-md-4">
                                <label for="interested_property_type">Interested Property Type</label>
                                <select name="interested_property_type" class="form-control"
                                    id="interested_property_type" required >
                                    <option value="Villas">Villa</option>
                                    <option value="Apartment">Apartment</option>
                                    <option value="Open Plots">Open Plot</option>
                                    <option value="Individual House">Individual House</option>
                                    <option value="Commercial">Commercial</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="interested_property_type">Interested Project</label>
                                <select name="interested_project" class="form-control"
                                    id="interested_project" required >
                                    <option value="Nandakam Villas">Nandakam Villas</option>
                                    <option value="Park View Apartment">Park View Apartment</option>
                                    <option value="Commercial Shops">Commercial Shops</option>
                                </select>
                            </div>
                            <!-- <div class="form-group col-md-4">
                                <label for="interested_property_type">Site Visit Status</label>
                                <select name="site_visit_status" class="form-control"
                                    id="site_visit_status" required >
                                    <option value="Visited">Visited</option>
                                    <option value="Not Visited">Not Visited</option>
                                    <option value="Asked for rescheduled">Asked for rescheduled</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="address">Visit ReSchedule Date</label>
                                <input name="site_visit_schedule_date" type="date" name="doj" id="doj" class="form-control">
                            </div> -->
                            <div class="form-group col-md-4">
                                <label for="address">Remarks</label>
                                <textarea name="remarks" class="form-control" id="address" required></textarea> 
                            </div>

                            <div class=" col-md-12">
                                <h5 class="mt-2 mb-2">Assign or Convert to Sales</h5>
                                <hr>
                            </div>

        
                            <div class="form-group col-md-4">
                                <label for="interested_property_type">Assign to</label>
                                <select name="assign_tos" class="form-control"
                                    id="assign_to">
                                    <option value="">Select</option>
                                    <option value="Sales Manager">Sales Manager</option>
                                    <option value="Associate Marketing Executive">Associate Marketing Executive</option>
                                </select>
                            </div>
                            <input name="assign_to" value="" type="hidden" id="assignn_to">

                            <div class="form-group col-md-4">
                                <label for="contact_time">Employee Name</label>
                                <select name="assign_to_employee" class="form-control"
                                    id="assign_to_employee">
                                   <!--  <?php foreach($employeeActiveData as $inf) { ?>
                                        <option value="<?= $inf->sk_employee_id; ?>"><?= $inf->employee_name; ?></option>
                                    <?php } ?> -->
                                </select>
                            </div>

                        </div>
                        <input type="hidden" name="lead_id" value="<?php echo $lead['id']; ?>">
                        <input type="hidden" name="employee_id" value="<?=$this->session->userdata('id')?>">
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        <?php echo form_close(); ?>
                    </div>
                    <div class="p-3 ">
                        <div class="card-header">
                            <h3 class="card-title">Leads History </h3>
                        </div>
                        <div class="card-body ">
                            <table id="example1" class="table table-bordered mt-3">
                                <thead>
                                    <tr>
                                        <th>Communicated Date</th>
                                        <th>Communicated Employee</th>
                                        <th>Status</th>
                                        <th>Scheduled Date</th>
                                        <th>Visit Status</th>
                                        <th>Visit Date</th>
                                        <th>Remarks</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($call as $calls) { ?>
                                    <tr>
                                        
                                        <td><?= $calls->date_of_communication;?></td>
                                        <td><?= $calls->employee_name;?></td>
                                        <td><?= $calls->call_status;?></td>
                                        <td><?= $calls->schedule_date;?></td>
                                        <td><?= $calls->site_visit_status;?></td>
                                        <td><?= $calls->site_visit_schedule_date;?></td>
                                        <td><?= $calls->remarks;?></td>
                                        
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
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
<?php $this->load->view('includes/footer') ?>
<script type="text/javascript">

$('#call_status').on('change', function (e) {
    var valueSelected = this.value;
    if(valueSelected=='Scheduled Visit'){
        $('select#assign_to').attr('required',true);
        $('#assign_to option[value="Sales Manager"]').attr("selected", "selected");
        $('#assign_to').attr("disabled", true);
        assignChange();
        $('#schedule_date').attr('required',true);
        $('#schedule_time').attr('required',true);
    }

    else if(valueSelected=='Scheduled Later'){
        $('select#assign_to').attr('required',false);
        $('#assign_to option[value=""]').attr("selected", "selected");
        $('#assign_to').attr("disabled", false);
        $('#schedule_date').attr('required',true);
        $('#schedule_time').attr('required',true);
    }
    else{
        $('select#assign_to').attr('required',false);
        $('#assign_to option[value=""]').attr("selected", "selected");
        $('#assign_to').attr("disabled", false);
        $('#schedule_date').attr('required',false);
        $('#schedule_time').attr('required',false);
    }
});


    $('#assign_to').on('change', function (e) {

    $('#assignn_to').val($('#assign_to').val()); 
    var valueSelected = this.value;
    if(valueSelected!=''){
        $('select#assign_to_employee').attr('required',true);
    }else{
        $('select#assign_to_employee').attr('required',false);
        $('select#assign_to_employee').empty();
    }
    // alert(valueSelected);

    if(valueSelected=='Sales Manager'){
        var role_id='5';
        // alert(role_id);
            $.ajax({
                method:'post',
                url:"<?php echo base_url()?>employee/getEmployeedByRoles",
                    data:{ role_id:role_id
                },
                success:function(response) {  
                    console.log(response);
                $("#assign_to_employee").html(response);
                }
            });
        
    }
    if(valueSelected=='Associate Marketing Executive'){
        var role_id='4';
        // alert(role_id);
            $.ajax({
                method:'post',
                url:"<?php echo base_url()?>employee/getEmployeedByRoles",
                    data:{ role_id:role_id
                },
                success:function(response) {  
                    console.log(response);
                $("#assign_to_employee").html(response);
                }
            });
        
    }


});


    function assignChange(){
    var valueSelected = $('#assign_to').val();

    $('#assignn_to').val($('#assign_to').val()); 
    if(valueSelected!=''){
        $('select#assign_to_employee').attr('required',true);
    }else{
        $('select#assign_to_employee').attr('required',false);
        $('select#assign_to_employee').empty();
    }
    // alert(valueSelected);

    if(valueSelected=='Sales Manager'){
        var role_id='5';
        // alert(role_id);
            $.ajax({
                method:'post',
                url:"<?php echo base_url()?>employee/getEmployeedByRoles",
                    data:{ role_id:role_id
                },
                success:function(response) {  
                    console.log(response);
                $("#assign_to_employee").html(response);
                }
            });
        
    }
    if(valueSelected=='Associate Marketing Executive'){
        var role_id='4';
        // alert(role_id);
            $.ajax({
                method:'post',
                url:"<?php echo base_url()?>employee/getEmployeedByRoles",
                    data:{ role_id:role_id
                },
                success:function(response) {  
                    console.log(response);
                $("#assign_to_employee").html(response);
                }
            });
        
    }
    }
</script>
