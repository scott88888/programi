@extends('layouts.app')
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

    .container2 {
        font-family: Arial, sans-serif;
        text-align: center;
        padding: 20px;

    }

    .small-text {
        font-size: 20px;
        color: #666;
        margin-bottom: 10px;
    }

    .large-text {
        font-size: 36px;
        color: #000;
        margin: -15px;
        font-weight: 600;
    }

    .underline {
        width: 200px;
        height: 3px;
        background-color: #ffa500;
        margin: 10px auto;
    }
</style>
@endsection




@section('content')
<!-- start cursor -->
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
                        <li class="nav-item">
                            <a href="index" class="nav-link">首頁</a>
                        </li>

                        <li class="nav-item">
                            <a href="about" class="nav-link">關於我們</a>
                        </li>
                        <li class="nav-item dropdown simple-dropdown">
                            <a href="productservice" class="nav-link">產品/服務</a>
                            <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink3" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
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
                            <img style="max-height: 43px;padding: 0 20px;margin: 0px 15px;" src="images/onlylogo.png" data-at2x="images/onlylogo.png" alt="" class="">
                        </a>
                        <li class="nav-item ">
                            <a href="pastworks" class="nav-link">過往作品</a>
                        </li>
                        <li class="nav-item">
                            <a href="contact" class="nav-link">聯絡我們</a>
                        </li>
                        <li class="nav-item ">
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
<!-- start banner slider -->
<section class="cover-background position-relative ipad-top-space-margin" style="background-image: url('images/background-wallpaper.jpg')">
    <div class="background-position-left-top h-100 w-100 position-absolute left-0px top-0"></div>
    <div class="background-position-center-bottom background-size-100 background-no-repeat position-absolute bottom-0 left-0px w-100 h-480px lg-h-170px z-index-1" style="background-image: url('images/demo-seo-agency-bottom-bg.png')"></div>
    <div id="particles-style-01" class="h-100 position-absolute left-0px top-0 w-100" data-particle="true" data-particle-options='{"particles": {"number": {"value": 1.1,"density": {"enable": true,"value_area": 900}},"shape": {"type": ["image"],"image":{"src":"images/particles-demo-4-bg.png","width":180,"height":100}},"opacity": {"value": 0.5,"random": false,"anim": {"enable": false,"speed": 1,"sync": false}},"size": {"value": 120,"random": true,"anim": {"enable": false,"sync": true}},"line_linked":{"enable":false,"distance":0,"color":"#ffffff","opacity":0.4,"width":1},"move": {"enable": true,"speed":1,"direction": "right","random": false,"straight": false}},"interactivity": {"detect_on": "canvas","events": {"onhover": {"enable": false,"mode": "repulse"},"onclick": {"enable": false,"mode": "push"},"resize": true}},"retina_detect": false}'>
    </div>
    <div class="container position-relative pb-2">
        <div class="row align-items-center text-center text-md-start justify-content-sm-center">
            <div class="col-md-6 col-sm-9 position-relative z-index-1 text-dark-gray md-mb-35px">
                <div class="alt-font fs-50 md-fs-40 fw-300 lh-85 ls-minus-2px mb-15px fancy-text-style-4" data-anime='{ "el": "childs", "opacity": [0, 1], "rotateY": [-90, 0], "rotateZ": [-10, 0], "translateY": [80, 0], "translateZ": [50, 0], "staggervalue": 200, "duration": 900, "easing": "easeOutCirc" }'>
                    <span class="d-inline-block">為客戶提供</span>
                    <span class="fw-700 fs-50 md-fs-40 ls-minus-1px d-inline-block" data-fancy-text='{ "effect": "rubber-band", "string": ["創新 Innovative", "全面 Comprehensive", "優質 Quality ","安全 Secure ","獨特 Unique "] }'></span>
                </div>
                <div data-anime='{ "opacity": [0, 1], "rotateY": [-90, 0], "rotateZ": [-10, 0], "translateY": [80, 0], "translateZ": [50, 0], "duration": 900, "delay": 500, "easing": "easeOutCirc" }'>
                    <span class="alt-font fs-20 fw-500 w-70 lg-w-85 sm-w-100 mb-40px md-mb-30px d-block opacity-7">的解決方案，無論是企業或是私人需求都可以量身訂製各類系統開發
                    </span>
                </div>
                <a href="index" class="btn btn-extra-large btn-rounded with-rounded btn-gradient-new-color btn-box-shadow box-shadow-extra-large" data-anime='{ "opacity": [0, 1], "rotateY": [-90, 0], "rotateZ": [-10, 0], "translateY": [80, 0], "translateZ": [50, 0], "duration": 900, "delay": 800, "easing": "easeOutCirc" }'>
                    聯&nbsp&nbsp繫&nbsp&nbsp我&nbsp&nbsp們
                    <span class="bg-white text-base-color"><i class="fa-solid fa-arrow-right"></i></span></a>
            </div>
            <div class="col-md-6 text-center" data-anime='{ "opacity": [0, 1], "translateY": [150, 0], "duration": 2000, "easing": "easeOutBack" }'>
                <img src="images/rocket2.png" alt="" class="animation-float">
            </div>
        </div>
        <div class="position-absolute bottom-minus-90px md-bottom-minus-70px sm-bottom-minus-50px right-30px sm-right-10px z-index-9" data-anime='{ "opacity": [0, 1], "scale": [0, 1], "translateZ": [50, 0], "staggervalue": 200, "duration": 900, "delay": 800, "easing": "easeOutCirc" }'>
            <img style="width:237px;" src="images/firstside.png" alt="" class="md-w-180px xs-w-150px">
        </div>
    </div>
