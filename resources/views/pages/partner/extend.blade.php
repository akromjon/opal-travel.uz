<div class="gallery-page section-space">
    <div class="container">
        <h1>Xamkorlarimiz</h1><br>
        <div class="gallery-page__carousel trevlo-owl__carousel trevlo-owl__carousel--basic-nav owl-theme owl-carousel" data-owl-options='{
            "items": 5,
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
                "576":{
                    "items": 2
                },
                "992":{
                    "items": 3
                }
            }
            }'>
            @foreach($partners as $key => $p)
            <div class="gallery-page__carousel-item item">
                <div class="gallery-single">
                    <div class="gallery-single__img-box">
                        <img height="200px" width="150px" src="{{asset("storage/$p->img")}}" alt="gallery" class="gallery-single__img">
                        <div class="gallery-single__overlay">
                            <a href="{{asset("storage/$p->img")}}"
                                class="gallery-single__btn trevlo-btn trevlo-btn--base-three img-popup"><span
                                    class="icon-plus"></span></a>
                        </div><!-- /.gallery-single__overlay -->
                    </div><!-- /.gallery-single__img-box -->
                </div><!-- /.gallery-single -->
            </div><!-- /.gallery-page__carousel-item item -->
            @endforeach
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.gallery-page -->
