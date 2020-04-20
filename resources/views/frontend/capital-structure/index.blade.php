@extends('layouts.frontend.master')
@section('title')
    Capital Structure
    @endsection
@section('contents')
<!-- ========================== Inner Banner =================== -->
    <section class="inner_banner">
        <div class="container">
            <div class="banner-title">
                <h1>Capital Structure</h1>
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
                    <h5>Capital Structure</h5>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-9" style="text-align:right;">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li class="dot"></li>
                        <li>Capital Structure</li>
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
                        <div class="contents">
                            <div class="no-structure">

                                       {!! $capitals[0]->capital_details !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End container -->
    </section>
<!-- ============================ /Team ================================= -->
    @endsection
