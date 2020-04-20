@extends('layouts.frontend.master')
@section('title')
   Branch List
@endsection
@section('contents')
<!-- ======================= Breadcrumb ========================== -->
	<section class="breadcrumb_sec">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-md-6 col-sm-6 col-xs-5">
					<h5>Our Branches</h5>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6 col-xs-7">
					<ul>
						<li><a href="index.html">Home</a></li>
						<li class="dot"></li>
						<li>Our Branches</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

<!-- ======================= /Breadcrumb ========================== -->

<section>

				<div class="container">
					<img src="images/branches/branches-map.png" class="img-responsive img-branches" alt="Image">
                    @foreach($branches as $branch)
					<div class="row">
						<div class="col-md-3 col-sm-6">
							<div class="item-locaition item-branche">
							<h3>{{$branch->branch_title}}</h3>
							<div class="inner-location">
								<p><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> {{$branch->address}} </a> </p>
								<p><a href="tel:+977-051-531681"> <i class="fa fa-phone" aria-hidden="true"></i> {{$branch->branch_contact}}</a></p>
								<p><a href="#"> <i class="fa fa-fax" aria-hidden="true"></i>{{$branch->branch_fax}}</a></p>
								<p><a href="mailto:birgunj@prudential.com.np"> <i class="fa fa-envelope-square" aria-hidden="true"></i> {{$branch->branch_email}}</a></p>
								<p><i class="fa fa-user" aria-hidden="true"></i>{{$branch->branch_incharge}} </br>({{$branch->position}})</p>

							</div>
							</div>
						</div>
                        @endforeach
					</div>
				</div>
			</section>

    @endsection
