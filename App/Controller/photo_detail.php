<?php


class Photo_detail extends controller
{
   public function index($url_address=''){
     $data ['page_title'] = "photo detail";

     
       $load = $this->loadModel('get_image');
       $data['single_image'] = $load->get_single_image($url_address);
       $data['rondom_image'] = $load->get_image();

       return $this->view("catalog/photo_detail",$data);

    }

   
}
