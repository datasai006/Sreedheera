<?php $this->load->view('includes/header') ?>
<?php $this->load->view('includes/sidebar'); ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>View Leads</h1>
          </div>
          <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Leads</a></li>
              <li class="breadcrumb-item active">View</li>
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
          <div class="col-md-4">
            <!-- jquery validation -->
            <div class="card card-default">
              
            
            </div>
            <!-- /.card -->
            </div>



            <div class="card col-md-12">
            <div class="card-header">
              <h3 class="card-title">Leads</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S.No</th>
                  <th>Lead Name</th>
                  <th>Phone Number</th>
                  <th>Interested Property</th>
                  <th>Lead Source</th>
                  <th>Address</th>
                 
                 
                  <th>Contact Method</th>                 
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                
                  <?php $i=1;foreach ($leads as $lead) { ?>
                <tr>
                  <td><?php echo $i;?></td>
                  <td><?= $lead['first_name'];?> <?=$lead['last_name'];?></td>
                  <td><?= $lead['phone_number'];?></td>
                  <td><?= $lead['interested_property_type'];?></td>
                  <td><?= $lead['lead_source'];?></td>
                  <td><?= $lead['city'];?></td>
                  <td><?= $lead['preferred_contact_method'];?></td>
                  <td><a href="<?= site_url('leads/edit/'.$lead['id']); ?>" class="fa fas fa-edit"></a>|
                    <a href="<?= site_url('leads/delete/'.$lead['id']); ?>" class="fa fas fa-trash" onclick="return confirm('Are you sure you want to delete this customer?');"></a>|
                    <a href="<?= site_url('leads/perform_action_leads/'.$lead['id']); ?>" class="fa fas fa-eye"></a></td>
                </tr>
                  <?php $i++;}?>
                    
                
                </tbody>
               
              </table>
            </div>
            <!-- /.card-body -->
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

   <?php $this->load->view('includes/footer.php');?>


