<?php


class Video_detail extends controller
{
   public function index($url_address=''){
     $data ['page_title'] = "video detail";

     
       $load = $this->loadModel('get_video');
      $data['single_video_details'] = $load->get_single_video($url_address);
       $data['rondom_video'] = $load->get_video();

       return $this->view("catalog/video_detail",$data);

    }

   
}
