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
                        <a href="https://lin.ee/ZgHy83J" target="_blank" class="btn btn-dark-gray btn-small btn-switch-text btn-rounded text-transform-none btn-box-shadow purchase-envato">
                            <span>
                                <span class="btn-double-text" data-text="立即聯繫！">立即聯繫！</span>
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
    <div class="background-position-center-bottom background-size-100 background-no-repeat position-absolute bottom-0 left-0px w-100 h-400px z-index-1" style="background-image: url('images/demo-seo-agency-about-bottom-bg.png')"></div>
    <div id="particles-style-01" class="h-100 position-absolute left-0px top-0 w-100" data-particle="true" data-particle-options='{"particles": {"number": {"value": 1,"density": {"enable": true,"value_area": 600}},"shape": {"type": ["image"],"image":{"src":"images/particles-demo-4-bg.png","width":220,"height":134}},"opacity": {"value": 0.5,"random": false,"anim": {"enable": false,"speed": 1,"sync": false}},"size": {"value": 120,"random": true,"anim": {"enable": false,"sync": true}},"line_linked":{"enable":false,"distance":0,"color":"#ffffff","opacity":0.4,"width":1},"move": {"enable": true,"speed":1,"direction": "right","random": false,"straight": false}},"interactivity": {"detect_on": "canvas","events": {"onhover": {"enable": false,"mode": "repulse"},"onclick": {"enable": false,"mode": "push"},"resize": true}},"retina_detect": false}'>
    </div>
    <div class="container">
        <div class="row align-items-center justify-content-center position-relative z-index-1 h-250px">
            <div class="col-12 text-center position-relative page-title-large" data-anime='{ "el": "childs", "opacity": [0, 1], "rotateY": [-90, 0], "rotateZ": [-10, 0], "translateY": [80, 0], "translateZ": [50, 0], "staggervalue": 200, "duration": 900, "easing": "easeOutCirc" }'>
                <h1 class="alt-font d-inline-block fw-700 ls-minus-1px text-dark-gray mb-0">關於我們</h1>
                <h2 class="mt-5px text-dark-gray mb-0"><span class="opacity-7">有關普洛加民的故事</span></h2>
            </div>
        </div>
    </div>
