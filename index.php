<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="/docs/5.3/assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>website_VroomVroom</title>

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
                                Odit saepe provident corrupti, non nulla doloremque deserunt assumenda. Quasi, accusantium nisi nesciunt incidunt obcaecati, iste impedit minima vero explicabo harum ea fugiat nulla. Accusantium aut natus fugit? Eum, aliquam?</p>
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
                            <a href="../monoshop/config/connexion.php">
                                <button type="button" class="btn btn-sm btn-outline-primary">Connexion</button>
                            </a>
                            <a href="../monoshop/admin/createcompte.php">
                                <button type="button" class="btn btn-sm btn-outline-primary">Créer un compte</button>
                            </a> 
                        </div>
                    </div>
                </div>
            </div>

        <!-- ============== Logo ================ -->
            <div class="navbar navbar-dark bg-dark shadow-sm">
                <div class="container">
                <a href="#" class="navbar-brand d-flex align-items-center">
                    <span><img src="../monoshop/img/car dealer.png" width="150" alt=""></span>
                    <strong>VroomVroom</strong>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                </div>
            </div>
        </header>

    <main>
        <!-- ============== section-principal ================ -->
        <!-- <div class="b-example-divider"></div> -->
        <div class="px-4 py-5 bg-image">
            <div class="row flex-lg-row-reverse align-items-center">
                <div class="col-10 col-sm-8 col-lg-5">
                    <img src="../monoshop/img/tof_bg1.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="800" height="500" loading="lazy">
                </div>

                <div class="col-lg-6 txt-color">
                    <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Acquérez votre nouvelle voiture avec assurance et confiance </h1>
                    <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus explicabo hic at odit aliquam ipsa, voluptatum!</p>
                </div>
            </div>
        </div>

        <!-- ============== container-carts ================ -->
        <div class="album py-5 bg-body-tertiary">
            <div class="container">

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="card shadow-sm">
                            <span><img src="../monoshop/img/1.jpg" width="100%" height="100%"></span>
                            <div class="card-body">
                                <p class="card-text">BMW Serie 3 Touring <br>
                                    <span class="text-body-secondary">M Sport - 320d 190 BVAB</span>
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="../monoshop/config/connexion.php">
                                            <button type="button" class="btn btn-sm btn-outline-primary">Commander</button>
                                        </a>
                                    </div>
                                    <span class="text-body-secondary">2017</span>
                                    <span class="text-body-secondary">144805km</span>
                                    <span class="text-body-secondary">Diesel</span>
                                    <span class="text-body-secondary">Automatique</span>
                                </div>

                                <div class="pt-3 card-text">
                                    <h2 class="fs-4 fw-bold">20 494$</h2>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-sm">
                            <span><img src="../monoshop/img/2.jpg" width="100%" height="100%"></span>
                            <div class="card-body">
                                <p class="card-text">BMW Serie 3 Touring <br>
                                    <span class="text-body-secondary">M Sport - 320d 190 BVAB</span>
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="../monoshop/config/connexion.php">
                                            <button type="button" class="btn btn-sm btn-outline-primary">Commander</button>
                                        </a>
                                    </div>
                                    <span class="text-body-secondary">2017</span>
                                    <span class="text-body-secondary">144805km</span>
                                    <span class="text-body-secondary">Diesel</span>
                                    <span class="text-body-secondary">Automatique</span>
                                </div>

                                <div class="pt-3 card-text">
                                    <h2 class="fs-4 fw-bold"">20 494$</h2>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-sm">
                            <span><img src="../monoshop/img/3.jpg" width="100%" height="100%"></span>
                            <div class="card-body">
                                <p class="card-text">BMW Serie 3 Touring <br>
                                    <span class="text-body-secondary">M Sport - 320d 190 BVAB</span>
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="../monoshop/config/connexion.php">
                                            <button type="button" class="btn btn-sm btn-outline-primary">Commander</button>
                                        </a>
                                    </div>
                                    <span class="text-body-secondary">2017</span>
                                    <span class="text-body-secondary">144805km</span>
                                    <span class="text-body-secondary">Diesel</span>
                                    <span class="text-body-secondary">Automatique</span>
                                </div>

                                <div class="pt-3 card-text">
                                    <h2 class="fs-4 fw-bold"">20 494$</h2>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-sm">
                            <span><img src="../monoshop/img/4.jpg" width="100%" height="100%"></span>
                            <div class="card-body">
                                <p class="card-text">BMW Serie 3 Touring <br>
                                    <span class="text-body-secondary">M Sport - 320d 190 BVAB</span>
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="../monoshop/config/connexion.php">
                                            <button type="button" class="btn btn-sm btn-outline-primary">Commander</button>
                                        </a>
                                    </div>
                                    <span class="text-body-secondary">2017</span>
                                    <span class="text-body-secondary">144805km</span>
                                    <span class="text-body-secondary">Diesel</span>
                                    <span class="text-body-secondary">Automatique</span>
                                </div>

                                <div class="pt-3 card-text">
                                    <h2 class="fs-4 fw-bold"">20 494$</h2>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-sm">
                            <span><img src="../monoshop/img/bg2.jpg" width="100%" height="100%"></span>
                            <div class="card-body">
                                <p class="card-text">BMW Serie 3 Touring <br>
                                    <span class="text-body-secondary">M Sport - 320d 190 BVAB</span>
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="../monoshop/config/connexion.php">
                                            <button type="button" class="btn btn-sm btn-outline-primary">Commander</button>
                                        </a>
                                    </div>
                                    <span class="text-body-secondary">2017</span>
                                    <span class="text-body-secondary">144805km</span>
                                    <span class="text-body-secondary">Diesel</span>
                                    <span class="text-body-secondary">Automatique</span>
                                </div>

                                <div class="pt-3 card-text">
                                    <h2 class="fs-4 fw-bold"">20 494$</h2>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-sm">
                            <span><img src="../monoshop/img/bg3.jpg" width="100%" height="100%"></span>
                            <div class="card-body">
                                <p class="card-text">BMW Serie 3 Touring <br>
                                    <span class="text-body-secondary">M Sport - 320d 190 BVAB</span>
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="../monoshop/config/connexion.php">
                                            <button type="button" class="btn btn-sm btn-outline-primary">Commander</button>
                                        </a>
                                    </div>
                                    <span class="text-body-secondary">2017</span>
                                    <span class="text-body-secondary">144805km</span>
                                    <span class="text-body-secondary">Diesel</span>
                                    <span class="text-body-secondary">Automatique</span>
                                </div>

                                <div class="pt-3 card-text">
                                    <h2 class="fs-4 fw-bold"">20 494$</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="my-3 align-center">
                    <a href="#" class="btn btn-primary">
                        Voir plus des voitures
                    </a>
                </div>
            </div>
        </div>
    </main>



    <!-- ======= section welcom =======  -->
    <div class="container px-4 py-5" id="hanging-icons">
        <h2 class="pb-2 border-bottom">
            Bienvenue chez VroomVroom 👋<br>
            <span class="txt-welcom">
                Faites l’acquisition de votre nouvelle voiture en toute sérénité chez nous. <br>
                Nous vous offrons un accompagnement personnalisé de A à Z, garantissant une expérience sans stress et entièrement adaptée à vos besoins !
            </span>
        </h2>

        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
            <div class="col d-flex align-items-start">
                <div class="text-body-emphasis d-inline-flex align-items-center justify-content-center fs-1 flex-shrink-0 me-2">
                    <span>👨‍🔧</span>
                </div>
                <div>
                    <h3 class="fs-4 text-body-emphasis">Voiture contrôlées</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat at dolores nesciunt cumque recusandae commodi animi mollitia enim. Tenetur eius voluptate reiciendis, esse ad voluptatem id at sapiente. Corrupti, molestiae.</p>
                    <a href="#" class="btn btn-primary">
                        En savoir plus
                    </a>
                </div>
            </div>

            <div class="col d-flex align-items-start">
                <div class="text-body-emphasis d-inline-flex align-items-center justify-content-center fs-1 flex-shrink-0 me-2">
                    <!-- <svg class="bi" width="1em" height="1em"><use xlink:href="#cpu-fill"/></svg> -->
                    <span>🚗</span>
                </div>
                <div>
                    <h3 class="fs-4 text-body-emphasis">Meilleur qualité / prix</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat at dolores nesciunt cumque recusandae commodi animi mollitia enim. Tenetur eius voluptate reiciendis, esse ad voluptatem id at sapiente. Corrupti, molestiae.</p>
                    <a href="#" class="btn btn-primary">
                        En savoir plus
                    </a>
                </div>
            </div>

            <div class="col d-flex align-items-start">
                <div class="text-body-emphasis d-inline-flex align-items-center justify-content-center fs-1 flex-shrink-0 me-2">
                    <span>👍</span>
                </div>
                <div>
                    <h3 class="fs-4 text-body-emphasis">Garantie incluse</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat at dolores nesciunt cumque recusandae commodi animi mollitia enim. Tenetur eius voluptate reiciendis, esse ad voluptatem id at sapiente. Corrupti, molestiae.</p>
                    <a href="#" class="btn btn-primary">
                        En savoir plus
                    </a>
                </div>
            </div>
        </div>
  </div>

  <!-- ========== choose use ========= -->
    <div class="container px-4 py-5" id="featured-3">
      <h2 class="pb-2 border-bottom">Pourquoi nous choisir ?</h2>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
            <div class="feature col">
                <div class="feature-icon d-inline-flex align-items-center justify-content-center fs-2 mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="m20.772 10.155-1.368-4.104A2.995 2.995 0 0 0 16.559 4H7.441a2.995 2.995 0 0 0-2.845 2.051l-1.368 4.104A2 2 0 0 0 2 12v5c0 .738.404 1.376 1 1.723V21a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-2h12v2a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-2.277A1.99 1.99 0 0 0 22 17v-5a2 2 0 0 0-1.228-1.845zM7.441 6h9.117c.431 0 .813.274.949.684L18.613 10H5.387l1.105-3.316A1 1 0 0 1 7.441 6zM5.5 16a1.5 1.5 0 1 1 .001-3.001A1.5 1.5 0 0 1 5.5 16zm13 0a1.5 1.5 0 1 1 .001-3.001A1.5 1.5 0 0 1 18.5 16z"></path></svg>
                </div>
                <h3 class="fs-3 text-body-emphasis">Sélection de véhicules de haute qualité</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At ipsa fugit natus nostrum doloribus reprehenderit facere fugiat incidunt voluptatibus dignissimos libero velit, saepe harum! Sit debitis similique voluptatum ea obcaecati.</p>
            </div>

            <div class="feature col">
                <div class="feature-icon d-inline-flex align-items-center justify-content-center fs-2 mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M7.5 6.5C7.5 8.981 9.519 11 12 11s4.5-2.019 4.5-4.5S14.481 2 12 2 7.5 4.019 7.5 6.5zM20 21h1v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h17z"></path></svg>
                </div>
                <h3 class="fs-3 text-body-emphasis">Service client exceptionnel </h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est nihil optio quisquam nesciunt aliquam delectus expedita accusamus autem sunt quas, officiis deleniti perferendis ipsum molestiae, itaque distinctio. Maxime, distinctio blanditiis.</p>
            </div>

            <div class="feature col">
                <div class="feature-icon d-inline-flex align-items-center justify-content-center fs-2 mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M20 4H4c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2zm-7.5 12a2.5 2.5 0 1 1 0-5 2.47 2.47 0 0 1 1.5.512c-.604.456-1 1.173-1 1.988s.396 1.532 1 1.988a2.47 2.47 0 0 1-1.5.512zm4 0a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5z"></path></svg>
                </div>
                <h3 class="fs-3 text-body-emphasis">Financement flexible</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam veniam possimus aut. Quibusdam nisi, architecto voluptate, quo accusantium amet tempora iure sunt ut minus sed, porro corporis tenetur? Necessitatibus, at!</p>
            </div>
        </div>
    </div>


    <!-- ============== Footer ================ -->
    <div class="container cont-foot">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-4 d-flex align-items-center">
                <a href="../monoshop/index.php" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
                    <img src="../monoshop/img/car dealer.png" width="100">
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
