<?php

class Users{

  public $user_id;
  public $user_name;
  public $user_email;
  public $user_pass;
  public $user_fname;
  public $user_lname;
  public $user_role;

  public static function display_users(){
    $the_result_array[] = self::find_all_query("SELECT * FROM users ");
    return !empty($the_result_array) ? array_shift($the_result_array) : false;

  }

  public static function search_usersQuery($username){
    global $database;
    $the_result_array = self::find_all_query("SELECT * FROM users WHERE user_name LIKE '%$username%' ");
    return !empty($the_result_array) ? array_shift($the_result_array) : false;


  }

  private static function find_all_query($sql){
    global $database;
    $result =  $database->query($sql);
    $the_object_array = array();
    while($row = mysqli_fetch_assoc($result)){
        $the_object_array[] = self::instantiation($row);
    }

    return $the_object_array;
  }

  public static function instantiation($row){
    //to call a non-static method from a static method!!! WE need to initialise the class
    //to get an instance of the class containing the non-static method.
    //By definition, a non-static methods is one that
    $users = new self;

    //"<br> \$row[$the_attribute] => $value.\n <br>";
    foreach ($row as $the_attribute => $value) {
      if($users->has_the_attribute($the_attribute)){
         $users->$the_attribute = $value;
      }
    }

    return $users;

  }

  private function has_the_attribute($the_attribute){
      $object_properties = get_object_vars($this);
      return array_key_exists($the_attribute, $object_properties);
  }
}


?>
