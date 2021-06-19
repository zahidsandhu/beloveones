<!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
          <li class=" navigation-header"><span>General</span><i class=" feather icon-minus" data-toggle="tooltip" data-placement="right" data-original-title="General"></i>
          </li>
          <li class=" nav-item"><a href="<?php echo base_url('admin')?>"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span><span class="badge badge badge-primary badge-pill float-right mr-2"></span></a>
            <ul class="menu-content">
              <li class=""><a class="menu-item" href="#" data-i18n="eCommerce">Country</a>
              </li>
            </ul>
          </li>
          
           <li class=" nav-item"><a href="<?php echo base_url("admin/country"); ?>"><i class="feather icon-airplay"></i><span class="menu-title" data-i18n="Project Summary">Country</span></a>
          </li>
         
        <li class=" nav-item"><a href="<?php echo base_url("admin/online_people");?>"><i class="fa fa-user"></i><span class="menu-title" data-i18n="Project Summary">Online</span></a>
          </li>

        </ul>
      </div>
    </div>
    <!-- END: Main Menu-->