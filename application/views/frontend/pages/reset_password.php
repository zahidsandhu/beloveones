<div class="container register">
    <div class="row justify-content-center">
        
<form  class="mb-5" action="<?= base_url('frontend/reset_password/'.$this->session->userdata('user_id'));?>" method="post" enctype="multipart/form-data">
        <div class="row">
           
            <div class="col-12">
                <?php $this->load->view('frontend/layout/messages');?>
                <div id="success-project-contact-form" class="mx-0" style="display: none;"></div>
            </div>
            
           
            <div class="col-12 col-lg-12">
                <div class="form-group">
                    <label>Old Password <span class="text-danger">*</span></label>
                    <input type="password" name="old_password"  placeholder="Enter Your Old Password" class=" form-control">
                    <span class="text-danger"><?= form_error('old_password');?></span>
                </div>
                
            </div>
            <div class="col-12 col-lg-6">
                <div class="form-group">
                    <label>New Password <span class="text-danger">*</span></label>
                    <input type="password" name="password"  placeholder="Enter Your New Password" class=" form-control">
                    <span class="text-danger"><?= form_error('password');?></span>
                </div>
                
            </div>
            <div class="col-12 col-lg-6">
                <div class="form-group">
                    <label>Conform Password <span class="text-danger">*</span></label>
                    <input type="password" name="con_password"  placeholder="Enter Your Conform Password" class=" form-control">
                    <span class="text-danger"><?= form_error('con_password');?></span>
                </div>
                
            </div>
            
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-transparent-dark-gray btn-large margin-20px-top add_memory">Save</button>
                
            </div>
            
        </div>
</form>
    </div>
</div>