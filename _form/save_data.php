<?php
  include_once "./serve.php";

  class add extends server
  {
    public function addData()
    {
      if(isset($_POST['done']))
      {
        $name = $_POST['firstName']." ".$_POST['middleName']." ".$_POST['lastName']." ".$_POST["suffix"];
        $sex = $_POST['sex'];
        $age = $_POST['age'];
        $address = $_POST['address'];
        $nationalParty = $_POST['nationalParty'];
        $platform = $_POST['platform'];
    
        $sql_c = "INSERT INTO 
          senator(
            name,sex,`nationalParty`,address,age,platform
          ) 
          VALUES(
            '$name',$sex,'$nationalParty','$address',$age,'$platform'
          )";

        if (mysqli_query($this->conn, $sql_c) === TRUE) {
          echo "New record created successfully";
        } else {
          echo "Error: " . $sql_c . "<br>" . $this->conn->error;
        }
        $this->conn->close();
      }

    }

    public function updateData()
    {
      if(isset($_POST['update']))
      {
        if($_POST['update'] == 'Update')
        {
          $name = $_POST['name'];
          $sex = $_POST['sex'];
          $age = $_POST['age'];
          $address = $_POST['address'];
          $nationalParty = $_POST['nationalParty'];
          $platform = $_POST['platform'];
          $id = $_POST['id'];

          $sql_c = " UPDATE senator
            SET name = '$name', sex = $sex, age = $age, address = '$address', 
            nationalParty = '$nationalParty', platform = '$platform' WHERE id = $id";
          if (mysqli_query($this->conn, $sql_c) === TRUE) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql_c . "<br>" . $this->conn->error;
          }
        } else {
          $id = $_POST['id'];
          echo $sql_c = "DELETE FROM senator WHERE id = $id";
          if (mysqli_query($this->conn, $sql_c) === TRUE) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql_c . "<br>" . $this->conn->error;
          }
        }
        $this->conn->close();
      } 
    }
  }

  $add = new add;

  $add->addData();
  $add->updateData();
  if (isset($_POST['done']))
  {
    if ($_POST['done'] === "Done") {
      header("Location: "."../display.php");
    }
    else {
      header("Location: "."../index.php");
    }
  } else {
    header("Location: "."../display.php");
  }

  
?>