<div class="container register">
    <div class="row">
        <?php $id = $this->session->userdata('user_id');?>
<form  class="mb-5" action="<?= base_url('frontend/edit_profile/').$id;?>" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-12">
                <div id="success-project-contact-form" class="mx-0" style="display: none;"></div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="form-group">
                    <label>User Name<span class="text-danger">*</span></label>
                    
                    <input type="text" name="user_name" value="<?= $update_records[0]['user_name']?>" placeholder=" Enter your User Name" class=" form-control">
                    <span class="text-danger"><?= form_error('user_name');?></span>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="form-group date datepicker">
                    <label>Email <span class="text-danger">*</span></label>
                    <input type="email" value="<?= $update_records[0]['email']?>" name="email" class=" form-control" placeholder="Enter your Email">
                    <span class="text-danger"><?= form_error('email');?></span>
                </div>
                
            </div>
            
            <div class="col-12 col-lg-6">
                <div class="form-group">
                    <label>Full Name <span class="text-danger">*</span></label>
                    <input type="text" value="<?= $update_records[0]['full_name']?>" name="full_name" class="form-control" placeholder="Enter your Full Name">
                    <span class="text-danger"><?= form_error('full_name');?></span>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="form-group">
                    <label>Address <span class="text-danger">*</span></label>
                    <input type="text" value="<?= $update_records[0]['address']?>" name="address" class="form-control" placeholder="Enter your Address">
                    <span class="text-danger"><?= form_error('address');?></span>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="form-group">
                    <label>Phone <span class="text-danger">*</span></label>
                    <input type="text" value="<?= $update_records[0]['phone']?>" name="phone" class="form-control" placeholder="Enter your Phone Number">
                    <span class="text-danger"><?= form_error('phone');?></span>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="form-group">
                    <label>Profile Photo <span class="text-danger">*</span></label>
                    <input type="file" name="profile_photo" class="form-control">
                    <span class="text-danger"><?= form_error('profile_photo');?></span>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="form-group">
                    <label>Cover Photo <span class="text-danger">*</span></label>
                    <input type="file" name="cover_photo" class="form-control">
                    <span class="text-danger"><?= form_error('cover_photo');?></span>
                </div>
            </div>
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-transparent-dark-gray btn-large margin-20px-top add_memory">Edit Profile</button>
            </div>
        </div>
</form>
    </div>
</div>