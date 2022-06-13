<?php
require_once '/xampp/htdocs/sae203/projet/src/config/config.php';

$votants = $bdd->query('SELECT COUNT(*) FROM answers_u WHERE id_question = '.$questions['id_question'].'');
$nbVotants = $votants->fetchColumn();

