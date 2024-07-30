<?php $this->load->view('includes/header') ?>
<?php $this->load->view('includes/sidebar') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Lead</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('Dashboard') ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Lead</a></li>
                        <li class="breadcrumb-item active">Edit</li>
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
                            <h3 class="card-title">Edit <small>Lead</small></h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <?php echo form_open('leads/edit/'.$lead['id'], array('id' => 'quickForm', 'name' => 'myForm')); ?>
                        <div class="card-body row">
                            <div class="form-group col-md-4">
                                <label for="first_name">First Name</label>
                                <input type="text" name="first_name" value="<?php echo $lead['first_name']; ?>"
                                    class="form-control" id="first_name" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="last_name">Last Name</label>
                                <input type="text" name="last_name" value="<?php echo $lead['last_name']; ?>"
                                    class="form-control" id="last_name" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="email">Email</label>
                                <input type="email" name="email" value="<?php echo $lead['email']; ?>"
                                    class="form-control" id="email" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="phone_number">Phone Number</label>
                                <input type="text" name="phone_number" value="<?php echo $lead['phone_number']; ?>"
                                    class="form-control" id="phone_number" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="address">Address</label>
                                <input type="text" name="address" value="<?php echo $lead['address']; ?>"
                                    class="form-control" id="address" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="city">City</label>
                                <input type="text" name="city" value="<?php echo $lead['city']; ?>"
                                    class="form-control" id="city" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="state">State</label>
                                <input type="text" name="state" value="<?php echo $lead['state']; ?>"
                                    class="form-control" id="state" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="zip_code">Zip Code</label>
                                <input type="text" name="zip_code" value="<?php echo $lead['zip_code']; ?>"
                                    class="form-control" id="zip_code" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="country">Country</label>
                                <input type="text" name="country" value="<?php echo $lead['country']; ?>"
                                    class="form-control" id="country" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="preferred_contact_method">Preferred Contact Method</label>
                                <select name="preferred_contact_method" class="form-control"
                                    id="preferred_contact_method">
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
                                    class="form-control" id="contact_time" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="interested_property_type">Interested Property Type</label>
                                <select name="interested_property_type" class="form-control"
                                    id="interested_property_type">
                                    <option value="apartment"
                                        <?php echo $lead['interested_property_type'] == 'apartment' ? 'selected' : ''; ?>>
                                        Apartment</option>
                                    <option value="house"
                                        <?php echo $lead['interested_property_type'] == 'house' ? 'selected' : ''; ?>>
                                        House</option>
                                    <option value="commercial"
                                        <?php echo $lead['interested_property_type'] == 'commercial' ? 'selected' : ''; ?>>
                                        Commercial</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="lead_source">Lead Source</label>
                                <select name="lead_source" class="form-control"
                                    id="lead_source" required>
                                    <option <?php echo $lead['lead_source'] == 'Social Media' ? 'selected' : ''; ?> value="Social Media">Social Media</option>
                                    <option <?php echo $lead['lead_source'] == 'Walk-In' ? 'selected' : ''; ?> value="Walk-In">Walk-In</option>
                                    <option <?php echo $lead['lead_source'] == 'Tele-Enquiry' ? 'selected' : ''; ?> value="Tele-Enqiry">Tele-Enqiry</option>
                                    <option <?php echo $lead['lead_source'] == 'Website-Enqiry' ? 'selected' : ''; ?> value="Website-Enqiry">Website-Enqiry</option>
                                    <option <?php echo $lead['lead_source'] == 'Employee Reference' ? 'selected' : ''; ?> value="Employee Reference">Employee Reference</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="contact_time">Employee Name</label>
                                <select name="employee_id" class="form-control"
                                    id="employee_id" required>
                                    <?php foreach($employeeActiveData as $inf) {
                    
                   ?>
                                    <option <?php echo $lead['employee_id'] ==  $inf->sk_employee_id ? 'selected' : ''; ?> value="<?= $inf->sk_employee_id; ?>"><?= $inf->employee_name; ?></option>
                                <?php } ?>
                                    <!-- <option value="commercial">Vali</option>
                                    <option value="commercial">Venkatesh</option>
                                    <option value="commercial">Vivek</option>
                                    <option value="commercial">Anush</option> -->
                                </select>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
                <div class="col-md-6"></div>
            </div>
        </div>
    </section>
</div>
<?php $this->load->view('includes/footer') ?>