</section>
<!-- end page title -->
<!-- start section -->
<section class="background-position-center-top pb-0">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 md-mb-50px animation-float text-center" data-anime='{ "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <img src="images/about-us1.png" alt="">
            </div>
            <div class="col-xl-5 offset-xl-1 col-lg-6 text-center text-lg-start" data-anime='{ "el": "childs", "willchange": "transform", "opacity": [0, 1], "rotateY": [-90, 0], "rotateZ": [-10, 0], "translateY": [80, 0], "translateZ": [50, 0], "staggervalue": 200, "duration": 600, "delay": 100, "easing": "easeOutCirc" }'>
                <span class="ps-20px pe-20px mb-30px md-mb-20px text-uppercase text-dark-gray fs-20 lh-40 md-lh-50 ls-1px alt-font fw-700 border-radius-4px bg-y-w-y d-inline-block">公司成立</span>
                <h2 class="alt-font text-dark-gray fw-600 ls-minus-1px">全面配合 將心比心</h2>
                <p class="w-85 lg-w-95 sm-w-100 mb-40px sm-mb-20px">普洛加⺠數位科技有限公司成立於2024年，由兩位已累積超過15年業界資歷的夥伴共同創立，專注於提供創新的技術，充滿活⼒和熱情。<br>技術團隊由技能精湛的專業⼈員組成，致⼒於為客⼾提供⾼品質、量⾝定制的技術解決⽅案。</p>
                <img src="images/about-usmin1.png" alt="" class="me-25px xs-m-10px">
                <img src="images/about-usmin2.png" alt="" class="xs-m-10px">
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<section class="position-relative background-position-center-top half-section overflow-hidden">
    <div id="particles-style-02" class="h-100 position-absolute left-0px top-0 z-index-minus-1 w-100" data-particle="true" data-particle-options='{"particles": {"number": {"value":3,"density": {"enable": true,"value_area": 2000}},"shape": {"type": ["image"],"image":{"src":"images/demo-seo-agency-particles-img.png","width":220,"height":134}},"opacity": {"value": 0.5,"random": false,"anim": {"enable": false,"speed": 1,"sync": false}},"size": {"value": 120,"random": true,"anim": {"enable": false,"sync": true}},"line_linked":{"enable":false,"distance":0,"color":"#ffffff","opacity":0.4,"width":1},"move": {"enable": true,"speed":1,"direction": "right","random": false,"straight": false}},"interactivity": {"detect_on": "canvas","events": {"onhover": {"enable": false,"mode": "repulse"},"onclick": {"enable": false,"mode": "push"},"resize": true}},"retina_detect": false}'>
    </div>
    <div class="container bg-white border-radius-6px box-shadow-quadruple-large skrollr-zoom" data-bottom-top="transform:scale(1, 1) translateX(30px);" data-top-bottom="transform:scale(1,1) translateX(-30px);">
        <div class="row row-cols-2 row-cols-md-4 p-4 md-p-25px justify-content-center text-center">
            <!-- start content box item -->
            <div class="col last-paragraph-no-margin sm-mb-25px">
                <h2 class="alt-font fw-700 text-dark-gray m-0">100+</h2>
                <p>信賴的客戶</p>
            </div>
            <!-- end content box item -->
            <!-- start content box item -->
            <div class="col last-paragraph-no-margin sm-mb-25px">
                <h2 class="alt-font fw-700 text-dark-gray m-0">99%</h2>
                <p>顧客需求達成率</p>
            </div>
            <!-- end content box item -->
            <!-- start content box item -->
            <div class="col last-paragraph-no-margin">
                <h2 class="alt-font fw-700 text-dark-gray m-0">4.98</h2>
                <p>顧客滿意度</p>
            </div>
            <!-- end content box item -->
            <!-- start content box item -->
            <div class="col last-paragraph-no-margin">
                <h2 class="alt-font fw-700 text-dark-gray m-0">90%</h2>
                <p>顧客進階需求持續配合</p>
            </div>
            <!-- end content box item -->
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<!-- <section class="background-position-center-top cover-background" style="background-image: url('images/background-wallpaper.jpg')"> -->
<section class="background-position-center-top cover-background">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-6 text-center md-mb-50px" data-anime='{ "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <img src="images/about-us2.png" alt="">
            </div>
            <div class="col-lg-5 offset-lg-1 text-center text-lg-start" data-anime='{ "el": "childs", "willchange": "transform", "opacity": [0, 1], "rotateY": [-90, 0], "rotateZ": [-10, 0], "translateY": [80, 0], "translateZ": [50, 0], "staggervalue": 200, "duration": 600, "delay": 100, "easing": "easeOutCirc" }'>
                <span class="ps-20px pe-20px mb-30px md-mb-20px text-uppercase text-dark-gray fs-20 lh-40 md-lh-50 ls-1px alt-font fw-700 border-radius-4px bg-y-w-y d-inline-block">
                    核⼼優勢</span>
                <h2 class="alt-font text-dark-gray fw-600 ls-minus-1px w-90 lg-w-100">與我們合作<br>您將擁有</h2>
                <p class="mb-20px w-80 lg-w-100">• 顯著提升的⼯作效率：企業系統的客制開發，最佳化您的使⽤體驗，縮短⼯作時間，提升⼯作效率。</p>
                <p class="mb-20px w-80 lg-w-100">• 流暢的⼈性化設計：介⾯簡潔友好，易於操作，減少使⽤者學習成本，減少時間成本。</p>
                <p class="mb-20px w-80 lg-w-100">• 專業技術⽀持：普洛加⺠的技術團隊長期與香港知名⼤型企業及政府單位合作，擁有豐富的系統開發經驗與專業能⼒，能有效給予您最快的解決⽅案。</p>
                <p class="mb-20px w-80 lg-w-100">• 快速服務能⼒：針對您的需求，提供⾼效率的服務反應，有效解決客⼾問題。</p>
                <p class="mb-20px w-80 lg-w-100">• 美化視覺設計：專案經理將與設計團隊共同提供您，前端美化設計服務，提升視覺效果，更加直覺、⼈性化使⽤介⾯。</p>

            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="background-position-center-top pb-0">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 md-mb-50px animation-float text-center" data-anime='{ "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <img src="images/about-us3.png" alt="">
            </div>
            <div class="col-xl-5 offset-xl-1 col-lg-6 text-center text-lg-start" data-anime='{ "el": "childs", "willchange": "transform", "opacity": [0, 1], "rotateY": [-90, 0], "rotateZ": [-10, 0], "translateY": [80, 0], "translateZ": [50, 0], "staggervalue": 200, "duration": 600, "delay": 100, "easing": "easeOutCirc" }'>
                <span class="ps-20px pe-20px mb-30px md-mb-20px text-uppercase text-dark-gray fs-20 lh-40 md-lh-50 ls-1px alt-font fw-700 border-radius-4px bg-y-w-y d-inline-block">專業團隊
                </span>
                <h2 class="alt-font text-dark-gray fw-600 ls-minus-1px">沒有做不到的任務</h2>
                <p class="w-85 lg-w-95 sm-w-100 mb-40px sm-mb-20px">
                    普洛加⺠的技術長來⾃香港，擁有豐富的⼤型企業合作經
                    驗，與香港知名公司和政府單位合作超過15年。<br><br>
                    技術長和團隊通過與這些知名企業和政府單位的合作，累積了豐富
                    的實戰經驗，也在不間斷的內部培訓與外部進修中獲得與
                    時俱進的技術能⼒，這將有助於我們為客⼾提供更優質、
                    更符合實際需求的解決⽅案。<br><br>
                    我們期待著透過這些寶貴經驗，與您攜⼿合作，共同推動
                    技術和服務的卓越發展。
                </p>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="background-position-center-top pb-0">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 md-mb-50px animation-float text-center" data-anime='{ "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <img src="images/about-us4.png" alt="">
            </div>
            <div class="col-xl-5 offset-xl-1 col-lg-6 text-center text-lg-start" data-anime='{ "el": "childs", "willchange": "transform", "opacity": [0, 1], "rotateY": [-90, 0], "rotateZ": [-10, 0], "translateY": [80, 0], "translateZ": [50, 0], "staggervalue": 200, "duration": 600, "delay": 100, "easing": "easeOutCirc" }'>
                <span class="ps-20px pe-20px mb-30px md-mb-20px text-uppercase text-dark-gray fs-20 lh-40 md-lh-50 ls-1px alt-font fw-700 border-radius-4px bg-y-w-y d-inline-block">經營理念
                </span>
                <h2 class="alt-font text-dark-gray fw-600 ls-minus-1px"></h2>
                <p class="w-85 lg-w-95 sm-w-100 mb-40px sm-mb-20px">
                    我們堅信，創新是推動科技進步的關鍵，因此，我們⿎勵
                    團隊成員提出新想法、嘗試新技術，並通過合作共享知
                    識，實現共同成長。</br><br>
                    我們擁有豐富的經驗和強⼤的熱情，願意為客⼾提供最好
                    的解決⽅案。我們期待與您攜⼿合作，共同塑造⼀個更具
                    創新性和可持續發展的未來。</br><br>
                    無論是程式設計、網⾴架設、還是企業系統客製服務，普
                    洛加⺠數位科技都將以最優質的服務和專業的技術為客⼾
                    提供最佳解決⽅案，助您在競爭激烈的市場中脫穎⽽出。
                </p>
            </div>
        </div>
    </div>
</section>
<!-- end section -->

@endsection