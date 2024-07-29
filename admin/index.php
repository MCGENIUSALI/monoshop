<?php 

require '../config/commandes.php';

?>

<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="/docs/5.3/assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>website_VroomVroom_connexion</title>

    <!-- Link init Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Box icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
    <!-- Style CSS -->
    <style>

      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }

      /* ===== style-perso ====== */
      .icon-header{
        text-decoration: none;
      }

      .btn-connex{
        /* padding: 0 50px; */
      }
      .bg-image {
        background: rgb(15,105,148);
        background: linear-gradient(180deg, rgba(15,105,148,1) 0%, rgba(213,213,213,1) 100%);
      }
      .txt-welcom{
        color:rgb(76,78,79);
        font-size:1rem;
      }
    </style>
 
</head>
    <body>    
        <!-- ============== Header ================ -->
        <header data-bs-theme="dark">
            <div class="collapse text-bg-dark" id="navbarHeader">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-md-7 py-4">
                            <h4>A propos</h4>
                            <p class="text-body-secondary">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Id ipsum soluta quo necessitatibus, itaque accusantium sapiente. Aspernatur, aliquam? Quidem, sed voluptates unde corrupti eius sequi labore cumque porro nemo impedit.
                                Omnis minima repellat nisi provident pariatur error iure ipsum rem alias, autem quae laborum eaque, molestiae adipisci suscipit nihil reiciendis molestias laboriosam ex accusantium? Earum voluptas a accusamus excepturi beatae.
                                Odit saepe provident corrupti, non nulla doloremque deserunt assumenda. Quasi, accusantium nisi nesciunt incidunt obcaecati, iste impedit minima vero explicabo harum ea fugiat nulla. Accusantium aut natus fugit? Eum, aliquam?
                            </p>
                        </div>

                        <div class="col-sm-4 offset-md-1 py-4">
                            <h4>Suivez nous sur :</h4>
                            <ul class="list-unstyled">
                                <li><a href="#" class="text-white icon-header"><i class='bx bxl-twitter'></i> Twitter</a></li>
                                <li><a href="#" class="text-white icon-header"><i class='bx bxl-facebook'></i> Facebook</a></li>
                                <li><a href="#" class="text-white icon-header"><i class='bx bxl-instagram-alt'></i> Instagram</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between py-3 align-items-center">
                        <div class="btn-group">
                            <a href="../login.php">
                                <button type="button" class="btn btn-sm btn-outline-primary">Connexion</button>
                            </a>
                            <a href="../admin/createcompte.php">
                                <button type="button" class="btn btn-sm btn-outline-primary">Créer un compte</button>
                            </a> 
                        </div>
                    </div>
                </div>
            </div>

        <!-- ============== Logo ================ -->
            <div class="navbar navbar-dark bg-dark shadow-sm">
                <div class="container">
                <a href="../index.php" class="navbar-brand d-flex align-items-center">
                    <span><img src="../img/car dealer.png" width="150" alt=""></span>
                    <strong>VroomVroom</strong>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                </div>
            </div>
        </header>

        <!-- ======== navbar ========= -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">VroomVroom</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="../admin/index.php" style="font-weight: bold">Nouveau</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="../admin/supprime.php">Suppression</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="../admin/afficher.php">Voitures</a>
                </li>
              </ul>

              <div style="display: flex;, justify-content: flex-end;" class="my-3 px-2">
                <a href="../admin/deconnexion.php" class="btn btn-danger">Se deconnecter</a>
              </div>
            </div>
          </div>
        </nav>

        <!-- ========= ajout-header ========== -->
