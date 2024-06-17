<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ezeiza - Decants premium y perfumes</title>

    <!-- Bootstrap's CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />

    <link
        href="https://fonts.googleapis.com/css2?family=Crimson+Pro:ital,wght@0,200..900;1,200..900&family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />

    <!-- Font's Awesome -->
    <script src="https://kit.fontawesome.com/525336de52.js" crossorigin="anonymous"></script>

    <!-- Swiper JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- Icon -->
    <link rel="icon" type="image/x-icon"
        href="https://cdn.bio.link/uploads/profile_pictures/2024-04-08/c7Kv6Skz6RCJ55BqHpyh2v2JQoXIZ1cd.png" />

    <!-- Personal styles/scripts -->
    <link rel="stylesheet" href="{{ asset('css/animations.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/mensaje.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/media-queries.css') }}" />
    {{-- <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}" /> --}}


    <style>
        body {
            font-family: 'Crimson Pro', sans-serif;

        }

        html {
            scroll-padding: 14%;
        }

        .separador {
            padding-top: 20px;
            padding-bottom: 20px;
        }

        .titulo {
            font-family: 'Prompt', sans-serif;
            font-weight: 700;
            font-style: normal;
        }

        .subtitulo {
            font-family: 'Prompt', sans-serif;
            font-weight: 600;
            font-style: normal;
        }

        .principal-text {
            margin-right: 5%;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
            cursor: default;
        }

        .swiper-pagination-bullet {
            /* Esta es la clase de los puntos de paginación*/
            background-color: #97a2ad;
            opacity: 1;
        }

        .swiper-pagination-bullet-active {
            background-color: #212529;
        }

        .card-parrafo {
            height: 72px;
        }

        @media(max-width:992px) {

            .nav-item:hover {
                background-color: rgb(181, 148, 28);
            }

            .nav-item {
                transition: background-color 0.5s ease;
            }

            .swp,
            .video-p {
                max-width: 300px;
                max-height: 300px;
                min-width: 300px;
                min-height: 300px;
            }

        }

        @media(min-width:992px) {

            .swp,
            .video-p {
                max-width: 500px;
                max-height: 500px;
                min-width: 500px;
                min-height: 500px;
            }
        }

        .spsp {
            background-position: center;
            background-size: cover;
        }

        .spsp img {
            display: block;
            width: 100%;
        }

        .input-sin-border:focus {
            outline: none;
            border-color: transparent;
        }

        .submit-button {
            background-color: #212529;
            color: #ffffff;
            transition: background-color 0.3s;
        }

        .submit-button:hover {
            background-color: #97a2ad;
        }
    </style>

    <!-- Estilos de otras vistas -->
    @yield('styles')

</head>

<body>
    <section id="home">
        <div class="position-relative">

            @yield('portada')

            <div class="container position-absolute top-0 z-50">
                <div class="fixed-top">

                    <!-- MARQUEE div -->
                    <!-- Animation folder: css/mensaje.css -->
                    <div class="d-block container-fluid bg-light px-2 py-1">
                        <div class="marquee">
                            <p class="m-0">¡Bienvenido a Ezeiza! Encuentra las mejores
                                marcas y ofertas aquí.</p>
                        </div>
                    </div>

                    <!-- Navbar -->
                    <nav class="navbar navbar-expand-lg">
                        <div class="container">
                            <a class="navbar-brand" href="{{ route('index') }}">
                                <img src="{{ asset('img/logo_ezeiza.png') }}" alt="logo"
                                    style="height: 24px; width: auto; margin-bottom: 4px" />
                            </a>
                            <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse rounded-3" id="navbarText">
                                <ul class="navbar-nav gap-md-2 subtitulo mx-auto mb-2 mb-lg-0" style="font-weight: 500">
                                    <li class="nav-item rounded-2 link-light px-3">
                                        <a class="nav-link nav-inicio active responsive-text link-light text-capitalize px-md-0"
                                            aria-current="page" href="{{ route('index') }}">inicio</a>
                                    </li>
                                    <li class="nav-item rounded-2 px-3">
                                        <a class="nav-link nav-catalogo responsive-text link-light text-capitalize px-md-0"
                                            href="{{ route('catalogo') }}">catálogo</a>
                                    </li>
                                    <li class="nav-item rounded-2 px-3">
                                        <a class="nav-link nav-nosotros responsive-text link-light text-capitalize px-md-0"
                                            href="{{ route('aboutUs') }}">nosotros</a>
                                    </li>
                                </ul>
                                <div class="d-none d-lg-flex align-items-center gap-3 navbar-text">
                                    <a target="_blank" href="https://www.tiktok.com/@ezeiza.perfumes"><i
                                            class="fa-brands fa-tiktok" style="color: #fff"></i></a>
                                    <a target="_blank" href="https://www.instagram.com/ezeiza.pe/"><i
                                            class="fa-brands fa-instagram" style="color: #fff"></i></a>
                                    <a target="_blank" href="https://api.whatsapp.com/send?phone=949053773"><i
                                            class="fa-brands fa-whatsapp" style="color: #fff"></i></a>
                                </div>
                            </div>
                        </div>
                    </nav>

                </div>
            </div>
        </div>
    </section>

    <div class="separador"></div>

    @yield('contenido')

    <div class="separador"></div>

    <section id="contacto" class="bg-body-secondary">
        <div class="container">
            <div class="row row-gap-3 align-items-center">
                <div class="col-12 col-lg-4">
                    <p class="subtitulo px-3 py-lg-5 pt-5 fs-2 text-capitalize text-center">mantente informado...</p>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="d-flex justify-content-center px-3 py-lg-5">

                        <!-- Subscribe form -->
                        <form action="">
                            <div style="border-bottom: 2px solid #212529;">
                                <i class="fa-regular fa-envelope fa-xl ps-5"></i>
                                <input type="email"
                                    class="input-sin-border d-inline border border-0 bg-transparent ps-2 pb-2"
                                    placeholder="Correo electrónico" required>
                            </div>
                            <button type="submit"
                                class="submit-button d-block mt-3 mx-auto text-uppercase rounded-1 px-3 py-1">suscribirte</button>
                        </form>

                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="px-3 py-lg-5 pb-5">
                        <p class="text-center">¡Suscríbete a nuestra tienda online! Entérate de nuestros beneficios
                            exclusivos, novedades y disfruta de <span class="d-block text-center fs-1 fw-bolder">10%
                                OFF</span>en tu primera compra*</p>
                        <p class="text-center" style="font-size:13px;">Aplicable a compras mayores a S/150.00 y para
                            productos que no están en promoción o descuento.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="text-center text-lg-start text-white" style="background-color: black">
        <!-- Superior section -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <div class="me-5 d-none d-lg-block">
                <span>Mantente al tanto en nuestra redes sociales:</span>
            </div>

            <!-- Social media -->
            <div>
                <a class="mx-2 text-reset" target="_blank" href="https://www.tiktok.com/@ezeiza.perfumes"><i
                        class="fa-brands fa-tiktok" style="color: #fff"></i></a>
                <a class="mx-2 text-reset" target="_blank" href="https://www.instagram.com/ezeiza.pe/"><i
                        class="fa-brands fa-instagram" style="color: #fff"></i></a>
                <a class="mx-2 text-reset" target="_blank" href="https://api.whatsapp.com/send?phone=949053773"><i
                        class="fa-brands fa-whatsapp" style="color: #fff"></i></a>
            </div>
        </section>

        <!-- Grid section -->
        <section>
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Contenido -->
                        <a class="footer-brand" href="#">
                            <img class="mb-3" src="{{ asset('img/logo_ezeiza.png') }}" alt=""
                                style="height: 24px; width: auto" />
                        </a>
                        <p>
                            Explora nuestra colección exclusiva de perfumes y encuentra la
                            esencia que define tu estilo único y sofisticado. ¡Déjate
                            envolver por nuestras fragancias y destaca en cada momento!
                        </p>
                    </div>

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">Marcas</h6>
                        <p>
                            <a target="_blank" href="https://www.jeanpaulgaultier.com/us/en" class="text-reset">Jean
                                Paul Gaultier</a>
                        </p>
                        <p>
                            <a target="_blank" href="https://www.dior.com/es_sam" class="text-reset">Dior</a>
                        </p>
                        <p>
                            <a target="_blank" href="https://www.armani.com/es-mx" class="text-reset">Armani</a>
                        </p>
                        <p>
                            <a target="_blank" href="https://www.ysl.com/es-mx" class="text-reset">Yves Saint
                                Lauren</a>
                        </p>
                        <p>
                            <a target="_blank" href="https://www.versace.com/pe/en/" class="text-reset">Versace</a>
                        </p>
                    </div>

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">Contacto</h6>
                        <p><i class="fa-brands fa-instagram me-3"></i>@ezeiza.pe</p>
                        <p><i class="fa-brands fa-tiktok me-3"></i>@ezeiza.perfumes</p>
                        <p><i class="fa-brands fa-whatsapp me-3"></i>+51 949053773</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05)">
            Copyright © 2024 Ezeiza. Derechos Reservados.
        </div>
    </footer>

    <!-- Swiper's scripts -->
    <script src="{{ asset('js/perfumes.js') }}"></script>
    <script src="{{ asset('js/marcas.js') }}"></script>
    <script src="{{ asset('js/carousel.js') }}"></script>

    <!-- Cube Swiper script -->
    <script>
        var swiper = new Swiper(".mySwiperp", {
            effect: "cube",
            grabCursor: true,
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            cubeEffect: {
                shadow: true,
                slideShadows: true,
                shadowOffset: 20,
                shadowScale: 0.94,
            },
            pagination: {
                el: ".swiper-paginationp",
            },
        });
    </script>

    <!-- Scripts de otras vistas -->
    @yield('scripts')

</body>

</html>
