@extends('layouts.frontend.master')
@section('title')
    About Us
    @endsection
@section('contents')

<!-- ========================== Inner Banner =================== -->
	<section class="inner_banner about-breadcrumb-bg">
		<div class="container">
			<div class="banner-title">
				<h1>Who We Are</h1>
				<span class="decor-equal"></span>
			</div>
		</div>
	</section>
<!-- ========================== /Inner Banner =================== -->

<!-- ======================= Breadcrumb ========================== -->
	<section class="breadcrumb_sec">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-md-6 col-sm-6 col-xs-5">
					<h5>About Us</h5>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6 col-xs-7">
					<ul>
						<li><a href="index.html">Home</a></li>
						<li class="dot"></li>
						<li>About us</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

<!-- ======================= /Breadcrumb ========================== -->

<!--  =========================== Our mission value ================ -->
	<section class="our_mission">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mission_value pull-right">
					<div class="title_container">
						<h4>Let Us Tell You Our Story In Details</h4>
						<span class="decor_default"></span>
					</div>
					<div>
					    <div id="carousel-example-vertical" class="carousel vertical slide">
					      <div class="carousel-inner" role="listbox">
					        <div class="item active">
					        	<div class="title_container">
									<h5>Introduction</h5>
								</div>
					          <div class="ticker-headline">
						           <p>{!! $abouts[0]->introduction !!}</p>
						           <ul>
							           <li><img class="img-responsive" src="images/about/3.jpg" alt="images"></li>
						           </ul>
						           <ul>
							           <li><img class="img-responsive" src="images/about/4.jpg" alt="images"></li>
						           </ul>
					          </div>
					        </div> <!-- /item -->
					        <div class="item">
					          <div class="ticker-headline">
						           <h5>Vision of the Company</h5>
										<p>The company envisions being a strong and reputed insurer in the sector of non-life insurance of Nepal catering to the insurance needs of the costumers and providing them the best possible financial protection in the event of unexpected misfortunes.</p>

									<h5>Value of the Company</h5>
										<p>We continuously attempt to provide security and achieve customer satisfaction. We make sustained efforts to improve our skills and proficiency so that we can provide high quality services. We achieve mutual growth by respecting one another’s individuality and opinions, and by sharing knowledge and ideas. We listen to our stakeholders and continuously seek ways to improve our work and business.</p>
					          </div>
					        </div> <!-- /item -->
					        <div class="item">
					        	<div class="col-lg-12 col-lg-offset-1 col-md-6 col-sm-12 col-xs-12 people_choose_us">
						<div class="title_container">
							<h5>Why People Choose Us</h5>

						</div>
						<div class="row choose_category"> <!-- item1 -->
							<div class="col-lg-1 col-md-1 col-sm-1 col-xs-2 icon-holder">
								<span class="icon flaticon-speed2"></span>
								<i class="fa fa-angle-down"></i>
							</div>
							<div class="col-lg-11 col-md-11 col-sm-11 col-xs-10 text_holder">
								<h5>Fast Approval</h5>
								<p>Established sed fact will that sed tracted by sed the readable of a when looking when layout  finish on time.</p>
							</div>
						</div>
						<div class="row choose_category"> <!-- item2 -->
							<div class="col-lg-1 col-md-1 col-sm-1 col-xs-2 icon-holder">
								<span class="icon flaticon-house118"></span>
								<i class="fa fa-angle-down"></i>
							</div>
							<div class="col-lg-11 col-md-11 col-sm-11 col-xs-10 text_holder">
								<h5>Refinancing</h5>
								<p>Fact will that sed tracted by sed the readable on a looking when layout will becollections.</p>
							</div>
						</div>
						<div class="row choose_category"><!-- item3 -->
							<div class="col-lg-1 col-md-1 col-sm-1 col-xs-2 icon-holder">
								<span class="icon flaticon-tasks2"></span>
							</div>
							<div class="col-lg-11 col-md-11 col-sm-11 col-xs-10 text_holder">
								<h5>Free Documention</h5>
								<p>Tracted by sed the readable on contents of a  layout will be collections well documented.</p>
							</div>
						</div>
					</div>
					         <!--  <div class="ticker-headline">
						           <p>There are many variations of passages,the majority have suffered alteration in some form, by injected humourrandomised words which don't look even slightly believable when get finance. </p>
						           <p>Majority have suffered alteration in some form, by sed injected humour, or randomised words If you are going to use a passage.</p>
						           <h5>We Are FinancePress, Why We Are Here? For Save Time,<br> Save Money , Grow & Succeed</h5>
						           <ul>
							           <li><i class="fa fa-angle-right"></i> <a href="#">Longtime Care</a></li>
							           <li><i class="fa fa-angle-right"></i> <a href="#">Best Plans</a></li>
							           <li><i class="fa fa-angle-right"></i> <a href="#">Customer Satisfaction</a></li>
						           </ul>
						           <ul>
							           <li><i class="fa fa-angle-right"></i> <a href="#">Make Difference</a></li>
							           <li><i class="fa fa-angle-right"></i> <a href="#">Referesh The World</a></li>
							           <li><i class="fa fa-angle-right"></i> <a href="#">Financially Wealth</a></li>
						           </ul>
					          </div> -->
					        </div> <!-- /item -->
					      </div> <!-- /carousel-inner -->
					      <!-- Controls -->
					      <a class="up carousel-control" href="#carousel-example-vertical" role="button" data-slide="prev">
					        <i class="fa fa-angle-up" aria-hidden="true"></i>
					        <i class="sr-only">Previous</i>
					      </a>
					      <a class="down carousel-control" href="#carousel-example-vertical" role="button" data-slide="next">
					        <i class="fa fa-angle-down" aria-hidden="true"></i>
					        <i class="sr-only">Next</i>
					      </a>
					      <!-- Indicators -->
							<ol class="carousel-indicators">
							  <li data-target="#carousel-example-vertical" data-slide-to="0" class="active">
							  	<span>Introduction <img src="images/about/pop-bg.png" alt=""></span>
							  </li>
							  <li data-target="#carousel-example-vertical" data-slide-to="1">
							  	<span>Vision & Value<img src="images/about/pop-bg.png" alt=""></span>
							  </li>
							  <li data-target="#carousel-example-vertical" data-slide-to="2">
							  	<span>Why Us? <img src="images/about/pop-bg.png" alt=""></span>
							  </li>
							</ol>
					    </div>
				    </div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mission_gallery pull-left"> <!-- images gallery -->
					<img class="img-responsive" src="images/about/about-img.png" alt="images">
					<!-- <img class="img-responsive" src="images/about/2.jpg" alt="images">
					<img class="img-responsive" src="images/about/3.jpg" alt="images">
					<img class="img-responsive" src="images/about/4.jpg" alt="images">
					<img class="img-responsive" src="images/about/5.jpg" alt="images"> -->
				</div> <!-- /images gallery -->
			</div>
		</div>
	</section>

<!--  =========================== /Our mission value ================ -->
    @endsection
