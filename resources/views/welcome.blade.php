<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Allo Taxi</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords"
        content="Asap Cab Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta tag Keywords -->
    <!-- Custom-Files -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <!-- Style-CSS -->
    <!-- font-awesome-icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <!-- /Fonts -->
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Khula:300,400,600,700,800" rel="stylesheet">
    <!-- //Fonts -->

    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    @livewireStyles
</head>

<body>


    <div class="modal fade " id="taux" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header btn btn-info text-center font-weight:bold">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Billet de Réservation</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <h1 class="modal-title fs-5  text-center font-weight:bold" id="exampleModalLabel">Billet de Réservation</h1>

                <div class="modal-body text-center btn btn-info">
                    <h5>Depart : <span id="depart"></span></h5>
                    <h5>Destination : <span id="destination"></span></h5>
                    <h5>Heure : <span id="heure"></span></h5>
                    <h5>Prix : <span id="prix"></span></h5>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    


   

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Understood</button>
                </div>
            </div>
        </div>
    </div>



    <!-- mian-content -->
    <div class="main-content" id="home">
        <div class="layer">
            <!-- header -->
            <header>
                <div class="container-fluid px-lg-5">
                    <!-- nav -->
                    <nav class="py-4 d-lg-flex">
                        <div id="logo">
                            <h1> <a href="index.html">Allo Taxi</a></h1>
                            <img src="images/logo1.png" alt="news image" width="100px" height="60">
                        </div>
                        <label for="drop" class="toggle">Menu</label>
                        <input type="checkbox" id="drop" />
                        <ul class="menu mt-2 ml-auto">
                            <li class="active"><a href="index.html">Accueil</a></li>
                            <li><a href="#about" class="scroll">Apropos</a></li>
                            {{-- <li>
                                <!-- First Tier Drop Down -->
                                <label for="drop-2" class="toggle">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span> </label>
                                <a href="#">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                                <input type="checkbox" id="drop-2" />
                                <ul class="inner-ul">
                                    <li><a class="scroll" href="#gallery">Gallery</a></li>
                                    <li><a href="#services" class="scroll">Services</a></li>
                                    <li><a href="#menu" class="scroll">Benifits</a></li>
                                </ul>
                            </li> --}}
                            <li><a href="#testimonials" class="scroll">Reservation</a></li>
                            <li><a href="#contact" class="scroll">Contact</a></li>
                            @guest
                                <li><a href="{{ url('login') }}" class="scroll">Se Connecter</a></li>
                                <li><a href="{{ url('register') }}" class="scroll">Inscription</a></li>
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"
                                        role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </nav>
                    <!-- //nav -->
                </div>
            </header>
            <!-- //header -->
            <div class="container">
                <!-- /banner -->
                <div class="banner-info-w3ls text-left">
                    <h3>Profitez du Voyage Confortable</h3>
                    <div class="read-more">
                        <a href="#about" class="read-more scroll btn">Voir Plus </a>
                    </div>
                </div>
                <div class="row order-info">
                    <div class="middle mt-md-3 col-sm-6 text-left">
                        <ul class="social mb-4">
                            <li><a href="#"><span class="fa fa-facebook icon_facebook"></span></a></li>
                            <li><a href="#"><span class="fa fa-twitter icon_twitter"></span></a></li>
                            <li><a href="#"><span class="fa fa-google-plus icon_google-plus"></span></a></li>
                            <li><a href="#"><span class="fa fa-linkedin icon_linkedin"></span></a></li>
                            <li><a href="#"><span class="fa fa-dribbble icon_dribbble"></span></a></li>
                        </ul>

                    </div>
                    <div class="middle-right mt-md-3 col-sm-6 text-sm-right">
                        <h6><span class="fa fa-phone"></span> Appeler Maintenant : 78 530 67 61</h6>
                    </div>
                </div>
            </div>
            <!-- //banner -->
        </div>
    </div>
    <!--// mian-content -->
    <!-- banner-bottom-w3layouts -->
    <section class="banner-bottom-w3layouts py-5" id="about">
        <div class="container py-md-3">
            <div class="row banner-grids">
                <div class="col-md-6 content-left-bottom text-left pr-lg-5">
                    <h4>A propos de nous</h4>
                    <p class="mt-2 text-left">Chez Allô Taxi Sénégal, notre priorité est la pleine satisfaction du
                        client. <strong class="text-capitalize"> Nous avons commencé nos services depuis 2016 et forts
                            de notre expérience dans le secteur, nous utilisons nos compétences commerciales et notre
                            large réseau pour vous garantir un voyage à la hauteur de vos attentes..</strong> Quel que
                        soit le type de voyage auquel vous pensez, vous pouvez être sûr que nous avons l'expérience
                        nécessaire pour l'organiser en toute simplicité. Quels que soient vos besoins pour votre voyage,
                        nous sommes là pour vous aider. Contactez-nous dès maintenant pour bénéficier d'un déplacement
                        avec les meilleurs chauffeurs du secteur.</p>

                </div>
                <div class="col-md-6 content-right-bottom text-left">
                    <img src="images/a10.jpg" alt="news image" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <!-- //banner-bottom-w3layouts -->
    <!--/ about -->
    <section class="services py-5" id="services">
        <div class="container py-md-5">
            <div class="header pb-lg-3 pb-3 text-center">
                <h4>Nos services</h4>

                <h3 class="tittle mb-lg-3 mb-3">Ce que nous offrons </h3>
            </div>
            <div class="row ab-info mt-lg-4">
                <div class="col-lg-4 ab-content">
                    <div class="ab-content-inner">
                        <div class="ab-info-con">
                            <div class="ab-icon mx-auto"><span class="fa fa-search" aria-hidden="true"></span></div>
                            <h4>Easy Searching</h4>
                            <p>Pellentesque maximus Pellentesque libero justo Nulla uter sollicitudin velit.Morbi
                                viverra lacus commodo felis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 ab-content">
                    <div class="ab-content-inner">
                        <div class="ab-info-con">
                            <div class="ab-icon mx-auto"><span class="fa fa-car" aria-hidden="true"></span></div>
                            <h3>Location privé</h3>
                            <p>Gagnez du temps avec Allo Taxi Sénégal, commandez votre chauffeur privé rapidement.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 ab-content">
                    <div class="ab-content-inner">
                        <div class="ab-info-con">
                            <div class="ab-icon mx-auto"><span class="fa fa-star-o" aria-hidden="true"></span></div>
                            <h4>Taux Inclusifs</h4>
                            <p>Nous proposons plus qu’un service mais une expérience unique de la réservation à la
                                prestation. PARTICULIERS OU PROFESSIONELS, nous allons au-delà de vos attentes en vous
                                proposant un service sur mesure et répondant réellement à vos envies.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="gallery py-5" id="gallery">
        <div class="container py-md-5">
            <div class="header text-center">
                <h3 class="tittle mb-lg-5 mb-3">Nos Tarifs </h3>
            </div>
            <div class="row news-grids mt-md-5 mt-4 text-center">
                <div class="col-md-6 gal-img">
                    <a href="#gal1"><img src="images/3.jpg" alt="Presell" class="img-fluid" width="500px"
                            height="500px"></a>
                    <h5 class="gal-info"><span class="decription">Voyager à bord d'une voiture confortable, climatisée
                            en toute sécurité pour vos trajets Dakar Saint-Louis. Et profitez d'un service de qualité
                            avec des chauffeurs expérimentés et professionnels</span>
                    </h5>
                </div>
                <div class="col-md-6 gal-img">
                    <a href="#gal2"><img src="images/5.jpg" alt="Presell" class="img-fluid" width="500px"
                            height="500px"></a>
                    <h5 class="gal-info"><span class="decription">Voyager à bord d'une voiture confortable, climatisée
                            en toute sécurité pour vos trajets Dakar Saint-Louis. Et profitez d'un service de qualité
                            avec des chauffeurs expérimentés et professionnels</span>
                    </h5>
                </div>
                <div class="col-md-6 gal-img mt-md-5">
                    <a href="#gal3"><img src="images/slide1.jpg" alt="Presell" class="img-fluid"></a>
                    <h5 class="gal-info"> <span class="decription">Pour un voyage paisible, en toute sécurité et à
                            moindre coût contactez nous.

                            Votre satisfaction, notre destination !!</span>
                    </h5>
                </div>

            </div>
        </div>
    </section>
    <!--// about -->
    <!--/mid-sec-->
    {{-- <section class="mid-sec py-5" id="menu"> --}}

    {{-- <div class="container py-lg-5">
            <div class="header pb-lg-3 pb-3 text-center">
                <h3 class="tittle mb-lg-3 mb-3">Nos Tarif</h3>
            </div>
            <div class="row middile-inner-con mt-md-3">
                <div class="col-lg-4 benifit-content">
                    <div class="row">
                        <div class="col-md-8 benifit-left-info text-right">
                            <h4 class="mb-3">Fixed Price</h4>
                            <p>Morbi viverra lacus commodo felis semper lectus feugiat.</p>
                        </div>
                        <div class="col-md-4 benifit-icon-content">
                            <div class="benifit-icon">
                                <span class="fa fa-tags" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row my-4">
                        <div class="col-md-8 benifit-left-info text-right">
                            <h4 class="mb-3">No Fee</h4>
                            <p>Morbi viverra lacus commodo felis semper lectus feugiat.</p>
                        </div>
                        <div class="col-md-4 benifit-icon-content">
                            <div class="benifit-icon">
                                <span class="fa fa-money" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 benifit-left-info text-right">
                            <h4 class="mb-3">100% Pleasure</h4>
                            <p>Morbi viverra lacus commodo felis semper lectus feugiat.</p>
                        </div>
                        <div class="col-md-4 benifit-icon-content">
                            <div class="benifit-icon">
                                <span class="fa fa-unlock-alt" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 benifit-content">
                    <img src="images/benifits.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-lg-4 benifit-content">
                    <div class="row">
                        <div class="col-md-4 benifit-icon-content">
                            <div class="benifit-icon text-md-center mx-auto">
                                <span class="fa fa-globe" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="col-md-8 benifit-left-info text-left">
                            <h4 class="mb-3">Nationwide</h4>
                            <p>Morbi viverra lacus commodo felis semperlectus feugiat.</p>
                        </div>
                    </div>

                    <div class="row  my-4">
                        <div class="col-md-4 benifit-icon-content">
                            <div class="benifit-icon text-md-center mx-auto">
                                <span class="fa fa-refresh" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="col-md-8 benifit-left-info text-left">
                            <h4 class="mb-3">Quick Ride</h4>
                            <p>Morbi viverra lacus commodo felis semper lectus feugiat.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 benifit-icon-content">
                            <div class="benifit-icon text-md-center mx-auto">
                                <span class="fa fa-shield" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="col-md-8 benifit-left-info text-left">
                            <h4 class="mb-3">Staff Garanty</h4>
                            <p>Morbi viverra lacus commodo felis semper lectus feugiat.</p>
                        </div>
                    </div>
                </div>
            </div>


        </div> --}}
    {{-- </section> --}}
    <!--//mid-sec-->

    <!--/ banner-bottom-w3layouts-->
    {{-- <section class="app-serve pt-5">
        <div class="container-fluid pt-lg-5">
            <div class="ab-grids row text-left">
                <div class="col-lg-6 pl-0 pr-lg-5 mt-lg-5 app-mob">
                    <img src="images/app1.png" class="img-fluid" alt="mobile-image">
                </div>
                <div class="col-lg-6 mb-lg-5">

                    <h3 class="tittle mb-lg-5 mb-3">Get a Mobile Application</h3>

                    <div class="feature-grids text-left mt-5 p-lg-5">
                        <div class="bottom-gd my-lg-5">
                            <span class="fa fa-database" aria-hidden="true"></span>
                            <h3 class="my-4">Easily manage your works</h3>
                            <p>Lorem Ipsum has been the industry's standard since the 1500sInteger sit amet mattis quam,
                                sit amet ultricies velit. Praesent ullamcorper dui turpis.</p>
                        </div>
                        <div class="bottom-gd my-lg-5">
                            <span class="fa fa-money" aria-hidden="true"></span>
                            <h3 class="my-4">Get payments smoothly.</h3>
                            <p>Lorem Ipsum has been the industry's standard since the 1500sInteger sit amet mattis quam,
                                sit amet ultricies velit. Praesent ullamcorper dui turpis.</p>
                        </div>
                        <ul class="list-unstyled apps-lists">
                            <li>
                                <a href="#" class="btn"><span class="fa fa-apple mr-2"
                                        aria-hidden="true"></span>App Store</a>
                            </li>
                            <li class="ml-2">
                                <a href="#" class="btn"><span class="fa fa-android mr-2"
                                        aria-hidden="true"></span>Android</a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--// banner-bottom-w3layouts-->

    <!-- Gallery -->

    <section class="gallery py-5" id="team">
        <div class="container py-md-5">
            <div class="header text-center">
                <h3 class="tittle mb-lg-5 mb-3">Nos Chauffeurs</h3>
            </div>
            @guest
                <div class="card">
                    <div class="card-body">
                        <h2>Connectez-vous pour afficher le contenu</h2>
                    </div>
                </div>
            @else
                <div class="row team-bottom">
                    @foreach ($chauffeurs as $chauffeur)
                        <div class="col-lg-3 col-sm-6 team-grid text-center">
                            <img src="{{ asset('/uploads/chauffeur/' . $chauffeur->image) }}" class="img-fluid"
                                alt="">
                            <div class="caption">
                                <h4>{{ $chauffeur->prenom }}</h4>
                                <h4>{{ $chauffeur->nom }}</h4>
                                <h4>{{ $chauffeur->tel }}</h4>
                                <ul class="list-unstyled w3pvt-icons">
                                    <li>
                                        <a href="#">
                                            <span class="fa fa-facebook-f"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="fa fa-twitter"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="fa fa-dribbble"></span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    @endforeach
                @endguest
                {{-- <div class="col-lg-3 col-sm-6 team-grid mt-sm-0 mt-5 text-center">
                    <img src="images/3.jpg" class="img-fluid" alt="">
                    <div class="caption">
                        <h4>Estel Diouf</h4>
                        <ul class="list-unstyled w3pvt-icons">
                            <li>
                                <a href="#">
                                    <span class="fa fa-facebook-f"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="fa fa-twitter"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="fa fa-dribbble"></span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div> --}}
                {{-- <div class="col-lg-3 col-sm-6 team-grid mt-lg-0 mt-5 text-center">
                    <img src="images/4.jpg" class="img-fluid" alt="">
                    <div class="caption">
                        <h4>Mohamed Camara</h4>
                        <ul class="list-unstyled w3pvt-icons">
                            <li>
                                <a href="#">
                                    <span class="fa fa-facebook-f"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="fa fa-twitter"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="fa fa-dribbble"></span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 team-grid  mt-lg-0 mt-5 text-center">
                    <img src="images/images.jpg" class="img-fluid" alt="">
                    <div class="caption">
                        <h4>Malick Ndao</h4>
                        <ul class="list-unstyled w3pvt-icons">
                            <li>
                                <a href="#">
                                    <span class="fa fa-facebook-f"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="fa fa-twitter"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="fa fa-dribbble"></span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <!--// gallery -->
    <!--/order-now-->
    <section class="order-sec pb-5 pt-md-0 pt-5">
        <div class="container py-lg-3">
            <div class="test-info text-center">
                <h3 class="tittle order">
                    <span>Appelez-nous pour résever un Taxi</span>L'Opérateur rappellera immédiatement et signalera le
                    coût du voyage
                </h3>
                <h4 class="tittle mt-3">773456789
                </h4>

                <div class="read-more mx-auto m-0 text-center">
                    <a href="#contact" class="read-more scroll btn">Réservez Maintenant</a>
                </div>
            </div>
        </div>
    </section>
    <!--//order-now-->
    <!-- portfolio -->
    <section class="gallery py-5" id="gallery">
        <div class="container py-md-5">
            <div class="header text-center">
                <h3 class="tittle mb-lg-5 mb-3">Nos Lignes </h3>
            </div>
            @guest

                <div class="card">
                    <div class="card-body">
                        <h2>Connectez-vous pour afficher le contenu</h2>
                    </div>
                </div>
            @else
                <div class="row news-grids mt-md-5 mt-4 text-center">
                    @foreach ($lignes as $ligne)
                        <div class="col-md-6 gal-img">
                            <div class="card">
                                <a href="#gal1"><img src="images/1.jpg" alt="Presell" class="img-fluid"
                                        width="500px" height="500px"></a>
                                <div class="card">
                                    <h5 class="gal-info">
                                        Depart : {{ $ligne->depart }} <br>
                                        Destination : {{ $ligne->destination }} <br>
                                        Heur : {{ $ligne->heure }} <br>
                                        Prix : {{ $ligne->prix }}
                                    </h5>
                                    <div class="button-asap-w3pvts mt-0 text-lg-right text-center">
                                        <a href="#reserver" class="btn btn-sm thar-four scroll btn-sm-4"
                                            data-bs-toggle="modal" data-bs-target="#taux"
                                            data-bs-id="{{ $ligne->id }}">Réserver</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                @endguest


                {{-- <div class="col-md-6 gal-img">
                    <a href="#gal2"><img src="images/1.jpg" alt="Presell" class="img-fluid" width="500px" height="500px"></a>
                    <h5 class="gal-info">Airports<span class="decription">Website</span>
                    </h5>
                </div>
                <div class="col-md-6 gal-img mt-md-5">
                    <a href="#gal3"><img src="images/slide1.jpg" alt="Presell" class="img-fluid" ></a>
                    <h5 class="gal-info">Hospitals <span class="decription">Website</span>
                    </h5>
                </div>
                <div class="col-md-6 gal-img">
                    <a href="#gal4"><img src="images/a9.png" alt="Presell" class="img-fluid" width="500px" height="500px"></a>
                    <h5 class="gal-info">Wedding Parties <span class="decription">Website</span>
                    </h5>
                </div> --}}

            </div>
        </div>
    </section>
    <!-- popup-->
    <div id="gal1" class="pop-overlay">
        <div class="popup">
            <img src="images/slide1.jpg" alt="Popup Image" class="img-fluid" />
            <p class="mt-4">Pour tous vos voyages, optez pour un gain de temps et d'argent précieux grace à nos
                services.
            </p>
            <a class="close" href="#gallery">&times;</a>
        </div>
    </div>
    <!-- //popup -->
    <!-- popup-->
    <div id="gal2" class="pop-overlay">
        <div class="popup">
            <img src="images/a11.jfif" alt="Popup Image" class="img-fluid" />
            <p class="mt-4">Pour tous vos voyages, optez pour un gain de temps et d'argent précieux grace à nos
                services.
            </p>
            <a class="close" href="#gallery">&times;</a>
        </div>
    </div>
    <!-- //popup -->
    <!-- popup-->
    <div id="gal3" class="pop-overlay">
        <div class="popup">
            <img src="images/a3.jfif" alt="Popup Image" class="img-fluid" />
            <p class="mt-4">Pour tous vos voyages, optez pour un gain de temps et d'argent précieux grace à nos
                services.
            </p>
            <a class="close" href="#gallery">&times;</a>
        </div>
    </div>
    <!-- //popup3 -->
    <!-- popup-->
    <div id="gal4" class="pop-overlay">
        <div class="popup">
            <img src="images/g4.jpg" alt="Popup Image" class="img-fluid" />
            <p class="mt-4">Pour tous vos voyages, optez pour un gain de temps et d'argent précieux grace à nos
                services.
                <a class="close" href="#gallery">&times;</a>

        </div>
    </div>
    <!-- //popup -->
    <!--//portfolio-->

    <!--/testimonials-->
    {{-- <div class="contact-form mx-auto text-left">
        <form name="contactform" id="contactform1" method="post" action="#">
            <div class="row">
                <div class="col-lg-4 con-gd">
                    <div class="form-group">
                        <label>Depart *</label>
                        <input type="text" class="form-control" id="name" placeholder=""
                            name="depart" required="">
                    </div>
                </div>
                <div class="col-lg-4 con-gd">
                    <div class="form-group">
                        <label>Destination *</label>
                        <input type="destination" class="form-control" id="email" placeholder=""
                            name="destination" required="">
                    </div>
                </div>
                <div class="col-lg-4 con-gd">
                    <div class="form-group">
                        <label>Heure *</label>
                        <input type="heure" class="form-control" id="email" placeholder=""
                            name="heure" required="">
                    </div>
                </div>
                <div class="col-lg-4 con-gd">
                    <div class="form-group">
                        <label>Prix *</label>
                        <input type="prix" class="form-control" id="email" placeholder=""
                            name="prix" required="">
                    </div>
                </div> --}}


    {{-- <button type="submit" class="btn btn-default">Réserver</button> --}}

    </div>

    </div>

    </form>
    </div>
    {{-- <section class="testimonials" id="testimonials">
        <div class="layer test">
            <div class="container">
                <div class="test-info text-center">
                    <h3 class="my-md-2 my-3">Dakar-Senegal</h3>

                    <ul class="list-unstyled w3pvt-icons clients mb-md-4">
                        <li>
                            <a href="#">
                                <span class="fa fa-star"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-star"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-star"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-star-half-o"></span>
                            </a>
                        </li>
                    </ul>
                    <p><span class="fa fa-quote-left"></span> Lorem Ipsum has been the industry's standard since the
                        1500s. Praesent ullamcorper dui turpis.Nulla pellentesque mi non laoreet eleifend. Integer
                        porttitor mollisar lorem, at molestie arcu pulvinar ut. <span class="fa fa-quote-right"></span>
                    </p>

                </div>
            </div>
        </div>
    </section> --}}
    <!--//testimonials-->

    <!-- contact -->
    <section class="contact py-5" id="contact">
        <div class="container pb-md-5">
            <div class="header py-lg-5 pb-3 text-center">
                <h3 class="tittle mb-lg-5 mb-3">Avez vous des Questions?</h3>
            </div>

            <div class="contact-form mx-auto text-left">
                <form name="contactform" id="contactform1" method="post" action="#">
                    <div class="row">
                        <div class="col-lg-4 con-gd">
                            <div class="form-group">
                                <label>Nom *</label>
                                <input type="text" class="form-control" id="name" placeholder=""
                                    name="name" required="">
                            </div>
                        </div>
                        <div class="col-lg-4 con-gd">
                            <div class="form-group">
                                <label>Email *</label>
                                <input type="email" class="form-control" id="email" placeholder=""
                                    name="email" required="">
                            </div>
                        </div>
                        <div class="col-lg-4 contact-page">
                            <div class="form-group">
                                <label>Envoyer *</label>
                                <button type="submit" class="btn btn-default">Envoyer</button>
                            </div>
                        </div>

                    </div>

                </form>
            </div>
            <ul class="list-unstyled row text-left mb-lg-5 mb-3">
                <li class="col-lg-4 adress-info">
                    <div class="row">
                        <div class="col-md-3 text-lg-center adress-icon">
                            <span class="fa fa-map-marker"></span>
                        </div>
                        <div class="col-md-9 text-left">
                            <h6>Location</h6>
                            <p>Notre campagny est:
                                <br>Allo Taxi
                            </p>
                        </div>
                    </div>
                </li>

                <li class="col-lg-4 adress-info">
                    <div class="row">
                        <div class="col-md-3 text-lg-center adress-icon">
                            <span class="fa fa-envelope-open-o"></span>
                        </div>
                        <div class="col-md-9 text-left">
                            <h6>Email</h6>
                            <a href="mailto:info@example.com">mail@example.com</a>
                            <br>
                            <a href="mailto:info@example.com">mail2@example.com</a>
                        </div>
                    </div>
                </li>
                <li class="col-lg-4 adress-info">
                    <div class="row">
                        <div class="col-md-3 text-lg-center adress-icon">
                            <span class="fa fa-mobile"></span>
                        </div>
                        <div class="col-md-9 text-left">
                            <h6>Numero Telephone</h6>
                            <p>+ 221 78 530 67 61</p>
                            <p>+ 221 77 522 85 02</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

    </section>
    <!-- //contact -->
    <!-- footer -->
    <footer>
        <div class="asap-lavi-footer-sec py-5">
            <div class="container py-lg-3">
                <div class="row">
                    <div class="col-lg-5 asap-w3pvt-footer-logo">
                        <!-- footer logo -->
                        <a class="navbar-brand" href="index.html">Allo taxi
                        </a>
                        <!-- //footer logo -->
                    </div>
                    <!-- button -->
                    <div class="col-lg-5 asap-w3pvt-footer text-lg-right text-center mt-3">
                        <ul class="list-unstyled footer-nav-lavi">
                            <li>
                                <a href="index.html" class="scroll active">Accueil</a>
                            </li>
                            <li>
                                <a class="scroll" href="#about">A propos de nous</a>
                            </li>
                            <li>
                                <a class="scroll" href="#menu">Benefices</a>
                            </li>
                            <li>
                                <a class=" scroll" href="#gallery">Locations</a>
                            </li>
                        </ul>
                    </div>
                    <!-- //button -->
                    <div class="col-lg-2 mt-lg-0 mt-3">
                        <div class="button-asap-w3pvts mt-0 text-lg-right text-center">
                            <a href="#contact" class="btn btn-sm thar-four scroll btn-sm-4">Contactez-nous</a>
                        </div>
                    </div>
                </div>
                <div class="row copy-right-sec mt-4 pt-lg-4 pt-3 text-lg-left text-center">
                    <!-- copyright -->
                    <p class="col-lg-8 copy-right-grids mt-lg-1">© Copyright ©2023 Tous droits réservés.
                        <a href="http://w3layouts.com/"> W3layouts </a>
                    </p>
                    <!-- //copyright -->
                    <!-- social icons -->
                    <div class="col-lg-4 asap-lavi-ocial-icons text-lg-right text-center mt-lg-0 mt-3">
                        <ul class="list-unstyled w3pvt-icons">
                            <li>
                                <a href="#">
                                    <span class="fa fa-facebook-f"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="fa fa-twitter"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="fa fa-dribbble"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="fa fa-vk"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- //social icons -->
                </div>
                <div class="move-top text-right"><a href="#home" class="move-top"> <span
                            class="fa fa-angle-up  mb-3" aria-hidden="true"></span></a></div>
            </div>
        </div>
    </footer>

    <script>
        var myModalEl = document.getElementById('taux')
        myModalEl.addEventListener('show.bs.modal', function(event) {
            var button = event.relatedTarget
            var ligne_id = button.getAttribute('data-bs-id')
            var modalDepart = myModalEl.querySelector('#depart')
            var modalDestination = myModalEl.querySelector('#destination')
            var modalHeure = myModalEl.querySelector('#heure')
            var modalPrix = myModalEl.querySelector('#prix')

            // Récupérer les informations de la ligne correspondante
            var ligne = {!! json_encode($lignes) !!}.find(l => l.id == ligne_id)

            // Afficher les informations dans le modal
            modalDepart.textContent = ligne.depart
            modalDestination.textContent = ligne.destination
            modalHeure.textContent = ligne.heure
            modalPrix.textContent = ligne.prix
        })
    </script>



    <!-- //footer -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    @livewireScripts
</body>

</html>
