<?php
require_once '../config/config.php';

if(isset($_POST['intitule']) && isset($_POST['answ']) && !empty($_POST['intitule']) && !empty($_POST['answ'])){

  $intitule = htmlspecialchars($_POST['intitule']);
  $activeInput = htmlspecialchars($_POST['active']);
  $answ = $_POST['answ'];

  if ($activeInput == "on"){
    $activeValue = true;
  } else {
    $activeValue = false;
  }
  
  $check_q = $bdd->prepare('SELECT * FROM questions WHERE intitule = ?');
  $check_q->execute(array($intitule));
  $row_q = $check_q->rowCount();

  $check_active = $bdd->prepare(('SELECT * FROM questions WHERE active = true'));
  $check_active->execute();
  $id_question_active = $check_active->fetch();

  if($row_q == 0){

    if($activeValue == true){
      $update_q = $bdd->prepare('UPDATE questions SET active = false WHERE active = true AND id_question = '.$id_question_active['id_question'].'');
      $update_q->execute();
    }

    $insert_q = $bdd->prepare('INSERT INTO questions(intitule, active) VALUES(:intitule, :active)');
    $insert_q->execute(array('intitule' => $intitule, 'active' => $activeValue));

    $check_id = $bdd->prepare('SELECT * FROM questions WHERE intitule = ?');
    $check_id->execute(array($intitule));
    $questions = $check_id->fetch();
    $id_question = $questions['id_question'];

    $insert_a = $bdd->prepare('INSERT INTO answers_q(answer_q, id_question) VALUES(:answer_q, :id_question)');
    foreach($answ as $answLine){
      $insert_a->execute(array('answer_q' => $answLine, 'id_question' => $id_question));
    }
    header('Location: ../../admin/index.php?e=success'); die();
  } else header('Location: ../../admin/new/index.php?e=already'); die();
} else header('Location: ../../admin/new/index.php?e=empty'); die();