@extends('layouts.frontend.master')
@section('contents')
<!-- ========================== Inner Banner =================== -->
	<section class="inner_banner">
		<div class="container">
			<div class="banner-title">
				<h1>Agents </h1>
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
					<h5>Agents</h5>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-6 col-xs-9" style="text-align:right;">
					<ul>
						<li><a href="{{url('/')}}">Home</a></li>
						<li class="dot"></li>
						<li>Agents</li>
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
                	<table class="table table-striped agenttable">
                                <thead class="thead-light">
                                    <tr>
                                        <th>S.N</th>
                                        <th>Name</th>
                                        <th>Agent Code</th>
                                        <th>Address</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @forelse($agents as $key=>$agent)
                                    <tr>
                                        <td data-label="S.N.">{{++$key}}</td>
                                        <td data-label="Name">{{$agent->agent_name}}</td>
                                        <td data-label="Agent Code">{{$agent->agent_code}}</td>
                                        <td data-label="Address">{{$agent->agent_address}}</td>
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
