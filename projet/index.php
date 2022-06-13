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
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Kdam+Thmor+Pro&family=Roboto+Flex:opsz,wght@8..144,100;8..144,200;8..144,300;8..144,400;8..144,500;8..144,600;8..144,700;8..144,800;8..144,900;8..144,1000&display=swap"
      rel="stylesheet"
    />
    <!-- css -->
    <link rel="stylesheet" href="src/css/style.css" />
    <!-- TITLE -->
    <title>MMI VOTE</title>
  </head>
  <body>
    <!-- logo -->
    <a href="" class="main-logo"><img src="src/img/logo_mmi.png" alt="mmi tarbes" /></a>
    <?php 
      include "src/includes/vote_alert.php";
      include "src/includes/question_active.php";
    ?>
    <!-- question qui est activée -->
    <h1 class="question"><?php echo $question;?></h1>
    <form action="src/php/vote.php" method="post">
      <!-- réponses -->
      <div class="radio-container">
        <?php include "src/includes/answers_active.php";?>
      </div>
      <!-- email -->
      <div class="email-container">
        <input
          type="text"
          name="email"
          id="email"
          autocomplete="off"
          required
          placeholder="prenom.nom"
          class="email-input"
        />
        <label for="email" class="email-label">Votre email</label>
        <p class="email-iut">@iut-tarbes.fr</p>
      </div>
      <!-- validation -->
      <button type="submit" class="btn-form">Valider</button>
    </form>
    <!-- chart -->
    <div class="chart-container">
      <canvas class="chart" aria-label="chart" role="img"></canvas>
    </div>
    <!-- footer -->
    <footer>
      <div class="footer-up">
        <h5>À propos</h5>
        <p>Ce site a été réalisé durant une <a href="">SAÉ</a>. Nous étions en groupe de cinq personnes, <a href="https://axelmarcial.com" target="_blank">Axel</a>, <a href="">Jade</a>, <a href="">Victor</a>, <a href="">Sémi</a> et <a href="">Sady</a>.</p>
        <p>Le travail à rendre était un site web avec un système de vote qui affiche les résultats en direct sous forme de graphique, dont la (ou les) question(s) sont modifiable(s) depuis un espace <a href="admin/">administrateur</a>. On devait aussi pouvoir supprimer, désactiver ou créer de nouvelles questions sans passer par le code.</p>
      </div>
      <div class="footer-down">
        <p>&copy; MMI TARBES 2022 - Axel MARCIAL, Jade ROGNON, Victor MONCASSIN, Sémi LYAMANI & Sady GRAEFF</p>
      </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="src/js/chart.js"></script>
  </body>
</html>
