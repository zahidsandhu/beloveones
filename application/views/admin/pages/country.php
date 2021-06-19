

    <!-- BEGIN: Content-->
    <div class="app-content content">
      <div class="content-overlay"></div>
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-12 mb-2">
            <?php
             if($this->session->flashdata('success')){
              ?>
              <h3 class="content-header-title mb-0 text-success succ">
                <?php echo $this->session->flashdata('success');?>
              </h3>
              <script>
                setTimeout(function(){
                  window.location="<?php echo base_url('admin/');?>";
                },3000);
              </script>
              <?php
            }elseif($this->session->flashdata('error')){
              ?>
              <h3 class="content-header-title mb-0 text-info err">
                <?php echo $this->session->flashdata('error');?>
              </h3>
              <script>
                setTimeout(function(){
                  window.location="<?php echo base_url('admin/country');?>";
                },3000);
              </script>
              <?php
            }else{
              ?>
                  <h3 class="content-header-title mb-0">Add Country Information</h3>
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
          
            <form class="form" method="post" action="<?php base_url('admin/country')?>" enctype="multipart/form-data">
              <div class="form-body">
                <!-- <h4 class="form-section"><i class="feather icon-user"></i> Personal Info</h4> -->
                <div class="row">
                
                  <div class="col-md-4">
                      <div class="form-group">
                      <label for="projectinput5">Select Region</label>
                      <select id="projectinput5" name="sel_category" class="form-control">
                        <option value="1" selected="" >global</option>
                        <option value="2">caribbean</option>
                      </select>
                    </div>
                    <span class="text-danger"><?= form_error('sel_category')?></span>
                  </div>
                  <div class="col-md-4">
                      <div class="form-group">
                      <label for="projectinput5">Country Name</label>
                      <input type="text" id="projectinput5"  class="form-control" placeholder="Author Name" name="sel_country">
                    </div>
                    <span class="text-danger"><?= form_error('sel_country')?></span>
                  </div>
                  <div class="col-md-4">
                      <div class="form-group">
                      <label for="projectinput5">Country Slug</label>
                      <input type="text" id="projectinput5"  class="form-control" placeholder="Author Name" name="country_slug">
                    </div>
                    <span class="text-danger"><?= form_error('country_slug')?></span>
                  </div>
               
                  <div class="col-md-4">
                        <div class="form-group">
                  <label>Cover Photo</label>
                  <label id="projectinput7" class="file center-block">
                    <input type="file" id="file" name="cover">
                    <span class="file-custom"></span>
                  </label>
                </div>
                  </div>
                  <div class="col-md-4">
                        <div class="form-group">
                  <label>Flag Photo</label>
                  <label id="projectinput7" class="file center-block">
                    <input type="file" id="file" name="flag">
                    <span class="file-custom"></span>
                  </label>
                </div>
                  </div>
                </div>
                  <div class="row">
                   
                 <div class="col-md-4">
                    <div class="form-group">
                      <label for="projectinput1">Author Name</label>
                      <input type="text" id="projectinput1"  class="form-control" placeholder="Author Name" name="author">
                    </div>
                    <span class="text-danger"><?= form_error('author')?></span>
                  </div>
                  <div class="col-md-8">
                <div class="form-group">
                  <label for="projectinput8">Quote</label>
                  <input type="text" id="projectinput8" class="form-control" name="quote" placeholder="About Project">
                </div>
                <span class="text-danger"><?= form_error('quote')?></span>
                </div>
              </div>
              </div>

              <div class="form-actions">
                <!-- <button type="reset" class="btn btn-warning mr-1">
                  <i class="feather icon-x"></i> Cancel
                </button> -->
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
   
  
  <!--country table start-->
  <table class="table display" id="example" style="width:100%">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Country Name</th>
      <th scope="col">country_slug</th>
      <th scope="col">cover</th>
      <th scope="col">flag</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      <?php $inc_id=1; 
      foreach($get_counter as $value){?>
    <tr>
      <th scope="row"><?= $inc_id?></th>
      <td width="200px"><?= $value['title']?></td>
      <td width="120px"><?= $value['country_slug']?></td>
      <td><img width="60px" src="../uploads/cover_photo/<?= $value['cover']?>" ></td>
      <td><img width="60px" src="../uploads/cover_photo/<?= $value['flag']?>" ></td>
      <td><a href="<?= base_url('admin/country_update/').$value['id']?>" class="btn btn-success ">Update</a> 
      <a href="<?= base_url('admin/country_delete/').$value['id']?>" class="btn btn-danger " onclick="return confirm('Are you sure you want to delete this item?');">Delete</a></td>
    </tr>
    <?php $inc_id++;} ?>
  </tbody>
</table>
  <!--country table end-->
  
</section>
<!-- // Basic form layout section end -->
        </div>
      </div>
    </div>
    <!-- END: Content-->


   