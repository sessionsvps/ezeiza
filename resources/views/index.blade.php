@extends('layout.plantilla')

@section('styles')
    <style>
        @media(min-width:992px) {
            .nav-inicio {
                border-bottom: 3px solid rgb(181, 148, 28);
            }
        }
    </style>
@endsection

@section('portada')
    <div class="swiper mainSwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div>
                    <img class="d-block vw-100 vh-100 object-fit-cover img-fluid"
                        src="{{ asset('img/portadas/panoramica1.jpg') }}" alt="imagen panorámica de JPG"
                        style="filter: brightness(60%); mask-image:linear-gradient(black 85%, transparent);" />
                    <div class="d-md-none position-absolute top-50 start-50 translate-middle text-center text-light z-1">
                        <span class="d-block responsive-text fw-bold text-capitalize" style="font-size: 64px">DECANTS
                            PREMIUM</span>
                        <span class="d-block fs-2 fw-semibold text-capitalize">Desde el frasco hasta tus manos</span>
                    </div>
                    <div class="principal-text d-none d-md-block position-absolute text-end text-light z-1">
                        <span class="d-block responsive-text fw-bold text-capitalize" style="font-size: 80px">DECANTS
                            PREMIUM</span>
                        <span class="d-block fs-1 fw-semibold text-capitalize">Desde el frasco hasta tus manos</span>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div>
                    <img class="d-block vw-100 vh-100 object-fit-cover img-fluid"
                        src="{{ asset('img/portadas/panoramica4.png') }}" alt="imagen panorámica de JPG"
                        style="filter: brightness(70%); mask-image:linear-gradient(black 75%, transparent);" />
                    <div class="d-md-none position-absolute top-50 start-50 translate-middle text-center text-light z-1">
                        <span class="d-block responsive-text fw-bold text-capitalize" style="font-size: 64px">DECANTS
                            PREMIUM</span>
                        <span class="d-block fs-2 fw-semibold text-capitalize">Desde el frasco hasta tus manos</span>
                    </div>
                    <div class="principal-text d-none d-md-block position-absolute text-end text-light z-1">
                        <span class="d-block responsive-text fw-bold text-capitalize" style="font-size: 80px">DECANTS
                            PREMIUM</span>
                        <span class="d-block fs-1 fw-semibold text-capitalize">Desde el frasco hasta tus manos</span>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div>
                    <img class="d-block vw-100 vh-100 object-fit-cover img-fluid"
                        src="{{ asset('img/portadas/panoramica5.png') }}" alt="imagen panorámica de JPG"
                        style="filter: brightness(50%); mask-image:linear-gradient(black 96%, transparent);" />
                    <div class="d-md-none position-absolute top-50 start-50 translate-middle text-center text-light z-1">
                        <span class="d-block responsive-text fw-bold text-capitalize" style="font-size: 64px">DECANTS
                            PREMIUM</span>
                        <span class="d-block fs-2 fw-semibold text-capitalize">Desde el frasco hasta tus manos</span>
                    </div>
                    <div class="principal-text d-none d-md-block position-absolute text-end text-light z-1">
                        <span class="d-block responsive-text fw-bold text-capitalize" style="font-size: 80px">DECANTS
                            PREMIUM</span>
                        <span class="d-block fs-1 fw-semibold text-capitalize">Desde el frasco hasta tus manos</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('contenido')
    <section id="marcas" class="container">
        <div class="swiper marcasEzeiza container">
            <div class="swiper-wrapper">
                <div class="swiper-slide d-flex justify-content-center">
                    <div class="h-50 w-50">
                        <img src="{{ asset('img/marcas/dior.png') }}" class="img-fluid rounded-top-3" alt="corolla" />
                    </div>
                </div>
                <div class="swiper-slide d-flex justify-content-center">
                    <div class="h-50 w-50">
                        <img src="{{ asset('img/marcas/versace.png') }}" class="img-fluid rounded-top-3" alt="corolla" />
                    </div>
                </div>
                <div class="swiper-slide d-flex justify-content-center">
                    <div class="h-50 w-50">
                        <img src="{{ asset('img/marcas/armani.png') }}" class="img-fluid rounded-top-3" alt="corolla" />
                    </div>
                </div>
                <div class="swiper-slide d-flex justify-content-center">
                    <div class="h-50 w-50">
                        <img src="{{ asset('img/marcas/ralph.png') }}" class="img-fluid rounded-top-3" alt="corolla" />
                    </div>
                </div>
                <div class="swiper-slide d-flex justify-content-center">
                    <div class="h-50 w-50">
                        <img src="{{ asset('img/marcas/ysl.png') }}" class="img-fluid rounded-top-3" alt="corolla" />
                    </div>
                </div>
                <div class="swiper-slide d-flex justify-content-center">
                    <div class="h-50 w-50">
                        <img src="{{ asset('img/marcas/jpg.png') }}" class="img-fluid rounded-top-3" alt="corolla" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="separador"></div>

    <section id="razones" class="container mb-5">
        <h3 class="subtitulo mb-5 text-capitalize">
            Ventajas de los Decants
        </h3>
        <div class="d-flex flex-column flex-md-row gap-5 text-center text-white">
            <div class="rounded-2 bg-dark p-4 w-100">
                <p class="fs-4 my-0" style="font-family:'Prompt', sans-serif; font-weight:500;">Prueba sin comprometerte
                </p>
                <i class="fa-solid fa-spray-can-sparkles fa-3x my-3" style="color: #ffffff;"></i>
                <p class="fs-6">
                    Experimenta una amplia gama de fragancias sin comprometerte con un frasco completo. Con los decants,
                    ¡puedes probar antes de comprometerte!
                </p>
            </div>
            <div class="rounded-2 bg-dark p-4 w-100">
                <p class="fs-4 my-0" style="font-family:'Prompt', sans-serif; font-weight:500;">Fragancia siempre contigo
                </p>
                <i class="fa-solid fa-person-breastfeeding fa-3x my-3" style="color: #ffffff;"></i>
                <p class="fs-6">
                    Lleva tu aroma favorito a donde vayas. Los decants son perfectos para mantener tu fragancia
                    preferida siempre contigo, ya sea en el bolso o en el bolsillo.
                </p>
            </div>
        </div>
        <div class="d-flex flex-column flex-md-row gap-5 mt-5 text-center text-white">
            <div class="rounded-2 bg-dark p-4 w-100">
                <p class="fs-4 my-0" style="font-family:'Prompt', sans-serif; font-weight:500;">Decants económicos.</p>
                <i class="fa-solid fa-money-bills fa-3x my-3" style="color: #ffffff;"></i>
                <p class="fs-6">
                    ¡Ahorra mientras disfrutas! Los decants ofrecen una forma inteligente y económica de explorar una
                    variedad de perfumes sin tener que invertir en múltiples frascos completos. ¡Comparar es ahorrar!
                </p>
            </div>
            <div class="rounded-2 bg-dark p-4 w-100">
                <p class="fs-4 my-0" style="font-family:'Prompt', sans-serif; font-weight:500;">Explora y ahorra</p>
                <i class="fa-solid fa-magnifying-glass-dollar fa-3x my-3" style="color: #ffffff;"></i>
                <p class="fs-6">
                    Con los decants de <strong>Ezeiza</strong>, puedes disfrutar de hasta 8 fragancias diferentes por el
                    precio de un solo perfume completo. ¡Tendrás una variedad de aromas a elegir sin romper tu presupuesto!
                </p>
            </div>
        </div>
    </section>

    <div class="separador"></div>

    <section id="perfumes" class="container">
        <h3 class="subtitulo mb-5 text-capitalize">
            explora todos nuestros productos
        </h3>
        <div class="mb-2 container d-flex justify-content-end gap-1">
            <button class="swiper-button-prev-custom rounded-circle bg-dark">
                <i class="fa-solid fa-arrow-left" style="color: #fff"></i>
            </button>
            <button class="swiper-button-next-custom rounded-circle bg-dark">
                <i class="fa-solid fa-arrow-right" style="color: #fff"></i>
            </button>
        </div>
        <div class="swiper perfumesEzeiza container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="ratio ratio-1x1">
                        <img src="{{ asset('img/swiper/lebeau1x1.jpg') }}" class="img-fluid rounded-top-2"
                            alt="corolla" />
                    </div>
                    <article class="p-4 rounded-bottom-2 bg-body-secondary">
                        <h4 class="fs-4 text-capitalize">Le Beau EDT</h4>
                        <p class="fs-6 card-parrafo responsive-text text-capitalize">
                            Frescura tropical, sensualidad exótica, y elegancia natural
                        </p>
                        <div class="d-flex justify-content-end align-items-center">
                            <a target="_blank" href="{{ route('leBeau') }}">
                                <button type="button" class="btn btn-dark btn-rounded"
                                    data-mdb-ripple-init>Detalles</button>
                            </a>
                        </div>
                    </article>
                </div>
                <div class="swiper-slide">
                    <div class="ratio ratio-1x1">
                        <img src="{{ asset('img/swiper/jpgmale.jpg') }}" class="img-fluid rounded-top-2"
                            alt="corolla" />
                    </div>
                    <article class="p-4 rounded-bottom-2 bg-body-secondary">
                        <h4 class="fs-4 text-capitalize">Le Male Elixir</h4>
                        <p class="fs-6 fs-md-6 card-parrafo responsive-text text-capitalize">
                            Intensidad magnética, seducción profunda, y sofisticación
                            audaz
                        </p>
                        <div class="d-flex justify-content-end align-items-center">
                            <a target="_blank" href="{{ route('leMale') }}">
                                <button type="button" class="btn btn-dark btn-rounded"
                                    data-mdb-ripple-init>Detalles</button>
                            </a>
                        </div>
                    </article>
                </div>
                <div class="swiper-slide">
                    <div class="ratio ratio-1x1">
                        <img src="{{ asset('img/swiper/jpg3.jpeg') }}" class="img-fluid rounded-top-2" alt="corolla" />
                    </div>
                    <article class="p-4 rounded-bottom-2 bg-body-secondary">
                        <h4 class="fs-4 text-capitalize">Ultra Male</h4>
                        <p class="fs-6 card-parrafo responsive-text text-capitalize">
                            Dulzura provocativa, carácter fuerte, y atracción irresistible
                        </p>
                        <div class="d-flex justify-content-end align-items-center">
                            <a target="_blank" href="{{ route('ultraMale') }}">
                                <button type="button" class="btn btn-dark btn-rounded"
                                    data-mdb-ripple-init>Detalles</button>
                            </a>
                        </div>
                    </article>
                </div>
                <div class="swiper-slide">
                    <div class="ratio ratio-1x1">
                        <img src="{{ asset('img/swiper/erosflame.jpg') }}" class="img-fluid rounded-top-2"
                            alt="corolla" />
                    </div>
                    <article class="p-4 rounded-bottom-2 bg-body-secondary">
                        <h4 class="fs-4 text-capitalize">Eros Flame</h4>
                        <p class="fs-6 card-parrafo responsive-text text-capitalize">
                            Pasión ardiente, sofisticación dinámica y magnetismo
                            irresistible
                        </p>
                        <div class="d-flex justify-content-end align-items-center">
                            <a target="_blank" href="{{ route('erosFlame') }}">
                                <button type="button" class="btn btn-dark btn-rounded"
                                    data-mdb-ripple-init>Detalles</button>
                            </a>
                        </div>
                    </article>
                </div>
                <div class="swiper-slide">
                    <div class="ratio ratio-1x1">
                        <img src="{{ asset('img/swiper/edp.jpg') }}" class="img-fluid rounded-top-2" alt="corolla" />
                    </div>
                    <article class="p-4 rounded-bottom-2 bg-body-secondary">
                        <h4 class="fs-4 text-capitalize">Yves Saint Laurent</h4>
                        <p class="fs-6 card-parrafo responsive-text text-capitalize">
                            Intensidad moderna, audaz y vibrante para el hombre
                            contemporáneo
                        </p>
                        <div class="d-flex justify-content-end align-items-center">
                            <a target="_blank" href="{{ route('ysl') }}">
                                <button type="button" class="btn btn-dark btn-rounded"
                                    data-mdb-ripple-init>Detalles</button>
                            </a>
                        </div>
                    </article>
                </div>
                <div class="swiper-slide">
                    <div class="ratio ratio-1x1">
                        <img src="{{ asset('img/swiper/poloblue.jpg') }}" class="img-fluid rounded-top-2"
                            alt="corolla" />
                    </div>
                    <article class="p-4 rounded-bottom-2 bg-body-secondary">
                        <h4 class="fs-4 text-capitalize">Polo Blue EDT</h4>
                        <p class="fs-6 card-parrafo responsive-text text-capitalize">
                            Energía fresca, sofisticación dinámica, y vitalidad elegante
                        </p>
                        <div class="d-flex justify-content-end align-items-center">
                            <a target="_blank" href="{{ route('poloBlue') }}">
                                <button type="button" class="btn btn-dark btn-rounded"
                                    data-mdb-ripple-init>Detalles</button>
                            </a>
                        </div>
                    </article>
                </div>
                <div class="swiper-slide">
                    <div class="ratio ratio-1x1">
                        <img src="{{ asset('img/swiper/scandal.jpg') }}" class="img-fluid rounded-top-2"
                            alt="corolla" />
                    </div>
                    <article class="p-4 rounded-bottom-2 bg-body-secondary">
                        <h4 class="fs-4 text-capitalize">SCANDAL LE PARFUM</h4>
                        <p class="fs-6 card-parrafo responsive-text text-capitalize">
                            Pasión ardiente, sofisticación dinámica y magnetismo
                            irresistible
                        </p>
                        <div class="d-flex justify-content-end align-items-center">
                            <a target="_blank" href="{{ route('scandal') }}">
                                <button type="button" class="btn btn-dark btn-rounded"
                                    data-mdb-ripple-init>Detalles</button>
                            </a>
                        </div>
                    </article>
                </div>
                <div class="swiper-slide">
                    <div class="ratio ratio-1x1">
                        <img src="{{ asset('img/swiper/swy.jpg') }}" class="img-fluid rounded-top-2" alt="corolla" />
                    </div>
                    <article class="p-4 rounded-bottom-2 bg-body-secondary">
                        <h4 class="fs-4 text-capitalize">Stronger With You</h4>
                        <p class="fs-6 card-parrafo responsive-text text-capitalize">
                            Calidez especiada, romanticismo contemporáneo, y energía
                            vibrante
                        </p>
                        <div class="d-flex justify-content-end align-items-center">
                            <a target="_blank" href="{{ route('swy') }}">
                                <button type="button" class="btn btn-dark btn-rounded"
                                    data-mdb-ripple-init>Detalles</button>
                            </a>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <div class="separador"></div>

    <section class="container my-5">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6">
                <img src="{{ asset('img/final.jpg') }}" class="mw-100 rounded-3" alt="final" />
            </div>
            <div class="col-12 col-lg-6">
                <h5 class="subtitulo fs-3 text-capitalize my-5">
                    ¿Por qué elegirnos?
                </h5>
                <ul class="list-unstyled responsive-text fs-5">
                    <li class="d-flex align-items-baseline gap-3">
                        <i class="fa-solid fa-check"></i>
                        <p>
                            Ofrecemos una amplia selección de decants de perfumes a precios muy competitivos. Creemos que
                            todos
                            deberían tener la oportunidad de disfrutar de fragancias de alta calidad sin tener que gastar
                            una
                            fortuna.
                        </p>
                    </li>
                    <li class="d-flex align-items-baseline gap-3">
                        <i class="fa-solid fa-check"></i>
                        <p>
                            Contamos con entrega inmediata en Trujillo y envió econnómico a todo el Perú. Trabajamos con
                            servicios de envío confiables para asegurar que tu pedido llegue de manera rápida y en perfectas
                            condiciones.
                        </p>
                    </li>
                    <li class="d-flex align-items-baseline gap-3">
                        <i class="fa-solid fa-check"></i>
                        <p>
                            No solo encuentras las fragancias más populares, sino también opciones exclusivas y difíciles de
                            conseguir. Nos esforzamos por tener una colección diversa que incluya tanto los clásicos de
                            siempre
                            como
                            las novedades del mercado.
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        var swiper = new Swiper('.mainSwiper', {
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
        });
    </script>
@endsection
