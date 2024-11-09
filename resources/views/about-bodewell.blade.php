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
                        <div data-history-node-id="5" class="node node--type-page node--view-mode-full ds-1col clearfix"
                            typeof="schema:WebPage">
                            <div class="inner-page-banner">
                                <div class="banner-gradient-bg"></div>
                                <div class="container-xl">
                                    <div class="row">
                                        <div class="col">
                                            <h1>
                                                About
                                                BodeWell
                                            </h1>

                                            <nav role="navigation" aria-label="breadcrumb">
                                                <ol class="breadcrumb">
                                                    <li class="breadcrumb-item">
                                                        <a href="index.html">Home</a>
                                                    </li>
                                                    <li class="breadcrumb-item active">
                                                        About
                                                        BodeWell
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
                                                        <div class="col-12 col-lg-10">
                                                            <div
                                                                class="paragraph paragraph--type--centered-text paragraph--view-mode--default d-flex flex-row justify-content-center align-items-center">
                                                                <div
                                                                    class="clearfix text-formatted field field--name-field-long-formatted-text field--type-text-long field--label-hidden field__item">
                                                                    <p>
                                                                        {!! $aboutTitle !!}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="field__item">
                                                <div class="container-xl">
                                                    <div
                                                        class="paragraph paragraph--type--two-col-card paragraph--view-mode--default row">
                                                        <div class="col-12 col-lg-6">
                                                            <div
                                                                class="paragraph paragraph--type--card paragraph--view-mode--default full-width-btn-container">
                                                                <div
                                                                    class="field field--name-field-icon field--type-entity-reference field--label-hidden field__item">
                                                                    <div>
                                                                        <img width="65" height="65"
                                                                            src="sites/default/files/media-icon/group-2%20(2).svg"
                                                                            alt="Wink smiley" loading="lazy"
                                                                            typeof="foaf:Image" />
                                                                    </div>
                                                                </div>

                                                                <div
                                                                    class="field field--name-field-title field--type-string field--label-hidden field__item">
                                                                    Our
                                                                    people
                                                                </div>

                                                                <div
                                                                    class="field field--name-field-long-plain-text field--type-string-long field--label-hidden field__item">
                                                                    {!! $our_people !!}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-lg-6">
                                                            <div
                                                                class="paragraph paragraph--type--card paragraph--view-mode--default full-width-btn-container">
                                                                <div
                                                                    class="field field--name-field-icon field--type-entity-reference field--label-hidden field__item">
                                                                    <div>
                                                                        <img width="65" height="65"
                                                                            src="sites/default/files/media-icon/group-2.svg"
                                                                            alt="Hands raising a heart" loading="lazy"
                                                                            typeof="foaf:Image" />
                                                                    </div>
                                                                </div>

                                                                <div
                                                                    class="field field--name-field-title field--type-string field--label-hidden field__item">
                                                                    Standards
                                                                    of
                                                                    care
                                                                </div>

                                                                <div
                                                                    class="field field--name-field-long-plain-text field--type-string-long field--label-hidden field__item">
                                                                    {!! $standards_of_care !!}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="field__item">
                                                <div class="container-xl">
                                                    <div class="row justify-content-center">
                                                        <div class="col-12 col-lg-8">
                                                            <div
                                                                class="paragraph paragraph--type--long-formatted-text paragraph--view-mode--default d-flex flex-row justify-content-center align-items-center">
                                                                <div
                                                                    class="clearfix text-formatted field field--name-field-long-formatted-text field--type-text-long field--label-hidden field__item">
                                                                    <p>
                                                                        {!! $small_text !!}                                                                    </p>

                                                                    <h2>
                                                                        Our
                                                                        mission
                                                                    </h2>

                                                                    <p>
                                                                        {!! $our_mission !!}
                                                                    </p>

                                                                    <h2>
                                                                        Our
                                                                        values
                                                                    </h2>

                                                                    <p>
                                                                        {!! $our_values !!}
                                                                    </p>

                                                                    <h2>
                                                                        Our
                                                                        services
                                                                    </h2>

                                                                    <p>
                                                                        {!! $our_services !!}
                                                                    <h2>
                                                                        Our
                                                                        Relationship-First
                                                                        Approach 
                                                                    </h2>

                                                                    <p>
                                                                        {!! $our_relationship_first_approach !!}
                                                                    </p>

                                                                    <h2>
                                                                        Contact
                                                                        us 
                                                                    </h2>

                                                                    <p>
                                                                        {!! $contact_us !!}
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

                            <div
                                class="field field--name-dynamic-block-fieldnode-page-social-share field--type-ds field--label-hidden field__item">
                                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                                <script type="text/javascript"
                                    src="../s7.addthis.com/js/300/addthis_widget.js#pubid=ra-60ee6e25825f1b8a">
                                </script>

                                <div class="container-xl">
                                    <div class="row justify-content-center">
                                        <div class="col-auto">
                                            <div class="social-share-container">
                                                <div class="social-share-inner">
                                                    <p>
                                                        Share
                                                    </p>

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