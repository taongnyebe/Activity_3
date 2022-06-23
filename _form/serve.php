<?php
class server {
  private $server = "localhost";
  private $username = "root";
  private $password = "";
  private $dbname = "senator";
  
  // Create connection
  public $conn;
  // Check connection
  public function __construct()
  {
    $this->conn = new mysqli($this->server, $this->username, $this->password, $this->dbname);

    if ($this->conn->connect_error) {
      die("Connection failed: " . $this->conn->connect_error);
      echo "Connection failed: " . $this->conn->connect_error;
    }
  }
}

class call extends server{
  public function callData()
  {
    $sql_c = "SELECT * FROM senator";
    $result = mysqli_query($this->conn ,$sql_c);

    return $result;
  }
}

  