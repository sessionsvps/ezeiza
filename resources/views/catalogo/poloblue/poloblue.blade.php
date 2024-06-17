@extends('layout.info_perfumes')

@section('ruta_portada')
    {{ asset('img/poloblue_view/portada.png') }}
@endsection

@section('ruta_perfume')
    {{ asset('img/poloblue_view/poloblue.png') }}
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
    POLO BLUE
@endsection

@section('marca')
    RALPH LAUREN
@endsection

@section('info')
    <strong>Polo Ralph Lauren - Polo Blue EDT</strong> es una fragancia fresca y elegante que transmite serenidad y
    libertad. Con sus notas acuáticas y de melón, mezcladas con albahaca y gamuza, evoca una sensación de frescura y
    sofisticación. Perfecta para el día a día, especialmente en climas cálidos, esta fragancia es ideal para quienes buscan
    una sensación de pureza y ligereza. <strong>Polo Blue</strong> es la elección ideal para ocasiones casuales y
    actividades al aire libre, proporcionando una presencia refrescante y confiada.
@endsection

<!-- Compra -->

@section('compra_img1')
    {{ asset('img/swiper/poloblue.jpg') }}
@endsection

@section('compra_img2')
    {{ asset('img/generales/decants1.jpg') }}
@endsection

@section('compra_img3')
    {{ asset('img/generales/decants2.jpg') }}
@endsection

@section('compra_nombre')
    Polo Ralph Lauren - Polo Blue EDT
@endsection

@section('precio5ml')
    50
@endsection

@section('precio8ml')
    65
@endsection
