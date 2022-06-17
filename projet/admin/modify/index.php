<!DOCTYPE html>
<html lang="fr">
  <head>
    <!-- META -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- LINK -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
      integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
      crossorigin="anonymous"
    ></script>
    <script src="https://kit.fontawesome.com/e0b8ba43a6.js" crossorigin="anonymous"></script>
    <!-- TITLE -->
    <title>MODIFY</title>
  </head>
  <body>
    <div class="container mt-5">
      <div class="d-flex flex-column">
        <div class="d-flex flex-row justify-content-between">
          <h1 class="text-uppercase">Modifier la question</h1>
          <a href="../questions/" class="btn btn-lg btn-secondary">Retour</a>
        </div>
        <?php include "../../src/includes/get_states.php";?>
        <?php include "../../src/includes/page_modify.php";?>
        <div class="d-flex flex-column mt-5">
          <form action="../../src/php/modify.php" method="post">
            <input type="hidden" name="idQuestion" value="<?php echo $_GET['id']?>">
            <div class="d-flex flex-column form-floating">
              <textarea placeholder="Intitulé" name="intitule" id="intitule" class="form-control" style="height: 70px;" maxlength="255" required><?php echo $title_q;?></textarea>
              <label for="intitule">Intitulé</label>
            </div>
            <div class="d-flex flex-column mt-5">
              <h4>Réponses (MAX : 10)</h4>
              <p class="text-muted">(Pour supprimer une réponse, laisser la case vide.)</p>
              <div class="answContainer d-flex flex-row flex-wrap">
                <?php $i = 1; foreach ($answQArr as $answQ){
                  echo '<div class="d-flex flex-row m-2 align-items-center">
                  <label for="answ'.$answQ['id_answer_q'].'" class="me-3">Réponse '.$i.' :</label>
                  <input type="hidden" name="answId[]" value="'.$answQ['id_answer_q'].'"/>
                  <input name="answ[]" id="answ'.$answQ['id_answer_q'].'" type="text" autocomplete="off" value="'.$answQ['answer_q'].'">
                </div>';
                $i++;
                }?>
              </div>
              <div class="d-flex flex-row m-2 ms-4">
                <button type="button" class="addBtn fs-5 btn link-primary text-decoration-underline">+ Ajouter une réponse</button>
              </div>
            </div>
            <div class="d-flex flex-column mt-5">
              <div class="d-flex flex-row align-items-baseline flex-wrap">
                <h4 class="me-2">Rendre active ?</h4>
                <p class="text-muted">(Si oui, la question actuellement active sera désactivée et remplacée.)</p>
              </div>
              <div class="form-check form-switch p-0">
                <input type="checkbox" role="switch" name="active" class="form-check-input" style="font-size: 30px; margin-left: 1em;">
              </div>
            </div>
            <div class="d-flex justify-content-center mt-5">
              <button type="submit" class="btn btn-lg btn-primary">Modifier</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <script src="../../src/js/add_answ.js"></script>
  </body>
</html>