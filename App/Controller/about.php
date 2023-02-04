<?php


class About extends controller
{
   public function index(){
     $data ['page_title'] = "About";
       return $this->view("catalog/about",$data);
    }

   
}




