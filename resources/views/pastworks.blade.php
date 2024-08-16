@extends('layouts.app')
@section('title', '首頁')
@section('extra_head')

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
                <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
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
                            <a href="#" class="nav-link">產品/服務</a>
                            <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink3" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink3">
                                @foreach($menuItems as $item)
                                <li><a href="{{ $item['link'] }}">{{ $item['text'] }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <a class="navbar-brand" href="index">
                            <img style="max-height: 43px;padding: 0 20px;margin: 0px 15px;" src="images/onlylogo.png" data-at2x="images/onlylogo.png" alt="" class="">
                        </a>
                        <li class="nav-item dropdown submenu">
                            <a href="pastworks" class="nav-link">專案資歷</a>
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
                        <a href="https://themeforest.net/user/themezaa/portfolio" target="_blank" class="btn btn-dark-gray btn-small btn-switch-text btn-rounded text-transform-none btn-box-shadow purchase-envato">
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
<section class="page-title-center-alignment ipad-top-space-margin background-position-center-bottom cover-background position-relative" style="background-image: url(images/background-wallpaper.jpg); margin-top: inherit;">
    <div class="background-position-left-top h-100 w-100 position-absolute left-0px top-0"></div>
    <div class="background-position-center-bottom background-size-100 background-no-repeat position-absolute bottom-0 left-0px w-100 h-400px z-index-1" style="background-image: url('images/demo-seo-agency-about-bottom-bg.png')"></div>
    <div id="particles-style-01" class="h-100 position-absolute left-0px top-0 w-100" data-particle="true" data-particle-options='{"particles": {"number": {"value": 1,"density": {"enable": true,"value_area": 600}},"shape": {"type": ["image"],"image":{"src":"images/particles-demo-4-bg.png","width":220,"height":134}},"opacity": {"value": 0.5,"random": false,"anim": {"enable": false,"speed": 1,"sync": false}},"size": {"value": 120,"random": true,"anim": {"enable": false,"sync": true}},"line_linked":{"enable":false,"distance":0,"color":"#ffffff","opacity":0.4,"width":1},"move": {"enable": true,"speed":1,"direction": "right","random": false,"straight": false}},"interactivity": {"detect_on": "canvas","events": {"onhover": {"enable": false,"mode": "repulse"},"onclick": {"enable": false,"mode": "push"},"resize": true}},"retina_detect": false}'>
    </div>
    <div class="container">
        <div class="row align-items-center justify-content-center position-relative z-index-1 h-250px">
            <div class="col-12 text-center position-relative page-title-large" data-anime='{ "el": "childs", "opacity": [0, 1], "rotateY": [-90, 0], "rotateZ": [-10, 0], "translateY": [80, 0], "translateZ": [50, 0], "staggervalue": 200, "duration": 900, "easing": "easeOutCirc" }'>
                <h1 class="alt-font d-inline-block fw-700 ls-minus-1px text-dark-gray mb-0">專案資歷</h1>
                <h2 class="mt-5px text-dark-gray mb-0"><span class="opacity-7">科技趨勢，改變未來，讓夢想變成可能
                    </span></h2>
            </div>
        </div>
    </div>
</section>
<!-- end page title -->
<!-- start section -->
<section class="pt-0">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <!-- filter navigation -->
                <ul class="portfolio-filter nav nav-tabs justify-content-center border-0 fw-500 alt-font pb-5">
                    <li class="nav active"><a data-filter="*" href="#">全部</a></li>
                    <li class="nav"><a data-filter=".selected" href="#">餐飲業</a></li>
                    <li class="nav"><a data-filter=".digital" href="#">辦公室</a></li>
                    <li class="nav"><a data-filter=".branding" href="#">電商</a></li>
                    <li class="nav"><a data-filter=".web" href="#">其他</a></li>
                </ul>
                <!-- end filter navigation -->
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 filter-content">
                <ul class="portfolio-boxed portfolio-wrapper grid-loading grid grid-3col grid-3col xxl-grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-large text-center">
                    <li class="grid-sizer"></li>
                    <!-- start portfolio item -->
                    <li class="grid-item selected web transition-inner-all">
                        <div class="portfolio-box border-radius-4px">
                            <div class="portfolio-image border-radius-4px">
                                <img src="{{asset('images/hrhr.png')}}" alt="" />
                                <div class="portfolio-hover d-flex justify-content-center flex-column">
                                    <div class="portfolio-icon d-flex flex-row justify-content-center align-items-center">
                                        <a href="{{asset('/hr')}}" class="d-flex flex-column justify-content-center text-dark-gray text-dark-gray-hover rounded-circle bg-white w-60px h-60px move-bottom-top">
                                            <i class="fa-solid fa-plus icon-small" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="portfolio-overlay bg-dark-gray" style="background-color: #637c8e;">
                                </div>
                            </div>
                            <div class="portfolio-caption pt-30px pb-30px lg-pt-20px lg-pb-20px">
                                <div class="fs-14 lh-20 text-uppercase">掌握⼈⼒分配，精準計算⼈事費⽤</div>                                
                                <a href="{{asset('/hr')}}" class="fs-17 fw-600 text-dark-gray text-dark-gray-hover">⼈資管理系統</a>
                            </div>
                        </div>
                    </li>
                    <!-- end portfolio item -->
                         <!-- start portfolio item -->
                    <li class="grid-item selected web transition-inner-all">
                        <div class="portfolio-box border-radius-4px">
                            <div class="portfolio-image border-radius-4px">
                                <img src="{{asset('images/webpass.png')}}" alt="" />
                                <div class="portfolio-hover d-flex justify-content-center flex-column">
                                    <div class="portfolio-icon d-flex flex-row justify-content-center align-items-center">
                                        <a href="{{asset('/')}}" class="d-flex flex-column justify-content-center text-dark-gray text-dark-gray-hover rounded-circle bg-white w-60px h-60px move-bottom-top">
                                            <i class="fa-solid fa-plus icon-small" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="portfolio-overlay bg-dark-gray" style="background-color: #637c8e;">
                                </div>
                            </div>
                            <div class="portfolio-caption pt-30px pb-30px lg-pt-20px lg-pb-20px">
                                <div class="fs-14 lh-20 text-uppercase">結合SEO 廣告投放，開發潛在客⼾</div>
                                <a href="{{asset('/')}}" class="fs-17 fw-600 text-dark-gray text-dark-gray-hover">專案網站開發</a>
                            </div>
                        </div>
                    </li>
                    <!-- end portfolio item -->
                    <!-- start portfolio item -->
                    <li class="grid-item branding web transition-inner-all">
                        <div class="portfolio-box border-radius-4px">
                            <div class="portfolio-image border-radius-4px">
                                <img src="{{asset('images/chatbot.png')}}" alt="" />
                                <div class="portfolio-hover d-flex justify-content-center flex-column">
                                    <div class="portfolio-icon d-flex flex-row justify-content-center align-items-center">
                                        <a href="{{asset('/chatbot')}}" class="d-flex flex-column justify-content-center text-dark-gray text-dark-gray-hover rounded-circle bg-white w-60px h-60px move-bottom-top">
                                            <i class="fa-solid fa-plus icon-small" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="portfolio-overlay bg-dark-gray" style="background-color: #637c8e;">
                                </div>
                            </div>
                            <div class="portfolio-caption pt-30px pb-30px lg-pt-20px lg-pb-20px">
                                <div class="fs-14 lh-20 text-uppercase">可與多個通訊軟體進⾏串接</div>
                                <a href="{{asset('/chatbot')}}" class="fs-17 fw-600 text-dark-gray text-dark-gray-hover">客服系統</a>
                            </div>
                        </div>
                    </li>
                    <!-- end portfolio item -->
                    <!-- start portfolio item -->
                    <li class="grid-item branding transition-inner-all">
                        <div class="portfolio-box border-radius-4px">
                            <div class="portfolio-image border-radius-4px">
                                <img src="{{asset('images/ecommercepass.png')}}" alt="" />
                                <div class="portfolio-hover d-flex justify-content-center flex-column">
                                    <div class="portfolio-icon d-flex flex-row justify-content-center align-items-center">
                                        <a href="{{asset('/ecommerce')}}" class="d-flex flex-column justify-content-center text-dark-gray text-dark-gray-hover rounded-circle bg-white w-60px h-60px move-bottom-top">
                                            <i class="fa-solid fa-plus icon-small" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="portfolio-overlay bg-dark-gray" style="background-color: #637c8e;">
                                </div>
                            </div>
                            <div class="portfolio-caption pt-30px pb-30px lg-pt-20px lg-pb-20px">
                                <div class="fs-14 lh-20 text-uppercase">把商品銷售到全世界</div>
                                <a href="{{asset('/ecommerce')}}" class="fs-17 fw-600 text-dark-gray text-dark-gray-hover">客製電商平台</a>
                            </div>
                        </div>
                    </li>
                    <!-- end portfolio item -->
                    <!-- start portfolio item -->
                    <li class="grid-item web transition-inner-all">
                        <div class="portfolio-box border-radius-4px">
                            <div class="portfolio-image border-radius-4px">
                                <img src="{{asset('images/education_system.png')}}" alt="" />
                                <div class="portfolio-hover d-flex justify-content-center flex-column">
                                    <div class="portfolio-icon d-flex flex-row justify-content-center align-items-center">
                                        <a href="{{asset('/education')}}" class="d-flex flex-column justify-content-center text-dark-gray text-dark-gray-hover rounded-circle bg-white w-60px h-60px move-bottom-top">
                                            <i class="fa-solid fa-plus icon-small" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="portfolio-overlay bg-dark-gray" style="background-color: #637c8e;">
                                </div>
                            </div>
                            <div class="portfolio-caption pt-30px pb-30px lg-pt-20px lg-pb-20px">
                                <div class="fs-14 lh-20 text-uppercase">有效進⾏師⽣管理，即時與家長保持順暢溝通</div>
                                <a href="{{asset('/education')}}" class="fs-17 fw-600 text-dark-gray text-dark-gray-hover">教育系統</a>
                            </div>
                        </div>
                    </li>
                    <!-- end portfolio item -->
                    <!-- start portfolio item -->
                    <li class="grid-item digital transition-inner-all">
                        <div class="portfolio-box border-radius-4px">
                            <div class="portfolio-image border-radius-4px">
                                <img src="{{asset('images/financepass.png')}}" alt="" />
                                <div class="portfolio-hover d-flex justify-content-center flex-column">
                                    <div class="portfolio-icon d-flex flex-row justify-content-center align-items-center">
                                        <a href="{{asset('/finance')}}" class="d-flex flex-column justify-content-center text-dark-gray text-dark-gray-hover rounded-circle bg-white w-60px h-60px move-bottom-top">
                                            <i class="fa-solid fa-plus icon-small" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="portfolio-overlay bg-dark-gray" style="background-color: #637c8e;">
                                </div>
                            </div>
                            <div class="portfolio-caption pt-30px pb-30px lg-pt-20px lg-pb-20px">
                                <div class="fs-14 lh-20 text-uppercase">有效、合法地整合各部⾨報帳核銷流程</div>
                                <a href="{{asset('/finance')}}" class="fs-17 fw-600 text-dark-gray text-dark-gray-hover">線上財務報銷系統</a>
                            </div>
                        </div>
                    </li>
                    <!-- end portfolio item -->
                    <!-- start portfolio item -->
                    <li class="grid-item branding transition-inner-all">
                        <div class="portfolio-box border-radius-4px">
                            <div class="portfolio-image border-radius-4px">
                                <img src="{{asset('images/shopcompass.png')}}" alt="" />
                                <div class="portfolio-hover d-flex justify-content-center flex-column">
                                    <div class="portfolio-icon d-flex flex-row justify-content-center align-items-center">
                                        <a href="{{asset('/shop')}}" class="d-flex flex-column justify-content-center text-dark-gray text-dark-gray-hover rounded-circle bg-white w-60px h-60px move-bottom-top">
                                            <i class="fa-solid fa-plus icon-small" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="portfolio-overlay bg-dark-gray" style="background-color: #637c8e;">
                                </div>
                            </div>
                            <div class="portfolio-caption pt-30px pb-30px lg-pt-20px lg-pb-20px">
                                <div class="fs-14 lh-20 text-uppercase">增加來客數與主動⾏銷能⼒</div>
                                <a href="{{asset('/shop')}}" class="fs-17 fw-600 text-dark-gray text-dark-gray-hover">美安夥伴商店串接</a>
                            </div>
                        </div>
                    </li>
                    <!-- end portfolio item -->
                    <!-- start portfolio item -->
                    <li class="grid-item digital web transition-inner-all">
                        <div class="portfolio-box border-radius-4px">
                            <div class="portfolio-image border-radius-4px">
                                <img src="{{asset('images/passwork/survey_system.jpg')}}" alt="" />
                                <div class="portfolio-hover d-flex justify-content-center flex-column">
                                    <div class="portfolio-icon d-flex flex-row justify-content-center align-items-center">
                                        <a href="{{asset('/survery')}}" class="d-flex flex-column justify-content-center text-dark-gray text-dark-gray-hover rounded-circle bg-white w-60px h-60px move-bottom-top">
                                            <i class="fa-solid fa-plus icon-small" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="portfolio-overlay bg-dark-gray" style="background-color: #637c8e;">
                                </div>
                            </div>
                            <div class="portfolio-caption pt-30px pb-30px lg-pt-20px lg-pb-20px">
                                <div class="fs-14 lh-20 text-uppercase">掌握大數據</div>
                                <a href="{{asset('/survery')}}" class="fs-17 fw-600 text-dark-gray text-dark-gray-hover">問卷/統計系統</a>
                            </div>
                        </div>
                    </li>
                    <!-- end portfolio item -->
                    <!-- start portfolio item -->
                    <li class="grid-item selected transition-inner-all">
                        <div class="portfolio-box border-radius-4px">
                            <div class="portfolio-image border-radius-4px">
                                <img src="{{asset('images/waitpluseggpass.png')}}" alt="" />
                                <div class="portfolio-hover d-flex justify-content-center flex-column">
                                    <div class="portfolio-icon d-flex flex-row justify-content-center align-items-center">
                                        <a href="{{asset('/waitforegg')}}" class="d-flex flex-column justify-content-center text-dark-gray text-dark-gray-hover rounded-circle bg-white w-60px h-60px move-bottom-top">
                                            <i class="fa-solid fa-plus icon-small" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="portfolio-overlay bg-dark-gray" style="background-color: #637c8e;">
                                </div>
                            </div>
                            <div class="portfolio-caption pt-30px pb-30px lg-pt-20px lg-pb-20px">
                                <div class="fs-14 lh-20 text-uppercase">提升服務效率，增加營業額與利潤</div>
                                <a href="{{asset('/waitforegg')}}" class="fs-17 fw-600 text-dark-gray text-dark-gray-hover">候位排隊系統</a>
                            </div>
                        </div>
                    </li>
                    <!-- end portfolio item -->
                    <!-- start portfolio item -->
                    <li class="grid-item branding web transition-inner-all">
                        <div class="portfolio-box border-radius-4px">
                            <div class="portfolio-image border-radius-4px">
                                <img src="{{asset('images/passwork/customer_registration.jpg')}}" alt="" />
                                <div class="portfolio-hover d-flex justify-content-center flex-column">
                                    <div class="portfolio-icon d-flex flex-row justify-content-center align-items-center">
                                        <a href="{{asset('/customer')}}" class="d-flex flex-column justify-content-center text-dark-gray text-dark-gray-hover rounded-circle bg-white w-60px h-60px move-bottom-top">
                                            <i class="fa-solid fa-plus icon-small" aria-hidden="true"></i>
                                        </a>
                                    </div>                                    
                                </div>
                                <div class="portfolio-overlay bg-dark-gray" style="background-color: #637c8e;">
                                </div>
                            </div>
                            <div class="portfolio-caption pt-30px pb-30px lg-pt-20px lg-pb-20px">
                                <div class="fs-14 lh-20 text-uppercase">管理會員訊息</div>
                                <a href="{{asset('/customer')}}" class="fs-17 fw-600 text-dark-gray text-dark-gray-hover">會員註冊積分管理系統</a>
                            </div>
                        </div>
                    </li>
                    <!-- end portfolio item -->
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
@endsection