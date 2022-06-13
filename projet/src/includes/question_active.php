<?php
require_once '/xampp/htdocs/sae203/projet/src/config/config.php';

$check_q = $bdd->prepare('SELECT * FROM questions WHERE active = ?');
$check_q->execute(array(1));
$questions = $check_q->fetch();
$row_q = $check_q->rowCount();

if($row_q >= 1){
  $question = $questions['intitule'];
} else {
  $question = "Aucune question n'est activée.";
}