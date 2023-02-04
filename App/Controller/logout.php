<?php


class Logout extends controller
{
   public function index(){
    $data ['page_title'] = "logout";


    if(isset($_SESSION['username'])){
        unset($_SESSION['username']);
        header('location:'.ROOT. "login");
       
      }
      }

   
}