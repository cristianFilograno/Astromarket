<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Astromarket</title>
  <!-- Link Bootstrap's CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <!-- Link's Google fonts CDN -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Electrolize&family=Jura:wght@300;400&display=swap" rel="stylesheet"> 
  <!-- Link's icons bootstrap CDN -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <!-- Personal style file -->
  <link rel="stylesheet" href="./main.css">    
  
  <style>
    .form-check-input[type="checkbox"] {
      border-radius: 0em;
      
    } 
    
    .form-check-input {
      margin-top: 0.35em;
    } 
    
  </style>
</head>
<body>
  
  
  <nav class="navbar navbar-expand-md navbar-dark bg-trasparent px-5" aria-label="Fourth navbar example">
    <div class="container-fluid">
      <img src="./media/logo.png" width="120" alt="">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navbarsExample04">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item mx-2">
            <a class="nav-link tx-m fs-main" href="#">Servizi</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link tx-m fs-main" href="#">Aggiungi</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link tx-m fs-main" href="#">Contatta</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link tx-m fs-main" href="#">Diventa Admin</a>
          </li>
        </ul>
        <button class="mx-3 border-0 rounded-0 btn tx-m">
          <i class="bi bi-person-check-fill fs-4"></i>
        </button>
        <button class="mx-3 border-0 rounded-0 btn tx-m">
          <i class="bi bi-person-fill-gear fs-4"></i>
        </button>
      </div>
    </div>
  </nav>

  <div class="container my-5 py-5">
    <div class="row align-items-center">
      <div class="col-12 col-md-6">
        <h1 class="fs-main bg-main display-3">Tutti gli annunci del blog di Matteo</h1>
        <p class="small text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus possimus ullam dolorem quis sunt corrupti temporibus quibusdam exercitationem aperiam fugiat mollitia consectetur sit distinctio illum magni reiciendis, dolores autem dolor?</p>
      </div>
      <div class="col-12 col-md-6">
          <div class="input-group mb-3">
            <input id="searchElement" type="text" class="form-control p-2" aria-label="" aria-describedby="button-addon2">  
            <button class="btn btn-dark" type="button" id="button-addon2">🔍 </button>
          </div>
      </div>
    </div>
  </div>
  
  
  <div class="container my-5 py-5">
    <div class="row">
      <div class="col-12 col-md-3">
        <div class="row my-3">
          <div class="col-12">
            <h2 class="fs-main bg-main">Ordina per:</h2>
            <ul class="list-unstyled">
              <button id="recenti" class="fs-5 text-white fw-bold ordinaCursori">
                  tra i piu recenti ⬆️
              </button>
              <br>
              <button id="retro" class="fs-5 text-white fw-bold ordinaCursori">
                  tra i piu retro ⬇️
              </button>
            </ul>           
          </div>
        </div>
        <div class="row my-3">
          <div id="categorieFromCheckWrapper" class="col-12">
            <h2 class="fs-main bg-main">Filtra Categorie: </h2>
          </div>
        </div>
        <div class="row my-3">
          <div class="col-12">
            <h2 class="fs-main bg-main">Filtra Prezzo: </h2>
            <ul class="list-unstyled">
              <li class="text-white fw-bold fs-5" id="lowPrice">
                0 - 1000
              </li>
              <li class="text-white fw-bold fs-5" id="midPrice">
                1000 - 2000
              </li>
              <li class="text-white fw-bold fs-5" id="highPrice">
                > 3000
              </li>
            </ul>
          </div>
        </div>
        <div class="row my-3">
          <div class="col-12">
            <h2 class="fs-main bg-main">Filtra Usato: </h2>
            <ul class="list-unstyled">
              <li id="nuovo" class="text-white fw-bold fs-5">
                Nuovo
              </li>
              <li id="usato" class="text-white fw-bold fs-5">
                Usato
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-9">
        <div id="annunciWrapper" class="row">
          <!-- ANNUNCI SU JS -->
        </div>
      </div>
    </div>
  </div>
  
  
  
  
  
  
  
  
  
  
  
  <footer>
    <div class="container py-5 border-footer">
      <div class="row justify-content-around align-items-center">
        <div class="col-12 col-md-4">
          <img src="./media/logo.png" width="250" alt="">
          <p class="text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit modi deserunt, blanditiis temporibus ad doloribus cumque mollitia error officia unde at dignissimos maxime explicabo nulla placeat animi quas molestias quidem!</p>
          <i class="bi bi-facebook fs-3 tx-s mx-3"></i>
          <i class="bi bi-instagram fs-3 tx-s mx-3"></i>
          <i class="bi bi-twitch fs-3 tx-s mx-3"></i>
          <i class="bi bi-twitter fs-3 tx-s mx-3"></i>
        </div>
        <div class="col-12 col-md-6">
          <h2 class="fs-main tx-s">Contatta per divertare admin e aggiungere il tuo annucio</h2>
          <form class="mt-5">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label text-secondary">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <button class="btn-cta mb-3 d-block mx-auto">
              <div class="top"></div>
              <div class="bottom"></div>
              Contatta subito
            </button>
          </form>
        </div>
      </div>
    </div>
  </footer>
  
  
  
  
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  
  <script src="./annunci.js"></script>
  
</body>
</html>
