@extends('layout.info_perfumes')

@section('ruta_portada')
    {{ asset('img/ultramale_view/portada.png') }}
@endsection

@section('ruta_video_perfume')
    {{ asset('img/ultramale_view/ultramale.webm') }}
    {{-- https://www.jeanpaulgaultier.com/medias/sys_master/videos/hda/h26/9530413678622/9530413613086/9530413613086.webm --}}
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
    ULTRA MALE<br>EDT
@endsection

@section('marca')
    JEAN PAUL GAULTIER
@endsection

@section('info')
    <strong>Jean Paul Gaultier - Ultra Male</strong> es una fragancia intensamente seductora que despierta emociones audaces
    y apasionadas. Con sus notas dulces y especiadas, este perfume evoca una sensación de confianza y poder. Perfecto para
    ocasiones nocturnas y eventos especiales, <strong>Ultra Male</strong> es la elección ideal para aquellos que buscan
    destacar y dejar una impresión duradera. Úsalo en citas románticas o salidas nocturnas para cautivar y seducir con tu
    irresistible aroma.
@endsection

<!-- Compra -->

@section('compra_img1')
    {{ asset('img/swiper/jpg3.jpeg') }}
@endsection

@section('compra_img2')
    {{ asset('img/generales/decants1.jpg') }}
@endsection

@section('compra_img3')
    {{ asset('img/generales/decants2.jpg') }}
@endsection

@section('compra_nombre')
    Jean Paul Gaultier - Ultra Male EDT
@endsection

@section('precio5ml')
    55
@endsection

@section('precio8ml')
    70
@endsection
