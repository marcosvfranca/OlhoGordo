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
    <div class="container main-menu">
        <div class="row align-items-center justify-content-center d-flex">
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#sobre">sobre</a></li>
                    <li><a href="#galeria">Galeria</a></li>
                    <li><a href="#contato">Contato</a></li>
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </div>
</header><!-- #header -->

<!-- start banner Area -->
<section class="banner-area" id="home">
    <div class="container">
        <div class="row fullscreen align-items-center justify-content-between">
            <div class="col-lg-12 banner-content">
                <h6 class="text-white">Wide Options of Choice</h6>
                <h1 class="text-white">Delicious Recipes</h1>
                <p class="text-white">
                    inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct
                    standards especially in the workplace. That’s why it’s crucial that, as women.
                </p>
                <a class="primary-btn text-uppercase" href="#">Check Our Menu</a>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<!-- Start home-about Area -->
<section class="home-about-area section-gap" id="sobre">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 home-about-left">
                <h1>About Our Story</h1>
                <p>
                    Who are in extremely love with eco friendly system. Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                    minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
                <a class="primary-btn" href="#">view full menu</a>
            </div>
            <div class="col-lg-6 home-about-right">
                <img alt="" class="img-fluid" src="{{ asset('template/img/about-img.jpg') }}">
            </div>
        </div>
    </div>
</section>
<!-- End home-about Area -->

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
<section class="gallery-area section-gap" id="galeria">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Food and Customer Gallery</h1>
                    <p>Who are in extremely love with eco friendly system.</p>
                </div>
            </div>
        </div>

{{--        <ul class="filter-wrap filters col-lg-12 no-padding">--}}
{{--            <li class="active" data-filter="*">All Menu</li>--}}
{{--            <li data-filter=".breakfast">Breakfast</li>--}}
{{--            <li data-filter=".lunch">Lunch</li>--}}
{{--            <li data-filter=".dinner">Dinner</li>--}}
{{--            <li data-filter=".budget-meal">Budget Meal</li>--}}
{{--            <li data-filter=".buffet">Buffet</li>--}}
{{--        </ul>--}}


        <div class="filters-content">
            <div class="row grid">
                @foreach($imagens as $imagem)
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-gallery">
                            <img alt="Olho Gordo" class="img-fluid" src="{{ asset($imagem['caminho']) }}">
                        </div>
                    </div>
                @endforeach
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
            </div>
        </div>

    </div>
