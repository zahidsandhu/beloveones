<section class="country_cover_pic" style="margin-top: 0px;">
<?php foreach ($country as $value){?>
    <div class="cover_pic" style="background: url(<?= base_url('uploads/cover_photo/').$value['cover'];?>);">
        
    </div>
           
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 d-flex flex-column text-center justify-content-center page-title-large padding-30px-tb">
                        <!-- start sub title -->
                        <span class="d-block alt-font margin-5px-bottom flag_picture"><img src="<?= base_url('uploads/cover_photo/').$value['flag'];?>" alt=""></span>
                       
                    </div>
                </div>
            </div>
<?php }?>

<?php $get_id= $country[0]['id'];?>

</section>
<div class="container-fluid">  

		<?php $this->load->view('frontend/layout/messages');?>

    <div class="row justify-content-center">
        <div class="col-12 col-md-7 col-lg-12">
            <div class="row">
                <div class="col-12 col-lg-12 md-margin-two-bottom wow fadeIn last-paragraph-no-margin testimonial-style3">
                    <div class="testimonial-content-box self-padding-twelve-all self-border-radius-6 self-box-shadow  md-padding-seven-all sm-padding-eight-all justify-content-center">
                        <span class=" page_1st_heading justify-content-center">
                            <?php echo $country[0]['saying']?>
                        </span>
                        <br>
                        <br>
                        <span class=" page_1st_heading justify-content-center">
                            <?php echo $country[0]['author']?>
                        </span>
                    </div>
                    <!-- start testimonials item -->
                    
                </div>
                
            </div>
        </div>
    </div> 
</div>

<div class="container">
    <div class="row">
        <div class="buttons">
            <span id="Add_Obituaries"  class="btn mt-4 mb-5 btn-dark-gray btn-small text-extra-small btn-rounded margin-5px-top">Add Obituaries</span>
            <span   id="Add_Memory" class="btn mt-4 mb-5 ml-3 btn-dark-gray btn-small text-extra-small btn-rounded margin-5px-top"> Add Memory</span>
        </div>
    </div>
</div>
<!-- Add Obituaries From section start -->

 <div class="container Add-Obituaries-from">
    <div class="row">
      
<form autocomplete="off"  class="mb-5" action="<?= base_url('frontend/insert_listing/').$get_id;?>" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-12">
                <div id="success-project-contact-form" class="mx-0" style="display: none;"></div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="form-group">
                    <label>User name <span class="text-danger">*</span></label>
                   
                    <input type="text" name="user_name" id="name" placeholder=" Enter User Name" class=" form-control" value="<?php if($this->session->userdata('user_id')){echo $userdata_get[0]['user_name'] ; } ?>">
                    <span class="text-danger"><?= form_error('user_name');?></span>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="form-group">
                    <label>Email<span class="text-danger">*</span></label>
                    <!--<input type="hidden" name="hidden_id" value="<?= $country[0]['id'];?>">-->
                    <!--<input type="hidden" name="hidden_id2" value="memory">-->
                    <input type="email" name="email" id="name" placeholder="Enter Email" class=" form-control" value="<?php if($this->session->userdata('user_id')){echo $userdata_get[0]['email'] ;} ?>">
                    <span class="text-danger"><?= form_error('email');?></span>
                </div>
            </div>
            <div class="col-12 col-lg-12">
                <div class="form-group " >
                    <label>Your lovedones name <span class="text-danger">*</span></label>
                    <input type="hidden" name="hidden_id" value="<?= $country[0]['id'];?>">
                    <input type="hidden" name="hidden_id2" value="obituaries">
                    <input type="text" name="listing_name" id="name" placeholder=" Enter Your Lovedones Name " class=" form-control">
                    <span class="text-danger"><?= form_error('listing_name');?></span>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="form-group date datepicker">
                    <label>Birth Year <span class="text-danger">*</span></label>
                    <input type="text" name="birth_year" placeholder="yyyy-mm-dd" class=" form-control " id="example1">
                    <span class="text-danger"><?= form_error('birth_year');?></span>
                </div>
                
            </div>
            <div class="col-12 col-lg-4">
                <div class="form-group">
                    <label>Death Year <span class="text-danger">*</span></label>
                    <!-- <input type="text" name="death_year" id="phone" placeholder="Death Year" class=" form-control"> -->
                    <input type="text" name="death_year" placeholder="yyyy-mm-dd" class=" form-control " id="example1">
                    <span class="text-danger"><?= form_error('death_year');?></span>
                </div>
                
            </div>
            <div class="col-12 col-lg-4">
                <div class="form-group">
                    <label>Image <span class="text-danger">*</span></label>
                    <input type="file" name="listing_image" class="form-control">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label>About <span class="text-danger">*</span></label>
                    <textarea name="listing_about" id="comment" placeholder="About" rows="6" class=" form-control ckeditor"></textarea>
                    <span class="text-danger"><?= form_error('listing_about');?></span>
                </div>
            </div>
            <div class="col-12 text-center">
                <button type="submit" name="submit" class="btn btn-transparent-dark-gray btn-large margin-20px-top add_memory">Add Obituaries</button>
            </div>
        </div>
