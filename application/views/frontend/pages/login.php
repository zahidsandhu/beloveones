<div class="container register">
    <div class="row justify-content-center">
<form  class="mb-5" action="<?= base_url('frontend/login/');?>" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-12">
                
                <div id="success-project-contact-form" class="mx-0" style="display: none;"></div>
            </div>
          
                <?php $this->load->view('frontend/layout/messages');?>
            
            
            <div class="col-12 col-lg-6">
                
                <div class="form-group date datepicker">
                    <label>Email <span class="text-danger">*</span></label>
                    <input type="email" name="email" class=" form-control" placeholder="Enter your Email">
                    <span class="text-danger"><?= form_error('email');?></span>
                </div>
                
            </div>
            <div class="col-12 col-lg-6">
                <div class="form-group">
                    <label>Password <span class="text-danger">*</span></label>
                    <input type="password" name="password"  placeholder="Enter Your Password" class=" form-control">
                    <span class="text-danger"><?= form_error('password');?></span>
                </div>
                
            </div>
            
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-transparent-dark-gray btn-large margin-20px-top add_memory">Login</button>
                <a href="<?= base_url("frontend/forget_password")?>" class="btn btn-transparent-dark-gray btn-large margin-20px-top add_memory">Forget Password</a>
            </div>
            <!--<div class="col-6 text-center">-->
            <!--    <button type="submit" class="btn btn-transparent-dark-gray btn-large margin-20px-top add_memory">Forget Password</button>-->
            <!--</div>-->
        </div>
</form>
    </div>
</div>