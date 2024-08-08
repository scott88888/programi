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
<section class="one-fourth-screen bg-dark-gray ipad-top-space-margin sm-mb-50px" data-parallax-background-ratio="0.5" style="background-image: url({{$img}})"></section>
<!-- end section -->
<!-- start section -->
<section class="p-0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 overlap-section text-center">
                <div class="p-10 box-shadow-extra-large border-radius-4px bg-white text-center">
                    <a href="demo-business-blog" class="bg-y-w-y text-uppercase fs-13 ps-25px pe-25px alt-font fw-500 text-base-color lh-40 sm-lh-55 border-radius-100px d-inline-block mb-3 sm-mb-15px" style="color: #000000;">{{ $title1 }}
                    </a>
                    <h3 class="alt-font text-dark-gray fw-600 ls-minus-1px mb-15px">{{ $title2 }}</h3>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="overlap-section text-center p-0 sm-pt-30px">
    <img class="rounded-circle box-shadow-extra-large w-130px h-130px border border-8 border-color-white" src="{{ $imgRound }}" alt="">
</section>
<!-- end section -->
<!-- start section -->
<section class="pb-0 pt-3">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9 dropcap-style-01" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <p class="mb-6"><span class="alt-font first-letter text-dark-gray">{{ $firstword }}</span>
                <div>
                    {{ $conect1 }}
                </div>
                <div>
                    <p>{{ $conect2 }}</p>
                </div>
                @foreach($steps as $step)
                <div class="step">
                    <div>{!! $step['title'] !!}</div>
                    <div>{!! e($step['content']) !!}</div>
                    <!-- <div>{!! nl2br(e($step['content'])) !!}</div> -->
                </div>
                @endforeach
                </p>
            </div>
        </div>
    </div>
    </div>
</section>

@endsection