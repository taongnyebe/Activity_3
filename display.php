<?php
  include_once './_form/serve.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
      <div class="card">
        <div class="face face1">
          <div class="content">
            <span class="stars"></span>
            <h2 class="java"><?php echo $info['name'] ?></h2>
            <p class="java">
              Address: <?php echo $info['address'] ?>
              <br>
              Sex: <?php echo $info['sex'] ?>
              <br>
              Age: <?php echo $info['age'] ?>
              <br>
              National Party: <?php echo $info['nationalParty'] ?>
              <br>
              Platform: <?php echo $info['platform'] ?>
            </p>
          </div>
        </div>
        <div class="face face2">
          <h2><?php echo $index ?></h2>
        </div>
      </div>
      <?php } ?>
  
    </div>
  </div>
</body>
</html>