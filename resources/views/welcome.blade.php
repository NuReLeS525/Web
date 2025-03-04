<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
        <link rel="stylesheet" href="{{ asset('css/satoshi.css') }}">

        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
        />

        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    </head>
    <body class="antialiased">
        <div class="wrapper">
            <div class="header__background">
                <header class="header">
                    <div class="container">
                        <div class="header__nav">
                            <ul class="header__nav-list">
                                <li class="header__nav-item"><a class="header__nav-link" href="#">Home</a></li>
                                <li class="header__nav-item"><a class="header__nav-link" href="#">Catalog</a></li>
                                <li class="header__nav-item"><a class="header__nav-link" href="#">Contact</a></li>
                                <li class="header__nav-item"><a class="header__nav-link" href="#">Features</a></li>
                            </ul>
                            <div class="header__logo">
                                <img src="img/logo.png" alt="logo">
                            </div>
                            <div class="header__search">
                                <div class="header__search-inner">
                                    <input class="header__search-input" type="text" placeholder="Search games & products..">
                                    <img class="header__search-icon" src="img/Search.png" alt="search">
                                </div>
                                <img class="header__search--adaptive" src="img/Search.png" alt="search">
                                <img class="header__bag-icon" src="img/bag.png" alt="bag">
                            </div>
                        </div>
                        <a class="burger-icon" href="#">
                            <span></span>
                        </a>
                    </div>
                </header>
                <section class="hero">
                    <div class="container">
                        <div class="hero__inner">
                            <div class="hero__info">
                                <div class="hero__info-subtitle">Virtual Headsets</div>
                                <div class="hero__info-title title">Experience a new dimension of reality</div>
                                <div class="hero__info-description">
                                    <img class="hero__description-icon" src="img/star.svg">
                                    <p class="hero__description-text">Step into the future with our virtual headset, come to life right
                                        before
                                        your eyes</p>
                                </div>
                                <div class="hero__info-buttons">
                                    <div class="hero__info-visit-button neon-button button">
                                        <a class="hero__button-link button-link" href="#">Visit Store</a>
                                    </div>
                                    <div class="hero__info-button button">
                                        <a class="hero__button-link button-link" href="#">Explore</a>
                                    </div>
                                </div>
                                <div class="hero__info-logos">
                                    <h5 class="hero__logos-title">FOLLOW US</h5>
                                    <ul class="hero__logos-list">
                                        <li class="hero__logos-item">
                                            <a class="hero__logos-link" href="#">
                                                <img src="img/twitter.svg" alt="">
                                            </a>
                                        </li>
                                        <li class="hero__logos-item">
                                            <a class="hero__logos-link" href="#">
                                                <img src="img/instagram.svg" alt="">
                                            </a>
                                        </li>
                                        <li class="hero__logos-item">
                                            <a class="hero__logos-link" href="#">
                                                <img src="img/facebook.svg" alt="">
                                            </a>
                                        </li>
                                        <li class="hero__logos-item">
                                            <a class="hero__logos-link" href="#">
                                                <img src="img/discord.svg" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="hero__image">
                                <div class="hero__image--mini">
                                    <img src="img/hero__image--mini.png" alt="">
                                </div>
                                <img src="img/hero__image.png" alt="">
                                <div class="hero__signs">
                                    <div class="hero__sign">
                                        <img class="hero__sign-img" src="img/education.svg" alt="">
                                        <p class="hero__sign-text">Enhanced Education</p>
                                    </div>
                                    <div class="hero__sign">
                                        <img class="hero__sign-img" src="img/training.svg" alt="">
                                        <p class="hero__sign-text">Training and Simulation</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <main class="main">
                <section class="vr">
                    <div class="container">
                        <div class="vr__inner">
                            <div class="vr__image">
                                <img src="img/vr-mini.png" alt="">
                            </div>
                            <div class="vr__info">
                                <div class="vr__info-title title">Our Virtual Headsets <br>
                                    Shine with Unique <br>
                                    Features!</div>
                                <ul class="vr__info-list">
                                    <li class="vr__info-description">
                                        <img class="vr__description-icon" src="img/Star_blue.svg" alt="">
                                        <p class="vr__description-text text">High-resolution OLED or LCD screens: Provide sharp and clear visuals.</p>
                                    </li>
                                    <li class="vr__info-description vr__info-description--adaptive">
                                        <img class="vr__description-icon" src="img/Star_blue.svg" alt="">
                                        <p class="vr__description-text text">Refresh rate: Higher refresh rates reduce motion sickness and provide.</p>
                                    </li>
                                    <li class="vr__info-description">
                                        <img class="vr__description-icon" src="img/Star_blue.svg" alt="">
                                        <p class="vr__description-text text">Inside-out tracking: Built-in sensors (cameras or other sensors).
                                        </p>
                                    </li>
                                    <li class="vr__info-description vr__info-description--adaptive">
                                        <img class="vr__description-icon" src="img/Star_blue.svg" alt="">
                                        <p class="vr__description-text text">Eye tracking: Monitors the movement of the user's eyes, allowing for more.</p>
                                    </li>
                                    <li class="vr__info-description">
                                        <img class="vr__description-icon" src="img/Star_blue.svg" alt="">
                                        <p class="vr__description-text text">High-resolution OLED or LCD screens: Provide sharp and clear visuals.</p>
                                    </li>
                                    <li class="vr__info-description vr__info-description--adaptive">
                                        <img class="vr__description-icon" src="img/Star_blue.svg" alt="">
                                        <p class="vr__description-text text">Refresh rate: Higher refresh rates reduce motion sickness and provide.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="creator">
                    <div class="container">
                        <div class="creator__inner">
                            <div class="creator__info">
                                <div class="creator__info-title title">Jane Wilson, <br>
                                    Gaming Creator</div>
                                <p class="creator__info-text text">A virtual headset creator is an individual or company that specializes in designing and manufacturing virtual reality headsets, also known as VR headsets.</p>
                                <div class="creator__button button">
                                    <a class="creator__button-link button-link" href="">Read my blog</a>
                                </div>
                                <div class="creator__info-views">
                                    <img class="creator__views-icons" src="img/viewers.png" alt="">
                                    <p class="creator__views-text">+258K Views</p>
                                </div>
                            </div>
                            <div class="creator__image">
                                <img src="img/creator.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="creator__image--mini">
                        <img src="img/creator-image--mini.png" alt="">
                    </div>
                </section>
                <section class="games">
                    <div class="container">
                        <div class="games__inner">
                            <div class="games__top">
                                <div class="games__title title">Top Games</div>
                                <p class="games__text text">If you buy video 2 games, you will receive 1 <br>video game for free, along with a <span>50%</span> discount.</p>
                                <div class="games__arrows">
                                    <button class="games__arrow arrow-left button"></button>
                                    <button class="games__arrow arrow-right button"></button>
                                </div>
                            </div>
                            <div class="games__slider swiper">
                                <ul class="slider__list swiper-wrapper">
                                    <li class="slider__item swiper-slide">
                                        <div class="slider__thumbnail">
                                            <img src="img/game1.png" alt="">
                                        </div>
                                        <div class="slider__title">Horizon : Call of the mountain</div>
                                    </li>
                                    <li class="slider__item swiper-slide">
                                        <div class="slider__thumbnail">
                                            <img src="img/game2.png" alt="">
                                        </div>
                                        <div class="slider__title">Half - Life : ALYX</div>
                                    </li>
                                    <li class="slider__item swiper-slide">
                                        <div class="slider__thumbnail">
                                            <img src="img/game3.png" alt="">
                                        </div>
                                        <div class="slider__title">Fight Night Champion</div>
                                    </li>
                                    <li class="slider__item swiper-slide">
                                        <div class="slider__thumbnail">
                                            <img src="img/game4.png" alt="">
                                        </div>
                                        <div class="slider__title">Call of Duty : Coold War</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
                <script type="module">
                    import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs'

                    const swiper = new Swiper('.swiper', {
                        slidesPerView: 3,
                        spaceBetween: 15,
                        loop: true,
                        speed: 800,
                        navigation: {
                            nextEl: '.arrow-right',
                            prevEl: '.arrow-left',
                        },
                        breakpoints: {
                            600: {
                                slidesPerView: 1,
                                spaceBetween: 15,
                            },
                            700: {
                                slidesPerView: 2,
                                spaceBetween: 15,
                            },
                            1000: {
                                slidesPerView: 3,
                                spaceBetween: 15,
                            }
                        },
                    });
                </script>
                <section class="faq">
                    <div class="container">
                        <div class="faq__inner">
                            <div class="faq__title title">F.A.Q.</div>
                            <div class="faq__accrodeon-wrapper">
                                <ul class="accordeon__list">
                                    <li class="accordeon__item accordeon__item--opened">
                                        <div class="accordeon__top">
                                            <div class="accordeon__title">What are the different types of virtual headsets available?</div>
                                            <div class="accordeon__arrow"></div>
                                        </div>
                                        <div class="accordeon__bottom">
                                            <p class="accordeon__text text">Virtual headsets are equipped with various sensors to track the user's movements. These sensors can include accelerometers, gyroscopes, and sometimes external cameras or base stations. They constantly monitor the position and orientation of the headset and sometimes the user's hand controllers.

                                                The headset has one or two high-resolution displays, one for each eye, positioned in front of the user's eyes. These displays show stereoscopic 3D images, creating a sense of depth and immersion. Between the displays and the user's eyes, help focus the images and adjust them for the user's field of view.</p>
                                        </div>
                                    </li>
                                    <li class="accordeon__item">
                                        <div class="accordeon__top">
                                            <div class="accordeon__title">What are the different types of virtual headsets available?</div>
                                            <div class="accordeon__arrow"></div>
                                        </div>
                                        <div class="accordeon__bottom">
                                            <p class="accordeon__text text">Virtual headsets are equipped with various sensors to track the user's movements. These sensors can include accelerometers, gyroscopes, and sometimes external cameras or base stations. They constantly monitor the position and orientation of the headset and sometimes the user's hand controllers.

                                                The headset has one or two high-resolution displays, one for each eye, positioned in front of the user's eyes. These displays show stereoscopic 3D images, creating a sense of depth and immersion. Between the displays and the user's eyes, help focus the images and adjust them for the user's field of view.</p>
                                        </div>
                                    </li>
                                    <li class="accordeon__item">
                                        <div class="accordeon__top">
                                            <div class="accordeon__title">What are the different types of virtual headsets available?</div>
                                            <div class="accordeon__arrow"></div>
                                        </div>
                                        <div class="accordeon__bottom">
                                            <p class="accordeon__text text">Virtual headsets are equipped with various sensors to track the user's movements. These sensors can include accelerometers, gyroscopes, and sometimes external cameras or base stations. They constantly monitor the position and orientation of the headset and sometimes the user's hand controllers.

                                                The headset has one or two high-resolution displays, one for each eye, positioned in front of the user's eyes. These displays show stereoscopic 3D images, creating a sense of depth and immersion. Between the displays and the user's eyes, help focus the images and adjust them for the user's field of view.</p>
                                        </div>
                                    </li>
                                    <li class="accordeon__item">
                                        <div class="accordeon__top">
                                            <div class="accordeon__title">What are the different types of virtual headsets available?</div>
                                            <div class="accordeon__arrow"></div>
                                        </div>
                                        <div class="accordeon__bottom">
                                            <p class="accordeon__text text">Virtual headsets are equipped with various sensors to track the user's movements. These sensors can include accelerometers, gyroscopes, and sometimes external cameras or base stations. They constantly monitor the position and orientation of the headset and sometimes the user's hand controllers.

                                                The headset has one or two high-resolution displays, one for each eye, positioned in front of the user's eyes. These displays show stereoscopic 3D images, creating a sense of depth and immersion. Between the displays and the user's eyes, help focus the images and adjust them for the user's field of view.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
            <footer class="footer">
                <div class="container">
                    <div class="footer__inner">
                        <div class="footer__top">
                            <div class="footer__contacts">
                                <div class="footer__logo">
                                    <img src="img/logo.png" alt="">
                                </div>
                                <ul class="footer__socials">
                                    <li class="social">
                                        <img src="img/twitter.svg" alt="">
                                    </li>
                                    <li class="social">
                                        <img src="img/instagram.svg" alt="">
                                    </li>
                                    <li class="social">
                                        <img src="img/discord.svg" alt="">
                                    </li>
                                    <li class="social">
                                        <img src="img/facebook.svg" alt="">
                                    </li>
                                </ul>
                                <a class="footer__phone">(+994) 199-28-786</a>
                            </div>
                            <div class="footer__navs">
                                <nav class="footer__nav">
                                    <div class="footer__nav-title">Menu</div>
                                    <ul class="footer__nav-list">
                                        <li class="footer__nav-item">Home</li>
                                        <li class="footer__nav-item">Catalog</li>
                                        <li class="footer__nav-item">Features</li>
                                        <li class="footer__nav-item">Contact</li>
                                    </ul>
                                </nav>
                                <nav class="footer__nav">
                                    <div class="footer__nav-title">Company</div>
                                    <ul class="footer__nav-list">
                                        <li class="footer__nav-item">Login</li>
                                        <li class="footer__nav-item">Sign Up</li>
                                        <li class="footer__nav-item">Privacy</li>
                                        <li class="footer__nav-item">Products</li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="footer__form">
                                <div class="footer__form-title">Subscribe Our News Letter</div>
                                <div class="footer__form-text">Sure, please provide your email address to subscribe to newsletter</div>
                                <div class="footer__form-buttons">
                                    <input class="footer__input" type="email" placeholder="Enter your mail...">
                                    <div class="footer__button button"><a class="button-link">Subscribe</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="footer__bottom">
                            <div class="footer__bottom-gradiend"></div>
                            <p>© 2023 Your Company Name. All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </body>
    <script src="{{asset('js/main.js')}}"></script>
</html>
