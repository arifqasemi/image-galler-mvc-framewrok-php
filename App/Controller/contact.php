<?php


class Contact extends controller
{
   public function index(){
    $data ['page_title'] = "Contact";

       return $this->view("catalog/contact",$data);
    }

   
}




