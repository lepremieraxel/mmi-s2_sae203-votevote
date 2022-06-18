<?php

require_once '/xampp/htdocs/sae203/projet/src/config/config.php';

if(isset($_POST['actif']) && !empty($_POST['actif'])){
  if(isset($_POST['delBtn'])){
    $delBtn = $_POST['delBtn'];
    $delete = $bdd->prepare('DELETE FROM questions WHERE id_question = ?');
    $delete->execute(array($delBtn));
    header('Location: ../../admin/questions/index.php?e=success'); die();
  } else {
    $actif = $_POST['actif'];
    $update_unactivate = $bdd->prepare('UPDATE questions SET active = false WHERE active = true');
    $update_unactivate->execute();
    $update_activate = $bdd->prepare('UPDATE questions SET active = true WHERE id_question = ?');
    $update_activate->execute(array($actif));
    header('Location: ../../admin/questions/index.php?e=success'); die();
  }
}header('Location: ../../admin/questions/index.php?e=empty'); die();