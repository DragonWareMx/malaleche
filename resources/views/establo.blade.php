@extends('layouts.layout')

@section('title')
Establo - MalaLeche
@endsection

@section('top')
<div class="uk-container uk-flex-auto top-container uk-position-relative uk-margin-medium-top" data-uk-parallax="y: 0,50; easing:0; opacity:0.2">
    <div class="uk-width-1-2@s" data-uk-scrollspy="cls: uk-animation-slide-right-medium; target: > *; delay: 150">
        <h6 class="uk-text-primary uk-margin-small-bottom">MALA LECHE</h6>
        <h1 class="uk-margin-remove-top">ESTABLO</h1>
        <p class="subtitle-text ">Colaboradores de Mala leche. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore.</p>
        <a href="{{route('cajeta')}}" title="Learn More" class="uk-button uk-button-primary uk-border-pill" data-uk-scrollspy-class="uk-animation-fade">CONTACTO</a>
    </div>
</div>
<!-- /TOP CONTAINER -->
<!-- TOP IMAGE -->
<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-srcset="https://picsum.photos/640/700/?image=816 640w,
https://cdn.pixabay.com/photo/2013/10/31/13/43/manuscript-203465_960_720.jpg 960w,
https://cdn.pixabay.com/photo/2013/10/31/13/43/manuscript-203465_960_720.jpg 1200w,
https://cdn.pixabay.com/photo/2013/10/31/13/43/manuscript-203465_960_720.jpg 2000w"
data-sizes="100vw"
data-src="https://cdn.pixabay.com/photo/2013/10/31/13/43/manuscript-203465_960_720.jpg" alt="" style="-webkit-filter: grayscale(100%); filter: grayscale(100%)" data-uk-cover data-uk-img data-uk-parallax="opacity: 1,0.1; easing:0"
>
@endsection

