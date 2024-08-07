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
                            <a href="#" class="nav-link">產品/服務</a>
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
                    <a href="demo-business-blog" class="bg-y-w-y text-uppercase fs-13 ps-25px pe-25px alt-font fw-500 text-base-color lh-40 sm-lh-55 border-radius-100px d-inline-block mb-3 sm-mb-15px" style="color: #000000;">美安系統串接
                    </a>
                    <h3 class="alt-font text-dark-gray fw-600 ls-minus-1px mb-15px">增加其銷售渠道的廣度和多元化</h3>

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
                <p class="mb-6"><span class="alt-font first-letter text-dark-gray">台</span>
                <div>
                灣美安夥伴商店計畫是由美安公司（Market America）推動的⼀項計畫，旨在透過提供⼀個網絡平台，使消費者能在多樣化的商店和品牌中購物，同時賺取獎勵和折扣。
                </div>
                <div>
                我們可以為台灣美安的分銷商或夥伴商店提供網站串接服務，以下是⼀些實際操作基本步驟：
                </div>
<div>1. 需求分析
⾸先，了解美安分銷商或客⼾的具體需求。這可能包括⾃動更新產品⽬錄、處理訂單、追蹤佣⾦等
功能。</div>
<div>
2. 與美安溝通
與美安⽅⾯進⾏溝通，確認技術合作的可⾏性及接⼝(API)的使⽤條件。獲得必要的API⽂檔，並了解
相關的政策和規範。
</div>
<div>
3. 設計和開發
根據需求設計網站架構和⽤⼾界⾯。開發過程中需整合美安提供的API，以實現產品列表、訂單管理
等功能。
</div>
<div>
4. 安全性考量
確保網站在處理個⼈資料和交易時符合資訊安全標準，如使⽤HTTPS、資料加密和安全的⽀付閘
道。
</div>
<div>
5. 測試與部署
進⾏廣泛的測試，以確保網站的所有功能都能正常運作，並且與美安的系統良好整合。測試階段應
涵蓋功能測試、性能測試和安全測試。
</div>
<div>
6. 維護與⽀持
提供維護和技術⽀持服務，以處理任何後續的問題或更新需求。
</div>
<div>
7. 合法性與合規性
確保所有的實施步驟符合當地的法律和規範，特別是有關數據保護和消費者權益的規定。
</div>





                </p>
            </div>
        </div>
    </div>
    </div>
</section>

@endsection