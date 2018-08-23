 <div class="collapse navbar-collapse" id="navbarResponsive">
      <!-- ============= Top Header ============ -->
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="<?php echo $this->Html->url(array("controller" => "dashboard","action" => "index")); ?>">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
          
        </li>
        <!-- ============= Subscribers ============ -->
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Subscriber">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#subscriber" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Users</span>
          </a>
          <ul class="sidenav-second-level collapse" id="subscriber">
            <li>
              <a href="<?php echo $this->Html->url(array("controller" => "users","action" => "index")); ?>">Subscribers</a>

            </li>
            <li>
              <a href="cards.html">Add Subscriber</a>
            </li>
          </ul>
        </li>

        <!-- ============= Category ============ -->
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Category">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#category" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Category</span>
          </a>
          <ul class="sidenav-second-level collapse" id="category">
            <li>
             <a href="<?php echo $this->Html->url(array("controller" => "categories","action" => "index")); ?>">Categories</a>
            </li>
            <li>
              <a href="cards.html">Add Category</a>
            </li>
          </ul>
        </li>

        <!-- ============= Category ============ -->
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Category">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#category" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Category</span>
          </a>
          <ul class="sidenav-second-level collapse" id="category">
            <li>
              <a href="navbar.html">Category</a>
            </li>
            <li>
              <a href="cards.html">Add Category</a>
            </li>
          </ul>
        </li>

      </ul>

      <!-- ============= sidebar toggler ============ -->
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <!-- ============= Top Header ============ -->
      <ul class="navbar-nav ml-auto">
         <li class="nav-item">
          <a class="nav-link" target="_blank" href="http://google.com">
            <i class="fa fa-fw fa-sign-out"></i>Frontend</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>