</section>
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
<section class="blog-area section-gap" id="blog">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Latest From Our Blog</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 single-blog">
                <div id="instafeed"></div>
{{--                <div class="thumb">--}}
{{--                    <img alt="" class="img-fluid" src="img/b1.jpg">--}}
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
            </div>
{{--            <div class="col-lg-3 col-md-6 col-sm-6 single-blog">--}}
{{--                <div class="thumb">--}}
{{--                    <img alt="" class="img-fluid" src="img/b2.jpg">--}}
{{--                </div>--}}
{{--                <p class="date">10 Jan 2018</p>--}}
{{--                <a href="blog-single.html"><h4>Secret of making Heart--}}
{{--                        Shaped eggs</h4></a>--}}
{{--                <p>--}}
{{--                    inappropriate behavior ipsum dolor sit amet, consectetur.--}}
{{--                </p>--}}
{{--                <div class="meta-bottom d-flex justify-content-between">--}}
{{--                    <p><span class="lnr lnr-heart"></span> 15 Likes</p>--}}
{{--                    <p><span class="lnr lnr-bubble"></span> 02 Comments</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-3 col-md-6 col-sm-6 single-blog">--}}
{{--                <div class="thumb">--}}
{{--                    <img alt="" class="img-fluid" src="img/b3.jpg">--}}
{{--                </div>--}}
{{--                <p class="date">10 Jan 2018</p>--}}
{{--                <a href="blog-single.html"><h4>How to check steak if--}}
{{--                        it is tender or not</h4></a>--}}
{{--                <p>--}}
{{--                    inappropriate behavior ipsum dolor sit amet, consectetur.--}}
{{--                </p>--}}
{{--                <div class="meta-bottom d-flex justify-content-between">--}}
{{--                    <p><span class="lnr lnr-heart"></span> 15 Likes</p>--}}
{{--                    <p><span class="lnr lnr-bubble"></span> 02 Comments</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-3 col-md-6 col-sm-6 single-blog">--}}
{{--                <div class="thumb">--}}
{{--                    <img alt="" class="img-fluid" src="img/b4.jpg">--}}
{{--                </div>--}}
{{--                <p class="date">10 Jan 2018</p>--}}
{{--                <a href="blog-single.html"><h4>Seaseme and black seed--}}
{{--                        Flavored Bun Rocks</h4></a>--}}
{{--                <p>--}}
{{--                    inappropriate behavior ipsum dolor sit amet, consectetur.--}}
{{--                </p>--}}
{{--                <div class="meta-bottom d-flex justify-content-between">--}}
{{--                    <p><span class="lnr lnr-heart"></span> 15 Likes</p>--}}
{{--                    <p><span class="lnr lnr-bubble"></span> 02 Comments</p>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
</section>
<!-- End blog Area -->
<!-- Start reservation Area -->
<section class="reservation-area section-gap relative" id="contato">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 reservation-left">
                <h1 class="text-white">Entre em contato conosco</h1>
                <p class="text-white pt-20">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam. Quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea.
                </p>
            </div>
            <div class="col-lg-5 reservation-right">
                <form action="{{ route('contato') }}" method="POST" class="form-wrap text-center" id="formContato">
                    {{ csrf_field() }}
                    <h2 style="margin-top: -30px;">Contato</h2>
                    <input class="form-control" name="name" placeholder="Seu nome" type="text">
                    <div class="invalid-feedback">Preencha o campo nome</div>
                    <input class="form-control" name="email" placeholder="Seu email" type="email">
                    <div class="invalid-feedback">Informe um email válido</div>
                    <input class="form-control" name="phone" placeholder="Telefone" type="text">
                    <div class="invalid-feedback">Preencha o campo telefone</div>
                    <textarea class="form-control" name="message" placeholder="Sua mensagem" rows="4"></textarea>
                    <div class="invalid-feedback">Preencha o campo mensagem</div>
                    <div class="g-recaptcha" data-sitekey="6Ldgmv8UAAAAAEu8tbQ3baO44wNWBlCooYJS2lk2" id="googleCaptcha"></div>
                    <div class="invalid-feedback">Confirme que você não é um robô!</div>
                    <button class="primary-btn text-uppercase mt-20" type="submit">Enviar mensagem</button>
                    <input type="reset" style="display: none;" value="reset" id="formContatoReset">
                    <div id="rowAlert" class="alert alert-danger mt-3" style="display: none;"></div>
                </form>
            </div>
        </div>
    </div>
</section>
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
<div>
    <a href="https://api.whatsapp.com/send?phone=5527998494865" target="_blank"
       style="position:fixed;width:60px;height:60px;bottom:40px;right:40px;background-color:#25d366;color:#FFF;border-radius:50px;text-align:center;font-size:30px;box-shadow: 1px 1px 2px #888; z-index:1000;">
        <i style="margin-top:15px" class="fa fa-whatsapp"></i>
    </a>
</div>
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
<script src="https://www.google.com/recaptcha/api.js"></script>
<script src="{{ asset('template/js/instafeed.js') }}"></script>
<script type="text/javascript">
    var feed = new Instafeed({
        accessToken: 'IGQVJXU0JmY1psUXBBR3F0ZAE9ScmVWbTNWamJYRGlNVUctRGRmYkhmNnJWSy1fcmxNeHFRODJfcl9tZAnlnd3p4dXp0c2VEc2FOZAjkxYXA0RXdkbjlpU0hrQ0tHckIzRGtNTy02bERNSU1DUVB5WDhnOAZDZD'
    });
    feed.run();
</script>
</body>
</html>
