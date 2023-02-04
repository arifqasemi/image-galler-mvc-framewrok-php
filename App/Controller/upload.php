<?php
// class Database{


//    public function connect(){
//        $string = "mysql:host=localhost;dbasename=catalog";

//        try{

//            $db = new PDO($string,'root','');
//            echo "connected";
//        }catch(PDOException $e)
//        {
//            echo "not connected";

//         die($e->getMessage());
//      }

//    }
// }

class Upload extends Controller
{
   public function index(){
    
  
     
    }

   public function image(){
      $data ['page_title'] = "upload";


      if(isset($_FILES['file'])){

        $model = $this->loadModel("load_image");
        $model->upload($_FILES,$_POST);

       
      }
      return $this->view("catalog/upload_image",$data);


   }

   public function video(){
      $data ['page_title'] = "";
         return $this->view("catalog/upload_video",$data);
      }
}
