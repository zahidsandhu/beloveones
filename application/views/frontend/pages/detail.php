<section class="wow fadeIn parallax slider-img" data-stellar-background-ratio="0.5" style="background-image: url(<?= base_url("assets/frontend/")?>images/picturemessage.png); background-position: 0px -16.5px; visibility: visible; animation-name: fadeIn;">
            <div class="opacity-medium bg-extra-dark-gray"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 d-flex flex-column justify-content-center text-center medium-screen page-title-extra-large">
                        <!-- start page title -->
                        <h1 class="text-white-2 alt-font font-weight-600 text-uppercase letter-spacing-minus-1">Celebrities details</h1>
                        <span class="text-white-2 opacity6 alt-font">Share Memories of your Loved Ones here</span>
                        <!-- end page title --> 
                    </div>
                </div>
            </div>
        </section>
<div class="container-fluid pt-4 pb-4">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 pl-5">
            <img style="width: 400px; padding-bottom: 10px;" src="<?php echo base_url('./uploads/cover_photo/')?><?php echo $celebrities_detail[0]['listing_image'];?>" alt="Celebrities image">
                    
                    
            </div>
            <div class="col-sm-8 pr-4 text-left" style="background-color: #f5f6f6; ">
                <ul style="list-style: none;margin-left: -40px;position: relative;">
                    <li class="font-weight-bold pt-2" >Name : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="font-weight-normal"><?php echo $celebrities_detail[0]['listing_name'];?></span></li>
                    <li class="font-weight-bold pt-2">Birth Year : <span class="font-weight-normal"><?php echo $celebrities_detail[0]['birth_year'];?></span></li>
                    <li class="font-weight-bold pt-2">Death Year : <span class="font-weight-normal"><?php echo $celebrities_detail[0]['death_year'];?></span></li>
                </ul>
                <div class="row">
                    <div class="col-sm-12">
                        <p>
                            <?= $celebrities_detail[0]['listing_about']?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>