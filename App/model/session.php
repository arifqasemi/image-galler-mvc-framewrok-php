<?php




class Session{



    public function signup($username,$password){
        $str = "insert into users(username,password)Values(:username,:password)";
        $arr['username'] = $username;
        $arr['password'] = $password;
        $db = new Database();
        $db->write($str,$arr);
    }



    public function login($username, $password){

        $str = "select * from users where username = :username && password = :password";
        $arr['username'] = $username;
        $arr['password'] = $password;
        $db = new Database();
         $data = $db->read($str,$arr);
          $data = $data[0];
         if($data){
          $_SESSION['username'] = $data->username;
          header('location:'.ROOT ."index");
         }

        
         



    }
}