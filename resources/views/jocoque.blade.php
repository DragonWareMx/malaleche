@extends('layouts.layout')

@section('title')
Jocoque - MalaLeche
@endsection

@section('top')
<div class="uk-container uk-flex-auto top-container uk-position-relative uk-margin-medium-top" data-uk-parallax="y: 0,50; easing:0; opacity:0.2">
    <div class="uk-width-1-2@s" data-uk-scrollspy="cls: uk-animation-slide-right-medium; target: > *; delay: 150">
        <h6 class="uk-text-primary uk-margin-small-bottom">MALA LECHE</h6>
        <h1 class="uk-margin-remove-top">JOCOQUE</h1>
        <p class="subtitle-text ">Contenido y Crítica de Mala leche. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore.</p>
        
    </div>
</div>
<!-- /TOP CONTAINER -->
<!-- TOP IMAGE -->
<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-srcset="https://picsum.photos/640/700/?image=816 640w,
https://images.pexels.com/photos/5550323/pexels-photo-5550323.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940 960w,
https://images.pexels.com/photos/5550323/pexels-photo-5550323.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940 1200w,
https://images.pexels.com/photos/5550323/pexels-photo-5550323.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940 2000w"
data-sizes="100vw"
data-src="https://images.pexels.com/photos/5550323/pexels-photo-5550323.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="" style="-webkit-filter: grayscale(100%); filter: grayscale(100%)" data-uk-cover data-uk-img data-uk-parallax="opacity: 1,0.1; easing:0"
>
@endsection

@section('body')
<div class="uk-section uk-section-default uk-padding-small" id="content">
    <div class="uk-container">
        <div class="uk-navbar-right nav-overlay uk-flex uk-flex-right">
            <a class="uk-navbar-toggle uk-padding-remove" data-uk-search-icon data-uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#"></a>
        </div>

        <div class="nav-overlay uk-navbar-left uk-flex-1" hidden>
            <div class="uk-navbar-item uk-width-expand uk-padding-remove">
                <form class="uk-search uk-search-navbar uk-width-1-1">
                    <input class="uk-search-input" type="search" placeholder="Ingresa tu búsqueda" style="font-size:17px !important	">
                </form>
            </div>
            <a class="uk-navbar-toggle" data-uk-close data-uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#"></a>
        </div>


        <div class="uk-grid" data-ukgrid>
            <div class="uk-width-2-3@m">
                <h4 class="uk-heading-line uk-text-bold"><span>Contenido y Crítica</span></h4>
                <article class="uk-section uk-section-small uk-padding-remove-top">
                    <header>
                        <h2 class="uk-margin-remove-adjacent uk-text-bold uk-margin-small-bottom"><a title="Nombre completo."  class="uk-link-reset" href="#">Fusce facilisis tempus magna ac dignissim.</a></h2>
                        <p class="uk-article-meta">21 de Marzo de 2021 | <span data-uk-icon="icon: clock"></span> 23:18 hrs</p>
                    </header>
                    <figure>
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAyAAAAEsCAYAAAA7Ldc6AAADuUlEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAMA3p/4AAaxRls8AAAAASUVORK5CYII=" data-src="https://picsum.photos/800/300/?random=1" width="800" height="300"  alt="Alt text" class="lazy" data-uk-img>
                        <figcaption class="uk-padding-small uk-text-center uk-text-muted"><a href="#" class="uk-link-reset">Nombre del autor</a></figcaption>
                    </figure>
                    <p>Sinopsis — Vivamus sed consequat urna. Fusce vitae urna sed ante placerat iaculis. Suspendisse potenti. Pellentesque quis fringilla libero. In hac habitasse platea dictumst.</p>
                    <a href="#" title="Leer más" class="uk-button uk-button-default uk-button-small">LEER MÁS</a>
                    <hr>
                </article>
            </div>
            <div class="uk-width-1-3@m">
                <h4 class="uk-heading-line uk-text-bold"><span>Archivo</span></h4>
                <ul class="uk-list">
                    <li><a class="uk-text-emphasis" href="">Marzo</a></li>
                    <li><a class="uk-text-emphasis" href="">Febrero</a></li>
                    <li><a class="uk-text-emphasis" href="">Enero</a></li>
                    <li><a class="uk-text-emphasis" href="">Diciembre <small>(2020)</small></a></li>
                    <li><a class="uk-text-emphasis" href="">Noviembre <small>(2020)</small></a></li>
                    <li><a class="uk-text-emphasis" href="">Octubre <small>(2020)</small></a></li>
                    <li><a class="uk-text-emphasis" href="">Septiembre <small>(2020)</small></a></li>
                    <li><a class="uk-text-emphasis" href="">Agosto <small>(2020)</small></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection