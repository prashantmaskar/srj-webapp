<?php

global $connection;
    $sql = "localhost"; 
    $username = "root";
    $password = "";
    $connection = mysqli_connect($sql, $username, $password) or 
    die("Unable to Connect");
    $database = mysqli_select_db($connection,"srjcreations"); 
// class Database{
  
//     // specify your own database credentials
//     private $host = "localhost";
//     private $db_name = "srjcreations";
//     private $username = "root";
//     private $password = "";
//     public $conn;
  
//     // get the database connection
//     public function getConnection(){
  
//         $this->conn = null;
  
//         try{
//             $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
//         }catch(PDOException $exception){
//             echo "Connection error: " . $exception->getMessage();
//         }
  
//         return $this->conn;
//     }
// }
?>