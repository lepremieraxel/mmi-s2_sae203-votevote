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
    <!-- TITLE -->
    <title>ADMIN</title>
  </head>
  <body>
    <?php 
      include "../src/includes/question_active.php";
      include "../src/includes/page_admin.php";
    ?>
    <div class="container mt-4">
      <h1 class="text-uppercase text-center">Administration</h1>
      <div class="d-flex flex-row flex-wrap mt-5 justify-content-between">
        <div class="d-flex flex-column">
          <div class="d-flex flex-column">
            <div class="d-flex flex-row flex-wrap align-items-center">
              <a href="../" class="text-uppercase text-black fs-2">Question active :</a>
            </div>
            <h3 class="fw-normal ms-3"><?php echo $question;?></h3>
            <div class="d-flex flex-row flex-wrap align-items-start justify-content-between ps-3 pe-3 mt-3">
              <div class="d-flex flex-column align-items-center">
                <div class="d-flex flex-row align-items-center">
                  <h4 class="fs-4">Nombre de votants :</h4>
                  <h4 class="fw-normal ms-3"><?php echo $nbVotants;?></h4>
                </div>
                <div class="resultat-active">
                  <canvas class="chart" aria-label="chart" role="img"></canvas>
                </div>
              </div>
              <div class="d-flex flex-column align-items-center ms-5">
                <h4>Votes (précis) :</h4>
                <ul>
                  <?php foreach($answQ as $answQRow){
                      $check_answU->execute(array($answQRow['id_answer_q'], $questions['id_question']));
                      $answU = $check_answU->fetchColumn();
                      $labels[] = $answQRow['answer_q'];
                      $datas[] = $answU;
                      echo "<li>".$answQRow['answer_q']." : ".$answU."</li>";
                    }?>
                </ul>
              </div>
            </div>
          </div>
          <div class="d-flex flex-column mb-3 mt-5">
            <div class="d-flex flex-row">
              <h3 class="text-uppercase text-decoration-underline">Base de données :</h3>
            </div>
            <div class="d-flex flex-column align-items-start justify-content-between ps-3 pe-3 mt-3">
              <div class="d-flex flex-row align-items-center ">
                <h4 class="fs-4">Nombre de questions :</h4>
                <h4 class="fw-normal ms-3"><?php echo $nbQuestions?></h4>
              </div>
              <div class="d-flex flex-row align-items-center ">
                <h4 class="fs-4">Nombre de votes (total) :</h4>
                <h4 class="fw-normal ms-3"><?php echo $nbVotes?></h4>
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex flex-column align-items-center justify-content-center m-auto">
          <div class="d-flex flex-column bg-light shadow rounded p-5">
            <a href="new/" class="btn btn-lg btn-primary mb-5">Ajouter une question</a>
            <a href="questions/ " class="btn btn-lg btn-primary">Gérer les questions</a>
          </div>
        </div>
      </div>
    </div>

    <?php
      
      ?>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
      const myCanvas = document.querySelector('.chart');
      const data = {
        labels: <?php echo json_encode($labels);?>,
        datasets: [{
          label: <?php echo json_encode($question);?>,
          data: <?php echo json_encode($datas);?>,
          backgroundColor: [
            'rgb(24, 52, 143)',
            'rgb(64, 164, 216)',
            'rgb(51, 190, 183)',
            'rgb(178, 194, 36)',
            'rgb(254, 204, 47)',
            'rgb(248, 162, 39)',
            'rgb(246, 99, 32)',
            'rgb(219, 57, 55)',
            'rgb(238, 101, 121)',
            'rgb(163, 100, 217)'
          ],
          hoverOffset: 1
        }]
      };
      const myChart = new Chart(myCanvas, {
        type: 'doughnut',
        data: data,
      }); 
    </script>
  </body>
</html>