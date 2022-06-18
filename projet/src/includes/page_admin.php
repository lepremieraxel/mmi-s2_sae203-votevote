<?php
require_once '/xampp/htdocs/sae203/projet/src/config/config.php';

$votants = $bdd->query('SELECT COUNT(*) FROM answers_u WHERE id_question = '.$questions['id_question'].'');
$nbVotants = $votants->fetchColumn();

$answQ = $bdd->query('SELECT * FROM answers_q WHERE id_question = '.$questions['id_question'].'');

$check_answU = $bdd->prepare('SELECT COUNT(email) FROM answers_u WHERE id_answer_q = ? AND id_question = ?');

$checkNbQuestions = $bdd->query('SELECT COUNT(*) FROM questions');
$nbQuestions = $checkNbQuestions->fetchColumn();

$checkNbVotes = $bdd->query('SELECT COUNT(*) FROM answers_u');
$nbVotes = $checkNbVotes->fetchColumn();