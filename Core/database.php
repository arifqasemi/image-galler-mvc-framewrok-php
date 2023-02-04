<?php



class Database{


    public function connect(){

        try{
            $string = "mysql:host=localhost;dbname=catalog";

         return $DB = new PDO($string,'root','');
        
        }catch(PDOException $e)
        {
            echo "not connected";

			die($e->getMessage());
		}

    }

  


    public function write($query,$data = [])
	{

		$DB  = $this->connect();
		$stm = $DB->prepare($query);

		if(count($data) > 0){

			$check = $stm->execute($data);
		}else{
			$stm = $DB->query($query);
			$check = 0;
			if($stm){
				$check = 1;
			}
		}

		if($check)
		{
			return true;
		}

		return false;

	}

	public function read($query,$data = [])
	{

		$DB  = $this->connect();
		$stm = $DB->prepare($query);

		if(count($data) > 0){

			$check = $stm->execute($data);
		}else{
			$stm = $DB->query($query);
			$check = 0;
			if($stm){
				$check = 1;
			}
		}

		if($check)
		{
			return $stm->fetchAll(PDO::FETCH_OBJ);
		}

		return false;

	}

	 public function total_item($sql){
    	$DB  = $this->connect();
		$stm = $DB->prepare($sql);
        $result =$stm->execute();
		return $stm->rowCount();
        
	 }

}