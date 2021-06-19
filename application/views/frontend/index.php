<?php 
    
    if(isset($page_name)){
        $this->load->view('frontend/layout/head.php');
        $this->load->view('frontend/layout/header.php');
        $this->load->view($page_name);
        $this->load->view('frontend/layout/footer.php');

    }
 ?>