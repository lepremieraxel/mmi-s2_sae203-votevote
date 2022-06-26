<?php
if(isset($_GET['e'])){
  $etat = htmlspecialchars($_GET['e']);
  switch($etat){
    case 'success':
?>
      <div class="form-alert form-success">
        <h6>Votre réponse a été enregistré avec succès.</h6>
      </div>
    <?php
      break;
    case 'email':
?>
    <div class="form-alert form-error">
      <h6>Votre email est invalide.</h6>
    </div>
  <?php
    break;
  case 'already':
?>
    <div class="form-alert form-error">
      <h6>Vous avez déjà voté.</h6>
    </div>
  <?php
    break;
  case 'empty':
?>
    <div class="form-alert form-error">
      <h6>Vous devez faire un choix et indiquer votre email.</h6>
    </div>
  <?php
    break;
  case 'isnotmmi':
?>
    <div class="form-alert form-error">
      <h6>Vous devez être en MMI pour pouvoir voter.</h6>
    </div>
  <?php
    break;
  }
}