<header>
    <div class="mobile-header">
        <div class="mobile-logo">
            <a href="/">
                VİVENSE 22
            </a>
        </div>
        <div class="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </div>
    <div class="header-top">
        <div class="header-top-container">
            <div class="header-top-left">
                <a href="#">İÇ MİMARLIK HİZMETLERİ</a>
                <a href="#">SHOWROOMLAR</a>
                <a href="#">MOBİLYA VE DEKORASYON HİZMETLERİ</a>
            </div>
            <div class="header-top-right">
                <a href="#">KAMPANYALAR</a>
                <a href="#">EN YENİLER</a>
                <a href="#">DESTEK MERKEZİ</a>
            </div>
        </div>
    </div>
    <div class="header-wrapper">
        <div class="header-center">
            <div class="header-container">
                <div class="header-center-left">
                    <div class="input">
                        <input type="text" placeholder="Arama">
                        @include('partials.svg.search-svg')
                    </div>
                </div>
                <div class="header-center-logo">
                    <a href="/">
                        @include('partials.svg.logo-svg')
                    </a>
                </div>
                <div class="header-center-right">
                    <ul class="header-center-list">
                        <li>
                            <a href="#">
                                <img src="https://static.personaclick.com/assets/bell.svg" alt="zil">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Giriş Yap
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Favorilerim
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Sepetim
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="header-container">
                <ul class="header-bottom-list">
                    <li>
                        <a href="#">
                            <img src="https://cdn.vivense.com/images/icon/vvns-collection-menu-icon.svg"
                                alt="collection">
                            Vivense Collection
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="https://cdn.vivense.com/images/icon/vvns-luna-menu-icon.svg" alt="luna">
                            Luna Beeding
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="https://img.vivense.com/images/15a215179d6e4a06932559e45edd00eb.svg"
                                alt="vivenseIcon">
                            EN İYİ FİYAT
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            OTURMA ODASI
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            YATAK ODASI
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            YEMEK ODASI + MUTFAK
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            BAHÇE
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            DOLAP + ANTRE
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            ÇALIŞMA ODASI
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            ÇOCUK + GENÇ
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            DEKORASYON
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    @include('partials.banner')
</header>
