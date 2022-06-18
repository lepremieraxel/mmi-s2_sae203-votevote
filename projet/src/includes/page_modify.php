<?php
require_once '/xampp/htdocs/sae203/projet/src/config/config.php';

$check_question = $bdd->query('SELECT * FROM questions WHERE id_question = '.$_GET['id'].'');
$question = $check_question->fetch();

$title_q = $question['intitule'];

$check_answQ = $bdd->query('SELECT * FROM answers_q WHERE id_question = '.$_GET['id'].'');
$answQArr = $check_answQ->fetchAll();