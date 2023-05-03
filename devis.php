<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Nice Informatique - Devis en ligne</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/LOGO.jpg" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Saira:wght@500;600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="top-bar text-white-50 row gx-0 align-items-center d-none d-lg-flex">
            <div class="col-lg-6 px-5 text-start">
                <small><i class="fa fa-map-marker-alt me-2"></i><a href="https://g.page/nice-informatique?share" target="_blank">10 Bis Rue Dante, 06000 Nice</a></small>
                <small class="ms-4"><i class="fa fa-envelope me-2"></i><a href="mailto:contact@niceinformatique.fr" target="_blank">contact@niceinformatique.fr</a></small>
            </div>
            <div class="col-lg-6 px-5 text-end">
                    <small>Avis Google :</small>
                    <a class="text-white-50 ms-2" href="https://g.page/nice-informatique?share" target="_blank"><i class="fab fa-google"></i></a>
                    <small class="ps-3">Suivez-nous :</small>
                    <a class="text-white-50 ms-3" href="https://www.facebook.com/niceinfo06/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a class="text-white-50 ms-3" href="https://www.instagram.com/nice_informatique_06/" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-dark py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
            <a href="index.html" class="navbar-brand ms-4 ms-lg-0">
                <h1 class="fw-bold text-primary m-0">Nice<span class="text-white"> Informatique</span></h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="index.html" class="nav-item nav-link active">Accueil</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">La boutique</a>
                        <div class="dropdown-menu m-0">
                            <a href="boutique.html" class="dropdown-item">Qui sommes-nous ?</a>
                            <a href="404.html" class="dropdown-item">Nos articles disponibles</a>
                            <a href="404.html" class="dropdown-item">Devenir partenaire</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" id="active">Nos services</a>
                        <div class="dropdown-menu m-0">
                            <a href="atelier.html" class="dropdown-item">Service en atelier</a>
                            <a href="domicile.html" class="dropdown-item">Service à domicile</a>
                            <a href="https://ni-pro.fr/" target="_blank" class="dropdown-item">Service professionnel</a>
                            <a href="404.html" class="dropdown-item" id="active">Devis en ligne</a>
                        </div>
                    </div>
                    <a href="https://ni-pro.fr/" target="_blank" class="nav-item nav-link">NI Pro</a>
                    <a href="contact.php" class="nav-item nav-link">Contactez-nous</a>
                </div>
                <div class="d-none d-lg-flex ms-2">
                    <a class="btn btn-outline-primary py-2 px-3" href="devis.php">
                        Réalisez votre devis
                        <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


