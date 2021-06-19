<?php 
    
    if(isset($page_name)){
        $this->load->view('admin/layout/head.php');
        $this->load->view('admin/layout/header.php');
       $this->load->view('admin/layout/main_menu.php');
        $this->load->view($page_name);
       $this->load->view('admin/layout/customizer.php');
        $this->load->view('admin/layout/footer.php');

    }
 ?>