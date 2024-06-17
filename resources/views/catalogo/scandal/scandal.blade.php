@extends('layout.info_perfumes')

@section('ruta_portada')
    {{ asset('img/scandal_view/portada.png') }}
@endsection

@section('ruta_video_perfume')
    {{ asset('img/scandal_view/scandal.webm') }}
    {{-- https://www.jeanpaulgaultier.com/medias/sys_master/videos/h63/h57/9548169773086/9548169740318/9548169740318.webm --}}
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
    SCANDAL
@endsection

@section('marca')
    JEAN PAUL GAULTIER
@endsection

@section('info')
    <strong>Jean Paul Gaultier - Scandal Pour Homme Le Parfum</strong> es una fragancia audaz y provocativa que despierta un
    sentido de poder y sensualidad. Con sus notas de caramelo, haba tonka y cuero, crea una atmósfera de lujo y seducción.
    Perfecto para eventos nocturnos o momentos especiales, este perfume emana una energía magnética y dominante que te hará
    sentir irresistiblemente atractivo. Ideal para citas románticas o salidas elegantes, <strong>Scandal Pour Homme Le
        Parfum</strong> es una elección segura para aquellos que buscan dejar una impresión audaz y memorable.
@endsection

<!-- Compra -->

@section('compra_img1')
    {{ asset('img/swiper/scandal.jpg') }}
@endsection

@section('compra_img2')
    {{ asset('img/generales/decants1.jpg') }}
@endsection

@section('compra_img3')
    {{ asset('img/generales/decants2.jpg') }}
@endsection

@section('compra_nombre')
    JEAN PAUL GAULTIER - SCANDAL
@endsection

@section('precio5ml')
    52
@endsection

@section('precio8ml')
    67
@endsection
