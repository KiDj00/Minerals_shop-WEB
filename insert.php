<?php

require_once 'Database.php';

$isAleksa = $_GET['un'] && $_GET['un'] == 'aleksa';

if (!$isAleksa) {
  header("Location: index.php");
}

$username = $_GET['un'];

if (isset($_POST['insert'])) {
  $title = $_POST['title'];
  $locality = $_POST['locality'];
  $price = $_POST['price'];
  $img = $_POST['img'];

  $errors = array();

  if (empty($title)) {
    $errors['title'] = '<br><label class="error">Pleas eneter the Title.</label><br>';
  }

  if (empty($locality)) {
    $errors['locality'] = '<br><label class="error">Pleas eneter the Locality.</label></br>';
  }

  if (empty($price)) {
    $errors['price'] = '<br><label class="error">Pleas eneter the Price.</label></br>';
  }

  if (empty($img)) {
    $errors['img'] = '<br><label class="error">Pleas eneter Image URL.</label></br>';
  }

  if (count($errors) == 0) {
    $data = array(
      "username" => $username,
      "title" => $title,
      "locality" => $locality,
      "price" => $price,
      "img" => $img,
    );

    if(Database::getInstance()->insertMineral($data)){
      header("Location: table.php");
    }
  } // COUNT GRESKE CLOSE
} // POST REQ CLOSE


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add a new post</title>
  <link rel="icon" href="https://www.clipartmax.com/png/middle/178-1789670_mineral-icon-minerals-icon.png">
  <style>
    .error {
      color: red;
    }
    body{
    background-image: url('slike/insert background.jpg');
    }
    .mineralForm{
      text-align: center;
      color: white;
    }
    #home{
  font-size: 30px;
  padding: 10px;  
  font-family: sans-serif;
  color: white;
  border-radius: 15px;
  background-color: rgb(121, 9, 155);
  text-decoration: none;
  border-style: none;
  cursor: pointer;
}
#lowerleft
{
  position:absolute;
   bottom:0;
   left:0;
}
  </style>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
  <h2 style ="text-align: center; color: white;">Welcome to the mineral inserting page! <br>
    Feel free to add all the products you want!</h2><br><br>
  <div class="form-group mineralForm">
    <form method="POST">
      <h3>Add a product</h3>
      <label for="username">Username:</label><br>
      <input  name="username" type="text" id="username" disabled value="<?php echo $username; ?>">
      <br>
      <label for="specimen">Mineral:</label><br>
      <input placeholder="Mineral name" name="title" type="text" id="specimen">
      <?php echo $errors['title'] ?? ""; ?>
      <br>
      <label for="locality">Locality:</label><br>
      <input  placeholder="Locality" name="locality" type="text" id="locality">
      <?php echo $errors['locality'] ?? ""; ?>
      <br>
      <label for="price">Price:</label><br>
      <input  placeholder="Price" name="price" type="number" id="price">
      <?php echo $errors['price'] ?? ""; ?>
      <br>
      <label for="img">Img:</label><br>
      <input  placeholder="Image" name="img" type="text" id="img">
      <?php echo $errors['img'] ?? ""; ?>
      <br><br>
      <input type="submit" name="insert" value="Submit">
    </form>
  </div>

  <br><br><br>
  <div id="lowerleft">
  <a href="index.php" id="home">Home</a>
</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>