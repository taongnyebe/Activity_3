<?php
  include_once './_form/serve.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="./assets/css/display.css">
  <title>Document</title>
</head>
<body>
  <div><h1>Senatorial Winners</h1></div>
  <div class="body">
    <div class="container">
      <?php 
        $update = new call;
        $data = $update->callData();
        $index = 0;
        foreach ($data as $info){ 
          $index++;
      ?>
      <a href="./card.php?id=<?php echo $info['id'] ?>">
        <div class="card">
          <div class="face face1">
            <div class="content">
              <span class="stars"></span>
              <h2 class="java"><?php echo $info['name'] ?></h2>
              <p class="java">
                <br>
                National Party: <?php echo $info['nationalParty'] ?>
              </p>
            </div>
          </div>
          <div class="face face2">
            <h2><?php echo $index ?></h2>
          </div>
        </div>
      </a>
      <?php 
        } 
          if ($index < 12) {
      ?>
      <a href="./index.php">
        <div class="card">
          <br><br>
          <h1>Add</h1>
        </div>
      </a>
      <?php
          }
      ?>
  
    </div>
  </div>
</body>
</html>