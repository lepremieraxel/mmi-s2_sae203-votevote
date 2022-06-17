<?php
try {
  $bdd = new PDO('mysql:host=localhost;dbname=xesz8174_sae203;charset=utf8', 'xesz8174_bdd', 'pys3-pYwS-xF9?');
} catch (Exception $e) {
  die('Error' . $e->getMessage());
}
