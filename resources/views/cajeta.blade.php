@extends('layouts.layout')

@section('title')
Cajeta - MalaLeche
@endsection

@section('top')
<div class="uk-container uk-flex-auto top-container uk-position-relative uk-margin-medium-top" data-uk-parallax="y: 0,50; easing:0; opacity:0.2">
    <div class="uk-width-1-2@s" data-uk-scrollspy="cls: uk-animation-slide-right-medium; target: > *; delay: 150">
        <h6 class="uk-text-primary uk-margin-small-bottom">MALA LECHE</h6>
        <h1 class="uk-margin-remove-top">CAJETA</h1>
        <p class="subtitle-text ">Contacto, ¿Tienes algún comentario o quisieras colaborar con nosotros? ¡Escríbenos!</p>
    </div>
</div>
<!-- /TOP CONTAINER -->
<!-- TOP IMAGE -->
<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-srcset="https://picsum.photos/640/700/?image=816 640w,
https://cdn.pixabay.com/photo/2018/08/09/10/46/phone-3594206_960_720.jpg 960w,
https://cdn.pixabay.com/photo/2018/08/09/10/46/phone-3594206_960_720.jpg 1200w,
https://cdn.pixabay.com/photo/2018/08/09/10/46/phone-3594206_960_720.jpg 2000w"
data-sizes="100vw"
data-src="https://cdn.pixabay.com/photo/2018/08/09/10/46/phone-3594206_960_720.jpg" alt="" style="-webkit-filter: grayscale(100%); filter: grayscale(100%)" data-uk-cover data-uk-img data-uk-parallax="opacity: 1,0.1; easing:0"
>
@endsection

@section('body')
<section id="content" class="uk-section uk-section-default">
    <div class="uk-container">
        <div class="uk-section uk-section-small uk-padding-remove-top">
            <ul class="uk-subnav uk-subnav-pill uk-flex uk-flex-center" data-uk-switcher="connect: .uk-switcher; animation: uk-animation-fade">
                <li><a class="uk-border-pill" href="#">Contacto</a></li>
                <li><a class="uk-border-pill" href="#">Redes sociales</a></li>
            </ul>
        </div>

        <ul class="uk-switcher uk-margin">
            <li>
                <div class="uk-grid uk-child-width-1-2@l uk-flex-middle" data-uk-grid data-uk-scrollspy="target: > div; cls: uk-animation-slide-left-medium">
                    <div>
                        <img src="https://cdn.pixabay.com/photo/2012/04/13/11/59/cooking-ingredients-32089_960_720.png " data-src="https://cdn.pixabay.com/photo/2012/04/13/11/59/cooking-ingredients-32089_960_720.png" alt="" data-uk-img>
                    </div>
                    <div data-uk-scrollspy-class="uk-animation-slide-right-medium">
                        <h6 class="">MALA LECHE</h6>
                        <h2 class="uk-margin-small-top">Contáctate con nosotros.</h2>
                        <p class="subtitle-text">
                            Porque nos interesa estar cerca de ti.
                        </p>
                        <div class="uk-grid uk-child-width-1-2@s" data-uk-grid>
                            <div>
                                <h4>Télefono</h4>
                                <p>4444444444 <a href="" style="color:black !important" target="_blank">Llamar ahora.</a></p>
                            </div>
                            <div>
                                <h4>Correo electrónico</h4>
                                <p>correo@ejemplo.com <a href="" style="color:black !important" target="_blank">Enviar mensaje.</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="uk-grid uk-child-width-1-2@l uk-flex-middle" data-uk-grid data-uk-scrollspy="target: > div; cls: uk-animation-slide-left-medium">
                    <div>
                        <img src="https://cdn.pixabay.com/photo/2017/01/31/20/49/agricultural-2027183_960_720.png" data-src="https://cdn.pixabay.com/photo/2017/01/31/20/49/agricultural-2027183_960_720.png" alt="" data-uk-img>
                    </div>
                    <div data-uk-scrollspy-class="uk-animation-slide-right-medium">
                        <h6 class="">MALA LECHE</h6>
                        <h2 class="uk-margin-small-top">Síguenos en nuestras redes sociales.</h2>
                        <p class="subtitle-text">
                            Mantente al tanto de las últimas publicaciones y novedades de Mala leche.
                        </p>
                        <div class="uk-grid uk-child-width-1-2@s" data-uk-grid>
                            <div>
                                <a href="" class="uk-icon-button" data-uk-icon="twitter" target="_blank"></a>
                                <a href="" class="uk-icon-button" data-uk-icon="facebook" target="_blank"></a>
                                <a href="" class="uk-icon-button" data-uk-icon="instagram" target="_blank"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>
@endsection