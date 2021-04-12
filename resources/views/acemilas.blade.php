@extends('layouts.layout')

@section('title')
Acémilas - MalaLeche
@endsection

@section('top')
<div class="uk-container uk-flex-auto top-container uk-position-relative uk-margin-medium-top" data-uk-parallax="y: 0,50; easing:0; opacity:0.2">
    <div class="uk-width-1-2@s" data-uk-scrollspy="cls: uk-animation-slide-right-medium; target: > *; delay: 150">
        <h6 class="uk-text-primary uk-margin-small-bottom">MALA LECHE</h6>
        <h1 class="uk-margin-remove-top">ACÉMILAS</h1>
        <p class="subtitle-text ">Novedades editoriales de Mala leche. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore.</p>
        
    </div>
</div>
<!-- /TOP CONTAINER -->
<!-- TOP IMAGE -->
<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-srcset="https://picsum.photos/640/700/?image=816 640w,
https://cdn.pixabay.com/photo/2016/01/19/14/53/book-1149031_960_720.jpg 960w,
https://cdn.pixabay.com/photo/2016/01/19/14/53/book-1149031_960_720.jpg 1200w,
https://cdn.pixabay.com/photo/2016/01/19/14/53/book-1149031_960_720.jpg 2000w"
data-sizes="100vw"
data-src="https://cdn.pixabay.com/photo/2016/01/19/14/53/book-1149031_960_720.jpg" alt="" style="-webkit-filter: grayscale(100%); filter: grayscale(100%)" data-uk-cover data-uk-img data-uk-parallax="opacity: 1,0.1; easing:0"
>
@endsection

@section('body')
<section id="content" class="uk-section uk-section-default" style="padding-top:0px;">
    <div class="uk-container">
        <!-- FEATURED -->
        <h4 class="uk-heading-line uk-text-bold uk-padding uk-padding-remove-left uk-padding-remove-bottom"><span>Últimas Novedades</span></h4>
        <div data-uk-slider="velocity: 5">
            <div class="uk-position-relative">
                <div class="uk-slider-container">
                    <ul class="uk-slider-items uk-child-width-1-2@m uk-grid uk-grid-medium news-slide">
                        <li>
                            <div class="uk-card uk-card-default uk-card-body uk-card-small uk-flex uk-flex-middle uk-card-default uk-border-rounded" style="border:1px solid rgba(0,0,0,0.075) !important; box-shadow: 0px 0px 0px 0px !important">
                                <div class="uk-grid uk-grid-medium uk-flex uk-flex-middle" data-uk-grid>
                                    <div class="uk-width-1-3@s uk-width-2-5@m uk-height-1-1">
                                        <a class="uk-link-reset" href="#" target="_blank"><img src="https://static01.nyt.com/images/2019/11/21/books/best-books-2019/best-books-2019-mobileMasterAt3x.jpg" alt=""></a>
                                    </div>
                                    <div class="uk-width-2-3@s uk-width-3-5@m">
                                        <span class="uk-label uk-label-warning" style="font-size: 0.75rem" uk-tooltip="Editorial"><a class="uk-link-reset" href="#" target="_blank">Editorial</a></span>
                                        <h3 class="uk-card-title uk-margin-small-top uk-margin-remove-bottom" style="font-weight:700">
                                        <a class="uk-link-reset" href="#" uk-tooltip="Nombre completo del libro" target="_blank">Disappearing Earth...</a>
                                        </h3>
                                        <span class="uk-article-meta" uk-tooltip="Autor">Nombre del autor</span>
                                        <p class="uk-margin-small">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do...</p>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="uk-card uk-card-default uk-card-body uk-card-small uk-flex uk-flex-middle uk-card-default uk-border-rounded" style="border:1px solid rgba(0,0,0,0.075) !important; box-shadow: 0px 0px 0px 0px !important">
                                <div class="uk-grid uk-grid-medium uk-flex uk-flex-middle" data-uk-grid>
                                    <div class="uk-width-1-3@s uk-width-2-5@m uk-height-1-1">
                                        <a class="uk-link-reset" href="#" target="_blank"><img src="https://static01.nyt.com/images/2019/11/21/books/best-books-2019/best-books-2019-mobileMasterAt3x.jpg" alt=""></a>
                                    </div>
                                    <div class="uk-width-2-3@s uk-width-3-5@m">
                                        <span class="uk-label uk-label-warning" style="font-size: 0.75rem" uk-tooltip="Editorial"><a class="uk-link-reset" href="#" target="_blank">Editorial</a></span>
                                        <h3 class="uk-card-title uk-margin-small-top uk-margin-remove-bottom" style="font-weight:700">
                                        <a class="uk-link-reset" href="#" uk-tooltip="Nombre completo del libro" target="_blank">Disappearing Earth...</a>
                                        </h3>
                                        <span class="uk-article-meta" uk-tooltip="Autor">Nombre del autor</span>
                                        <p class="uk-margin-small">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do...</p>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="uk-card uk-card-default uk-card-body uk-card-small uk-flex uk-flex-middle uk-card-default uk-border-rounded" style="border:1px solid rgba(0,0,0,0.075) !important; box-shadow: 0px 0px 0px 0px !important">
                                <div class="uk-grid uk-grid-medium uk-flex uk-flex-middle" data-uk-grid>
                                    <div class="uk-width-1-3@s uk-width-2-5@m uk-height-1-1">
                                        <a class="uk-link-reset" href="#" target="_blank"><img src="https://static01.nyt.com/images/2019/11/21/books/best-books-2019/best-books-2019-mobileMasterAt3x.jpg" alt=""></a>
                                    </div>
                                    <div class="uk-width-2-3@s uk-width-3-5@m">
                                        <span class="uk-label uk-label-warning" style="font-size: 0.75rem" uk-tooltip="Editorial"><a class="uk-link-reset" href="#" target="_blank">Editorial</a></span>
                                        <h3 class="uk-card-title uk-margin-small-top uk-margin-remove-bottom" style="font-weight:700">
                                        <a class="uk-link-reset" href="#" uk-tooltip="Nombre completo del libro" target="_blank">Disappearing Earth...</a>
                                        </h3>
                                        <span class="uk-article-meta" uk-tooltip="Autor">Nombre del autor</span>
                                        <p class="uk-margin-small">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do...</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="uk-hidden@l uk-light">
                    <a class="uk-position-center-left uk-position-small" href="#" data-uk-slidenav-previous data-uk-slider-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small" href="#" data-uk-slidenav-next data-uk-slider-item="next"></a>
                </div>
                <div class="uk-visible@l">
                    <a class="uk-position-center-left-out uk-position-small" href="#" data-uk-slidenav-previous data-uk-slider-item="previous"></a>
                    <a class="uk-position-center-right-out uk-position-small" href="#" data-uk-slidenav-next data-uk-slider-item="next"></a>
                </div>
            </div>
            <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"><li></li></ul>
        </div>
    </div>
