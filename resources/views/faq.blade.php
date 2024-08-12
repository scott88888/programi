@extends('layouts.app')
@section('title', 'FAQ')
@section('extra_head')
<style>
    .btn-y-t-y {
        background-image: linear-gradient(to right, #A88006, #FFE87F, #A88006);
        background-size: 200% auto;
        color: var(--black);
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
                            <a href="pastworks" class="nav-link">過往作品</a>
                        </li>
                        <li class="nav-item dropdown simple-dropdown">
                            <a href="contact" class="nav-link">聯絡我們</a>
                        </li>
                        <li class="nav-item dropdown simple-dropdown active">
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
<!-- start page title -->

<section class="page-title-center-alignment ipad-top-space-margin background-position-center-bottom cover-background position-relative" style="background-image: url(images/yellow1920540.jpg)">
    <div class="background-position-left-top h-100 w-100 position-absolute left-0px top-0"></div>
    <div class="background-position-center-bottom background-size-100 background-no-repeat position-absolute bottom-0 left-0px w-100 h-400px z-index-1" style="background-image: url('images/demo-seo-agency-about-bottom-bg.png')"></div>
    <div id="particles-style-01" class="h-100 position-absolute left-0px top-0 w-100" data-particle="true" data-particle-options='{"particles": {"number": {"value": 1,"density": {"enable": true,"value_area": 600}},"shape": {"type": ["image"],"image":{"src":"images/particles-demo-4-bg.png","width":220,"height":134}},"opacity": {"value": 0.5,"random": false,"anim": {"enable": false,"speed": 1,"sync": false}},"size": {"value": 120,"random": true,"anim": {"enable": false,"sync": true}},"line_linked":{"enable":false,"distance":0,"color":"#ffffff","opacity":0.4,"width":1},"move": {"enable": true,"speed":1,"direction": "right","random": false,"straight": false}},"interactivity": {"detect_on": "canvas","events": {"onhover": {"enable": false,"mode": "repulse"},"onclick": {"enable": false,"mode": "push"},"resize": true}},"retina_detect": false}'>
    </div>
    <div class="container">
        <div class="row align-items-center justify-content-center position-relative z-index-1 h-250px">
            <div class="col-12 text-center position-relative page-title-large" data-anime='{ "el": "childs", "opacity": [0, 1], "rotateY": [-90, 0], "rotateZ": [-10, 0], "translateY": [80, 0], "translateZ": [50, 0], "staggervalue": 200, "duration": 900, "easing": "easeOutCirc" }'>
                <h1 class="alt-font d-inline-block fw-700 ls-minus-1px text-dark-gray mb-0">常見問題</h1>
                <h2 class="mt-5px text-dark-gray mb-0"><span class="opacity-7">再了解我們更多</span></h2>
            </div>
        </div>
    </div>
</section>
<!-- end page title -->
<!-- start section -->
<section class="background-position-center-top overflow-hidden">
    <div class="container position-relative">
        <div class="row align-items-center">
            <div class="col-xl-5 col-lg-6 md-mb-50px text-center text-lg-start" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <h2 class="alt-font text-dark-gray fw-600 ls-minus-1px mb-35px sm-mb-25px">我們會盡力解決您的每個疑慮</h2>
                <span class="d-inline-block alt-font fw-600 fs-20 text-dark-gray mb-5px">全面技術的支援</span>
                <p class="w-80 md-w-100">普洛加民的團隊擁有各種網路技術的輔助，無論各項大小疑問都可以用專業的回覆讓您得到滿意的答案
                </p>


                <a href="demo-seo-agency-what-we-do.html" class="btn btn-extra-large btn-rounded with-rounded btn-y-t-y btn-box-shadow box-shadow-extra-large mt-15px">聯繫我們<span class="bg-white text-base-color"><i class="fa-solid fa-arrow-right"></i></span></a>
            </div>
            <div class="col-xl-6 offset-xl-1 col-lg-6 position-relative" data-anime='{ "el": "childs", "translateX": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <div class="outside-box-right-25 md-me-0">
                    <img src="https://via.placeholder.com/995x680" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="position-relative" style="background-image: linear-gradient(to right, #000000, #000000);">
    <div id="particles-style-04" class="h-100 position-absolute left-0px top-0 w-100" data-particle="true" data-particle-options='{"particles": {"number": {"value": 10,"density": {"enable": true,"value_area": 2000}},"color":{"value":"#ffffff"},"shape": {"type": "circle","stroke":{"width":0,"color":"#000000"}},"opacity": {"value": 0.2,"random": false,"anim": {"enable": false,"speed": 1,"sync": false}},"size": {"value": 10,"random": true,"anim": {"enable": false,"sync": true}},"line_linked":{"enable":false,"distance":0,"color":"#ffffff","opacity":0.4,"width":1},"move": {"enable": true,"speed":1,"direction": "right","random": false,"straight": false}},"interactivity": {"detect_on": "canvas","events": {"onhover": {"enable": false,"mode": "repulse"},"onclick": {"enable": false,"mode": "push"},"resize": true}},"retina_detect": false}'>
    </div>
    <div class="container">
        <div class="row justify-content-center mb-4 sm-mb-10" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
            <div class="col-12 text-center">
                <h2 class="fw-600 alt-font text-white ls-minus-1px">一切都由簡單的開始</h2>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2" data-anime='{ "el": "childs", "translateX": [-50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
            <!-- start process step item -->
            <div class="col text-center process-step-style-02 hover-box last-paragraph-no-margin md-mb-50px">
                <i class="line-icon-Idea-5 icon-extra-large mb-25px text-white"></i>
                <span class="d-block alt-font text-white fw-500 fs-20 mb-5px ls-05px">了解需求</span>
                <p class="d-inline-block w-75 lg-w-85 text-white opacity-5">知道如何能夠幫到您</p>
                <div class="process-step-icon-box position-relative mt-40px md-mt-30px">
                    <span class="progress-step-separator bg-white opacity-2 w-55 separator-line-1px"></span>
                    <div class="process-step-icon d-flex justify-content-center align-items-center mx-auto bg-black-transparent-light h-70px w-70px fs-18 rounded-circle text-white fw-500 alt-font">
                        <span class="number position-relative z-index-1">01</span>
                        <div class="box-overlay bg-dark-gray rounded-circle"></div>
                    </div>
                </div>
            </div>
            <!-- end process step item -->
            <!-- start process step item -->
            <div class="col text-center process-step-style-02 hover-box last-paragraph-no-margin md-mb-50px">
                <i class="line-icon-Approved-Window icon-extra-large mb-25px text-white"></i>
                <span class="d-block alt-font text-white fw-500 fs-20 mb-5px ls-05px">項目提案</span>
                <p class="d-inline-block w-75 lg-w-85 text-white opacity-5">我們整合一個最適合的提案及報價供您參考</p>
                <div class="process-step-icon-box position-relative mt-40px md-mt-30px">
                    <span class="progress-step-separator bg-white opacity-2 w-55 separator-line-1px"></span>
                    <div class="process-step-icon d-flex justify-content-center align-items-center mx-auto bg-black-transparent-light h-70px w-70px fs-18 rounded-circle text-white fw-500 alt-font">
                        <span class="number position-relative z-index-1">02</span>
                        <div class="box-overlay bg-dark-gray rounded-circle"></div>
                    </div>
                </div>
            </div>
            <!-- end process step item -->
            <!-- start process step item -->
            <div class="col text-center process-step-style-02 hover-box last-paragraph-no-margin xs-mb-50px">
                <i class="line-icon-Gear-2 icon-extra-large mb-25px text-white"></i>
                <span class="d-block alt-font text-white fw-500 fs-20 mb-5px ls-05px">正式實施</span>
                <p class="d-inline-block w-75 lg-w-85 text-white opacity-5">工程師把項目落實製作，在時間內完成</p>
                <div class="process-step-icon-box position-relative mt-40px md-mt-30px">
                    <span class="progress-step-separator bg-white opacity-2 w-55 separator-line-1px"></span>
                    <div class="process-step-icon d-flex justify-content-center align-items-center mx-auto bg-black-transparent-light h-70px w-70px fs-18 rounded-circle text-white fw-500 alt-font">
                        <span class="number position-relative z-index-1">03</span>
                        <div class="box-overlay bg-dark-gray rounded-circle"></div>
                    </div>
                </div>
            </div>
            <!-- end process step item -->
            <!-- start process step item -->
            <div class="col text-center process-step-style-02 hover-box last-paragraph-no-margin">
                <i class="line-icon-Archery-2 icon-extra-large mb-25px text-white"></i>
                <span class="d-block alt-font text-white fw-500 fs-20 mb-5px ls-05px">完成交付</span>
                <p class="d-inline-block w-75 lg-w-85 text-white opacity-5">調試完成，準確交付，讓您的業務更輕鬆有效</p>
                <div class="process-step-icon-box position-relative mt-40px md-mt-30px">
                    <div class="process-step-icon d-flex justify-content-center align-items-center mx-auto bg-black-transparent-light h-70px w-70px fs-18 rounded-circle text-white fw-500 alt-font">
                        <span class="number position-relative z-index-1">04</span>
                        <div class="box-overlay bg-dark-gray rounded-circle"></div>
                    </div>
                </div>
            </div>
            <!-- end process step item -->
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="background-position-center-top bg-gradient-top-very-light-gray position-relative pb-15 sm-pb-20">
    <div class="background-position-center-bottom background-size-100 background-no-repeat position-absolute bottom-0 left-0px w-100 h-400px z-index-1" style="background-image: url('images/demo-seo-agency-analysis-bg.png')"></div>
    <div class="container position-relative z-index-1">
        <div class="row justify-content-center mb-3">
            <div class="col-12 text-center" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <h2 class="alt-font text-dark-gray fw-600 ls-minus-1px">我們可以如何幫忙？</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 md-mb-50px" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <div class="accordion accordion-style-04" id="accordion-style-04" data-active-icon="icon-feather-x" data-inactive-icon="icon-feather-plus">
                    <!-- start accordion item -->
                    <div class="accordion-item active-accordion">
                        <div class="accordion-header border-bottom border-color-extra-medium-gray mb-0">
                            <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-04-01" aria-expanded="true" data-bs-parent="#accordion-style-04">
                                <div class="accordion-title position-relative mb-0 pe-20px text-dark-gray fs-18 fw-600 alt-font">
                                    <span>• Q: 貴公司在雲計算領域提供哪些具體服務?</span>
                                    <i class="feather icon-feather-x"></i>
                                </div>
                            </a>
                        </div>
                        <div id="accordion-style-04-01" class="accordion-collapse collapse show" data-bs-parent="#accordion-style-04">
                            <div class="accordion-body bg-white last-paragraph-no-margin">
                                <p>• A: 我們的雲計算服務包括雲基礎設施設計、雲遷移⽀持、雲環境優化和雲安全管理。 無論您是需要轉移到雲平台，還是希望提升現有雲環境的性能，我們的專家團隊都能 提供定制的解決⽅案。</p>
                            </div>
                        </div>
                    </div>
                    <!-- end accordion item -->
                    <!-- start accordion item -->
                    <div class="accordion-item">
                        <div class="accordion-header border-bottom border-color-extra-medium-gray mb-0">
                            <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-04-02" aria-expanded="false" data-bs-parent="#accordion-style-04">
                                <div class="accordion-title position-relative mb-0 pe-20px text-dark-gray fs-18 fw-600 alt-font">
                                    <span>• Q: 貴公司的顧問服務是如何收費的?</span>
                                    <i class="feather icon-feather-plus"></i>
                                </div>
                            </a>
                        </div>
                        <div id="accordion-style-04-02" class="accordion-collapse collapse" data-bs-parent="#accordion-style-04">
                            <div class="accordion-body bg-white last-paragraph-no-margin">
                                <p>• A: 我們的收費基於項⽬的規模和複雜度。⼀般來說，我們會在免費的初次諮詢後，根 據您的具體需求提供⼀份詳細的報價。我們提供靈活的計費⽅式，包括固定費⽤、按 時計費或成果導向的費⽤結構。</p>
                            </div>
                        </div>
                    </div>
                    <!-- end accordion item -->
                    <!-- start accordion item -->
                    <div class="accordion-item">


                        <div class="accordion-header border-bottom border-color-extra-medium-gray mb-0">
                            <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-04-03" aria-expanded="false" data-bs-parent="#accordion-style-04">
                                <div class="accordion-title position-relative mb-0 pe-20px text-dark-gray fs-18 fw-600 alt-font">
                                    <span>• Q: 貴公司如何確保項⽬按時交付?</span>
                                    <i class="feather icon-feather-plus"></i>
                                </div>
                            </a>
                        </div>
                        <div id="accordion-style-04-03" class="accordion-collapse collapse" data-bs-parent="#accordion-style-04">
                            <div class="accordion-body bg-white last-paragraph-no-margin">
                                <p>• A: 我們採⽤先進的項⽬管理⽅法和⼯具，如Scrum和Kanban。每個項⽬都會指派⼀名 專⾨的項⽬經理，負責監控進度並確保所有階段按計劃執⾏。客⼾將定期接收進度報 告，並參與週期性的評估會議。</p>
                            </div>
                        </div>
                    </div>
                    <!-- end accordion item -->
                </div>
            </div>
            <div class="col-lg-6" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <div class="accordion accordion-style-04" id="accordion-style-05" data-active-icon="icon-feather-x" data-inactive-icon="icon-feather-plus">
                    <!-- start accordion item -->
                    <div class="accordion-item active-accordion">
                        <div class="accordion-header border-bottom border-color-extra-medium-gray mb-0">
                            <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-04-04" aria-expanded="true" data-bs-parent="#accordion-style-05">
                                <div class="accordion-title position-relative mb-0 pe-20px text-dark-gray fs-18 fw-600 alt-font">
                                    <span>• Q: 完成項⽬後，貴公司提供怎樣的後續⽀持?</span>
                                    <i class="feather icon-feather-x"></i>
                                </div>
                            </a>
                        </div>
                        <div id="accordion-style-04-04" class="accordion-collapse collapse show" data-bs-parent="#accordion-style-05">
                            <div class="accordion-body bg-white last-paragraph-no-margin">
                                <p>• A: 項⽬完成後，我們提供從維護到升級的全範圍技術⽀持服務。這包括故障排除、系 統更新以及根據技術進步進⾏的功能增強。我們提供多種⽀持套餐，從基本的技術⽀ 持到24/7全天候的緊急⽀持。</p>
                            </div>
                        </div>
                    </div>
                    <!-- end accordion item -->
                    <!-- start accordion item -->

                    <div class="accordion-item">
                        <div class="accordion-header border-bottom border-color-extra-medium-gray mb-0">
                            <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-04-05" aria-expanded="false" data-bs-parent="#accordion-style-05">
                                <div class="accordion-title position-relative mb-0 pe-20px text-dark-gray fs-18 fw-600 alt-font">
                                    <span>• Q: 我想利⽤貴公司的服務，合作流程是怎樣的?</span>
                                    <i class="feather icon-feather-plus"></i>
                                </div>
                            </a>
                        </div>
                        <div id="accordion-style-04-05" class="accordion-collapse collapse" data-bs-parent="#accordion-style-05">
                            <div class="accordion-body bg-white last-paragraph-no-margin">
                                <p>• A: ⾸先，請通過我們的網站提交您的需求，或直接聯絡我們的客⼾服務部⾨。我們將 安排⼀次免費諮詢，詳細了解您的需求和預期⽬標。之後，我們會提供⼀份項⽬提案 和報價。⼀旦確認合作，我們將進入正式的項⽬規劃和實施階段。                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- end accordion item -->

                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-6 sm-mt-10">
            <div class="col-auto icon-with-text-style-08 sm-mb-10px xs-mb-15px" data-anime='{ "translateX": [-50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="feature-box feature-box-left-icon-middle xs-lh-28">
                    <div class="feature-box-icon me-10px">
                        <i class="bi bi-envelope icon-extra-medium text-base-color"></i>
                    </div>
                    <div class="feature-box-content">
                        <span class="alt-font fs-19 fw-600 text-dark-gray">需要幫忙嗎？<a href="#" class="text-decoration-line-bottom text-dark-gray">給我們一封電郵</a></span>
                    </div>
                </div>
            </div>
            <div class="col-auto icon-with-text-style-08" data-anime='{ "translateX": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="feature-box feature-box-left-icon-middle xs-lh-28">
                    <div class="feature-box-icon me-10px">
                        <i class="bi bi-chat-dots icon-extra-medium text-base-color"></i>
                    </div>
                    <div class="feature-box-content">
                        <span class="alt-font fs-19 fw-600 text-dark-gray">想到即時溝通？ <a href="#" class="text-decoration-line-bottom text-dark-gray">聯繫我們的Line</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
@endsection