<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Jocoque - MalaLeche</title>
		<link rel="icon" href="{{asset('img/icons/MalaLeche_logo.png')}}">
		<!-- CSS FILES -->
		<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/uikit@latest/dist/css/uikit.min.css">
		<link rel="stylesheet" type="text/css" href="/css/marketing.css">
        <link rel="stylesheet" type="text/css" href="/css/cards.css">
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
								<a class="uk-logo" title="Logo" href=""><img src="{{asset('img/icons/MalaLeche_logo_white.png')}}" alt="Logo" style="width:100px; height:50px"></a>
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
			
			<div class="uk-cover-container uk-light uk-flex uk-flex-middle" style=" height:0vh; min-height:100px; transition: height 0.25s">
				
				
			</div>
			
		</div>
		<!-- /TOP -->
		
		
		<!--CONTENT-->
		<div class="uk-section uk-section-default uk-padding-small" id="content">
			<div class="uk-container">
				<h3 class="uk-margin-remove uk-text-bold" style="margin-top:20px !important"><a href="#" class="uk-link-reset">JOCOQUE</a> - Contenido y crítica de Mala leche </h3>
				<div class="uk-navbar-right nav-overlay uk-flex uk-flex-right uk-padding-remove">
					<a class="uk-navbar-toggle  uk-padding-remove" data-uk-search-icon data-uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#"></a>
				</div>

				<div class="nav-overlay uk-navbar-left uk-flex-1" hidden>
					<div class="uk-navbar-item uk-width-expand uk-padding-remove">
						<form class="uk-search uk-search-navbar uk-width-1-1">
							<input class="uk-search-input" type="search" placeholder="Ingresa tu búsqueda" style="font-size:17px !important	">
						</form>
					</div>
					<a class="uk-navbar-toggle" data-uk-close data-uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#"></a>
				</div>

				<div class="uk-grid uk-grid-small uk-flex uk-flex-middle uk-margin-small-top  uk-flex-wrap" data-uk-grid>
					<div class="uk-width-auto@m uk-flex">
						<div class="uk-width-auto uk-margin-small-right uk-flex-middle">
							<img src="https://cdn.pixabay.com/photo/2019/09/16/09/30/alone-4480444_960_720.jpg" alt="" class="uk-border-circle" style="width:65px; height:65px">
						</div>
						<div class="uk-width-expand"> 
							<h4 class="uk-margin-remove"><a href="#" class="uk-link-reset">Nombre completo del autor.</a></h4>
							<i class="uk-text-muted uk-text-small">Colaborador desde 05 de Enero de 2021</i>
						</div>
					</div>
					<div class="uk-width-expand@m uk-flex uk-flex-right uk-flex-middle uk-margin-remove">
						<div class="uk-width-auto uk-padding-small">
							<span class="uk-text-primary" data-uk-icon="icon:calendar; ratio: 0.8"></span><span class="uk-text-small uk-text-muted uk-text-bottom"> Fecha de publicación:</span><br>
							<span class="uk-text-large uk-text-primary">13 Marzo 2021</span>
						</div>
						<div class="uk-width-auto uk-visible@m uk-padding-small">
							<span class="uk-text-success" data-uk-icon="icon:clock; ratio: 0.8"></span><span class="uk-text-small uk-text-muted  uk-text-bottom"> Hora de publicación:</span><br>
							<span class="uk-text-large uk-text-success">23:18 hrs	</span>
						</div>
						
						
						<div class="uk-width-auto">
							<button class="uk-button uk-button-default" type="button">COMPARTIR</button>
							<div uk-drop="mode: click">
								<div class="" style="background-color:white; box-shadow:0 5px 15px rgb(0 0 0 / 8%); padding:8%">
									<ul class="uk-nav uk-dropdown-nav">
										<li class="uk-nav-header">COMPARTIR EN:</li>
										<li><a href="#">Facebook</a></li>
										<li><a href="#">Twitter</a></li>
										<li><a href="#">WhatsApp</a></li>
									</ul>
								</div>
							</div>
						</div>
						
					</div>
				</div>


				<div class="uk-grid" data-ukgrid>
					<div class="uk-width-2-3@m">
						<h4 class="uk-heading-line uk-text-bold"><span>Contenido y Crítica</span></h4>
						<article class="uk-section uk-section-small uk-padding-remove-top">
							<header>
								<h2 class="uk-margin-remove-adjacent uk-text-bold uk-margin-small-bottom">Fusce facilisis tempus magna ac dignissim.</h2>
							</header>
							<figure>
								<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAyAAAAEsCAYAAAA7Ldc6AAADuUlEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAMA3p/4AAaxRls8AAAAASUVORK5CYII=" data-src="https://picsum.photos/800/300/?random=1" width="800" height="300"  alt="Alt text" class="lazy" data-uk-img>
							</figure>
							<p>Lorem ipsum dolor sit amet consectetur adipiscing elit, fames diam quis ornare imperdiet malesuada, varius penatibus maecenas porta aliquam fringilla. Sagittis massa enim lobortis justo tempor accumsan nullam viverra, donec non vel curae pulvinar ridiculus egestas himenaeos, eleifend conubia ac gravida fusce id sapien. Felis etiam dignissim est taciti nostra erat accumsan non mi parturient himenaeos senectus, cubilia primis velit congue litora mollis ad turpis duis ligula montes, lacus ante mattis blandit aenean class sagittis aptent per risus dictum.<br><br>
								Venenatis ridiculus senectus scelerisque metus lacus suspendisse, ligula non conubia fringilla vel posuere, magnis aliquet felis vehicula curae. Lobortis augue nunc integer quisque cras dignissim ullamcorper porta auctor dictumst hac senectus, phasellus natoque at elementum consequat inceptos tincidunt purus erat nostra. Proin gravida nascetur dictum primis scelerisque per sapien iaculis quisque consequat, mattis a urna sed nullam cras leo mus.</p>
							<hr>
						</article>
					</div>
					<div class="uk-width-1-3@m">
						<h4 class="uk-heading-line uk-text-bold"><span>Más de este autor</span></h4>
						<ul class="uk-list">
							<li>
								<div>
									<div class="uk-card uk-card-default uk-card-small" style="box-shadow: none;">
										<div class="uk-card-media-top">
											<a href="#"><img data-src="https://unsplash.it/620/350/?random=1" width="620" height="350" data-uk-img="target: !.uk-slideshow-items" alt=""></a>
										</div>
										<div class="uk-card-header">
											<div class="uk-grid-small uk-flex-middle" data-uk-grid>
												<div class="uk-width-auto">
													<img class="uk-border-circle" alt="" width="40" height="40" src="https://unsplash.it/60/60/?random">
												</div>
												<div class="uk-width-expand">
													<h6 class="uk-margin-remove-bottom uk-text-bold">Nombre del autor</h6>
													<p class="uk-text-meta uk-margin-remove-top uk-text-small"><time datetime="2016-04-01T19:00">05 Marzo 2021</time></p>
												</div>
											</div>
										</div>
										<div class="uk-card-body">
											<h4 class="uk-margin-small-bottom uk-text-bold">Sed do eiusmod tempor incididunt</h4>
											<span class="uk-text-small">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</span>
											<a class="uk-button uk-button-text uk-text-bold uk-margin-small" href="">LEER MÁS</a>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div>
									<div class="uk-card uk-card-default uk-card-small" style="box-shadow: none;">
										<div class="uk-card-media-top">
											<a href="#"><img data-src="https://unsplash.it/620/350/?random=1" width="620" height="350" data-uk-img="target: !.uk-slideshow-items" alt=""></a>
										</div>
										<div class="uk-card-header">
											<div class="uk-grid-small uk-flex-middle" data-uk-grid>
												<div class="uk-width-auto">
													<img class="uk-border-circle" alt="" width="40" height="40" src="https://unsplash.it/60/60/?random">
												</div>
												<div class="uk-width-expand">
													<h6 class="uk-margin-remove-bottom uk-text-bold">Nombre del autor</h6>
													<p class="uk-text-meta uk-margin-remove-top uk-text-small"><time datetime="2016-04-01T19:00">05 Marzo 2021</time></p>
												</div>
											</div>
										</div>
										<div class="uk-card-body">
											<h4 class="uk-margin-small-bottom uk-text-bold">Sed do eiusmod tempor incididunt</h4>
											<span class="uk-text-small">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</span>
											<a class="uk-button uk-button-text uk-text-bold uk-margin-small" href="">LEER MÁS</a>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!--/CONTENT-->



		
		
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