<!-- Page Header Start -->
<div class="container-fluid page-devis mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center">
        <h1 class="display-4 text-white animated slideInDown mb-4">Nos services</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="index.html">Accueil</a></li>
                <li class="breadcrumb-item text-primary active" aria-current="page">Devis en ligne</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-12 wow fadeIn" data-wow-delay="0.1s">
                <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Devis en ligne</div>
                <h1 class="display-6 mb-5">Afin de réaliser votre demande de devis, merci de remplir le formulaire.</h1>
                <form class="row g-3" name="contact-form" action="" method="post" autocomplete="off">
                        <div class="col-md-3 form-floating">
                            <input type="text" class="form-control" name="lastname" required="required">
                            <label for="lastname" class="form-label">Nom</label>
                        </div>
                        <div class="col-md-3 form-floating">
                            <input type="text" class="form-control" name="firstname" name required="required">
                            <label for="firstname" class="form-label">Prénom</label>
                        </div>
                        <div class="col-md-3 form-floating">
                            <input type="email" class="form-control" name="email" required="required">
                            <label for="email" class="form-label">E-mail</label>
                        </div>
                        <div class="col-md-3 form-floating">
                            <input type="tel" class="form-control" id="tel" required="required">
                            <label for="tel" class="form-label">Téléphone</label>
                        </div>
                        <div class="col-md-12 form-floating">
                          <select name="categorie" class="form-select">
                            <option>Ordinateur Bureautique & Multimédia</option>
                            <option>Ordinateur Gaming</option>
                            <option>Nettoyage et mise à jour du système / Désinfection</option>
                            <option>Réinstallation et formatage complet (Windows / Mac)</option>
                            <option>Sauvegarde et récupération de données</option>
                            <option>Dépoussiérage complet avec remplacement de la pâte thermique</option>
                            <option>Installation et configuration d'une imprimante / box / ordinateur</option>
                            <option>Installation et configuration réseau / vidéo surveillance</option>
                            <option>Création d'un site Internet</option>
                            <option>Montage de PC Gamer</option>
                            <option>Dépannage de matériel informatique</option>
                            <option>Dépannage à domicile (~20km)</option>
                            <option>Formation bureautique / logiciel à domicile</option>
                            <option>Autres (à préciser)</option>
                          </select>
                          <label for="categorie" class="form-label">Objet du devis</label><br><br>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating">
                                <textarea name="message" class="form-control" style="height: 100px" placeholder="Entrer votre message" required></textarea>
                                <label for="message">Écrivez un message ...</label>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="file">
                                <label class="custom-file-label" for="customFile"></label><br><br>
                            </div>
                        </div>
                        <div class="col-12">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck" required="required">
                            <label class="form-check-label" for="gridCheck">
                            J'accepte les conditions générales d'utilisation
                            </label><br>
                          </div>
                        </div>
                        <div class="col-12">
                          <button type="submit" class="btn btn-primary py-2 px-3 me-3">Envoyez
                                <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                    <i class="fa fa-arrow-right"></i>
                                </div>
                          </button>
                          <p class="please-wait"></p>
			              <p class="error"></p>
			              <p class="success"></p>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>       

<!-- Footer Start -->
<div class="container-fluid bg-dark text-white-50 footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h1 class="fw-bold text-primary mb-4">Nice <span class="text-white">Informatique</span></h1>
                <p>La Solution Binaire à tous vos problèmes</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-square me-1" href="https://www.facebook.com/niceinfo06/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square me-0" href="https://www.instagram.com/nice_informatique_06/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Nous contacter</h5>
                <p><i class="fa fa-map-marker-alt me-3"></i><a href="https://g.page/nice-informatique?share" target="_blank">10 Bis Rue Dante, 06000 Nice</a></p>
                <p><i class="fa fa-phone-alt me-3"></i><a href="tel:+33493285698" target="_blank">(+33) 4 93 28 56 98</a></p>
                <p><i class="fa fa-envelope me-3"></i><a href="mailto:contact@niceinformatique.fr" target="_blank">contact@niceinformatique.fr</a></p>
                <p><i class="fa fa-regular fa-clock me-3"></i>Lundi au Vendredi : 09h-12h30 / 14h00-19h00</p>
                <p><i class="fa fa-regular"></i>Samedi : 09h-12h00 / 15h00-19h00</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Aide & Informations</h5>
                <a class="btn btn-link" href="boutique.html">La boutique</a>
                <a class="btn btn-link" href="contact.php">Contactez-nous</a>
                <a class="btn btn-link" href="mention.html">Mentions légales</a>
                <a class="btn btn-link" href="cgu.html">Conditions générales d'utilisation</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Un Avis Google ?</h5>
                <p>Votre avis Google est le meilleur moyen de nous soutenir, il constitue la vitrine de notre boutique.</p>
                <div class="position-relative col-lg-5" style="max-width: 400px;">
                    <a href="https://g.page/r/CYHckW-i3cthEB0/review" target="_blank">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Cliquez-ici</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a href="#">Nice Informatique</a>, Tous droits réservés.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/parallax/parallax.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
<script src="js/script1.js"></script><!-- link to the javascript file -->
</body>

</html>