@extends('layout.info_perfumes')

@section('ruta_portada')
    {{ asset('img/swy_view/portada.png') }}
@endsection

@section('ruta_perfume')
    {{ asset('img/swy_view/swy.png') }}
@endsection

<!-- Puede que estos estilos varíen por la imagen que pongas (por las dimensiones, rotaciones) -->
@section('custom_sm_img')
    width: 300px; height:auto;
@endsection

@section('custom_lg_img')
    width: 380px; height:auto;
@endsection

@section('used_video')
    display:none
@endsection

@section('custom_xxl_img')
    width: 500px; height:auto;line-height:1;
@endsection


<!-- Modelo y marca -->
@section('modelo')
    SWY
@endsection

@section('marca')
    GIORGIO ARMANI
@endsection

@section('info')
    <strong>YSL - Y EDP</strong> es una fragancia moderna y sofisticada que evoca confianza y determinación. Con sus notas
    frescas de bergamota, manzana y jengibre, mezcladas con salvia y abeto balsámico, crea una sensación de elegancia y
    energía. Ideal para el uso diario en el entorno profesional o para eventos formales, este perfume proyecta una imagen de
    éxito y dinamismo. Perfecto para hombres que desean sentirse seguros y en control, <strong>Y EDP</strong> es una
    elección versátil para cualquier ocasión donde quieras destacar con estilo y clase.
@endsection

<!-- Compra -->

@section('compra_img1')
    {{ asset('img/swiper/swy.jpg') }}
@endsection

@section('compra_img2')
    {{ asset('img/generales/decants1.jpg') }}
@endsection

@section('compra_img3')
    {{ asset('img/generales/decants2.jpg') }}
@endsection

@section('compra_nombre')
    GIORGIO ARMANI - SWY
@endsection

@section('precio5ml')
    50
@endsection

@section('precio8ml')
    65
@endsection
