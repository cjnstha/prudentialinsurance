@extends('layouts.frontend.master')
@section('title')
    Re-Insurers
@endsection
@section('contents')
    <!-- ========================== Inner Banner =================== -->
    <section class="inner_banner">
        <div class="container">
            <div class="banner-title">
                <h1>Re-Insurers</h1>
                <span class="decor-equal"></span>
            </div>
        </div>
    </section>
    <!-- ========================== /Inner Banner =================== -->

    <!-- ======================= Breadcrumb ========================== -->
    <section class="breadcrumb_sec breadcrumb_fix">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-6 col-sm-6 col-xs-3">
                    <h5>Re-Insurers</h5>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-9" style="text-align:right;">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li class="dot"></li>
                        <li>Re-Insurers</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ======================= /Breadcrumb ========================== -->

    <!-- =================== services single content ================== -->
    <section class="service_single_page_content">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <div class="partner-grid">
                        @foreach($reinsurers as $reinsurer)
                            <div class="col-md-3 col-sm-6">
                                <div class="re-insurers-cont">
                                    <img src="../public/storage/{{$reinsurer->image}}"
                                         class="img-responsive partner-img"
                                         alt="Image">
                                    <p>{{$reinsurer->title}} ({{$reinsurer->tagline}})</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div> <!-- End row -->

        </div> <!-- End container -->
    </section> <!-- /service_single_page_content -->


    <!-- =================== /services single content ================== -->
@endsection
