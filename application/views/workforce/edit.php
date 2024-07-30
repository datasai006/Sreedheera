<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/sidebar'); ?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Workforce</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('Dashboard') ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('workforce') ?>">Workforce</a></li>
                        <li class="breadcrumb-item active">Edit</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title">Edit <small>Workforce</small></h3>
                        </div>
                        <?php echo form_open('workforce/update/'.$workforce['id'], array('id' => 'quickForm')); ?>
                        <div class="card-body row">
                            <div class="form-group col-md-4">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" id="name"
                                    value="<?= $workforce['name'] ?>" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="address">Address</label>
                                <textarea name="address" class="form-control" id="address"
                                    required><?= $workforce['address'] ?></textarea>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="description">Description</label>
                                <textarea name="description" class="form-control" id="description"
                                    required><?= $workforce['description'] ?></textarea>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="aadhar_number">Aadhar Number</label>
                                <input type="text" name="aadhar_number" class="form-control" id="aadhar_number"
                                    value="<?= $workforce['aadhar_number'] ?>" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="mobile_number">Mobile Number</label>
                                <input type="text" name="mobile_number" class="form-control" id="mobile_number"
                                    value="<?= $workforce['mobile_number'] ?>" required>
                            </div>
                            <!-- <div class="form-group col-md-6">
                                <label for="status">Status</label>
                                <select name="status" class="form-control" id="status">
                                    <option value="active" <?= $workforce['status'] == 'active' ? 'selected' : '' ?>>
                                        Active</option>
                                    <option value="inactive"
                                        <?= $workforce['status'] == 'inactive' ? 'selected' : '' ?>>Inactive</option>
                                </select>
                            </div> -->
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update Workforce</button>
                        </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php $this->load->view('includes/footer'); ?>