<div class="afficher py-5 bg-light">
    <div class="container my-4">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <form method="POST">
                <div class="">
                    <div class="mb-3">
                        <label for="image" class="form-label">Image de la voiture</label>
                        <input type="text" name="image" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" name="description" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="marque" class="form-label">Marque de la voiture</label>
                        <input type="text" name="marque" class="form-control" required>
                    </div>
                </div>
                <div class="">
                    <div class="mb-3">
                        <label for="model" class="form-label">Model</label>
                        <input type="text" class="form-control" name="model" required>
                    </div>
                    <div class="mb-3">
                        <label for="prix" class="form-label">Prix</label>
                        <input type="number" class="form-control" name="prix" required>
                    </div>
                    <div class="mb-3">
                        <label for="kilometrage" class="form-label">Kilométrages</label>
                        <input type="number" class="form-control" name="kilometrage" required>
                    </div>
                    <div class="mb-3">
                        <label for="typecarburant" class="form-label">Type carburants</label>
                        <select name="typecarburant" class="form-control" required>
                            <option value="Essence">Essence</option>
                            <option value="Diesel">Diesel</option>
                            <option value="Hybrid">Hybrid</option>
                            <option value="Electrique">Electrique</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="annee" class="form-label">Année</label>
                        <input type="number" class="form-control" name="annee" required>
                    </div>
                    <div class="mb-3">
                        <label for="couleur" class="form-label">Couleur</label>
                        <input type="text" class="form-control" name="couleur" required>
                    </div>
                    <button type="submit" class="btn btn-success" name="valider">Ajouter</button>
                    <button type="button" class="btn btn-success">
                        <a href="../admin/payment.php" class="text-decoration-none" style="color: white;">Acheter</a>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

    <!-- ============== Footer ================ -->
    <div class="container my-5 cont-foot">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-5 border-top">
            <div class="col-md-4 d-flex align-items-center">
                <a href="../index.php" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
                    <img src="../img/car dealer.png" width="100">
                </a>
                <span class="mb-3 mb-md-0 text-body-secondary">&copy; 2024 VroomVroom.cd, Inc</span>
            </div>

            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                <li class="ms-3"><a class="text-body-secondary" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M19.633 7.997c.013.175.013.349.013.523 0 5.325-4.053 11.461-11.46 11.461-2.282 0-4.402-.661-6.186-1.809.324.037.636.05.973.05a8.07 8.07 0 0 0 5.001-1.721 4.036 4.036 0 0 1-3.767-2.793c.249.037.499.062.761.062.361 0 .724-.05 1.061-.137a4.027 4.027 0 0 1-3.23-3.953v-.05c.537.299 1.16.486 1.82.511a4.022 4.022 0 0 1-1.796-3.354c0-.748.199-1.434.548-2.032a11.457 11.457 0 0 0 8.306 4.215c-.062-.3-.1-.611-.1-.923a4.026 4.026 0 0 1 4.028-4.028c1.16 0 2.207.486 2.943 1.272a7.957 7.957 0 0 0 2.556-.973 4.02 4.02 0 0 1-1.771 2.22 8.073 8.073 0 0 0 2.319-.624 8.645 8.645 0 0 1-2.019 2.083z"></path></svg></a></li>
                <li class="ms-3"><a class="text-body-secondary" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M13.397 20.997v-8.196h2.765l.411-3.209h-3.176V7.548c0-.926.258-1.56 1.587-1.56h1.684V3.127A22.336 22.336 0 0 0 14.201 3c-2.444 0-4.122 1.492-4.122 4.231v2.355H7.332v3.209h2.753v8.202h3.312z"></path></svg></a></li>
                <li class="ms-3"><a class="text-body-secondary" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M20.947 8.305a6.53 6.53 0 0 0-.419-2.216 4.61 4.61 0 0 0-2.633-2.633 6.606 6.606 0 0 0-2.186-.42c-.962-.043-1.267-.055-3.709-.055s-2.755 0-3.71.055a6.606 6.606 0 0 0-2.185.42 4.607 4.607 0 0 0-2.633 2.633 6.554 6.554 0 0 0-.419 2.185c-.043.963-.056 1.268-.056 3.71s0 2.754.056 3.71c.015.748.156 1.486.419 2.187a4.61 4.61 0 0 0 2.634 2.632 6.584 6.584 0 0 0 2.185.45c.963.043 1.268.056 3.71.056s2.755 0 3.71-.056a6.59 6.59 0 0 0 2.186-.419 4.615 4.615 0 0 0 2.633-2.633c.263-.7.404-1.438.419-2.187.043-.962.056-1.267.056-3.71-.002-2.442-.002-2.752-.058-3.709zm-8.953 8.297c-2.554 0-4.623-2.069-4.623-4.623s2.069-4.623 4.623-4.623a4.623 4.623 0 0 1 0 9.246zm4.807-8.339a1.077 1.077 0 0 1-1.078-1.078 1.077 1.077 0 1 1 2.155 0c0 .596-.482 1.078-1.077 1.078z"></path><circle cx="11.994" cy="11.979" r="3.003"></circle></svg></a></li>
            </ul>
        </footer>
    </div>
            <!-- link js boostrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>


<?php
if(isset($_POST['valider'])){
    if(isset($_POST['image']) && isset($_POST['description']) && isset($_POST['marque']) && isset($_POST['model']) 
        && isset($_POST['prix']) && isset($_POST['kilometrage']) && isset($_POST['typecarburant']) && isset($_POST['annee']) && isset($_POST['couleur'])){
        if(!empty($_POST['image']) && !empty($_POST['description']) && !empty($_POST['marque']) && !empty($_POST['model']) 
            && !empty($_POST['prix']) && !empty($_POST['kilometrage']) && !empty($_POST['typecarburant']) && !empty($_POST['annee']) && !empty($_POST['couleur'])){
            
            $image = htmlspecialchars(strip_tags($_POST['image']));
            $desc = htmlspecialchars(strip_tags($_POST['description']));
            $marque = htmlspecialchars(strip_tags($_POST['marque']));
            $model = htmlspecialchars(strip_tags($_POST['model']));
            $prix = htmlspecialchars(strip_tags($_POST['prix']));
            $kilometrage = htmlspecialchars(strip_tags($_POST['kilometrage']));
            $typecarburant = htmlspecialchars(strip_tags($_POST['typecarburant']));
            $annee = htmlspecialchars(strip_tags($_POST['annee']));
            $couleur = htmlspecialchars(strip_tags($_POST['couleur']));

            try {
                add($image, $desc, $marque, $model, $annee, $couleur, $prix, $kilometrage, $typecarburant);
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        }
    }
}
?>

