@extends('layouts.frontend.master')
@section('title')
   Premium Structure
@endsection
@section('contents')
<!-- ========================== Inner Banner =================== -->
	<section class="inner_banner graph-breadcrumb-bg ">
		<div class="container">
			<div class="banner-title">
				<h1>Premium Collection</h1>
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
					<h5>Premium Collection</h5>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-6 col-xs-9" style="text-align:right;">
					<ul>
						<li><a href="index.html">Home</a></li>
						<li class="dot"></li>
						<li>Premium-Collection</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

<!-- ======================= /Breadcrumb ========================== -->

<!-- ============================ Team ================================= -->
	<section class="team">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
                    <div class="financial__section documentUI">
                        <div class="contents barChartImplementation">
                            <div class="reporttable datatable">
                                @forelse($premiums as $premium)
                                    {!! $premium->premium_details !!}
                                @empty
                                    <h1>No Data Available</h1>
                                    @endforelse

                            </div>
                        </div>
                    </div>
                </div>
			</div>
		</div> <!-- End container -->
	</section>
<!-- ============================ /Team ================================= -->
@endsection
@section('scripts')
    <!-- custom js of graph -->
    <script type="text/javascript" src="{{url('js/Chart.bundle.min.js')}}" ></script>
    <script type="text/javascript" src="{{url('js/hammer.min.js')}}" ></script>
    <script type="text/javascript" src="{{url('js/chartjs-plugin-zoom.min.js')}}" ></script>
    <script type="text/javascript" src="{{url('js/pdfmake.min.js')}}" ></script>
    <script type="text/javascript" src="{{url('js/vfs_fonts.js')}}" ></script>
    <script type="text/javascript" src="{{url('js/datatables.min.js')}}" ></script>


    <script src="{{url('js/custom-graph.js')}}" ></script>
@endsection
