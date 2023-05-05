<?php

require_once("config.php");

class Database {

  public $connection; // To make the connection global everywhere in the application
  public $db;

  function __construct() // We open the connection automatically
  {
    $this->db = $this->open_db_connection();
  }

  public function open_db_connection() {

    // $this->connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    $this->connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME); // We use $this to refer to the class

    // if(mysqli_connect_errno()) {
    //   die("Database connection failed badly" . mysqli_error($this->connection));
    // }
    if($this->connection->connect_errno) {
      die("Database connection failed badly" . $this->connection->connect_error);
    }
    return $this->connection;

  }

  public function query($sql) {

    // $result = mysqli_query($this->connection, $sql);
    $result = $this->db->query($sql);

    $this->confirm_query($result);
    
    return $result;
  }

  private function confirm_query($result) {
    if(!$result) {
      die("Query Failed" . $this->db->error);
    }
  }

  public function escape_string($string) {
    // $escaped_string = mysqli_real_escape_string($this->connection, $string);
    // $escaped_string = $this->connection->real_escape_string($string);
    return $this->db->real_escape_string($string ?? "");
  }

  public function the_insert_id() {
    // return mysqli_insert_id($this->connection);
    return $this->db->insert_id;
  }

} // End of Class Database

$database = new Database(); // We instantiate it to have this class available throughout the application
                            // Now we can use $database to refer to the class anywhere

// $database->open_db_connection(); // We call the method to open the connection
                                    // We don't need it anymore because we made it open automatically with function __construct 

?>