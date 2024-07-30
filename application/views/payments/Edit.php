<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/sidebar'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Payment</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('Dashboard') ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= site_url('payments') ?>">Payments</a></li>
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
                            <h3 class="card-title">Edit <small>Payment</small></h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <?php echo form_open('payments/update/'.$payment['id'], array('id' => 'quickForm', 'name' => 'myForm')); ?>
                        <div class="card-body row">
                            <div class="form-group col-md-4">
                                <label for="bill_number">Bill Number</label>
                                <input type="text" name="bill_number" class="form-control" id="bill_number"
                                    value="<?= $payment['bill_number'] ?>" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="payment_ref_no">Payment Ref No</label>
                                <input type="text" name="payment_ref_no" class="form-control" id="payment_ref_no"
                                    value="<?= $payment['payment_ref_no'] ?>" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="payment_date">Payment Date</label>
                                <input type="date" name="payment_date" class="form-control" id="payment_date"
                                    value="<?= $payment['payment_date'] ?>" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="description">Description</label>
                                <textarea name="description" class="form-control" id="description"
                                    required><?= $payment['description'] ?></textarea>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="payment_towards">Payment Towards</label>
                                <input type="number" name="payment_towards" class="form-control" id="payment_towards"
                                    value="<?= $payment['payment_towards'] ?>" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="payment_category">Payment Category</label>
                                <input type="text" name="payment_category" class="form-control" id="payment_category"
                                    value="<?= $payment['payment_category'] ?>" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="payment_to">Payment To</label>
                                <input type="number" name="payment_to" class="form-control" id="payment_to"
                                    value="<?= $payment['payment_to'] ?>" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="mode_of_payment">Mode of Payment</label>
                                <select name="mode_of_payment" class="form-control" id="mode_of_payment" required>
                                    <option value="">Select Mode of Payment</option>
                                    <?php foreach ($payment_modes as $value => $label): ?>
                                    <option value="<?= $value ?>"
                                        <?= $payment['mode_of_payment'] == $value ? 'selected' : '' ?>>
                                        <?= $label ?>
                                    </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="amount">Amount</label>
                                <input type="text" name="amount" class="form-control" id="amount"
                                    value="<?= $payment['amount'] ?>" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="transaction_ref_no">Transaction Ref No</label>
                                <input type="text" name="transaction_ref_no" class="form-control"
                                    id="transaction_ref_no" value="<?= $payment['transaction_ref_no'] ?>" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="created_by">Created By</label>
                                <input type="number" name="created_by" class="form-control" id="created_by"
                                    value="<?= $payment['created_by'] ?>" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="updated_by">Updated By</label>
                                <input type="number" name="updated_by" class="form-control" id="updated_by"
                                    value="<?= $payment['updated_by'] ?>" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="approved_by">Approved By</label>
                                <input type="number" name="approved_by" class="form-control" id="approved_by"
                                    value="<?= $payment['approved_by'] ?>" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="status">Status</label>
                                <select name="status" class="form-control" id="status" required>
                                    <option value="pending" <?= $payment['status'] == 'pending' ? 'selected' : '' ?>>
                                        Pending</option>
                                    <option value="approved" <?= $payment['status'] == 'approved' ? 'selected' : '' ?>>
                                        Approved</option>
                                    <option value="rejected" <?= $payment['status'] == 'rejected' ? 'selected' : '' ?>>
                                        Rejected</option>
                                    <option value="cancelled"
                                        <?= $payment['status'] == 'cancelled' ? 'selected' : '' ?>>Cancelled</option>
                                </select>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update Payment</button>
                        </div>
                        <?php echo form_close(); ?>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

<?php $this->load->view('includes/footer'); ?>