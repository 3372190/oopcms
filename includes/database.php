<?php
// require_once("init.php");

class Database{

  private $connection;

      function __construct(){

        //load the connection automatically!!
        $this->open_db_connection();

      }

      public function open_db_connection(){
        //OOP now supports mysqli object!..
        $this->connection = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

          if($this->connection -> connect_error){
            die('<h1>Database Connection Failed!!!!</h1>.'. $this->connection -> connect_error);
          }

      }

      //Not going to use it outside the class!!!!!!!!!!
      private function checkQuery($query){
        if(!$query){
          die("<h1>Query Failed!!!!</h1> ". $this->connection -> error);
        }
      }

      public function query($sql){

        $sql = $this->real_escape($sql);
        $result = mysqli_query($this->connection , $sql);
        $this->checkQuery($result);
        return $result;

      }

      public function real_escape($string){
        $string = trim($string);
        return mysqli_real_escape_string($this->connection, $string);

      }

}

      $database = new Database();

?>
