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
    $sql_c = "SELECT id, name, nationalParty FROM senator";
    $result = mysqli_query($this->conn ,$sql_c);

    return $result;
  }

  public function getData($id)
  {
    $sql_c = "SELECT * FROM senator WHERE id = '$id'";
      if ($connection = mysqli_query($this->conn, $sql_c)) {
        if (mysqli_num_rows($connection)>0) {
          while ($item = mysqli_fetch_assoc($connection)) {
            return $item;
          }

        } else
          return 1;
      } else
        return 2;
  }

  public function check()
  {
    $sql_c = "SELECT COUNT(id) as count FROM senator";
    if ($connection = mysqli_query($this->conn, $sql_c)) {
      if (mysqli_num_rows($connection)>0) {
        while ($item = mysqli_fetch_assoc($connection)) {
          return $item['count'];
        }
      } else
        return 1;
    } else
      return 2;
  }
}

  