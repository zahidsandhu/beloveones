<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        
        $this->load->model("my_model");
         $this->load->library('email');
         
         unset($_SESSION['success']);
         unset($_SESSION['error']);

    }

    public function index()
    
    {
        
    	$data['country'] = $this->my_model->get_table_row_query("SELECT * FROM country limit 20");
        $data['listing_data']=$this->my_model->get_table_row_query("SELECT * FROM listing where celeb = 1 limit 3");
        // print_r($data['country']);exit();
        $data['page_name']="frontend/pages/home";
        $data['page_title']="Belovedones | Caribbean & Global Memorials and Obituaries";
        $this->load->view('frontend/index',$data); 
    }
    public function about()
    {
    	$data['country'] = $this->my_model->get_table_row_query("SELECT * FROM country limit 20");
        $data['listing_data']=$this->my_model->get_table_row_query("SELECT * FROM listing where celeb = 1");
        // print_r($data['country']);exit();
        $data['page_name']="frontend/pages/about_us";
        $data['page_title']="Belovedones | Caribbean & Global Memorials and Obituaries";
        $this->load->view('frontend/index',$data); 
    }

    public function country_details($id)
    {
        
        if($this->session->userdata('user_id')){
            $userid=['id'=>$this->session->userdata('user_id')];
          $data["userdata_get"]= $this->my_model->get_table_row($userid,"register");
        }
        $data['country'] = $this->my_model->get_table_row_query("SELECT * FROM country WHERE country_slug ='".$id."'");
        
        $data['listing_data']=$this->my_model->get_table_row_query("SELECT * FROM listing WHERE country_id =".$data['country'][0]['id']);
         
        
        $data['page_name']="frontend/pages/country_details";
        $data['page_title']="Belovedones | ".$data['country'][0]['title'];
        $this->load->view('frontend/index',$data); 
    }
    
    function randomPassword() {
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < 4; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass); //turn the array into a string
    }
    
    public function send_mail($to_email,$password,$username) {
        $from_email = "info@belovedones.love";
        // $to_email = $this->input->post('email');
        //Load email library
        $this->load->library('email');
        $this->email->set_header('MIME-Version', '1.0; charset=utf-8');
        $this->email->set_header('Content-type', 'text/html');
        $this->email->from($from_email, 'belovedones love');
        $this->email->to($to_email);
        $this->email->subject('New Account Registration');
        $data['email'] = $to_email;
        $data['password'] = $password;
        $data['username'] = $username;
        $mesg = $this->load->view('frontend/layout/email',$data,true);
        $this->email->message($mesg);
        //Send mail
        if($this->email->send())
            return true;
        else
            show_error($this->email->print_debugger());
        
    }
    public function insert_listing($country_id){
        // print_r($this->input->post());exit;
        if($this->session->userdata('user_id')){
                
            if($this->input->post()){
            $hidden_id = $this->input->post('hidden_id');
            $this->form_validation->set_rules('listing_name','Name','trim|required');
            $this->form_validation->set_rules('birth_year','Birthday Year','trim|required');
            $this->form_validation->set_rules('death_year','Death Year','trim|required');
            $this->form_validation->set_rules('listing_about','About','trim|required');

            $listing_image = '';
            if (isset($_FILES['listing_image'])) {
                $config = array(
                    'upload_path' => "./uploads/cover_photo/",
                    'allowed_types' => "jpg|png|jpeg",
                    'overwrite' => TRUE,
                    'encrypt_name' => TRUE
                );
                $this->load->library('upload', $config);
                if($this->upload->do_upload('listing_image'))
                {
                    $image = $this->upload->data();
                    $listing_image = $image['file_name'];

                }
            }

            if($this->form_validation->run() == true){
                $listing_values = array(
                    'user_id' => $this->session->userdata('user_id'),
                    'listing_name' => $this->input->post('listing_name'),
                    'birth_year' => $this->input->post('birth_year'),
                    'death_year' => $this->input->post('death_year'),
                    'listing_image' => $listing_image,
                    'listing_about' => $this->input->post('listing_about'),
                    'country_id' => $this->input->post('hidden_id'),
                    'listing_category' => $this->input->post('hidden_id2'),
                    'created_at' => date('Y-m-d H:i:s')
                );

                $insert_listing_values = $this->my_model->insert_table('listing',$listing_values);
                if($insert_listing_values){
                     $this->session->set_flashdata('success','Your data has been added successfully!');
                                  ?>
                                   <script>
                                      setTimeout(function(){ 
                                          window.location.href = "<?= base_url('frontend/country_details/'.$country_id);?>";
                                          }, 3000);
                                  </script>
                                  <?php
                     
                }else{
                     $this->session->set_flashdata('error','Something went wrong!');
                     ?>
                                   <script>
                                      setTimeout(function(){ 
                                          window.location.href = "<?= base_url('frontend/country_details/'.$country_id);?>";
                                          }, 3000);
                                  </script>
                                  <?php
                }
                
            }

            
        }

        }else{
            // echo "<pre>";
            //     print_r($this->input->post());exit;
            
            if($this->input->post()){
                
                $condetion=[ "user_name"=>$this->input->post('user_name'),
                            "email"=>$this->input->post('email')
                    ];
                $check_user_data = $this->my_model->get_table_row($condetion,'register');
              
                if(!empty($check_user_data)){
                        
                         $get_user_data = $this->my_model->get_table_row($condetion,'register');
                         $get_user_id= $check_user_data[0]['id'];
                
                $hidden_id = $this->input->post('hidden_id');
                $this->form_validation->set_rules('user_name','User Name','trim|required');
                $this->form_validation->set_rules('email','Email','trim|required');
                $this->form_validation->set_rules('listing_name','Name','trim|required');
                $this->form_validation->set_rules('birth_year','Birthday Year','trim|required');
                $this->form_validation->set_rules('death_year','Death Year','trim|required');
                $this->form_validation->set_rules('listing_about','About','trim|required');
                
                // image upload start
                        $listing_image = '';
                        if (isset($_FILES['listing_image'])) {
                            $config = array(
                                'upload_path' => "./uploads/cover_photo/",
                                'allowed_types' => "jpg|png|jpeg",
                                'overwrite' => TRUE,
                                'encrypt_name' => TRUE
                            );
                            $this->load->library('upload', $config);
                            if($this->upload->do_upload('listing_image'))
                            {
                                $image = $this->upload->data();
                                $listing_image = $image['file_name'];
            
                            }
                        }
                        // image upload end
                if($this->form_validation->run() == true){
                    
                         $listing_values = array(
                            'user_id' => $get_user_id,
                            'listing_name' => $this->input->post('listing_name'),
                            'birth_year' => $this->input->post('birth_year'),
                            'death_year' => $this->input->post('death_year'),
                            'listing_image' => $listing_image,
                            'listing_about' => $this->input->post('listing_about'),
                            'country_id' => $this->input->post('hidden_id'),
                            'listing_category' => $this->input->post('hidden_id2'),
                            'created_at' => date('Y-m-d H:i:s')
                         );
                         $insert_listing_values = $this->my_model->insert_table('listing',$listing_values);
                        if($insert_listing_values){
                             $this->session->set_flashdata('success','Your data has been added successfully!');
                             ?>
                             <script>
                                      setTimeout(function(){ 
                                          window.location.href = "<?= base_url('frontend/country_details/'.$country_id);?>";
                                          }, 3000);
                                  </script>
                                  <?php
                        }else{
                             $this->session->set_flashdata('error','Something went wrong!');
                             ?>
                                   <script>
                                      setTimeout(function(){ 
                                          window.location.href = "<?= base_url('frontend/country_details/'.$country_id);?>";
                                          }, 3000);
                                  </script>
                                  <?php
                        }
                 
                    

                } // validation if end
                }else{
                     $hidden_id = $this->input->post('hidden_id');
                    $this->form_validation->set_rules('user_name','User Name','trim|required');
                    $this->form_validation->set_rules('email','Email','trim|required');
                    $this->form_validation->set_rules('listing_name','Name','trim|required');
                    $this->form_validation->set_rules('birth_year','Birthday Year','trim|required');
                    $this->form_validation->set_rules('death_year','Death Year','trim|required');
                    $this->form_validation->set_rules('listing_about','About','trim|required');
                    // image upload start
                        $listing_image = '';
                        if (isset($_FILES['listing_image'])) {
                            $config = array(
                                'upload_path' => "./uploads/cover_photo/",
                                'allowed_types' => "jpg|png|jpeg",
                                'overwrite' => TRUE,
                                'encrypt_name' => TRUE
                            );
                            $this->load->library('upload', $config);
                            if($this->upload->do_upload('listing_image'))
                            {
                                $image = $this->upload->data();
                                $listing_image = $image['file_name'];
            
                            }
                        }
                        // image upload end
                        if($this->form_validation->run() == true){
                            
                            $username = $this->input->post('user_name');
                            $email = $this->input->post('email');
                           $date=date("ymdhms");
                            $password=$this->randomPassword();
                            
                            $user_data=[ 
                                    'country_id'=>$country_id,
                                    "user_name"=>$this->input->post('user_name'),
                                    "email"=>$this->input->post('email'),
                                    "password"=>$password,
                                    "full_name"=>$this->input->post('user_name'),
                                    'created_at' => date('Y-m-d H:i:s')
                            ];
                           
                            $get_insert_id = $this->my_model->insert_table('register',$user_data);
                           
                            $listing_values = array(
                            'user_id' => $get_insert_id,
                            'listing_name' => $this->input->post('listing_name'),
                            'birth_year' => $this->input->post('birth_year'),
                            'death_year' => $this->input->post('death_year'),
                            'listing_image' => $listing_image,
                            'listing_about' => $this->input->post('listing_about'),
                            'country_id' => $this->input->post('hidden_id'),
                            'listing_category' => $this->input->post('hidden_id2'),
                            'created_at' => date('Y-m-d H:i:s')
                         );
                        //  print_r($listing_values);exit();
                             $insert_listing_values = $this->my_model->insert_table('listing',$listing_values);
                            if($insert_listing_values){
                            $this->send_mail($email,$password,$username);
                                
                    
                                
                                $this->session->set_flashdata('success','Your data has been added successfully!');
                                ?>
                                    <script>
                                      setTimeout(function(){ 
                                          window.location.href = "<?= base_url('frontend/country_details/'.$country_id);?>";
                                          }, 3000);
                                  </script>
                                <?php
                               
                            }else{
                                 $this->session->set_flashdata('error','Something went wrong!');
                                 ?>
                                   <script>
                                      setTimeout(function(){ 
                                          window.location.href = "<?= base_url('frontend/country_details/'.$country_id);?>";
                                          }, 3000);
                                  </script>
                                  <?php
                            }
                                
                            
                        }
                    }
            }
                    
        }
         if($this->session->userdata('user_id')){
            $userid=['id'=>$this->session->userdata('user_id')];
          $data["userdata_get"]= $this->my_model->get_table_row($userid,"register");
        }
            $data['country'] = $this->my_model->get_table_row_query("SELECT * FROM country WHERE id =".$country_id);
            $data['listing_data']=$this->my_model->get_table_row_query("SELECT * FROM listing WHERE country_id =".$country_id);
           

            $data['page_name']="frontend/pages/country_details";
            $data['page_title']="Belovedones | Country Details";
            $this->load->view('frontend/index',$data);
    }

    
    public function upload_image($input_field_name,$path)
    {
      if($input_field_name == "profile_photo" && $path == "user_profile_photo"){
        $config = array(
            'upload_path' => "./uploads/user_profile_photo",
            'allowed_types' => "jpg|png|jpeg|gif",
            'overwrite' => TRUE,
            'max_size' => "2048000",
            'max_height' => "3648",
            'max_width' => "5472",
            'remove_spaces' => TRUE,
            'encrypt_name' => TRUE
        );
        // $cover_image=$_FILES['cover']['name'];
        $this->load->library('upload', $config);
        if($this->upload->do_upload('profile_photo'))
        {
            $image = $this->upload->data();
            $image_name = $image['file_name'];
            return $image_name;
        }
      }elseif($input_field_name == "cover_photo" && $path == "user_cover_photo"){
            $config = array(
            'upload_path' => "./uploads/user_cover_photo",
            'allowed_types' => "jpg|png|jpeg|gif",
            'overwrite' => TRUE,
            'max_size' => "2048000",
            'max_height' => "3648",
            'max_width' => "5472",
            'remove_spaces' => TRUE,
            'encrypt_name' => TRUE
        );
        // $cover_image=$_FILES['cover']['name'];
        $this->load->library('upload', $config);
        if($this->upload->do_upload('cover_photo'))
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
    public function signup()
    {
        
        if($this->input->post())
        {
            
            // $hidden_id = $this->input->post('hidden_id');
            $this->form_validation->set_rules('user_name','User Name','trim|required');
            $this->form_validation->set_rules('email','Email','trim|required');
            $this->form_validation->set_rules('password','Password','trim|required');
            $this->form_validation->set_rules('full_name','Full Name','trim|required');
            $this->form_validation->set_rules('address','Address ','trim|required');
            $this->form_validation->set_rules('phone','Phone ','trim|required');
           
            $this->form_validation->set_rules('country_name','Country Name','trim|required');
       
            if($this->form_validation->run() == true)
            {
                $signup_values = array(
                    'country_id'=>$this->input->post("country_name"),
                    'user_name' => $this->input->post('user_name'),
                    'email' => $this->input->post('email'),
                    'password' => $this->input->post('password'),
                    'full_name' => $this->input->post('full_name'),
                    'address' => $this->input->post('address'),
                    'phone' => $this->input->post('phone'),
                    'created_at' => date('Y-m-s H:i:s')
                );
                $insert_signup_values = $this->my_model->insert_table('register',$signup_values);
                if($insert_signup_values){
                     $this->session->set_flashdata('success','You are register successfully!');
                     redirect("frontend/login/");
                }else{
                     $this->session->set_flashdata('error','Something went wrong!');
                     redirect("frontend/signup/");
                }
                
            }
            
        }
        

        $data['country'] = $this->my_model->get_table_row_query("SELECT * FROM country");
        $data['page_name']="frontend/pages/signup";
        $data['page_title']="Belovedones | Signup";
        $this->load->view('frontend/index',$data); 
    }

    public function login(){
         
        if($this->session->userdata("user_id")){
            redirect("frontend/user_profile/".$this->session->userdata("user_id"));
        }

         if ($this->input->post()) {
                $this->form_validation->set_rules('email','Email','trim|required|valid_email');
                $this->form_validation->set_rules('password','Password','trim|required');

            if($this->form_validation->run() == true){

                $email = $this->input->post('email');
                $password = $this->input->post('password');
                $check=$this->my_model->User_login($email,$password);
                 
                if ($check) {
                     
                    $array = array('user_email'=>$email,'user_id'=>$check->id,"username"=>$check->full_name);
                    
                    $this->session->set_userdata($array);
                    
                    $user_id=$check->id;
                   //if($this->session->userdata('username')){
                    $login_data=['login_status'=>'1'];
                     $condition=['id'=>"$user_id"];
                    $update=$this->my_model->update_table($condition,'register',$login_data);
                        if($update){
                            redirect("frontend/user_profile/".$user_id);
                        }
                  // }
                    


                }else{
                    $this->session->set_flashdata('error','Email or Password is invalid');
                   
                }
            }
            
         }

        $data['page_name']="frontend/pages/login";
        $data['page_title']="Belovedones | Login";
        $this->load->view('frontend/index',$data);
    }

    public function user_logout()
    {
         $user_id=$this->session->userdata('user_id');
         $condition=['id'=>$user_id];
         $login_data=['login_status'=>'0'];
         $update=$this->my_model->update_table($condition,'register',$login_data);
         echo $update;
        
      $this->session->sess_destroy();
   
           redirect('frontend');
    
        
        
    }
    public function user_profile($id)
    {
        $user_id = $this->session->userdata('user_id');
        $data['register'] = $this->my_model->get_table_row_query("SELECT * FROM register WHERE id=".$user_id);
       
        $data['listing'] = $this->my_model->get_table_row_query("SELECT * FROM listing WHERE user_id =".$id);
       
        
        $data['country'] = $this->my_model->get_table_row_query("SELECT * FROM country WHERE id = '".$data['register'][0]['country_id']."'");
        
        // if(sizeof($data['listing'])==0){
        //     $this->session->set_flashdata('error','You did not add any listing post!');
        // }

        $data['page_name'] = "frontend/pages/user_profile";
        $data['page_title'] = "Belovedones | User Profile";
        $this->load->view('frontend/index',$data);
    }
    public function caribbean(){
        $where=['category_id'=>2];
        $data['country_catg'] = $this->my_model->get_table_row($where,"country");
        $data['country_catg'] = $this->my_model->get_table_row_query("SELECT * FROM country WHERE category_id = 2 order by title ASC");

        $data['page_name']="frontend/pages/caribain";
        $data['page_title']="Belovedones | Caribain";
        $this->load->view('frontend/index',$data);
    }
    public function global(){
         $where=['category_id'=>1];
        $data['country_catg'] = $this->my_model->get_table_row($where,"country");
        $data['page_name']="frontend/pages/global";
        $data['page_title']="Belovedones | Global";
        $this->load->view('frontend/index',$data);
    }

    public function update_image($input_field_name,$path)
    {
      if($input_field_name == "profile_photo" && $path == "user_profile_photo"){
        $config = array(
            'upload_path' => "./uploads/user_profile_photo",
            'allowed_types' => "jpg|png|jpeg|gif",
            'overwrite' => TRUE,
            'max_size' => "2048000",
            'max_height' => "3648",
            'max_width' => "5472",
            'remove_spaces' => TRUE,
            'encrypt_name' => TRUE
        );
        $this->load->library('upload', $config);
        if($this->upload->do_upload('profile_photo'))
        {   
            unlink("./uploads/user_profile_photo/".$image_name);
            $image = $this->upload->data();
            $image_name = $image['file_name'];
            return $image_name;
        }
      }elseif($input_field_name == "cover_photo" && $path == "user_cover_photo"){
            $config = array(
            'upload_path' => "./uploads/user_cover_photo",
            'allowed_types' => "jpg|png|jpeg|gif",
            'overwrite' => TRUE,
            'max_size' => "2048000",
            'max_height' => "3648",
            'max_width' => "5472",
            'remove_spaces' => TRUE,
            'encrypt_name' => TRUE
        );
        $this->load->library('upload', $config);
        if($this->upload->do_upload('cover_photo'))
        {
            unlink("./uploads/user_cover_photo/".$image_name);
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

    public function edit_profile($id){
// echo $id;exit;
        if($this->input->post()){

            $update_profile_image="profile_photo";
            $update_profile_path="user_profile_photo";
            if(isset($_FILES['profile_photo']['name']) && $_FILES['profile_photo']['name']!=''){
                $update_profile_name = $this->upload_image($update_profile_image,$update_profile_path);
            }else{
                    $image_name='';
            }

            $update_cover_image="cover_photo";
            $update_cover_path="user_cover_photo";
            if(isset($_FILES['cover_photo']['name']) && $_FILES['cover_photo']['name']!=''){
                $update_cover_name = $this->upload_image($update_cover_image,$update_cover_path);
            }else{
                    $image_name='';
            }
            $UserName = $this->input->post('full_name');
            $update_signup_values = array(
                    'user_name' => $this->input->post('user_name'),
                    'email' => $this->input->post('email'),
                    'full_name' => $this->input->post('full_name'),
                    'address' => $this->input->post('address'),
                    'phone' => $this->input->post('phone'),
                    'profile_photo' => $update_profile_name,
                    'cover_photo' => $update_cover_name,
                    'updated_at' => date('Y-m-s H:i:s')
                );
            $update_condition = array('id' => $id);
            $update_query = $this->my_model->update_table($update_condition, 'register',$update_signup_values);

            if($update_query){
                $this->session->set_flashdata('success','Your Profile Updated Successfully');

                $this->session->set_userdata('username', $UserName);

                redirect('frontend/user_profile/'.$id);
            }else{
                $this->session->set_flashdata('error','Something Went Wrong!');
                redirect('frontend/edit_profile/');
            }

        }
        $data['update_records'] = $this->my_model->get_table_row_query("SELECT * FROM register WHERE id = $id ");
        $data['page_name']="frontend/pages/edit_profile";
        $data['page_title']="Belovedones | Edit Profile";
        $this->load->view('frontend/index',$data);
    }
    public function detail($id){
        $where=['id'=>$id];
        $data['celebrities_detail'] = $this->my_model->get_table_row($where,"listing");
        $data['page_name']="frontend/pages/detail";
        $data['page_title']="Belovedones | Detail";
        $this->load->view('frontend/index',$data);
    }
    public function celebrities(){
        // 	$data['country'] = $this->my_model->get_table_row_query("SELECT * FROM country limit 20");
        $data['listing_data']=$this->my_model->get_table_row_query("SELECT * FROM listing where celeb = 1");
        // print_r($data['country']);exit();
        $data['page_name']="frontend/pages/celebrities";
        $data['page_title']="Belovedones | Beloved Celebrities";
        $this->load->view('frontend/index',$data); 
    }
    
    public function forget_password(){
         if ($this->input->post()) {
                $this->form_validation->set_rules('email','Email','trim|required|valid_email');
                if($this->form_validation->run() == true){
                    $condition=['email'=>$this->input->post('email')];
                    $getdata=$this->my_model->get_table_row($condition,"register");
                    if($getdata){
                        $email=$this->input->post('email');
                        $password=$getdata[0]['password'];
                        $username=$getdata[0]['user_name'];
                       
                        $this->send_mail($email,$password,$username);
                        $this->session->set_flashdata('success','Your forget password  request has been sent on your mail');
                    }else{
                        $this->session->set_flashdata('error','Enter your correct email address');
                    }
                }
         }
         $data['page_name']="frontend/pages/forget_password";
        $data['page_title']="Belovedones | Login";
        $this->load->view('frontend/index',$data);
    }
    
    public function reset_password($user_id){
        if ($this->input->post()) {
                $this->form_validation->set_rules('old_password','Old Password','trim|required');
                $this->form_validation->set_rules('password','New Password','trim|required');
                $this->form_validation->set_rules('con_password','Conform Password','trim|required|matches[password]');
                if($this->form_validation->run() == true){
                    $condition=['id'=>$user_id,
                                'password'=>$this->input->post('old_password')
                    ];
                    $user_val=['password'=>$this->input->post('password')];
                    $check=$this->my_model->update_table($condition,"register",$user_val);
                    if($check){
                     $this->session->set_flashdata('success','Your password has been updated successfully!');
                    // redirect("frontend/reset_password");
                    }else{
                         $this->session->set_flashdata('error','Something went wrong!');
                        //  redirect("frontend/signup/");
                    }
                }
         }
        $data['page_name']="frontend/pages/reset_password";
        $data['page_title']="Belovedones | Login";
        $this->load->view('frontend/index',$data);
    }
}
