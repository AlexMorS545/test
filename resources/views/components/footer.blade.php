<footer class="footer">
    <div class="footer__top">
        <div class="container-aurinko">
            <div class="footer__mobile">
                <div class="footer-sandwich">
                    <div class="footer-sandwich__line footer-sandwich__line--top"></div>
                    <div class="footer-sandwich__line footer-sandwich__line--middle"></div>
                    <div class="footer-sandwich__line footer-sandwich__line--bottom"></div>
                </div>
            </div>
            <div class="footer__top--grid">
                <div class="footer__top-logo">
                    <div class="footer__logo" style="background-image:url(assets/images/common/logo.svg)"></div>
                </div>
                <div class="footer__top-clients">
                    <div class="footer__top-nav">
                    <div class="footer__nav-title">
                        <h4 class="h4">Частным лицам</h4>
                    </div>
                    <nav class="footer__nav-menu">
                        <ul class="footer__nav-list">
                            @foreach($catalog as $item)
                                <li class="footer__nav-item">
                                    <a class="footer__nav-link" href="javascript:void(0)">{{$item->title}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="footer__top-business">
                <div class="footer__top-business">
                    <div class="footer__top-nav">
                        <div class="footer__nav-title">
                            <h4 class="h4">Бизнесу</h4>
                        </div>
                        <nav class="footer__nav-menu">
                            <ul class="footer__nav-list">
                                @foreach($catalog as $item)
                                    <li class="footer__nav-item">
                                        <a class="footer__nav-link" href="javascript:void(0)">{{$item->title}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="footer__top-products">
                <div class="footer__top-products">
                    <div class="footer__top-nav">
                        <div class="footer__nav-title">
                            <h4 class="h4">Продукция</h4>
                        </div>
                        <nav class="footer__nav-menu">
                            <ul class="footer__nav-list">
                                @foreach($catalog as $item)
                                    <li class="footer__nav-item">
                                        <a class="footer__nav-link" href="javascript:void(0)">{{$item->title}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="footer__top-company">
                <div class="footer__top-company">
                    <div class="footer__top-nav">
                        <div class="footer__nav-title">
                            <h4 class="h4">О компании</h4>
                        </div>
                        <nav class="footer__nav-menu">
                            <ul class="footer__nav-list">
                                <li class="footer__nav-item"><a class="footer__nav-link" href="javascript:void(0)">Проекты</a></li>
                                <li class="footer__nav-item"><a class="footer__nav-link" href="javascript:void(0)">О нас</a></li>
                                <li class="footer__nav-item"><a class="footer__nav-link" href="javascript:void(0)">Новости</a></li>
                                <li class="footer__nav-item"><a class="footer__nav-link" href="javascript:void(0)">Статьи</a></li>
                                <li class="footer__nav-item"><a class="footer__nav-link" href="javascript:void(0)">Контакты</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <div class="footer__contacts">
        <div class="container-aurinko">
            <div class="footer__contacts--grid">
            <div class="footer__contacts-social">
                <div class="footer__social"><a class="footer__social-icon" href="javascript:void(0)"><img src="{{asset('assets/images/icons/fb.svg')}}" alt="facebook"></a><a class="footer__social-icon" href="javascript:void(0)"><img src="{{asset('assets/images/icons/instagram.svg')}}" alt="instagram"></a><a class="footer__social-icon" href="javascript:void(0)"><img src="{{asset('assets/images/icons/vk.svg')}}" alt="vk"></a></div>
            </div>
            <div class="footer__contacts-phone">
                <div class="footer__phone"><a href="tel:88007707940">8 800 770-79-40</a></div>
                <div class="footer__callback"><a class="footer__callback--link popup-with-zoom-anim popup__link" href="#callback">Вам перезвонить?</a></div>
            </div>
            <div class="footer__contacts-content">
                <div class="footer__address">
                <div class="footer__contacts-icon"><img src="{{asset('assets/images/icons/location.svg')}}" alt="icon"></div>
                <div class="footer__contacts-address"><small>620016, Россия, Свердловская область, Екатеринбург, ул. Амундсена, д. 107, Инновационный центр &laquo;Екатеринбург&raquo;, оф. 707</small></div>
                </div>
                <div class="footer__email">
                <div class="footer__contacts-icon"><img src="{{asset('assets/images/icons/email.svg')}}" alt="icon"></div>
                <div class="footer__contacts-email"><a href="mailto:info@aurinkos.com">info@aurinkos.com</a></div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <div class="footer__copyright">
    <div class="container-aurinko">
        <div class="footer__copyright-content"><small>Все права защищены &#169; </small><a class="footer__copyright--link popup__link" href="#policy-dialog">Политика конфиденциальности</a></div>
    </div>
    </div>
</footer>
