<?php $this->load->view('includes/header') ?>
<?php $this->load->view('includes/sidebar') ?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>View Projects</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('Dashboard') ?>">Home</a></li>
                        <li class="breadcrumb-item active">View Projects</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Projects List</h3>
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Project ID</th>
                                        <th>Project Name</th>
                                        <th>Project Type</th>
                                        <th>City</th>
                                        <th>State</th>
                                        <th>Total Units</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($projects as $project): ?>
                                    <tr>
                                        <td><?= $project['project_id'] ?></td>
                                        <td><?= $project['project_name'] ?></td>
                                        <td><?= $project['project_type'] ?></td>
                                        <td><?= $project['city'] ?></td>
                                        <td><?= $project['state'] ?></td>
                                        <td><?= $project['total_units'] ?></td>
                                        <td>
                                            <a href="<?= base_url('project/view/'.$project['project_id']) ?>"
                                                class="fa fas fa-eye"></a> | 
                                            <a href="<?= base_url('project/edit/'.$project['project_id']) ?>"
                                                class="fa fas fa-edit"></a> |
                                            <a href="<?= base_url('project/delete/'.$project['project_id']) ?>"
                                                class="fa fas fa-trash"
                                                onclick="return confirm('Are you sure you want to delete this project?')"></a>
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
<?php $this->load->view('includes/footer') ?>