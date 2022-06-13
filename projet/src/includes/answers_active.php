<?php
$answers = $bdd->query('SELECT * FROM answers_q WHERE id_question = '.$questions["id_question"].'');

foreach($answers as $answer){
  echo '<div class="radio-cell">
  <input type="hidden" name="id_answer_q" value="'.$answer['id_answer_q'].'"/>
  <input type="hidden" name="id_question" value="'.$questions["id_question"].'"/>
  <input type="radio" name="answ" id="answ'.$answer['id_answer_q'].'" value="'.$answer['answer_q'].'" />
  <label for="answ'.$answer['id_answer_q'].'" class="radio-label">'.$answer['answer_q'].'</label>
  <div class="radio-bg"></div>
  </div>';
}
