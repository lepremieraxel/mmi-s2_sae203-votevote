<?php
require_once '../config/config.php';
if(isset($_POST['answ']) && isset($_POST['email']) && !empty($_POST['answ']) && !empty($_POST['email'])){
  $answ = htmlspecialchars($_POST['answ']);
  $email = htmlspecialchars($_POST['email'])."@iut-tarbes.fr";

  $check = $bdd->prepare('SELECT * FROM answers_u WHERE email = ?');
  $check->execute(array($email));
  $data = $check->fetch();
  $row = $check->rowCount();

  if($row == 0){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
      $insert = $bdd->prepare('INSERT INTO answers_u(email, answer_u, id_question) VALUES(:email, :answer_u, :id_question)');
      $insert->execute(array(
        'email' => $email,
        'answer_u' => $answ,
        'id_question' => 1
      ));
      header('Location: ../../index.php?e=success'); die();
    } else header('Location: ../../index.php?e=email'); die();
  } else header('Location: ../../index.php?e=already'); die();
} else header('Location: ../../index.php?e=empty'); die();