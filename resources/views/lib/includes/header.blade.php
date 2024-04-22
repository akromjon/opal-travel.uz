<header class="main-header sticky-header sticky-header--normal">
    <div class="container">
        <div class="main-header__inner">
            <div class="main-header__left">
                <div class="main-header__logo">
                    <a href="{{route('home')}}">
                        <img src="{{asset('img/logo.png')}}" alt="{{config('app.name')}}" width="146">
                    </a>
                </div><!-- /.main-header__logo -->
                <nav class="main-header__nav main-menu">
                    <ul class="main-menu__list">
                        <li class="megamenu megamenu-clickable">
                            <a href="{{route('home')}}">Bosh Sahifa</a>
                        </li>
                        <li class="megamenu megamenu-clickable">
                            <a href="{{route('tours')}}">Tour Paketlar</a>
                        </li>

                        <li class="megamenu megamenu-clickable">
                            <a href="{{route('gallery')}}">Galereya</a>
                        </li>

                        <li class="megamenu megamenu-clickable">
                            <a href="{{route('contact')}}">Aloqa</a>
                        </li>
                        



                    </ul>
                </nav><!-- /.main-header__nav -->
            </div><!-- /.main-header__left -->

            <div class="main-header__right">
                <div class="mobile-nav__btn mobile-nav__toggler">
                    <span></span>
                    <span></span>
                    <span></span>
                </div><!-- /.mobile-nav__toggler -->
                <div class="main-header__right-right">
                    <div class="main-header__phone">
                        <div class="main-header__phone-icon">
                            <span class="icon-phone-1"></span>
                        </div>
                        <div class="main-header__phone-text">
                            <p class="main-header__phone-title">Aloqa</p>
                            <h4 class="main-header__phone-number"><a href="tel:+998931224746"> +998 93 122 47 46</a>
                            </h4>
                        </div>
                    </div><!-- /.main-header__phone -->


                </div><!-- /.main-header__right-right -->
            </div><!-- /.main-header__right -->
        </div><!-- /.main-header__inner -->
    </div><!-- /.container-fluid -->
</header><!-- /.main-header -->
