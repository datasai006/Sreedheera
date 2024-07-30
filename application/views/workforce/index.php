<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/sidebar'); ?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Workforce Management</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('Dashboard') ?>">Home</a></li>
                        <li class="breadcrumb-item active">Workforce</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="<?= site_url('workforce/create') ?>" class="btn btn-primary mb-3">Add New Workforce</a>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">List of Workforces</h3>
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Description</th>
                                        <th>Aadhar Number</th>
                                        <th>Mobile Number</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($workforces as $workforce): ?>
                                    <tr>
                                        <td><?= $workforce['id'] ?></td>
                                        <td><?= $workforce['name'] ?></td>
                                        <td><?= $workforce['address'] ?></td>
                                        <td><?= $workforce['description'] ?></td>
                                        <td><?= $workforce['aadhar_number'] ?></td>
                                        <td><?= $workforce['mobile_number'] ?></td>
                                        <td><?= $workforce['status'] ?></td>
                                        <td>
                                            <a href="<?= site_url('workforce/edit/'.$workforce['id']) ?>"
                                                class="fa fas fa-edit"></a>
                                            <a href="<?= site_url('workforce/delete/'.$workforce['id']) ?>"
                                                class="fa fas fa-trash"
                                                onclick="return confirm('Are you sure you want to delete this item?');"></a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php $this->load->view('includes/footer'); ?>