<!-- /FEATURED -->
</section>

<!--CONTENT-->
<div class="uk-section uk-section-default uk-padding-remove">
    <div class="uk-container">
        <div class="uk-grid" data-ukgrid>
            <div class="uk-width-1-1">
                <h4 class="uk-heading-line uk-text-bold"><span>Novedades Editoriales</span></h4>
                <div class="uk-grid uk-grid-medium uk-child-width-1-5@m uk-grid-match">
                    
                    <div>
                        <div class="uk-card uk-card-default uk-card-small" style="box-shadow: none;">
                            <div class="uk-card-media-top">
                                <a href="#" target="_blank"><img data-src="https://static01.nyt.com/images/2019/11/21/books/best-books-2019/best-books-2019-mobileMasterAt3x.jpg" width="620" height="350" data-uk-img="target: !.uk-slideshow-items" alt=""></a>
                            </div>
                            <div class="uk-card-header uk-padding-remove uk-margin-small-bottom">
                                <div class="uk-grid-small uk-flex-middle" data-uk-grid>
                                    <div class="uk-width-expand">
                                        <h6 class="uk-margin-remove-bottom uk-text-bold" uk-tooltip="Autor">Nombre del autor</h6>
                                        <a class="uk-text-meta uk-margin-remove-top uk-text-small uk-link-reset" target="_blank" href="#" uk-tooltip="Editorial">Editorial</a>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body uk-padding-remove uk-margin-large-bottom">
                                <h4 class="uk-margin-small-bottom uk-text-bold"><a class="uk-link-reset" href="#" target="_blank" uk-tooltip="Nombre completo del libro">Disappearing Earth...</a></h4>
                                <span class="uk-text-small">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do...</span>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-small" style="box-shadow: none;">
                            <div class="uk-card-media-top">
                                <a href="#" target="_blank"><img data-src="https://static01.nyt.com/images/2019/11/21/books/best-books-2019/best-books-2019-mobileMasterAt3x.jpg" width="620" height="350" data-uk-img="target: !.uk-slideshow-items" alt=""></a>
                            </div>
                            <div class="uk-card-header uk-padding-remove uk-margin-small-bottom">
                                <div class="uk-grid-small uk-flex-middle" data-uk-grid>
                                    <div class="uk-width-expand">
                                        <h6 class="uk-margin-remove-bottom uk-text-bold" uk-tooltip="Autor">Nombre del autor</h6>
                                        <a class="uk-text-meta uk-margin-remove-top uk-text-small uk-link-reset" target="_blank" href="#" uk-tooltip="Editorial">Editorial</a>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body uk-padding-remove uk-margin-large-bottom">
                                <h4 class="uk-margin-small-bottom uk-text-bold"><a class="uk-link-reset" href="#" target="_blank" uk-tooltip="Nombre completo del libro">Disappearing Earth...</a></h4>
                                <span class="uk-text-small">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do...</span>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-small" style="box-shadow: none;">
                            <div class="uk-card-media-top">
                                <a href="#" target="_blank"><img data-src="https://static01.nyt.com/images/2019/11/21/books/best-books-2019/best-books-2019-mobileMasterAt3x.jpg" width="620" height="350" data-uk-img="target: !.uk-slideshow-items" alt=""></a>
                            </div>
                            <div class="uk-card-header uk-padding-remove uk-margin-small-bottom">
                                <div class="uk-grid-small uk-flex-middle" data-uk-grid>
                                    <div class="uk-width-expand">
                                        <h6 class="uk-margin-remove-bottom uk-text-bold" uk-tooltip="Autor">Nombre del autor</h6>
                                        <a class="uk-text-meta uk-margin-remove-top uk-text-small uk-link-reset" target="_blank" href="#" uk-tooltip="Editorial">Editorial</a>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body uk-padding-remove uk-margin-large-bottom">
                                <h4 class="uk-margin-small-bottom uk-text-bold"><a class="uk-link-reset" href="#" target="_blank" uk-tooltip="Nombre completo del libro">Disappearing Earth...</a></h4>
                                <span class="uk-text-small">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do...</span>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-small" style="box-shadow: none;">
                            <div class="uk-card-media-top">
                                <a href="#" target="_blank"><img data-src="https://static01.nyt.com/images/2019/11/21/books/best-books-2019/best-books-2019-mobileMasterAt3x.jpg" width="620" height="350" data-uk-img="target: !.uk-slideshow-items" alt=""></a>
                            </div>
                            <div class="uk-card-header uk-padding-remove uk-margin-small-bottom">
                                <div class="uk-grid-small uk-flex-middle" data-uk-grid>
                                    <div class="uk-width-expand">
                                        <h6 class="uk-margin-remove-bottom uk-text-bold" uk-tooltip="Autor">Nombre del autor</h6>
                                        <a class="uk-text-meta uk-margin-remove-top uk-text-small uk-link-reset" target="_blank" href="#" uk-tooltip="Editorial">Editorial</a>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body uk-padding-remove uk-margin-large-bottom">
                                <h4 class="uk-margin-small-bottom uk-text-bold"><a class="uk-link-reset" href="#" target="_blank" uk-tooltip="Nombre completo del libro">Disappearing Earth...</a></h4>
                                <span class="uk-text-small">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do...</span>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="uk-card uk-card-default uk-card-small" style="box-shadow: none;">
                            <div class="uk-card-media-top">
                                <a href="#" target="_blank"><img data-src="https://static01.nyt.com/images/2019/11/21/books/best-books-2019/best-books-2019-mobileMasterAt3x.jpg" width="620" height="350" data-uk-img="target: !.uk-slideshow-items" alt=""></a>
                            </div>
                            <div class="uk-card-header uk-padding-remove uk-margin-small-bottom">
                                <div class="uk-grid-small uk-flex-middle" data-uk-grid>
                                    <div class="uk-width-expand">
                                        <h6 class="uk-margin-remove-bottom uk-text-bold" uk-tooltip="Autor">Nombre del autor</h6>
                                        <a class="uk-text-meta uk-margin-remove-top uk-text-small uk-link-reset" target="_blank" href="#" uk-tooltip="Editorial">Editorial</a>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-body uk-padding-remove uk-margin-large-bottom">
                                <h4 class="uk-margin-small-bottom uk-text-bold"><a class="uk-link-reset" href="#" target="_blank" uk-tooltip="Nombre completo del libro">Disappearing Earth...</a></h4>
                                <span class="uk-text-small">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do...</span>
                            </div>
                        </div>
                    </div>

                    
                </div>
                
            </div>
        </div>
    </div>
</div>
<!--/CONTENT-->
@endsection