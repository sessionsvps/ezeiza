@extends('layout.plantilla')

@section('styles')
    <style>
        @media(min-width:992px) {
            .nav-catalogo {
                border-bottom: 3px solid rgb(181, 148, 28);
            }
        }

        .catalogo-img img {
            border-top-left-radius: .375rem;
            border-top-right-radius: .375rem;
        }

        @media(min-width:768px) {
            .catalogo-img {
                padding-right: 0;
            }

            .catalogo-img img {
                border-top-left-radius: .375rem;
                border-bottom-left-radius: .375rem;
                border-top-right-radius: 0;
            }

            .catalogo-description {
                padding-left: 0;
                padding-right: 0;
                background-color: #e9ecef;
            }
        }
    </style>
@endsection

@section('portada')
    <div>
        <img class="d-block vw-100 vh-100 object-fit-cover img-fluid" src="{{ asset('img/main-visual-le-male-elixir.jpg') }}"
            alt="imagen panorámica de JPG" style="filter: brightness(70%)" />
        <div class="d-md-none position-absolute top-50 start-50 translate-middle text-center text-light z-1">
            <span class="d-block responsive-text fw-bold text-capitalize" style="font-size: 64px">nuestro
                catálogo</span>
            <span class="d-block fs-2 fw-semibold text-capitalize">decants premium</span>
        </div>
        <div class="principal-text d-none d-md-block position-absolute text-end text-light z-1">
            <span class="d-block responsive-text fw-bold text-capitalize" style="font-size: 80px">nuestro
                catálogo</span>
            <span class="d-block fs-1 fw-semibold text-capitalize">decants premium</span>
        </div>
    </div>
@endsection

