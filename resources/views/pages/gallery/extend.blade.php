<div class="gallery-page section-space">
    <div class="container">
        <div class="row">
            <h1>Galereya</h1>
            @foreach($galleries as $key => $value)
            <div class="col-xl-4 col-lg-4 col-sm-6 wow animated fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms">
                <div class="gallery-single">
                    <div class="gallery-single__img-box">
                        <img src="{{asset("storage/$value->img")}}" alt="gallery" class="gallery-single__img">
                        <div class="gallery-single__overlay">
                            <a href="{{asset("storage/$value->img")}}" class="gallery-single__btn trevlo-btn trevlo-btn--base-three img-popup"><span class="icon-plus"></span></a>
                        </div><!-- /.gallery-single__overlay -->
                    </div><!-- /.gallery-single__img-box -->
                </div><!-- /.gallery-single -->
            </div><!-- /.col-xl-4 col-lg-4 col-sm-6 -->
            @endforeach
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.gallery-page -->
