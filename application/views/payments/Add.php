<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/sidebar'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Payment</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('Dashboard') ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Payments</a></li>
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
                            <h3 class="card-title">Add New <small>Payment</small></h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <?php echo form_open('payments/store', array('id' => 'quickForm', 'name' => 'myForm')); ?>
                        <div class="card-body row">
                            <div class="form-group col-md-4">
                                <label for="bill_number">Bill Number</label>
                                <input type="text" name="bill_number" class="form-control" id="bill_number" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="payment_ref_no">Payment Ref No</label>
                                <input type="text" name="payment_ref_no" class="form-control" id="payment_ref_no"
                                    required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="payment_date">Payment Date</label>
                                <input type="date" name="payment_date" class="form-control" id="payment_date" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="description">Description</label>
                                <textarea name="description" class="form-control" id="description" required></textarea>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="payment_towards">Payment Towards</label>
                                <select name="payment_towards" class="form-control" id="payment_towards" required>
                                    <option value="">Select Project</option>
                                    <?php foreach ($projects as $project): ?>
                                    <option value="<?= $project['project_id'] ?>"><?= $project['project_name'] ?>
                                    </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="payment_category">Payment Category</label>
                                <select name="payment_category" class="form-control" id="payment_category" required>
                                    <option value="">Select Category</option>
                                    <option value="employee">Employee</option>
                                    <option value="vendor">Vendor</option>
                                    <option value="worker">Worker</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="payment_to">Payment To</label>
                                <select name="payment_to" class="form-control" id="payment_to" required>
                                    <!-- Options will be populated based on selected category -->
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="mode_of_payment">Mode of Payment</label>
                                <select name="mode_of_payment" class="form-control" id="mode_of_payment" required>
                                    <option value="">Select Mode of Payment</option>
                                    <?php foreach ($payment_modes as $value => $label): ?>
                                    <option value="<?= $value ?>"><?= $label ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="amount">Amount</label>
                                <input type="text" name="amount" class="form-control" id="amount" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="transaction_ref_no">Transaction Ref No</label>
                                <input type="text" name="transaction_ref_no" class="form-control"
                                    id="transaction_ref_no" required>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Add Payment</button>
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

<script>
document.addEventListener('DOMContentLoaded', function() {
    const paymentCategory = document.getElementById('payment_category');
    const paymentTo = document.getElementById('payment_to');

    // Get the vendor and employee data from PHP
    const vendors = <?php echo json_encode($vendors); ?>;
    const employees = <?php echo json_encode($employees); ?>;

    paymentCategory.addEventListener('change', function() {
        const selectedCategory = paymentCategory.value;

        // Clear previous options
        paymentTo.innerHTML = '<option value="">Select</option>';

        if (selectedCategory === 'vendor') {
            vendors.forEach(function(vendor) {
                const option = document.createElement('option');
                option.value = vendor.id;
                option.textContent = vendor.name;
                paymentTo.appendChild(option);
            });
        } else if (selectedCategory === 'employee') {
            employees.forEach(function(employee) {
                const option = document.createElement('option');
                option.value = employee.id;
                option.textContent = employee.first_name + ' ' + employee.last_name;;
                paymentTo.appendChild(option);
            });
        } else if (selectedCategory === 'worker') {
            // Example: Populate with worker data or leave empty
            paymentTo.innerHTML = '<option value="">No workers</option>';
        }
    });
});
</script>