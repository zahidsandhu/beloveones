



<section class="wow fadeIn parallax slider-img" data-stellar-background-ratio="0.5" style="background-image: url(<?= base_url("assets/frontend/")?>images/picturemessage.png); background-position: 0px -16.5px; visibility: visible; animation-name: fadeIn;">
            <div class="opacity-medium bg-extra-dark-gray"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 d-flex flex-column justify-content-center text-center medium-screen page-title-extra-large">
                        <!-- start page title -->
                        <h1 class="text-white-2 alt-font font-weight-600 letter-spacing-minus-1">CARIBBEAN ISLANDS</h1>
                        <span class="text-white-2 opacity6 alt-font">Share Memories of your Loved Ones here</span>
                        <!-- end page title --> 
                    </div>
                </div>
            </div>
        </section>



<!-- slider section end -->

<section class="wow fadeIn self-margin-top" style="visibility: visible; animation-name: fadeIn;">
            <div class="container pt-4">  
            
       
       <h4 class="text-center font-weight-bold"><span>CLICK YOUR FLAG FOR UPLOAD</span></h4>
    

 
                <div class="row blog-post-style4">
                    <div class="col-12   px-3 p-md-5 p-mt-5">
                        
                        <ul class="blog-grid blog-3col gutter-large" style="position: relative; height: 1789.5px;">
                            <li class="grid-sizer"></li>
                            <!-- start post item -->
                            <?php foreach ($country_catg as $value) { ?>
                            
                            <li class="grid-item fadeInUp" style="visibility: visible; animation-name: fadeInUp; position: absolute; left: 0%; top: 0px;">
                                <figure>
                                    <div class="blog-img bg-extra-dark-gray">
                                        <a href="<?= base_url('/').$value["country_slug"]?>"><img style=" height:200px;" src="<?php echo base_url('./uploads/cover_photo/').$value["flag"]?>" alt="" data-no-retina=""></a>
                                    </div>
                                    <figcaption>
                                        <div class="portfolio-hover-main text-center">
                                            <div class="blog-hover-box align-bottom">
                                                <!-- <span class="post-author text-extra-small text-medium-gray text-uppercase d-block margin-5px-bottom sm-margin-5px-bottom">25 April 2017 | by <a href="blog-classic.html" class="text-medium-gray">Jay Benjamin</a></span> -->
                                                <p class="alt-font d-block text-white-2 font-weight-600 mb-0"><a href="<?= base_url('/').$value["country_slug"]?>" class="text-white-2 text-deep-pink-hover"><?= $value["title"]?></a></p>
                                                <!-- <p class="text-medium-gray margin-10px-top blog-hover-text" style="display: none;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> -->
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </li>
                        
                        <?php  } ?>
                            <!-- end post item -->   
                        </ul>
                        
                    </div>
                </div>
            </div>
        </section>