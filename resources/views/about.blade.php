﻿@extends('layouts.app')
@section('title', '首頁')
@section('extra_head')
<style>
    .btn-gradient-new-color {
        background: linear-gradient(to right, #A88006, #FFE87F, #A88006);
    }

    .btn-y-t-y {
        background-image: linear-gradient(to right, #A88006, #FFE87F, #A88006);
        background-size: 200% auto;
        color: var(--black);
    }

    .svg-icon {
        fill: #000000;
        /* 初始顏色 */
        transition: fill 0.1s ease;
        width: 80px;
        height: 80px;

    }

    .feature-box:hover .svg-icon {
        fill: #FFDA4C;
        /* 滑鼠懸停時的顏色 */
    }

    .bg-y-w-y {
        background-image: linear-gradient(to right, #A88006, #FFE87F, #A88006);
    }
</style>
@endsection




@section('content')
    <div class="cursor-page-inner">
        <div class="circle-cursor circle-cursor-inner"></div>
        <div class="circle-cursor circle-cursor-outer"></div>
    </div>
    <!-- end cursor -->
    <!-- start header -->
    <header id="headerButton" class="">
        <!-- start navigation -->
        <nav class="navbar navbar-expand-lg header-light header-reverse header-demo" data-header-hover="light">
            <div class="container-fluid">
                <div class="col-auto col-lg-2 me-lg-0 me-auto">

                </div>
                <div class="col-auto col-lg-8 menu-order position-static">
                    <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown simple-dropdown">
                                <a href="index" class="nav-link">首頁</a>
                            </li>

                            <li class="nav-item dropdown submenu">
                                <a href="about" class="nav-link">關於我們</a>
                            </li>
                            <li class="nav-item dropdown simple-dropdown">
                                <a href="productservice" class="nav-link">產品/服務</a>
                                <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink3"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink3">
                                    <li><a href="index">Shop.com夥伴商店串接</a></li>
                                    <li><a href="index">線上購物平台</a></li>
                                    <li><a href="index">人事差勤管理系統</a></li>
                                    <li><a href="index">財務報銷系統</a></li>
                                    <li><a href="index">教育業管理系統</a></li>
                                    <li><a href="index">訂位／候位系統</a></li>
                                    <li><a href="index">客服系統</a></li>
                                    <li><a href="index">文件管理系統</a></li>
                                    <li><a href="index">網頁小遊戲訂製</a></li>
                                    <li><a href="index">會員註冊及積分統計系統</a></li>
                                    <li><a href="index">問卷調查及數據統計系統</a></li>  
                                </ul>
                            </li>
                            <a class="navbar-brand" href="index">
                                <img style="max-height: 43px;padding: 0 20px;margin: 0px 15px;"
                                    src="images/onlylogo.png" data-at2x="images/onlylogo.png" alt="" class="">
                            </a>
                            <li class="nav-item dropdown submenu">
                                <a href="pastworks" class="nav-link">過往作品</a>
                            </li>
                            <li class="nav-item dropdown simple-dropdown">
                                <a href="contact" class="nav-link">聯絡我們</a>
                            </li>
                            <li class="nav-item dropdown simple-dropdown">
                                <a href="faq" class="nav-link">常見問題</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-auto col-lg-2 text-end xs-pe-0">
                    <div class="header-icon">
                        <div class="header-button">
                            <a href="https://themeforest.net/user/themezaa/portfolio" target="_blank"
                                class="btn btn-dark-gray btn-small btn-switch-text btn-rounded text-transform-none btn-box-shadow purchase-envato">
                                <span>
                                    <span class="btn-double-text" data-text="Purchase Crafto">Purchase Crafto</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- end navigation -->
    </header>
    <!-- end header -->

    <!-- start page title -->
    <section class="page-title-center-alignment ipad-top-space-margin background-position-center-bottom cover-background position-relative" style="background-image: url(images/yellow1920540.jpg); margin-top: inherit;">
        <div class="background-position-left-top h-100 w-100 position-absolute left-0px top-0"></div>
        <div class="background-position-center-bottom background-size-100 background-no-repeat position-absolute bottom-0 left-0px w-100 h-400px z-index-1"
            style="background-image: url('images/demo-seo-agency-about-bottom-bg.png')"></div>
        <div id="particles-style-01" class="h-100 position-absolute left-0px top-0 w-100" data-particle="true"
            data-particle-options='{"particles": {"number": {"value": 1,"density": {"enable": true,"value_area": 600}},"shape": {"type": ["image"],"image":{"src":"images/particles-demo-4-bg.png","width":220,"height":134}},"opacity": {"value": 0.5,"random": false,"anim": {"enable": false,"speed": 1,"sync": false}},"size": {"value": 120,"random": true,"anim": {"enable": false,"sync": true}},"line_linked":{"enable":false,"distance":0,"color":"#ffffff","opacity":0.4,"width":1},"move": {"enable": true,"speed":1,"direction": "right","random": false,"straight": false}},"interactivity": {"detect_on": "canvas","events": {"onhover": {"enable": false,"mode": "repulse"},"onclick": {"enable": false,"mode": "push"},"resize": true}},"retina_detect": false}'>
        </div>
        <div class="container">
            <div class="row align-items-center justify-content-center position-relative z-index-1 h-250px">
                <div class="col-12 text-center position-relative page-title-large"
                    data-anime='{ "el": "childs", "opacity": [0, 1], "rotateY": [-90, 0], "rotateZ": [-10, 0], "translateY": [80, 0], "translateZ": [50, 0], "staggervalue": 200, "duration": 900, "easing": "easeOutCirc" }'>
                    <h1 class="alt-font d-inline-block fw-700 ls-minus-1px text-dark-gray mb-0">About us</h1>
                    <h2 class="mt-5px text-dark-gray mb-0"><span class="opacity-7">We improve your online
                            presence</span></h2>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title -->
    <!-- start section -->
    <section class="background-position-center-top pb-0">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 md-mb-50px animation-float text-center"
                    data-anime='{ "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <img src="https://via.placeholder.com/536x583" alt="">
                </div>
                <div class="col-xl-5 offset-xl-1 col-lg-6 text-center text-lg-start"
                    data-anime='{ "el": "childs", "willchange": "transform", "opacity": [0, 1], "rotateY": [-90, 0], "rotateZ": [-10, 0], "translateY": [80, 0], "translateZ": [50, 0], "staggervalue": 200, "duration": 600, "delay": 100, "easing": "easeOutCirc" }'>
                    <span
                        class="ps-20px pe-20px mb-30px md-mb-20px text-uppercase text-dark-gray fs-13 lh-40 md-lh-50 ls-1px alt-font fw-700 border-radius-4px bg-y-w-y d-inline-block">Seo
                        analysis rate</span>
                    <h2 class="alt-font text-dark-gray fw-600 ls-minus-1px">Get the targeted relevant traffic.</h2>
                    <p class="w-85 lg-w-95 sm-w-100 mb-40px sm-mb-20px">Well-optimized sites get more and more traffic
                        over time, and that means more leads and sales. Without SEO, searchers won’t be able to find
                        your site, and all your hard work. We appreciate your trust greatly.</p>
                    <img src="https://via.placeholder.com/202x28" alt="" class="me-25px xs-m-10px">
                    <img src="https://via.placeholder.com/198x30" alt="" class="xs-m-10px">
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <section class="position-relative background-position-center-top half-section overflow-hidden">        
        <div id="particles-style-02" class="h-100 position-absolute left-0px top-0 z-index-minus-1 w-100"
            data-particle="true"
            data-particle-options='{"particles": {"number": {"value":3,"density": {"enable": true,"value_area": 2000}},"shape": {"type": ["image"],"image":{"src":"images/demo-seo-agency-particles-img.png","width":220,"height":134}},"opacity": {"value": 0.5,"random": false,"anim": {"enable": false,"speed": 1,"sync": false}},"size": {"value": 120,"random": true,"anim": {"enable": false,"sync": true}},"line_linked":{"enable":false,"distance":0,"color":"#ffffff","opacity":0.4,"width":1},"move": {"enable": true,"speed":1,"direction": "right","random": false,"straight": false}},"interactivity": {"detect_on": "canvas","events": {"onhover": {"enable": false,"mode": "repulse"},"onclick": {"enable": false,"mode": "push"},"resize": true}},"retina_detect": false}'>
        </div>
        <div class="container bg-white border-radius-6px box-shadow-quadruple-large skrollr-zoom"
            data-bottom-top="transform:scale(1, 1) translateX(30px);"
            data-top-bottom="transform:scale(1,1) translateX(-30px);">
            <div class="row row-cols-2 row-cols-md-4 p-4 md-p-25px justify-content-center text-center">
                <!-- start content box item -->
                <div class="col last-paragraph-no-margin sm-mb-25px">
                    <h2 class="alt-font fw-700 text-dark-gray m-0">8M+</h2>
                    <p>Trusted user</p>
                </div>
                <!-- end content box item -->
                <!-- start content box item -->
                <div class="col last-paragraph-no-margin sm-mb-25px">
                    <h2 class="alt-font fw-700 text-dark-gray m-0">64K</h2>
                    <p>Telephonic talk</p>
                </div>
                <!-- end content box item -->
                <!-- start content box item -->
                <div class="col last-paragraph-no-margin">
                    <h2 class="alt-font fw-700 text-dark-gray m-0">9M+</h2>
                    <p>Project finished</p>
                </div>
                <!-- end content box item -->
                <!-- start content box item -->
                <div class="col last-paragraph-no-margin">
                    <h2 class="alt-font fw-700 text-dark-gray m-0">225</h2>
                    <p>Award winning</p>
                </div>
                <!-- end content box item -->
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="background-position-center-top pt-0 md-pt-50px">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <div class="row justify-content-around"
                        data-anime='{ "el": "childs", "translateY": [30, 0], "translateX": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <!-- start features box item -->
                        <div class="col-lg-5 col-md-6 icon-with-text-style-01 mb-6 sm-mb-30px">
                            <div class="feature-box feature-box-left-icon last-paragraph-no-margin">
                                <div class="feature-box-icon">
                                    <h3 class="alt-font fw-700 text-dark-gray m-0">2010</h3>
                                </div>
                                <div class="feature-box-content">
                                    <span
                                        class="d-inline-block alt-font text-dark-gray fw-600 mb-10px lh-28 fs-20">Business
                                        founded</span>
                                    <p class="w-95 sm-w-100">Lorem ipsum dolor elit consectetur eiusmod tempor
                                        incididunt labor.</p>
                                </div>
                            </div>
                        </div>
                        <!-- end features box item -->
                        <!-- start features box item -->
                        <div class="col-lg-5 col-md-6 icon-with-text-style-01 mb-6 sm-mb-30px">
                            <div class="feature-box feature-box-left-icon last-paragraph-no-margin">
                                <div class="feature-box-icon">
                                    <h3 class="alt-font fw-700 text-dark-gray m-0">2012</h3>
                                </div>
                                <div class="feature-box-content">
                                    <span
                                        class="d-inline-block alt-font text-dark-gray fw-600 mb-10px lh-28 fs-20">Build
                                        new office</span>
                                    <p class="w-95 sm-w-100">Lorem ipsum dolor elit consectetur eiusmod tempor
                                        incididunt labor.</p>
                                </div>
                            </div>
                        </div>
                        <!-- end features box item -->
                        <!-- start features box item -->
                        <div class="col-lg-5 col-md-6 icon-with-text-style-01 sm-mb-30px">
                            <div class="feature-box feature-box-left-icon last-paragraph-no-margin">
                                <div class="feature-box-icon">
                                    <h3 class="alt-font fw-700 text-dark-gray m-0">2014</h3>
                                </div>
                                <div class="feature-box-content">
                                    <span
                                        class="d-inline-block alt-font text-dark-gray fw-600 mb-10px lh-28 fs-20">Relocates
                                        headquarter</span>
                                    <p class="w-95 sm-w-100">Lorem ipsum dolor elit consectetur eiusmod tempor
                                        incididunt labor.</p>
                                </div>
                            </div>
                        </div>
                        <!-- end features box item -->
                        <!-- start features box item -->
                        <div class="col-lg-5 col-md-6 icon-with-text-style-01">
                            <div class="feature-box feature-box-left-icon last-paragraph-no-margin">
                                <div class="feature-box-icon">
                                    <h3 class="alt-font fw-700 text-dark-gray m-0">2018</h3>
                                </div>
                                <div class="feature-box-content">
                                    <span
                                        class="d-inline-block alt-font text-dark-gray fw-600 mb-10px lh-28 fs-20">Revenue
                                        of 50 millions</span>
                                    <p class="w-95 sm-w-100">Lorem ipsum dolor elit consectetur eiusmod tempor
                                        incididunt labor.</p>
                                </div>
                            </div>
                        </div>
                        <!-- end features box item -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <!-- <section class="background-position-center-top cover-background" style="background-image: url('images/background-wallpaper.jpg')"> -->
        <section class="background-position-center-top cover-background">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6 text-center md-mb-50px"
                    data-anime='{ "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <img src="https://via.placeholder.com/455x466" alt="">
                </div>
                <div class="col-lg-5 offset-lg-1 text-center text-lg-start"
                    data-anime='{ "el": "childs", "willchange": "transform", "opacity": [0, 1], "rotateY": [-90, 0], "rotateZ": [-10, 0], "translateY": [80, 0], "translateZ": [50, 0], "staggervalue": 200, "duration": 600, "delay": 100, "easing": "easeOutCirc" }'>
                    <span
                        class="ps-20px pe-20px mb-30px md-mb-20px text-uppercase text-dark-gray fs-13 lh-40 md-lh-50 ls-1px alt-font fw-700 border-radius-4px bg-y-w-y d-inline-block">
                        OPTIMIZE YOUR WEBSITE</span>
                    <h2 class="alt-font text-dark-gray fw-600 ls-minus-1px w-90 lg-w-100">How do you get top ranks in
                        seo?</h2>
                    <p class="mb-20px w-80 lg-w-100">We are committed to deliver unique digital media solutions from web
                        development to eCommerce solutions for our happy clients by using our knowledge and expertise.
                    </p>
                    <a href="demo-seo-agency-process.html"
                        class="btn btn-link btn-hover-animation-switch btn-large text-dark-gray fw-700">
                        <span>
                            <span class="btn-text">learn more</span>
                            <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                            <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="bg-gradient-top-very-light-gray position-relative overflow-hidden">
        <div class="background-position-center-top h-100 w-100 position-absolute left-0px top-0"></div>
        <div class="background-position-center-bottom background-size-100 background-no-repeat position-absolute bottom-0 left-0px w-100 h-400px z-index-1"
            style="background-image: url('images/demo-seo-agency-analysis-bg.png')"></div>
        <div class="container position-relative">
            <div class="row justify-content-center mb-6">
                <div class="col-lg-8 text-center"
                    data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <h2 class="text-dark-gray fw-600 alt-font mb-0 ls-minus-1px">Committed people</h2>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2 justify-content-center mb-8 xs-mb-50px"
                data-anime='{ "el": "childs", "perspective": [1200,1200], "scale": [1.05, 1], "rotateY": [30, 0], "translateX": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <!-- start team member item -->
                <div class="col text-center team-style-05 md-mb-40px">
                    <div class="position-relative mb-30px last-paragraph-no-margin border-radius-6px overflow-hidden">
                        <img src="https://via.placeholder.com/600x756" alt="" />
                        <div
                            class="w-100 h-100 d-flex flex-column justify-content-center align-items-center p-40px team-content bg-dark-gray-transparent">
                            <div class="social-icon fs-20">
                                <a href="https://www.facebook.com/" target="_blank" class="text-white"><i
                                        class="fa-brands fa-facebook-f"></i></a>
                                <a href="https://www.instagram.com/" target="_blank" class="text-white"><i
                                        class="fa-brands fa-instagram"></i></a>
                                <a href="https://www.twitter.com/" target="_blank" class="text-white"><i
                                        class="fa-brands fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="alt-font fw-600 text-dark-gray lh-24 fs-19">Jeremy dupont</div>
                    <span>Director</span>
                </div>
                <!-- end team member item -->
                <!-- start team member item -->
                <div class="col text-center team-style-05 md-mb-40px">
                    <div class="position-relative mb-30px last-paragraph-no-margin border-radius-6px overflow-hidden">
                        <img src="https://via.placeholder.com/600x756" alt="" />
                        <div
                            class="w-100 h-100 d-flex flex-column justify-content-center align-items-center p-40px team-content bg-dark-gray-transparent">
                            <div class="social-icon fs-20">
                                <a href="https://www.facebook.com/" target="_blank" class="text-white"><i
                                        class="fa-brands fa-facebook-f"></i></a>
                                <a href="https://www.instagram.com/" target="_blank" class="text-white"><i
                                        class="fa-brands fa-instagram"></i></a>
                                <a href="https://www.twitter.com/" target="_blank" class="text-white"><i
                                        class="fa-brands fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="alt-font fw-600 text-dark-gray lh-24 fs-19">Jessica dover</div>
                    <span>Founder</span>
                </div>
                <!-- end team member item -->
                <!-- start team member item -->
                <div class="col text-center team-style-05 xs-mb-40px">
                    <div class="position-relative mb-30px last-paragraph-no-margin border-radius-6px overflow-hidden">
                        <img src="https://via.placeholder.com/600x756" alt="" />
                        <div
                            class="w-100 h-100 d-flex flex-column justify-content-center align-items-center p-40px team-content bg-dark-gray-transparent">
                            <div class="social-icon fs-20">
                                <a href="https://www.facebook.com/" target="_blank" class="text-white"><i
                                        class="fa-brands fa-facebook-f"></i></a>
                                <a href="https://www.instagram.com/" target="_blank" class="text-white"><i
                                        class="fa-brands fa-instagram"></i></a>
                                <a href="https://www.twitter.com/" target="_blank" class="text-white"><i
                                        class="fa-brands fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="alt-font fw-600 text-dark-gray lh-24 fs-19">Matthew taylor</div>
                    <span>Designer</span>
                </div>
                <!-- end team member item -->
                <!-- start team member item -->
                <div class="col text-center team-style-05">
                    <div class="position-relative mb-30px last-paragraph-no-margin border-radius-6px overflow-hidden">
                        <img src="https://via.placeholder.com/600x756" alt="" />
                        <div
                            class="w-100 h-100 d-flex flex-column justify-content-center align-items-center p-40px team-content bg-dark-gray-transparent">
                            <div class="social-icon fs-20">
                                <a href="https://www.facebook.com/" target="_blank" class="text-white"><i
                                        class="fa-brands fa-facebook-f"></i></a>
                                <a href="https://www.instagram.com/" target="_blank" class="text-white"><i
                                        class="fa-brands fa-instagram"></i></a>
                                <a href="https://www.twitter.com/" target="_blank" class="text-white"><i
                                        class="fa-brands fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="alt-font fw-600 text-dark-gray lh-24 fs-19">Johncy parker</div>
                    <span>Writer</span>
                </div>
                <!-- end team member item -->
            </div>
            <div class="row position-relative clients-style-08 mb-15 lg-mb-11">
                <div class="col swiper text-center feather-shadow"
                    data-slider-options='{ "slidesPerView": 2, "spaceBetween":0, "speed": 4000, "loop": true, "pagination": { "el": ".slider-four-slide-pagination-2", "clickable": false }, "allowTouchMove": false, "autoplay": { "delay":0, "disableOnInteraction": false }, "navigation": { "nextEl": ".slider-four-slide-next-2", "prevEl": ".slider-four-slide-prev-2" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 4 }, "992": { "slidesPerView": 3 }, "768": { "slidesPerView": 2 } }, "effect": "slide" }'>
                    <div class="swiper-wrapper marquee-slide">
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="images/logo-netflix.svg" class="h-40px xs-h-30px" alt="" /></a>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="images/logo-pingdom.svg" class="h-40px xs-h-30px" alt="" /></a>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="images/logo-paypal.svg" class="h-40px xs-h-30px" alt="" /></a>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="images/logo-walmart.svg" class="h-40px xs-h-30px" alt="" /></a>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="images/logo-amazon.svg" class="h-40px xs-h-30px" alt="" /></a>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="images/logo-logitech.svg" class="h-40px xs-h-30px" alt="" /></a>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="images/logo-netflix.svg" class="h-40px xs-h-30px" alt="" /></a>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="images/logo-pingdom.svg" class="h-40px xs-h-30px" alt="" /></a>
                        </div>
                        <!-- end client item -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endsection
