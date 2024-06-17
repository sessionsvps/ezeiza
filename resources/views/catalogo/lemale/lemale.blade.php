@extends('layout.info_perfumes')

@section('ruta_portada')
    {{ asset('img/lemale_view/portada.png') }}
@endsection

@section('ruta_video_perfume')
    {{ asset('img/lemale_view/lemale.webm') }}
    {{-- https://www.jeanpaulgaultier.com/medias/sys_master/videos/h49/hd6/9620918108190/9620918075422/9620918075422.webm --}}
@endsection

<!-- Puede que estos estilos varíen por la imagen que pongas (por las dimensiones, rotaciones) -->
@section('custom_sm_img')
    width: 300px; height:auto;
@endsection

@section('custom_lg_img')
    width: 380px; height:auto;
@endsection

@section('custom_xxl_img')
    width: 500px; height:auto;line-height:1;
@endsection


<!-- Modelo y marca -->
@section('modelo')
    LE MALE<br>ELIXIR
@endsection

@section('marca')
    JEAN PAUL GAULTIER
@endsection

@section('info')
    El <strong>Jean Paul Gaultier - Le Male Elixir</strong> es una fragancia intensa y envolvente que inspira confianza y
    sofisticación. Con sus notas cálidas y amaderadas, evoca una sensación de poder y misterio. Perfecto para ocasiones
    especiales o para aquellos que desean destacar en cualquier situación, este perfume emana una masculinidad audaz y
    seductora. Ideal para noches elegantes o encuentros románticos, el <strong>Le Male Elixir</strong> es una elección
    segura para quienes buscan dejar una impresión memorable y duradera.
@endsection

<!-- Compra -->

@section('compra_img1')
    {{ asset('img/swiper/jpgmale.jpg') }}
@endsection

@section('compra_img2')
    {{ asset('img/generales/decants1.jpg') }}
@endsection

@section('compra_img3')
    {{ asset('img/generales/decants2.jpg') }}
@endsection

@section('compra_nombre')
    Jean Paul Gaultier - Le Male Elixir
@endsection

@section('precio5ml')
    60
@endsection

@section('precio8ml')
    75
@endsection
