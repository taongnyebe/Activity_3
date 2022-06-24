<?php
  if (session_status() !== 1)
  {
    session_destroy();
    unset($_POST);
  }

  session_start();

  include_once './_form/serve.php';
  $update = new call;
  $info = $update->getData($_GET['id']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bio Data Form</title>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></script>
  <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>

  <link rel="stylesheet" href="./assets/css/index.css">
</head>
<body>
  <div class="gs-neumorphic-main-card-outer-container">
    <div class="gs-neumorphic-main-card-container">
      <div class="gs-neumorphic-main-card">
        <div class="gs-neumorphic-signup gs-form-open">
          <div class="gs-neumorphic-signup-login-header gs-open" data-button="gs-neumorphic-signup">Senator</div>
          <div class="gs-neumorphic-form-container popup">
            <form action="./_form/save_data.php" method="post">
              <br>
              <label for="name">Name</label>
              <input type="text" name="name" class="gs-neumorphic-input" placeholder="Name"
                value="<?php echo $info['name'] ?>" required>
              <br>
              <div class="gs-neumorphic-input a-left">
                <h3>Sex</h3>
                <div class="d-inline">
                  <input type="radio" name='sex' value="1" <?php if($info['sex']) echo 'checked'?>>
                  <label for="sex" >Male</label>
                </div>
                <div class="d-inline">
                  <input type="radio" name='sex' value="0" <?php if(!$info['sex']) echo 'checked'?>>
                  <label for="sex" >Female</label>
                </div>
              </div>

              <input type="number" name="age" class="gs-neumorphic-input" placeholder="Age"
                value='<?php echo $info['age'] ?>'>
              <input type="text" name="address" class="gs-neumorphic-input" placeholder="Address"
                value='<?php echo $info['address'] ?>'>
              
              <br>
              <input type="text" name="nationalParty" class="gs-neumorphic-input" placeholder="National Party"
                value='<?php echo $info['nationalParty'] ?>'>
              <input type="text" name="platform" class="gs-neumorphic-input" placeholder="Platform"
                value='<?php echo $info['platform'] ?>'>
              <input type="hidden" name="id" value="<?php echo $info['id'] ?>" />
              <button class="gs-neumorphic-button-add" name="update" value="Update">Update</button>
              <button class="gs-neumorphic-button-success" name="update" value="Delete">Delete</button>
            </form>
          </div>
        </div>

      </div>
    </div>
  </div>
</body>
<script src="./assets/js/index.js"></script>

</html>