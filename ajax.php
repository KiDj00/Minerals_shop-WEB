<?php


if (!isset($_POST)) {
  exit;
}


require_once 'Database.php';
$minerals = Database::getInstance()->getAllMinerals();

if (isset($_POST['sortType'])) {
  $sortType = $_POST['sortType'];
  $minerals = Database::getInstance()->getAllMineralsSorted($sortType);

  echo json_encode($minerals);
  
  exit;
}