</section>
<!-- end banner slider -->
<!-- start section -->
<section class="background-position-center-top pb-0 pt-4 sm-pt-40px">
    <div class="container">
        <div class="row justify-content-center mb-4">
            <div class="col-xl-7 col-lg-8 col-md-10 text-center" data-anime='{ "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <!-- <h2 class="fw-600 text-dark-gray alt-font ls-minus-1px">Social marketing services</h2> -->
                <div class="container2">
                    <p class="small-text">為什麼選擇普洛加民</p>
                    <h1 class="large-text">讓重要的事情變容易</h1>
                    <div class="underline"></div>
                </div>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-xl-4 row-cols-lg-3 row-cols-sm-2 justify-content-center" data-anime='{ "el": "childs", "rotateZ": [5, 0], "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
            <!-- start features box item -->
            <div class="col icon-with-text-style-03 lg-mb-50px xs-mb-40px">
                <div class="feature-box ps-7 pe-7 sm-ps-4 sm-pe-4">
                    <div class="feature-box-icon mb-30px sm-mb-20px">
                            <img src="images/dialogue.png" style="width: 80px;height: 80px;" alt="">                    
                    </div>
                    <div class="feature-box-content last-paragraph-no-margin">
                        <span class="d-inline-block alt-font fw-700 text-dark-gray mb-5px fs-20">咨詢與規劃</span>
                        <p>制定一系列的開發策略與方案</p>
                    </div>
                </div>
            </div>
            <!-- end features box item -->
            <!-- start features box item -->
            <div class="col icon-with-text-style-03 lg-mb-50px xs-mb-40px">
                <div class="feature-box ps-7 pe-7 sm-ps-4 sm-pe-4">
                    <div class="feature-box-icon mb-30px sm-mb-20px">
                    <img src="images/experience.png" style="width: 80px;height: 80px;" alt="">     
                    </div>
                    <div class="feature-box-content last-paragraph-no-margin">
                        <span class="d-inline-block alt-font fw-700 text-dark-gray mb-5px fs-20">經驗的累積</span>
                        <p>15年以上經驗將不可能化為可能</p>
                    </div>
                </div>
            </div>
            <!-- end features box item -->
            <!-- start features box item -->
            <div class="col icon-with-text-style-03 xs-mb-40px">
                <div class="feature-box ps-7 pe-7 sm-ps-4 sm-pe-4">
                    <div class="feature-box-icon mb-30px sm-mb-20px">
                    <img src="images/machine-learning.png" style="width: 80px;height: 80px;" alt="">     
                    </div>
                    <div class="feature-box-content last-paragraph-no-margin">
                        <span class="d-inline-block alt-font fw-700 text-dark-gray mb-5px fs-20">構建與交付</span>
                        <p>系統架構，調整及應用</p>
                    </div>
                </div>
            </div>
            <!-- end features box item -->
            <!-- start features box item -->
            <div class="col icon-with-text-style-03">
                <div class="feature-box ps-7 pe-7 sm-ps-4 sm-pe-4">
                    <div class="feature-box-icon mb-30px sm-mb-20px">
                    <img src="images/webbuilding.png" style="width: 80px;height: 80px;" alt="">     
                    </div>
                    <div class="feature-box-content last-paragraph-no-margin">
                        <span class="d-inline-block alt-font fw-700 text-dark-gray mb-5px fs-20">培訓與進修</span>
                        <p>保持跟市場的資訊同步</p>
                    </div>
                </div>
            </div>
            <!-- end features box item -->
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="position-relative background-position-center-top half-section xs-ps-15px xs-pe-15px overflow-hidden">
    <div id="particles-style-02" class="h-100 position-absolute left-0px top-0 z-index-minus-1 w-100" data-particle="true" data-particle-options='{"particles": {"number": {"value":8,"density": {"enable": true,"value_area": 4000}},"shape": {"type": ["image"],"image":{"src":"images/demo-seo-agency-particles-img.png","width":220,"height":134}},"opacity": {"value": 0.5,"random": false,"anim": {"enable": false,"speed": 1,"sync": false}},"size": {"value": 120,"random": true,"anim": {"enable": false,"sync": true}},"line_linked":{"enable":false,"distance":0,"color":"#ffffff","opacity":0.4,"width":1},"move": {"enable": true,"speed":1,"direction": "right","random": false,"straight": false}},"interactivity": {"detect_on": "canvas","events": {"onhover": {"enable": false,"mode": "repulse"},"onclick": {"enable": false,"mode": "push"},"resize": true}},"retina_detect": false}'>
    </div>
    <div class="container bg-white border-radius-6px box-shadow-double-large" data-bottom-top="transform:scale(1, 1) translateX(20px);" data-top-bottom="transform:scale(1, 1) translateX(-20px);">
        <div class="row row-cols-1 row-cols-lg-3 row-cols-sm-2 align-items-center pt-50px pb-50px ps-30px pe-30px justify-content-center">
            <!-- start content box item -->
            <div class="col md-mb-40px alt-font text-dark-gray fw-600">
                <div class="d-flex flex-column flex-md-row justify-content-center align-items-center g-0 text-center text-md-start">
                    <div class="flex-shrink-0 me-15px sm-me-0">
                        <h2 class="mb-0">95<sup class="fs-30">%</sup></h2>
                    </div>
                    <div>
                        <span class="fs-18 lh-26 d-block">顧客需求達成率<br /></span>
                    </div>
                </div>
            </div>
            <!-- end content box item -->
            <!-- start content box item -->
            <div class="col md-mb-40px alt-font text-dark-gray fw-600">
                <div class="d-flex flex-column flex-md-row justify-content-center align-items-center g-0 text-center text-md-start">
                    <div class="flex-shrink-0 me-15px sm-me-0">
                        <h2 class="mb-0">4.98</h2>
                    </div>
                    <div>
                        <div class="review-star-icon fs-20 lh-34 " style="background-image: linear-gradient(to right, #A88006, #FFE87F, #A88006, #FFE87F, #A88006);-webkit-background-clip: text;-webkit-text-fill-color: transparent;
                        ">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <span class="d-block fs-18 lh-20">顧客滿意度</span>
                    </div>
                </div>
            </div>
            <!-- end content box item -->
            <!-- start content box item -->
            <div class="col alt-font text-dark-gray fw-600">
                <div class="d-flex flex-column flex-md-row justify-content-center align-items-center g-0 text-center text-md-start">
                    <div class="flex-shrink-0 me-15px sm-me-0">
                        <h2 class="mb-0">90<sup class="fs-30">%</sup></h2>
                    </div>
                    <div>
                        <span class="fs-18 lh-26 d-block">顧客進階需求持續配合<br /></span>
                    </div>
                </div>
            </div>
            <!-- end content box item -->
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="bg-very-light-gray overflow-hidden">
    <div class="container">
        <div class="row justify-content-center mb-4">
            <div class="col-lg-7 text-center" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <span class="fs-20" style="color: #d0b23b;">我們的業務</span>
                <h3 class="alt-font fw-500 text-dark-gray ls-minus-1px">以客戶的目標為本
                    <span class="fw-700 text-decoration-line-bottom-medium"></span>
                </h3>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-xl-4 row-cols-lg-3 row-cols-md-2 justify-content-center" data-anime='{ "el": "childs", "rotateZ": [5, 0], "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
            <!-- start rotate box item -->
            <div class="col rotate-box-style-02 mb-30px">
                <div class="w-100 min-h-300px text-center rotate-box to-left">
                    <!-- start front side -->
                    <div class="w-100 h-100 overflow-hidden z-index-1 front-side bg-white border-radius-6px box-shadow-quadruple-large">
                        <div class="rotate-content-front z-index-2 p-30px">
                            <img class="mb-25px h-70px" src="images/code.png" alt="">
                            <div class="fs-19 text-dark-gray alt-font fw-600 mb-5px">系統開發</div>
                            <span>APP，WEB系統軟體開發</span>


                        </div>
                    </div>
                    <!-- end front side -->
                    <!-- start back side -->
                    <div class="w-100 h-100 overflow-hidden back-side cover-background border-radius-6px box-shadow-quadruple-large">
                        <!-- style="background-image:url('https://via.placeholder.com/600x520')"> -->
                        <div class="opacity-light bg-charcoal-blue"></div>
                        <div class="d-flex flex-column align-items-center justify-content-center h-100 z-index-2 rotate-content-back p-30px">
                            <span class="text-white alt-font fw-500 fs-19 mb-5px">系統開發</span>
                            <p>為各大企業定制應用程式，以用家友善的原則使使用者更能容易掌握上手</p>
                            <a href="#" class="btn btn-small btn-rounded btn-white btn-box-shadow">了解更多</a>
                        </div>
                        <!-- end back side -->
                    </div>
                </div>
            </div>
            <!-- end rotate box item -->
            <!-- start rotate box item -->
            <div class="col rotate-box-style-02 mb-30px">
                <div class="w-100 min-h-300px text-center rotate-box to-left">
                    <!-- start front side -->
                    <div class="w-100 h-100 overflow-hidden z-index-1 front-side bg-white border-radius-6px box-shadow-quadruple-large">
                        <div class="rotate-content-front z-index-2 p-30px">
                            <img class="mb-25px h-70px" src="images/shopcom.png" alt="">
                            <div class="fs-19 text-dark-gray alt-font fw-600 mb-5px">shop.com夥伴商店串接</div>
                            <span>為商城網站串接美安系統</span>
                        </div>


                    </div>
                    <!-- end front side -->
                    <!-- start back side -->
                    <div class="w-100 h-100 overflow-hidden back-side cover-background border-radius-6px box-shadow-quadruple-large">
                        <div class="opacity-light bg-charcoal-blue"></div>
                        <div class="d-flex flex-column align-items-center justify-content-center h-100 z-index-2 rotate-content-back p-30px">
                            <span class="text-white alt-font fw-500 fs-19 mb-5px">shop.com夥伴商店串接</span>
                            <p>協助商城增加一個穩定強大的客源</p>
                            <a href="#" class="btn btn-small btn-rounded btn-white btn-box-shadow">了解更多</a>
                        </div>
                        <!-- end back side -->
                    </div>
                </div>
            </div>
            <!-- end rotate box item -->
            <!-- start rotate box item -->
            <div class="col rotate-box-style-02 mb-30px">
                <div class="w-100 min-h-300px text-center rotate-box to-left">
                    <!-- start front side -->
                    <div class="w-100 h-100 overflow-hidden z-index-1 front-side bg-white border-radius-6px box-shadow-quadruple-large">
                        <div class="rotate-content-front z-index-2 p-30px">
                            <img class="mb-25px h-70px" src="images/ecommerce.png" alt="">
                            <div class="fs-19 text-dark-gray alt-font fw-600 mb-5px">線上購物平台</div>
                            <span>為營銷者轉化線上購物體驗</span>
                        </div>
                    </div>
                    <!-- end front side -->
                    <!-- start back side -->
                    <div class="w-100 h-100 overflow-hidden back-side cover-background border-radius-6px box-shadow-quadruple-large">
                        <div class="opacity-light bg-charcoal-blue"></div>
                        <div class="d-flex flex-column align-items-center justify-content-center h-100 z-index-2 rotate-content-back p-30px">
                            <span class="text-white alt-font fw-500 fs-19 mb-5px">線上購物平台</span>
                            <p>把商品面向世界，接受來自不同地區的訂單需求</p>
                            <a href="#" class="btn btn-small btn-rounded btn-white btn-box-shadow">了解更多</a>
                        </div>
                        <!-- end back side -->
                    </div>
                </div>
            </div>
            <!-- end rotate box item -->
            <!-- start rotate box item -->
            <div class="col rotate-box-style-02 lg-mb-30px">
                <div class="w-100 min-h-300px text-center rotate-box to-left">
                    <!-- start front side -->
                    <div class="w-100 h-100 overflow-hidden z-index-1 front-side bg-white border-radius-6px box-shadow-quadruple-large">
                        <div class="rotate-content-front z-index-2 p-30px">
                            <img class="mb-25px h-70px" src="images/finance.png" alt="">
                            <div class="fs-19 text-dark-gray alt-font fw-600 mb-5px">財務報銷系統</div>
                            <span>與會計師合作打造財務報銷系統</span>
                        </div>
                    </div>
                    <!-- end front side -->
                    <!-- start back side -->
                    <div class="w-100 h-100 overflow-hidden back-side cover-background border-radius-6px box-shadow-quadruple-large">
                        <div class="opacity-light bg-charcoal-blue"></div>
                        <div class="d-flex flex-column align-items-center justify-content-center h-100 z-index-2 rotate-content-back p-30px">
                            <span class="text-white alt-font fw-500 fs-19 mb-5px">財務報銷系統</span>
                            <p>專業的知識更能注入應用程式使企業減少成本增加利潤</p>
                            <a href="#" class="btn btn-small btn-rounded btn-white btn-box-shadow">了解更多</a>
                        </div>
                        <!-- end back side -->
                    </div>
                </div>
            </div>
            <!-- end rotate box item -->
            <!-- start rotate box item -->
            <div class="col rotate-box-style-02 lg-mb-30px">
                <div class="w-100 min-h-300px text-center rotate-box to-left">
                    <!-- start front side -->
                    <div class="w-100 h-100 overflow-hidden z-index-1 front-side bg-white border-radius-6px box-shadow-quadruple-large">
                        <div class="rotate-content-front z-index-2 p-30px">
                            <img class="mb-25px h-70px" src="images/ux-design.png" alt="">
                            <div class="fs-19 text-dark-gray alt-font fw-600 mb-5px">數位化體驗</div>
                            <span>與我們專業的 UX/UI 和開發團隊建構數位化產品體驗</span>
                        </div>
                    </div>
                    <!-- end front side -->
                    <!-- start back side -->
                    <div class="w-100 h-100 overflow-hidden back-side cover-background border-radius-6px box-shadow-quadruple-large">
                        <div class="opacity-light bg-charcoal-blue"></div>
                        <div class="d-flex flex-column align-items-center justify-content-center h-100 z-index-2 rotate-content-back p-30px">
                            <span class="text-white alt-font fw-500 fs-19 mb-5px">數位化體驗</span>
                            <p>用高性能的網站和應用程式參與用戶旅程每一步</p>
                            <a href="#" class="btn btn-small btn-rounded btn-white btn-box-shadow">了解更多</a>
                        </div>
                        <!-- end back side -->
                    </div>
                </div>
            </div>
            <!-- end rotate box item -->
            <!-- start rotate box item -->
            <div class="col rotate-box-style-02 lg-mb-30px">
                <div class="w-100 min-h-300px text-center rotate-box to-left">
                    <!-- start front side -->
                    <div class="w-100 h-100 overflow-hidden z-index-1 front-side bg-white border-radius-6px box-shadow-quadruple-large">
                        <div class="rotate-content-front z-index-2 p-30px">
                            <img class="mb-25px h-70px" src="images/booking-waiting.png" alt="">
                            <div class="fs-19 text-dark-gray alt-font fw-600 mb-5px">訂位 / 候位系統</div>
                            <span>為餐廳業者打造客人的訂位候位系統</span>
                        </div>
                    </div>
                    <!-- end front side -->
                    <!-- start back side -->
                    <div class="w-100 h-100 overflow-hidden back-side cover-background border-radius-6px box-shadow-quadruple-large">
                        <div class="opacity-light bg-charcoal-blue"></div>
                        <div class="d-flex flex-column align-items-center justify-content-center h-100 z-index-2 rotate-content-back p-30px">
                            <span class="text-white alt-font fw-500 fs-19 mb-5px">訂位 / 候位系統</span>
                            <p>為等候用餐者從一開始擁有更良好的</p>
                            <a href="#" class="btn btn-small btn-rounded btn-white btn-box-shadow">了解更多</a>
                        </div>
                        <!-- end back side -->
                    </div>
                </div>
            </div>
            <!-- end rotate box item -->
            <!-- start rotate box item -->
            <div class="col rotate-box-style-02 sm-mb-30px">
                <div class="w-100 min-h-300px text-center rotate-box to-left">
                    <!-- start front side -->
                    <div class="w-100 h-100 overflow-hidden z-index-1 front-side bg-white border-radius-6px box-shadow-quadruple-large">
                        <div class="rotate-content-front z-index-2 p-30px">
                            <img class="mb-25px h-70px" src="images/customer-service.png" alt="">
                            <div class="fs-19 text-dark-gray alt-font fw-600 mb-5px">客服系統</div>
                            <span>為高用戶需求的客服特別訂製的客服系統</span>
                        </div>
                    </div>
                    <!-- end front side -->
                    <!-- start back side -->
                    <div class="w-100 h-100 overflow-hidden back-side cover-background border-radius-6px box-shadow-quadruple-large">
                        <div class="opacity-light bg-charcoal-blue"></div>
                        <div class="d-flex flex-column align-items-center justify-content-center h-100 z-index-2 rotate-content-back p-30px">
                            <span class="text-white alt-font fw-500 fs-19 mb-5px">客服系統</span>
                            <p>為應付高並發的客服需求量身打造，不遺漏每一位來訪的客人</p>
                            <a href="#" class="btn btn-small btn-rounded btn-white btn-box-shadow">了解更多</a>
                        </div>
                        <!-- end back side -->
                    </div>
                </div>
            </div>
            <!-- end rotate box item -->
            <!-- start rotate box item -->
            <div class="col rotate-box-style-02">
                <div class="w-100 min-h-300px text-center rotate-box to-left">
                    <!-- start front side -->
                    <div class="w-100 h-100 overflow-hidden z-index-1 front-side bg-white border-radius-6px box-shadow-quadruple-large">
                        <div class="rotate-content-front z-index-2 p-30px">
                            <img class="mb-25px h-70px" src="images/demo-lawyer-practice-areas-icon-08black.svg" alt="">
                            <div class="fs-19 text-dark-gray alt-font fw-600 mb-5px">文件管理系統</div>
                            <span>為遠端或跨地區工作者設立的文件管理方式</span>
                        </div>
                    </div>
                    <!-- end front side -->
                    <!-- start back side -->
                    <div class="w-100 h-100 overflow-hidden back-side cover-background border-radius-6px box-shadow-quadruple-large">
                        <div class="opacity-light bg-charcoal-blue"></div>
                        <div class="d-flex flex-column align-items-center justify-content-center h-100 z-index-2 rotate-content-back p-30px">
                            <span class="text-white alt-font fw-500 fs-19 mb-5px">文件管理系統</span>
                            <p>使企業員工更能有效管理關鍵文件，避免文件遺失</p>
                            <a href="#" class="btn btn-small btn-rounded btn-white btn-box-shadow">了解更多</a>
                        </div>
                        <!-- end back side -->
                    </div>
                </div>
            </div>
            <!-- end rotate box item -->
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="overflow-hidden">
    <div class="container-fluid">
        <div class="row position-relative">
            <div class="col swiper swiper-width-auto text-center overflow-visible" data-slider-options='{ "slidesPerView": "auto", "spaceBetween":50, "centeredSlides": true, "speed": 50000, "loop": true, "pagination": { "el": ".slider-four-slide-pagination-2", "clickable": false }, "allowTouchMove": false, "autoplay": { "delay":1, "disableOnInteraction": false }, "navigation": { "nextEl": ".slider-four-slide-next-2", "prevEl": ".slider-four-slide-prev-2" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "effect": "slide" }'>
                <div class="swiper-wrapper marquee-slide">
                    <!-- start slider item -->
                    <div class="swiper-slide">
                        <div class="fs-250 lg-fs-200 md-fs-150 ls-minus-8px md-ls-minus-4px text-light-blue alt-font fw-700">
                            / Quality / Secure / Unique / Innovative / Comprehensive</div>
                    </div>
                    <!-- end slider item -->
                    <!-- start slider item -->
                    <div class="swiper-slide">
                        <div class="fs-250 lg-fs-200 md-fs-150 ls-minus-8px md-ls-minus-4px text-light-blue alt-font fw-700">
                        / Quality / Secure / Unique / Innovative / Comprehensive</div>
                    </div>
                    <!-- end slider item -->
                    <!-- start slider item -->
                    <div class="swiper-slide">
                        <div class="fs-250 lg-fs-200 md-fs-150 ls-minus-8px md-ls-minus-4px text-light-blue alt-font fw-700">
                        / Quality / Secure / Unique / Innovative / Comprehensive</div>
                    </div>
                    <!-- end slider item -->
                </div>
            </div>
            <div class="position-absolute z-index-1 top-minus-40px left-0px text-center d-md-block d-none">
                <img src="images/habds.png" style="max-width: 35%;" class="md-w-50" data-bottom-top="transform: translateY(50px) translateX(220px)" data-top-bottom="transform:translateY(-50px) translateX(220px)" alt="" />
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<section class="background-position-center-top pt-4 md-pt-6 sm-pt-40px">
    <div class="container">
        <div class="row mb-8 md-mb-10">
            <div class="col-12 tab-style-04">
                <!-- start tab navigation -->
                <ul class="nav nav-tabs border-0 justify-content-center fw-500 fs-19 mb-4 md-mb-6 sm-mb-5px alt-font">
                    <li class="nav-item"><a data-bs-toggle="tab" href="#tab_five1" class="nav-link active">用心傾聽
                            <span class="tab-border bg-dark-gray"></span></a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab_five2">全面計劃
                            <span class="tab-border bg-dark-gray"></span></a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab_five3">盡心打造
                            <span class="tab-border bg-dark-gray"></span></a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab_five4">產品交付
                            <span class="tab-border bg-dark-gray"></span></a></li>
                </ul>
                <!-- end tab navigation -->
                <div class="tab-content">
                    <!-- start tab content -->
                    <div class="tab-pane fade in active show" id="tab_five1">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-lg-7 col-md-6 sm-mb-30px" data-anime='{ "opacity": [0, 1], "staggervalue": 200, "duration": 600, "delay": 0, "easing": "easeOutCirc" }'>
                                <img src="images/deliver.jpg" alt="" />
                            </div>
                            <div class="col-lg-5 col-md-6 ps-8 lg-ps-3 sm-ps-15px text-center text-md-start" data-anime='{ "el": "childs", "willchange": "transform", "opacity": [0, 1], "rotateY": [-90, 0], "rotateZ": [-10, 0], "translateY": [80, 0], "translateZ": [50, 0], "staggervalue": 200, "duration": 600, "delay": 100, "easing": "easeOutCirc" }'>
                                <span class="ps-20px pe-20px mb-30px md-mb-20px text-uppercase text-dark-gray fs-20 lh-40 md-lh-50 ls-1px alt-font fw-700 border-radius-4px bg-y-w-y d-inline-block">用心傾聽</span>
                                <h2 class="alt-font text-dark-gray fw-600 ls-minus-1px">仔細了解您的需求
                                </h2>
                                <p class="w-80 xl-w-90 md-w-100">確保我們理解一致，最終產品合乎您的需求，免除後期改動影響客戶時程，務求使顧客滿意與我們的合作體驗</p>
                                <a href="about"  class="btn btn-link btn-hover-animation-switch btn-large text-dark-gray fw-700">
                                    <span>
                                        <span class="btn-text">了解更多</span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- end tab content -->
                    <!-- start tab content -->
                    <div class="tab-pane fade in" id="tab_five2">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-lg-7 col-md-6 sm-mb-30px">
                                <img src="images/planning.jpg" alt="" />
                            </div>
                            <div class="col-lg-5 col-md-6 ps-8 lg-ps-3 sm-ps-15px text-center text-md-start">
                                <span class="ps-20px pe-20px mb-30px md-mb-20px text-uppercase text-dark-gray fs-20 lh-40 md-lh-50 ls-1px alt-font fw-700 border-radius-4px bg-y-w-y d-inline-block">全面計劃</span>
                                <h2 class="alt-font text-dark-gray fw-600 ls-minus-1px">部署周全的時間表</h2>
                                <p class="w-80 xl-w-90 md-w-100">我們的高級工程師安排時程，務求在制定的時間完成產品，並保留時間予客人測試</p>
                                <a href="about"  class="btn btn-link btn-hover-animation-switch btn-large text-dark-gray fw-700">
                                    <span>
                                        <span class="btn-text">了解更多</span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- end tab content -->
                    <!-- start tab content -->
                    <div class="tab-pane fade in" id="tab_five3">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-lg-7 col-md-6 sm-mb-30px">
                            <img src="images/programming.jpg" alt="" />
                            </div>
                            <div class="col-lg-5 col-md-6 ps-8 lg-ps-3 sm-ps-15px text-center text-md-start">
                                <span class="ps-20px pe-20px mb-30px md-mb-20px text-uppercase text-dark-gray fs-20 lh-40 md-lh-50 ls-1px alt-font fw-700 border-radius-4px bg-y-w-y d-inline-block">盡心打造</span>
                                <h2 class="alt-font text-dark-gray fw-600 ls-minus-1px">15年經驗全數付出
                                </h2>
                                <p class="w-80 xl-w-90 md-w-100">以最有效的方式，與我們的設計團隊一同架構製作，以專業的態度使產品以最完美的方式展現</p>
                                <a href="about"  class="btn btn-link btn-hover-animation-switch btn-large text-dark-gray fw-700">
                                    <span>
                                        <span class="btn-text">了解更多</span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- end tab content -->
                    <!-- start tab content -->
                    <div class="tab-pane fade in" id="tab_five4">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-lg-7 col-md-6 sm-mb-30px">
                            <img src="images/listening.jpg" alt="" />
                            </div>
                            <div class="col-lg-5 col-md-6 ps-8 lg-ps-3 sm-ps-15px text-center text-md-start">
                                <span class="ps-20px pe-20px mb-30px md-mb-20px text-uppercase text-dark-gray fs-20 lh-40 md-lh-50 ls-1px alt-font fw-700 border-radius-4px bg-y-w-y d-inline-block">產品交付</span>
                                <h2 class="alt-font text-dark-gray fw-600 ls-minus-1px">與您一同分享喜悅
                                </h2>
                                <p class="w-80 xl-w-90 md-w-100">無論是使用家節省了時間，還是增加了您的利潤，我們深信製作的產品都會使工作變得更順利，由心感恩我們參與了其中</p>
                                <a href="about"  class="btn btn-link btn-hover-animation-switch btn-large text-dark-gray fw-700">
                                    <span>
                                        <span class="btn-text">了解更多</span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- end tab content -->
                </div>
            </div>
        </div>


    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="bg-white big-section" style="background-image: url('images/businessyellow.jpg');background-size: cover !important;background-attachment: fixed">
    <div class="container">
        <div class="row justify-content-center mb-6 md-mb-4">
            <div class="col-xl-5 col-lg-6 col-md-12 md-mb-50px sm-mb-40px text-center text-lg-start">
                <h3 class="fw-700 mb-0 ls-minus-1px" style="color:rgb(255, 255, 255)" data-anime='{ "el": "lines", "translateY": [30, 0], "opacity": [0,1], "delay": 0, "staggervalue": 250, "easing": "easeOutQuad" }'>
                    以專業的能力和態度獲得了顧客的肯定</h3>
            </div>
            <div class="col-lg-6 offset-xl-1 text-center text-lg-start">
                <div class="row align-items-center justify-content-center justify-content-lg-start">
                    <!-- start counter item -->
                    <div class="col-sm-6 last-paragraph-no-margin counter-style-04 md-mb-35px">
                        <h2 class="vertical-counter d-inline-flex fw-700 ls-minus-2px mb-10px" style="color:#ffffff" data-text="%" data-to="95"><sup class="top-minus-5px" style="color: #FFDA4C;"><i class="bi bi-arrow-up icon-medium"></i></sup></h2>
                        <span class="fs-19 fw-600 ls-minus-05px d-block" style="color:#ffffff" data-anime='{ "el": "lines", "translateY": [30, 0], "opacity": [0,1], "delay": 0, "staggervalue": 250, "easing": "easeOutQuad" }'>95%
                            顧客產品達成</span>
                        <p class="w-85 sm-w-100 md-mx-auto" style="color:#ffffff" data-anime='{ "el": "lines", "translateY": [30, 0], "opacity": [0,1], "delay": 0, "staggervalue": 250, "easing": "easeOutQuad" }'>
                            用最大的專業需求使滿足顧客一切需求</p>
                    </div>
                    <!-- end counter item -->
                    <!-- start counter item -->
                    <div class="col-sm-6 last-paragraph-no-margin counter-style-04 md-mb-35px">
                        <h2 class="vertical-counter d-inline-flex fw-700 ls-minus-2px mb-10px" style="color:#ffffff" data-text="%" data-to="90"><sup class="top-minus-5px" style="color: #FFDA4C;"><i class="bi bi-arrow-up icon-medium"></i></sup></h2>
                        <span class="fs-19 fw-600 ls-minus-05px d-block" style="color:#ffffff" data-anime='{ "el": "lines", "translateY": [30, 0], "opacity": [0,1], "delay": 0, "staggervalue": 250, "easing": "easeOutQuad" }'>
                        顧客進階需求持續配合</span>
                        <p class="w-85 sm-w-100 md-mx-auto" style="color:#ffffff" data-anime='{ "el": "lines", "translateY": [30, 0], "opacity": [0,1], "delay": 0, "staggervalue": 250, "easing": "easeOutQuad" }'>
                        在後續的公司轉型或是系統重整持續跟我們配合</p>
                    </div>
                    <!-- end counter item -->
                </div>
            </div>
        </div>
        <div class="row m-0 align-items-center justify-content-center border border-radius-100px md-border-radius-6px ps-10px pe-10px box-shadow-quadruple-large" style="border-color: #000000 !important;background: #000000d9;" data-anime='{ "scale": [1.1, 1], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
            <div class="col-md-10">
                <div class="swiper slider-one-slide testimonials-style-09" data-slider-options='{ "slidesPerView": 1, "loop": true, "autoplay": { "delay": 4000, "disableOnInteraction": false }, "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "effect": "slide" }'>
                    <div class="swiper-wrapper">
                        <!-- start text slider item -->
                        <div class="swiper-slide">
                            <div class="row align-items-center pt-25px pb-25px">
                                <div class="col-lg-8 d-lg-flex align-items-center text-center text-lg-start">
                                    <img src="images/angela.jpg" class="rounded-circle w-100px h-100px md-mb-35px" alt="">
                                    <span class="d-block ps-40px md-ps-0 md-mx-auto position-relative" style="color: #ffffff;"><img src="images/demo-accounting-home-quote-img.png" class="position-absolute left-minus-25px top-minus-15px lg-top-minus-5px md-top-minus-50px w-40px md-left-0px md-right-0px md-mx-auto" alt="">感謝普洛加民的技術支援，我們公司的客戶跟進速度跟效率獲得了大大的提升
                                    </span>
                                </div>
                                <div class="col-lg-1 d-none d-lg-inline-block">
                                    <div class="separator-line w-1px md-w-100 h-60px md-h-1px bg-extra-medium-gray mx-auto">
                                    </div>
                                </div>
                                <div class="col-lg-3 text-center text-lg-start md-mt-15px">
                                    <span class="fs-19 ls-minus-05px fw-600 text-dark-gray d-block lh-28" style="color: #ffffff;">Angela Wang</span>
                                    <div style="color: #ffffff;">客戶體驗經理</div>
                                </div>
                            </div>
                        </div>
                        <!-- end text slider item -->
                        <!-- start text slider item -->
                        <div class="swiper-slide">
                            <div class="row align-items-center pt-25px pb-25px">
                                <div class="col-lg-8 d-lg-flex align-items-center text-center text-lg-start">
                                <img src="images/vivian.jpg" class="rounded-circle w-100px h-100px md-mb-35px" alt="">
                                    <span class="d-block ps-40px md-ps-0 md-mx-auto position-relative" style="color: #ffffff;"><img src="images/demo-accounting-home-quote-img.png" class="position-absolute left-minus-25px top-minus-15px lg-top-minus-5px md-top-minus-50px w-40px md-left-0px md-right-0px md-mx-auto" alt="">自從普洛加民把所有部門系統統一為一個ERM系統後，部門間配合變得更協調</span>
                                </div>
                                <div class="col-lg-1 d-none d-lg-inline-block">
                                    <div class="separator-line w-1px md-w-100 h-60px md-h-1px bg-extra-medium-gray mx-auto">
                                    </div>
                                </div>
                                <div class="col-lg-3 text-center text-lg-start md-mt-15px">
                                    <span class="fs-19 ls-minus-05px fw-600 text-dark-gray d-block lh-28" style="color: #ffffff;">Vivian Lin</span>
                                    <div style="color: #ffffff;">首席運營官</div>
                                </div>
                            </div>
                        </div>
                        <!-- end text slider item -->
                        <!-- start text slider item -->
                        <div class="swiper-slide">
                            <div class="row align-items-center pt-25px pb-25px">
                                <div class="col-lg-8 d-lg-flex align-items-center text-center text-lg-start">
                                <img src="images/bill.jpg" class="rounded-circle w-100px h-100px md-mb-35px" alt="">
                                    <span class="d-block ps-40px md-ps-0 md-mx-auto position-relative" style="color: #ffffff;"><img src="images/demo-accounting-home-quote-img.png" class="position-absolute left-minus-25px top-minus-15px lg-top-minus-5px md-top-minus-50px w-40px md-left-0px md-right-0px md-mx-auto" alt="">普洛加民提供的服務咨詢，可以提供幾乎所有的技術支持，總的來說，一次好的合作，包括服務的專業性與效率，處理時效上的跟進，普洛加民都是一個不錯的選擇</span>
                                </div>
                                <div class="col-lg-1 d-none d-lg-inline-block">
                                    <div class="separator-line w-1px md-w-100 h-60px md-h-1px bg-extra-medium-gray mx-auto">
                                    </div>
                                </div>
                                <div class="col-lg-3 text-center text-lg-start md-mt-15px">
                                    <span class="fs-19 ls-minus-05px fw-600 text-dark-gray d-block lh-28" style="color: #ffffff;">Bill Yam</span>
                                    <div style="color: #ffffff;">品牌運營長</div>
                                </div>
                            </div>
                        </div>
                        <!-- end text slider item -->
                    </div>
                </div>
            </div>
            <div class="col-lg-2 md-mb-25px">
                <div class="d-flex justify-content-center">
                    <!-- start slider navigation -->
                    <div class="slider-one-slide-prev-1 swiper-button-prev slider-navigation-style-04 bg-very-light-gray">
                        <i class="fa-solid fa-arrow-left icon-small text-dark-gray"></i>
                    </div>
                    <div class="slider-one-slide-next-1 swiper-button-next slider-navigation-style-04 bg-very-light-gray">
                        <i class="fa-solid fa-arrow-right icon-small text-dark-gray"></i>
                    </div>
                    <!-- end slider navigation -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="bg-gradient-top-very-light-gray overlap-height position-relative">
    <div class="container overlap-gap-section">
        <div class="row justify-content-center mb-4">
            <div class="col-xxl-6 col-lg-8 col-md-10 text-center" data-anime='{ "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <h2 class="fw-600 alt-font text-dark-gray ls-minus-1px">與國外多家企業與品牌共同成長
                </h2>
            </div>
        </div>
        <div class="row justify-content-center row-cols-2 row-cols-md-4 row-cols-sm-3 clients-style-03">
            <!-- start client item -->
            <div class="col text-center mb-35px" data-anime='{ "translateY": [15, 0], "opacity": [0,1], "duration": 600, "delay": 300, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <div class="client-box">
                    <a href="#"><img src="images/logo1.png" alt="" class="box-shadow-extra-large border-radius-100px lg-w-80 md-w-95 xs-w-auto"></a>
                </div>
            </div>
            <!-- end client item -->
            <!-- start client item -->
            <div class="col text-center mb-35px" data-anime='{ "translateY": [15, 0], "opacity": [0,1], "duration": 600, "delay": 1000, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <div class="client-box">
                    <a href="#"><img src="images/logo22.png" alt="" class="box-shadow-extra-large border-radius-100px lg-w-80 md-w-95 xs-w-auto"></a>
                </div>
            </div>
            <!-- end client item -->
            <!-- start client item -->
            <div class="col text-center mb-35px" data-anime='{ "translateY": [15, 0], "opacity": [0,1], "duration": 600, "delay":900, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <div class="client-box">
                    <a href="#"><img src="images/logo3.png" alt="" class="box-shadow-extra-large border-radius-100px lg-w-80 md-w-95 xs-w-auto"></a>
                </div>
            </div>
            <!-- end client item -->
            <!-- start client item -->
            <div class="col text-center mb-35px" data-anime='{ "translateY": [15, 0], "opacity": [0,1], "duration": 600, "delay": 500, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <div class="client-box">
                    <a href="#"><img src="images/logo4.png" alt="" class="box-shadow-extra-large border-radius-100px lg-w-80 md-w-95 xs-w-auto"></a>
                </div>
            </div>
            <!-- end client item -->
            <!-- start client item -->
            <div class="col text-center sm-mb-35px" data-anime='{ "translateY": [15, 0], "opacity": [0,1], "duration": 600, "delay": 700, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <div class="client-box">
                    <a href="#"><img src="images/logo5.png" alt="" class="box-shadow-extra-large border-radius-100px lg-w-80 md-w-95 xs-w-auto"></a>
                </div>
            </div>
            <!-- end client item -->
            <!-- start client item -->
            <div class="col text-center sm-mb-35px" data-anime='{ "translateY": [15, 0], "opacity": [0,1], "duration": 600, "delay":1200, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <div class="client-box">
                    <a href="#"><img src="images/logo6.png" alt="" class="box-shadow-extra-large border-radius-100px lg-w-80 md-w-95 xs-w-auto"></a>
                </div>
            </div>
            <!-- end client item -->
            <!-- start client item -->
            <div class="col text-center" data-anime='{ "translateY": [15, 0], "opacity": [0,1], "duration": 600, "delay": 800, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <div class="client-box">
                    <a href="#"><img src="images/logo7.png" alt="" class="box-shadow-extra-large border-radius-100px lg-w-80 md-w-95 xs-w-auto"></a>
                </div>
            </div>
            <!-- end client item -->
        </div>
        <div class="row justify-content-center mt-7 mb-9 sm-mt-40px sm-mb-0">
            <div class="col-12 d-block d-sm-flex align-items-center text-center text-sm-start justify-content-center fs-22 alt-font" style="margin-block-end: inherit;">
                <div class="me-5px xs-ms-10px d-inline-block align-middle"><i class="fa-regular fa-heart text-red"></i></div>
                <div class="d-inline-block align-middle">誠邀您的加入成為我們<span class="fw-800 text-dark-gray text-decoration-line-bottom-medium">100+</span> 
                家合作伙伴之一</div>

            </div>
        </div>
    </div>
    <div class="background-position-center-bottom background-size-100 background-no-repeat h-400px sm-h-150px position-absolute sm-position-relative left-0px bottom-0 w-100 d-none d-md-block" style="background-image: url('images/demo-seo-agency-analysis-bg.png')"></div>
