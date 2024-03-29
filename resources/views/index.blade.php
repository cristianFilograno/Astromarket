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
  
  
  <div class="container vh-100">
    <div class="row h-75 align-items-center">
      <div class="col-12 col-md-6">
        <h1 class="tx-m display-2 fs-main">Scopri il futuro dello <br> <span class="fs-main bg-main">shopping online</span></h1>
        <p class="text-white">La tecnologia al servizio della tua esperienza di acquisto, Il futuro è sempre più vicino: acquista e vendi in modo smart </p>
        <button class="btn-cta">
          <div class="top"></div>
          <div class="bottom"></div>
          <a href="/annunci" class="text-decoration-none text-white">Visita gli annunci</a>
        </button>
      </div>
      <div class="col-12 col-md-6">
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
          <source src="./media/video-head.mp4" class="img-fluid" type="video/mp4">
        </video>
      </div>
    </div>
  </div>
  


  <div class="container my-3">
    <div class="row">
      <div class="col-12 text-center">
        <p class="display-3 text-white fs-main">Benvenuti nel mondo <br> <span class="bg-main fs-main">Astromarket</span> </p>
        <p class="tx-s">Scopri perche e come i nostri utenti comprano e vendono in modo veloce e pratico attraverso la nostra piattaforma</p>
      </div>
    </div>
  </div>
  
  <div class="container" data-info="counterAnnunci">
    <div class="row align-items-center justify-content-around my-5">
      <div class="col-12 col-md-4 mb-5">
        <p class="display-4 fs-main bg-main">Annunci caricati</p>
        <p class="lead text-white">tutti i nostri Annunci vengono controllati quotidianamente dai nostri amministratori, qui potrai trovare il numero totale di annunci presenti sulla piattaforma secondo le varie categorie</p>
        <p></p>
      </div>
      <div class="col-12 col-md-4 mb-5">
        <div class="circle-data mx-auto border-gradient d-flex justify-content-center align-items-center">
          <p id="totAnnunci" class="text-white display-3"></p>
        </div>
      </div>
    </div>
  </div>
  
  <div class="container" data-info="counterRatingSeller">
    <div class="row align-items-center justify-content-around my-5">
      <div class="col-12 col-md-4 mb-5">
        <p class="display-4 fs-main bg-main">Serietá iscritti</p>
        <p class="lead text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo maiores nihil totam harum ullam autem vel esse. Doloremque error eveniet omnis, ipsa harum similique laborum. Natus, eligendi at. Doloremque, doloribus?</p>
        <p></p>
      </div>
      <div class="col-12 col-md-4 mb-5 order-lg-first">
        <div class="circle-data mx-auto border-gradient d-flex justify-content-center align-items-center">
          <p id="ratingSeller" class="text-white display-3"></p>
          <span class="fs-3 text-white">/10</span>
        </div>
      </div>
    </div>
  </div>
  
  
  <div class="container" data-info="counterRatingAnnunci">
    <div class="row align-items-center justify-content-around my-5">
      <div class="col-12 col-md-4 mb-5">
        <p class="display-4 fs-main bg-main">Qualitá Annunci </p>
        <p class="lead text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit dolores, illo dolorem corrupti laboriosam vel numquam saepe doloribus qui accusamus, asperiores odio quisquam porro sequi possimus ab placeat exercitationem quasi?</p>
        <p></p>
      </div>
      <div class="col-12 col-md-4 mb-5">
        <div class="circle-data mx-auto border-gradient d-flex justify-content-center align-items-center">
          <p id="ratingAnnunci" class="text-white display-3"></p>
          <span class="fs-3 text-white">/10</span>
        </div>
      </div>
    </div> 
  </div>
  
  <div class="container my-5 py-5">
    
    <div class="row mb-5"> 
      <div class="col-12 text-center">
        <h2 class="fs-main text-white display-4">Tutte le <span class="fs-main bg-main">Categorie</span></h2>
      </div>
    </div>
    
    <div class="row mb-5">
      <div class="col-12">
        <!-- Swiper -->
        <div class="swiper mySwiper">
          <div class="swiper-wrapper">
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </div>
    
  </div>
  
  
  <div class="container my-5 py-5">
    <div class="row mb-4">
      <div class="col-12 text-center">
        <p class="fs-main display-4 text-white">Ultimi caricati...</p>
      </div>
    </div>
    <div id="lastUploaded" class="row mb-4">
      
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
  <script src="./app.js"></script>
</body>
</html>
