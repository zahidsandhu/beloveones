<section class="country_cover_pic">
<?php foreach ($register as $value){?>
    <?php if(isset($value['cover_photo']) && !empty($value['cover_photo'])){
            $banner = base_url('uploads/user_profile_photo/').$value['cover_photo'];
        }
        else{
            $banner = base_url('assets/frontend/images/banner.jpg');
        }
        ?>
    <div class="cover_pic" style="background: url(<?= $banner?>);">
        
    </div>
            <!-- <div class="opacity-medium bg-extra-dark-gray"></div> -->
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 d-flex flex-column text-center justify-content-center page-title-large padding-30px-tb">
                        <!-- start sub title -->
                        <?php if(isset($value['profile_photo']) && !empty($value['profile_photo'])){
                            $profile = base_url('uploads/user_profile_photo/').$value['profile_photo'];
                        }
                        else{
                            $profile = base_url('assets/frontend/images/profile.png');
                        }
                        ?>
                        <span class="d-block alt-font margin-5px-bottom flag_picture"><img src="<?= $profile ?>" alt=""></span>
                        <!-- end sub title -->
                        <!-- start page title -->
                        <!-- <h1 class="alt-font font-weight-600 mb-0">About simple</h1> -->
                        <!-- end page title -->
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row m-5">
                    <div class="col-md-6">
                        <h1 class="about-me"><?= $value['full_name'];?></h1>

                    </div>
                    <div class="col-md-2 social-icons">
                    <span class="facebook-icon"><a href="#"><i class="fa fa-facebook-f mr-2"></i></a></span>    
                    <span class="twitter-icon"><a href="#"><i class="fa fa-twitter mr-2"></i></a></span>    
                    <span class="linkedin-icon"><a href="#"><i class="fa fa-linkedin mr-2"></i></a></span>    
                    <span class="instagram-icon"><a href=""><i class="fa fa-instagram mr-2"></i></a></span>    
                        
                    </div>
                    <?php $UserId = $this->session->userdata('user_id');?>
                    <div class="col-md-4">
                         <a href="<?= base_url('frontend/reset_password/').$UserId;?>" class=" btn btn-info   mt-3 btn-sm text-white">Reset Password</a>
                        <a href="<?= base_url('frontend/edit_profile/').$UserId;?>" class=" btn btn-info float-right  mt-3 btn-sm text-white">Edit profile</a>
                      
                    </div>
                </div>

                <div class="row">
                        <!-- start features box item -->
                        <div class="col-12 col-md-4 text-center text-md-left sm-margin-30px-bottom wow fadeInUp last-paragraph-no-margin">
                            <div class="row m-0">
                                <div class="col-12 col-lg-3 col-md-4 pl-0 sm-no-padding-right">
                                    
                                    <span class="separator-line-verticle-large margin-ten-right bg-deep-pink float-right align-top margin-two-top d-none d-md-block"></span>
                                </div>
                                <div class="col-12 col-lg-9 col-md-8 md-no-padding-lr">
                                    <span class="text-medium margin-four-bottom md-margin-10px-bottom sm-margin-5px-bottom text-extra-dark-gray alt-font d-block">User Name</span>
                                    <p class="width-90 lg-width-100"><?= $value['user_name'];?></p>
                                </div>
                            </div>
                        </div>
                        <!-- end features box item -->
                        <!-- start features box item -->
                        <div class="col-12 col-md-4 text-center text-md-left sm-margin-30px-bottom wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.2s">
                            <div class="row m-0">
                                <div class="col-12 col-lg-3 col-md-4 pl-0 sm-no-padding-right">
                                    
                                    <span class="separator-line-verticle-large margin-ten-right bg-deep-pink float-right align-top margin-two-top d-none d-md-block"></span>
                                </div>
                                <div class="col-12 col-lg-9 col-md-8 md-no-padding-lr">
                                    <h5 class="text-medium margin-four-bottom md-margin-10px-bottom sm-margin-5px-bottom text-extra-dark-gray alt-font d-block">Email</h5>
                                    <p class="width-90 lg-width-100"><?= $value['email'];?></p>
                                </div>
                            </div>
                        </div>
                        <!-- end features box item -->
                        <!-- start features box item -->
                        <div class="col-12 col-md-4 text-center text-md-left wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.4s">
                            <div class="row m-0">
                                <div class="col-12 col-lg-3 col-md-4 pl-0 sm-no-padding-right">
                                    
                                    <span class="separator-line-verticle-large margin-ten-right bg-deep-pink float-right align-top margin-two-top d-none d-md-block"></span>
                                </div>
                                <div class="col-12 col-lg-9 col-md-8 md-no-padding-lr">
                                    <h5 class="text-medium margin-four-bottom md-margin-10px-bottom sm-margin-5px-bottom text-extra-dark-gray alt-font d-block">Full Name</h5>
                                    <p class="width-90 lg-width-100"><?= $value['full_name'];?></p>
                                </div>
                            </div>
                        </div>
                        <!-- end features box item -->
                </div>

                <div class="row mt-5">
                        <!-- start features box item -->
                        <div class="col-12 col-md-4 text-center text-md-left sm-margin-30px-bottom wow fadeInUp last-paragraph-no-margin">
                            <div class="row m-0">
                                <div class="col-12 col-lg-3 col-md-4 pl-0 sm-no-padding-right">
                                    
                                    <span class="separator-line-verticle-large margin-ten-right bg-deep-pink float-right align-top margin-two-top d-none d-md-block"></span>
                                </div>
                                <div class="col-12 col-lg-9 col-md-8 md-no-padding-lr">
                                    <span class="text-medium margin-four-bottom md-margin-10px-bottom sm-margin-5px-bottom text-extra-dark-gray alt-font d-block">Address</span>
                                    <p class="width-90 lg-width-100"><?= $value['address'];?></p>
                                </div>
                            </div>
                        </div>
                        <!-- end features box item -->
                        <!-- start features box item -->
                        <div class="col-12 col-md-4 text-center text-md-left sm-margin-30px-bottom wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.2s">
                            <div class="row m-0">
                                <div class="col-12 col-lg-3 col-md-4 pl-0 sm-no-padding-right">
                                    
                                    <span class="separator-line-verticle-large margin-ten-right bg-deep-pink float-right align-top margin-two-top d-none d-md-block"></span>
                                </div>
                                <div class="col-12 col-lg-9 col-md-8 md-no-padding-lr">
                                    <h5 class="text-medium margin-four-bottom md-margin-10px-bottom sm-margin-5px-bottom text-extra-dark-gray alt-font d-block">Phone</h5>
                                    <p class="width-90 lg-width-100"><?= $value['phone'];?></p>
                                </div>
                            </div>
                        </div>
                        <!-- end features box item -->
                        <!-- start features box item -->
                        <div class="col-12 col-md-4 text-center text-md-left sm-margin-30px-bottom wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.2s">
                            <div class="row m-0">
                                <div class="col-12 col-lg-3 col-md-4 pl-0 sm-no-padding-right">
                                    
                                    <span class="separator-line-verticle-large margin-ten-right bg-deep-pink float-right align-top margin-two-top d-none d-md-block"></span>
                                </div>
                                <div class="col-12 col-lg-9 col-md-8 md-no-padding-lr">
                                    <h5 class="text-medium margin-four-bottom md-margin-10px-bottom sm-margin-5px-bottom text-extra-dark-gray alt-font d-block">Country</h5>
                                    <p class="width-90 lg-width-100"><?= $country[0]['title'];?></p>
                                </div>
                            </div>
                        </div>
                        <!-- end features box item -->
                </div>
            </div>
<?php }?>
</section>


