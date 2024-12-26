<?php

class user
{
    private $conn;
    public static function signup($user, $pass, $email, $phone)
    {
        $pass = md5($pass);
        $conn = database::getconnection();

        $sql = "INSERT INTO `auth` (`username`, `password`, `email`, `phone`, `blocked`, `active`)
                VALUES ('$user', '$pass ', '$email', '$phone' , '0', '1');";
        $error = false;

        if ($conn->query($sql) === TRUE) {
            $error = false;
        } else {
            // echo "error" . $sql . <br> . $conn->error;
            $result = $conn->error;
        }

        // $conn->close();
        return $result;
    }


    public static function login($user , $pass)
    {


        $pass = md5(strrev (md5($pass)));
        $query = "SELECT * FROM `auth` WHERE `username` '$user'";
        $conn = database::getconnection();
        $result = $conn->query($query);
        if ($result->num_rows = 1){
         $row = $result->fetch_assoc();
         if($row['password'] == $pass) {
            return $row; 
         }
         else{
            return false;
         }
      
        } else {
        return false;
}
        
        

    }


    public function __construct($username){

        $this->conn = database::getconnection();
        $this->conn->query();

   
    }


}

?>
