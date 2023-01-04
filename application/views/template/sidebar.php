
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">

                <?php
                          if ($this->session->userdata('level') == 'user-default') {?>
                  <li>
                  <a href="<?= site_url('User')?>"><i class="fa fa-user" style="color:white"></i> My Profile</a>
                  </li>
                  <?php  } ?>

                <?php
                          if ($this->session->userdata('level') == 'super-admin') {?>
                   <li>
                  <a href="<?= site_url('User')?>"><i class="fa fa-user" style="color:white"></i> My Profile</a>
                  </li>
                  <li>
                    <a href="<?= site_url('Admin')?>"><i class="fa fa-user" style="color:Black"></i> Data User</a>
                  </li>
                 
                  <?php  } ?>

                  
                 
                 

                </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <!-- <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div> -->
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <div class="nav toggle">
                  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <nav class="nav navbar-nav">
                <ul class=" navbar-right">
                  <li class="nav-item dropdown open" style="padding-left: 15px;">
                    <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <span>Welcome, <?= $username ?></span>
                    <img src="<?= base_url('media/images/') .$gambar; ?>" alt="">
                    </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item"  href="<?= site_url()?>login/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                    </div>
                  </li>
  
                  <li role="presentation" class="nav-item dropdown open">
                    
              </nav>
            </div>
          </div>
        <!-- /top navigation -->

