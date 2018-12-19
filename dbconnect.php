<?php
class dbconnect{
    public function connect(){
         $host = 'localhost';
         $port = 3305;
         $user = 'root';
         $pass = 'root';
         $db = 'demo';
         $connection = mysqli_connect($host,$user,$pass,$db,$port);
         return $connection;
     }
}
