<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?=base_url();?>/assets/dist/img/AdminLTELogo.png" alt="Rlds Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">RLDS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?=base_url();?>/assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Raghuveer Reddy</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
    <!--   <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
            s
          </li>
          <li class="nav-header">HRMS</li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fa-solid fas fa-users"></i>
              <p>
                Manage Employees
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url(); ?>employee/employee_add" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Employee</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url(); ?>employee/employee_view" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Employee</p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Assign Roles</p>
                </a>
              </li> -->
              <!-- <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Assign Supervisors/Regions</p>
                </a>
              </li> -->
            </ul>
          </li>
          <li class="nav-header">Audits</li>
          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fa-solid fas fa-suitcase"></i>
              <p>
                Manage Audits
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url(); ?>audit/assign_audit" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Assign Audits</p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="<?= base_url(); ?>audit/assign_audit" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Perform Audits</p>
                </a>
              </li> -->
              <li class="nav-item">
                <a href="<?= base_url(); ?>audit/view_audits" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Audits</p>
                </a>
              </li>
            </ul>
            <!-- <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="nav-icon fa-solid fas fa-briefcase"></i>
                  <p>Income Verification</p>
                  <i class="fas fa-angle-left right"></i>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Add Audit</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>View Audit</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Residence Verification</p>
                  <i class="fas fa-angle-left right"></i>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Add Audit</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>View Audit</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Office Verification</p>
                  <i class="fas fa-angle-left right"></i>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Add Audit</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>View Audit</p>
                    </a>
                  </li>
                </ul>
              </li>
            </ul> -->

          </li>
          <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fa-solid fas fa-people-arrows nav-icon"></i>
                  <p>Manage Clients</p>
                  <i class="fas fa-angle-left right"></i>
                </a>
                <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url(); ?>client/client_add" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Client</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url(); ?>client/client_view" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Clients</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">Settings</li>
          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                Manage Settings
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url(); ?>settings/role" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Roles</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Geo Locations</p>
                  <i class="fas fa-angle-left right"></i>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Manage Country</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Manage State</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Manage City</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Manage Region</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="<?= base_url(); ?>settings/designation" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Designations</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url(); ?>settings/department" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Departments</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Data Fields</p>
                  <i class="fas fa-angle-left right"></i>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?= base_url(); ?>settings/data_fields_add" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Add Data Fields</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url(); ?>settings/data_fields_view" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>View Data Fields</p>
                    </a>
                  </li>
                </ul>
              </li>
              
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>