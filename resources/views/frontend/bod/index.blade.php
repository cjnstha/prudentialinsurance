@extends('layouts.frontend.master')
@section('title')
    Board of Directors
@endsection

@section('contents')
    <!-- ========================== Inner Banner =================== -->
    <section class="inner_banner">
        <div class="container">
            <div class="banner-title">
                <h1>Board of Directors</h1>
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
                    <h5>Board of Directors</h5>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6 col-xs-7">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li class="dot"></li>
                        <li>Board of Directors</li>
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
                    <ul class="row gridder">
                        @foreach($bods as $key=>$bod)
                            <li class="col-md-4 boarddirectors__single bod-chairman set"
                                data-griddercontent="#content{{$bod->id}}">
                                <div class="boarddirectors__single__meta">
                                    <figure class="meta__image">
                                        <img src="{{$bod->bod_imag}}" alt="images">
                                    </figure>
                                    <div class="meta__details">
                                        <span class="meta__details__name">{{$bod->bod_name}}</span>
                                        <div class="meta__details__position"><span>{{$bod->bod_position}}</span></div>
                                        <div class="meta__details__nominate"></div>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                    </ul>

                    <!-- Gridder content -->
                    @foreach($bods as $bod)
                    <div id="content{{$bod->id}}" class="gridder-content">
                        <div class="row">
                            <div class="col-sm-3 offset-sm-1">
                                <img src="{{$bod->bod_imag}}" alt="images">
                            </div>
                            <div class="col-sm-9">
                                 <div
                                        style="display: flex; justify-content: space-between;align-items: center;    padding-right: 28px;">
                                <h2 class="title">{{$bod->bod_name}} | <span>{{$bod->bod_position}}</span></h2>
                                     <i class="fa fa-times fa-3 close-gridder" aria-hidden="true"
                                           style="font-size: 2em;"></i>
                                 </div>
                                <hr>
                                <p class="desc">
                                <p>{!! $bod->bod_message !!}</p></p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div><!-- End row -->
        </div> <!-- End container -->
    </section>
    <!-- ============================ /Team ================================= -->
@endsection

@section('scripts')
    <script>
        $(document).ready(function () {
            $(".set").on("click", function () {
                if ($(this).hasClass("active")) {
                    var test = $(this).attr("data");
                    $(test).slideUp(200);

                } else {
                    $(".set").removeClass("active");
                    $(this).addClass("active");
                    var test = $(this).attr("data");
                    $(".gridder-content").slideUp(200);
                    $(test).slideDown(200);

                }
            });
            $(".close-gridder").on("click", function () {
                $(".content").slideUp(200);
            })
        });
    </script>
@endsection
