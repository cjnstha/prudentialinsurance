@extends('layouts.frontend.master')
@section('title')
    Team Members
@endsection

@section('contents')

    <!-- ========================== Inner Banner =================== -->
    <section class="inner_banner">
        <div class="container">
            <div class="banner-title">
                <h1>Our Experts Team Members</h1>
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
                    <h5>Team Members</h5>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6 col-xs-7">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li class="dot"></li>
                        <li>Team Members</li>
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
                        @foreach($teams as $key=>$team)
                            <li class="col-md-4 boarddirectors__single bod-chairman set"
                                data="#content{{$team->id}}">
                                <div class="boarddirectors__single__meta">
                                    <figure class="meta__image">
                                        <img src="../public/storage/{{$team->team_image}}" alt="images">
                                    </figure>
                                    <div class="meta__details">
                                        <span class="meta__details__name">{{$team->team_name}}</span>
                                        <div class="meta__details__position">
                                            <span>{{$team->team_position}}</span>
                                        </div>
                                        <div class="meta__details__nominate">
                                            <span> <a href="tel:+977-01-4212940" class="transition3s"><i
                                                        class="fa fa-phone"></i> {{$team->team_phone}}</a></span>
                                            </br>
                                            <span> <a href="mailto:administrator@prudential.com.np"
                                                      class="transition3s"><i class="fa fa-envelope"></i>{{$team->team_email}}</a></span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>

                    <!-- Gridder content -->
                    @foreach($teams as $key=>$team)
                        <div id="content{{$team->id}}" class="content" style="    background: #000000e0;color: #FFFF;">
                            <div class="row">
                                <div class="col-sm-3 offset-sm-1">
                                    <img src="../public/storage/{{$team->team_image}}" alt="images">
                                </div>
                                <div class="col-sm-9">
                                    <div
                                        style="display: flex; justify-content: space-between;align-items: center;    padding-right: 28px;">
                                        <h2 class="title">{{$team->team_name}} | <span>{{$team->team_position}}</span>
                                        </h2>
                                        <i class="fa fa-times fa-3 close-gridder" aria-hidden="true"
                                           style="font-size: 2em;"></i>
                                    </div>
                                    <hr>
                                    <p class="desc">{{$team->team_description}}</p>
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
                    $(".content").slideUp(200);
                    $(test).slideDown(200);

                }
            });
            $(".close-gridder").on("click", function () {
                $(".content").slideUp(200);
            })
        });
    </script>
@endsection

