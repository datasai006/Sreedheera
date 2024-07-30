<?php $this->load->view('includes/header') ?>
<?php $this->load->view('includes/sidebar'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Lead</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('Dashboard') ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Leads</a></li>
                        <li class="breadcrumb-item active">Add</li>
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
                            <h3 class="card-title">Add New <small>Lead</small></h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <?php echo form_open('leads/create', array('id' => 'quickForm', 'name' => 'myForm')); ?>
                        <div class="card-body row">
                            <div class="form-group col-md-4">
                                <label for="first_name">First Name</label>
                                <input type="text" name="first_name" class="form-control" id="first_name" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="last_name">Last Name</label>
                                <input type="text" name="last_name" class="form-control" id="last_name" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" id="email" >
                            </div>
                            <div class="form-group col-md-4">
                                <label for="phone_number">Phone Number</label>
                                <input type="text" name="phone_number" class="form-control" id="phone_number" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="address">Address</label>
                                <input type="text" name="address" class="form-control" id="address" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="city">City</label>
                                <input type="text" name="city" class="form-control" id="city" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="state">State</label>
                                <input type="text" name="state" class="form-control" id="state" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="zip_code">Zip Code</label>
                                <input type="text" name="zip_code" class="form-control" id="zip_code" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="country">Country</label>
                                <input type="text" name="country" class="form-control" id="country" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="preferred_contact_method">Preferred Contact Method</label>
                                <select name="preferred_contact_method" class="form-control"
                                    id="preferred_contact_method" required>
                                    <option value="phone">Phone</option>
                                    <option value="email">Email</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="contact_time">Contact Time</label>
                                <input type="date" name="contact_time" class="form-control" id="contact_time" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="interested_property_type">Interested Property Type</label>
                                <select name="interested_property_type" class="form-control"
                                    id="interested_property_type" required>
                                    <option value="Villas">Villa</option>
                                    <option value="Apartment">Apartment</option>
                                    <option value="Open Plots">Open Plot</option>
                                    <option value="Individual House">Individual House</option>
                                    <option value="Commercial">Commercial</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="lead_source">Lead Source</label>
                                <select name="lead_source" class="form-control"
                                    id="lead_source" required>
                                    <option value="Social Media">Social Media</option>
                                    <option value="Walk-In">Walk-In</option>
                                    <option value="Tele-Enqiry">Tele-Enqiry</option>
                                    <option value="Website-Enqiry">Website-Enqiry</option>
                                    <option value="Employee Reference">Employee Reference</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="contact_time">Employee Name</label>
                                <select name="employee_id" class="form-control"
                                    id="employee_id" required>
                                    <?php foreach($employeeActiveData as $inf) {
                    
                   ?>
                                    <option value="<?= $inf->sk_employee_id; ?>"><?= $inf->employee_name; ?></option>
                                <?php } ?>
                                    <!-- <option value="commercial">Vali</option>
                                    <option value="commercial">Venkatesh</option>
                                    <option value="commercial">Vivek</option>
                                    <option value="commercial">Anush</option> -->
                                </select>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Add Lead</button>
                        </div>
                        <?php echo form_close(); ?>
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