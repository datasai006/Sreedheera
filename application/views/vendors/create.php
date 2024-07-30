<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/sidebar'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Vendor</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('Dashboard') ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Vendors</a></li>
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
                            <h3 class="card-title">Add New <small>Vendor</small></h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <?php echo form_open('vendors/store', array('id' => 'quickForm', 'name' => 'myForm')); ?>
                        <div class="card-body row">
                            <div class="form-group col-md-4">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" id="name" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="email_id">Email ID</label>
                                <input type="email" name="email_id" class="form-control" id="email_id" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="mobile">Mobile</label>
                                <input type="text" name="mobile" class="form-control" id="mobile" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="gst_number">GST Number</label>
                                <input type="text" name="gst_number" oninput="this.value = this.value.toUpperCase()"
                                    class="form-control" id="gst_number" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="gst_state">GST State</label>
                                <input type="text" name="gst_state" class="form-control" id="gst_state" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="pan">PAN</label>
                                <input type="text" name="pan" class="form-control" id="pan" required
                                    oninput="this.value = this.value.toUpperCase()">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="tds_percentage">TDS Percentage</label>
                                <input type="text" name="tds_percentage" class="form-control" id="tds_percentage"
                                    required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="billing_address">Billing Address</label>
                                <textarea type="text" name="billing_address" class="form-control" id="billing_address"
                                    required>
                                </textarea>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Add Vendor</button>
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
<?php $this->load->view('includes/footer'); ?>