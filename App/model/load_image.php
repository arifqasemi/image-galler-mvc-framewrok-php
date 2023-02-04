<?php



class Load_image{


public function upload($FILES,$POST){


	    $_SESSION['error'] = "";
		// $allowed[] = 'image/jpeg';
		$allowedVideo[] = 'video/mp4';

       if($FILES['file']['name'] != "" && $FILES['file']['error'] == 0){



		////// Video /////
			if(in_array($FILES['file']['type'], $allowedVideo))
			{

				
			$folder = "videos/";
			if(!file_exists($folder))
			{
				mkdir($folder,0777,true);
			}
			$destination = $folder . $FILES['file']['name'];
			move_uploaded_file($FILES['file']['tmp_name'], $destination);


			
			$arr['title'] = esc($POST['title']);
			$arr['date'] = date("Y-m-d H:i:s");
			$arr['user_id'] = 1;
			$arr['video'] = $destination;
			$arr['view'] = 0;
			$arr['url_address'] = get_random_string_max(60);

			$DB = new Database();
			$query = "insert into videos (title,user_id,date,video,view,url_address) VALUES (:title,:user_id,:date,:video,:view,:url_address)";
			$DB->write($query,$arr);
			header("Location: ". ROOT . "video");
			die;


			}else{

				$folder = "images/";
			if(!file_exists($folder))
			{
				mkdir($folder,0777,true);
			}

			$destination = $folder . $FILES['file']['name'];
			move_uploaded_file($FILES['file']['tmp_name'], $destination);

			
			$arr['title'] = esc($POST['title']);
			$arr['date'] = date("Y-m-d H:i:s");
			$arr['user_id'] = 1;
			$arr['image'] = $destination;
			$arr['views'] = 0;
			$arr['url_address'] = get_random_string_max(60);

			$DB = new Database();
			$query = "insert into images (title,user_id,date,image,views,url_address) VALUES (:title,:user_id,:date,:image,:views,:url_address)";
			$DB->write($query,$arr);
			header("Location: ". ROOT . "photos");
			die;

			}
     

		

			

			
		}


}




}