<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/sidebar'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Vendors</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('Dashboard') ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Vendors</a></li>
                        <li class="breadcrumb-item active">List</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Vendor List</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email ID</th>
                                        <th>Mobile</th>
                                        <th>GST Number</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($vendors as $vendor): ?>
                                    <tr>
                                        <td><?= $vendor['id']; ?></td>
                                        <td><?= $vendor['name']; ?></td>
                                        <td><?= $vendor['email_id']; ?></td>
                                        <td><?= $vendor['mobile']; ?></td>
                                        <td><?= $vendor['gst_number']; ?></td>
                                        <td>
                                            <a href="<?= base_url('vendors/edit/'.$vendor['id']); ?>"
                                                class="fa fas fa-edit"></a>
                                            <a href="<?= base_url('vendors/delete/'.$vendor['id']); ?>"
                                                class="fa fas fa-trash"
                                                onclick="return confirm('Are you sure you want to delete this vendor?');"></a>
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
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

<?php $this->load->view('includes/footer'); ?>