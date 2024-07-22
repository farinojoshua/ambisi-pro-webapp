<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler">
            <i class="icon-plus-sign"></i>
        </span>
        <div class="logo-box">
            <a href="{{ route('home') }}" aria-label="logo image">
                <img src="{{ asset('assets/images/resources/logo.png') }}" alt="" width="50" height="auto"/>
            </a>
        </div>
        <div class="mobile-nav__container"></div>
        <ul class="mobile-nav__contact list-unstyled">
            <li>
                <i class="fa fa-envelope"></i>
                <a href="mailto:info@example.com">info@example.com</a>
            </li>
            <li>
                <i class="fa fa-phone-alt"></i>
                <a href="tel:123456789">444 000 777 66</a>
            </li>
        </ul>
        <div class="mobile-nav__social">
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-facebook-square"></a>
            <a href="#" class="fab fa-pinterest-p"></a>
            <a href="#" class="fab fa-instagram"></a>
        </div>
    </div>
</div>
