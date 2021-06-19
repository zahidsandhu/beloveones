<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
public function __construct()
    {
        parent::__construct();
        //$this->load->library('form_validation','session');
       // $this->load->library('upload'); 
        $this->load->model("my_model");
        if (!$this->session->userdata('name')) {
            redirect('auth/admin_login');
        }

    }
    public function index()
    {
        $data['page_name']="admin/pages/home";
        $data['page_title']="Admin | Home";
        $this->load->view('admin/index',$data);
    }
    public function upload_image($input_field_name,$path)
    {
      if($input_field_name == "cover" && $path == "cover_photo"){
        $config = array(
            'upload_path' => "./uploads/cover_photo",
            'allowed_types' => "jpg|png|jpeg|gif|webp",
            'overwrite' => TRUE,
            'max_size' => "5048000",
            'max_height' => "3648",
            'max_width' => "5472",
            'remove_spaces' => TRUE,
            'encrypt_name' => TRUE
        );
        // $cover_image=$_FILES['cover']['name'];
        $this->load->library('upload', $config);
        if($this->upload->do_upload('cover'))
        {
            $image = $this->upload->data();
            $image_name = $image['file_name'];
            return $image_name;
        }
      }elseif($input_field_name == "flag" && $path == "flag_photo"){
            $config = array(
            'upload_path' => "./uploads/flag_photo",
            'allowed_types' => "jpg|png|jpeg|gif",
            'overwrite' => TRUE,
            'max_size' => "5048000",
            'max_height' => "3648",
            'max_width' => "5472",
            'remove_spaces' => TRUE,
            'encrypt_name' => TRUE
        );
        // $cover_image=$_FILES['cover']['name'];
        $this->load->library('upload', $config);
        if($this->upload->do_upload('flag'))
        {
            $image = $this->upload->data();
            $image_name = $image['file_name'];
            return $image_name;
        }
      }else {
          print_r($this->upload->display_errors());exit();
            $error = array('error' => $this->upload->display_errors());
            $response = array('response'=>'fail','message'=>$error['error']);
            echo json_encode($response);
            exit();
            //return $error = array('error' => $this->upload->display_errors());
        }
    }
    public function country(){
 
        if ($this->input->post()) {
                $this->form_validation->set_rules('sel_country','Select country','trim|required');
                $this->form_validation->set_rules('sel_category','Select Category','trim|required');
                $this->form_validation->set_rules('country_slug','Country slug Reuired','trim|required');
                $this->form_validation->set_rules('author','Author Name','trim|required');
                $this->form_validation->set_rules('quote','quote','trim|required');
                
                

                
                if($this->form_validation->run()){
                  $i=0;
                while($i < 2){
                  if($i == 0){
                          $cover_image="cover";
                          $cover_path="cover_photo";
                          if(isset($_FILES['cover']['name']) && $_FILES['cover']['name']!=''){
                           $cover_name = $this->upload_image($cover_image,$cover_path);
                          }else{
                              $image_name='';
                          }
                  }else{
                          $flag_image="flag";
                          $flag_path="flag_photo";
                          if(isset($_FILES['flag']['name']) && $_FILES['flag']['name']!=''){
                           $flag_name = $this->upload_image($flag_image,$flag_path);
                          }else{
                              $image_name='';
                          }
                  }
                  $i++;
                }
                
                
                    $form_data=array(
                        "title"=>$this->input->post('sel_country'),
                        "category_id"=>$this->input->post('sel_category'),
                        "country_slug"=>$this->input->post('country_slug'),
                        "author"=>$this->input->post('author'),
                        "cover"=>$cover_name,
                        "flag"=>$flag_name,
                        "saying"=>$this->input->post('quote')
                    );
                    $insert=$this->my_model->insert_table('country',$form_data);
                    if($insert){
                      $this->session->set_flashdata('success','Data successfully save');
                    }else{
                      $this->session->set_flashdata('error','Database Error!');
                    }

                }
            }
         $data['get_counter']=$this->my_model->get_table('country');  
        $data['page_name']="admin/pages/country";
        $data['page_title']="Admin | Country";
        $this->load->view('admin/index',$data);
    }


    public function save() {
  $data = array();

  $config['upload_path'] = './uploads/';
  $config['allowed_types'] = 'jpg|png';
  $config['max_size'] = 5024;
  $config['encrypt_name'] = true;  

  $this->load->library('upload', $config);

  if (!$this->upload->do_upload('cover')) {
    $error = array('error' => $this->upload->display_errors());
  } else {
    $fileData = $this->upload->data();
    $data['userfile'] = $fileData['file_name'];
  }

  if (!$this->upload->do_upload('flag')) {
    $error = array('error' => $this->upload->display_errors()); 
  } else {
    $fileData = $this->upload->data();
    $data['userfile2'] = $fileData['file_name'];
  }
  // Verify the data using print_r($data); die;
  // $result = $this->Product_model->addProducts($data);
  // if ($result) {
  //   $this->load->view('success_view');
  // } else {
  //   $this->load->view('failure_view');
  // }
}

