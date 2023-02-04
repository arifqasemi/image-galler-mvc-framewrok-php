<?php


class Sign_up extends controller
{
   public function index(){
    $data ['page_title'] = "Sign in";


    if(isset($_POST['submit'])){
      $username = esc($_POST['username']);
      $password = esc($_POST['password']);
      $load = $this->loadModel('session');
      $load->signup($username,$password);
    }

       return $this->view("catalog/sign_up",$data);
    }

   
}