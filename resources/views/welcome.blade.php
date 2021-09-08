<!DOCTYPE html>
<html class="no-js" lang="pt-br">

<head>
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <link href="{{ asset('template/imagens/favicon.png') }}" rel="shortcut icon">
    <meta content="OlhoGordo" name="author">
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta charset="UTF-8">
    <title>Olho Gordo</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <link href="{{ asset('template/css/linearicons.css') }}" rel="stylesheet">
    <link href="{{ asset('template/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('template/css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('template/css/jquery-ui.css') }}" rel="stylesheet">
    <link href="{{ asset('template/css/nice-select.css') }}" rel="stylesheet">
    <link href="{{ asset('template/css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('template/css/main.css') }}" rel="stylesheet">
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
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
            src="https://www.facebook.com/tr?id=280317139852970&ev=PageView&noscript=1" /></noscript>
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
                                src="{{ asset('template/imagens/logo_91px_largura.png') }}" title="Olho Gordo" /></a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="banner-area" id="home">
        <div class="container">
            <div class="row fullscreen align-items-center">
                <div class="col-lg-12 text-uppercase text-center">
                    <style>
                        @media (max-width: 480px) {
                            .imgPerson {
                                height: 400px;
                            }
                        }

                        @media (min-width: 576px) {
                            .imgTrabalhou {
                                max-width: 10rem !important;
                            }

                            .textQuemSomos {
                                margin: 25px !important;
                                font-size: 25px !important;
                                text-align: justify !important;
                                line-height: 2rem !important;
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

                        .imgPerson {
                            padding-top: 15px;
                            max-width: 80%;
                            height: 500px;
                        }

                        .imgQuemSomos {
                            max-width: 80%;
                            display: block;
                            margin-left: auto;
                            margin-right: auto;
                        }

                        .imgTrabalhou {
                            max-width: 100%;
                            display: block;
                            /* margin: auto; */
                            margin-bottom: 2rem;
                            vertical-align: middle;
                            transition: transform .2s
                        }

                        .imgTrabalhou:hover {
                            transform: scale(1.2)
                        }

                        .textQuemSomos {
                            font-weight: 600;
                            font-size: 16px;
                            text-align: justify;
                            line-height: 1.3rem;
                        }

                        .section-og {
                            background-color: #000000 !important;
                            color: #fdbc15;
                            padding-top: 25px;
                            padding-bottom: 25px;
                        }

                        .imgGaleria {
                            max-width: 100%;
                        }

                        .divGaleria {
                            padding: 0;
                        }

                    </style>
                    <img alt="Olho Gordo" title="Olho Gordo" src="../template/imagens/yellow_square.png"
                        class="imgPerson">
                    <div>
                        <img alt="Olho Gordo" id="arrowEsc" title="Olho Gordo" src="../template/imagens/arrows.png"
                            width="30" style="bottom: 10px;position: fixed;display:block;left: 50%;margin-right: -50%;">
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
                    <p class="textQuemSomos">O Olho Gordo é uma empresa de marketing de conteúdo especializada em
                        gastronomia, já atendemos diversas empresas de diversos segmentos, sempre gerando desejo e
                        consequentemente aumento interação e vendas!</p>
                    <p class="textQuemSomos">Se você quer sua marca reconhecida e respeitada, com produtos
                        apresentáveis, conheça abaixo nosso portfólio, temos certeza que poderemos fazer um ótimo
                        trabalho juntos!</p>
                </div>
                <div class="col-12 mt-3">
                    <img src="{{ asset('template/imagens/FOTOGRAFIA.png') }}" alt="Olho Gordo"
                        class="imgQuemSomos">
                </div>
            </div>
        </div>
        <div class="row" style="max-width: 100%; margin-left: 0;">
            @foreach ($galeria->take(12) as $img)
                <div class="col-3 divGaleria">
                    <img src="{{ asset($img) }}" alt="{{ $img }}" class="imgGaleria">
                </div>
            @endforeach
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 mt-3">
                    <img src="{{ asset('template/imagens/FILMAGENS.png') }}" alt="Olho Gordo" class="imgQuemSomos">
                    <p class="textQuemSomos">Quer contar sua história? Quer que seus clientes vejam a limpeza do seu
                        ambiente?
                        <br>
                        Quer mostrar todo o carinho que você tem em cozinhar? Nós também podemos te ajudar com isso!
                        <br>
                        Nossa equipe conta com um filmmaker que irão registrar todos os seus momentos para dar
                        transparência e segurança para seus clientes, além de contar lindas histórias!
                    </p>
                </div>
                <div class="col-lg-12 mt-3">
                    <div class="embed-responsive embed-responsive-21by9" id="videoYt">
                    </div>
                </div>
                <div class="col-12 mt-5">
                    <img src="{{ asset('template/imagens/GESTAOREDESSOCIAIS.png') }}" alt="Olho Gordo"
                        class="imgQuemSomos">
                    <p class="textQuemSomos">Nós sabemos da correria de quem cozinha e trabalha com gastronomia, não
                        tem tempo de cuidar da
                        vida digital da sua empresa? Nós cuidamos para você!
                        Nossa equipe tem especialistas em design gráfico para fazermos artes promocionais,
                        direcionamento
                        de público e organização de conteúdo!
                        Além disso, também fazemos seu tráfego pago, para que sua marca alcance cada vez mais pessoas!
                    </p>
                </div>
                <div class="col-12 mt-5">
                    <img src="{{ asset('template/imagens/QUEMJATRABALHOUCOMAGENTE.png') }}" alt="Olho Gordo"
                        class="imgQuemSomos">
                    <div class="row">
                        @foreach ($clientes as $cliente)
                            <div class="col-4 col-sm-2 d-flex align-items-center">
                                <img src="{{ asset($cliente) }}" alt="{{ $cliente }}"
                                    class="imgTrabalhou d-flex align-items-center">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer-area">
        <div class="footer-bottom-wrap">
            <div class="container">
                <div class="row footer-bottom d-flex justify-content-between align-items-center">
                    <p class="col-lg-8 col-mdcol-sm-6 -6 footer-text m-0">
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
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
    <script src="{{ asset('template/js/vendor/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('template/js/popper.min.js') }}"></script>
    <script src="{{ asset('template/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('template/js/main.js') }}"></script>
</body>

</html>
