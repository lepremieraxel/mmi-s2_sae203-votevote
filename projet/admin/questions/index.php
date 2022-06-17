<!DOCTYPE html>
<html lang="fr">
  <head>
    <!-- META -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- LINK -->
    <link rel="stylesheet" href="../../src/css/erreur.css">
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
    <title>QUESTIONS</title>
  </head>
  <body class="mb-5">
  <?php include "../../src/includes/questions_affichage.php"?>
    <div class="container mt-5">
      <div class="d-flex flex-column">
        <div class="d-flex flex-row justify-content-between">
          <h1 class="text-uppercase">Gérer les questions</h1>
          <a href="../" class="btn btn-lg btn-secondary">Retour</a>
        </div>
        <div class="d-flex flex-column mt-5">
          <?php include"../../src/includes/get_states.php";?>
          <table class="table mb-5">
            <thead>
              <tr>
                <th scope="col" class="text-center">ID</th>
                <th scope="col">Questions</th>
                <th scope="col" class="text-center">Actif ?</th>
                <th scope="col" class="text-center">Modifier</th>
                <th scope="col" class="text-center">Supprimer</th>
              </tr>
            </thead>
            <tbody>
              <form action="../../src/php/questions.php" method="post">
                <input id="idQuestionActive" type="hidden" name="activeQ" value="<?php echo $activeQ?>">
                <?php foreach($allQuestions as $oneQuestion){
                  echo '<tr class="align-middle">
                  <th scope="row" class="text-center">'.$oneQuestion['id_question'].'</th>
                  <td>'.$oneQuestion['intitule'].'</td>
                  <td class="text-center">
                    <input type="radio" name="actif" value="'.$oneQuestion['id_question'].'" id="actif'.$oneQuestion['id_question'].'">
                  </td>
                  <td class="text-center"><a href="../modify/index.php?id='.$oneQuestion['id_question'].'" class="link-warning"><i class="fa-solid fa-pen"></i></a></td>
                  <td class="text-center">
                    <button type="submit" name="delBtn" value="'.$oneQuestion['id_question'].'" class="btn link-danger"><i class="fa-solid fa-trash"></i></button>
                  </td>
                </tr>';
              }?>
            </tbody>
          </table>
          <button type="submit" name="submitBtn" class="btn btn-lg btn-primary mb-3 position-fixed fixed-bottom translate-middle start-50 w-50">Valider</button>
        </form>
        </div>
      </div>
    </div>
    <script src="../../src/js/question_active.js"></script>
  </body>
</html>
