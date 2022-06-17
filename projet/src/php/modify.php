<?php
require_once '/home/xesz8174/sae203/src/config/config.php';

if(isset($_POST['intitule']) && isset($_POST['answ']) && !empty($_POST['intitule']) && !empty($_POST['answ'])){
  $intitule = htmlspecialchars($_POST['intitule']);
  $answ = $_POST['answ'];
  $answId = $_POST['answId'];
  $activeInput = $_POST['active'];
  $idQuestion = $_POST['idQuestion'];

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

  $delete_answ = $bdd->prepare('DELETE FROM answers_q WHERE id_question = ?');
  foreach($answId as $answIdRow){
    $delete_answ->execute(array($idQuestion));
  }
  
  $add_answ = $bdd->prepare('INSERT INTO answers_q (answer_q, id_question) VALUES (:answer_q, '.$idQuestion.')');
  foreach($answ as $answRow){
    $add_answ->execute(array('answer_q' => $answRow));
  }

  if($row_q == 0){
    $update_q = $bdd->prepare('UPDATE questions SET intitule = ? WHERE id_question = ?');
    $update_q->execute(array($intitule, $idQuestion));
  }
  if($activeValue == true){
    $desactivate = $bdd->prepare('UPDATE questions SET active = false WHERE active = true AND id_question = '.$id_question_active['id_question'].'');
    $desactivate->execute();

    $activate = $bdd->prepare('UPDATE questions SET active = true WHERE id_question = ?');
    $activate->execute(array($idQuestion));
  }
  header('Location: ../../admin/questions/index.php?e=success'); die();
} else header('Location: ../../admin/modify/index.php?id='.$idQuestion.'&e=empty'); die();