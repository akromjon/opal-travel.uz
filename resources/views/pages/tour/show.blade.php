@extends('lib.main')
@section('content')
<section class="tour-listing-details tour-listing-details-right">
    <div class="tour-listing-details__destination">
        <div class="container">
            <div class="tour-listing-details__destination-row row">
                <div class="col-xl-4 wow animated fadeInLeft" data-wow-delay="0.1s" data-wow-duration="1500ms">
                    <div class="tour-listing-details__destination-left">
                        <h3 class="tour-listing-details__dastination-title">{{$tour->name}}</h3>
                        <h4 class="tour-listing-details__dastination-price"><span>{{number_format($tour->price,0)}} UZS</span><span
                                class="tour-listing-details__dastination-person"></span></h4>
                    </div><!-- /.tour-listing-details__daetination-left -->
                </div><!-- /.col-xl-4 -->

            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.tour-listing-details__destination -->


    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <div class="tour-listing-details__slider">
                    <div class="tour-listing-details__carousel trevlo-owl__carousel trevlo-owl__carousel--basic-nav owl-theme owl-carousel"
                        data-owl-options='{
                        "items": 2,
                        "margin": 30,
                        "smartSpeed": 700,
                        "loop":false,
                        "autoplay": 6000,
                        "nav":false,
                        "dots":true,
                        "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                        "responsive":{
                            "0":{
                                "items": 1
                            },
                            "768":{
                                "items": 2
                            }
                        }
                        }'>

                        <div class="tour-listing-details__carousel-item item">
                            <div class="tour-listing-details__carousel-image-box">
                                <img width="100%" src="{{asset("/storage/$tour->img")}}"
                                alt="tour-listing-details-slide" class="tour-listing-details__carousel-image">
                            </div><!-- /.tour-listing-details__carousel-image-box -->
                        </div><!-- /.tour-listing-details__carousel-item item -->

                    </div><!-- /.tour-listing-details__carousel -->
                </div><!-- /.tour-listing-details__slider -->
                <div class="tour-listing-details__explore">
                    <div class="wow animated fadeIn" data-wow-delay="0.1s" data-wow-duration="1500ms">
                        <h3 class="tour-listing-details__title tour-listing-details__explore-title">Tur Paket Haqida:</h3>
                    </div>
                    <p>{!!$tour->content!!}</p>
                </div><!-- /.tour-listing-details__explore -->


                <div class="tour-listing-details__location">
                    <h3 class="tour-listing-details__title tour-listing-details__location-title">Manzil</h3>
                    <div class="google-map google-map__@@extraClassName">
                       {!!$tour->location!!}
                    </div>
                    <!-- /.google-map -->
                </div><!-- /.tour-listing-details__location -->

            </div><!-- /.col-xl-8 -->
            <div class="col-xl-4">
                <aside class="tour-listing-details__sidebar">
                    <div class="tour-listing-details__sidebar-book-tours tour-listing-details__sidebar-single wow animated fadeInUp"
                        data-wow-delay="0.1s" data-wow-duration="1500ms">
                        <h3 class="tour-listing-details__sidebar-title">Bron Qilish</h3>
                        <livewire:contact>
                        <div class="result"></div><!-- /.result -->
                    </div>

                </aside><!-- /.tour-listing-details__sidebar -->
            </div><!-- /.col-xl-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
@endsection
