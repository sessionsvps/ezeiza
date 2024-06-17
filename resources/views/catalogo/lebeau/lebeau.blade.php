@extends('layout.info_perfumes')

@section('ruta_portada')
    {{ asset('img/lebeau_view/portada.png') }}
@endsection

@section('ruta_video_perfume')
    {{ asset('img/lebeau_view/lebeau.webm') }}
    {{-- https://www.jeanpaulgaultier.com/medias/sys_master/videos/hd3/h4d/9534391713822/9534391681054/9534391681054.webm --}}
@endsection

<!-- Puede que estos estilos varíen por la imagen que pongas (por las dimensiones, rotaciones) -->
@section('custom_sm_img')
    width: 300px; height:auto;
@endsection

@section('custom_lg_img')
    width: 380px; height:auto;
@endsection

@section('custom_xxl_img')
    width: 500px; height:auto;
@endsection


<!-- Modelo y marca -->
@section('modelo')
    LE BEAU EDT
@endsection

@section('marca')
    JEAN PAUL GAULTIER
@endsection

@section('info')
    <strong>Jean Paul Gaultier - Le Beau EDT</strong> es una fragancia fresca y seductora que evoca una sensación de
    libertad y atractivo natural. Con sus notas de bergamota, coco y haba tonka, crea una atmósfera exótica y cálida.
    Perfecto para el uso diario o para destacar en cualquier ocasión, este perfume emana una energía relajada y sofisticada
    que te hará sentir seguro y encantador. Ideal para días soleados o encuentros casuales, <strong>Le Beau EDT</strong> es
    una elección segura para aquellos que buscan dejar una impresión duradera y refrescante.
@endsection

<!-- Compra -->

@section('compra_img1')
    {{ asset('img/swiper/lebeau1x1.jpg') }}
@endsection

@section('compra_img2')
    {{ asset('img/generales/decants1.jpg') }}
@endsection

@section('compra_img3')
    {{ asset('img/generales/decants2.jpg') }}
@endsection

@section('compra_nombre')
    Jean Paul Gaultier - Le Beau EDT
@endsection

@section('precio5ml')
    60
@endsection

@section('precio8ml')
    75
@endsection