@section('contenido')
    <div class="separador"></div>
    <section id="catalogo">
        <div class="container">
            <h3 class="subtitulo mb-5 text-capitalize">
                todos nuestros productos
            </h3>
            <div class="row gx-4">
                <figure class="catalogo-card col-lg-6 col-md-12">
                    <div class="row">
                        <div class="catalogo-img col-md-6">
                            <img src="/img/swiper/lebeau1x1.jpg" class="w-100" alt="hola">
                        </div>
                        <figcaption class="catalogo-description col-md-6 py-3 d-md-flex rounded-end">
                            <div class="px-4 my-auto">
                                <h4 class="fs-4 fw-semibold text-capitalize">Le Beau EDT</h4>
                                <p class="responsive-text text-capitalize">
                                    Frescura tropical, sensualidad exótica, y elegancia natural
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <i class="fa-solid fa-star fa-sm" style="color: #212529;"></i>
                                        <i class="fa-solid fa-star fa-sm" style="color: #212529;"></i>
                                        <i class="fa-solid fa-star fa-sm" style="color: #212529;"></i>
                                        <i class="fa-solid fa-star fa-sm" style="color: #212529;"></i>
                                        <i class="fa-solid fa-star fa-sm" style="color: #212529;"></i>
                                    </div>
                                    <a target="_blank" href="{{ route('leBeau') }}">
                                        <button type="button" class="btn btn-dark btn-rounded"
                                            data-mdb-ripple-init>Detalles</button>
                                    </a>
                                </div>
                            </div>
                        </figcaption>
                    </div>
                </figure>
                <figure class="catalogo-card col-lg-6 col-md-12">
                    <div class="row">
                        <div class="catalogo-img col-md-6">
                            <img src="/img/swiper/jpgmale.jpg" class="w-100" alt="hola">
                        </div>
                        <figcaption class="catalogo-description col-md-6 py-3 d-md-flex rounded-end">
                            <div class="px-4 my-auto">
                                <h4 class="fs-4 fw-semibold text-capitalize">le male elixir</h4>
                                <p class="responsive-text text-capitalize">
                                    Intensidad magnética, seducción profunda, y sofisticación audaz
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <i class="fa-solid fa-star fa-sm" style="color: #212529;"></i>
                                        <i class="fa-solid fa-star fa-sm" style="color: #212529;"></i>
                                        <i class="fa-solid fa-star fa-sm" style="color: #212529;"></i>
                                        <i class="fa-solid fa-star fa-sm" style="color: #212529;"></i>
                                        <i class="fa-solid fa-star fa-sm" style="color: #212529;"></i>
                                    </div>
                                    <a target="_blank" href="{{ route('leMale') }}">
                                        <button type="button" class="btn btn-dark btn-rounded"
                                            data-mdb-ripple-init>Detalles</button>
                                    </a>
                                </div>
                            </div>
                        </figcaption>
                    </div>
                </figure>
                <figure class="catalogo-card col-lg-6 col-md-12">
                    <div class="row">
                        <div class="catalogo-img col-md-6">
                            <img src="/img/swiper/jpg3.jpeg" class="w-100" alt="hola">
                        </div>
                        <figcaption class="catalogo-description col-md-6 py-3 d-md-flex rounded-end">
                            <div class="px-4 my-auto">
                                <h4 class="fs-4 fw-semibold text-capitalize">ultra male</h4>
                                <p class="responsive-text text-capitalize">
                                    Dulzura provocativa, carácter fuerte, y atracción irresistible
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <i class="fa-solid fa-star fa-sm" style="color: #212529;"></i>
                                        <i class="fa-solid fa-star fa-sm" style="color: #212529;"></i>
                                        <i class="fa-solid fa-star fa-sm" style="color: #212529;"></i>
                                        <i class="fa-solid fa-star fa-sm" style="color: #212529;"></i>
                                        <i class="fa-solid fa-star fa-sm" style="color: #212529;"></i>
                                    </div>
                                    <a target="_blank" href="{{ route('ultraMale') }}">
                                        <button type="button" class="btn btn-dark btn-rounded"
                                            data-mdb-ripple-init>Detalles</button>
                                    </a>
                                </div>
                            </div>
                        </figcaption>
                    </div>
                </figure>
                <figure class="catalogo-card col-lg-6 col-md-12">
                    <div class="row">
                        <div class="catalogo-img col-md-6">
                            <img src="/img/swiper/erosflame.jpg" class="w-100" alt="hola">
                        </div>
                        <figcaption class="catalogo-description col-md-6 py-3 d-md-flex rounded-end">
                            <div class="px-4 my-auto">
                                <h4 class="fs-4 fw-semibold text-capitalize">eros flame</h4>
                                <p class="responsive-text text-capitalize">
                                    Pasión ardiente, sofisticación dinámica y magnetismo
                                    irresistible
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <i class="fa-solid fa-star fa-sm" style="color: #212529;"></i>
                                        <i class="fa-solid fa-star fa-sm" style="color: #212529;"></i>
                                        <i class="fa-solid fa-star fa-sm" style="color: #212529;"></i>
                                        <i class="fa-solid fa-star fa-sm" style="color: #212529;"></i>
                                        <i class="fa-solid fa-star fa-sm" style="color: #212529;"></i>
                                    </div>
                                    <a target="_blank" href="{{ route('erosFlame') }}">
                                        <button type="button" class="btn btn-dark btn-rounded"
                                            data-mdb-ripple-init>Detalles</button>
                                    </a>
                                </div>
                            </div>
                        </figcaption>
                    </div>
                </figure>
                <figure class="catalogo-card col-lg-6 col-md-12">
                    <div class="row">
                        <div class="catalogo-img col-md-6">
                            <img src="/img/swiper/edp.jpg" class="w-100" alt="hola">
                        </div>
                        <figcaption class="catalogo-description col-md-6 py-3 d-md-flex rounded-end">
                            <div class="px-4 my-auto">
                                <h4 class="fs-4 fw-semibold text-capitalize">Yves Saint Laurent</h4>
                                <p class="responsive-text text-capitalize">
                                    Intensidad moderna, audaz y vibrante para el hombre
                                    contemporáneo
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <i class="fa-solid fa-star fa-sm" style="color: #212529;"></i>
                                        <i class="fa-solid fa-star fa-sm" style="color: #212529;"></i>
                                        <i class="fa-solid fa-star fa-sm" style="color: #212529;"></i>
                                        <i class="fa-solid fa-star fa-sm" style="color: #212529;"></i>
                                        <i class="fa-solid fa-star fa-sm" style="color: #212529;"></i>
                                    </div>
                                    <a target="_blank" href="{{ route('ysl') }}">
                                        <button type="button" class="btn btn-dark btn-rounded"
                                            data-mdb-ripple-init>Detalles</button>
                                    </a>
                                </div>
                            </div>
                        </figcaption>
                    </div>
                </figure>
                <figure class="catalogo-card col-lg-6 col-md-12">
                    <div class="row">
                        <div class="catalogo-img col-md-6">
                            <img src="/img/swiper/poloblue.jpg" class="w-100" alt="hola">
                        </div>
                        <figcaption class="catalogo-description col-md-6 py-3 d-md-flex rounded-end">
                            <div class="px-4 my-auto">
                                <h4 class="fs-4 fw-semibold text-capitalize">Polo Blue EDT</h4>
                                <p class="responsive-text text-capitalize">
                                    Energía fresca, sofisticación dinámica, y vitalidad elegante
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <i class="fa-solid fa-star fa-sm" style="color: #212529;"></i>
                                        <i class="fa-solid fa-star fa-sm" style="color: #212529;"></i>
                                        <i class="fa-solid fa-star fa-sm" style="color: #212529;"></i>
                                        <i class="fa-solid fa-star fa-sm" style="color: #212529;"></i>
                                        <i class="fa-solid fa-star fa-sm" style="color: #212529;"></i>
                                    </div>
                                    <a target="_blank" href="{{ route('poloBlue') }}">
                                        <button type="button" class="btn btn-dark btn-rounded"
                                            data-mdb-ripple-init>Detalles</button>
                                    </a>
                                </div>
                            </div>
                        </figcaption>
                    </div>
                </figure>
                <figure class="catalogo-card col-lg-6 col-md-12">
                    <div class="row">
                        <div class="catalogo-img col-md-6">
                            <img src="/img/swiper/scandal.jpg" class="w-100" alt="hola">
                        </div>
                        <figcaption class="catalogo-description col-md-6 py-3 d-md-flex rounded-end">
                            <div class="px-4 my-auto">
                                <h4 class="fs-4 fw-semibold text-capitalize">scandal le parfum</h4>
                                <p class="responsive-text text-capitalize">
                                    Pasión ardiente, sofisticación dinámica y magnetismo
                                    irresistible
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <i class="fa-solid fa-star fa-sm" style="color: #212529;"></i>
                                        <i class="fa-solid fa-star fa-sm" style="color: #212529;"></i>
                                        <i class="fa-solid fa-star fa-sm" style="color: #212529;"></i>
                                        <i class="fa-solid fa-star fa-sm" style="color: #212529;"></i>
                                        <i class="fa-solid fa-star fa-sm" style="color: #212529;"></i>
                                    </div>
                                    <a target="_blank" href="{{ route('scandal') }}">
                                        <button type="button" class="btn btn-dark btn-rounded"
                                            data-mdb-ripple-init>Detalles</button>
                                    </a>
                                </div>
                            </div>
                        </figcaption>
                    </div>
                </figure>
                <figure class="catalogo-card col-lg-6 col-md-12">
                    <div class="row">
                        <div class="catalogo-img col-md-6">
                            <img src="/img/swiper/swy.jpg" class="w-100" alt="hola">
                        </div>
                        <figcaption class="catalogo-description col-md-6 py-3 d-md-flex rounded-end">
                            <div class="px-4 my-auto">
                                <h4 class="fs-4 fw-semibold text-capitalize">stronger with you</h4>
                                <p class="responsive-text text-capitalize">
                                    Calidez especiada, romanticismo contemporáneo, y energía
                                    vibrante
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <i class="fa-solid fa-star fa-sm" style="color: #212529;"></i>
                                        <i class="fa-solid fa-star fa-sm" style="color: #212529;"></i>
                                        <i class="fa-solid fa-star fa-sm" style="color: #212529;"></i>
                                        <i class="fa-solid fa-star fa-sm" style="color: #212529;"></i>
                                        <i class="fa-solid fa-star fa-sm" style="color: #212529;"></i>
                                    </div>
                                    <a target="_blank" href="{{ route('swy') }}">
                                        <button type="button" class="btn btn-dark btn-rounded"
                                            data-mdb-ripple-init>Detalles</button>
                                    </a>
                                </div>
                            </div>
                        </figcaption>
                    </div>
                </figure>
            </div>
        </div>
    </section>
    <div class="separador"></div>
@endsection
