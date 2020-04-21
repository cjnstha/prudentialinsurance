@extends('layouts.frontend.master')
@section('title')
    AGM Minute
@endsection
@section('contents')
<!-- ========================== Inner Banner =================== -->
	<section class="inner_banner">
		<div class="container">
			<div class="banner-title">
				<h1>AGM Minute </h1>
				<span class="decor-equal"></span>
			</div>
		</div>
	</section>
<!-- ========================== /Inner Banner =================== -->

<!-- ======================= Breadcrumb ========================== -->
	<section class="breadcrumb_sec">
        <div class="download">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-6 col-sm-6 col-xs-3">
					<h5>AGM Minute </h5>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-6 col-xs-9" style="text-align:right;">
					<ul>
						<li><a href="index.html">Home</a></li>
						<li class="dot"></li>
						<li>AGM Minute </li>
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
				<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
					<div class="tab_nav_holder">
				   	   <!-- Nav tabs -->
					  <ul class="nav nav-tabs tabs-left"><!-- 'tabs-right' for right tabs -->

					    <li class="active"><a href="{{url('/agm-minute')}}"> AGM Minute <i class="fa fa-angle-right"></i></a></li>
						<li><a href="{{url('/kyc-form')}}">KYC Forms  <i class="fa fa-angle-right"></i></a></li>
						<li><a href="{{url('/policy-proposal-form')}}">Policy Proposal Form  <i class="fa fa-angle-right"></i></a></li>
						<li><a href="{{url('/right-share')}}">Right Share  <i class="fa fa-angle-right"></i></a></li>
						<li><a href="{{url('/claim-form')}}">Claim Form  <i class="fa fa-angle-right"></i></a></li>
						<li><a href="{{url('/surveyor-listing-application-form')}}">Surveyor Listing Application Form  <i class="fa fa-angle-right"></i></a></li>
					  </ul>
				  </div>
				</div>
				<div class="download__container col-lg-9 col-md-8 col-sm-6 col-xs-12 pull-right key_benefits">
                	<div class="download__container__table" data-url="agent-form-details">
                                        <table class="table table-sm">
					                        <thead class="thead-light">
					                            <tr>
					                                <th>Name</th>
					                                <th>Date Added</th>
{{--					                                <th>View File</th>--}}
					                                <th>Download File</th>
					                            </tr>
					                        </thead>
					                        <tbody>
                                            @forelse($agms as $agm)
					                            <tr>
					                                <td data-label="Name" title="AGM Minute">{{$agm->agm_name}}</td>
					                                <td data-label="Date Added">{{$agm->updated_at}}</td>
{{--					                                <td data-label="View File">--}}
{{--					                                    <a class='btn btnViewFile' data-target="{{ asset($agm->agm_files)}}" data-title="{!! $agm->agm_files !!}" data-modal="downloadModal" title="View File"><i class='fa fa-eye'></i> View</a>--}}
{{--					                                </td>--}}
					                                <td data-label="Download File">
					                                    <a href="../public/storage/{{$agm->agm_files}}" title="Download Attachment" class='btn' download target='_blank'><span><i class="fa fa-file-pdf-o" aria-hidden="true"></i></span> Download <i class="fa fa-download" aria-hidden="true"></i></a>
					                                </td>
					                            </tr>
                                            @empty
                                                <p>No Data Available</p>
                                            @endforelse
					                        </tbody>
					                    </table>
				        <div class="more-download">
				        </div>
				    </div>
         		</div>
			</div>
		</div> <!-- End container -->
	</section>
<!-- ============================ /Team ================================= -->


@endsection
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfobject/2.1.1/pdfobject.min.js" defer></script>
@endsection
