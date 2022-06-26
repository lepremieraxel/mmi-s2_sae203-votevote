<?php
require_once '../config/config.php';

if(isset($_POST['answ']) && isset($_POST['email']) && !empty($_POST['answ']) && !empty($_POST['email'])){
  $id_question = htmlspecialchars($_POST['id_question']);
  $answ = htmlspecialchars($_POST['answ']);
  $email = htmlspecialchars($_POST['email'])."@iut-tarbes.fr";

  $check = $bdd->prepare('SELECT * FROM answers_u WHERE email = ? AND id_question = ?');
  $check->execute(array($email, $id_question));
  $data = $check->fetch();
  $row = $check->rowCount();

  $check_email = $bdd->prepare('SELECT * FROM email_mmi WHERE email = ?');
  $check_email->execute(array($email));
  $row_email = $check_email->rowCount();

  if($row == 0){
    if($row_email >= 1){
      if(filter_var($email, FILTER_VALIDATE_EMAIL)){

        $insert = $bdd->prepare('INSERT INTO answers_u(email, id_answer_q, id_question) VALUES(:email, :id_answer_q, :id_question)');

        $insert->execute(array(
          'email' => $email,
          'id_answer_q' => $answ,
          'id_question' => $id_question
        ));

        header('Location: ../../index.php?e=success'); die();
      } else header('Location: ../../index.php?e=email'); die();
    } else header('Location: ../../index.php?e=isnotmmi'); die();
  } else header('Location: ../../index.php?e=already'); die();
} else header('Location: ../../index.php?e=empty'); die();