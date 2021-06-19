<div class="container register">
    <div class="row">
<form  class="mb-5" action="<?= base_url('frontend/signup/');?>" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-12">
                <div id="success-project-contact-form" class="mx-0" style="display: none;"></div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="form-group">
                    <label>User Name<span class="text-danger">*</span></label>
                    
                    <input type="text" name="user_name" placeholder=" Enter your User Name" class=" form-control">
                    <span class="text-danger"><?= form_error('user_name');?></span>
                </div>
            </div>
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
            <div class="col-12 col-lg-6">
                <div class="form-group">
                    <label>Full Name <span class="text-danger">*</span></label>
                    <input type="text" name="full_name" class="form-control" placeholder="Enter your Full Name">
                    <span class="text-danger"><?= form_error('full_name');?></span>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="form-group">
                    <label>Address <span class="text-danger">*</span></label>
                    <input type="text" name="address" class="form-control" placeholder="Enter your Address">
                    <span class="text-danger"><?= form_error('address');?></span>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="form-group">
                    <label>Phone <span class="text-danger">*</span></label>
                    <input type="text" name="phone" class="form-control" placeholder="Enter your Phone Number">
                    <span class="text-danger"><?= form_error('phone');?></span>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="form-group">
                    <label>Country <span class="text-danger">*</span></label>
                    <select name="country_name" class="form-control">
                        <option value="">Select Country</option>
                        <?php foreach($country as $value){?>
                      <option value="<?= $value['id']?>"><?= $value['title']?></option>
                      <?php } ?>
                    </select>
                    <span class="text-danger"><?= form_error('country_name');?></span>
                </div>
            </div>
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-transparent-dark-gray btn-large margin-20px-top add_memory">Register</button>
            </div>
        </div>
</form>
    </div>
</div>