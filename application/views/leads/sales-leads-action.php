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
                        <?php echo form_open('leads/entryLeadSalesCall', array('id' => 'quickForm', 'name' => 'myForm')); ?>
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
                                <label for="interested_property_type">Site Visit Status</label>
                                <select name="site_visit_status" class="form-control"
                                    id="site_visit_status" required >
                                    <option value="Unanswered">Unanswered</option>
                                    <option value="Site Visited">Site Visited</option>
                                    <option value="Visit Rescheduled">Visit Rescheduled</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="address">Visit Reschedule Date</label>
                                <input name="site_visit_schedule_date" type="date" name="doj" id="doj" class="form-control">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="address">Remarks</label>
                                <textarea name="remarks" class="form-control" id="address" required></textarea> 
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
                    <div class="p-3">
                        <div class="card-header">
                            <h2 class="card-title">Leads History </h2>
                        </div>
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

    $('#assign_to').on('change', function (e) {
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
    if(valueSelected=='Another Employee'){
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
</script>
