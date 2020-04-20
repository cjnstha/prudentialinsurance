@extends('layouts.frontend.master')
@section('title')
    Citizen Charter
@endsection
@section('contents')
    <!-- ========================== Inner Banner =================== -->
    <section class="inner_banner">
        <div class="container">
            <div class="banner-title">
                <h1>Citizen’s Charter</h1>
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
                    <h5>Citizen’s Charter</h5>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-9" style="text-align:right;">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li class="dot"></li>
                        <li>Citizen’s Charter</li>
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
                <div class="col-lg-12 col-md-12 faq_sec">
                    <div class="title_container">
                        <h4>Citizen’s Charter</h4>
                        <span class="decor_default"></span>
                    </div>
                    @foreach($citizens as $key=>$citizen)
                        <div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$citizen->id}}" class="collapsed"
                                   aria-expanded="false">
                                    <div class="panel-heading active-panel">
                                        <h5 class="panel-title">{{++$key}} {{$citizen->title}} </h5>
                                    </div>
                                </a>
                                <div id="collapse{{$citizen->id}}" class="panel-collapse collapse" aria-expanded="false" style="">
                                    <div class="panel-body">
                                        <p>{!! $citizen->details !!} </p>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- End #accordion -->
                    @endforeach
                </div>
            </div> <!-- End row -->
        </div> <!-- End container -->
    </section> <!-- /service_single_page_content -->


    <!-- =================== /services single content ================== -->
@endsection
