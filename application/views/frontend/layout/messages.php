<?php if($this->session->flashdata('success')){ ?>
	<div class="alert alert-success col-12">
		<?= $this->session->flashdata('success') ?>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  

	</div>
	 <?php  //redirect('frontend/login');?>
<?php }if($this->session->flashdata('error')){ ?>
	<div class="alert alert-danger col-12">
		<?= $this->session->flashdata('error') ?>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  <script>
      setTimeout(function(){ 
          $(".alert").hide("slow");
          }, 3000);
  </script>
	</div>
	 
<?php } ?>

