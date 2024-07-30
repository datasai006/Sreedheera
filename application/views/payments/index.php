<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/sidebar'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Payments List</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('Dashboard') ?>">Home</a></li>
                        <li class="breadcrumb-item active">Payments</li>
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
                    <!-- payments list -->
                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title">Payments List</h3>
                            <a href="<?= site_url('payments/create') ?>" class="btn btn-primary float-right">Add New
                                Payment</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Bill Number</th>
                                        <th>Payment Ref No</th>
                                        <th>Payment Date</th>
                                        <th>Description</th>
                                        <th>Payment Towards</th>
                                        <th>Payment Category</th>
                                        <th>Payment To</th>
                                        <th>Mode of Payment</th>
                                        <th>Amount</th>
                                        <th>Transaction Ref No</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($payments as $payment): ?>
                                    <tr>
                                        <td><?= $payment['id'] ?></td>
                                        <td><?= $payment['bill_number'] ?></td>
                                        <td><?= $payment['payment_ref_no'] ?></td>
                                        <td><?= $payment['payment_date'] ?></td>
                                        <td><?= $payment['description'] ?></td>
                                        <td><?= $payment['payment_towards'] ?></td>
                                        <td><?= $payment['payment_category'] ?></td>
                                        <td><?= $payment['payment_to'] ?></td>
                                        <td><?= $payment['mode_of_payment'] ?></td>
                                        <td><?= $payment['amount'] ?></td>
                                        <td><?= $payment['transaction_ref_no'] ?></td>
                                        <td><?= $payment['status'] ?></td>
                                        <td>
                                            <a href="<?= site_url('payments/edit/'.$payment['id']) ?>"
                                                class="fa fas fa-edit"></a>
                                            <a href="<?= site_url('payments/delete/'.$payment['id']) ?>"
                                                class="fa fas fa-trash" onclick="return confirm('Are you sure?')"></a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
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