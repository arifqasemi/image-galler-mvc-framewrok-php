<?php


class Login extends controller
{
   public function index(){
    $data ['page_title'] = "Sign in";


    if(isset($_POST['submit'])){
       $username = esc($_POST['username']);
       $password = esc($_POST['password']);
        $load = $this->loadModel('session');
        $load->login($username,$password);
      }
  
      
  

       return $this->view("catalog/login",$data);
    }

   
}