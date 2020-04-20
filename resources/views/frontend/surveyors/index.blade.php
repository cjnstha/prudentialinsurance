@extends('layouts.frontend.master')
@section('contents')
<!-- ========================== Inner Banner =================== -->
	<section class="inner_banner">
		<div class="container">
			<div class="banner-title">
				<h1>Surveyors</h1>
				<span class="decor-equal"></span>
			</div>
		</div>
	</section>
<!-- ========================== /Inner Banner =================== -->

<!-- ======================= Breadcrumb ========================== -->
	<section class="breadcrumb_sec">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-6 col-sm-6 col-xs-3">
					<h5>Surveyors</h5>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-6 col-xs-9" style="text-align:right;">
					<ul>
						<li><a href="index.html">Home</a></li>
						<li class="dot"></li>
						<li>Surveyors</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

<!-- ======================= /Breadcrumb ========================== -->

<!-- ============================ Team ================================= -->
	<section class="service_single_page_content">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                	<table class="table table-striped surveyortable">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">S.N.</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Contact Number</th>
                                        <th scope="col">License Number</th>
                                        <th scope="col">Class</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($surveyors as $key=>$surveyor)
                                            <tr>
                                                <td scope="row" data-label="S.N.">{{++$key}}</td>
                                                <td data-label="Name">{{$surveyor->name}}</td>
                                                <td data-label="Address">{{$surveyor->address}}</td>
                                                <td data-label="Status">{{$surveyor->post}}</td>
                                                <td data-label="Contact No.">{{$surveyor->contact_no}}</td>
                                                <td data-label="License No.">{{$surveyor->license_no}}</td>
                                                <td data-label="Class">{{$surveyor->class}}</td>
                                            </tr>
                                        @empty
                                        <p>No Data Available</p>
                                        @endforelse
                                </tbody>
                            </table>
         		</div>
			</div>
		</div> <!-- End container -->
	</section>
<!-- ============================ /Team ================================= -->
@endsection
