<?php


class Video extends controller
{
   public function index(){
    $data ['page_title'] = "videos";
    $find = isset($_GET['find']) ? $_GET['find'] : "";


    $load = $this->loadModel('get_video');
    $data ['videos']= $load->get_video();
    $page = !empty($_GET['video_page']) ? (int)$_GET['video_page'] :1;
    $item_per_page = 4;
    $total_item= $load->query();
    $pagination = new Pagination($total_item,$page,$item_per_page);
    $data['next_page'] = $pagination->next();
    $data['previous_page'] = $pagination->previous();
    $data['current_page'] = $pagination->current_page;
    // $data['next_page'] = $pagination->has_next();

    $data['total_page'] = $pagination->total_page();
   

       return $this->view("catalog/videos",$data);
    }



   
}




