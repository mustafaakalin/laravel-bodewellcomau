@extends('layouts.app')

@section('content')


<div id="main-wrapper" class="layout-main-wrapper clearfix">
    <div id="main">
        <main class="main-content" id="content" role="main">
            <section class="section">
                <a id="main-content" class="sr-only sr-only-focusable" tabindex=" -1" href="#">go to
                    main content</a>
                <section class="region region-messages">
                    <div data-drupal-messages-fallback class="hidden"></div>

                </section>

                <div id="block-bcc-content" class="block block-system block-system-main-block">


                    <div class="content">
                        <div data-history-node-id="14"
                            class="node node--type-page node--view-mode-full ds-1col clearfix" typeof="schema:WebPage">



                            <div class="inner-page-banner">
                                <div class="banner-gradient-bg"></div>
                                <div class="container-xl">
                                    <div class="row">
                                        <div class="col">
                                            <h1>
                                                {{ $page->title }}
                                            </h1>




                                            <nav role="navigation" aria-label="breadcrumb">
                                                <ol class="breadcrumb">
                                                    <li class="breadcrumb-item">
                                                        <a href="../index.html">Home</a>
                                                    </li>
                                                    <li class="breadcrumb-item">
                                                        <a href="../aged-care.html">Aged care</a>
                                                    </li>
                                                    <li class="breadcrumb-item active">
                                                        {{ $page->title }}
                                                    </li>
                                                </ol>
                                            </nav>

                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div
                                class="field field--name-field-sections field--type-entity-reference-revisions field--label-hidden field__items">
                                <div class="field__item">
                                    <div class="paragraph paragraph--type--section paragraph--view-mode--default">

                                        <div
                                            class="field field--name-field-section-content field--type-entity-reference-revisions field--label-hidden field__items">
                                            <div class="field__item">
                                                <div class="container-xl">
                                                    <div class="row justify-content-center">
                                                        <div class="col-12 col-lg-8">
                                                            <div
                                                                class="paragraph paragraph--type--long-formatted-text paragraph--view-mode--default d-flex flex-row justify-content-center align-items-center">

                                                                <div
                                                                    class="clearfix text-formatted field field--name-field-long-formatted-text field--type-text-long field--label-hidden field__item">
                                                                    <p>{!! $page->content !!}
                                                                        <br />
                                                                         
                                                                    </p>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="field__item">
                                <div class="paragraph paragraph--type--section paragraph--view-mode--default">

                                    <div
                                        class="field field--name-field-section-content field--type-entity-reference-revisions field--label-hidden field__items">
                                        <div class="field__item">
                                            <div
                                                class="paragraph paragraph--type--card-image paragraph--view-mode--default">
                                                <div class="image-container">
                                                    <div>

                                                        <picture>
                                                            <source
                                                                srcset="/sites/default/files/styles/card/public/media-image/shutterstock-1414142138-copye1e9.png"
                                                                type="image/webp"
                                                                sizes="800px, (max-width: 800px) 100vw" />
                                                            <source
                                                                srcset="/sites/default/files/styles/card/public/media-image/shutterstock-1414142138-copye1e9.png"
                                                                type="image/png"
                                                                sizes="800px, (max-width: 800px) 100vw" />
                                                            <img srcset="/sites/default/files/styles/card/public/media-image/shutterstock-1414142138-copye1e9.png"
                                                                sizes="800px, (max-width: 800px) 100vw"
                                                                src="/sites/default/files/styles/card/public/media-image/shutterstock-1414142138-copye1e9.png"
                                                                alt="Aged care" typeof="foaf:Image" />

                                                        </picture>



                                                    </div>

                                                </div>
                                                <div class="text-container">

                                                    <div
                                                        class="paragraph paragraph--type--long-formatted-text paragraph--view-mode--default">

                                                        <div
                                                            class="clearfix text-formatted field field--name-field-long-formatted-text field--type-text-long field--label-hidden field__item">
                                                            <p>Talk to us about  services
                                                            </p>
                                                        </div>

                                                    </div>




                                                    <div class="container-xl px-0">
                                                        <div
                                                            class="paragraph paragraph--type--_-columns paragraph--type--two-col paragraph--view-mode--default row no-gutters justify-content-start">
                                                            <div class="col-12 col-lg-12">
                                                                <div class="row">
                                                                    <div class="col-12 col-lg-6 mb-3 mg-lg-0">

                                                                        <div
                                                                            class="paragraph paragraph--type--link paragraph--view-mode--default full-width-btn-container">
                                                                            <a href="../contact.html" target="_self"
                                                                                class="btn btn-arrow">Get
                                                                                in touch</a>

                                                                        </div>

                                                                    </div>
                                                                    <div class="col-12 col-lg-6 mb-3 mg-lg-0">
                                                                        <div
                                                                            class="paragraph paragraph--type--block paragraph--view-mode--default">

                                                                            <div
                                                                                class="field field--name-field-block field--type-block-field field--label-hidden field__item">
                                                                                <div id="block-bcccontactblock"
                                                                                    class="block block-bcc-settings block-bcc-contact-block">


                                                                                    <div class="content">
                                                                                        <ul>
                                                                                            <li>
                                                                                                <a class="link"
                                                                                                    href="tel:1300 726 291">
                                                                                                    <i
                                                                                                        class="fas fa-phone-alt fa-xs"></i>
                                                                                                    1300
                                                                                                    726
                                                                                                    291</a>
                                                                                            </li>
                                                                                        </ul>

                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </div>

                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>


                            <div
                                class="field field--name-dynamic-block-fieldnode-page-social-share field--type-ds field--label-hidden field__item">
                                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                                <script type="text/javascript"
                                    src="../../s7.addthis.com/js/300/addthis_widget.js#pubid=ra-60ee6e25825f1b8a">
                                </script>

                                <div class="container-xl">
                                    <div class="row justify-content-center">
                                        <div class="col-auto">
                                            <div class="social-share-container">
                                                <div class="social-share-inner">
                                                    <p>Share</p>

                                                    <div class="addthis_inline_share_toolbox"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>


                    </div>
                </div>


            </section>
        </main>

    </div>
</div>

@endsection