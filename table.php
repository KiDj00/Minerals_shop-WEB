<?php

require_once 'Database.php';
$minerals = Database::getInstance()->getAllMinerals();
$comments = Database::getInstance()->getAllComments();

if (isset($_POST['delete'])) {
  $id = $_POST['mineral_id'];

  if (Database::getInstance()->deleteMineral($id)) {
    header("Location: table.php");
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Table</title>
  
  <style>
 #upperright {
position: absolute;
top: 5px;
right: 0;
}
#kuca{
  font-size: 25px;
  padding:  8px;  
  font-family: sans-serif;
  margin: 10px ;
  color: white;
  border-radius: 15px;
  background-color: rgb(121, 9, 155);
  text-decoration: none;
  border-style: none;
  cursor: pointer;
}

  </style>
  <link rel="icon" href="https://www.clipartmax.com/png/middle/178-1789670_mineral-icon-minerals-icon.png">
  <link rel="stylesheet" href="table.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
<h2>Mineral Specimens</h2>
  <table style="width:100%" class="table table-hover">
    <tr>
      <th>ID</th>
      <th>Mineral</th>
      <th>Locality</th>
      <th>Price</th>
      <th>Image</th>
    </tr>
    <?php foreach ($minerals as $index => $mineral) : ?>
      <tr>
        <td><?php echo ++$index; ?></td>
        <td><?php echo $mineral['title']; ?></td>
        <td><?php echo $mineral['locality']; ?></td>
        <td><?php echo $mineral['price']; ?></td>
        <td>
          <img src="<?php echo $mineral['img']; ?>" alt="greska" id="baryte">
          <button class="btn btn-outline-primary"><a id="link" href="edit.php?id=<?php echo $mineral['id']; ?>">edit</a></button>
          <form method="POST" style="display: inline;">
            <input type="hidden" name="mineral_id" value="<?php echo $mineral['id']; ?>">
            <button type="submit" name="delete" class="btn btn-outline-danger">remove</button>
          </form>
        </td>
      </tr>
    <?php endforeach; ?>

  </table>

  <div id="brDiv"></div>
  <h2>Comments</h2>
  <table class="table table-hover" style="width:100%">
    <tr>
      <th>User</th>
      <th>Comment</th>
      <th>Mineral</th>
    </tr>
    <?php foreach ($comments as $comment) : ?>
      <tr>
        <td><?php echo $comment['username']; ?></td>
        <td><?php echo $comment['content']; ?></td>
        <td><?php echo $comment['title']; ?></td>
      </tr>
    <?php endforeach; ?>
  </table>

  <br><br><br>
  <div id="upperright">
  <a href="index.php" id="kuca">Home</a>
</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>