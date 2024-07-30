<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/sidebar'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Vendor</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('Dashboard') ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Vendors</a></li>
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
                            <h3 class="card-title">Edit <small>Vendor</small></h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <?php echo form_open('vendors/update/'.$vendor['id'], array('id' => 'quickForm', 'name' => 'myForm')); ?>
                        <div class="card-body row">
                            <div class="form-group col-md-4">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" id="name"
                                    value="<?= $vendor['name'] ?>" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="email_id">Email ID</label>
                                <input type="email" name="email_id" class="form-control" id="email_id"
                                    value="<?= $vendor['email_id'] ?>" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="mobile">Mobile</label>
                                <input type="text" name="mobile" class="form-control" id="mobile"
                                    value="<?= $vendor['mobile'] ?>" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="gst_number">GST Number</label>
                                <input type="text" name="gst_number" class="form-control" id="gst_number"
                                    value="<?= $vendor['gst_number'] ?>" required
                                    oninput="this.value = this.value.toUpperCase()">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="gst_state">GST State</label>
                                <input type="text" name="gst_state" class="form-control" id="gst_state"
                                    value="<?= $vendor['gst_state'] ?>" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="pan">PAN</label>
                                <input type="text" name="pan" class="form-control" id="pan"
                                    value="<?= $vendor['pan'] ?>" required
                                    oninput="this.value = this.value.toUpperCase()">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="tds_percentage">TDS Percentage</label>
                                <input type="text" name="tds_percentage" class="form-control" id="tds_percentage"
                                    value="<?= $vendor['tds_percentage'] ?>" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="billing_address">Billing Address</label>
                                <input type="text" name="billing_address" class="form-control" id="billing_address"
                                    value="<?= $vendor['billing_address'] ?>" required>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update Vendor</button>
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