@section('body')
<section id="content" class="uk-section uk-section-default" style="padding-top:0px">
    <div class="uk-container">
        <p class="uk-text-center uk-text-large uk-padding">NUESTROS COLABORADORES</p>
        <div class="uk-grid uk-grid-medium uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-4@l  uk-child-width-1-5@xl uk-grid-match js-filter" data-uk-grid="masonry: true" data-uk-sortable="handle: .drag-icon">
            <!-- card -->
            <div class="nature-card" data-tags="a beautiful landscape - nature outdoor"> 
                <div class="uk-card uk-card-small uk-card-default">
                    <div class="uk-card-header">
                        <div class="uk-grid uk-grid-small uk-text-small" data-uk-grid>
                            <div class="uk-width-expand">
                                <span class="cat-txt">POESÍA / NOVELA</span>
                            </div>
                        </div>
                    </div>
                    <div class="uk-card-media">
                        <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                            <img class="lazy" data-src="https://cdn.pixabay.com/photo/2019/11/07/17/54/woman-4609514_960_720.jpg" data-width="400" data-height="300" data-uk-img alt="" src="">
                            <div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-primary">
                                <span data-uk-icon="icon:file-text; ratio: 0.8"></span> 12.345
                            </div>
                        </div>
                        
                    </div>
                    <div class="uk-card-body">
                        <h6 class="uk-margin-small-bottom uk-margin-remove-adjacent uk-text-bold"><a href="#" class="uk-link-reset">NOMBRE COMPLETO COLABORADOR</a></h6>
                        <p class="uk-text-small uk-text-muted">Semblanza. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                    <div class="uk-card-footer">
                        <div class="uk-grid uk-grid-small uk-grid-divider uk-flex uk-flex-middle" data-uk-grid>
                            <div class="uk-width-expand uk-text-small" data-uk-tooltip="title: Última entrada">
                                <span data-uk-icon="icon:clock; ratio: 0.5"></span> 10 Días.
                            </div>
                            <div class="uk-width-auto uk-text-right">
                                <a href="#" data-uk-tooltip="title: Twitter" class="uk-icon-link" data-uk-icon="icon:twitter; ratio: 0.8"></a>
                                <a href="#" data-uk-tooltip="title: Instagram" class="uk-icon-link" data-uk-icon="icon:instagram; ratio: 0.8"></a>
                                <a href="#" data-uk-tooltip="title: Facebook" class="uk-icon-link" data-uk-icon="icon:facebook; ratio: 0.8"></a>
                                <a href="#" data-uk-tooltip="title: Youtube" class="uk-icon-link" data-uk-icon="icon:youtube; ratio: 0.8"></a>
                            </div>
                            <div class="uk-width-auto uk-text-right">
                                <a data-uk-tooltip="title: Ver más" href="#" class="uk-icon-link" data-uk-icon="icon: arrow-right; ratio: 1"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /card -->

            <!-- card -->
            <div class="nature-card" data-tags="a beautiful landscape - nature outdoor"> 
                <div class="uk-card uk-card-small uk-card-default">
                    <div class="uk-card-header">
                        <div class="uk-grid uk-grid-small uk-text-small" data-uk-grid>
                            <div class="uk-width-expand">
                                <span class="cat-txt">POESÍA / NOVELA</span>
                            </div>
                        </div>
                    </div>
                    <div class="uk-card-media">
                        <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                            <img class="lazy" data-src="https://cdn.pixabay.com/photo/2017/08/12/18/31/male-2634974_960_720.jpg" data-width="400" data-height="300" data-uk-img alt="" src="">
                            <div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-primary">
                                <span data-uk-icon="icon:file-text; ratio: 0.8"></span> 12.345
                            </div>
                        </div>
                        
                    </div>
                    <div class="uk-card-body">
                        <h6 class="uk-margin-small-bottom uk-margin-remove-adjacent uk-text-bold"><a href="#" class="uk-link-reset">NOMBRE COMPLETO COLABORADOR</a></h6>
                        <p class="uk-text-small uk-text-muted">Semblanza. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                    <div class="uk-card-footer">
                        <div class="uk-grid uk-grid-small uk-grid-divider uk-flex uk-flex-middle" data-uk-grid>
                            <div class="uk-width-expand uk-text-small" data-uk-tooltip="title: Última entrada">
                                <span data-uk-icon="icon:clock; ratio: 0.5"></span> 10 Días.
                            </div>
                            <div class="uk-width-auto uk-text-right">
                                <a href="#" data-uk-tooltip="title: Twitter" class="uk-icon-link" data-uk-icon="icon:twitter; ratio: 0.8"></a>
                                <a href="#" data-uk-tooltip="title: Instagram" class="uk-icon-link" data-uk-icon="icon:instagram; ratio: 0.8"></a>
                                <a href="#" data-uk-tooltip="title: Facebook" class="uk-icon-link" data-uk-icon="icon:facebook; ratio: 0.8"></a>
                                <a href="#" data-uk-tooltip="title: Youtube" class="uk-icon-link" data-uk-icon="icon:youtube; ratio: 0.8"></a>
                            </div>
                            <div class="uk-width-auto uk-text-right">
                                <a data-uk-tooltip="title: Ver más" href="#" class="uk-icon-link" data-uk-icon="icon: arrow-right; ratio: 1"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /card -->

            <!-- card -->
            <div class="nature-card" data-tags="a beautiful landscape - nature outdoor"> 
                <div class="uk-card uk-card-small uk-card-default">
                    <div class="uk-card-header">
                        <div class="uk-grid uk-grid-small uk-text-small" data-uk-grid>
                            <div class="uk-width-expand">
                                <span class="cat-txt">POESÍA / NOVELA</span>
                            </div>
                        </div>
                    </div>
                    <div class="uk-card-media">
                        <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                            <img class="lazy" data-src="https://cdn.pixabay.com/photo/2019/12/04/09/30/man-4672229_960_720.jpg" data-width="400" data-height="300" data-uk-img alt="" src="">
                            <div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-primary">
                                <span data-uk-icon="icon:file-text; ratio: 0.8"></span> 12.345
                            </div>
                        </div>
                        
                    </div>
                    <div class="uk-card-body">
                        <h6 class="uk-margin-small-bottom uk-margin-remove-adjacent uk-text-bold"><a href="#" class="uk-link-reset">NOMBRE COMPLETO COLABORADOR</a></h6>
                        <p class="uk-text-small uk-text-muted">Semblanza. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                    <div class="uk-card-footer">
                        <div class="uk-grid uk-grid-small uk-grid-divider uk-flex uk-flex-middle" data-uk-grid>
                            <div class="uk-width-expand uk-text-small" data-uk-tooltip="title: Última entrada">
                                <span data-uk-icon="icon:clock; ratio: 0.5"></span> 10 Días.
                            </div>
                            <div class="uk-width-auto uk-text-right">
                                <a href="#" data-uk-tooltip="title: Twitter" class="uk-icon-link" data-uk-icon="icon:twitter; ratio: 0.8"></a>
                                <a href="#" data-uk-tooltip="title: Instagram" class="uk-icon-link" data-uk-icon="icon:instagram; ratio: 0.8"></a>
                                <a href="#" data-uk-tooltip="title: Facebook" class="uk-icon-link" data-uk-icon="icon:facebook; ratio: 0.8"></a>
                                <a href="#" data-uk-tooltip="title: Youtube" class="uk-icon-link" data-uk-icon="icon:youtube; ratio: 0.8"></a>
                            </div>
                            <div class="uk-width-auto uk-text-right">
                                <a data-uk-tooltip="title: Ver más" href="#" class="uk-icon-link" data-uk-icon="icon: arrow-right; ratio: 1"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /card -->

            <!-- card -->
            <div class="nature-card" data-tags="a beautiful landscape - nature outdoor"> 
                <div class="uk-card uk-card-small uk-card-default">
                    <div class="uk-card-header">
                        <div class="uk-grid uk-grid-small uk-text-small" data-uk-grid>
                            <div class="uk-width-expand">
                                <span class="cat-txt">POESÍA / NOVELA</span>
                            </div>
                        </div>
                    </div>
                    <div class="uk-card-media">
                        <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                            <img class="lazy" data-src="https://cdn.pixabay.com/photo/2019/09/16/09/30/alone-4480444_960_720.jpg" data-width="400" data-height="300" data-uk-img alt="" src="">
                            <div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-primary">
                                <span data-uk-icon="icon:file-text; ratio: 0.8"></span> 12.345
                            </div>
                        </div>
                        
                    </div>
                    <div class="uk-card-body">
                        <h6 class="uk-margin-small-bottom uk-margin-remove-adjacent uk-text-bold"><a href="#" class="uk-link-reset">NOMBRE COMPLETO COLABORADOR</a></h6>
                        <p class="uk-text-small uk-text-muted">Semblanza. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                    <div class="uk-card-footer">
                        <div class="uk-grid uk-grid-small uk-grid-divider uk-flex uk-flex-middle" data-uk-grid>
                            <div class="uk-width-expand uk-text-small" data-uk-tooltip="title: Última entrada">
                                <span data-uk-icon="icon:clock; ratio: 0.5"></span> 10 Días.
                            </div>
                            <div class="uk-width-auto uk-text-right">
                                <a href="#" data-uk-tooltip="title: Twitter" class="uk-icon-link" data-uk-icon="icon:twitter; ratio: 0.8"></a>
                                <a href="#" data-uk-tooltip="title: Instagram" class="uk-icon-link" data-uk-icon="icon:instagram; ratio: 0.8"></a>
                                <a href="#" data-uk-tooltip="title: Facebook" class="uk-icon-link" data-uk-icon="icon:facebook; ratio: 0.8"></a>
                                <a href="#" data-uk-tooltip="title: Youtube" class="uk-icon-link" data-uk-icon="icon:youtube; ratio: 0.8"></a>
                            </div>
                            <div class="uk-width-auto uk-text-right">
                                <a data-uk-tooltip="title: Ver más" href="#" class="uk-icon-link" data-uk-icon="icon: arrow-right; ratio: 1"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /card -->
        </div>

    </div>
</section>
@endsection