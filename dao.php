<?php
include 'dbconnect.php';
class dao extends dbconnect {
    private $conn;
    public function __construct() {
       $dbcon = new parent();
       // this is not needed in your case
       // you can use $this->conn = $this->connect(); without calling parent()
       $this->conn = $dbcon->connect();
    }

    public function select( $table , $where='' , $other='' ){
       if($where != '' ){  // condition was wrong
         $where = 'where ' . $where; // Added space
       }
       $sql = "SELECT * FROM  ".$table." " .$where. " " .$other;
      // $sele = mysqli_query($this->conn, $sql) or die(mysqli_error($this->conn));
       $result = $this->conn->query($sql);
       return $result;
    }

    public function insert( $table , $vars='' , $values='',$other='' ){
       if($values != '' ){  // condition was wrong
         $values = 'VALUES (' . $values .')'; // Added space
       }
       $sql = "INSERT INTO  ".$table." (".$vars.") " .$values. " " .$other;
      // $sele = mysqli_query($this->conn, $sql) or die(mysqli_error($this->conn));
       $result = $this->conn->query($sql) or die('error on insert, '.$sql);
       return $result;
    }
   }
?>
