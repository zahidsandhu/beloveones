

    <!-- BEGIN: Content-->
    <div class="app-content content">
      <div class="content-overlay"></div>
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-12 mb-2">
            <?php
             if($this->session->flashdata('up_success')){
              ?>
              <h3 class="content-header-title mb-0 text-success succ">
                <?php echo $this->session->flashdata('up_success');?>
              </h3>
              <script>
                setTimeout(function(){
                  window.location="<?php echo base_url('admin/country');?>";
                },3000);
              </script>
              <?php
            }elseif($this->session->flashdata('up_error')){
              ?>
              <h3 class="content-header-title mb-0 text-info err">
                <?php echo $this->session->flashdata('up_error');?>
              </h3>
              <script>
                setTimeout(function(){
                  window.location="<?php echo base_url('admin/country');?>";
                },3000);
              </script>
              <?php
            }else{
              ?>
                  <h3 class="content-header-title mb-0">Update <span class="text-info"><?= $get_counter[0]['title']?></span> Information</h3>
              <?php
            }
            ?>
            
           
          </div>
          
        </div>
        <div class="content-body"><!-- Basic form layout section start -->
<section id="basic-form-layouts">
   
   <div class="row match-height">
    <!-- <div class="col-md-3"></div> -->
    <div class="col-md-12">
      <div class="card" style="">
     
        <div class="card-content collapse show">
          <div class="card-body">
          
            <form class="form" method="post" action="<?php base_url('admin/country_update')?>" enctype="multipart/form-data">
              <div class="form-body">
                <!-- <h4 class="form-section"><i class="feather icon-user"></i> Personal Info</h4> -->
                <div class="row">
                
                  <div class="col-md-4">
                      <div class="form-group">
                          
                      <label for="projectinput5">Select Region</label>
                      <select id="projectinput5" name="sel_category" class="form-control">
                          <?php  if($get_counter[0]['category_id'] == 1){ ?>
                       <option value="1" selected="" >global </option>
                       <option value="2">caribbean </option>
                       <?php  } else{?>
                        <option value="2" selected="" >caribbean </option>
                        <option value="1">global </option>
                        <?php } ?>
                      </select>
                    </div>
                    <span class="text-danger"><?= form_error('sel_category')?></span>
                  </div>
                  <div class="col-md-4">
                      <div class="form-group">
                      <label for="projectinput5">Country Name</label>
                      <input type="text" id="projectinput5"  class="form-control" placeholder="Author Name" name="sel_country" value="<?= $get_counter[0]['title']?>">
                    </div>
                    <span class="text-danger"><?= form_error('sel_country')?></span>
                  </div>
                  <div class="col-md-4">
                      <div class="form-group">
                      <label for="projectinput5">Country Slug</label>
                      <input type="text" id="projectinput5"  class="form-control" placeholder="Author Name" name="country_slug" value="<?= $get_counter[0]['country_slug']?>">
                    </div>
                    <span class="text-danger"><?= form_error('country_slug')?></span>
                  </div>
               
                  <div class="col-md-4">
                        <div class="form-group">
                  <label>Cover Photo</label>
                  <label id="projectinput7" class="file center-block">
                    <input type="file" id="file" name="cover">
                    <span class="file-custom text-danger">
                        <?php if($this->session->flashdata('c_file_error')){ echo "<br>"; ?>
                        <?php echo $this->session->flashdata('c_file_error'); }?>
                        
                    </span>
                  </label>
                </div>
                  </div>
                  <div class="col-md-4">
                        <div class="form-group">
                  <label>Flag Photo</label>
                  <label id="projectinput7" class="file center-block">
                    <input type="file" id="file" name="flag" >
                    <span class="file-custom">
                        <?php if($this->session->flashdata('f_file_error')){ echo "<br>"; ?>
                        <?php echo $this->session->flashdata('f_file_error'); }?>
                    </span>
                  </label>
                </div>
                  </div>
                </div>
                  <div class="row">
                   
                 <div class="col-md-4">
                    <div class="form-group">
                      <label for="projectinput1">Author Name</label>
                      <input type="text" id="projectinput1"  class="form-control" placeholder="Author Name" name="author" value="<?= $get_counter[0]['author']?>">
                    </div>
                    <span class="text-danger"><?= form_error('author')?></span>
                  </div>
                  <div class="col-md-8">
                <div class="form-group">
                  <label for="projectinput8">Quote</label>
                  <input type="text" id="projectinput8" class="form-control" name="quote" placeholder="About Project" value="<?= $get_counter[0]['saying']?>">
                </div>
                <span class="text-danger"><?= form_error('quote')?></span>
                </div>
              </div>
              </div>

              <div class="form-actions">
               
                <button type="submit" class="btn btn-primary">
                  <i class="fa fa-check-square-o"></i> Save
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- <div class="col-md-3"></div> -->
  
  </div> 
   
</section>
<!-- // Basic form layout section end -->
        </div>
      </div>
    </div>
    <!-- END: Content-->


   