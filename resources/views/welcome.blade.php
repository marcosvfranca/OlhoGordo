<!DOCTYPE html>
<html class="no-js" lang="pt-br">
<head>
    <!-- Mobile Specific Meta -->
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <!-- Favicon-->
    <link href="{{ asset('template/imagens/favicon.png') }}" rel="shortcut icon">
    <!-- Author Meta -->
    <meta content="OlhoGordo" name="author">
    <!-- Meta Description -->
    <meta content="" name="description">
    <!-- Meta Keyword -->
    <meta content="" name="keywords">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Olho Gordo</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
    CSS
    ============================================= -->
    <link href="{{ asset('template/css/linearicons.css') }}" rel="stylesheet">
    <link href="{{ asset('template/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('template/css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('template/css/jquery-ui.css') }}" rel="stylesheet">
    <link href="{{ asset('template/css/nice-select.css') }}" rel="stylesheet">
    <link href="{{ asset('template/css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('template/css/main.css') }}" rel="stylesheet">
    <!-- Facebook Pixel Code -->
    <script>
        !function (f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function () {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '280317139852970');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=280317139852970&ev=PageView&noscript=1"
        /></noscript>
    <!-- End Facebook Pixel Code -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-172178036-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-172178036-1');
        gtag('config', 'AW-615757504');
    </script>
    <style>
        .pText {
            margin-bottom: 0;
        }
    </style>
</head>
<body>
<header id="header">
    <div class="header-top">
        <div class="container">
            <div class="row justify-content-center">
                <div id="logo">
                    <a href="{{ env('APP_URL') }}"><img alt=""
                                                        src="{{ asset('template/imagens/logo_91px_largura.png') }}"
                                                        title="Olho Gordo"/></a>
                </div>
            </div>
        </div>
    </div>
    {{--    <div class="container main-menu">--}}
    {{--        <div class="row align-items-center justify-content-center d-flex">--}}
    {{--            <nav id="nav-menu-container">--}}
    {{--                <ul class="nav-menu">--}}
    {{--                    <li><a href="#home">Home</a></li>--}}
    {{--                    <li><a href="#sobre">sobre</a></li>--}}
    {{--                    <li><a href="#galeria">Galeria</a></li>--}}
    {{--                    <li><a href="#contato">Contato</a></li>--}}
    {{--                </ul>--}}
    {{--            </nav><!-- #nav-menu-container -->--}}
    {{--        </div>--}}
    {{--    </div>--}}
</header><!-- #header -->

<!-- start banner Area -->
<section class="banner-area" id="home">
    <div class="container">
        <div class="row fullscreen align-items-center">
            <div class="col-lg-12 text-uppercase text-center">
                <style>
                    .imgPerson {
                        padding-top: 15px;
                        max-width: 80%;
                        height: 500px;
                    }
                    .imgQuemSomos {
                        max-width: 500px;
                        display: block;
                        margin-left: auto;
                        margin-right: auto;
                    }
                    .imgTrabalhou {
                        max-width: 250px;
                        display: block;
                        margin: auto;
                        vertical-align: middle;
                    }
                    .textQuemSomos {
                        margin: 25px;
                        font-weight: 600;
                        font-size: 25px;
                        text-align: center;
                        line-height: 2rem;
                    }
                    .section-og {
                        background-color: #000000 !important; color: #fdbc15;padding-top: 25px; padding-bottom: 25px;
                    }
                    @media (max-width: 480px) {
                        .imgPerson {
                            height: 400px;
                        }
                        .imgTrabalhou {
                            max-width: 100px;
                        }
                    }
                    @media (max-width: 767px) {
                        .imgPerson {
                            height: 400px;
                        }
                    }
                    @media (min-width: 768px) and (max-width: 979px) {
                        .imgPerson {
                            height: 400px;
                        }
                    }
                </style>
                <img alt="Olho Gordo" title="Olho Gordo" src="../template/imagens/yellow_square.png" class="imgPerson">
                <div>
                    <img alt="Olho Gordo" id="arrowEsc" title="Olho Gordo" src="../template/imagens/arrows.png" width="30" style="bottom: 10px;position: fixed;display:block;left: 50%;margin-right: -50%;">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<!-- Start home-about Area -->
<section class="home-about-area section-gap section-og" id="sobre">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12">
                <img src="{{ asset('template/imagens/QUEMSOMOS.png') }}" alt="Olho Gordo" class="imgQuemSomos">
                <p class="textQuemSomos">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
            <div class="col-12 mt-3">
                <img src="{{ asset('template/imagens/FOTOGRAFIA.png') }}" alt="Olho Gordo" class="imgQuemSomos">
                <p class="textQuemSomos">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            </div>
            <div class="col-lg-12 mt-3">
                <img src="{{ asset('template/imagens/FILMAGENS.png') }}" alt="Olho Gordo" class="imgQuemSomos">
                <p class="textQuemSomos">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            </div>
            <div class="col-lg-12 mt-3">
                <div class="embed-responsive embed-responsive-21by9" id="videoYt">
{{--                    <iframe class="embed-responsive-item" src="https://www.youtube.com/watch?v=_9OBFK_fZG0" allowfullscreen></iframe>--}}
{{--                    <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/_9OBFK_fZG0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}
                </div>
            </div>
            <div class="col-12 mt-5">
                <img src="{{ asset('template/imagens/GESTAOREDESSOCIAIS.png') }}" alt="Olho Gordo" class="imgQuemSomos">
                <p class="textQuemSomos">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            </div>
            <div class="col-12 mt-5">
                <img src="{{ asset('template/imagens/QUEMJATRABALHOUCOMAGENTE.png') }}" alt="Olho Gordo" class="imgQuemSomos">
                <div class="row">
                    <div class="col-4">
                        <img src="{{ asset('template/imagens/NEGODONN.png') }}" alt="Nego Donn" class="imgTrabalhou">
                    </div>
                    <div class="col-4">
                        <img src="{{ asset('template/imagens/LAPIZZA.png') }}" alt="La Pizza" class="imgTrabalhou">
                    </div>
                    <div class="col-4">
                        <img src="{{ asset('template/imagens/GERUMIM.png') }}" alt="Gerumim" class="imgTrabalhou">
                    </div>
                    <div class="col-4">
                        <img src="{{ asset('template/imagens/DANMACARRONE.png') }}" alt="Dan Macarrone" class="imgTrabalhou">
                    </div>
                    <div class="col-4">
                        <img src="{{ asset('template/imagens/THEROSE.png') }}" alt="The Rose" class="imgTrabalhou">
                    </div>
                    <div class="col-4">
                        <img src="{{ asset('template/imagens/CHEIROVERDE.png') }}" alt="Cheiro Verde" class="imgTrabalhou">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{--<!-- Start menu-area Area -->--}}
{{--<section class="menu-area section-gap" id="menu">--}}
{{--    <div class="container">--}}
{{--        <div class="row d-flex justify-content-center">--}}
{{--            <div class="menu-content pb-70 col-lg-8">--}}
{{--                <div class="title text-center">--}}
{{--                    <h1 class="mb-10">What kind of Foods we serve for you</h1>--}}
{{--                    <p>Who are in extremely love with eco friendly system.</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <ul class="filter-wrap filters col-lg-12 no-padding">--}}
{{--            <li class="active" data-filter="*">All Menu</li>--}}
{{--            <li data-filter=".breakfast">Breakfast</li>--}}
{{--            <li data-filter=".lunch">Lunch</li>--}}
{{--            <li data-filter=".dinner">Dinner</li>--}}
{{--            <li data-filter=".budget-meal">Budget Meal</li>--}}
{{--            <li data-filter=".buffet">Buffet</li>--}}
{{--        </ul>--}}

{{--        <div class="filters-content">--}}
{{--            <div class="row grid">--}}
{{--                <div class="col-md-6 all breakfast">--}}
{{--                    <div class="single-menu">--}}
{{--                        <div class="title-wrap d-flex justify-content-between">--}}
{{--                            <h4>Cappuccion</h4>--}}
{{--                            <h4 class="price">$49</h4>--}}
{{--                        </div>--}}
{{--                        <p>--}}
{{--                            Usage of the Internet is becoming more common due to rapid advance.--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-6 all dinner">--}}
{{--                    <div class="single-menu">--}}
{{--                        <div class="title-wrap d-flex justify-content-between">--}}
{{--                            <h4>Americano</h4>--}}
{{--                            <h4 class="price">$49</h4>--}}
{{--                        </div>--}}
{{--                        <p>--}}
{{--                            Usage of the Internet is becoming more common due to rapid advance.--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-6 all budget-meal">--}}
{{--                    <div class="single-menu">--}}
{{--                        <div class="title-wrap d-flex justify-content-between">--}}
{{--                            <h4>Macchiato</h4>--}}
{{--                            <h4 class="price">$49</h4>--}}
{{--                        </div>--}}
{{--                        <p>--}}
{{--                            Usage of the Internet is becoming more common due to rapid advance.--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-6 all breakfast">--}}
{{--                    <div class="single-menu">--}}
{{--                        <div class="title-wrap d-flex justify-content-between">--}}
{{--                            <h4>Mocha</h4>--}}
{{--                            <h4 class="price">$49</h4>--}}
{{--                        </div>--}}
{{--                        <p>--}}
{{--                            Usage of the Internet is becoming more common due to rapid advance.--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-6 all lunch">--}}
{{--                    <div class="single-menu">--}}
{{--                        <div class="title-wrap d-flex justify-content-between">--}}
{{--                            <h4>Piccolo Latte</h4>--}}
{{--                            <h4 class="price">$49</h4>--}}
{{--                        </div>--}}
{{--                        <p>--}}
{{--                            Usage of the Internet is becoming more common due to rapid advance.--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-6 all buffet">--}}
{{--                    <div class="single-menu">--}}
{{--                        <div class="title-wrap d-flex justify-content-between">--}}
{{--                            <h4>Ristretto</h4>--}}
{{--                            <h4 class="price">$49</h4>--}}
{{--                        </div>--}}
{{--                        <p>--}}
{{--                            Usage of the Internet is becoming more common due to rapid advance.--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--    </div>--}}
{{--</section>--}}
{{--<!-- End menu-area Area -->--}}

<!-- Start gallery-area Area -->
{{--<section class="gallery-area section-gap section-og" id="galeria">--}}
{{--    <div class="container">--}}
{{--        <div class="row d-flex justify-content-center">--}}
{{--            <div class="menu-content col-lg-8">--}}
{{--                <div class="title text-center">--}}
{{--                    <h1 class="mb-10" style="color: #fdbc15;">Quem nós já ajudamos</h1>--}}
{{--                    --}}{{--                    <p>Empresas que já investiram na sua imagem</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

        {{--        <ul class="filter-wrap filters col-lg-12 no-padding">--}}
        {{--            <li class="active" data-filter="*">All Menu</li>--}}
        {{--            <li data-filter=".breakfast">Breakfast</li>--}}
        {{--            <li data-filter=".lunch">Lunch</li>--}}
        {{--            <li data-filter=".dinner">Dinner</li>--}}
        {{--            <li data-filter=".budget-meal">Budget Meal</li>--}}
        {{--            <li data-filter=".buffet">Buffet</li>--}}
        {{--        </ul>--}}


{{--        <div class="filters-content">--}}
{{--            <div class="row grid">--}}
{{--                @foreach($imagens as $imagem)--}}
{{--                    <div class="col-lg-4 col-md-6 col-sm-6">--}}
{{--                        <div class="single-service text-center">--}}
{{--                            <div class="thumb">--}}
{{--                                <img alt="Olho Gordo" class="img-fluid" src="{{ asset($imagem['caminho']) }}">--}}
{{--                            </div>--}}
{{--                            <a>--}}
{{--                                <h4 style="color: #fdbc15;">{{ $imagem['titulo'] }}</h4>--}}
{{--                            </a>--}}
{{--                            <p>{{ $imagem['texto'] }}</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                @endforeach--}}
                {{--                <div class="col-lg-4 col-md-6 col-sm-6 all dinner">--}}
                {{--                    <div class="single-gallery">--}}
                {{--                        <img alt="" class="img-fluid" src="{{ ('template/img/g2.jpg') }}">--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--                <div class="col-lg-4 col-md-6 col-sm-6 all budget-meal">--}}
                {{--                    <div class="single-gallery">--}}
                {{--                        <img alt="" class="img-fluid" src="{{ ('template/img/g3.jpg') }}">--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--                <div class="col-lg-4 col-md-6 col-sm-6 all breakfast">--}}
                {{--                    <div class="single-gallery">--}}
                {{--                        <img alt="" class="img-fluid" src="{{ ('template/img/g4.jpg') }}">--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--                <div class="col-lg-4 col-md-6 col-sm-6 all lunch">--}}
                {{--                    <div class="single-gallery">--}}
                {{--                        <img alt="" class="img-fluid" src="{{ ('template/img/g5.jpg') }}">--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--                <div class="col-lg-4 col-md-6 col-sm-6 all buffet">--}}
                {{--                    <div class="single-gallery">--}}
                {{--                        <img alt="" class="img-fluid" src="{{ ('template/img/g6.jpg') }}">--}}
                {{--                    </div>--}}
                {{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--    </div>--}}
{{--</section>--}}
<!-- End gallery-area Area -->

<!-- Start review Area -->
{{--<section class="review-area section-gap">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="active-review-carusel">--}}
{{--                <div class="single-review">--}}
{{--                    <img alt="" src="img/user.png">--}}
{{--                    <h4>Hulda Sutton</h4>--}}
{{--                    <div class="star">--}}
{{--                        <span class="fa fa-star checked"></span>--}}
{{--                        <span class="fa fa-star checked"></span>--}}
{{--                        <span class="fa fa-star checked"></span>--}}
{{--                        <span class="fa fa-star checked"></span>--}}
{{--                        <span class="fa fa-star"></span>--}}
{{--                    </div>--}}
{{--                    <p>--}}
{{--                        “Accessories Here you can find the best computer accessory for your laptop, monitor, printer,--}}
{{--                        scanner, speaker. Here you can find the best computer accessory for your laptop, monitor,--}}
{{--                        printer, scanner, speaker.”--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--                <div class="single-review">--}}
{{--                    <img alt="" src="img/user.png">--}}
{{--                    <h4>Hulda Sutton</h4>--}}
{{--                    <div class="star">--}}
{{--                        <span class="fa fa-star checked"></span>--}}
{{--                        <span class="fa fa-star checked"></span>--}}
{{--                        <span class="fa fa-star checked"></span>--}}
{{--                        <span class="fa fa-star checked"></span>--}}
{{--                        <span class="fa fa-star"></span>--}}
{{--                    </div>--}}
{{--                    <p>--}}
{{--                        “Accessories Here you can find the best computer accessory for your laptop, monitor, printer,--}}
{{--                        scanner, speaker. Here you can find the best computer accessory for your laptop, monitor,--}}
{{--                        printer, scanner, speaker.”--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--                <div class="single-review">--}}
{{--                    <img alt="" src="img/user.png">--}}
{{--                    <h4>Hulda Sutton</h4>--}}
{{--                    <div class="star">--}}
{{--                        <span class="fa fa-star checked"></span>--}}
{{--                        <span class="fa fa-star checked"></span>--}}
{{--                        <span class="fa fa-star checked"></span>--}}
{{--                        <span class="fa fa-star checked"></span>--}}
{{--                        <span class="fa fa-star"></span>--}}
{{--                    </div>--}}
{{--                    <p>--}}
{{--                        “Accessories Here you can find the best computer accessory for your laptop, monitor, printer,--}}
{{--                        scanner, speaker. Here you can find the best computer accessory for your laptop, monitor,--}}
{{--                        printer, scanner, speaker.”--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--                <div class="single-review">--}}
{{--                    <img alt="" src="img/user.png">--}}
{{--                    <h4>Hulda Sutton</h4>--}}
{{--                    <div class="star">--}}
{{--                        <span class="fa fa-star checked"></span>--}}
{{--                        <span class="fa fa-star checked"></span>--}}
{{--                        <span class="fa fa-star checked"></span>--}}
{{--                        <span class="fa fa-star checked"></span>--}}
{{--                        <span class="fa fa-star"></span>--}}
{{--                    </div>--}}
{{--                    <p>--}}
{{--                        “Accessories Here you can find the best computer accessory for your laptop, monitor, printer,--}}
{{--                        scanner, speaker. Here you can find the best computer accessory for your laptop, monitor,--}}
{{--                        printer, scanner, speaker.”--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<!-- End review Area -->
{{--posts do instagram ficarão aqui--}}
<!-- Start blog Area -->
{{--<section class="blog-area section-gap" id="blog">--}}
{{--    <div class="container">--}}
{{--        <div class="row d-flex justify-content-center">--}}
{{--            <div class="menu-content pb-70 col-lg-8">--}}
{{--                <div class="title text-center">--}}
{{--                    <h1 class="mb-10">Nosso Instagram <i class="fa fa-instagram"></i></h1>--}}
{{--                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut--}}
{{--                        labore et dolore magna aliqua.</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row" id="instafeed">--}}
{{--            <div class="col-12">--}}
{{--                <h3 class="text-center"><i class="fa fa-circle-o-notch fa-spin fa-fw"></i> Carregando feed do instagram...</h3>--}}
{{--            </div>--}}
{{--            <div id="instafeed"></div>--}}
{{--            <div class="col-lg-3 col-md-6 col-sm-6 single-blog">--}}
{{--                <div class="thumb">--}}
{{--                    <img alt="" class="img-fluid" src="{{ asset('template/img/b1.jpg') }}">--}}
{{--                </div>--}}
{{--                <p class="date">10 Jan 2018</p>--}}
{{--                <a href="blog-single.html"><h4>Cooking Perfect Fried Rice--}}
{{--                        in minutes</h4></a>--}}
{{--                <p>--}}
{{--                    inappropriate behavior ipsum dolor sit amet, consectetur.--}}
{{--                </p>--}}
{{--                <div class="meta-bottom d-flex justify-content-between">--}}
{{--                    <p><span class="lnr lnr-heart"></span> 15 Likes</p>--}}
{{--                    <p><span class="lnr lnr-bubble"></span> 02 Comments</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<!-- End blog Area -->
<!-- Start reservation Area -->
{{--<section class="reservation-area section-gap relative" id="contato">--}}
{{--    <div class="overlay overlay-bg"></div>--}}
{{--    <div class="container">--}}
{{--        <div class="row justify-content-between align-items-center">--}}
{{--            <div class="col-lg-6 reservation-left">--}}
{{--                <h1 class="text-white">Entre em contato conosco</h1>--}}
{{--                <p class="text-white pt-20">Preencha o formulário ao lado, retornaremos o contato o mais rápido--}}
{{--                    possível. Ou, se preferir nos chame no WhatsApp, logo abaixo, para conversarmos.</p>--}}
{{--            </div>--}}
{{--            <div class="col-lg-5 reservation-right">--}}
{{--                <style>--}}
{{--                    .invalid-feedback {--}}
{{--                        color: #fdbc15 !important;--}}
{{--                    }--}}
{{--                    .reservation-area .reservation-right .form-wrap {--}}
{{--                        background: #000000 !important;--}}
{{--                        padding: 75px 40px;--}}
{{--                    }--}}
{{--                    .footer-bottom-wrap {--}}
{{--                        background: #000;--}}
{{--                    }--}}
{{--                </style>--}}
{{--                <form action="{{ route('contato') }}" method="POST" class="form-wrap text-center" id="formContato">--}}
{{--                    {{ csrf_field() }}--}}
{{--                    <h2 style="margin-top: -30px;color: #fdbc15;" class="mb-3">Contato</h2>--}}
{{--                    <input class="form-control" name="name" placeholder="Seu nome" type="text">--}}
{{--                    <div class="invalid-feedback">Preencha o campo nome</div>--}}
{{--                    <input class="form-control" name="email" placeholder="Seu email" type="email">--}}
{{--                    <div class="invalid-feedback">Informe um email válido</div>--}}
{{--                    <input class="form-control" name="phone" placeholder="Telefone" type="text">--}}
{{--                    <div class="invalid-feedback">Preencha o campo telefone</div>--}}
{{--                    <textarea class="form-control" name="message" placeholder="Sua mensagem" rows="4"></textarea>--}}
{{--                    <div class="invalid-feedback">Preencha o campo mensagem</div>--}}
{{--                    <div class="g-recaptcha" data-sitekey="6Ldz_a8ZAAAAAN_jXTUjc40JYtd-CP11khr0-Ik7"--}}
{{--                         id="googleCaptcha"></div>--}}
{{--                    <div class="invalid-feedback">Confirme que você não é um robô!</div>--}}
{{--                    <button class="primary-btn text-uppercase mt-20  btn-block" type="submit"--}}
{{--                            style="text-transform: uppercase!important;">Enviar</button>--}}
{{--                    <br>--}}
{{--                    <a href="https://api.whatsapp.com/send?phone=5527997145004" target="_blank" class="primary-btn btn-block mt-3"--}}
{{--                       style="background-color:#25d366;color:#FFF;">--}}
{{--                        <i style="margin-top:15px" class="fa fa-whatsapp"></i>--}}
{{--                    </a>--}}
{{--                    <input type="reset" style="display: none;" value="reset" id="formContatoReset">--}}
{{--                    <div id="rowAlert" class="alert alert-danger mt-3" style="display: none;"></div>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<!-- End reservation Area -->
<!-- start footer Area -->
<footer class="footer-area">
    {{--    <div class="footer-widget-wrap">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row section-gap">--}}
    {{--                <div class="col-lg-4  col-md-6 col-sm-6">--}}
    {{--                    <div class="single-footer-widget">--}}
    {{--                        <h4>Opening Hours</h4>--}}
    {{--                        <ul class="hr-list">--}}
    {{--                            <li class="d-flex justify-content-between">--}}
    {{--                                <span>Monday - Friday</span> <span>08.00 am - 10.00 pm</span>--}}
    {{--                            </li>--}}
    {{--                            <li class="d-flex justify-content-between">--}}
    {{--                                <span>Saturday</span> <span>08.00 am - 10.00 pm</span>--}}
    {{--                            </li>--}}
    {{--                            <li class="d-flex justify-content-between">--}}
    {{--                                <span>Sunday</span> <span>08.00 am - 10.00 pm</span>--}}
    {{--                            </li>--}}
    {{--                        </ul>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-lg-4  col-md-6 col-sm-6">--}}
    {{--                    <div class="single-footer-widget">--}}
    {{--                        <h4>Contact Us</h4>--}}
    {{--                        <p>--}}
    {{--                            56/8, los angeles, rochy beach, Santa monica, United states of america - 1205--}}
    {{--                        </p>--}}
    {{--                        <p class="number">--}}
    {{--                            012-6532-568-9746 <br>--}}
    {{--                            012-6532-569-9748--}}
    {{--                        </p>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-lg-4  col-md-6 col-sm-6">--}}
    {{--                    <div class="single-footer-widget">--}}
    {{--                        <h4>Newsletter</h4>--}}
    {{--                        <p>You can trust us. we only send promo offers, not a single spam.</p>--}}
    {{--                        <div class="d-flex flex-row" id="mc_embed_signup">--}}


    {{--                            <form action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"--}}
    {{--                                  class="navbar-form"--}}
    {{--                                  method="get">--}}
    {{--                                <div class="input-group add-on align-items-center d-flex">--}}
    {{--                                    <input class="form-control" name="EMAIL" onblur="this.placeholder = 'Your Email address'"--}}
    {{--                                           onfocus="this.placeholder = ''"--}}
    {{--                                           placeholder="Your Email address" required="" type="email">--}}
    {{--                                    <div style="position: absolute; left: -5000px;">--}}
    {{--                                        <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" type="text"--}}
    {{--                                               value="">--}}
    {{--                                    </div>--}}
    {{--                                    <div class="input-group-btn">--}}
    {{--                                        <button class="genric-btn"><span class="lnr lnr-arrow-right"></span></button>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                                <div class="info mt-20"></div>--}}
    {{--                            </form>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    <div class="footer-bottom-wrap">
        <div class="container">
            <div class="row footer-bottom d-flex justify-content-between align-items-center">
                <p class="col-lg-8 col-mdcol-sm-6 -6 footer-text m-0">
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                    Todos direitos reservados | <a href="{{ env('APP_URL') }}">Olho Gordo</a></p>
                <ul class="col-lg-4 col-mdcol-sm-6 -6 social-icons text-right">
                    <li><a href="https://www.facebook.com/olhoogordo/"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://www.instagram.com/olhoogordo/"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="https://open.spotify.com/show/4XPcJKoJWRbKinYpVXHvPA?si=EE43aFoBSeiA6D9JCFhH5A"><i
                                class="fa fa-spotify"></i></a></li>
                    <li><a href="https://www.youtube.com/channel/UC3KyadRK0Idn_zRepTNcdTA"><i
                                class="fa fa-youtube-play"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
{{--<div>--}}
{{--    <a href="https://api.whatsapp.com/send?phone=5527997145004" target="_blank"--}}
{{--       style="position:fixed;width:60px;height:60px;bottom:40px;right:40px;background-color:#25d366;color:#FFF;border-radius:50px;text-align:center;font-size:30px;box-shadow: 1px 1px 2px #888; z-index:1000;">--}}
{{--        <i style="margin-top:15px" class="fa fa-whatsapp"></i>--}}
{{--    </a>--}}
{{--</div>--}}
<!-- End footer Area -->

<script src="{{ asset('template/js/vendor/jquery-2.2.4.min.js') }}"></script>
<script src="{{ asset('template/js/popper.min.js') }}"></script>
<script src="{{ asset('template/js/vendor/bootstrap.min.js') }}"></script>
<script src="{{ asset('template/js/jquery-ui.js') }}"></script>
<script src="{{ asset('template/js/easing.min.js') }}"></script>
<script src="{{ asset('template/js/hoverIntent.js') }}"></script>
<script src="{{ asset('template/js/superfish.min.js') }}"></script>
<script src="{{ asset('template/js/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('template/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('template/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('template/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('template/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('template/js/mail-script.js') }}"></script>
<script src="{{ asset('template/js/main.js') }}"></script>
{{--<script src="https://www.google.com/recaptcha/api.js"></script>--}}
{{--<script src="{{ asset('template/js/instafeed.js') }}"></script>--}}
{{--<script src="{{ asset('template/js/instafeedog.js') }}"></script>--}}
</body>
</html>
