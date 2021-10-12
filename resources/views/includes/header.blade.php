<div class="box-wrapper">
	<div class="fullOverlay"></div>
	<section class="top-bar">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<div class="contact_info">
						<ul>
							<li><a href="#"><i class="fas fa-phone" style="color: crimson"></i><span>+88028416120</span></a></li>
							<li><a class="mailto" href="mailto:info@dhakafareast.com"><i class="far fa-envelope" style="color: crimson"></i><span>info@dhakafareast.com</span></a></li>
						</ul>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<div class="social_icons">
						<div class="span-class">
							<i class="fas fa-map-marker-alt span-social-icon"></i>
							<a class="social_icon_contact" href="/contact"><span>Contact</span></a>
						</div>
						<ul>
							<li><a href="https://www.facebook.com/Dhaka-Fareast-Limited-979943828705519" target="_blank"><i class="fab fa-facebook-f social-icon" style="color: crimson"></i></a></li>
							<li><a href="https://www.linkedin.com/company/2679705" target="_blank"><i class="fab fa-linkedin-in social-icon" style="color: crimson"></i></a></li>
							{{-- <li><a href="https://g.page/dhaka-fareast-ltd?gm" target="_blank"><i class="fab fa-google social-icon"></i></a></li> --}}
							<li><a href="https://g.page/dhaka-fareast-ltd?gm" target="_blank"><i class="fas fa-map-marked-alt" style="color: crimson"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Mobile Menu Starts -->
	<nav id="sidenav">
		<div id="dismiss">
			<i class="fas fa-times dismiss-icon"></i>
		</div>
		<div class="sideber-header">
			<div class="logo">
				<a href="/"><img src="{{ Voyager::image(setting('site.logo'))}}"></a>
			</div>
		</div>
		<ul>
			<ul>
				<li class="wrap {{ Request::is('/') ? 'active' : '' }}">
					<div class="btm-border"></div>
					<a href="/"><span>Home</span></a>
				</li>
				<li class="wrap {{ Request::is('about') ? 'active' : '' }} "><div class="btm-border"></div><a href="/about"><span>About</span></a>
					<div class="sub_menu">
						<ul>
							<li><a href="/knitwear-manufacturer-and-exporter"">Knitwear Manufacturer and Exporter</a></li>
							<li><a href="/woven-garments-manufacturer-and-exporter">Woven Garments Manufacturer and Exporter</a></li>
						</ul>
					</div>
				</li>
				<li class="wrap {{ Request::is('service') ? 'active' : '' }}"><div class="btm-border"></div><a href="/service"><span>Services</span></a></li>
				<li class="wrap {{ Request::is('product') ? 'active' : '' }}"><div class="btm-border"></div><a href="/product"><span>Products</span></a>
					<div class="sub_menu">
						<ul>
							@php
								$sub_menue =App\Product::distinct()
								                        ->get(['product_type']);
							@endphp
							@foreach ($sub_menue as $sub_menue)
								<li><a href="{{ route('product_type',$sub_menue->product_type) }}">{{$sub_menue->product_type}}</a></li>
							@endforeach
						</ul>

					</div>
				</li>
				<li class="wrap {{ Request::is('clients') ? 'active' : '' }}"><div class="btm-border"></div><a href="/clients"><span>Clients</span></a></li>
				<li class="wrap {{ Request::is('contact') ? 'active' : '' }}"><div class="btm-border"></div><a href="/contact"><span>Contact</span></a></li>
                <li class="wrap {{ Request::is('blog') ? 'active' : '' }}"><div class="btm-border"></div><a href="/blog"><span>Blog</span></a></li>
			</ul>
		</ul>
	</nav>
	<!-- Mobile Menu Ends -->
	<header id="header-section">
		<div class="container">
			<div class="row">
				<div class="col-xs-9 col-sm-9 col-md-3 col-lg-3">
					<div class="logo">
						<a href="/"><img src="{{ Voyager::image(setting('site.logo'))}}" class="img-responsive"></a>
					</div>
				</div>
				<div class="col-xs-3 col-sm-3 col-md-9 col-lg-9 text-right">
					<button type="button" id="sidenav-collapse" class="navbar-toggle collapsed collapse-btn" data-toggle="collapse" data-target="#navigation-collapse" aria-expanded="false" aria-label="Toggle navigation">

						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="navigation" id="navigation-collapse">
						<nav class="main-nav">
							<ul>
								<li class="wrap {{ Request::is('/') ? 'active' : '' }}">
									<div class="btm-border"></div>
									<a href="/"><span>Home</span></a>
								</li>
								<li class="wrap {{ Request::is('about') ? 'active' : '' }} "><div class="btm-border"></div><a href="/about"><span>About</span></a>
									<div class="sub_menu">
										<ul class="incWidth">
											<li><a href="/knitwear-manufacturer-and-exporter">Knitwear Manufacturer and Exporter</a></li>
											<li><a href="/woven-garments-manufacturer-and-exporter">Woven Garments Manufacturer and Exporter</a></li>
										</ul>
									</div>
								</li>
								<li class="wrap {{ Request::is('service') ? 'active' : '' }}"><div class="btm-border"></div><a href="/service"><span>Services</span></a></li>
								<li class="wrap {{ Request::is('product') ? 'active' : '' }}"><div class="btm-border"></div><a href="/product"><span>Products</span></a>
									<div class="sub_menu">
										<ul>
											@php
												$sub_menue =App\Product::distinct()->get(['product_type']);
											@endphp
											@foreach ($sub_menue as $sub_menue)
												<li><a href="{{ route('product_type',$sub_menue->product_type) }}">{{$sub_menue->product_type}}</a></li>
											@endforeach
										</ul>
									</div>
								</li>
								<li class="wrap {{ Request::is('clients') ? 'active' : '' }}"><div class="btm-border"></div><a href="/clients"><span>Clients</span></a></li>
								<li class="wrap {{ Request::is('contact') ? 'active' : '' }}"><div class="btm-border"></div><a href="/contact"><span>Contact</span></a></li>
                                <li class="wrap {{ Request::is('blog') ? 'active' : '' }}"><div class="btm-border"></div><a href="/blog"><span>Blog</span></a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</header>
</div>
