<!-- application/views/project/view.php -->

<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/sidebar'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Project Details</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('Dashboard') ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('project') ?>">Leads</a></li>
                        <li class="breadcrumb-item active">Details</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Project Details</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <p><strong>Lead Name ID:</strong> <?= $call['project_id'] ?></p>
                            <p><strong>Mobile number:</strong> <?= $call['project_name'] ?></p>
                            <p><strong>Project Type:</strong> <?= $call['project_type'] ?></p>
                            <p><strong>Prefered Contact Number:</strong> <?= $call['property_location'] ?></p>
                            <p><strong>Contact Time:</strong> <?= $call['latitude'] ?>, <?= $call['longitude'] ?></p>
                            <p><strong>Interested Property Type:</strong> <?= $call['longitude'] ?></p>
                            <p><strong>Interested Project:</strong> <?= $call['property_address'] ?></p>
                            <p><strong>Schedule Date:</strong> <?= $call['city'] ?></p>
                            <p><strong>Schedule Time:</strong> <?= $call['state'] ?></p>
                            <p><strong>Call Status:</strong> <?= $call['total_units'] ?></p>
                            <p><strong>Call Remarks:</strong> <?= $call['state'] ?></p>
                            <p><strong>Site Visit Status:</strong> <?= $call['total_units'] ?></p>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <!-- <a href="<?= base_url('project/edit/'.$call['project_id']) ?>"
                                class="btn btn-primary">Edit</a> -->
                            <a href="<?= base_url('perform_action_leads/'.$call['id']) ?>" class="btn btn-secondary">Back</a>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php $this->load->view('includes/footer'); ?>