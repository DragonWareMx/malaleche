<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Inicio - MalaLeche</title>
		<link rel="icon" href="{{asset('img/icons/MalaLeche_logo.png')}}">
		<!-- CSS FILES -->
		<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/uikit@latest/dist/css/uikit.min.css">
		<style>
			.lead {
				font-size: 1.175em;
				font-weight: 300;
			}
			.uk-logo img {
				height: 28px;
			}
      @media(max-width:640px){
        .barra-menu{
          display:flex !important;
        }
      }
      @media(max-width:380px){
        .img-dragon{
          display:none;
        }
      }
		</style>
	</head>
	<body>
    <div class="uk-light wrap uk-background-norepeat uk-background-cover uk-background-center-center uk-cover-container uk-background-secondary" style="background-color:black">
      <img data-srcset="https://cdn.pixabay.com/photo/2017/02/13/09/13/drops-of-milk-2062100_960_720.jpg 640w,
                   https://cdn.pixabay.com/photo/2017/02/13/09/13/drops-of-milk-2062100_960_720.jpg 960w,
                   https://cdn.pixabay.com/photo/2017/02/13/09/13/drops-of-milk-2062100_960_720.jpg 1200w,
                   https://cdn.pixabay.com/photo/2017/02/13/09/13/drops-of-milk-2062100_960_720.jpg 2000w"
           sizes="100vw"
           data-src="https://cdn.pixabay.com/photo/2017/02/13/09/13/drops-of-milk-2062100_960_720.jpg" alt="" data-uk-cover data-uk-img
      >
      <div class="uk-flex uk-flex-center uk-flex-middle uk-height-viewport uk-position-z-index uk-position-relative" data-uk-height-viewport="min-height: 400" style="background-color: rgba(0, 0, 0, 0.5);">

        <!-- NAV -->
        <div class="uk-position-top">
          <div class="uk-container uk-container-small">
            <nav class="uk-navbar-container uk-navbar-transparent" data-uk-navbar>
              <div class="uk-navbar-left">
                <div class="uk-navbar-item">
                  <a class="uk-logo" href="{{route('inicio')}}"><img src="{{asset('img/icons/MalaLeche_logo_white.png')}}" alt="Logo" style="width:100px; height:50px"></a>
                </div>
              </div>
              <div class="uk-navbar-right">
                <ul class="uk-navbar-nav">
                  <li class="uk-active uk-visible@m"><a href="{{route('inicio')}}" data-uk-icon="home"></a></li>
                  <li class="uk-visible@s"><a href="{{route('establo')}}" title="Colaboradores" data-uk-tooltip>Establo</a></li>
                  <li class="uk-visible@s"><a href="{{route('jocoque')}}" title="Contenido" data-uk-tooltip>Jocoque</a></li>
                  <li class="uk-visible@s"><a href="{{route('acemilas')}}" title="Novedades" data-uk-tooltip>Acémilas</a></li>
                  <li class="uk-visible@s"><a href="{{route('cajeta')}}" title="Contacto" data-uk-tooltip>Cajeta</a></li>
                  <li><a class="uk-navbar-toggle barra-menu" style="display:none" data-uk-toggle data-uk-navbar-toggle-icon href="#offcanvas-nav"></a></li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
        <!-- /NAV -->
        <!-- TEXT -->
        <div class="uk-container uk-container-small uk-flex-auto uk-text-center" data-uk-scrollspy="target: > .animate; cls: uk-animation-slide-bottom-small uk-invisible; delay: 300">
          <h1 class="uk-heading-primary animate uk-invisible" style="font-weight: 700;">Mala leche</h1>
          <div class="uk-width-4-5@m uk-margin-auto animate uk-invisible">
            <p class="lead">No apto para intolerantes a la lactosa</p>
          </div>
          <div class="uk-margin-medium-top animate uk-invisible" data-uk-margin data-uk-scrollspy-class="uk-animation-fade uk-invisible">
            <a href="{{route('acemilas')}}" class="uk-button uk-button-default uk-button-large uk-width-2-3 uk-width-auto@s" data-uk-icon="arrow-right" title="Novedades">NOVEDADES</a>
            <a href="{{route('cajeta')}}" class="uk-button uk-button-primary uk-button-large uk-width-2-3 uk-width-auto@s"  title="Contacto">CONTACTO</a>
          </div>
        </div>
        <!-- /TEXT -->
        <!-- FOOT -->
        <div class="uk-position-bottom-center uk-position-small">
          <span class="uk-text-small uk-text-center">© 2021 | MalaLeche | <a href="https://dragonware.com.mx/" title="Visita DragonWare" target="_blank" data-uk-tooltip>Desarrollado por DragonWare<img class="uk-margin-small-left img-dragon" src="{{asset('img/icons/dragonBlanco.png')}}" style="width:23px"></a></span>
        </div>
        <!-- /FOOT -->
      </div>
    </div>
		<!-- OFFCANVAS -->
		<div id="offcanvas-nav" data-uk-offcanvas="flip: true; overlay: false">
			<div class="uk-offcanvas-bar uk-offcanvas-bar-animation uk-offcanvas-slide">
				<button class="uk-offcanvas-close uk-close uk-icon" type="button" data-uk-close></button>
				<ul class="uk-nav uk-nav-default">
					<li class="uk-nav-header">MENÚ</li>
          <li class="uk-nav-divider"></li>
          <li><a href="{{route('inicio')}}"><span class="uk-margin-small-right uk-icon" data-uk-icon="icon: home"></span> Inicio</a></li>
          <li><a href="{{route('establo')}}" uk-tooltip="title: Colaboradores; pos: left">Establo</a></li>
          <li><a href="{{route('jocoque')}}" uk-tooltip="title: Contenido; pos: left">Jocoque</a></li>
          <li><a href="{{route('acemilas')}}" uk-tooltip="title: Novedades; pos: left">Acémilas</a></li>
          <li><a href="{{route('cajeta')}}" uk-tooltip="title: Contacto; pos: left">Cajeta</a></li>
				</ul>
				<h4 style="margin-bottom:0px">Mala leche</h4>
				<p class="uk-text-small" style="margin-top:0px; font-weight:200px">No apto para intolerantes a la lactosa.</p>
			</div>
		</div>
		<!-- /OFFCANVAS -->
		
		<!-- JS FILES -->
		<script src="https://cdn.jsdelivr.net/npm/uikit@latest/dist/js/uikit.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/uikit@latest/dist/js/uikit-icons.min.js"></script>
	</body>
</html>