</form>
    </div>
</div>

<!-- End Add Obituaries From section -->

<!-- add-memory-from section start -->

 <div class="container add-memory-from">
    <div class="row">
        

        <?php $get_id= $country[0]['id'];
        ?>
<form autocomplete="off"  class="mb-5" action="<?= base_url('frontend/insert_listing/').$get_id;?>" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-12">
                <div id="success-project-contact-form" class="mx-0" style="display: none;"></div>
            </div>
             <div class="col-12 col-lg-6">
                <div class="form-group">
                    <label>User name <span class="text-danger">*</span></label>
                   
                    <input type="text" name="user_name" id="name" placeholder=" Enter User Name" class=" form-control" value="<?php if($this->session->userdata('user_id')){echo $userdata_get[0]['user_name'] ; } ?>">
                    <span class="text-danger"><?= form_error('user_name');?></span>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="form-group">
                    <label>Email<span class="text-danger">*</span></label>
                    <!--<input type="hidden" name="hidden_id" value="<?= $country[0]['id'];?>">-->
                    <!--<input type="hidden" name="hidden_id2" value="memory">-->
                    <input type="email" name="email" id="name" placeholder="Enter Email" class=" form-control" value="<?php if($this->session->userdata('user_id')){echo $userdata_get[0]['email'] ;} ?>">
                    <span class="text-danger"><?= form_error('email');?></span>
                </div>
            </div>
            <div class="col-12 col-lg-12">
                <div class="form-group">
                    <label>Your lovedones name <span class="text-danger">*</span></label>
                    <input type="hidden" name="hidden_id" value="<?= $country[0]['id'];?>">
                    <input type="hidden" name="hidden_id2" value="memory">
                    <input type="text" name="listing_name" id="name" placeholder=" Enter Your Lovedones Name" class=" form-control">
                    <span class="text-danger"><?= form_error('listing_name');?></span>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="form-group date datepicker">
                    <label>Birth Year <span class="text-danger">*</span></label>
                    <input type="text" name="birth_year" placeholder="yyyy-mm-dd" class=" form-control " id="example1">
                    <span class="text-danger"><?= form_error('birth_year');?></span>
                </div>
                
            </div>
            <div class="col-12 col-lg-4">
                <div class="form-group">
                    <label>Death Year <span class="text-danger">*</span></label>
                    <!-- <input type="text" name="death_year" id="phone" placeholder="Death Year" class=" form-control"> -->
                    <input type="text" name="death_year" placeholder="yyyy-mm-dd" class=" form-control " id="example1">
                    <span class="text-danger"><?= form_error('death_year');?></span>
                </div>
                
            </div>
            <div class="col-12 col-lg-4">
                <div class="form-group">
                    <label>Image <span class="text-danger">*</span></label>
                    <input type="file" name="listing_image" class="form-control">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label>About <span class="text-danger">*</span></label>
                    <textarea name="listing_about" id="comment" placeholder="About" rows="6" class=" form-control ckeditor"></textarea>
                    <span class="text-danger"><?= form_error('listing_about');?></span>
                </div>
            </div>
            <div class="col-12 text-center">
                <button type="submit" name="submit" class="btn btn-transparent-dark-gray btn-large margin-20px-top add_memory">add memory</button>
            </div>
        </div>
</form>
    </div>
</div>

<!-- End add-memory-from section -->


<div class="container">                
    <div class="row justify-content-center">
        <div class="col-12 col-md-7 col-lg-12">
            <div class="row">
                <div class="col-12 col-lg-12 md-margin-two-bottom wow fadeIn last-paragraph-no-margin testimonial-style3">
                    <div class="testimonial-content-box padding-twelve-all border-radius-6 box-shadow  md-padding-seven-all sm-padding-eight-all">
                        <span class="page_1st_heading">
                            <h6>Memories from <?php echo $country[0]['title']; ?></h6>
                        </span>
                    </div>
                    <!-- start testimonials item -->
                    
                </div>
                
            </div>
        </div>
    </div> 
</div>

<!-- start post contant section -->

<section class="wow fadeIn hover-option4 blog-post-style3 self-blog-post-style3" style="visibility: visible; animation-name: fadeIn;">
            <div class="container"> 
                <div class="row">
                    <!-- start post item -->
                       <?php foreach($listing_data as $value){?>
                       <?php if($value['listing_category'] == "memory"){?>


                    <div class="col-12 col-lg-4 col-md-6 grid-item margin-30px-bottom text-center text-md-left wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="blog-post bg-light-gray inner-match-height">
                            <div class="blog-post-images overflow-hidden position-relative">
                                <!-- <a href="blog-post-layout-01.html"> -->
                                    <img style="" src="<?php echo base_url('./uploads/cover_photo/')?><?php echo $value['listing_image']?>" alt="" data-no-retina="">
                                    <div class="blog-hover-icon"><span class="text-extra-large font-weight-300">+</span></div>
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
                <?php } } ?>
        <!-- end post item -->     
                </div>
                
            </div>
        </section>


<!-- end post contant section -->

<div class="container self-margin">                
    <div class="row justify-content-center mt-3">
        <div class="col-12 col-md-7 col-lg-12">
            <div class="row">
                <div class="col-12 col-lg-12 md-margin-two-bottom wow fadeIn last-paragraph-no-margin testimonial-style3" >
                    <div class="testimonial-content-box padding-twelve-all  border-radius-6 box-shadow  md-padding-seven-all sm-padding-eight-all">
                        <span class="page_1st_heading">
                           <h6> Obituaries from <?php echo $country[0]['title']; ?></h6>
                        </span>
                    </div>
                    <!-- start testimonials item -->
                    
                </div>
                
            </div>
        </div>
    </div> 
</div>

<!-- start post contant section -->

<section class="wow fadeIn hover-option4 blog-post-style3 self-blog-post-style3" style="visibility: visible; animation-name: fadeIn; margin-top:131px;">
            <div class="container"> 
             
                <div class="row">
                    <!-- start post item -->
                       <?php foreach($listing_data as $value){?>
                       <?php if($value['listing_category'] == "obituaries"){ ?>
                    <div class="col-12 col-lg-3 col-md-6 grid-item margin-30px-bottom text-center text-md-left wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="blog-post bg-light-gray inner-match-height">
                            <div class="blog-post-images overflow-hidden position-relative">
                                <!-- <a href="blog-post-layout-01.html"> -->
                                    <img style="width: 300px; height: 200px;" src="<?php echo base_url('./uploads/cover_photo/')?><?php echo $value['listing_image']?>" alt="" data-no-retina="">
                                    <div class="blog-hover-icon"><span class="text-extra-large font-weight-300">+</span></div>
                               <!--  </a> -->
                            </div>
                            <div class="post-details padding-40px-all md-padding-20px-all">
                                <a href="blog-post-layout-01.html" class="alt-font post-title text-medium text-extra-dark-gray width-100 d-block lg-width-100 margin-15px-bottom"><?php echo $value['listing_name']?></a>
                                <p><?php echo $value['listing_about']?></p>
                                <div class="separator-line-horrizontal-full bg-medium-gray margin-20px-tb"></div>
                                <div class="author">
                                    <span class="text-medium-gray text-uppercase text-extra-small d-inline-block">by <a href="blog-masonry.html" class="text-medium-gray">Jay Benjamin</a>&nbsp;&nbsp;|&nbsp;&nbsp;<?php
                                    echo date("d M yy",strtotime($value['created_at']))
                                    ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }} ?>
        <!-- end post item -->     
                </div>
                
            </div>
        </section>


<!-- end post contant -->
