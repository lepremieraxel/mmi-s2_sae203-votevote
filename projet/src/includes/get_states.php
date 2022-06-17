<?php
if(isset($_GET['e'])){
  $etat = htmlspecialchars($_GET['e']);
  switch($etat){
    case 'success':
?>
      <div class="form-alert form-success">
        <h6>Action réalisée avec succès.</h6>
      </div>
    <?php
      break;
  case 'empty':
?>
    <div class="form-alert form-error">
      <h6>Vous devez remplir tous les champs.</h6>
    </div>
  <?php
    break;
  }
}