<!-- start post contant section -->

<div class="wow fadeIn hover-option4 " style="margin-top:70px;">
            <div class="container">
            <?php if($this->session->flashdata('error')){?> 
                <?php $this->load->view('frontend/layout/messages');?>
            <?php }?>
            <a href="<?= base_url("/".$country[0]['country_slug']);?>">
            <div class="buttons">
                        <!--<span id="Add_Obituaries" class="btn mt-4 mb-5 btn-dark-gray btn-small text-extra-small btn-rounded margin-5px-top">Add Obituaries</span>-->
                        <span id="Add_Memory" class="btn mt-4 mb-5 ml-3 btn-dark-gray btn-small text-extra-small btn-rounded margin-5px-top"> Add Memory & Obituaries</span>
                    </div>
                    </a>
                <div class="row">
                    <!-- start post item -->
                   
                    <?php foreach($listing as $value){?>
                       


                    <div class="col-12 col-lg-4 col-md-6 grid-item margin-30px-bottom text-center text-md-left wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="blog-post bg-light-gray inner-match-height">
                            <div class="blog-post-images overflow-hidden position-relative">
                                <!-- <a href="blog-post-layout-01.html"> -->
                                    <img  src="<?php echo base_url('./uploads/cover_photo/')?><?php echo $value['listing_image']?>" alt="" data-no-retina="">
                                    <!-- <div class="blog-hover-icon"><span class="text-extra-large font-weight-300">+</span></div> -->
                               <!--  </a> -->
                            </div>
                            <div class="post-details padding-40px-all md-padding-20px-all">
                                <a href="blog-post-layout-01.html" class="alt-font post-title text-medium text-extra-dark-gray width-100 d-block lg-width-100 margin-15px-bottom" style="font-size: 22px;"><?php echo $value['listing_name']?></a>
                                <p style="font-size: 18px;"><?php echo $value['listing_about']?></p>
                                <div class="separator-line-horrizontal-full bg-medium-gray margin-20px-tb"></div>
                                <div class="author">
                                    <span class="text-medium-gray text-uppercase text-extra-small d-inline-block"><?php echo $value['birth_year']; ?>&nbsp;&nbsp;|&nbsp;&nbsp;<?php
                                    echo $value['death_year'];?></span>
                                </div>
                            </div>

                        </div>
                    </div>
                <?php } 
                  if(sizeof($listing)==0){?>
                  <div class="alert alert-success col-12">
		<?php echo "You did not add any listing post!"; ?>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  

	</div>
          
       <?php }
                ?>
        <!-- end post item -->     
                </div>
                
            </div>
        </div>

        <div class="container">
            <div class="row">
                
            </div>
        </div>


<!-- end post contant -->














