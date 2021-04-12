<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>@yield("title")</title>
		<link rel="icon" href="{{asset('img/icons/MalaLeche_logo.png')}}">
		<!-- CSS FILES -->
		<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/uikit@latest/dist/css/uikit.min.css">
		<link rel="stylesheet" type="text/css" href="css/marketing.css">
        <link rel="stylesheet" type="text/css" href="css/cards.css">
	</head>
	<body>
		<!-- TOP -->
		<div class="top-wrap uk-position-relative uk-light uk-background-secondary">
			
			<!-- NAV -->
			<div class="nav" data-uk-sticky="cls-active: uk-background-secondary uk-box-shadow-medium; top: 100vh; animation: uk-animation-slide-top">
				<div class="uk-container">
					<nav class="uk-navbar uk-navbar-container uk-navbar-transparent" data-uk-navbar>
						<div class="uk-navbar-left">
							<div class="uk-navbar-item uk-padding-remove-horizontal">
								<a class="uk-logo" title="Logo" href="{{route('inicio')}}"><img src="{{asset('img/icons/MalaLeche_logo_white.png')}}" alt="Logo" style="width:100px; height:50px"></a>
							</div>
						</div>
						<div class="uk-navbar-right">
							<ul class="uk-navbar-nav uk-visible@s">
								<li class="uk-active uk-visible@m"><a href="{{route('inicio')}}" data-uk-icon="home"></a></li>
								<li class="uk-visible@s"><a href="{{route('establo')}}" title="Colaboradores" data-uk-tooltip>Establo</a></li>
                                <li class="uk-visible@s"><a href="{{route('jocoque')}}" title="Contenido" data-uk-tooltip>Jocoque</a></li>
                                <li class="uk-visible@s"><a href="{{route('acemilas')}}" title="Novedades" data-uk-tooltip>Acémilas</a></li>
                                <li class="uk-visible@s"><a href="{{route('cajeta')}}" title="Contacto" data-uk-tooltip>Cajeta</a></li>
							</ul>
							<a class="uk-navbar-toggle uk-navbar-item uk-hidden@s" data-uk-toggle data-uk-navbar-toggle-icon href="#offcanvas-nav"></a>
						</div>
					</nav>
				</div>
			</div>
			<!-- /NAV -->
			
			<div class="uk-cover-container uk-light uk-flex uk-flex-middle top-wrap-height" style="background-color:black">
				
				<!-- TOP CONTAINER -->
				@yield("top")
				<!-- /TOP IMAGE -->
			</div>
			<div class="uk-position-bottom-center uk-position-medium uk-position-z-index uk-text-center">
				<a href="#content" data-uk-scroll="duration: 500" data-uk-icon="icon: arrow-down; ratio: 2"></a>
			</div>
		</div>
		<!-- /TOP -->
		@yield("body")
		
		
		
		<!-- FOOTER -->
		<footer class="uk-section uk-section-secondary uk-padding-remove-bottom">
			<div class="uk-container">
				<div class="uk-grid uk-grid-large" data-uk-grid>
					<div class="uk-width-1-2@m">
						<h5>MALA LECHE</h5>
						<p>No apto para intolerantes a la lactosa</p>
						<div>
							<a href="" class="uk-icon-button" data-uk-icon="twitter" target="_blank"></a>
							<a href="" class="uk-icon-button" data-uk-icon="facebook" target="_blank"></a>
							<a href="" class="uk-icon-button" data-uk-icon="instagram" target="_blank"></a>
						</div>
					</div>					
				</div>
			</div>
			
			<div class="uk-text-center uk-padding uk-padding-remove-horizontal">
				<span class="uk-text-small uk-text-center">© 2021 | MalaLeche | <a href="https://dragonware.com.mx/" title="Visita DragonWare" target="_blank" data-uk-tooltip>Desarrollado por DragonWare<img class="uk-margin-small-left img-dragon" src="{{asset('img/icons/dragonBlanco.png')}}" style="width:23px"></a></span>
			</div>
		</footer>
		<!-- /FOOTER -->

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
