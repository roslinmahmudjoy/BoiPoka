<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Update Profile - BoiPoka | Book Sharing Platform</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png" >
  <!-- Bootstrap CSS-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="icon" href="favicon.ico" type="image/png" sizes="16x16">
</head>

<body>
  <!-- Loads the Header -->
  <?php include 'include/header.php'?>
  <!-- Loads the register-validate -->
  <?php include 'include/profile-validate.php'?>

  <div class="container border border-light" style="width: 500px;">
    <form method="POST">
      <h3>Update Profile</h3>
      <div class="form-group">
        <label for="name">Full Name</label>
        <input type="text" class="form-control text-capitalize <?php print $nameValidity;?>" value="<?php print $name?>" name="name" id="name"  aria-describedby="nameText" required>
        <small id="nameText" class="invalid-feedback"><?php print $nameErr;?></small>
      </div>
      <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" class="form-control text-lowercase <?php print $emailValidity;?>" value="<?php print $email?>" name="email" id="email" aria-describedby="emailText" required>
        <small id="nameText" class="invalid-feedback"><?php print $emailErr;?></small>
      </div>
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control text-lowercase <?php print $usernameValidity;?>" value="<?php print $username?>" name="username" id="username"  aria-describedby="usernameText" required>
        <small id="nameText" class="invalid-feedback"><?php print $usernameErr;?></small>
      </div>
      <div class="form-group">
        <label for="number">Mobile Number</label>
        <input type="tel" class="form-control <?php print $numberValidity;?>" value="<?php print $number?>" name="number" id="number"  aria-describedby="numberText">
        <small id="nameText" class="invalid-feedback"><?php print $numberErr;?></small>
      </div>
      <div class="form-group">
        <label for="address">Address</label>
        <input type="text" class="form-control text-capitalize <?php print $addressValidity;?>" value="<?php print $address?>" name="address" id="address"  aria-describedby="addressText" required>
        <small id="nameText" class="invalid-feedback"><?php print $addressErr;?></small>
      </div>
     
      <div class="form-group">
        <button type="submit" name="submit" class="btn btn-primary">Update</button>
      </div>
    </form>
  </div>

  <!-- Loads the Footer-->
  <?php include 'include/footer.php'?>
</body>

</html>