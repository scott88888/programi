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

    .bg-y-w {
        background: linear-gradient(to right, #FFE87F, #A88006);
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
<!-- start section -->
<section class="one-fourth-screen bg-dark-gray ipad-top-space-margin sm-mb-50px" data-parallax-background-ratio="0.5" style="background-image: url(https://via.placeholder.com/1920x1100)"></section>
<!-- end section -->
<!-- start section -->
<section class="p-0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 overlap-section text-center">
                <div class="p-10 box-shadow-extra-large border-radius-4px bg-white text-center">
                    <a href="demo-business-blog" class="bg-y-w-y text-uppercase fs-13 ps-25px pe-25px alt-font fw-500 text-base-color lh-40 sm-lh-55 border-radius-100px d-inline-block mb-3 sm-mb-15px" style="color: #000000;">Business</a>
                    <h3 class="alt-font text-dark-gray fw-600 ls-minus-1px mb-15px">Better to see something once than hear about it a thousand times</h3>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="overlap-section text-center p-0 sm-pt-30px">
    <img class="rounded-circle box-shadow-extra-large w-130px h-130px border border-8 border-color-white" src="https://via.placeholder.com/125x125" alt="">
</section>
<!-- end section -->
<!-- start section -->
<section class="pb-0 pt-3">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9 dropcap-style-01" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <p class="mb-6"><span class="alt-font first-letter text-dark-gray">M</span>lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non , sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <div class="row">
                    <div class="col-md-6 sm-mb-30px">
                        <div class="border-radius-5px border-1 border border-color-light-medium-gray h-100 pt-8 pb-8 ps-10 pe-10 last-paragraph-no-margin">
                            <span class="fw-500 text-dark-gray mb-5px d-inline-block">A balanced diet is a cookie in hand</span>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="border-radius-5px border-1 border border-color-light-medium-gray h-100 pt-8 pb-8 ps-10 pe-10 last-paragraph-no-margin">
                            <span class="fw-500 text-dark-gray mb-5px d-inline-block">Nature is wears the bright colors</span>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- start section -->
<section class="bg-y-w position-relative sm-pb-20px">
    <div class="container">
        <div class="row justify-content-center mb-1">
            <div class="col-lg-7 text-center">
                <span class="bg-y-w-y box-shadow-quadruple-large text-uppercase fs-13 ps-25px pe-25px alt-font fw-600 text-base-color lh-40 sm-lh-55 border-radius-100px d-inline-block mb-25px" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "delay": 500, "staggervalue": 100, "easing": "easeOutQuad" }' style="color: #000000;">You may also like</span>
                <h3 class="alt-font text-dark-gray fw-600 ls-minus-1px" data-anime='{ "el": "lines", "translateY": [30, 0], "opacity": [0,1], "delay": 500, "staggervalue": 100, "easing": "easeOutQuad" }'>Related posts</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12 px-0">
                <ul class="blog-classic blog-wrapper grid grid-4col xl-grid-4col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-double-extra-large" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <li class="grid-sizer"></li>
                    <!-- start blog item -->
                    <li class="grid-item">
                        <div class="card bg-transparent border-0 h-100">
                            <div class="blog-image position-relative overflow-hidden border-radius-4px">
                                <a href="demo-business-blog-single-modern"><img src="https://via.placeholder.com/600x430" alt="" /></a>
                            </div>
                            <div class="card-body px-0 pb-30px pt-30px xs-pb-15px last-paragraph-no-margin">
                                <span class="fs-13 text-uppercase mb-5px d-block"><a href="demo-business-blog" class="text-dark-gray fw-500 categories-text">Business</a><a href="#" class="blog-date">26 August 2023</a></span>
                                <a href="demo-business-blog-single-modern" class="card-title mb-0 fw-500 fs-18 lh-30 text-dark-gray d-inline-block">The best way to predict the secure future is to create it</a>
                            </div>
                        </div>
                    </li>
                    <!-- end blog item -->
                    <!-- start blog item -->
                    <li class="grid-item">
                        <div class="card bg-transparent border-0 h-100">
                            <div class="blog-image position-relative overflow-hidden border-radius-4px">
                                <a href="demo-business-blog-single-modern"><img src="https://via.placeholder.com/600x430" alt="" /></a>
                            </div>
                            <div class="card-body px-0 pb-30px pt-30px xs-pb-15px last-paragraph-no-margin">
                                <span class="fs-13 text-uppercase mb-5px d-block"><a href="demo-business-blog" class="text-dark-gray fw-500 categories-text">Business</a><a href="#" class="blog-date">26 August 2023</a></span>
                                <a href="demo-business-blog-single-modern" class="card-title mb-0 fw-500 fs-18 lh-30 text-dark-gray d-inline-block">Recognizing the need is the primary condition for design</a>
                            </div>
                        </div>
                    </li>
                    <!-- end blog item -->
                    <!-- start blog item -->
                    <li class="grid-item">
                        <div class="card bg-transparent border-0 h-100">
                            <div class="blog-image position-relative overflow-hidden border-radius-4px">
                                <a href="demo-business-blog-single-modern"><img src="https://via.placeholder.com/600x430" alt="" /></a>
                            </div>
                            <div class="card-body px-0 pb-30px pt-30px xs-pb-15px last-paragraph-no-margin">
                                <span class="fs-13 text-uppercase mb-5px d-block"><a href="demo-business-blog" class="text-dark-gray fw-500 categories-text">Business</a><a href="#" class="blog-date">26 August 2023</a></span>
                                <a href="demo-business-blog-single-modern" class="card-title mb-0 fw-500 fs-18 lh-30 text-dark-gray d-inline-block">Make business easy with beautiful application store</a>
                            </div>
                        </div>
                    </li>
                    <!-- end blog item -->
                    <!-- start blog item -->
                    <li class="grid-item">
                        <div class="card bg-transparent border-0 h-100">
                            <div class="blog-image position-relative overflow-hidden border-radius-4px">
                                <a href="demo-business-blog-single-modern"><img src="https://via.placeholder.com/600x430" alt="" /></a>
                            </div>
                            <div class="card-body px-0 pb-30px pt-30px xs-pb-15px last-paragraph-no-margin">
                                <span class="fs-13 text-uppercase mb-5px d-block"><a href="demo-business-blog" class="text-dark-gray fw-500 categories-text">Business</a><a href="#" class="blog-date">26 August 2023</a></span>
                                <a href="demo-business-blog-single-modern" class="card-title mb-0 fw-500 fs-18 lh-30 text-dark-gray d-inline-block">Computers are to design as microwaves are to cooking</a>
                            </div>
                        </div>
                    </li>
                    <!-- end blog item -->
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- end section -->

<!-- start section -->
<section id="comments">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9 mb-3 sm-mb-6">
                <h6 class="alt-font text-dark-gray fw-500 mb-5px">Write a comment</h6>
                <div class="mb-5px">Your email address will not be published. Required fields are marked *</div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <form action="email-templates/contact-form.php" method="post" class="row contact-form-style-02">
                    <div class="col-md-6 mb-30px">
                        <input class="input-name border-radius-4px form-control required" type="text" name="name" placeholder="Enter your name*">
                    </div>
                    <div class="col-md-6 mb-30px">
                        <input class="border-radius-4px form-control required" type="email" name="email" placeholder="Enter your email address*">
                    </div>
                    <div class="col-md-12 mb-30px">
                        <textarea class="border-radius-4px form-control" cols="40" rows="4" name="comment" placeholder="Your message"></textarea>
                    </div>
                    <div class="col-12">
                        <input type="hidden" name="redirect" value="">
                        <button class="btn btn-dark-gray btn-small btn-round-edge submit" type="submit">Post Comment</button>
                        <div class="form-results mt-20px d-none"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
@endsection