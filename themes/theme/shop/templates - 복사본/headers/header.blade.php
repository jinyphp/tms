<!-- mobile menu -->
<div class="mercado-clone-wrap">
    <div class="mercado-panels-actions-wrap">
        <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
    </div>
    <div class="mercado-panels"></div>
</div>

<!--header-->
<header id="header" class="header header-style-1">
    <div class="container-fluid">
        <div class="row">
            @theme('/shop/templates/headers/topbar-menu')

            <div class="container">
                <div class="mid-section main-info-area">

                    <div class="wrap-logo-top left-section">
                        <a href="/shop" class="link-to-home">
                            <img src="{{ asset('assets/shop/templates/images/logo-top-1.png') }}" alt="mercado">
                        </a>
                    </div>

                    <!-- Header Search -->
                    @livewire('LiveSearch')

                    <div class="wrap-icon right-section">
                        @livewire('LiveWishListCount')
                        @livewire('LiveCartListCount')

                        <div class="wrap-icon-section show-up-after-1024">
                            <a href="#" class="mobile-navigation">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            @theme('/shop/templates/headers/header-sticky')
        </div>
    </div>
</header>
