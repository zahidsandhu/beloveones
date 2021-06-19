
        <header class="header-with-topbar">
            <!-- topbar -->
            
           
            <!-- end topbar -->
            <!-- start navigation -->
            <nav class="navbar navbar-default bootsnav navbar-top header-light-transparent background-transparent nav-box-width navbar-expand-lg">
                <div class="container-fluid nav-header-container">
                    <!-- start logo -->
                    <div class="col-auto pl-lg-0">
                        <a href="<?= base_url('')?>" title="Beloved Ones" class="logo"><img src="<?php echo base_url('assets/frontend/')?>images/logo.png" data-rjs="images/logo@2x.png" class="logo-dark default" alt="Pofo"></a>
                    </div>
                    
                    <!-- end logo -->
                    <div class="col accordion-menu pr-0 pr-md-3">
                        <button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#navbar-collapse-toggle-1">
                            <span class="sr-only">toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="navbar-collapse collapse justify-content-end" id="navbar-collapse-toggle-1">
                            <ul id="accordion" class="nav navbar-nav navbar-left no-margin alt-font text-normal" data-in="fadeIn" data-out="fadeOut">
                                <!-- start menu item -->
                                <li class="dropdown megamenu-fw">
                                    <a href="<?= base_url();?>">Home</a><i class="fas fa-angle-down dropdown-toggle" data-toggle="dropdown" aria-hidden="true"></i>
                                    
                                </li>
                                <!-- end menu item -->
                                <!-- start menu item -->
                                <li class="dropdown megamenu-fw">
                                    <a class="text-uppercase" href="<?= base_url('celebrities')?>">Beloved celebrities</a><i class="fas fa-angle-down dropdown-toggle " data-toggle="dropdown" aria-hidden="true"></i>
                                    
                                </li>
                                <!-- end menu item -->
                                
                                <li class="dropdown simple-dropdown"><a href="<?= base_url('caribbean')?>">CARIBBEAN</a><i class="fas fa-angle-down dropdown-toggle" data-toggle="dropdown" aria-hidden="true"></i>
                                    
                                </li>
                                <li class="dropdown megamenu-fw">
                                    <a href="<?= base_url('global')?>">Global</a><i class="fas fa-angle-down dropdown-toggle" data-toggle="dropdown" aria-hidden="true"></i>
                                </li>
                                <li class="dropdown megamenu-fw">
                                    <a href="<?= base_url('about')?>">About</a><i class="fas fa-angle-down dropdown-toggle" data-toggle="dropdown" aria-hidden="true"></i>
                                </li>
                                <li class="dropdown megamenu-fw">
                                    <a href="https://kotchmagazine.com/" style="color: #a49865!important;font-weight: bold;">KOTCHMAGAZINE</a><i class="fas fa-angle-down dropdown-toggle" data-toggle="dropdown" aria-hidden="true"></i>
                                </li>
                                <li class="dropdown megamenu-fw">
                                    <a href="https://kotch.media/" style="color: #a49865!important;font-weight: bold;">KOTCH MEDIA</a><i class="fas fa-angle-down dropdown-toggle" data-toggle="dropdown" aria-hidden="true"></i>
                                </li>
                                
                                
                                <?php $userId = $this->session->userdata('user_id');?>
                                <li class="dropdown megamenu-fw">
                                    <a href="<?php 

                                    if($this->session->userdata('username')){
                                        echo base_url('user_profile/').$userId;
                                    }else{
                                        echo base_url('signup/');
                                    }
                                    ?>"><i class="fa fa-user-plus mr-2" aria-hidden="true"></i><?php if($this->session->userdata('username')){
                                        echo $this->session->userdata('username');
                                    }else{ echo "Signup";}?> </a>

                                </li>
                                
                                <li>
                                    <?php if($this->session->userdata('user_email')){
                                    ?>
                                    <a href="<?= base_url('user_logout');?>"><i class="fa fa-sign-out mr-2" aria-hidden="true"></i>Logout</a>

                                <?php
                                
                                }
                                else{
                                    ?>
                                    <a href="<?= base_url('login/');?>"><i class="fa fa-sign-in mr-2" aria-hidden="true"></i>Login</a>
                                <?php
                                
                                }?>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                    <!--<div class="col-auto pr-lg-0">-->
                    <!--    <div class="header-searchbar">-->
                    <!--        <a href="#search-header" class="header-search-form"><i class="fa fa-search search-button"></i></a>-->
                            <!-- search input-->
                    <!--        <form id="search-header" method="post" action="http://www.themezaa.com/html/pofo/search-result.html" name="search-header" class="mfp-hide search-form-result">-->
                    <!--            <div class="search-form position-relative">-->
                    <!--                <button type="submit" class="close-search search-button"></button>-->
                    <!--                <input type="text" name="search" class="search-input" placeholder="Enter your keywords..." autocomplete="off">-->
                    <!--            </div>-->
                    <!--        </form>-->
                    <!--    </div>-->
                    <!--</div>-->
                </div>
            </nav>
            <!-- end navigation --> 
            <!-- end navigation --> 
        </header>
        