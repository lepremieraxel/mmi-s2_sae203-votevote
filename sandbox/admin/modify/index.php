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
        <div class="d-flex flex-column mt-5">
          <form action="" method="post">
            <div class="d-flex flex-row">
              <h2>Quelle mascotte préfères tu ?</h2>
            </div>
            <div class="d-flex flex-column mt-5">
              <h4>Réponses (MAX : 10)</h4>
              <div class="d-flex flex-row flex-wrap">
                <div class="d-flex flex-row m-2 align-items-center">
                  <label for="answ1" class="me-3">Réponse 1 :</label>
                  <input id="answ1" type="text" required autocomplete="off" value="Réponse1">
                </div>
                <div class="d-flex flex-row m-2 align-items-center">
                  <label for="answ2" class="me-3">Réponse 2 :</label>
                  <input id="answ2" type="text" required autocomplete="off" value="Réponse2">
                </div>
                <div class="d-flex flex-row m-2 align-items-center">
                  <label for="answ3" class="me-3">Réponse 3 :</label>
                  <input id="answ3" type="text" required autocomplete="off" value="Réponse3">
                  <button type="button" class="btn link-danger"><i class="fa-solid fa-trash"></i></button>
                </div>
              </div>
            </div>
            <div class="d-flex flex-column mt-5">
              <div class="d-flex flex-row align-items-baseline flex-wrap">
                <h4 class="me-2">Rendre active ?</h4>
                <p class="text-muted">(Si oui, la question actuellement active sera désactivée et remplacée.)</p>
              </div>
              <div class="form-check form-switch p-0">
                <input type="checkbox" role="switch" name="active" class="form-check-input" style="font-size: 30px; margin-left: 1em;" checked>
              </div>
            </div>
            <div class="d-flex justify-content-center mt-5">
              <button type="submit" class="btn btn-lg btn-primary">Modifier</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>