@extends('layout.plantilla')

@section('styles')
    <style>
        @media(min-width:992px) {
            .fondo {
                width: 100vw;
            }

            .nav-catalogo {
                border-bottom: 3px solid rgb(181, 148, 28);
            }
        }

        .info-portada {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: (-50%, -50%);
        }

        .principal-img-perfume-xl {
            margin-left: 5%;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            cursor: default;
        }

        .name-perfume-xl {
            margin-right: 5%;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
            cursor: default;
        }

        /*pruebas con mediaqrs*/

        @media(min-width:1280px) {
            .principal-img-perfume-xl {
                margin-left: 15%;
            }

            .name-perfume-xl {
                margin-right: 15%;
            }
        }

        @media(min-width:1760px) {
            .principal-img-perfume-xl {
                margin-left: 22.5%;
            }

            .name-perfume-xl {
                margin-right: 22.5%;
            }
        }

        @media(min-width:1980px) {
            .principal-img-perfume-xl {
                margin-left: 25%;
            }

            .name-perfume-xl {
                margin-right: 25%;
            }
        }

        .img-perfume,
        .video-perfume {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .img-perfume:hover,
        .video-perfume:hover {
            transform: scale(1.1);
        }

        .cap-btn {
            background-color: transparent;
            color: #000;
            transition-duration: 0.5s;
        }

        .cap-active {
            background-color: #212529;
            color: white;
        }
    </style>
@endsection

@section('portada')
    <div>
        <!-- Portada -->
        <img class="fondo d-block vh-100 object-fit-cover img-fluid" src="@yield('ruta_portada')" alt="PORTADA" />

        <!-- Imagen, video y texto (max-width:lg) -->
        <div class="d-lg-none position-absolute start-50 translate-middle text-center text-light z-1" style="top: 50%;">
            <img class="img-perfume" src="@yield('ruta_perfume')" alt="" style="@yield('custom_sm_img')">
            <video class="video-perfume" autoplay muted loop style="@yield('custom_sm_img');@yield('used_video');"
                src="@yield('ruta_video_perfume')"></video>
            <span class="mt-3 d-block responsive-text fw-bold text-capitalize text-center"
                style="font-size: 75px; line-height:1;">@yield('modelo')</span>
            <span class="mt-1 d-block fs-1 fw-semibold text-capitalize text-center">@yield('marca')</span>
        </div>

        <!-- Imagen, video y texto (min-width:lg) -->
        <div class="principal-img-perfume-xl d-none d-lg-block d-xxl-none position-absolute z-1">
            <img class="img-perfume" src="@yield('ruta_perfume')" alt="" style="@yield('custom_lg_img')">
            <video class="video-perfume" autoplay muted loop style="@yield('custom_lg_img');" src="@yield('ruta_video_perfume')"></video>
        </div>

        <div class="principal-img-perfume-xl d-none d-xxl-block position-absolute z-1">
            <img class="img-perfume" src="@yield('ruta_perfume')" alt="" style="@yield('custom_xxl_img')">
            <video class="video-perfume" autoplay muted loop style="@yield('custom_xxl_img');" src="@yield('ruta_video_perfume')"></video>
        </div>

        <div class="name-perfume-xl d-none d-lg-block position-absolute text-end text-light z-1">
            <span class="d-block responsive-text fw-bold text-capitalize"
                style="font-size: 100px; line-height:1;">@yield('modelo')</span>
            <span class="d-block fs-1 fw-semibold text-capitalize">@yield('marca')</span>
        </div>
    </div>
@endsection

@section('contenido')
    <!-- Info del perfume -->
    <section id="info" class="container text-center fs-5 my-5 px-3 px-md-0">
        @yield('info')
    </section>

    <div class="separador"></div>

    <section id="compra" class="container text-center fs-4 my-5 px-3 px-md-0">
        <!-- antes: d-flex flex-column flex-md-row justify-content-between -->
        <div class="d-flex flex-column flex-md-row justify-content-between justify-content-xl-center align-items-center">
            <div class="d-flex justify-content-center me-md-5">
                <div class="swiper mySwiperp swp">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide spsp">
                            <img src="@yield('compra_img1')" alt="">
                        </div>
                        <div class="swiper-slide spsp">
                            <img src="@yield('compra_img2')" alt="">
                        </div>
                        <div class="swiper-slide spsp">
                            <img src="@yield('compra_img3')" alt="">
                        </div>
                    </div>
                    <!--<div class="swiper-paginationp"></div>-->
                </div>
            </div>
            <div class="ms-md-5 mt-5 mt-md-0">
                <div class="d-none d-md-block">
                    <i class="fa-solid fa-star fa-2xs" style="color: #212529;"></i>
                    <i class="fa-solid fa-star fa-2xs" style="color: #212529;"></i>
                    <i class="fa-solid fa-star fa-2xs" style="color: #212529;"></i>
                    <i class="fa-solid fa-star fa-2xs" style="color: #212529;"></i>
                    <i class="fa-solid fa-star fa-2xs" style="color: #212529;"></i>
                </div>
                <p class="fs-3 fw-semibold text-capitalize mt-3 mt-md-0"
                    style="font-family: 'Prompt', sans-serif;line-height:0.9;">
                    @yield('compra_nombre')
                </p>
                <span id="precio" class="d-block fs-6 fw-semibold mt-0 mb-2 mb-md-4"
                    style="font-family: 'Prompt', sans-serif;">S/. 0.00</span>
                <span class="d-block fs-6 fw-semibold mb-1" style="font-family: 'Prompt', sans-serif;">Capacidad</span>
                <div class="d-inline-flex justify-content-center align-items-center gap-4 fs-5 mb-2 mb-md-4 fs-5"
                    style="font-family: 'Prompt', sans-serif;">
                    <button id="cap-btn-1" class="cap-btn cap-active px-3 py-1">5ml</button>
                    <button id="cap-btn-2" class="cap-btn px-3 py-1">8ml</button>
                </div>
                <span class="d-block fs-6 fw-semibold mb-1" style="font-family: 'Prompt', sans-serif;">Cantidad</span>
                <div class="d-inline-flex justify-content-center align-items-center gap-4 border border-2 border-dark fs-5"
                    style="font-family: 'Prompt', sans-serif;">
                    <button id="dec" class="border bg-transparent border-0 mx-3"><i
                            class="fa-solid fa-minus fa-sm"></i></button>
                    <span id="contador" style="width: 30px">0</span>
                    <button id="inc" class="border bg-transparent border-0 mx-3"><i
                            class="fa-solid fa-plus fa-sm"></i></button>
                </div>
                <a href="#" class="d-block mt-3">
                    <button class="bg-dark text-light fs-5 px-5 rounded-pill">
                        Cotizar
                    </button>
                </a>
            </div>
        </div>
    </section>

    <div class="separador"></div>

    <!-- Prepación -->

    <section id="preparacion" class="text-center container fs-5 my-5 px-3 px-md-0">
        <h3 class="subtitulo">Preparación del Decant</h3>
        <div class="my-5 d-flex flex-column flex-md-row">
            <div class="d-flex justify-content-center align-items-center px-5 mt-md-5">
                <p>
                    En <strong>Ezeiza</strong>, preparar un decant es un arte cuidadoso. Seleccionamos el mejor perfume,
                    preparamos el frasco
                    con meticulosidad, protegemos su aroma durante el proceso y lo presentamos con elegancia.
                    Cada paso refleja nuestro compromiso con la calidad y la satisfacción del cliente.
                </p>
            </div>
            <div class="d-flex justify-content-center align-items-center">
                <video class="shadow-lg mt-5 video-p rounded-circle" autoplay muted loop
                    src="{{ asset('img/decants.mp4') }}"></video>
            </div>
        </div>
    </section>
@endsection

<!-- Scripts-->
@section('scripts')
    <script>
        const contador = document.getElementById('contador');
        const precioVenta = document.getElementById('precio')
        const incBtn = document.getElementById('inc');
        const decBtn = document.getElementById('dec');
        const btn1 = document.getElementById('cap-btn-1');
        const btn2 = document.getElementById('cap-btn-2');
        let aux5ml = true;
        let stock = 20;
        let precioActual;
        let precio5ml = @yield('precio5ml');
        let precio8ml = @yield('precio8ml');
        let i = 0;

        const setContador = () => {
            contador.textContent = i;
        };

        const setPrecio = () => {
            if (aux5ml) {
                precioActual = i * precio5ml;
                precioVenta.innerHTML = 'S/. ' + precioActual + '.00';
            } else {
                precioActual = i * precio8ml;
                precioVenta.innerHTML = 'S/. ' + precioActual + '.00';
            }
        };

        incBtn.addEventListener('click', () => {
            if (i < stock)
                i++;
            setContador();
            setPrecio();
        });

        decBtn.addEventListener('click', () => {
            if (i > 0)
                i--;
            setContador();
            setPrecio();
        });

        btn1.addEventListener('click', () => {
            btn2.classList.remove('cap-active');
            btn1.classList.add('cap-active');
            aux5ml = true;
            setPrecio();
        });

        btn2.addEventListener('click', () => {
            btn1.classList.remove('cap-active');
            btn2.classList.add('cap-active');
            aux5ml = false;
            setPrecio();
        });
    </script>
@endsection
