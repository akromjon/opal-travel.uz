<!DOCTYPE html>
<html lang="uz">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="{{asset('img/favicon.png')}}">
    @yield('head')
    @include('lib.includes.head')
</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <div class="preloader">
        <div class="preloader__image" style="background-image: url({{asset('assets/images/loader.png')}});"></div>
    </div>
    <!-- /.preloader -->
    <div class="page-wrapper">
        <div class="topbar-one">
            <div class="topbar-one__container container-fluid">
                <div class="topbar-one__inner">
                    <div class="topbar-one__left">
                        <ul class="topbar-one__info">
                            <li class="topbar-one__info-item">
                                <span class="topbar-one__info-icon icon-location-1"></span>
                                <span class="topbar-one__info-text">Toshkent shahri, Yakkasaroy, Abdulla Qahhor 9-tor 1A:  CITY LINE bizness markazi, 1-etaj
                                </span>
                            </li>
                            <li class="topbar-one__info-item">
                                <span class="topbar-one__info-icon icon-envelope"></span>
                                <a href="mailto:info@opal-travel.uz"
                                    class="topbar-one__info-text">info@opal-travel.uz</a>
                            </li>
                        </ul><!-- /.topbar-one__info -->
                        <ul class="topbar-one__info topbar-one__info--right">
                            <li class="topbar-one__info-item">
                                <span class="topbar-one__info-icon icon-clock-1"></span>
                                <span class="topbar-one__info-text">Dushanban Shanbagacha: 8.00 am - 7.00 pm</span>
                            </li>
                        </ul><!-- /.topbar-one__info -->
                    </div><!-- /.topbar-one__left -->
                    <div class="topbar-one__right">
                        <ul class="topbar-one__social">
                            <li class="topbar-one__social-item">
                                <a href="https://facebook.com" class="topbar-one__social-link"><i
                                        class="fab fa-facebook-f"></i></a>
                            </li>
                            <li class="topbar-one__social-item">
                                <a href="https://twitter.com" class="topbar-one__social-link"><i
                                        class="fab fa-twitter"></i></a>
                            </li>
                            <li class="topbar-one__social-item">
                                <a href="https://pinterest.com" class="topbar-one__social-link"><i
                                        class="fab fa-pinterest-p"></i></a>
                            </li>
                            <li class="topbar-one__social-item">
                                <a href="https://instagram.com" class="topbar-one__social-link"><i
                                        class="fab fa-instagram"></i></a>
                            </li>
                        </ul><!-- /.topbar-one__social -->
                    </div><!-- /.topbar-one__right -->
                </div><!-- /.topbar-one__inner -->
            </div><!-- /.ctopbar-one__container -->
        </div><!-- /.topbar-one -->


        @include('lib.includes.header')
        @yield('content')

        @include('lib.includes.footer')

    </div><!-- /.page-wrapper -->


    <!-- /.mobile-nav__wrapper -->
    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form role="search" method="get" class="search-popup__form" action="#">
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="search-popup__btn trevlo-btn trevlo-btn--base">
                    <span class="icon-search"></span>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>


    @include('lib.includes.script')

</body>

</html>
