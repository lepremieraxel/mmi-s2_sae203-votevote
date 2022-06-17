<?php
require_once '/home/xesz8174/sae203/src/config/config.php';

$allQuestions = $bdd->query('SELECT * FROM questions');
$check_active = $bdd->query('SELECT * FROM questions WHERE active = 1');
$activeQArr = $check_active->fetch();
$activeQ = $activeQArr['id_question'];