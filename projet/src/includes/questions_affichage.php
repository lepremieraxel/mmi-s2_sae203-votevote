<?php
require_once '/xampp/htdocs/sae203/projet/src/config/config.php';

$allQuestions = $bdd->query('SELECT * FROM questions');
$check_active = $bdd->query('SELECT * FROM questions WHERE active = 1');
$activeQArr = $check_active->fetch();
$activeQ = $activeQArr['id_question'];