<?php


class Get_video{
    

   public $offset;

    public function get_video($find=""){
        $db = new Database();
        $page = !empty($_GET['video_page']) ? (int)$_GET['video_page'] :1;
        if($find ==''){
            $item_per_page=4;
            $offset = ($page -1) * $item_per_page;
           $sqli = "select * from videos ";
            $sqli  .= "LIMIT {$item_per_page}";
             $sqli .=" OFFSET {$offset}";
             return $result = $db->read($sqli);
           
        }else{
            $find = esc($find);
            $sqli = "select * from videos where title like '%$find%'";
            return $result = $db->read($sqli);
        }
      
    }

    public function query(){
        $db = new Database();
		return  $db->total_item("select * from videos");
      
        
	 }
     
	public function get_single_video($url_address){
        $db = new Database();
        $sqli = "update videos set view = view +1 where url_address= :url";
        $arr['url'] =$url_address;
        $result = $db->write($sqli,$arr);

        $sqli = "select * from videos where url_address= :url";
        $arr['url'] =$url_address;
        $result = $db->read($sqli,$arr);
        return $result[0];



    }
}