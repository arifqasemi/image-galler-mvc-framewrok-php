<?php



class Pagination
{

    public $current_page;
    public $total_item;
    public $item_per_page;

    public function __construct($total_item=10,$page=1,$item_per_page=3){
        $this->current_page = (int)$page;
        $this->total_item =  (int)$total_item;
        $this->item_per_page = (int) $item_per_page;
    }
   


    public function next(){
        return $this->current_page +1;
    }
    

    public function previous(){
        return $this->current_page -1;
    }
    
    public function has_previous(){
        return $this->previous() >= 1 ? true : false;
    }



    public function has_next(){
        return $this->next() <= $this->total_page() ? true : false;
    }

    public function total_page(){
        return ceil($this->total_item/$this->item_per_page);
    }


   
}