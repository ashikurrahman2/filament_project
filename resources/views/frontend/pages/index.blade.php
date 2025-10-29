@extends('frontend.layouts.app')

@section('title', 'Home')

@section('content')

   <!-- ***** Preloader Area Start ***** -->
	{{-- <div class="relome-preloader">
		<svg viewBox="0 0 1000 1000" preserveAspectRatio="none">
			<path id="loader" d="M0,1005S175,995,500,995s500,5,500,5V0H0Z"></path>
		</svg> --}}

		<!-- Loader Container -->
		{{-- <div class="loader-container">
			<div class="loaded">
				<span>L</span>
				<span>O</span>
				<span>A</span>
				<span>D</span>
				<span>I</span>
				<span>N</span>
				<span>G</span>
			</div>
		</div>
	</div> --}}
	<!-- ***** Preloader Area End ***** -->

		<!-- ***** Hero Area Start ***** -->
			<section id="home" class="hero-section">
				<div class="container">
					<div class="row justify-content-center align-items-center">
						<div class="col-12 col-md-9">
                             @foreach ($banners as $hero)
							<!-- Hero Content -->
							<div class="hero-content text-center">
								<img class="hero-thumb" src="{{ asset($hero->person_image) }}" alt="">

								<!-- Heading -->
								<div class="tl-widget heading mt-3">
									<h2 class="title m-0"><span class="title-before">{{ $hero->banner_title }}</span> web solutions</h2>
								</div>

								<h5 class="bio">Hi! I’m {{ $hero->person_name }} – A Passionate {{ $hero->person_designation }} from {{ $hero->person_country }}.</h5>

								<!-- Hero Button -->
								<div class="hero-button mt-3 mt-md-5">
									<a class="tl-widget button swap-icon smooth-anchor" href="#portfolio">See My Work <span class="icon">
											<i class="fa-solid fa-arrow-right"></i>
										</span>
									</a>
								</div>

							</div>
                            @endforeach
						</div>
					</div>
				</div>
			</section>
			<!-- ***** Hero Area End ***** -->

            
			<!-- ***** Fun Facts Area Start ***** -->
			<section class="fun-facts p-0">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-12 col-md-11">
							<div class="row items content">
                                @foreach ($foot_banners as $banner)
								<div class="col">
									<!-- TL Counter -->
									<div class="tl-counter">
										<div class="tl-counter-title">Years of Experience</div>
										<div class="tl-counter-number-wrapper">
											<h2 class="tl-counter-number counter">{{ $banner->total_experience }}</h2>
											{{-- <span class="tl-counter-number-suffix"></span> --}}
										</div>
									</div>
								</div>

								<div class="col">
									<!-- TL Counter -->
									<div class="tl-counter">
										<div class="tl-counter-title">Projects Completed</div>
										<div class="tl-counter-number-wrapper">
											<h2 class="tl-counter-number counter">{{ $banner->complete_projects }}</h2>
											{{-- <span class="tl-counter-number-suffix">+</span> --}}
										</div>
									</div>
								</div>

								<div class="col">
									<!-- TL Counter -->
									<div class="tl-counter">
										<div class="tl-counter-title">Clients Worldwide</div>
										<div class="tl-counter-number-wrapper">
											<h2 class="tl-counter-number counter">{{ $banner->client_satisfaction }}</h2>
											{{-- <span class="tl-counter-number-suffix">k</span> --}}
										</div>
									</div>
								</div>

								<div class="col">
									<!-- TL Counter -->
									<div class="tl-counter">
										<div class="tl-counter-title">Awards Achieved</div>
										<div class="tl-counter-number-wrapper">
											<h2 class="tl-counter-number counter">{{ $banner->total_awards }}</h2>
											{{-- <span class="tl-counter-number-suffix">+</span> --}}
										</div>
									</div>
								</div>
							</div>
                         @endforeach
						</div>
					</div>
				</div>
			</section>
			<!-- ***** Fun Facts Area End ***** -->

            
			<!-- ***** Services Area Start ***** -->
			<section id="services" class="services">
				<div class="container">
					<div class="row justify-content-center align-items-center intro text-center">
						<div class="col-12 col-md-7">
							<div class="tl-widget heading">
								<h3 class="title m-0">
									<span class="title-before">Colleborate with brand and agencies to create</span> impactful results
								</h3>
							</div>
						</div>
					</div>
     
					<div class="row tl-widget items">
						<!-- Service Item -->
                          @foreach ($services as $service)
						<div class="col-12 col-md-6 col-lg-3">
							<div class="service-item image-box">
								<div class="service-image">
									<img src="{{ asset($service->service_image) }}" alt="{{ asset($service->service_image) }}">
								</div>
								<div class="card-content">
									<div class="heading">
										<a href="service-single.html">
											<h5 class="title">{{ $service->service_title }}</h5>
										</a>
										<p>{{ $service->service_subtitle }}</p>
									</div>
								</div>
							</div> 
						</div>
                         @endforeach
					</div>
				</div>
			</section>
			<!-- ***** Services Area End ***** -->

            		<!-- ***** Experience Area Start ***** -->
			<section id="resume" class="experience p-0">
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-6">
							<div class="tl-widget heading mb-4">
								<h3 class="title m-0">
									<span class="title-before">My work</span> experience
								</h3>
							</div>

							<div class="row items">
								<!-- Icon Box -->
								<div class="tl-widget icon-box left-aligned item">
									<div class="icon-wrapper icon-animation">
										<span class="icon-group stacked shape-circle">
											<i class="icon bi-asterisk"></i>
										</span>
									</div>
									<div class="content">
										<h4 class="title">Full-Stack Developer</h4>
										<p class="description m-0">As a Full-Stack Developer, I worked on a variety of projects that required both front-end and back-end expertise for developing web applications.</p>
									</div>
								</div>

								<!-- Icon Box -->
								<div class="tl-widget icon-box left-aligned item">
									<div class="icon-wrapper">
										<span class="icon-group stacked shape-circle">
											<i class="icon bi-lightning"></i>
										</span>
									</div>
									<div class="content">
										<h4 class="title">WordPress Developer</h4>
										<p class="description m-0">I began my career as a Web Developer, where I focused on building and maintaining websites for small businesses. I honed my skills in HTML, CSS, JavaScript, and WordPress.</p>
									</div>
								</div>

								<!-- Icon Box -->
								<div class="tl-widget icon-box left-aligned item">
									<div class="icon-wrapper">
										<span class="icon-group stacked shape-circle">
											<i class="icon bi-bezier2"></i>
										</span>
									</div>
									<div class="content">
										<h4 class="title">Front-End Developer</h4>
										<p class="description m-0">I lead a team of designers and developers to deliver high-quality digital products. My role involves overseeing the entire development process.</p>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-12 col-md-6">
							<div class="tl-widget heading mb-4">
								<h3 class="title m-md-0">
									<span class="title-before">My</span> education
								</h3>
							</div>

							<div class="row items">
								<!-- Icon Box -->
								<div class="tl-widget icon-box left-aligned item">
									<div class="icon-wrapper">
										<span class="icon-group stacked shape-circle">
											<i class="icon bi-award"></i>
										</span>
									</div>
									<div class="content">
										<div class="tl-widget badge"> Sep 2019 – Jun 2023 </div>
										<h4 class="title mt-3">Design Institute of Technology</h4>
										<p class="description m-0">Specialized in User Experience and Visual Communication.</p>
									</div>
								</div>

								<!-- Icon Box -->
								<div class="tl-widget icon-box left-aligned item">
									<div class="icon-wrapper">
										<span class="icon-group stacked shape-circle">
											<i class="icon bi-broadcast-pin"></i>
										</span>
									</div>
									<div class="content">
										<div class="tl-widget badge"> Jan 2017 – Apr 2019 </div>
										<h4 class="title mt-3">Bachelor in Computer Science</h4>
										<p class="description m-0">Focused on responsive web design and front-end development.</p>
									</div>
								</div>

								<!-- Icon Box -->
								<div class="tl-widget icon-box left-aligned item">
									<div class="icon-wrapper">
										<span class="icon-group stacked shape-circle">
											<i class="icon bi-patch-check"></i>
										</span>
									</div>
									<div class="content">
										<div class="tl-widget badge"> Feb 2014 – Aug 2016 </div>
										<h4 class="title mt-3">Certificate in Digital Marketing</h4>
										<p class="description m-0">Covered SEO, content strategy, and social media marketing.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- ***** Experience Area End ***** -->

            			<!-- ***** Portfolio Area Start ***** -->
			<section id="portfolio" class="tl-widget portfolio">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-12 col-md-7">
							<!-- Intro -->
							<div class="intro text-center">
								<div class="tl-widget heading">
									<h3 class="title m-0">
										<span class="title-before">A small selection of</span> recent projects
									</h3>
								</div>
							</div>
						</div>
					</div>

					<div class="row justify-content-center text-center mb-4">
						<div class="col-12">
							<!-- Filter Menu -->
							<div class="btn-group filter-menu" role="group" aria-label="Basic radio toggle button group">
								<div class="input-item d-flex">
									<div class="content">
										<input type="radio" class="btn-check filter-btn" name="shuffle-filter" id="all" value="all" checked>
										<label class="btn" for="all">All</label>
									</div>
									<span class="count">04</span>
								</div>
	
								<div class="input-item d-flex">
									<div class="content">
										<input type="radio" class="btn-check filter-btn" name="shuffle-filter" id="apps" value="apps">
										<label class="btn" for="apps">Apps</label>
									</div>
									<span class="count">02</span>
								</div>
	
								<div class="input-item d-flex">
									<div class="content">
										<input type="radio" class="btn-check filter-btn" name="shuffle-filter" id="branding" value="branding">
										<label class="btn" for="branding">Branding</label>
									</div>
									<span class="count">02</span>
								</div>
	
								<div class="input-item d-flex">
									<div class="content">
										<input type="radio" class="btn-check filter-btn" name="shuffle-filter" id="motion" value="motion">
										<label class="btn" for="motion">Motion</label>
									</div>
									<span class="count">01</span>
								</div>

								<div class="input-item d-flex">
									<div class="content">
										<input type="radio" class="btn-check filter-btn" name="shuffle-filter" id="ui-ux" value="ui-ux">
										<label class="btn" for="ui-ux">UI/UX</label>
									</div>
									<span class="count">03</span>
								</div>
							</div>
						</div>
					</div>

					<!-- Filter Items -->
					<div class="row filter-items items inner">
						<div class="col-12 col-md-6 item filter-item" data-groups='["apps","ui-ux"]'>
							<!-- Portfolio Item -->
							<div class="card-item portfolio-item scale">
								<a href="portfolio-single.html">
									<div class="image-holder">
										<!-- Card Thumb -->
										<div class="card-thumb">
											<img decoding="async" src="assets/img/content/case-1.jpg" class="card-img-top wp-post-image" alt="Modern Finance Dashboard UI">
										</div>
									</div>
								</a>
								<!-- Card Content -->
								<div class="card-content mt-3">
									<div class="heading">
										<h5 class="title m-0"> Modern Finance Dashboard UI </h5>
										<div class="show-project">
											<div class="post-holder-tags mt-2">
												<a href="#">Branding</a>, <a href="#">Motion</a>
											</div>
											<div class="project-link">
												<a href="#">Show Project</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-12 col-md-6 item filter-item" data-groups='["branding","motion"]'>
							<!-- Portfolio Item -->
							<div class="card-item portfolio-item scale">
								<a href="portfolio-single.html">
									<div class="image-holder">
										<!-- Card Thumb -->
										<div class="card-thumb">
											<img decoding="async" src="assets/img/content/case-2.jpg" class="card-img-top wp-post-image" alt="Portfolio Website for Creatives">
										</div>
									</div>
								</a>
								<!-- Card Content -->
								<div class="card-content mt-3">
									<div class="heading">
										<h5 class="title m-0"> Portfolio Website for Creatives </h5>
										<div class="show-project">
											<div class="post-holder-tags mt-2">
												<a href="#">Branding</a>, <a href="#">Motion</a>
											</div>
											<div class="project-link">
												<a href="#">Show Project</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-12 col-md-6 item filter-item" data-groups='["branding","ui-ux"]'>
							<!-- Portfolio Item -->
							<div class="card-item portfolio-item scale">
								<a href="portfolio-single.html">
									<div class="image-holder">
										<!-- Card Thumb -->
										<div class="card-thumb">
											<img decoding="async" src="assets/img/content/case-3.jpg" class="card-img-top wp-post-image" alt="Brand Identity for Startups">
										</div>
									</div>
								</a>
								<!-- Card Content -->
								<div class="card-content mt-3">
									<div class="heading">
										<h5 class="title m-0"> Brand Identity for Startups </h5>
										<div class="show-project">
											<div class="post-holder-tags mt-2">
												<a href="#">Branding</a>, <a href="#">UI/UX</a>
											</div>
											<div class="project-link">
												<a href="#">Show Project</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-12 col-md-6 item filter-item" data-groups='["apps","ui-ux"]'>
							<!-- Portfolio Item -->
							<div class="card-item portfolio-item scale">
								<a href="portfolio-single.html">
									<div class="image-holder">
										<!-- Card Thumb -->
										<div class="card-thumb">
											<img decoding="async" src="assets/img/content/case-4.jpg" class="card-img-top wp-post-image" alt="SaaS Dashboard Development">
										</div>
									</div>
								</a>
								<!-- Card Content -->
								<div class="card-content mt-3">
									<div class="heading">
										<h5 class="title m-0"> SaaS Dashboard Development </h5>
										<div class="show-project">
											<div class="post-holder-tags mt-2">
												<a href="#">Apps</a>, <a href="#">UI/UX</a>
											</div>
											<div class="project-link">
												<a href="#">Show Project</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-12">
							<nav>
								<ul class="page-numbers">
									<li>
										<span aria-current="page" class="page-numbers current">1</span>
									</li>
									<li>
										<a class="page-numbers" href="#">2</a>
									</li>
									<li>
										<a class="next page-numbers" href="#">
											<i class="icon-arrow-right"></i>
										</a>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</section>
			<!-- ***** Portfolio Area End ***** -->

            
			<!-- ***** Skills Area Start ***** -->
			<section id="skills" class="skills p-0">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-12 col-md-7">
							<!-- Intro -->
							<div class="intro text-center">
								<div class="tl-widget heading">
									<h3 class="title m-0">
										<span class="title-before">My</span> skills
									</h3>
								</div>
							</div>
						</div>
					</div>

					<div class="row gap-4">
						<!-- Item -->
						<div class="col item filter-grayscale">
							<img src="assets/img/content/skill-1.png" alt="">
							<div class="content mt-3">
								<span class="percentage counter">99%</span>
								<div class="title">WordPress</div>
							</div>
						</div>

						<!-- Item -->
						<div class="col item filter-grayscale">
							<img src="assets/img/content/skill-2.png" alt="">
							<div class="content mt-3">
								<span class="percentage counter">95%</span>
								<div class="title">Figma</div>
							</div>
						</div>

						<!-- Item -->
						<div class="col item filter-grayscale">
							<img src="assets/img/content/skill-3.png" alt="">
							<div class="content mt-3">
								<span class="percentage counter">87%</span>
								<div class="title">HTML</div>
							</div>
						</div>

						<!-- Item -->
						<div class="col item filter-grayscale">
							<img src="assets/img/content/skill-4.png" alt="">
							<div class="content mt-3">
								<span class="percentage counter">68%</span>
								<div class="title">Sketch</div>
							</div>
						</div>

						<!-- Item -->
						<div class="col item filter-grayscale">
							<img src="assets/img/content/skill-5.png" alt="">
							<div class="content mt-3">
								<span class="percentage counter">98%</span>
								<div class="title">Elementor</div>
							</div>
						</div>

						<!-- Item -->
						<div class="col item filter-grayscale">
							<img src="assets/img/content/skill-6.png" alt="">
							<div class="content mt-3">
								<span class="percentage counter">89%</span>
								<div class="title">JavaScript</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- ***** Skills Area End ***** -->

            	<!-- ***** Approach Area Start ***** -->
			<section class="approach">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-12 col-md-7">
							<!-- Intro -->
							<div class="intro text-center">
								<div class="tl-widget heading">
									<h3 class="title m-0">
										<span class="title-before">My</span> approach
									</h3>
								</div>
							</div>
						</div>
					</div>

					<div class="row items justify-content-center align-items-center">
						<div class="col-12 col-md-4">
							<!-- Item -->
							<div class="item d-flex align-items-end">
								<div class="item-count">01</div>
								<div class="tl-widget heading">
									<h4 class="title m-0">
										<span class="title-before">Define</span>
									</h4>
									<div class="subtitle">Working closely with you to understand your goals, needs, and vision, establishing a clear and focused strategy that lays the foundation for a successful and impactful project.</div>
								</div>
							</div>
						</div>

						<div class="col-12 col-md-4">
							<!-- Item -->
							<div class="item d-flex align-items-start card-angle-animation">
								<div class="item-count">02</div>
								<div class="tl-widget heading">
									<h4 class="title m-0">
										<span class="title-before">Develop</span>
									</h4>
									<div class="subtitle">Transforming your vision into reality through creative design, meticulous planning, and innovative execution, ensuring every detail aligns with your goals and delivers impactful, results-driven solutions tailored to your unique needs.</div>
								</div>
							</div>
						</div>

						<div class="col-12 col-md-4">
							<!-- Item -->
							<div class="item d-flex align-items-end">
								<div class="item-count">03</div>
								<div class="tl-widget heading">
									<h4 class="title m-0">
										<span class="title-before">Deliver</span>
									</h4>
									<div class="subtitle">Providing exceptional results with precision and timeliness, exceeding expectations through reliable execution, thorough attention to detail, and ongoing support to ensure your project's success and long-term impact.</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- ***** Approach Area End ***** -->

            	<!-- ***** Contact Area Start ***** -->
			<section id="contact" class="contact pt-0">
				<div class="container">
					<div class="row justify-content-between align-items-center">
						<div class="col-12 col-md-5">
							<!-- Intro -->
							<div class="tl-widget heading">
								<h3 class="title m-0">
									<span class="title-before">Schedule a call with me to see if</span> I can help
								</h3>
								<p>Reach out to me today and let’s discuss how I can help you achieve your goals.</p>
							</div>

							<!-- Icon List -->
							<ul class="contact-icon-list list-unstyled my-4">
								<!-- Icon List Item -->
								<li class="icon-list-item">
									<a href="tel:+18904735102">
										<span class="icon-list-icon">
											<i class="fa-solid fa-phone"></i>
										</span>
										<span class="icon-list-text">+1.890.473.5102</span>
									</a>
								</li>

								<!-- Icon List Item -->
								<li class="icon-list-item">
									<a href="mailto:hello@relome.com">
										<span class="icon-list-icon">
											<i class="fa-solid fa-envelope-open"></i>
										</span>
										<span class="icon-list-text">hello@relome.com</span>
									</a>
								</li>

								<!-- Icon List Item -->
								<li class="icon-list-item">
									<a href="#">
										<span class="icon-list-icon">
											<i class="fa-solid fa-map"></i>
										</span>
										<span class="icon-list-text">912 Park Ave, Ketchikan, Alaska 99901, USA</span>
									</a>
								</li>
							</ul>

							<!-- Social Icons -->
							<div class="tl-widget social-icons icon-box justify-content-start gap-0">
								<a href="#" target="_blank" class="icon-group stacked shape-circle social-icon">
									<span class="icon icon-animated">
										<i class="fa-brands fa-behance"></i>
									</span>
									<span class="icon icon-animated">
										<i class="fa-brands fa-behance"></i>
									</span>
								</a>
								<a href="#" target="_blank" class="icon-group stacked shape-circle social-icon">
									<span class="icon icon-animated">
										<i class="fa-brands fa-facebook-f"></i>
									</span>
									<span class="icon icon-animated">
										<i class="fa-brands fa-facebook-f"></i>
									</span>
								</a>
								<a href="#" target="_blank" class="icon-group stacked shape-circle social-icon">
									<span class="icon icon-animated">
										<i class="fa-brands fa-instagram"></i>
									</span>
									<span class="icon icon-animated">
										<i class="fa-brands fa-instagram"></i>
									</span>
								</a>
								<a href="#" target="_blank" class="icon-group stacked shape-circle social-icon">
									<span class="icon icon-animated">
										<i class="fa-brands fa-x-twitter"></i>
									</span>
									<span class="icon icon-animated">
										<i class="fa-brands fa-x-twitter"></i>
									</span>
								</a>
							</div>
						</div>

						<div class="col-12 col-md-6">
							<!-- Contact Form -->
							<div id="tl-contact-form" class="tl-form mt-4 mt-md-0">
								<form class="contact-form">
									<div class="form-floating mb-3">
										<p>
											<span class="form-control-wrap" data-name="your-name">
												<input class="form-control" aria-required="true" placeholder="Name" value="" type="text" name="your-name">
											</span>
										</p>
									</div>
									<div class="form-floating mb-3">
										<p>
											<span class="form-control-wrap" data-name="your-email">
												<input class="form-control" aria-required="true" placeholder="Email Address" value="" type="email" name="your-email">
											</span>
										</p>
									</div>
									<div class="form-floating mb-3">
										<p>
											<span class="form-control-wrap" data-name="phone">
												<input class="form-control" placeholder="Phone Number" value="" type="tel" name="phone">
											</span>
										</p>
									</div>
									<div class="form-group mb-3">
										<p>
											<label class="form-label">I'm interested in:</label>
											<br>
											<span class="form-control-wrap" data-name="interest">
												<span class="wpcf7-form-control wpcf7-radio">
													<span class="wpcf7-list-item first">
														<label>
															<input type="radio" name="interest" value="Branding">
															<span class="wpcf7-list-item-label">Branding</span>
														</label>
													</span>
													<span class="wpcf7-list-item">
														<label>
															<input type="radio" name="interest" value="Web Design">
															<span class="wpcf7-list-item-label">Web Design</span>
														</label>
													</span>
													<span class="wpcf7-list-item">
														<label>
															<input type="radio" name="interest" value="App Design">
															<span class="wpcf7-list-item-label">App Design</span>
														</label>
													</span>
													<span class="wpcf7-list-item last">
														<label>
															<input type="radio" name="interest" value="Other">
															<span class="wpcf7-list-item-label">Other</span>
														</label>
													</span>
												</span>
											</span>
										</p>
									</div>
									<div class="form-group mb-3">
										<p>
											<label class="form-label">My budget is:</label>
											<br>
											<span class="form-control-wrap" data-name="budget">
												<span class="wpcf7-form-control wpcf7-radio">
													<span class="wpcf7-list-item first">
														<label>
															<input type="radio" name="budget" value="&lt; 2k">
															<span class="wpcf7-list-item-label">&lt; 2k</span>
														</label>
													</span>
													<span class="wpcf7-list-item">
														<label>
															<input type="radio" name="budget" value="2-5k">
															<span class="wpcf7-list-item-label">2-5k</span>
														</label>
													</span>
													<span class="wpcf7-list-item">
														<label>
															<input type="radio" name="budget" value="5-10k">
															<span class="wpcf7-list-item-label">5-10k</span>
														</label>
													</span>
													<span class="wpcf7-list-item">
														<label>
															<input type="radio" name="budget" value="10-15k">
															<span class="wpcf7-list-item-label">10-15k</span>
														</label>
													</span>
													<span class="wpcf7-list-item last">
														<label>
															<input type="radio" name="budget" value="&gt; 20k">
															<span class="wpcf7-list-item-label">&gt; 20k</span>
														</label>
													</span>
												</span>
											</span>
										</p>
									</div>
									<div class="form-floating mb-3">
										<p>
											<span class="form-control-wrap" data-name="timeline">
												<input class="form-control" aria-invalid="false" placeholder="What is your timeline?" value="" type="text" name="timeline">
											</span>
										</p>
									</div>
									<div class="form-floating mb-3">
										<p>
											<span class="form-control-wrap" data-name="message">
												<textarea cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Message" name="message"></textarea>
											</span>
										</p>
									</div>
									<div>
										<p>
											<input class="form-submit" type="submit" value="Submit Message">
										</p>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- ***** Contact Area End ***** -->
@endsection