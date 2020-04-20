@extends('layouts.frontend.master')
@section('contents')
<!-- ========================== Inner Banner =================== -->
	<section class="inner_banner">
		<div class="container">
			<div class="banner-title">
				<h1>Frequently Asked Questions</h1>
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
					<h5>FAQs</h5>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6 col-xs-7">
					<ul>
						<li><a href="{{url('/')}}">Home</a></li>
						<li class="dot"></li>
						<li>FAQs</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

<!-- ======================= /Breadcrumb ========================== -->
<!-- ============================== FAQ & Gallery ====================== -->
<section class="service_single_page_content">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 faq_sec">
						<div class="title_container">
							<h4>Frequently Asked Questions</h4>
							<span class="decor_default"></span>
						</div>
                        @forelse($faqs as $key=>$faq)
						<div class="panel-group" id="accordion">
							  <div class="panel panel-default">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{ $faq->id }}" class="" aria-expanded="true">
								    <div class="panel-heading active-panel">
								      <h5 class="panel-title">{{++$key}}. {{$faq->title}}</h5>
								    </div>
							    </a>
							    <div id="collapse{{ $faq->id }}" class="panel-collapse collapse" aria-expanded="false" style="">
							      <div class="panel-body">
							      	<p>{!! $faq->details !!}</p>
							      </div>
							    </div>
							  </div>
						</div> <!-- End #accordion -->
                            @empty
                            @endforelse
					</div>
					<!-- <div class="col-lg-6 col-md-6 gallery_sec">
						<div class="transform_img_holder gallery_img">
							<img class="img-responsive" src="images/home/1.jpg" alt="images">
							<div class="overlay"></div>
						</div>
						<div class="transform_img_holder gallery_img">
							<img class="img-responsive" src="images/home/2.jpg" alt="images">
							<div class="overlay"></div>
						</div>
						<div class="transform_img_holder gallery_img">
							<img class="img-responsive" src="images/home/3.jpg" alt="images">
							<div class="overlay"></div>
						</div>
						<div class="transform_img_holder gallery_img">
							<img class="img-responsive" src="images/home/4.jpg" alt="images">
							<div class="overlay"></div>
						</div>
						<div class="transform_img_holder gallery_img">
							<img class="img-responsive" src="images/home/5.jpg" alt="images">
							<div class="overlay"></div>
						</div>
					</div> -->
				</div>
			</div>
		</section>
		<!-- ============================== /FAQ & Gallery ========================= -->
    @endsection