</section>
<!-- end section -->
<section class="cover-background one-third-screen sm-h-500px" style="background-image:url('images/workingoffice.jpg');">
    <div class="opacity-medium bg-dark-slate-blue"></div>
    <div class="container h-100">
        <div class="row align-items-center justify-content-center h-100">
            <div class="col-xxl-8 col-lg-10 mb-9 md-mb-15 sm-mb-0 position-relative z-index-1 text-center d-flex flex-wrap align-items-center justify-content-center" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <span class="ps-25px pe-25px pt-5px pb-5px mb-25px text-uppercase  fs-20 ls-1px fw-600 border-radius-100px d-flex align-items-center text-start sm-lh-20" style="background-color:#FFDA4C;color:#000000"><i class="bi bi-megaphone  d-inline-block align-middle icon-small me-10px"></i>
                歡迎和我們一同構思如何使您的工作更順利</span>
                <h1 class="text-white fw-600 ls-minus-2px mb-45px">讓我們一同創造更美好的
                    <span class="fw-600" data-fancy-text='{ "effect": "rotate", "string": ["產品!", "程式!", "軟體!", "培訓!", "轉型!"] }'></span>
                </h1>
                <a href="#" class="btn btn-extra-large btn-switch-text btn-y-t-y btn-rounded">
                    <span>
                        <span class="btn-double-text" data-text="有想法嗎？">有想法嗎？</span>
                        <span><i class="fa-solid fa-arrow-right"></i></span>
                    </span>
                </a>
            </div>
        </div>
    </div>
    <div class="shape-image-animation bottom-0 p-0 w-100 d-none d-md-block">
        <svg xmlns="http://www.w3.org/2000/svg" widht="3000" height="400" viewBox="0 180 2500 200" fill="#ffffff">
            <path class="st1" d="M 0 250 C 1200 400 1200 50 3000 250 L 3000 550 L 0 550 L 0 250">
                <animate attributeName="d" dur="5s" values="M 0 250 C 1200 400 1200 50 3000 250 L 3000 550 L 0 550 L 0 250;
                        M 0 250 C 400 50 400 400 3000 250 L 3000 550 L 0 550 L 0 250;
                        M 0 250 C 1200 400 1200 50 3000 250 L 3000 550 L 0 550 L 0 250" repeatCount="indefinite" />
            </path>
        </svg>
    </div>
</section>
@endsection