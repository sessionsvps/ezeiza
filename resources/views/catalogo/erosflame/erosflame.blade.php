@extends('layout.info_perfumes')

@section('ruta_portada')
    {{ asset('img/eros_view/portada.png') }}
@endsection

@section('ruta_perfume')
    {{ asset('img/eros_view/eros.png') }}
@endsection

<!-- Puede que estos estilos varíen por la imagen que pongas (por las dimensiones, rotaciones) -->
@section('custom_sm_img')
    width: 300px; height:auto; padding-left:35px;
@endsection

@section('custom_lg_img')
    width: 380px; height:auto;
@endsection

@section('used_video')
    display:none
@endsection

@section('custom_xxl_img')
    width: 500px; height:auto;
@endsection

<!-- Modelo y marca -->
@section('modelo')
    EROS FLAME
@endsection

@section('marca')
    VERSACE
@endsection

@section('info')
    El <strong>Versace Eros Flame</strong> es una fragancia vibrante y seductora que despierta pasiones. Perfecta para
    ocasiones especiales o para destacar en cualquier situación, este perfume emana energía ardiente y poderosa que te
    hará sentir seguro y atractivo. Ideal para noches de fiesta o encuentros románticos, El <strong>Eros Flame</strong>
    es una elección segura para aquellos que buscan dejar una impresión duradera y memorable.
@endsection

<!-- Compra -->

@section('compra_img1')
    {{ asset('img/swiper/erosflame.jpg') }}
@endsection

@section('compra_img2')
    {{ asset('img/generales/decants1.jpg') }}
@endsection

@section('compra_img3')
    {{ asset('img/generales/decants2.jpg') }}
@endsection

@section('compra_nombre')
    Versace Eros Flame EDP
@endsection

@section('precio5ml')
    55
@endsection

@section('precio8ml')
    70
@endsection
