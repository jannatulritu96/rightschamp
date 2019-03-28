@extends('frontend.layout.master')
@section('contents')

    <!--=====Banner=====-->

    <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-1z" data-slide-to="1"></li>
            <li data-target="#carousel-example-1z" data-slide-to="2"></li>
        </ol>
        <!--/.Indicators-->
        <!--Slides-->
        {{--@foreach($sliders as $slider)--}}
        <div class="carousel-inner" role="listbox">
            <!--First slide-->

            <div class="carousel-item active">
                <img class="d-block w-100" src="assets/img/Untitled-svg.jpg" alt="First slide">
            </div>

            <!--/First slide-->
            <!--Second slide-->
            <div class="carousel-item">
                <img class="d-block w-100" src="assets/img/sliderImg531.jpg" alt="Second slide">
            </div>
            <!--/Second slide-->
            <!--Third slide-->
            <!--<div class="carousel-item">
              <img class="d-block w-100" src="img/sliderImg123.jpg" alt="Third slide">
            </div>-->
            <!--/Third slide-->
        </div>
    {{--@endforeach--}}
        <!--/.Slides-->
        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
    </div>

    <!--=====news letter=====-->

    <div class="row">
        <div class="card bg-as w-100 p-4 mb-4 position-relative">
            <div class="text-white center">
                <form>
                    <div class="form-row align-items-center">
                        <h2 class="updt">Type something / Anything</h2>
                        <!--       <div class="col-auto ">
                                   <div class="input-group shadow1">
                                       <div class="input-group-prepend">
                                           <div class="input-group-text border-0 text-dark"><i class="icofont-email"></i></div>
                                       </div>
                                       <input type="email" class="form-control bg-grn border-0" id="inlineFormInputGroup" placeholder="Email">
                                   </div>
                               </div>
                               <div class="col-auto">
                                   <button type="submit" class="btn btn-md mine-btn">Submit</button>
                               </div>-->
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--=====news letter=====-->
    <main>
        <div class="container">
            <div class="row">
                @foreach($abouts as $about)
                <section class="col-lg-12">
                    <!--about us-->
                    <div class="row mb-5">
                        <div class="col-lg-4">
                            <div class="bout-img position-relative">
                                <h2 class="about-ttl p-4">{{ $about->title }}</h2>
                                <a class="btn btn-md mine-btn mt-3 ml-4" href="{{ route('aboutus') }}">Read more</a>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <p class="about-txt common-text">{{ $about->short_description }}</p>
                        </div>
                    </div>
                    <hr>
                </section>
                @endforeach
                    <!--about us-->
                    <!--service-->
                    <section class="pt-5 pb-5">
                        <h2 class="lft-title"> Practice Areas </h2>
                        <p class="text-center">RIGHTS chambers provides legal assistance in all areas of law with the emphasis on the following areas</p>
                        <div class="row pt-4 position-relative pb-2 wd-sm">
                            @foreach($practice_areas as $practice_area)
                            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                <div class="">
                                    <div class="card news_card mb-3 as2-bg">
                                        <a href="{{ route('service-details',$practice_area->id) }}">
                                            <div class="view overlay">
                                                <img class="card-img-top" src="{{ asset($practice_area->image) }}" alt="Card image cap">
                                            </div>
                                            <div class="card-body p-2">
                                                <h3 class="gold card_title_mine col-11 text-truncate">
                                                    <marquee behavior="scroll" direction="" scrollamount="3" onmouseover="this.stop();" onmouseout="this.start();">
                                                        {{ $practice_area->title }}
                                                    </marquee>
                                                   </h3>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <!--<a class="btn btn-md mine-btn mt-3 center" href="#">See more</a>-->
                        </div>
                        <hr>
                    </section>
                    <!--service-->
                    <!--membership-->
                    <section class=" container">
                        <h2 class="lft-title">Professional Memberships</h2>
                        <p class="text-center">Individual members of the firm hold one or more of the following Professional membership</p>
                        <!-- Section description -->
                            <div class="customer-logos slider">
                                @foreach($memberships as $membership)
                                   
                                        <img src="{{ asset($membership->image) }}" style="border: 1px;box-shadow: 0px 0px 9px 4px gainsboro;border-radius: 31px;">
                                   
                                @endforeach
                            </div>
                        <hr>
                    </section>
                    <br>
                    {{--<div class="container">--}}
                        {{--<div class="title_bk">--}}
                            {{--<h2 class="lft-title">Our clients</h2>--}}
                            {{--<p class="text-center">We receive instructions from a number of reputable companies and individuals in Bangladesh. Additionally we also receive instructions from abroad including several solicitors’ firms in England. Specifically, the following examples are illustrations</p>--}}
                        {{--</div>--}}
                        {{--<!-- Section description -->--}}
                        {{--<section class="d-flex">--}}
                            {{--@foreach($memberships as $membership)--}}
                                {{--<div class=""><a href="#"><img src="{{ asset($membership->image) }}"></a></div>--}}
                            {{--@endforeach--}}
                        {{--</section>--}}
                    {{--</div>--}}
                    <!--membership-->
                    <!--team-->
                    <section class="team-section text-center pb-5">
                        <!-- Section heading -->
                        <h2 class="lft-title pb-3">Our amazing team</h2>
                        <!-- Section description -->
                        <div class="row">
                            <!-- Grid column -->
                            @foreach($teams as $team)
                            <div class="col-lg-4 col-md-6 mb-lg-0 mb-5">
                                <div class="avatar mx-auto">
                                    <a href="{{ route('teams',$team->slug_name) }}">
                                        <img src="{{ asset($team->image) }}" class="brdr z-depth-1" alt="Sample avatar">
                                    </a>
                                </div>
                                <div class="team-txt as2-bg gold">
                                    <h5 class="font-weight-bold mb-1">{{ $team->name }}</h5>
                                    <!-- <p class="text-uppercase gold">Graphic designer</p>-->
                                    <ul class="list-unstyled mb-0">
                                        <!-- Facebook -->
                                        <a class="p-2 fa-lg fb-ic">
                                            <i class="icofont-linkedin"></i>
                                        </a>
                                        <!-- Twitter -->
                                        <a class="p-2 fa-lg tw-ic">
                                            <i class="icofont-facebook-messenger"></i>
                                        </a>
                                        <!-- Instagram -->
                                        <a class="p-2 fa-lg ins-ic">
                                            <i class="icofont-twitter"></i>
                                        </a>
                                    </ul>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <hr>
                    </section>
                    <!--cline-->
                    <div class="container">
                        <div class="title_bk">
                            <h2 class="lft-title">Our clients</h2>
                            <p class="text-center">We receive instructions from a number of reputable companies and individuals in Bangladesh. Additionally we also receive instructions from abroad including several solicitors’ firms in England. Specifically, the following examples are illustrations</p>
                        </div>
                        <!-- Section description -->
                        <section class="d-flex">
                            @foreach($memberships as $membership)
                            <div class=""><img src="{{ asset($membership->image) }}"></div>
                            @endforeach
                        </section>
                    </div>
                    <!--cline-->
            </div>
        </div>
    </main>
@endsection
