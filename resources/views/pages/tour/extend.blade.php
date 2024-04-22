<section class="tour-listing-one tour-listing section-space">
    <div class="container">
        <div class="row">
            <h1>Tur Paketlar</h1>
            @foreach($tours as $key => $t)
            <div class="col-xl-4 col-md-6 wow animated fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms">
                <div class="tour-listing__card">
                    <a href="{{route('tours.show',$t->slug)}}" class="tour-listing__card-image-box">
                        <img src="{{asset("storage/$t->img")}}" alt="{{$t->name}}"
                        class="tour-listing__card-image">
                        <div class="tour-listing__card-image-overlay"></div><!-- /.tour-listing__card-image-overlay -->
                    </a><!-- /.tour-listing__card-image-box -->
                    <a href="" class="tour-listing__card-wishlist"><span class="icon-heart"></span></a>
                    <div class="tour-listing__card-content">
                        <div class="tour-listing__card-camera-group">
                            <a href="" class="tour-listing__card-camera-btn trevlo-image-popup">
                                <span class="icon-photo-camera-1"></span>
                            </a>
                        </div><!-- /.tour-listing__card-camera-group -->
                        <h3 class="tour-listing__card-title"><a href="{{route('tours.show',$t->slug)}}">{{$t->name}}</a>
                        </h3>

                        <div class="tour-listing__card-inner-content">

                            <div class="tour-listing__card-divider"></div><!-- /.tour-listing__card-divider -->
                            <div class="tour-listing__card-bottom">
                                <div class="tour-listing__card-bottom-left">
                                    <div class="tour-listing__card-day">
                                        <span class="icon-clock-1"></span>
                                        <p class="tour-listing__card-day-text text-small">{{$t->days}} Kun</p>
                                    </div><!-- /.tour-listing__card-day -->
                                    <div class="tour-listing__card-people">
                                        <span class="icon-Duration"></span>
                                    </div><!-- /.tour-listing__card-people -->
                                </div><!-- /.tour-listing__card-bottom-left -->
                                <div class="tour-listing__card-bottom-right">
                                    <h4 class="tour-listing__card-price">{{number_format($t->price,0)}} UZS</h4>
                                </div><!-- /.tour-listing__card-bottom-right -->
                            </div><!-- /.tour-listing__card-bottom -->
                        </div><!-- /.tour-listing__card-inner-content -->
                    </div><!-- /.tour-listing__card-content -->
                </div><!-- /.tour-listing__card -->
            </div><!-- /.col-xl-4 col-md-6 -->
            @endforeach
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
