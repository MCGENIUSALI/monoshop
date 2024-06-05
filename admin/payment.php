<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="/docs/5.3/assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>website_VroomVroom_Paiement</title>

    <!-- Link init Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Box icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>
    
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

      /* ===== bg-img ====== */
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
                                <li><a href="#" class="text-white">Twitter</a></li>
                                <li><a href="#" class="text-white">Facebook</a></li>
                                <li><a href="#" class="text-white">Instagram</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center">
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

        <!-- ======== payment ======== -->

<div class="container">
  <main>
        <div class="py-5 text-center">
            <img class="d-block mx-auto mb-4" src="../img/car dealer.png" alt="" width="200" height="70">
            <h2>Formulaire de paiement</h2>
            <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolore soluta quos voluptatem doloribus aliquid minus asperiores labore incidunt, tenetur fugiat omnis perferendis, iusto, facere est rerum? Ad cupiditate itaque enim.</p>
        </div>

        <div class="row g-5">
            <div class="col-md-7 col-lg-8">
                <h4 class="mb-3">Adresse de facturation</h4>
                <form class="needs-validation" novalidate>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="firstName" class="form-label">Prénom</label>
                            <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                        <div class="invalid-feedback">
                           La validation de votre nom est obligatoire.
                        </div>
                        </div>

                        <div class="col-sm-6">
                            <label for="lastName" class="form-label">Nom de famille</label>
                            <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                        <div class="invalid-feedback">
                            la validation de votre nom de famille est obligatoire.
                        </div>
                        </div>

                        <div class="col-12">
                            <label for="username" class="form-label">Nom d'utilisateur</label>
                            <div class="input-group has-validation">
                                <span class="input-group-text">@</span>
                                <input type="text" class="form-control" id="username" placeholder="Nom utilisateur" required>
                            <div class="invalid-feedback">
                                Votre nom d'utilisateur est obligatoire
                            </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="email" class="form-label">Email <span class="text-body-secondary">(Optional)</span></label>
                            <input type="email" class="form-control" id="email" placeholder="vous@example.com">
                        <div class="invalid-feedback">
                            Entrez une adresse mail valide s'il vous plait.
                        </div>
                        </div>

                        <div class="col-12">
                            <label for="address" class="form-label">Adresse</label>
                            <input type="text" class="form-control" id="adresse" placeholder="1234 rue principal" required>
                        <div class="invalid-feedback">
                            Entrez votre adresse s'il vous plait.
                        </div>
                        </div>

                        <div class="col-12">
                            <label for="address2" class="form-label">Adresse 2 <span class="text-body-secondary">(facultatif)</span></label>
                            <input type="text" class="form-control" id="address2" placeholder="Appartement ou suite">
                        </div>

                        <div class="col-md-5">
                            <label for="country" class="form-label">Pays</label>
                        <select class="form-select" id="country" required>
                            <option value="">Choisir...</option>
                            <option>République démoncratique du congo</option>
                            <option>France</option>
                            <option>Belgique</option>
                            <option>brésil</option>
                        </select>
                        <div class="invalid-feedback">
                            Selectionné votre pays s'il vous plait.
                        </div>
                        </div>

                        <div class="col-md-4">
                            <label for="state" class="form-label">Etat</label>
                        <select class="form-select" id="state" required>
                            <option value="">Choisir...</option>
                            <option>Californie</option>
                        </select>
                        <div class="invalid-feedback">
                            Selectionné votre état s'il vous plait.
                        </div>
                        </div>

                        <div class="col-md-3">
                            <label for="zip" class="form-label">Zip</label>
                            <input type="text" class="form-control" id="zip" placeholder="" required>
                        <div class="invalid-feedback">
                            Entez votre code zip s'il vous plait.
                        </div>
                        </div>
                    </div>

                    <hr class="my-4">

                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="same-address">
                    <label class="form-check-label" for="same-address">L'adresse de livraison est la même que mon adresse de facturation</label>
                </div>

                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="save-info">
                    <label class="form-check-label" for="save-info">Enregistrez ces informations pour la prochaine fois</label>
                </div>

                    <hr class="my-4">

                <h4 class="mb-3">Paiement</h4>

                <div class="my-3">
                    <div class="form-check">
                        <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
                        <label class="form-check-label" for="credit">Carte de crédit</label>
                    </div>

                    <div class="form-check">
                        <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
                        <label class="form-check-label" for="debit">Carte de débit</label>
                    </div>

                    <div class="form-check">
                        <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
                        <label class="form-check-label" for="paypal">PayPal</label>
                    </div>
                </div>

                <div class="row gy-3">
                    <div class="col-md-6">
                        <label for="cc-name" class="form-label">Nom sur la carte</label>
                        <input type="text" class="form-control" id="cc-name" placeholder="" required>
                    <small class="text-body-secondary">Nom complet tel qu'affiché sur la carte</small>
                    <div class="invalid-feedback">
                        Nom de la carte est obligatoire.
                    </div>
                    </div>

                    <div class="col-md-6">
                        <label for="cc-number" class="form-label">Numéro de Carte de Crédit</label>
                        <input type="text" class="form-control" id="cc-number" placeholder="" required>
                    <div class="invalid-feedback">
                        Numéro de la carte de crédit est obligatoire.
                    </div>
                    </div>

                    <div class="col-md-3">
                        <label for="cc-expiration" class="form-label">Expiration</label>
                        <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                    <div class="invalid-feedback">
                        La date d'expiration est obligatoire.
                    </div>
                    </div>

                    <div class="col-md-3">
                        <label for="cc-cvv" class="form-label">CVV</label>
                        <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                    <div class="invalid-feedback">
                        Le code de sécurité est obligatoire.
                    </div>
                    </div>
                </div>

                <hr class="my-4">

                    <button class="w-100 btn btn-primary btn-lg" type="submit">Continuer à payer</button>
                </form>
            </div>
        </div>
    </main>
</div>    
    <!-- ============== Footer ================ -->
    <div class="container cont-foot">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
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
