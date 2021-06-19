

    <!-- BEGIN: Content-->
    <div class="app-content content">
      <div class="content-overlay"></div>
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-12 mb-2">
            <h3 class="content-header-title mb-0">Online Users Information</h3>
          </div>
          
        </div>
        <div class="content-body"><!-- Basic form layout section start -->
<section id="basic-form-layouts">
   
   
   
  
  <!--country table start-->
  <table class="table display" id="example" style="width:100%">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">User Name</th>
      <th scope="col">Email</th>
      <th scope="col">Full Name</th>
      <th scope="col">Phone #</th>
      <th scope="col">Image</th>
      <th scope="col">Read More</th>
    </tr>
  </thead>
  <tbody>
    <?php $id=1;?>
       <?php foreach($login_info as $value){?>
      
    <tr>
      <th scope="row"><?= $id?></th>
      <td width="200px"><?= $value['user_name'];?></td>
      <td width="120px"><?= $value['email'];?></td>
      <td><?= $value['full_name'];?></td>
      <td><?= $value['phone'];?></td>
      <td><img width="60px" src="../uploads/user_profile_photo/<?= $value['profile_photo'];?> "></td>
      <td><a href="<?= base_url('frontend/user_profile/').$value['id'];?>" class="btn btn-success ">Read more</a> 
      </td>
    </tr>
    <?php $id++; } ?>
  </tbody>
</table>
  <!--country table end-->
  
</section>
<!-- // Basic form layout section end -->
        </div>
      </div>
    </div>
    <!-- END: Content-->


   