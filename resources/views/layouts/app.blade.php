<!DOCTYPE html>
<html lang="en">
@php
use App\Models\SiteSetting;
$site_name = SiteSetting::value('site_name');
$site_email = SiteSetting::value('site_email');
$site_phone = SiteSetting::value('site_phone');
$site_address = SiteSetting::value('site_address');
$site_logo = SiteSetting::value('site_logo');
$site_favicon_logo = SiteSetting::value('site_favicon_logo');
$site_facebook = SiteSetting::value('site_facebook');
$site_linkedin = SiteSetting::value('site_linkedin');

@endphp

<head>
	<meta charset="utf-8" />
	<script>
		(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&amp;l='+l:'';j.async=true;j.src=
'../www.googletagmanager.com/gtm5445.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','G-91NWR678LP');
	</script>
	<meta name="description"
		content="BodeWell provides in-home aged care and NDIS support so you can continue to enjoy your home and lifestyle for as long as you like, in the way you like." />
	<link rel="canonical" href="index.html" />
	<meta name="robots" content="index" />
	<link rel="shortlink" href="index.html" />
	<meta name="google" content="0cHVGFVYsiwAUDRBg0ts0vBmqA-NHKIR7VW9NyNkg3s" />
	<meta property="og:site_name" content="{{ $site_name }}" />
	<meta property="og:type" content="Website" />
	<meta property="og:url" content="https://bodewellcc.com.au/" />
	<meta property="og:title" content="{{ $site_name }}" />
	<meta property="og:description"
		content="BodeWell provides in-home aged care and NDIS support so you can continue to enjoy your home and lifestyle for as long as you like, in the way you like." />
	<meta property="og:image"
		content="https://bodewellcc.com.au/sites/default/files/styles/banner/public/media-image/BODEWELL_Header%20Banners_1.webp?h=e0d9a4bb&amp;itok=w2WCJ203" />
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:title" content="{{ $site_name }}" />
	<meta name="twitter:description"
		content="BodeWell provides in-home aged care and NDIS support so you can continue to enjoy your home and lifestyle for as long as you like, in the way you like." />
	<meta name="twitter:url" content="https://bodewellcc.com.au/" />
	<meta name="twitter:image"
		content="https://bodewellcc.com.au/sites/default/files/styles/banner/public/media-image/BODEWELL_Header%20Banners_1.webp?h=e0d9a4bb&amp;itok=w2WCJ203" />
	<meta name="google-site-verification" content="0cHVGFVYsiwAUDRBg0ts0vBmqA-NHKIR7VW9NyNkg3s" />
	<meta name="Generator" content="Drupal 9 (https://www.drupal.org)" />
	<meta name="MobileOptimized" content="width" />
	<meta name="HandheldFriendly" content="true" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta http-equiv="x-ua-compatible" content="ie=edge" />
	<link rel="icon" href="/storage/{{ $site_favicon_logo }}" type="image/svg+xml" />

	<title>{{ $site_name }} | In-Home Care &amp; Support</title>
	<link rel="stylesheet" media="all"
		href="/sites/default/files/css/css_sl7QUD1H8m-3-HmAxYnsPVDgLlc-msHkQ9qf52aVYeE.css" />
	<link rel="stylesheet" media="all"
		href="/sites/default/files/css/css_o-l1TtMNR31U9433W6lEiWIOK9DHWKgs-UaWzRLYjZc.css" />
	<link rel="stylesheet" media="print"
		href="/sites/default/files/css/css_AbpHGcgLb-kRsJGnwFEktk7uzpZOCcBY74-YBdrKVGs.css" />
	<link rel="stylesheet" media="all"
		href="/sites/default/files/css/css_OnJsp46V7UJ_PwDWK5uy5wgNygmjG4oUQ5-BWXc9hyk.css" />
	@vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body class="layout-no-sidebars page-node-1 path-frontpage node--type-page">

	<a href="#main-content" class="visually-hidden-focusable">
		Skip to main content
	</a>
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=G-91NWR678LP" height="0" width="0"
			style="display:none;visibility:hidden;"></iframe>
	</noscript>
	<div class="dialog-off-canvas-main-canvas" data-off-canvas-main-canvas>

		<div id="page-wrapper">
			<div id="page">
				<header id="header" class="header" role="banner" aria-label="Site header">

					<style type="text/css">
						.visually-hidden-focusable {
							display: none;
						}
					</style>
					<div class="container-xl">
						<div class="row justify-content-between align-items-center ">
							<div class="col-6 col-lg-2">
								<section class="region region-logo">
									<a href="/index.html" title="Home" rel="home" class="d-block">
										<img class="lazy" data-src="/storage/{{ $site_logo }}" alt="Home" width="203"
											height="150" class="img-fluid d-block align-center" />
									</a>

								</section>

							</div>
							<div class="col-6 col-lg-10">
								<div class="d-flex d-lg-none bcc-mobile-menu justify-content-end">

									<button aria-label="close mobile menu" id="mobile-menu-closealldropdown"
										class="link">
										<i class="fas fa-chevron-left fa-3x"></i>
									</button>

									<button id="mobile-menu-toggle" class="hamburger hamburger--spin" type="button"
										aria-label="Menu" aria-controls="navigation" aria-expanded="false">
										<span class="hamburger-box">
											<span class="hamburger-inner"></span>
										</span>
									</button>
									<div id="mobile-menu-overlay"></div>
									<div id="mobile-menu-container">
										<section class="region region-mobile-menu">
											<div class="views-exposed-form block block-views block-views-exposed-filter-blocksolr-nodes-search-page"
												data-drupal-selector="views-exposed-form-solr-nodes-search-page"
												id="block-exposedformsolr-nodes-searchpage-mobile">


												<div class="content">


													<form action="http://bodewellcc.com.au/search" method="get"
														id="views-exposed-form-solr-nodes-search-page"
														accept-charset="UTF-8">
														<div class="d-flex flex-wrap">




															<fieldset
																class="js-form-item js-form-type-textfield form-type-textfield js-form-item-keys form-item-keys mb-4">
																<label for="edit-keys">Search</label>
																<input placeholder="Search..."
																	data-drupal-selector="edit-keys" type="text"
																	id="edit-keys" name="keys" value="" size="30"
																	maxlength="128" class="form-control" />

															</fieldset>
															<div data-drupal-selector="edit-actions"
																class="form-actions js-form-wrapper form-wrapper mb-3"
																id="edit-actions"><button aria-label="submit button"
																	data-drupal-selector="edit-submit-solr-nodes-search"
																	type="submit" id="edit-submit-solr-nodes-search"
																	value="Search"
																	class="button js-form-submit form-submit btn btn- btn-arrow"></button>

															</div>

														</div>

													</form>

												</div>
											</div>
											<nav role="navigation" aria-labelledby="block-mainnavigationmobile-menu"
												id="block-mainnavigationmobile"
												class="block block-menu navigation menu--main">

												<h2 class="visually-hidden" id="block-mainnavigationmobile-menu">Main
													navigation</h2>



												<ul class="clearfix navbar-nav">
													<li class="nav-item menu-item--expanded dropdown">
														<a href="/aged-care.html" class="nav-link nav-link--aged-care"
															data-drupal-link-system-path="node/2">Aged Care</a>
														<a href="/aged-care.html"
															class="nav-link dropdown-toggle nav-link--aged-care"
															data-toggle="dropdown" aria-expanded="false"
															aria-haspopup="true" aria-label="dropdown arrow"
															data-drupal-link-system-path="node/2"></a>
														<ul class="dropdown-menu">
															<li class="dropdown-item">
																<a href="/aged-care/understanding-eligibility-home-support.html"
																	class="nav-link--aged-care-understanding-eligibility-home-support"
																	data-drupal-link-system-path="node/14">Understanding
																	eligibility for in-home support</a>
															</li>
															<li class="dropdown-item">
																<a href="/aged-care/home-care-packages.html"
																	class="nav-link--aged-care-home-care-packages"
																	data-drupal-link-system-path="node/13">Home care
																	packages</a>
															</li>
															<li class="dropdown-item">
																<a href="/aged-care/privately-funded-home-care.html"
																	class="nav-link--aged-care-privately-funded-home-care"
																	data-drupal-link-system-path="node/15">Privately
																	Funded Home Care</a>
															</li>
															<li class="dropdown-item">
																<a href="/aged-care/commonwealth-home-support-programme.html"
																	class="nav-link--aged-care-commonwealth-home-support-programme"
																	data-drupal-link-system-path="node/16">Commonwealth
																	Home Support Programme</a>
															</li>
															<li class="dropdown-item">
																<a href="/aged-care/personalised-worker-matching.html"
																	class="nav-link--aged-care-personalised-worker-matching"
																	data-drupal-link-system-path="node/12">Personalised
																	worker matching</a>
															</li>
															<li class="dropdown-item">
																<a href="/aged-care/talk-to-us-about-aged-care-services.html"
																	class="nav-link--aged-care-talk-to-us-about-aged-care-services"
																	data-drupal-link-system-path="node/17">Talk to us
																	about aged care services</a>
															</li>
														</ul>

													</li>
													<li class="nav-item menu-item--expanded dropdown">
														<a href="ndis.html" class="nav-link nav-link--ndis"
															data-drupal-link-system-path="node/3">NDIS</a>
														<a href="/ndis.html"
															class="nav-link dropdown-toggle nav-link--ndis"
															data-toggle="dropdown" aria-expanded="false"
															aria-haspopup="true" aria-label="dropdown arrow"
															data-drupal-link-system-path="node/3"></a>
														<ul class="dropdown-menu">
															<li class="dropdown-item">
																<a href="/ndis/service-delivery.html"
																	class="nav-link--ndis-service-delivery"
																	data-drupal-link-system-path="node/18">Service
																	delivery</a>
															</li>
															<li class="dropdown-item">
																<a href="/ndis/support-coordination.html"
																	class="nav-link--ndis-support-coordination"
																	data-drupal-link-system-path="node/19">Support
																	coordination</a>
															</li>
															<li class="dropdown-item">
																<a href="/ndis/personalised-worker-matching.html"
																	class="nav-link--ndis-personalised-worker-matching"
																	data-drupal-link-system-path="node/20">Personalised
																	worker matching</a>
															</li>
															<li class="dropdown-item">
																<a href="/ndis/talk-to-us-about-ndis-services.html"
																	class="nav-link--ndis-talk-to-us-about-ndis-services"
																	data-drupal-link-system-path="node/21">Talk to us
																	about NDIS services</a>
															</li>
														</ul>

													</li>
													<li class="nav-item menu-item--expanded dropdown">
														<a href="/tac.html" class="nav-link nav-link--tac"
															data-drupal-link-system-path="node/4">TAC</a>
														<a href="/	tac.html"
															class="nav-link dropdown-toggle nav-link--tac"
															data-toggle="dropdown" aria-expanded="false"
															aria-haspopup="true" aria-label="dropdown arrow"
															data-drupal-link-system-path="node/4"></a>
														<ul class="dropdown-menu">
															<li class="dropdown-item">
																<a href="/tac/personalised-worker-matching.html"
																	class="nav-link--tac-personalised-worker-matching"
																	data-drupal-link-system-path="node/22">Personalised
																	worker matching</a>
															</li>
															<li class="dropdown-item">
																<a href="/tac/talk-to-us-about-tac-services.html"
																	class="nav-link--tac-talk-to-us-about-tac-services"
																	data-drupal-link-system-path="node/26">Talk to us
																	about TAC services</a>
															</li>
														</ul>

													</li>
													<li class="nav-item menu-item--expanded dropdown">
														<ul class="dropdown-menu">
															<li class="dropdown-item">
																@php
																use App\Models\Page;

																// get pages
																$collection = Page::all();
																@endphp
																@foreach ($collection as $item)
																<a href="/{{ $item->slug }}.html"
																	class="nav-link--tac-personalised-worker-matching"
																	data-drupal-link-system-path="node/22">{{
																	$item->title }}</a>
																@endforeach

															</li>
														</ul>

													</li>
												</ul>



											</nav>
											<nav role="navigation"
												aria-labelledby="block-secondarynavigationmobile-menu"
												id="block-secondarynavigationmobile"
												class="block block-menu navigation menu--secondary">

												<h2 class="visually-hidden" id="block-secondarynavigationmobile-menu">
													Secondary navigation</h2>



												<ul class="clearfix nav">
													<li class="nav-item menu-item--collapsed">
														<a href="about-bodewell.html"
															class="nav-link nav-link--about-bodewell"
															data-drupal-link-system-path="node/5">About BodeWell</a>
													</li>
													<li class="nav-item">
														<a href="https://careers.bodewellcc.com.au/home"
															class="nav-link nav-link-https--careersbodewellcccomau-home">Careers</a>
													</li>
													<li class="nav-item">
														<a href="/contact.html" class="nav-link nav-link--contact"
															data-drupal-link-system-path="node/6">Contact</a>
													</li>
												</ul>



											</nav>

										</section>

									</div>
								</div>

								<div class="d-none d-lg-flex flex-column bcc-desktop-menu">
									<div class="row align-items-center justify-content-end pt-2">
										<nav class="navbar" id="navbar-top">

											<section
												class="region region-secondary-menu d-flex justify-content-end align-items-center">
												<div id="block-bcccontactblock--2"
													class="block block-bcc-settings block-bcc-contact-block">


													<div class="content">
														<ul>
															<li>
																<a class="link" href="tel:{{ $site_phone }}">
																	<i class="fas fa-phone-alt fa-xs"></i>
																	{{ $site_phone }}</a>
															</li>
														</ul>

													</div>
												</div>
												<nav role="navigation" aria-labelledby="block-secondarynavigation-menu"
													id="block-secondarynavigation"
													class="block block-menu navigation menu--secondary">

													<h2 class="visually-hidden" id="block-secondarynavigation-menu">
														Secondary navigation</h2>



													<ul class="clearfix nav">
														<li class="nav-item menu-item--collapsed">
															<a href="about-bodewell.html"
																class="nav-link nav-link--about-bodewell"
																data-drupal-link-system-path="node/5">About BodeWell</a>
														</li>
														<li class="nav-item">
															<a href="https://careers.bodewellcc.com.au/home"
																class="nav-link nav-link-https--careersbodewellcccomau-home">Careers</a>
														</li>
														<li class="nav-item">
															<a href="contact.html" class="nav-link nav-link--contact"
																data-drupal-link-system-path="node/6">Contact</a>
														</li>
													</ul>



												</nav>

											</section>



										</nav>
									</div>

									<div class="row align-items-center justify-content-start ">
										<nav class="navbar navbar-expand-lg col pb-0 pt-2" id="navbar-main">



											<div class="collapse navbar-collapse justify-content-between align-items-center"
												id="CollapsingNavbar">
												<nav role="navigation" aria-labelledby="block-bcc-main-menu-menu"
													id="block-bcc-main-menu"
													class="block block-menu navigation menu--main">

													<h2 class="visually-hidden" id="block-bcc-main-menu-menu">Main
														navigation</h2>



													<ul class="clearfix navbar-nav">
														<li class="nav-item menu-item--expanded dropdown">
															<a href="/aged-care.html"
																class="nav-link nav-link--aged-care"
																data-drupal-link-system-path="node/2">Aged Care</a>
															<a href="aged-care.html"
																class="nav-link dropdown-toggle nav-link--aged-care"
																data-toggle="dropdown" aria-expanded="false"
																aria-haspopup="true" aria-label="dropdown arrow"
																data-drupal-link-system-path="node/2"></a>
															<ul class="dropdown-menu">
																<li class="dropdown-item">
																	<a href="/aged-care/understanding-eligibility-home-support.html"
																		class="nav-link--aged-care-understanding-eligibility-home-support"
																		data-drupal-link-system-path="node/14">Understanding
																		eligibility for in-home support</a>
																</li>
																<li class="dropdown-item">
																	<a href="/aged-care/home-care-packages.html"
																		class="nav-link--aged-care-home-care-packages"
																		data-drupal-link-system-path="node/13">Home care
																		packages</a>
																</li>
																<li class="dropdown-item">
																	<a href="/aged-care/privately-funded-home-care.html"
																		class="nav-link--aged-care-privately-funded-home-care"
																		data-drupal-link-system-path="node/15">Privately
																		Funded Home Care</a>
																</li>
																<li class="dropdown-item">
																	<a href="/aged-care/commonwealth-home-support-programme.html"
																		class="nav-link--aged-care-commonwealth-home-support-programme"
																		data-drupal-link-system-path="node/16">Commonwealth
																		Home Support Programme</a>
																</li>
																<li class="dropdown-item">
																	<a href="/aged-care/personalised-worker-matching.html"
																		class="nav-link--aged-care-personalised-worker-matching"
																		data-drupal-link-system-path="node/12">Personalised
																		worker matching</a>
																</li>
																<li class="dropdown-item">
																	<a href="/aged-care/talk-to-us-about-aged-care-services.html"
																		class="nav-link--aged-care-talk-to-us-about-aged-care-services"
																		data-drupal-link-system-path="node/17">Talk to
																		us about aged care services</a>
																</li>
															</ul>

														</li>
														<li class="nav-item menu-item--expanded dropdown">
															<a href="/ndis.html" class="nav-link nav-link--ndis"
																data-drupal-link-system-path="node/3">NDIS</a>
															<a href="ndis.html"
																class="nav-link dropdown-toggle nav-link--ndis"
																data-toggle="dropdown" aria-expanded="false"
																aria-haspopup="true" aria-label="dropdown arrow"
																data-drupal-link-system-path="node/3"></a>
															<ul class="dropdown-menu">
																<li class="dropdown-item">
																	<a href="/ndis/service-delivery.html"
																		class="nav-link--ndis-service-delivery"
																		data-drupal-link-system-path="node/18">Service
																		delivery</a>
																</li>
																<li class="dropdown-item">
																	<a href="/ndis/support-coordination.html"
																		class="nav-link--ndis-support-coordination"
																		data-drupal-link-system-path="node/19">Support
																		coordination</a>
																</li>
																<li class="dropdown-item">
																	<a href="/ndis/personalised-worker-matching.html"
																		class="nav-link--ndis-personalised-worker-matching"
																		data-drupal-link-system-path="node/20">Personalised
																		worker matching</a>
																</li>
																<li class="dropdown-item">
																	<a href="/ndis/talk-to-us-about-ndis-services.html"
																		class="nav-link--ndis-talk-to-us-about-ndis-services"
																		data-drupal-link-system-path="node/21">Talk to
																		us about NDIS services</a>
																</li>
															</ul>

														</li>
														<li class="nav-item menu-item--expanded dropdown">
															<a href="tac.html" class="nav-link nav-link--tac"
																data-drupal-link-system-path="node/4">TAC</a>
															<a href="tac.html"
																class="nav-link dropdown-toggle nav-link--tac"
																data-toggle="dropdown" aria-expanded="false"
																aria-haspopup="true" aria-label="dropdown arrow"
																data-drupal-link-system-path="node/4"></a>
															<ul class="dropdown-menu">
																<li class="dropdown-item">
																	<a href="/tac/personalised-worker-matching.html"
																		class="nav-link--tac-personalised-worker-matching"
																		data-drupal-link-system-path="node/22">Personalised
																		worker matching</a>
																</li>
																<li class="dropdown-item">
																	<a href="/tac/talk-to-us-about-tac-services.html"
																		class="nav-link--tac-talk-to-us-about-tac-services"
																		data-drupal-link-system-path="node/26">Talk to
																		us about TAC services</a>
																</li>
															</ul>

														</li>
														@php
														use App\Models\Page as sayfa;

														// get pages
														$collection = sayfa::all();
														@endphp
														<li class="nav-item menu-item--expanded dropdown">
															<a href="/pages.html" class="nav-link nav-link--tac"
																data-drupal-link-system-path="node/4">Pages</a>

															<a href="pages.html"
															class="nav-link dropdown-toggle nav-link--tac"
															data-toggle="dropdown" aria-expanded="false"
															aria-haspopup="true" aria-label="dropdown arrow"
															data-drupal-link-system-path="node/4"></a>
															<ul class="dropdown-menu">

																@foreach ($collection as $item)
																<li class="dropdown-item">
																<a href="/{{ $item->slug }}.bodewellcommunitycare"
																	class="nav-link--tac-personalised-worker-matching"
																	data-drupal-link-system-path="node/22">{{
																	$item->title }}</a>
