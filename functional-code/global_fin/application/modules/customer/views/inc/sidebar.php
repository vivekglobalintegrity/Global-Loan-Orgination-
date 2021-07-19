  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
     
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php  echo base_url() ;  ?>admin-assets/dist/img/logo.png"   alt="logo">
        </div>
        
      </div>
       <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item <?php  if($this->router->fetch_method()
=="index"){ echo "menu-open" ; }   ?>">
            <a href="<?php echo site_url('admin'); ?>" class="nav-link <?php  if($this->router->fetch_method()
=="index"){ echo "active" ; }   ?>">
              <i class="nav-icon fas fa-chart-bar"></i>
              <p>
                Broker Dashboard
              </p>
            </a>
             
          </li>
          <li class="nav-item <?php  if($this->router->fetch_method()
=="select_application"){ echo "menu-open" ; }   ?>">
            <a href="<?php echo site_url('admin/select_application'); ?>" class="nav-link <?php  if($this->router->fetch_method()
=="select_application"){ echo "active" ; }   ?>">
              <i class="nav-icon fas fa-file-alt"></i>
              <p> New Application </p>
            </a>
          </li>
          <li class="nav-item ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-sync-alt"></i>
              <p>
                Loans in Process
                
              </p>
            </a>
          </li>
          <li class="nav-item ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-money-check-alt"></i>
              <p>
                Funded Loans
              </p>
            </a>
          </li>
          <li class="nav-item  <?php  if($this->router->fetch_method()
=="calculator"){ echo "menu-open" ; }   ?>">
            <a href="<?php echo site_url('admin/calculator');  ?>" class="nav-link <?php  if($this->router->fetch_method()
=="calculator"){ echo "active" ; }   ?>"  >
              <i class="nav-icon fas fa-calculator"></i>
              <p>
                Loan Calculator
              </p>
            </a>
          </li>
          <li class="nav-item <?php  if($this->router->fetch_method()
=="faq"){ echo "menu-open" ; }   ?>">
            <a href="<?php echo site_url('admin/faq');  ?>" class="nav-link <?php echo site_url('admin/calculator');  ?>" class="nav-link <?php  if($this->router->fetch_method()
=="faq"){ echo "active" ; }   ?>">
              <i class="nav-icon fas fa-plus-circle"></i>
              <p>
                FAQ
                 
              </p>
            </a>
          </li>
           
           
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
      <ul class="bottom-menu09">
        <li><a href="https://globalintegrityfinance.com/privacy-policy/" target="_blank">Privacy Policy</a></li>
        <li><a href="#" target="_blank">Licensing</a></li>
        <li><a href="https://globalintegrityfinance.com/#onepage_contact" target="_blank">Contact Us</a></li>

      </ul>
    </div>
    <!-- /.sidebar -->
  </aside>