public function country_update($id){
    
     $condition=['id'=>$id];
    $data['get_counter']=$this->my_model->get_table_row($condition,'country');

     $cover_image="uploads/cover_photo/".$data['get_counter'][0]['cover'];
     $flag_image="uploads/cover_photo/".$data['get_counter'][0]['flag'];
     
     if ($this->input->post()) {
                $this->form_validation->set_rules('sel_country','Select country','trim|required');
                $this->form_validation->set_rules('sel_category','Select Category','trim|required');
                $this->form_validation->set_rules('country_slug','Country slug Reuired','trim|required');
                $this->form_validation->set_rules('author','Author Name','trim|required');
                $this->form_validation->set_rules('quote','quote','trim|required');
            
            if($this->form_validation->run()){
            // update data without image start
                if($_FILES['cover']['size'] == 0 && $_FILES['flag']['size'] == 0 ){
                    
                    $form_data=array(
                        "title"=>$this->input->post('sel_country'),
                        "category_id"=>$this->input->post('sel_category'),
                        "country_slug"=>$this->input->post('country_slug'),
                        "author"=>$this->input->post('author'),
                        "saying"=>$this->input->post('quote'),
                        "updated_at"=>date('yy-m-d')
                    );
                    
                    $insert=$this->my_model->update_table($condition,'country',$form_data);
                    if($insert){
                      $this->session->set_flashdata('up_success','Data successfully update');
                     
                    }else{
                      $this->session->set_flashdata('up_error','Database Error!');
                     
                    }
                }  // update data without image end
                else{
                     //   update cover image start
                   if($_FILES['cover']['size'] > 0 && $_FILES['flag']['size'] == 0 ){
                     //  jpg|png|jpeg|gif
                       
                      if($_FILES['cover']['type'] =='image/jpg' || $_FILES['cover']['type'] =='image/jpeg' || $_FILES['cover']['type'] =='image/png' || $_FILES['cover']['type'] =='image/gif'){
                          
                      }else{
                           $this->session->set_flashdata('c_file_error','you cannot upload this type of file');
                           
                         redirect("admin/country_update/$id");
                      }
                       
                      if(isset($cover_image)){
                     unlink($cover_image);
                      }
                    $cover_image="cover";
                      $img_path="cover_photo";
                      if(isset($_FILES['cover']['name']) && $_FILES['cover']['name']!=''){
                       $cover_name = $this->upload_image($cover_image,$img_path);
                      }else{
                          $image_name='';
                      }
                      
                      $form_data=array(
                            "title"=>$this->input->post('sel_country'),
                            "category_id"=>$this->input->post('sel_category'),
                            "country_slug"=>$this->input->post('country_slug'),
                            "author"=>$this->input->post('author'),
                            "cover"=>$cover_name,
                            "saying"=>$this->input->post('quote'),
                            "updated_at"=>date('yy-m-d')
                        );
                        $insert=$this->my_model->update_table($condition,'country',$form_data);
                        if($insert){
                          $this->session->set_flashdata('up_success','Cover image successfully update');
                        }else{
                          $this->session->set_flashdata('up_error','Database Error!');
                         
                        }
                    
                   } //   update cover image end
                   //   update flag image start
                   elseif( $_FILES['flag']['size'] > 0 && $_FILES['cover']['size'] == 0){
                       
                        if($_FILES['flag']['type'] =='image/jpg' || $_FILES['flag']['type'] =='image/jpeg' || $_FILES['flag']['type'] =='image/png' || $_FILES['flag']['type'] =='image/gif'){
                          
                      }else{
                           $this->session->set_flashdata('f_file_error','you cannot upload this type of file');
                           
                         redirect("admin/country_update/$id");
                      }
                   
                        unset($_FILES['cover']);
                       $config = array(
                                'upload_path' => "./uploads/cover_photo",
                                'allowed_types' => "jpg|png|jpeg|gif",
                                'overwrite' => TRUE,
                                'max_size' => "5048000",
                                'max_height' => "3648",
                                'max_width' => "5472",
                                'remove_spaces' => TRUE,
                                'encrypt_name' => TRUE
                            );
                            $this->load->library('upload',$config);
                            if($this->upload->do_upload('flag'))
                            {
                                if(isset($flag_image)){
                                    unlink($flag_image);
                                }
                                 
                                $image = $this->upload->data();
                                $image_name = $image['file_name'];
                                
                            }else {
                              print_r($this->upload->display_errors());
                            }
                          $form_data=array(
                            "title"=>$this->input->post('sel_country'),
                            "category_id"=>$this->input->post('sel_category'),
                            "country_slug"=>$this->input->post('country_slug'),
                            "author"=>$this->input->post('author'),
                            // "cover"=>$cover_name,
                            "flag"=>$image_name,
                            "saying"=>$this->input->post('quote'),
                            "updated_at"=>date('Y-m-d')
                        );
                        $insert=$this->my_model->update_table($condition,'country',$form_data);
                        if($insert){
                          $this->session->set_flashdata('up_success','Flag image successfully update');
                        }else{
                          $this->session->set_flashdata('up_error','Database Error!');
                         
                        }
                   } //   update flag image end
                   else{
                       if($_FILES['cover']['type'] =='image/jpg' || $_FILES['cover']['type'] =='image/jpeg' || $_FILES['cover']['type'] =='image/png' || $_FILES['cover']['type'] =='image/gif'){
                          
                      }else{
                           $this->session->set_flashdata('c_file_error','you cannot upload this type of file');
                           
                         redirect("admin/country_update/$id");
                      }
                       if($_FILES['flag']['type'] =='image/jpg' || $_FILES['flag']['type'] =='image/jpeg' || $_FILES['flag']['type'] =='image/png' || $_FILES['flag']['type'] =='image/gif'){
                          
                      }else{
                           $this->session->set_flashdata('f_file_error','you cannot upload this type of file');
                           
                         redirect("admin/country_update/$id");
                      }
                       unlink($cover_image);
                       unlink($flag_image);
                       
                               $i=0;
                        while($i < 2){
                          if($i == 0){
                                  $cover_image="cover";
                                  $cover_path="cover_photo";
                                  if(isset($_FILES['cover']['name']) && $_FILES['cover']['name']!=''){
                                   $cover_name = $this->upload_image($cover_image,$cover_path);
                                  }else{
                                      $image_name='';
                                  }
                          }else{
                                  $flag_image="flag";
                                  $flag_path="flag_photo";
                                  if(isset($_FILES['flag']['name']) && $_FILES['flag']['name']!=''){
                                   $flag_name = $this->upload_image($flag_image,$flag_path);
                                  }else{
                                      $image_name='';
                                  }
                          }
                          $i++;
                        }
                         $form_data=array(
                            "title"=>$this->input->post('sel_country'),
                            "category_id"=>$this->input->post('sel_category'),
                            "country_slug"=>$this->input->post('country_slug'),
                            "author"=>$this->input->post('author'),
                            "cover"=>$cover_name,
                            "flag"=>$flag_name,
                            "saying"=>$this->input->post('quote'),
                            "updated_at"=>date('yy-m-d')
                        );
                        $insert=$this->my_model->update_table($condition,'country',$form_data);
                        if($insert){
                          $this->session->set_flashdata('up_success','Data successfully updateed');
                        }else{
                          $this->session->set_flashdata('up_error','Database Error!');
                         
                        }
                   }
                }
            }
     }
    
        $data['page_name']="admin/pages/update";
        $data['page_title']="Admin | Country Updaet";
        $this->load->view('admin/index',$data);
}

public function country_delete($id){
    $condition=['id'=>$id];
   
    $table_data=$this->my_model->get_table_row($condition,'country');
    
      $cover_image="uploads/cover_photo/".$table_data[0]['cover'];
     $flag_image="uploads/cover_photo/".$table_data[0]['flag'];
     if(unlink($cover_image) && unlink($flag_image)) {
   $check=$this->my_model->delete_table($condition,'country');
    if($check){
        $this->session->set_flashdata("success","Data delete successfully");
        redirect(base_url('admin/country'));
    }else{
         $this->session->set_flashdata("error","Error! Data not delete");
          redirect(base_url('admin/country'));
    }
}

}
public function online_people(){
  $condition=['login_status'=>'1'];
    $data['login_info']=$this->my_model->get_table_row($condition,'register');
    
        $data['page_name']="admin/pages/online_people";
        $data['page_title']="Admin | Online Status";
        $this->load->view('admin/index',$data);
}


}
