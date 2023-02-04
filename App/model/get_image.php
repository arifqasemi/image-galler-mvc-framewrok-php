<?php


class Get_image{
    

   public $offset;

    public function get_image($find=""){
        $db = new Database();
        $page = !empty($_GET['page']) ? (int)$_GET['page'] :1;
        if($find ==''){
            $item_per_page=4;
            $offset = ($page -1) * $item_per_page;
           $sqli = "select * from images ";
            $sqli  .= "LIMIT {$item_per_page}";
             $sqli .=" OFFSET {$offset}";
             return $result = $db->read($sqli);
           
        }else{
            $find = esc($find);
            $sqli = "select * from images where title like '%$find%'";
            return $result = $db->read($sqli);
        }
      
    }

    public function query(){
        $db = new Database();
		return  $db->total_item("select * from images");
      
        
	 }
     
	public function get_single_image($url_address){
        $db = new Database();
        $sqli = "update images set views = views +1 where url_address= :url";
        $arr['url'] =$url_address;
        $result = $db->write($sqli,$arr);

        $sqli = "select * from images where url_address= :url";
        $arr['url'] =$url_address;
        $result = $db->read($sqli,$arr);
        return $result[0];



    }
}