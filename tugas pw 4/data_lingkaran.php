<?php
  require_once('oop.php');

  $Lingkaran1 = new Lingkaran(5);
  $Lingkaran2 = new Lingkaran(10);

  echo "luas lingkaran 1: " . $Lingkaran1->getluas() ."<br>";
  echo "luas lingkaran 2: " . $Lingkaran2->getluas() ."<br>";
  
  
?>