<?php
$contacts = App\Contact::all();
?>

<!-- ================= Top header ============= -->
		<div class="top_header">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-5 col-sm-5 col-xs-12 top_header_left">
						<p><a href="mailto:picl@prudential.com.np"> <span class="icon"><img src="{{asset('images/front_img/home/email.png')}}" alt="image"></span> Email Us:&nbsp; picl@prudential.com.np </a></p>
						<p><a href="mailto:picl@prudential.com.np"> <span class="icon"><img src="{{asset('images/front_img/home/skype.png')}}" alt="image"> </span> Skype:&nbsp;  prudential.insurance</a></p>
					</div>
					<div class="col-lg-6 col-md-7 col-sm-7 col-xs-12 top_header_right">
						 <a href="#" class="button-main hvr-sweep-to-rightB read_more transition3s"><img src="{{asset('images/front_img/home/claim.png')}}" alt="image"> Make Claim</a>  <a href="#" class="button-main hvr-sweep-to-rightB read_more transition3s"><img src="{{asset('images/front_img/home/calculator.png')}}" alt="image"> Calculation</a>
						<p> <span class="icon flaticon-earth208"></span> Language:</p>
						<div class="dropdown">
						  <button class="btn-dropdown dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true">
						   	English
						    <i class="fa fa-angle-down"></i>
						  </button>
						  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
						  	<li><img src="{{asset('images/front_img/home/usa.png')}}" alt="image"> English</li>
						    <li><img src="{{asset('images/front_img/home/nepal.png')}}" alt="image"> Nepali</li>
						  </ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bottom_header">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 logo_holder">
						<a href="index.html"></a>
					</div>
					<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 pull-right address_container">
						<div>
							<div class="icon_holder">
								<span class="icon flaticon-technology"></span>
							</div>
							<div class="text_holder">
								<p>Call Us <a href="tel:+977-01-4212940"> <span> +977-01-4212940</span></a></p>
							</div>
						</div>
						<div>
							<div class="icon_holder">
								<span class="icon flaticon-placeholder"></span>
							</div>
							<div class="text_holder">
								<p>Kamaladi Complex 1951, <span> Kamaladi-30383, Kathmandu-31, Nepal</span></p>
							</div>
						</div>
						<div>
							<div class="icon_holder">
								<span class="icon flaticon-clock"></span>
							</div>
							<div class="text_holder">
								<p>Office Hours <span>10:00AM - 05:00PM (Sun - Fri)</span></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<!-- ================= Top header ============= -->
