@extends('layouts.app')

@section('content')

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
						<div data-history-node-id="1" class="node node--type-page node--view-mode-full ds-1col clearfix"
							typeof="schema:WebPage">



							<div class="deco deco--left" data-rellax-speed="1"><img class="lazy"
									data-src="themes/custom/bcc/assets/src/images/left-doodle-2.svg"
									alt="decorative element" width="180" height="275" /></div>
							<div class="deco deco--right" data-rellax-speed="1"><img class="lazy"
									data-src="themes/custom/bcc/assets/src/images/right-doodle-1.svg"
									alt="decorative element" width="180" height="275" /></div>

							<div
								class="field field--name-field-banner field--type-entity-reference-revisions field--label-hidden field__item">
								<div
									class="paragraph paragraph--type-banner paragraph--view-mode-default ds-1col clearfix">



									<div
										class="field field--name-field-background-image field--type-entity-reference field--label-hidden field__item">
										<div>

											<picture>
												<source
													srcset="/sites/default/files/styles/banner/public/media-image/BOD	EWELL_Header%20Banners_1daf5.png?h=e0d9a4bb&amp;itok=w2WCJ203 1600w"
													type="image/webp" sizes="100vw" />
												<source
													srcset="/sites/default/files/styles/banner/public/media-image/BODEWELL_Header%20Banners_1daf5.png?h=e0d9a4bb&amp;itok=w2WCJ203 1600w"
													type="image/png" sizes="100vw" />
												<img srcset="/sites/default/files/styles/banner/public/media-image/BODEWELL_Header%20Banners_1.png?h=e0d9a4bb&amp;itok=w2WCJ203 1600w"
													sizes="100vw"
													src="sites/default/files/styles/banner/public/media-image/BODEWELL_Header%20Banners_1daf5.png?h=e0d9a4bb&amp;itok=w2WCJ203"
													alt="HOMEPAGE aged care theme" typeof="foaf:Image" />

											</picture>



										</div>
									</div>


									<div class="gradient-bg d-none d-lg-block"></div>
									<div class="container-xl">
										<div class="row">
											<div class="col col-lg-5">
												<div class="banner-text-content">
													<h1>{{ $site_name }}</h1>
													<div class="h4">
														<div
															class="field field--name-field-long-plain-text field--type-string-long field--label-hidden field__item">
															BodeWell Community Care makes more possible
															for you, your partner or loved one. Caring
															in-home support to live as long as you like,
															in the way you like.</div>
													</div>
													<a href="aged-care/talk-to-us-about-aged-care-services.html"
														class="btn btn-arrow btn-arrow--alt">Talk to us
														today</a>

												</div>
											</div>
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
													<div
														class="paragraph paragraph--type--two-col-card paragraph--view-mode--default row">
														<div class="col-12 col-lg-6">
															<div
																class="paragraph paragraph--type--card paragraph--view-mode--default full-width-btn-container">

																<div
																	class="field field--name-field-icon field--type-entity-reference field--label-hidden field__item">
																	<div>

																		<img width="65" height="65"
																			src="sites/default/files/media-icon/group%20(1).svg"
																			alt="House with a heart inside"
																			loading="lazy" typeof="foaf:Image" />



																	</div>
																</div>

																<div
																	class="field field--name-field-title field--type-string field--label-hidden field__item">
																	Aged Care</div>

																<div
																	class="field field--name-field-long-plain-text field--type-string-long field--label-hidden field__item">
																	Aged Care services tailored to suit
																	your needs. Our Personal Support
																	Workers provide the support you need
																	at home and in the community, from
																	Home Care Packages to Privately
																	Funded options.</div>
																<a href="aged-care/talk-to-us-about-aged-care-services.html"
																	target="_self" class="btn btn-arrow">Talk to us
																	about Aged Care</a>

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
																	NDIS</div>

																<div
																	class="field field--name-field-long-plain-text field--type-string-long field--label-hidden field__item">
																	National Disability Insurance Scheme
																	(NDIS) services for you, your
																	partner or loved one. We can help
																	with everything from Personal Care
																	to Support Coordination.</div>
																<a href="ndis/talk-to-us-about-ndis-services.html"
																	target="_self" class="btn btn-arrow">Talk to us
																	about the NDIS</a>

															</div>

														</div>

													</div>
												</div>
											</div>
											<div class="field__item">
												<div class="container-xl">
													<div class="row">
														<div class="col">
															<div
																class="paragraph paragraph--type--card-horizontal paragraph--view-mode--default">

																<div
																	class="field field--name-field-icon field--type-entity-reference field--label-hidden field__item">
																	<div>

																		<img width="65" height="65"
																			src="sites/default/files/media-icon/group-3.svg"
																			alt="Traffic cone" loading="lazy"
																			typeof="foaf:Image" />



																	</div>
																</div>

																<div
																	class="field field--name-field-title field--type-string field--label-hidden field__item">
																	TAC</div>

																<div
																	class="field field--name-field-long-plain-text field--type-string-long field--label-hidden field__item">
																	Our Transport Accident Commission
																	(TAC) services provide support after
																	a transport accident.</div>
																<a href="tac/talk-to-us-about-tac-services.html"
																	target="_self" class="btn btn-arrow">TAC</a>

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
																	srcset="/sites/default/files/styles/card/public/media-image/BODEWELL_Banner Image_1f939.png"
																	type="image/webp"
																	sizes="800px, (max-width: 800px) 100vw" />
																<source
																	srcset="/sites/default/files/styles/card/public/media-image/BODEWELL_Banner Image_1f939.png"
																	type="image/png"
																	sizes="800px, (max-width: 800px) 100vw" />
																<img 
																	sizes="800px, (max-width: 800px) 100vw"
																	src="/sites/default/files/styles/card/public/media-image/BODEWELL_Banner Image_1f939.png"
																	alt="Consulting with a worker"
																	typeof="foaf:Image" />

															</picture>



														</div>

													</div>
													<div class="text-container">

														<div
															class="paragraph paragraph--type--long-formatted-text paragraph--view-mode--default">

															<div
																class="clearfix text-formatted field field--name-field-long-formatted-text field--type-text-long field--label-hidden field__item">
																<p>Talk to us about In-home Support
																	today</p>
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
																				<a href="aged-care.html" target="_self"
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
																										href="tel:1300 444 213">
																										<i
																											class="fas fa-phone-alt fa-xs"></i>
																										1300
																										444
																										213</a>
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
								<div class="field__item">
									<div class="paragraph paragraph--type--section paragraph--view-mode--default">

										<div
											class="field field--name-field-section-content field--type-entity-reference-revisions field--label-hidden field__items">
											<div class="field__item">
												<div class="container-xl">
													<div class="row">
														<div
															class="paragraph paragraph--type--title paragraph--view-mode--default col">

															<div
																class="field field--name-field-title field--type-string field--label-hidden field__item">
																Personalised Worker Matching</div>

														</div>
													</div>
												</div>
											</div>
											<div class="field__item">
												<div class="container-xl">
													<div class="row">
														<div class="col">
															<ul
																class="paragraph paragraph--type--ordered-list paragraph--view-mode--default">
																<li
																	class="paragraph paragraph--type--ordered-list-item paragraph--view-mode--default">
																	<div class="line"></div>

																	<div
																		class="field field--name-field-title field--type-string field--label-hidden field__item">
																		Meet</div>

																	<div
																		class="field field--name-field-long-plain-text field--type-string-long field--label-hidden field__item">
																		Talk to us about your unique
																		needs or situation.</div>

																</li>

																<li
																	class="paragraph paragraph--type--ordered-list-item paragraph--view-mode--default">
																	<div class="line"></div>

																	<div
																		class="field field--name-field-title field--type-string field--label-hidden field__item">
																		Plan</div>

																	<div
																		class="field field--name-field-long-plain-text field--type-string-long field--label-hidden field__item">
																		We’ll work with you to find the
																		right Personal Support Worker.
																	</div>

																</li>

																<li
																	class="paragraph paragraph--type--ordered-list-item paragraph--view-mode--default">
																	<div class="line"></div>

																	<div
																		class="field field--name-field-title field--type-string field--label-hidden field__item">
																		Feedback</div>

																	<div
																		class="field field--name-field-long-plain-text field--type-string-long field--label-hidden field__item">
																		To build a connection based on
																		friendship and kindness.</div>

																</li>

																<li
																	class="paragraph paragraph--type--ordered-list-item paragraph--view-mode--default">
																	<div class="line"></div>

																	<div
																		class="field field--name-field-title field--type-string field--label-hidden field__item">
																		Live well</div>

																	<div
																		class="field field--name-field-long-plain-text field--type-string-long field--label-hidden field__item">
																		So you can live life with zest,
																		optimism, passion and energy.
																	</div>

																</li>


															</ul>
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
												<div class="container-xl">
													<div class="row">
														<div class="col">
															<div
																class="paragraph paragraph--type--video paragraph--view-mode--default d-flex flex-column justify-content-center align-items-center">

																<div
																	class="field field--name-field-title field--type-string field--label-hidden field__item">
																	Here when you need us</div>

																<div
																	class="field field--name-field-video field--type-entity-reference field--label-hidden field__item">
																	<div>



																		<div class="plyr-player" id="player"
																			data-plyr-provider="youtube"
																			data-plyr-embed-id="https://www.youtube.com/watch?v=YvZNDo0kPkM&amp;ab_channel=ArcareAgedCare">
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
								<div class="field__item">
									<div class="paragraph paragraph--type--section paragraph--view-mode--default">

										<div
											class="field field--name-field-section-content field--type-entity-reference-revisions field--label-hidden field__items">
											<div class="field__item">
												<div class="container-xl">
													<div class="row">
														<div
															class="paragraph paragraph--type--title paragraph--view-mode--default col">

															<div
																class="field field--name-field-title field--type-string field--label-hidden field__item">
																Why choose BodeWell</div>

														</div>
													</div>
												</div>
											</div>
											<div class="field__item">
												<div class="container-xl">
													<div
														class="paragraph paragraph--type--icon-list paragraph--view-mode--default row">
														<div class="col-12 col-md-6 col-lg-3">
															<div
																class="paragraph paragraph--type--icon-list-item paragraph--view-mode--default">

																<div
																	class="field field--name-field-icon field--type-entity-reference field--label-hidden field__item">
																	<div>

																		<img width="65" height="65"
																			src="sites/default/files/media-icon/group%20(2).svg"
																			alt="Linked people" loading="lazy"
																			typeof="foaf:Image" />



																	</div>
																</div>

																<div
																	class="field field--name-field-title field--type-string field--label-hidden field__item">
																	Personalised Care matching</div>

																<div
																	class="field field--name-field-long-plain-text field--type-string-long field--label-hidden field__item">
																	Get more out of life, with a deeper
																	connection. </div>

															</div>

														</div>
														<div class="col-12 col-md-6 col-lg-3">
															<div
																class="paragraph paragraph--type--icon-list-item paragraph--view-mode--default">

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
																	Flexible services</div>

																<div
																	class="field field--name-field-long-plain-text field--type-string-long field--label-hidden field__item">
																	Tailor your plan to meet your needs.
																</div>

															</div>

														</div>
														<div class="col-12 col-md-6 col-lg-3">
															<div
																class="paragraph paragraph--type--icon-list-item paragraph--view-mode--default">

																<div
																	class="field field--name-field-icon field--type-entity-reference field--label-hidden field__item">
																	<div>

																		<img width="65" height="65"
																			src="sites/default/files/media-icon/group-3%20(1).svg"
																			alt="Floatie" loading="lazy"
																			typeof="foaf:Image" />



																	</div>
																</div>

																<div
																	class="field field--name-field-title field--type-string field--label-hidden field__item">
																	Trusted, expert advice</div>

																<div
																	class="field field--name-field-long-plain-text field--type-string-long field--label-hidden field__item">
																	Navigate services and requirements
																	with our help.</div>

															</div>

														</div>
														<div class="col-12 col-md-6 col-lg-3">
															<div
																class="paragraph paragraph--type--icon-list-item paragraph--view-mode--default">

																<div
																	class="field field--name-field-icon field--type-entity-reference field--label-hidden field__item">
																	<div>

																		<img width="65" height="65"
																			src="sites/default/files/media-icon/group-4.svg"
																			alt="Dollar on palm" loading="lazy"
																			typeof="foaf:Image" />



																	</div>
																</div>

																<div
																	class="field field--name-field-title field--type-string field--label-hidden field__item">
																	No exit fees</div>

																<div
																	class="field field--name-field-long-plain-text field--type-string-long field--label-hidden field__item">
																	Cancel your plan at any time.</div>

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
												<div class="container-xl">
													<div class="row">
														<div class="col">
															<div
																class="paragraph paragraph--type--testimonial paragraph--view-mode--default">

																<div
																	class="field field--name-field-testimonial-image field--type-entity-reference field--label-hidden field__item">
																	<div>

																		<picture>
																			<source
																				srcset="/sites/default/files/styles/testimonial/public/media-image/group-6-copy@2x3fbf.png"
																				type="image/webp" sizes="360px" />
																			<source
																				srcset="/sites/default/files/styles/testimonial/public/media-image/group-6-copy@2x3fbf.png"
																				type="image/png" sizes="360px" />
																			<img srcset="/sites/default/files/styles/testimonial/public/media-image/group-6-copy@2x3fbf.png"
																				sizes="360px"
																				src="/sites/default/files/styles/testimonial/public/media-image/group-6-copy@2x3fbf.png"
																				alt="Personal support worker"
																				typeof="foaf:Image" />

																		</picture>



																	</div>
																</div>

																<div class="text-content">

																	<div
																		class="clearfix text-formatted field field--name-field-long-formatted-text field--type-text-long field--label-hidden field__item">
																		<p>Getting to know the
																			uniqueness and strengths of
																			each community member
																			enables us to support who
																			they were, who they are, and
																			who they hope to be.</p>
																	</div>


																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="field__item">
													<div class="container-xl">
														<div class="row">
															<div class="col">
																<div
																	class="paragraph paragraph--type--testimonial paragraph--view-mode--default">

																	<div
																		class="field field--name-field-testimonial-image field--type-entity-reference field--label-hidden field__item">
																		<div>

																			<picture>
																				<source
																					srcset="/sites/default/files/styles/testimonial/public/media-image/Bodewell feedback.png?h=1e66e246&amp;itok=wQaKq9q0 360w"
																					type="image/webp" sizes="360px" />
																				<source
																					srcset="/sites/default/files/styles/testimonial/public/media-image/Bodewell feedback.png?h=1e66e246&amp;itok=wQaKq9q0 360w"
																					type="image/png" sizes="360px" />
																				<img srcset="/sites/default/files/styles/testimonial/public/media-image/Bodewell feedback.png?h=1e66e246&amp;itok=wQaKq9q0 360w"
																					sizes="360px"
																					src="sites/default/files/styles/testimonial/public/media-image/Bodewell feedback9a0a.png?h=1e66e246&amp;itok=wQaKq9q0"
																					alt="Heart icon for BodeWell feedback"
																					typeof="foaf:Image" />

																			</picture>



																		</div>
																	</div>

																	<div class="text-content">

																		<div
																			class="clearfix text-formatted field field--name-field-long-formatted-text field--type-text-long field--label-hidden field__item">
																			<p>On the behalf of our
																				mother Domenica Latella,
																				myself and family, we
																				would like to say thank
																				you to Personal Support
																				Worker, Sandeep for the
																				most professional caring
																				and supportive
																				understanding always
																				prompt responses full of
																				information and care.
																				Nothing was too hard or
																				too big.  All of the
																				carers who looked after
																				my mum showed much love
																				and professional care
																				even in the most
																				difficult moments.
																				Personal Support
																				Workers, Libby and 
																				Elizabeth were most
																				professional and full of
																				love. I will always
																				recommend BodeWell
																				Community Care and
																				Sandeep Khairnar. </p>

																			<p><strong>- Andrew
																					Latella, Family
																					Member of BodeWell
																					Client</strong></p>
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


			</section>
		</main>

	</div>
</div>
@endsection