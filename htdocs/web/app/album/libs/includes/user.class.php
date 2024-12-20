<?php

class user
{
    private $conn;
    public static function signup($user, $pass, $email, $phone)
    {
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
    public function __construct($username){

        $this->conn = database::getconnection();
        $this->conn->query();

   
    }
}

?>
