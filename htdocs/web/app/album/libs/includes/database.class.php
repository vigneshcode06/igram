<?php 

 class database{

     public static $conn = null; 

     public static function getconnection()
     {

         if(database::$conn == null){

            $servername = "#############";
            $username = "###############";
            $password = "###############";
            $dbname = "##################";

        // Create connection
        $connection = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($connection->connect_error) {
         die("Connection failed: " . $connection->connect_error); // todo replace this with exeption handle ;
} else{
    printf(" new connection ");
     database::$conn = $connection;
     return database::$conn;
}

         }else{
            printf(" existing connection ");
            return database::$conn;
         }
        
     }
 }


?>

