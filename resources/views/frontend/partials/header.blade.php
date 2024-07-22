<header class="main-header main-header-style1">
    <nav class="main-menu main-menu-style1">
        <div class="clearfix main-menu__wrapper">
            <div class="container">
                <div class="main-menu__wrapper-inner">
                    <div class="logo-box-style1">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('assets/images/resources/logo.png') }}" alt="Awesome Logo" title="" width="80" height="auto"/>
                        </a>
                    </div>

                    <div class="phone-number-box-style1">
                        <h5>Phone:</h5>
                        <a href="tel:123456789">+444 000 777 66</a>
                    </div>

                    @include('frontend.partials.navbar')

                    <div class="main-menu-style1-right">
                        <div class="sign-in-box-style1">
                            <span class="icon-user"></span>
                            <a href="{{ route('login') }}">Sign In</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
<div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content"></div>
</div>