</li>
@endforeach

															</ul>
														</li>

													</li>
													</ul>



												</nav>
												<div class="views-exposed-form block block-views block-views-exposed-filter-blocksolr-nodes-search-page"
													data-drupal-selector="views-exposed-form-solr-nodes-search-page"
													id="block-exposedformsolr-nodes-searchpage">


													<div class="content">


														<form action="/search" method="post"
															id="views-exposed-form-solr-nodes-search-page"
															accept-charset="UTF-8">
															@csrf
															@method('post')
															<div class="d-flex flex-wrap">




																<fieldset
																	class="js-form-item js-form-type-textfield form-type-textfield js-form-item-keys form-item-keys mb-4">
																	<label for="edit-keys--2">Search</label>
																	<input placeholder="Search..."
																		data-drupal-selector="edit-keys" type="text"
																		id="edit-keys--2" name="search" value="" size="30"
																		maxlength="128" class="form-control" />

																</fieldset>
																<div data-drupal-selector="edit-actions"
																	class="form-actions js-form-wrapper form-wrapper mb-3"
																	id="edit-actions--2"><button
																		aria-label="submit button"
																		data-drupal-selector="edit-submit-solr-nodes-search-2"
																		type="submit"
																		id="edit-submit-solr-nodes-search--2"
																		value="Search"
																		class="button js-form-submit form-submit btn btn- btn-arrow"></button>

																</div>

															</div>

														</form>

													</div>
												</div>


											</div>
										</nav>
									</div>

								</div>
							</div>
						</div>
					</div>
				</header>


				@yield('content')



				<footer class="site-footer">
					<div id="footer-gradient-bg">
						<div class="container-xl">
							<div class="site-footer__top clearfix">
								<section class="region region-footer-one">
									<nav role="navigation" aria-labelledby="block-footerone-menu" id="block-footerone"
										class="block block-menu navigation menu--footer">

										<h2 class="visually-hidden" id="block-footerone-menu">Footer One</h2>



										<ul class="clearfix nav navbar-nav">
											<li class="nav-item">
												<a href="about-bodewell.html" class="nav-link nav-link--about-bodewell"
													data-drupal-link-system-path="node/5">About</a>
											</li>
											<li class="nav-item">
												<a href="contact.html" class="nav-link nav-link--contact"
													data-drupal-link-system-path="contact">Contact</a>
											</li>
											<li class="nav-item">
												<a href="feedback-compliments-complaints.html"
													class="nav-link nav-link--feedback-compliments-complaints"
													data-drupal-link-system-path="node/8">Feedback, compliments, &amp;
													complaints</a>
											</li>
											<li class="nav-item">
												<a href="careers.html" class="nav-link nav-link--careers"
													data-drupal-link-system-path="node/7">Careers</a>
											</li>
										</ul>



									</nav>

								</section>

								<section class="region region-footer-two">
									<div id="block-bcccontactblock-footer"
										class="block block-bcc-settings block-bcc-contact-block">


										<div class="content">
											<ul>
												<li>
													<a class="link" href="tel:{{ $site_phone }}">
														<i class="fas fa-phone-alt fa-xs"></i>
														{{ $site_phone }}</a>
												</li>
											</ul>

										</div>
									</div>
									<div id="block-bccsociallinksblock"
										class="block block-bcc-settings block-bcc-social-links-block">


										<div class="content">
											<div class="social-links">
												<ul>
													<li><a type="button" href="{{ $site_facebook }}"
															aria-label="link to {{ $site_name }} Facebook page"
															class="btn btn-inline d-inline-flex align-items-center"><i
																class="fab fa-facebook fa-lg"></i></a></li>
													<li><a type="button" href="{{ $site_linkedin }}"
															aria-label="link to {{ $site_name }} LinkedIn page"
															class="btn btn-inline d-inline-flex align-items-center"><i
																class="fab fa-linkedin fa-lg"></i></a></li>
												</ul>
											</div>

										</div>
									</div>

								</section>

								<div class="divider divider--md mt-3"></div>
								<section class="region region-footer-three">
									<div id="block-bccacknowledgementblock"
										class="block block-bcc-settings block-bcc-acknowledgement-block">


										<div class="content">
											<div class="acknowledgement">
												<div class="title">Acknowledgement of Country</div>
												<div class="content">BodeWell acknowledges the Australian Aboriginal and
													Torres Strait Islander peoples as the first inhabitants of the
													nation and the traditional custodians of the lands where we live,
													learn and work.</div>
											</div>

										</div>
									</div>

								</section>

								<section class="region region-footer-four">
									<div id="block-bcclogowhiteblock"
										class="block block-bcc-settings block-bcc-logo-white-block">


										<div class="content">
											<img class="lazy" data-src="/storage/{{ $site_logo }}" alt="Bodewell logo"
												width="133" height="94" />

										</div>
									</div>

								</section>

								<section class="region region-footer-five">
									<nav role="navigation" aria-labelledby="block-footerfivemenu-menu"
										id="block-footerfivemenu"
										class="block block-menu navigation menu--footerfivemenu">

										<h2 class="visually-hidden" id="block-footerfivemenu-menu">Footer Five menu</h2>



										<ul class="clearfix nav">
											<li class="nav-item">
												<a href="privacy-policy.html" class="nav-link nav-link--privacy-policy"
													data-drupal-link-system-path="node/10">Privacy policy</a>
											</li>
											<li class="nav-item">
												<a href="https://www.linkedin.com/in/mustafaakaln/"
													class="nav-link nav-link-https--iconagencycomau-">Site by Mustafa</a>
											</li>
										</ul>



									</nav>

								</section>

							</div>
						</div>
					</div>
				</footer>
			</div>
		</div>

	</div>

	</script>
	<script src="/sites/default/files/js/js_DFcrAm_L051fX6xZX-0A1YiLNZBf38Txmut5mj6EKN0.js"></script>
	<script src="/kit.fontawesome.com/4b2d97f068.js"></script>
	<script src="/sites/default/files/js/js_cYsmW2xwlnaM7Vea6CgwWAJ-sIj0kUHSQhKPZ0CM-_s.js"></script>

</body>

</html>