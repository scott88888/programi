@extends('layouts.app')
@section('title', '聯絡我們')
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
                <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
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
                           <a href="#" class="nav-link">產品/服務</a>
                            <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink3" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false"></i>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink3">
                                <li><a href="shop">Shop.com夥伴商店串接</a></li>
                                <li><a href="ecommerce">線上購物平台</a></li>
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
                            <img style="max-height: 43px;padding: 0 20px;margin: 0px 15px;" src="images/onlylogo.png"
                                data-at2x="images/onlylogo.png" alt="" class="">
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
<section
    class="page-title-center-alignment ipad-top-space-margin background-position-center-bottom cover-background position-relative"
    style="background-image: url(images/yellow1920540.jpg)">
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
                <h1 class="alt-font d-inline-block fw-700 ls-minus-1px text-dark-gray mb-0">Contact us</h1>
                <h2 class="mt-5px text-dark-gray mb-0"><span class="opacity-7">How we can help you?</span></h2>
            </div>
        </div>
    </div>
</section>
<!-- end page title -->
<!-- start section -->
<section class="bg-gradient-top-very-light-gray position-relative overlap-height pt-6 md-pt-10">
    <div class="background-position-left-top h-100 w-100 position-absolute z-index-1 left-0px top-0"></div>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 row-cols-sm-2 justify-content-center overlap-gap-section"
            data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
            <!-- start features box item -->
            <div class="col icon-with-text-style-04 transition-inner-all sm-mb-40px">
                <div class="feature-box last-paragraph-no-margin">
                    <div class="feature-box-icon">
                        <i class="bi bi-geo-alt icon-large d-block text-dark-gray mb-25px"></i>
                    </div>
                    <div class="feature-box-content last-paragraph-no-margin">
                        <span class="d-inline-block alt-font fw-700 text-dark-gray mb-5px fs-20">Crafto office</span>
                        <p>401 Broadway, 24th floor<br> New york, NY 10013</p>
                    </div>
                </div>
            </div>
            <!-- end features box item -->
            <!-- start features box item -->
            <div class="col icon-with-text-style-04 transition-inner-all sm-mb-40px">
                <div class="feature-box last-paragraph-no-margin">
                    <div class="feature-box-icon">
                        <i class="bi bi-telephone-outbound icon-large d-block text-dark-gray mb-25px"></i>
                    </div>
                    <div class="feature-box-content last-paragraph-no-margin">
                        <span class="d-inline-block alt-font fw-700 text-dark-gray mb-5px fs-20">Call us directly</span>
                        <span class="d-block">Phone: <a href="tel:1800222000">1-800-222-000</a></span>
                        <span class="d-block">Fax: 1-800-222-002</span>
                    </div>
                </div>
            </div>
            <!-- end features box item -->
            <!-- start features box item -->
            <div class="col icon-with-text-style-04 transition-inner-all">
                <div class="feature-box last-paragraph-no-margin">
                    <div class="feature-box-icon">
                        <i class="bi bi-envelope-open icon-large d-block text-dark-gray mb-25px"></i>
                    </div>
                    <div class="feature-box-content last-paragraph-no-margin">
                        <span class="d-inline-block alt-font fw-700 text-dark-gray mb-5px fs-20">Send a message</span>
                        <a href="mailto:info@yourdomain.com" class="d-block">info@yourdomain.com</a>
                        <a href="mailto:hr@yourdomain.com" class="d-block">hr@yourdomain.com</a>
                    </div>
                </div>
            </div>
            <!-- end features box item -->
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="position-relative overflow-hidden overlap-section pb-0">
    <div class="background-position-center-bottom background-no-repeat h-250px position-absolute left-0px bottom-0 w-100"
        style="background-image: url('images/demo-seo-agency-analysis-bg.png')"></div>
    <div class="container position-relative z-index-1">
        <div class="row box-shadow-large g-0 border-radius-6px overflow-hidden"
            data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
            <!-- start map -->
            <div class="col-lg-6 box-shadow-quadruple-large">
                <div id="" class="map h-100 md-h-600px sm-h-550px" style="background-color: #FFDA4C"></div>
            </div>
            <!-- end map -->
            <div class="col-lg-6 contact-form-style-03">
                <div class="bg-dark-gray p-15 lg-p-10 h-100 overflow-hidden position-relative">
                    <h1 class="fw-600 alt-font text-white fancy-text-style-4 ls-minus-1px">Say
                        <span data-fancy-text='{ "effect": "rotate", "string": ["hello!", "hallå!", "salve!"] }'></span>
                    </h1>
                    <!-- start contact form -->
                    <form action="email-templates/contact-form.php" method="post">
                        <div class="position-relative form-group mb-20px">
                            <span class="form-icon"><i class="bi bi-person icon-extra-medium"></i></span>
                            <input
                                class="ps-0 border-radius-0px fs-17 bg-transparent border-color-transparent-white-light placeholder-medium-gray form-control required"
                                type="text" name="name" placeholder="Enter your name*">
                        </div>
                        <div class="position-relative form-group mb-20px">
                            <span class="form-icon"><i class="bi bi-envelope icon-extra-medium"></i></span>
                            <input
                                class="ps-0 border-radius-0px fs-17 bg-transparent border-color-transparent-white-light placeholder-medium-gray form-control required"
                                type="email" name="email" placeholder="Enter your email address*">
                        </div>
                        <div class="position-relative form-group form-textarea mt-15px mb-25px">
                            <textarea
                                class="ps-0 border-radius-0px fs-17 bg-transparent border-color-transparent-white-light placeholder-medium-gray form-control"
                                name="comment" placeholder="Enter your message" rows="4"></textarea>
                            <span class="form-icon"><i class="bi bi-chat-square-dots icon-extra-medium"></i></span>
                            <input type="hidden" name="redirect" value="">
                            <button class="btn btn-small btn-y-t-y ls-1px mt-30px submit w-100 btn-round-edge-small"
                                type="submit">Send message</button>
                            <div class="form-results mt-20px d-none"></div>
                        </div>
                        <span class="text-white opacity-3 fs-14 lh-22 d-block">I accept the terms & conditions and i
                            understand that my data will be hold securely in accordance with the privacy policy.</span>
                    </form>
                    <!-- end contact form -->
                </div>
            </div>
        </div>
    </div>
    <!-- start marquees -->
    <div class="fw-700 fs-170 position-absolute bottom-100px right-0px ls-minus-4px text-center d-none d-lg-block">
        <div class="marquees-text alt-font text-nowrap" style="background-image: linear-gradient(to right, #FFE87F, #A88006, #FFE87F, #A88006);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;">We are here to answer any question</div>
    </div>
    <!-- end marquees -->
</section>
<!-- end section -->
@endsection