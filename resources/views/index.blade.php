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
                <div class="alt-font fs-110 md-fs-100 fw-300 lh-85 ls-minus-2px mb-15px fancy-text-style-4" data-anime='{ "el": "childs", "opacity": [0, 1], "rotateY": [-90, 0], "rotateZ": [-10, 0], "translateY": [80, 0], "translateZ": [50, 0], "staggervalue": 200, "duration": 900, "easing": "easeOutCirc" }'>
                    <span class="d-inline-block">Organic</span>
                    <span class="fw-700 fs-150 md-fs-120 ls-minus-5px d-inline-block" data-fancy-text='{ "effect": "rubber-band", "string": ["search", "results"] }'></span>
                </div>
                <div data-anime='{ "opacity": [0, 1], "rotateY": [-90, 0], "rotateZ": [-10, 0], "translateY": [80, 0], "translateZ": [50, 0], "duration": 900, "delay": 500, "easing": "easeOutCirc" }'>
                    <span class="alt-font fs-20 fw-500 w-70 lg-w-85 sm-w-100 mb-40px md-mb-30px d-block opacity-7">We
                        offer flexible pricing plans so that our clients can take advantage of services.</span>
                </div>
                <a href="index" class="btn btn-extra-large btn-rounded with-rounded btn-gradient-new-color btn-box-shadow box-shadow-extra-large" data-anime='{ "opacity": [0, 1], "rotateY": [-90, 0], "rotateZ": [-10, 0], "translateY": [80, 0], "translateZ": [50, 0], "duration": 900, "delay": 800, "easing": "easeOutCirc" }'>Get
                    free analysis<span class="bg-white text-base-color"><i class="fa-solid fa-arrow-right"></i></span></a>
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
                <h2 class="fw-600 text-dark-gray alt-font ls-minus-1px">Social marketing services</h2>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-xl-4 row-cols-lg-3 row-cols-sm-2 justify-content-center" data-anime='{ "el": "childs", "rotateZ": [5, 0], "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
            <!-- start features box item -->
            <div class="col icon-with-text-style-03 lg-mb-50px xs-mb-40px">
                <div class="feature-box ps-7 pe-7 sm-ps-4 sm-pe-4">
                    <div class="feature-box-icon mb-30px sm-mb-20px">
                        <svg class="svg-icon" version="1.0" xmlns="http://www.w3.org/2000/svg" width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">

                            <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">
                                <path d="M303 4825 c-154 -42 -261 -155 -293 -311 -7 -33 -10 -293 -8 -765 l3
                           -714 23 -58 c44 -108 121 -184 233 -230 54 -22 56 -22 835 -25 l782 -3 -24
                           -73 c-91 -287 -60 -653 78 -931 131 -263 320 -455 580 -590 359 -186 788 -191
                           1156 -12 l84 40 416 -415 c229 -228 433 -424 452 -436 59 -35 150 -48 222 -33
                           80 16 124 39 177 92 53 53 76 97 92 177 15 73 2 163 -33 222 -12 19 -105 119
                           -207 222 -142 144 -193 189 -217 194 -60 11 -113 -36 -114 -100 0 -37 9 -47
                           184 -225 154 -156 185 -192 191 -224 10 -51 -1 -85 -39 -123 -38 -38 -72 -49
                           -124 -39 -32 6 -87 57 -435 404 l-398 397 93 94 c245 248 366 522 384 870 7
                           128 -12 293 -46 403 -11 34 -20 67 -20 74 0 8 65 12 237 15 220 3 242 6 296
                           27 110 44 195 132 234 245 17 47 18 105 18 791 l0 740 -23 58 c-45 111 -133
                           195 -246 234 -48 17 -136 18 -1629 18 l-1579 0 -29 -33 c-38 -42 -38 -82 0
                           -124 l29 -33 1574 -5 1574 -5 37 -25 c21 -14 50 -43 65 -64 l27 -39 0 -727 0
                           -727 -27 -39 c-15 -21 -44 -50 -65 -64 -36 -25 -37 -25 -313 -28 l-276 -3 -59
                           88 c-78 115 -204 245 -313 323 -81 58 -291 170 -319 170 -7 0 -13 3 -12 8 0 4
                           33 75 73 157 l72 150 93 -177 c93 -179 123 -218 168 -218 56 0 81 26 139 148
                           229 475 233 484 196 528 -38 47 -93 57 -136 23 -16 -13 -58 -87 -112 -197
                           l-85 -177 -91 175 c-49 96 -98 183 -108 193 -9 10 -35 21 -57 24 -61 8 -87
                           -24 -179 -219 -44 -92 -81 -167 -84 -167 -3 -1 -45 79 -95 176 -67 132 -98
                           181 -120 195 -63 40 -145 -5 -145 -79 0 -27 30 -94 110 -249 61 -118 110 -215
                           110 -216 0 -2 -82 -4 -183 -4 -142 -1 -200 -6 -264 -21 -46 -11 -83 -18 -83
                           -17 0 2 50 108 112 236 122 255 131 288 89 332 -44 47 -114 43 -151 -8 -8 -12
                           -49 -92 -90 -178 -42 -87 -79 -160 -82 -163 -3 -3 -47 75 -97 173 -95 183
                           -118 212 -171 212 -54 0 -76 -28 -165 -214 l-87 -180 -30 55 c-16 30 -56 106
                           -89 169 -32 63 -64 122 -71 131 -38 46 -107 48 -149 3 -45 -48 -36 -74 120
                           -375 147 -282 166 -309 220 -309 57 0 72 19 164 208 49 101 90 182 93 180 2
                           -2 44 -82 93 -177 l89 -173 -30 -16 c-218 -120 -370 -254 -494 -437 l-58 -85
                           -816 2 -817 3 -39 27 c-21 15 -50 44 -64 65 l-25 37 0 726 0 726 25 37 c14 21
                           43 50 64 65 l39 27 259 5 260 5 29 33 c38 42 38 82 0 124 l-29 33 -249 2
                           c-190 2 -260 -1 -300 -12z m3022 -1470 c375 -79 689 -356 811 -713 174 -509
                           -32 -1053 -501 -1321 -218 -125 -507 -169 -760 -116 -374 78 -689 356 -811
                           713 -221 647 182 1328 856 1446 106 19 295 15 405 -9z" />
                                <path d="M2990 3154 c-218 -40 -375 -118 -510 -254 -115 -114 -194 -256 -236
                           -420 -26 -104 -26 -296 0 -400 84 -331 325 -572 656 -656 104 -26 296 -26 400
                           0 331 84 572 325 656 656 26 104 26 296 0 400 -83 326 -317 564 -641 652 -68
                           18 -271 32 -325 22z m242 -209 c245 -51 436 -223 516 -462 22 -67 26 -95 26
                           -203 0 -108 -4 -136 -26 -203 -99 -298 -378 -492 -683 -474 -349 21 -621 293
                           -642 642 -25 436 384 791 809 700z" />
                                <path d="M3065 2721 c-31 -13 -55 -45 -61 -83 -8 -46 32 -95 84 -103 20 -3 60
                           -12 89 -21 94 -27 173 -132 173 -231 0 -44 43 -92 91 -99 28 -5 41 -1 67 21
                           38 32 47 72 33 151 -34 184 -178 329 -360 364 -63 12 -88 12 -116 1z" />
                                <path d="M1224 4831 c-32 -14 -64 -60 -64 -92 0 -17 11 -41 29 -61 60 -67 166
                           -28 166 62 0 66 -72 116 -131 91z" />
                                <path d="M480 4125 c-35 -19 -54 -57 -47 -97 3 -19 68 -155 145 -303 146 -281
                           164 -305 224 -305 49 0 80 41 163 219 44 94 82 170 85 170 3 1 45 -78 95 -175
                           49 -96 97 -182 107 -191 9 -8 34 -17 55 -20 32 -4 45 -1 66 18 40 35 287 552
                           287 600 0 75 -73 119 -140 84 -27 -14 -45 -43 -119 -198 l-87 -180 -51 94
                           c-28 52 -69 131 -91 175 -50 100 -82 128 -135 121 -21 -3 -45 -11 -54 -19 -9
                           -7 -55 -94 -103 -193 l-86 -180 -93 177 c-51 98 -103 186 -118 198 -30 23 -67
                           25 -103 5z" />
                                <path d="M4359 1402 c-47 -23 -65 -63 -50 -112 26 -87 138 -95 180 -13 18 36
                           13 71 -16 102 -36 38 -70 45 -114 23z" />
                            </g>
                        </svg>
                    </div>
                    <div class="feature-box-content last-paragraph-no-margin">
                        <span class="d-inline-block alt-font fw-700 text-dark-gray mb-5px fs-20">Real time
                            analytics</span>
                        <p>We deliver email marketing campaigns to your audience.</p>
                    </div>
                </div>
            </div>
            <!-- end features box item -->
            <!-- start features box item -->
            <div class="col icon-with-text-style-03 lg-mb-50px xs-mb-40px">
                <div class="feature-box ps-7 pe-7 sm-ps-4 sm-pe-4">
                    <div class="feature-box-icon mb-30px sm-mb-20px">
                        <svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 582 500">
                            <g id="demo-seo-agency-icon-01" transform="translate(0 454.838)">
                                <path id="Path_1" data-name="Path 1" d="M261.856-453.772c-22.721,2.954-48.4,10.679-70.548,21.471-16.473,7.952-20.9,11.36-20.9,16.018,0,3.749,4.317,8.975,7.5,8.975,1.022,0,7.952-3.067,15.45-6.93,13.064-6.589,29.764-13.519,36.58-15.109,3.067-.8,2.84-.341-3.295,6.362-11.36,12.5-26.129,36.694-33.967,55.666l-1.7,4.317h-30.1c-16.7,0-30.219-.341-30.219-.682,0-.454,5.68-6.475,12.5-13.519,7.043-7.157,12.5-13.746,12.5-15,0-5.112-6.7-10.224-11.36-8.52-3.295,1.25-21.812,19.653-29.764,29.651-15,18.745-27.151,39.761-34.876,60.437l-4.544,11.815-35.331.568-35.444.568-2.158,2.726c-2.045,2.5-2.158,5.339-2.158,66s.114,63.5,2.158,66l2.158,2.727,35.444.568,35.444.568L78.5-150c16.813,46.123,52.485,89.065,95.881,115.308A230.326,230.326,0,0,0,265.151-3.9c14.428,1.7,51.349.682,64.3-1.7,48.963-9.2,89.065-30.446,122.692-64.981,23.97-24.652,40.329-50.1,51.122-79.977l3.181-8.52,35.444-.568,35.444-.568,2.158-2.727c2.045-2.5,2.158-5.339,2.158-66.231v-63.5l-2.84-2.726c-2.613-2.727-3.408-2.84-16.927-2.84-7.725,0-15,.341-16.018.682-2.954,1.136-5.112,7.157-3.862,10.565,1.818,4.658,4.317,5.68,13.86,5.794h8.747v104.515H460.095V-281.208H486.11c24.538,0,26.129-.114,28.969-2.386,6.021-4.771,3.067-13.292-5.112-14.655-3.181-.568-3.863-1.363-6.7-9.088-10.679-29.537-27.151-55.211-50.554-79.409-36.694-37.83-82.363-60.551-134.62-67.026C306.843-455.249,273.217-455.136,261.856-453.772Zm19.881,53.28V-363H210.053l.682-2.613c1.363-4.544,12.042-23.857,18.063-32.6,7.384-10.679,22.153-25.561,30.787-30.673,5-2.954,18.972-8.747,21.926-9.088C281.623-437.982,281.737-421.168,281.737-400.492Zm35.217-31.241c12.724,6.475,26.47,19.54,37.262,35.444,5,7.384,15.45,26.7,16.7,30.673L371.6-363H299.914v-74.865l6.021,1.818A85.39,85.39,0,0,1,316.954-431.733Zm47.714,7.043c19.313,7.043,41.465,19.881,58.165,33.4,8.747,7.157,22.948,20.9,26.015,25.106L451.12-363H390.683l-1.7-4.317c-7.952-18.972-22.607-43.169-34.081-55.779C347.514-431.279,347.059-431.165,364.668-424.69Zm-180.63,79.636c0,.568-2.045,8.861-4.431,18.517-2.5,9.656-4.771,19.881-5.226,22.834l-.8,5.453H133.371c-22.153,0-40.216-.114-40.216-.341,0-2.954,14.2-32.263,19.994-41.465l3.863-5.907h33.513C168.929-345.963,184.038-345.508,184.038-345.054Zm97.7,22.948v23.857H236.3c-24.993,0-45.441-.341-45.441-.682,0-4.2,10.224-42.942,12.156-46.237.227-.454,18.063-.8,39.648-.8h39.08ZM380.8-339.146c1.931,5.567,7.5,27.719,9.429,37.148l.8,3.749h-91.11v-47.714l39.42.227,39.307.341Zm87.816-.568c6.021,9.429,19.881,38.057,19.881,41.124,0,.227-18.063.341-40.216.341H408.064l-.8-5.453c-.454-2.954-2.727-13.178-5.226-22.834-2.386-9.656-4.431-17.949-4.431-18.517,0-.454,15.109-.909,33.513-.909h33.4ZM443.054-228.951v52.258H291.28c-94.973,0-152.456.454-153.706,1.136a8.869,8.869,0,0,0-3.408,4.431c-1.136,2.727-1.136,3.863.341,6.7a10.864,10.864,0,0,0,3.522,4.09c1.022.341,9.429.682,18.745.682h16.813l.8,5.339c.454,3.067,2.727,13.292,5.226,22.948,2.386,9.656,4.431,17.949,4.431,18.517,0,.454-15.109.909-33.513.909h-33.4l-4.09-6.248c-6.021-9.429-19.881-38.057-19.881-41.125,0-.227,2.613-.341,5.907-.341,4.431,0,6.475-.568,8.52-2.5a7.9,7.9,0,0,0-.341-12.156c-2.954-2.272-4.2-2.386-46.577-2.386H17.041V-281.208H443.054ZM281.737-135.8v23.857l-39.42-.227-39.307-.341-2.158-6.248c-1.931-5.567-7.5-27.719-9.429-37.262l-.8-3.635h91.11Zm108.491-20.221c-1.931,9.543-7.5,31.7-9.429,37.262l-2.158,6.248-39.307.341-39.42.227v-47.714h91.11Zm98.267-3.295c0,3.067-13.86,31.7-19.881,41.125l-4.09,6.248h-33.4c-18.4,0-33.513-.454-33.513-.909,0-.568,2.045-8.861,4.431-18.517,2.5-9.656,4.771-19.881,5.226-22.948l.8-5.339H448.28C470.433-159.653,488.5-159.539,488.5-159.312ZM192.672-90.7c7.839,18.972,22.607,43.283,33.967,55.666,3.522,3.976,6.135,7.157,5.907,7.157-.341,0-5.112-1.59-10.679-3.522a215.342,215.342,0,0,1-58.051-31.355c-9.543-7.271-27.492-23.857-31.014-28.969L130.531-94.9h60.437Zm89.065,33.172v37.489l-5.907-1.7c-17.495-5.226-34.763-19.653-49.418-41.352-4.2-6.135-14.541-25.674-15.677-29.31l-.682-2.5h71.684ZM370.916-92.4c-1.136,3.635-11.474,23.175-15.677,29.31-14.655,21.7-31.923,36.126-49.3,41.352l-6.021,1.7V-94.9H371.6Zm76.91,1.7c-17.495,21.812-53.167,46.464-83.158,57.483-17.609,6.475-17.154,6.589-9.77-1.59,11.474-12.61,26.129-36.808,34.081-55.893l1.7-4.2h60.551Z" transform="translate(0 0)" />
                                <path id="Path_2" data-name="Path 2" d="M445.113-284.022a34.251,34.251,0,0,0-17.041,11.133c-10.111,13.292-6.135,33.286,8.407,41.92,7.611,4.658,13.746,5.567,22.266,3.294l6.7-1.7,5.453,5.112c2.954,2.84,6.589,5.112,7.839,5.112,1.363,0,3.976-1.59,5.907-3.408,4.317-4.431,3.749-7.839-2.613-14.314l-4.544-4.544,1.818-6.816c2.158-8.52.8-16.359-4.317-23.97C468.743-281.181,455.224-286.634,445.113-284.022ZM456.587-266.3A11.785,11.785,0,0,1,460-247.555c-6.135,6.362-15.564,4.771-19.426-3.181a11.362,11.362,0,0,1,5.226-15.223C450.68-268.458,451.816-268.458,456.587-266.3Z" transform="translate(57.469 23.148)" />
                            </g>
                        </svg>
                    </div>
                    <div class="feature-box-content last-paragraph-no-margin">
                        <span class="d-inline-block alt-font fw-700 text-dark-gray mb-5px fs-20">Keywords
                            analytics</span>
                        <p>We also help our clients with social media strategy.</p>
                    </div>
                </div>
            </div>
            <!-- end features box item -->
            <!-- start features box item -->
            <div class="col icon-with-text-style-03 xs-mb-40px">
                <div class="feature-box ps-7 pe-7 sm-ps-4 sm-pe-4">
                    <div class="feature-box-icon mb-30px sm-mb-20px">
                        <svg class="svg-icon" version="1.0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 582 500" preserveAspectRatio="xMidYMid meet">
                            <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">
                                <path d="M3991 5106 c-53 -29 -50 47 -51 -1512 l0 -1451 -42 -7 c-24 -3 -53
                                   -8 -65 -12 -19 -5 -26 3 -54 58 -39 77 -98 166 -156 235 l-43 51 0 821 c0 614
                                   -3 827 -12 846 -24 53 -38 55 -408 55 -370 0 -384 -2 -408 -55 -9 -19 -12
                                   -180 -12 -619 l0 -592 -72 9 c-40 4 -121 7 -180 5 l-108 -3 0 853 c0 926 2
                                   894 -55 920 -18 9 -124 12 -366 12 -369 0 -383 -2 -407 -55 -9 -20 -12 -281
                                   -12 -1067 l0 -1041 -64 -71 c-98 -110 -173 -220 -237 -351 l-59 -119 0 756 c0
                                   566 -3 764 -12 783 -24 53 -38 55 -407 55 -242 0 -348 -3 -366 -12 -57 -26
                                   -55 12 -55 -980 l0 -913 -65 -68 c-121 -126 -206 -279 -247 -443 -31 -126 -31
                                   -332 0 -458 42 -169 132 -328 256 -452 122 -121 279 -211 447 -256 82 -21 101
                                   -22 718 -25 475 -3 642 -1 663 8 31 13 58 54 58 89 0 34 -27 76 -57 88 -19 8
                                   -221 12 -658 14 l-630 3 -91 32 c-244 85 -414 254 -495 493 -31 88 -33 105
                                   -33 230 -1 155 16 228 85 360 97 187 280 332 489 387 92 25 271 24 373 -1 72
                                   -18 80 -18 111 -3 36 17 40 25 90 187 130 419 500 743 951 831 103 20 349 18
                                   453 -5 387 -83 696 -324 868 -676 80 -163 91 -169 222 -124 232 80 479 1 608
                                   -193 75 -113 108 -257 85 -376 -16 -88 -1 -115 91 -163 216 -113 327 -351 273
                                   -583 -44 -187 -199 -342 -386 -386 -54 -12 -181 -15 -817 -15 -817 0 -794 2
                                   -820 -55 -24 -53 -3 -114 46 -134 21 -9 228 -11 818 -9 l789 3 80 27 c116 40
                                   199 92 290 183 91 91 144 175 182 290 23 71 26 96 26 215 1 118 -3 145 -25
                                   212 -49 147 -153 292 -265 369 l-43 30 0 1854 c0 1416 -3 1860 -12 1880 -24
                                   53 -38 55 -410 55 -265 -1 -348 -4 -367 -14z m589 -1698 l0 -1512 -47 46 c-97
                                   94 -241 172 -355 192 l-38 7 0 1389 0 1390 220 0 220 0 0 -1512z m-2400 302
                                   c0 -640 -3 -811 -12 -814 -165 -50 -272 -94 -375 -155 l-53 -31 0 905 0 905
                                   220 0 220 0 0 -810z m1200 -385 c0 -366 -2 -665 -4 -665 -3 0 -47 27 -98 60
                                   -75 49 -227 121 -320 153 -17 6 -18 42 -18 562 l0 555 220 0 220 0 0 -665z
                                   m-2400 -654 l0 -738 -86 -7 c-97 -8 -205 -34 -294 -69 l-60 -25 0 789 0 789
                                   220 0 220 0 0 -739z" />
                                <path d="M1510 1566 c-217 -58 -292 -320 -131 -457 24 -21 90 -54 174 -87 74
                                   -30 148 -62 165 -73 56 -33 55 -101 -1 -141 -26 -19 -45 -23 -102 -23 -77 1
                                   -148 29 -194 79 -32 34 -79 42 -119 22 -39 -20 -52 -44 -52 -92 0 -32 7 -45
                                   50 -85 200 -193 539 -159 641 64 44 99 14 234 -69 309 -49 44 -78 59 -241 124
                                   -135 53 -154 71 -133 120 33 70 165 70 269 0 62 -43 138 -27 163 33 25 62 -9
                                   116 -107 165 -106 53 -218 68 -313 42z" />
                                <path d="M2223 1566 c-17 -8 -36 -23 -42 -35 -7 -13 -11 -163 -11 -456 l0
                                   -436 24 -24 c33 -33 66 -37 263 -33 155 3 174 5 199 24 52 38 56 103 9 150
                                   -23 23 -30 24 -160 24 l-135 0 0 99 0 99 126 4 c124 3 126 3 150 31 16 19 24
                                   40 24 67 0 27 -8 48 -24 67 -24 28 -26 28 -150 31 l-126 4 0 99 0 99 135 0
                                   c130 0 137 1 160 24 47 47 43 112 -9 150 -25 19 -43 21 -214 23 -144 2 -194 0
                                   -219 -11z" />
                                <path d="M3256 1564 c-223 -54 -377 -250 -377 -481 -1 -142 47 -260 147 -357
                                   261 -257 698 -155 820 193 33 93 33 229 0 322 -86 245 -339 384 -590 323z
                                   m250 -217 c53 -27 111 -84 141 -139 14 -25 18 -55 18 -128 0 -106 -9 -131 -72
                                   -201 -77 -85 -199 -118 -308 -84 -75 24 -154 95 -185 166 -30 71 -30 167 0
                                   238 29 66 114 145 178 166 68 22 165 14 228 -18z" />
                                <path d="M2471 186 c-87 -48 -50 -186 49 -186 51 0 100 49 100 99 0 75 -83
                                   124 -149 87z" />
                            </g>
                        </svg>
                    </div>
                    <div class="feature-box-content last-paragraph-no-margin">
                        <span class="d-inline-block alt-font fw-700 text-dark-gray mb-5px fs-20">SEO
                            optimization</span>
                        <p>We believe in challenges and so we have made challenges.</p>
                    </div>
                </div>
            </div>
            <!-- end features box item -->
            <!-- start features box item -->
            <div class="col icon-with-text-style-03">
                <div class="feature-box ps-7 pe-7 sm-ps-4 sm-pe-4">
                    <div class="feature-box-icon mb-30px sm-mb-20px">
                        <svg class="svg-icon" version="1.0" xmlns="http://www.w3.org/2000/svg" width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">

                            <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">
                                <path d="M4833 5105 c-735 -85 -1460 -353 -1968 -730 -164 -122 -351 -296
                           -488 -455 l-48 -55 -57 31 c-150 83 -358 115 -517 79 -102 -22 -233 -90 -325
                           -168 -243 -205 -435 -608 -466 -979 -8 -87 4 -128 42 -153 44 -28 84 -19 149
                           34 125 101 238 147 385 157 88 6 136 -4 146 -30 3 -8 -17 -75 -44 -148 -100
                           -269 -129 -398 -110 -484 7 -31 5 -33 -76 -82 -110 -67 -221 -173 -272 -258
                           -106 -179 -213 -559 -218 -776 -1 -61 2 -70 27 -95 25 -25 34 -28 95 -27 217
                           5 597 112 776 218 86 51 191 162 258 273 29 47 57 82 64 79 46 -18 108 -16
                           185 4 80 20 261 80 398 131 l63 24 20 -25 c19 -23 20 -34 14 -120 -9 -156 -56
                           -271 -157 -393 -54 -64 -63 -107 -34 -151 26 -39 66 -50 156 -42 367 31 774
                           225 976 466 78 94 146 224 168 325 36 159 4 367 -79 517 l-31 57 55 48 c433
                           373 751 862 963 1480 111 322 187 663 222 991 21 196 21 198 -19 238 -39 39
                           -60 41 -253 19z m77 -204 c0 -38 -36 -272 -61 -396 -27 -137 -106 -454 -116
                           -465 -4 -4 -693 681 -693 690 0 19 517 136 720 164 131 17 150 18 150 7z
                           m-667 -659 l418 -418 -40 -102 c-128 -321 -301 -617 -505 -862 -174 -210 -453
                           -454 -728 -637 -164 -110 -477 -283 -510 -283 -17 0 -938 921 -938 938 0 33
                           173 346 283 510 344 517 735 868 1244 1118 110 54 335 152 353 154 3 0 193
                           -188 423 -418z m-2187 -473 c85 -26 147 -57 139 -69 -3 -5 -40 -58 -81 -117
                           -100 -143 -166 -251 -254 -414 -40 -74 -73 -135 -75 -137 -1 -1 -15 4 -31 13
                           -44 21 -177 29 -279 16 -75 -10 -188 -42 -267 -76 -26 -10 -23 9 17 133 111
                           342 328 597 565 661 65 17 193 13 266 -10z m209 -1509 c225 -225 407 -411 405
                           -413 -8 -7 -300 -103 -356 -117 -48 -12 -54 -12 -85 8 -56 35 -497 484 -504
                           514 -4 15 -2 44 5 65 39 129 115 353 119 353 4 0 190 -184 416 -410z m1464
                           -97 c55 -109 77 -267 51 -368 -63 -240 -316 -458 -662 -570 -124 -40 -143 -43
                           -133 -17 61 143 89 285 83 418 -3 56 -11 104 -22 124 -9 18 -15 34 -14 35 2 2
                           63 35 137 75 166 89 272 154 421 259 63 44 116 81 117 81 2 0 11 -17 22 -37z
                           m-1892 -325 c90 -90 163 -169 163 -176 0 -26 -62 -130 -115 -195 -91 -110
                           -218 -178 -445 -237 -118 -31 -249 -55 -257 -47 -8 8 16 139 47 257 59 227
                           128 355 237 445 66 54 167 114 193 115 8 0 88 -73 177 -162z" />
                                <path d="M3550 4100 c-255 -30 -440 -239 -440 -496 0 -277 217 -494 494 -494
                           280 0 497 215 497 495 0 143 -51 263 -151 359 -109 104 -252 153 -400 136z
                           m150 -212 c168 -51 250 -251 170 -414 -34 -69 -80 -112 -156 -145 -39 -18 -61
                           -21 -123 -17 -116 7 -200 60 -253 161 -31 57 -33 203 -4 257 77 144 215 203
                           366 158z" />
                                <path d="M2974 3112 c-56 -41 -163 -158 -170 -187 -18 -73 48 -139 121 -121
                           29 7 146 114 187 170 38 53 37 89 -6 132 -43 43 -79 44 -132 6z" />
                                <path d="M2593 2712 c-38 -6 -73 -50 -73 -94 0 -85 104 -132 163 -73 70 71 11
                           182 -90 167z" />
                                <path d="M708 2262 c-162 -161 -168 -169 -168 -207 0 -22 7 -50 15 -61 20 -29
                           69 -48 102 -39 34 8 336 305 353 346 9 21 9 36 0 63 -14 43 -48 66 -96 66 -35
                           0 -49 -11 -206 -168z" />
                                <path d="M755 1722 c-32 -6 -743 -721 -751 -755 -17 -80 69 -142 144 -103 42
                           22 709 697 722 730 12 32 -1 86 -25 106 -18 15 -66 27 -90 22z" />
                                <path d="M2285 1001 c-53 -33 -323 -314 -330 -344 -9 -33 10 -82 39 -102 11
                           -8 39 -15 61 -15 38 0 46 6 207 168 157 157 168 171 168 206 0 47 -23 82 -62
                           95 -41 15 -48 14 -83 -8z" />
                                <path d="M785 865 c-37 -20 -701 -680 -721 -717 -41 -77 22 -161 108 -143 26
                           5 105 79 389 363 235 235 358 366 361 382 15 86 -65 152 -137 115z" />
                                <path d="M1585 865 c-37 -20 -701 -680 -721 -717 -41 -77 22 -161 108 -143 26
                           5 105 79 389 363 235 235 358 366 361 382 15 86 -65 152 -137 115z" />
                            </g>
                        </svg>
                    </div>
                    <div class="feature-box-content last-paragraph-no-margin">
                        <span class="d-inline-block alt-font fw-700 text-dark-gray mb-5px fs-20">Boost
                            performance</span>
                        <p>Team delivers incomparable quality with designing.</p>
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
                        <h2 class="mb-0">99<sup class="fs-30">%</sup></h2>
                    </div>
                    <div>
                        <span class="fs-18 lh-26 d-block">Track and analyze <br />business reports.</span>
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
                        <span class="d-block fs-18 lh-20">Best rated agency</span>
                    </div>
                </div>
            </div>
            <!-- end content box item -->
            <!-- start content box item -->
            <div class="col alt-font text-dark-gray fw-600">
                <div class="d-flex flex-column flex-md-row justify-content-center align-items-center g-0 text-center text-md-start">
                    <div class="flex-shrink-0 me-15px sm-me-0">
                        <h2 class="mb-0">98<sup class="fs-30">%</sup></h2>
                    </div>
                    <div>
                        <span class="fs-18 lh-26 d-block">Genuine repeated <br />happy customers.</span>
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
                <span class="fs-20" style="color: #d0b23b;">Corporate service</span>
                <h3 class="alt-font fw-500 text-dark-gray ls-minus-1px">Legal <span class="fw-700 text-decoration-line-bottom-medium">practice areas</span></h3>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-xl-4 row-cols-lg-3 row-cols-md-2 justify-content-center" data-anime='{ "el": "childs", "rotateZ": [5, 0], "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
            <!-- start rotate box item -->
            <div class="col rotate-box-style-02 mb-30px">
                <div class="w-100 min-h-300px text-center rotate-box to-left">
                    <!-- start front side -->
                    <div class="w-100 h-100 overflow-hidden z-index-1 front-side bg-white border-radius-6px box-shadow-quadruple-large">
                        <div class="rotate-content-front z-index-2 p-30px">
                            <img class="mb-25px h-70px" src="images/demo-lawyer-practice-areas-icon-01black.svg" alt="">
                            <div class="fs-19 text-dark-gray alt-font fw-600 mb-5px">Human rights law</div>
                            <span>Quis autem velo eum iure suam nihil molestiae.</span>
                        </div>
                    </div>
                    <!-- end front side -->
                    <!-- start back side -->
                    <div class="w-100 h-100 overflow-hidden back-side cover-background border-radius-6px box-shadow-quadruple-large" style="background-image:url('https://via.placeholder.com/600x520')">
                        <div class="opacity-light bg-charcoal-blue"></div>
                        <div class="d-flex flex-column align-items-center justify-content-center h-100 z-index-2 rotate-content-back p-30px">
                            <span class="text-white alt-font fw-500 fs-19 mb-5px">Human rights law</span>
                            <p>Quis autem velo eum iure suam nihil molestiae.</p>
                            <a href="#" class="btn btn-small btn-rounded btn-white btn-box-shadow">Learn more</a>
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
                            <img class="mb-25px h-70px" src="images/demo-lawyer-practice-areas-icon-02black.svg" alt="">
                            <div class="fs-19 text-dark-gray alt-font fw-600 mb-5px">Motor vehicles law</div>
                            <span>Quis autem velo eum iure suam nihil molestiae.</span>
                        </div>
                    </div>
                    <!-- end front side -->
                    <!-- start back side -->
                    <div class="w-100 h-100 overflow-hidden back-side cover-background border-radius-6px box-shadow-quadruple-large" style="background-image:url('https://via.placeholder.com/600x520')">
                        <div class="opacity-light bg-charcoal-blue"></div>
                        <div class="d-flex flex-column align-items-center justify-content-center h-100 z-index-2 rotate-content-back p-30px">
                            <span class="text-white alt-font fw-500 fs-19 mb-5px">Motor vehicles law</span>
                            <p>Quis autem velo eum iure suam nihil molestiae.</p>
                            <a href="#" class="btn btn-small btn-rounded btn-white btn-box-shadow">Learn more</a>
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
                            <img class="mb-25px h-70px" src="images/demo-lawyer-practice-areas-icon-03black.svg" alt="">
                            <div class="fs-19 text-dark-gray alt-font fw-600 mb-5px">Criminal law</div>
                            <span>Quis autem velo eum iure suam nihil molestiae.</span>
                        </div>
                    </div>
                    <!-- end front side -->
                    <!-- start back side -->
                    <div class="w-100 h-100 overflow-hidden back-side cover-background border-radius-6px box-shadow-quadruple-large" style="background-image:url('https://via.placeholder.com/600x520')">
                        <div class="opacity-light bg-charcoal-blue"></div>
                        <div class="d-flex flex-column align-items-center justify-content-center h-100 z-index-2 rotate-content-back p-30px">
                            <span class="text-white alt-font fw-500 fs-19 mb-5px">Criminal law</span>
                            <p>Quis autem velo eum iure suam nihil molestiae.</p>
                            <a href="#" class="btn btn-small btn-rounded btn-white btn-box-shadow">Learn more</a>
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
                            <img class="mb-25px h-70px" src="images/demo-lawyer-practice-areas-icon-04black.svg" alt="">
                            <div class="fs-19 text-dark-gray alt-font fw-600 mb-5px">Employment law</div>
                            <span>Quis autem velo eum iure suam nihil molestiae.</span>
                        </div>
                    </div>
                    <!-- end front side -->
                    <!-- start back side -->
                    <div class="w-100 h-100 overflow-hidden back-side cover-background border-radius-6px box-shadow-quadruple-large" style="background-image:url('https://via.placeholder.com/600x520')">
                        <div class="opacity-light bg-charcoal-blue"></div>
                        <div class="d-flex flex-column align-items-center justify-content-center h-100 z-index-2 rotate-content-back p-30px">
                            <span class="text-white alt-font fw-500 fs-19 mb-5px">Employment law</span>
                            <p>Quis autem velo eum iure suam nihil molestiae.</p>
                            <a href="#" class="btn btn-small btn-rounded btn-white btn-box-shadow">Learn more</a>
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
                            <img class="mb-25px h-70px" src="images/demo-lawyer-practice-areas-icon-05black.svg" alt="">
                            <div class="fs-19 text-dark-gray alt-font fw-600 mb-5px">Property law</div>
                            <span>Quis autem velo eum iure suam nihil molestiae.</span>
                        </div>
                    </div>
                    <!-- end front side -->
                    <!-- start back side -->
                    <div class="w-100 h-100 overflow-hidden back-side cover-background border-radius-6px box-shadow-quadruple-large" style="background-image:url('https://via.placeholder.com/600x520')">
                        <div class="opacity-light bg-charcoal-blue"></div>
                        <div class="d-flex flex-column align-items-center justify-content-center h-100 z-index-2 rotate-content-back p-30px">
                            <span class="text-white alt-font fw-500 fs-19 mb-5px">Property law</span>
                            <p>Quis autem velo eum iure suam nihil molestiae.</p>
                            <a href="#" class="btn btn-small btn-rounded btn-white btn-box-shadow">Learn more</a>
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
                            <img class="mb-25px h-70px" src="images/demo-lawyer-practice-areas-icon-06black.svg" alt="">
                            <div class="fs-19 text-dark-gray alt-font fw-600 mb-5px">Securities law</div>
                            <span>Quis autem velo eum iure suam nihil molestiae.</span>
                        </div>
                    </div>
                    <!-- end front side -->
                    <!-- start back side -->
                    <div class="w-100 h-100 overflow-hidden back-side cover-background border-radius-6px box-shadow-quadruple-large" style="background-image:url('https://via.placeholder.com/600x520')">
                        <div class="opacity-light bg-charcoal-blue"></div>
                        <div class="d-flex flex-column align-items-center justify-content-center h-100 z-index-2 rotate-content-back p-30px">
                            <span class="text-white alt-font fw-500 fs-19 mb-5px">Securities law</span>
                            <p>Quis autem velo eum iure suam nihil molestiae.</p>
                            <a href="#" class="btn btn-small btn-rounded btn-white btn-box-shadow">Learn more</a>
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
                            <img class="mb-25px h-70px" src="images/demo-lawyer-practice-areas-icon-07black.svg" alt="">
                            <div class="fs-19 text-dark-gray alt-font fw-600 mb-5px">Education law</div>
                            <span>Quis autem velo eum iure suam nihil molestiae.</span>
                        </div>
                    </div>
                    <!-- end front side -->
                    <!-- start back side -->
                    <div class="w-100 h-100 overflow-hidden back-side cover-background border-radius-6px box-shadow-quadruple-large" style="background-image:url('https://via.placeholder.com/600x520')">
                        <div class="opacity-light bg-charcoal-blue"></div>
                        <div class="d-flex flex-column align-items-center justify-content-center h-100 z-index-2 rotate-content-back p-30px">
                            <span class="text-white alt-font fw-500 fs-19 mb-5px">Education law</span>
                            <p>Quis autem velo eum iure suam nihil molestiae.</p>
                            <a href="#" class="btn btn-small btn-rounded btn-white btn-box-shadow">Learn more</a>
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
                            <div class="fs-19 text-dark-gray alt-font fw-600 mb-5px">Corporate law</div>
                            <span>Quis autem velo eum iure suam nihil molestiae.</span>
                        </div>
                    </div>
                    <!-- end front side -->
                    <!-- start back side -->
                    <div class="w-100 h-100 overflow-hidden back-side cover-background border-radius-6px box-shadow-quadruple-large" style="background-image:url('https://via.placeholder.com/600x520')">
                        <div class="opacity-light bg-charcoal-blue"></div>
                        <div class="d-flex flex-column align-items-center justify-content-center h-100 z-index-2 rotate-content-back p-30px">
                            <span class="text-white alt-font fw-500 fs-19 mb-5px">Corporate law</span>
                            <p>Quis autem velo eum iure suam nihil molestiae.</p>
                            <a href="#" class="btn btn-small btn-rounded btn-white btn-box-shadow">Learn more</a>
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
                            create anything that you can imagine.</div>
                    </div>
                    <!-- end slider item -->
                    <!-- start slider item -->
                    <div class="swiper-slide">
                        <div class="fs-250 lg-fs-200 md-fs-150 ls-minus-8px md-ls-minus-4px text-light-blue alt-font fw-700">
                            hand crafted designs created by world class creative people.</div>
                    </div>
                    <!-- end slider item -->
                    <!-- start slider item -->
                    <div class="swiper-slide">
                        <div class="fs-250 lg-fs-200 md-fs-150 ls-minus-8px md-ls-minus-4px text-light-blue alt-font fw-700">
                            pre built website demos.</div>
                    </div>
                    <!-- end slider item -->
                </div>
            </div>
            <div class="position-absolute z-index-1 top-minus-40px left-0px text-center d-md-block d-none">
                <img src="images/crafto-landing-page-img-09.png" class="md-w-50" data-bottom-top="transform: translateY(50px) translateX(220px)" data-top-bottom="transform:translateY(-50px) translateX(220px)" alt="" />
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
                    <li class="nav-item"><a data-bs-toggle="tab" href="#tab_five1" class="nav-link active">Keyword
                            research<span class="tab-border bg-dark-gray"></span></a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab_five2">Target
                            analysis<span class="tab-border bg-dark-gray"></span></a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab_five3">Social
                            marketing<span class="tab-border bg-dark-gray"></span></a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab_five4">Email
                            campaign<span class="tab-border bg-dark-gray"></span></a></li>
                </ul>
                <!-- end tab navigation -->
                <div class="tab-content">
                    <!-- start tab content -->
                    <div class="tab-pane fade in active show" id="tab_five1">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-lg-7 col-md-6 sm-mb-30px" data-anime='{ "opacity": [0, 1], "staggervalue": 200, "duration": 600, "delay": 0, "easing": "easeOutCirc" }'>
                                <img src="https://via.placeholder.com/682x510" alt="" />
                            </div>
                            <div class="col-lg-5 col-md-6 ps-8 lg-ps-3 sm-ps-15px text-center text-md-start" data-anime='{ "el": "childs", "willchange": "transform", "opacity": [0, 1], "rotateY": [-90, 0], "rotateZ": [-10, 0], "translateY": [80, 0], "translateZ": [50, 0], "staggervalue": 200, "duration": 600, "delay": 100, "easing": "easeOutCirc" }'>
                                <span class="ps-20px pe-20px mb-30px md-mb-20px text-uppercase text-dark-gray fs-13 lh-40 md-lh-50 ls-1px alt-font fw-700 border-radius-4px bg-y-w-y d-inline-block">Keyword
                                    research</span>
                                <h2 class="alt-font text-dark-gray fw-600 ls-minus-1px">Keywords lead to customers.
                                </h2>
                                <p class="w-80 xl-w-90 md-w-100">We are committed to deliver unique digital media
                                    solutions from web design to eCommerce solutions for our clients by using our
                                    knowledge and expertise.</p>
                                <a href="" class="btn btn-link btn-hover-animation-switch btn-large text-dark-gray fw-700">
                                    <span>
                                        <span class="btn-text">learn more</span>
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
                                <img src="https://via.placeholder.com/682x510" alt="" />
                            </div>
                            <div class="col-lg-5 col-md-6 ps-8 lg-ps-3 sm-ps-15px text-center text-md-start">
                                <span class="ps-20px pe-20px mb-30px md-mb-20px text-uppercase text-dark-gray fs-13 lh-40 md-lh-50 ls-1px alt-font fw-700 border-radius-4px bg-y-w-y d-inline-block">Target
                                    analysis</span>
                                <h2 class="alt-font text-dark-gray fw-600 ls-minus-1px">Power your online
                                    visibility.</h2>
                                <p class="w-80 xl-w-90 md-w-100">We are committed to deliver unique digital media
                                    solutions from web design to eCommerce solutions for our clients by using our
                                    knowledge and expertise.</p>
                                <a href="" class="btn btn-link btn-hover-animation-switch btn-large text-dark-gray fw-700">
                                    <span>
                                        <span class="btn-text">learn more</span>
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
                                <img src="https://via.placeholder.com/682x510" alt="" />
                            </div>
                            <div class="col-lg-5 col-md-6 ps-8 lg-ps-3 sm-ps-15px text-center text-md-start">
                                <span class="ps-20px pe-20px mb-30px md-mb-20px text-uppercase text-dark-gray fs-13 lh-40 md-lh-50 ls-1px alt-font fw-700 border-radius-4px bg-y-w-y d-inline-block">Social
                                    marketing</span>
                                <h2 class="alt-font text-dark-gray fw-600 ls-minus-1px">Brand identity and strategy.
                                </h2>
                                <p class="w-80 xl-w-90 md-w-100">We are committed to deliver unique digital media
                                    solutions from web design to eCommerce solutions for our clients by using our
                                    knowledge and expertise.</p>
                                <a href="" class="btn btn-link btn-hover-animation-switch btn-large text-dark-gray fw-700">
                                    <span>
                                        <span class="btn-text">learn more</span>
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
                                <img src="https://via.placeholder.com/682x510" alt="" />
                            </div>
                            <div class="col-lg-5 col-md-6 ps-8 lg-ps-3 sm-ps-15px text-center text-md-start">
                                <span class="ps-20px pe-20px mb-30px md-mb-20px text-uppercase text-dark-gray fs-13 lh-40 md-lh-50 ls-1px alt-font fw-700 border-radius-4px bg-y-w-y d-inline-block">Email
                                    marketing</span>
                                <h2 class="alt-font text-dark-gray fw-600 ls-minus-1px">Tailor-made email campaign.
                                </h2>
                                <p class="w-80 xl-w-90 md-w-100">We are committed to deliver unique digital media
                                    solutions from web design to eCommerce solutions for our clients by using our
                                    knowledge and expertise.</p>
                                <a href="" class="btn btn-link btn-hover-animation-switch btn-large text-dark-gray fw-700">
                                    <span>
                                        <span class="btn-text">learn more</span>
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
                    Amazing accounting statistics showing the power of numbers.</h3>
            </div>
            <div class="col-lg-6 offset-xl-1 text-center text-lg-start">
                <div class="row align-items-center justify-content-center justify-content-lg-start">
                    <!-- start counter item -->
                    <div class="col-sm-6 last-paragraph-no-margin counter-style-04 md-mb-35px">
                        <h2 class="vertical-counter d-inline-flex fw-700 ls-minus-2px mb-10px" style="color:#ffffff" data-text="%" data-to="96"><sup class="top-minus-5px" style="color: #FFDA4C;"><i class="bi bi-arrow-up icon-medium"></i></sup></h2>
                        <span class="fs-19 fw-600 ls-minus-05px d-block" style="color:#ffffff" data-anime='{ "el": "lines", "translateY": [30, 0], "opacity": [0,1], "delay": 0, "staggervalue": 250, "easing": "easeOutQuad" }'>Prefer
                            cloud accounting</span>
                        <p class="w-85 sm-w-100 md-mx-auto" style="color:#ffffff" data-anime='{ "el": "lines", "translateY": [30, 0], "opacity": [0,1], "delay": 0, "staggervalue": 250, "easing": "easeOutQuad" }'>
                            Lorem ipsum simply dummy text printing typesetting.</p>
                    </div>
                    <!-- end counter item -->
                    <!-- start counter item -->
                    <div class="col-sm-6 last-paragraph-no-margin counter-style-04 md-mb-35px">
                        <h2 class="vertical-counter d-inline-flex fw-700 ls-minus-2px mb-10px" style="color:#ffffff" data-text="%" data-to="98"><sup class="top-minus-5px" style="color: #FFDA4C;"><i class="bi bi-arrow-up icon-medium"></i></sup></h2>
                        <span class="fs-19 fw-600 ls-minus-05px d-block" style="color:#ffffff" data-anime='{ "el": "lines", "translateY": [30, 0], "opacity": [0,1], "delay": 0, "staggervalue": 250, "easing": "easeOutQuad" }'>Most
                            outsourced tasks</span>
                        <p class="w-85 sm-w-100 md-mx-auto" style="color:#ffffff" data-anime='{ "el": "lines", "translateY": [30, 0], "opacity": [0,1], "delay": 0, "staggervalue": 250, "easing": "easeOutQuad" }'>
                            Lorem ipsum simply dummy text printing typesetting.</p>
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
                                    <img src="https://via.placeholder.com/200x200" class="rounded-circle w-100px h-100px md-mb-35px" alt="">
                                    <span class="d-block ps-40px md-ps-0 md-mx-auto position-relative" style="color: #ffffff;"><img src="images/demo-accounting-home-quote-img.png" class="position-absolute left-minus-25px top-minus-15px lg-top-minus-5px md-top-minus-50px w-40px md-left-0px md-right-0px md-mx-auto" alt="">This is one of the best templates I've came across. Very
                                        organized, great design style and easy around.</span>
                                </div>
                                <div class="col-lg-1 d-none d-lg-inline-block">
                                    <div class="separator-line w-1px md-w-100 h-60px md-h-1px bg-extra-medium-gray mx-auto">
                                    </div>
                                </div>
                                <div class="col-lg-3 text-center text-lg-start md-mt-15px">
                                    <span class="fs-19 ls-minus-05px fw-600 text-dark-gray d-block lh-28" style="color: #ffffff;">Shoko
                                        mugikura</span>
                                    <div style="color: #ffffff;">Financial manager</div>
                                </div>
                            </div>
                        </div>
                        <!-- end text slider item -->
                        <!-- start text slider item -->
                        <div class="swiper-slide">
                            <div class="row align-items-center pt-25px pb-25px">
                                <div class="col-lg-8 d-lg-flex align-items-center text-center text-lg-start">
                                    <img src="https://via.placeholder.com/200x200" class="rounded-circle w-100px h-100px md-mb-35px" alt="">
                                    <span class="d-block ps-40px md-ps-0 md-mx-auto position-relative" style="color: #ffffff;"><img src="images/demo-accounting-home-quote-img.png" class="position-absolute left-minus-25px top-minus-15px lg-top-minus-5px md-top-minus-50px w-40px md-left-0px md-right-0px md-mx-auto" alt="">This is one of the best templates I've came across. Very
                                        organized, great design style and easy around.</span>
                                </div>
                                <div class="col-lg-1 d-none d-lg-inline-block">
                                    <div class="separator-line w-1px md-w-100 h-60px md-h-1px bg-extra-medium-gray mx-auto">
                                    </div>
                                </div>
                                <div class="col-lg-3 text-center text-lg-start md-mt-15px">
                                    <span class="fs-19 ls-minus-05px fw-600 text-dark-gray d-block lh-28" style="color: #ffffff;">Matthew
                                        taylor</span>
                                    <div style="color: #ffffff;">Financial manager</div>
                                </div>
                            </div>
                        </div>
                        <!-- end text slider item -->
                        <!-- start text slider item -->
                        <div class="swiper-slide">
                            <div class="row align-items-center pt-25px pb-25px">
                                <div class="col-lg-8 d-lg-flex align-items-center text-center text-lg-start">
                                    <img src="https://via.placeholder.com/200x200" class="rounded-circle w-100px h-100px md-mb-35px" alt="">
                                    <span class="d-block ps-40px md-ps-0 md-mx-auto position-relative" style="color: #ffffff;"><img src="images/demo-accounting-home-quote-img.png" class="position-absolute left-minus-25px top-minus-15px lg-top-minus-5px md-top-minus-50px w-40px md-left-0px md-right-0px md-mx-auto" alt="">This is one of the best templates I've came across. Very
                                        organized, great design style and easy around.</span>
                                </div>
                                <div class="col-lg-1 d-none d-lg-inline-block">
                                    <div class="separator-line w-1px md-w-100 h-60px md-h-1px bg-extra-medium-gray mx-auto">
                                    </div>
                                </div>
                                <div class="col-lg-3 text-center text-lg-start md-mt-15px">
                                    <span class="fs-19 ls-minus-05px fw-600 text-dark-gray d-block lh-28" style="color: #ffffff;">Herman
                                        miller</span>
                                    <div style="color: #ffffff;">Chief financial</div>
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
                <h2 class="fw-600 alt-font text-dark-gray ls-minus-1px">Trusted by over 26,300 reputed companies
                </h2>
            </div>
        </div>
        <div class="row justify-content-center row-cols-2 row-cols-md-4 row-cols-sm-3 clients-style-03">
            <!-- start client item -->
            <div class="col text-center mb-35px" data-anime='{ "translateY": [15, 0], "opacity": [0,1], "duration": 600, "delay": 300, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <div class="client-box">
                    <a href="#"><img src="https://via.placeholder.com/192x192" alt="" class="box-shadow-extra-large border-radius-100px lg-w-80 md-w-95 xs-w-auto"></a>
                </div>
            </div>
            <!-- end client item -->
            <!-- start client item -->
            <div class="col text-center mb-35px" data-anime='{ "translateY": [15, 0], "opacity": [0,1], "duration": 600, "delay": 1000, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <div class="client-box">
                    <a href="#"><img src="https://via.placeholder.com/192x192" alt="" class="box-shadow-extra-large border-radius-100px lg-w-80 md-w-95 xs-w-auto"></a>
                </div>
            </div>
            <!-- end client item -->
            <!-- start client item -->
            <div class="col text-center mb-35px" data-anime='{ "translateY": [15, 0], "opacity": [0,1], "duration": 600, "delay":900, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <div class="client-box">
                    <a href="#"><img src="https://via.placeholder.com/193x192" alt="" class="box-shadow-extra-large border-radius-100px lg-w-80 md-w-95 xs-w-auto"></a>
                </div>
            </div>
            <!-- end client item -->
            <!-- start client item -->
            <div class="col text-center mb-35px" data-anime='{ "translateY": [15, 0], "opacity": [0,1], "duration": 600, "delay": 500, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <div class="client-box">
                    <a href="#"><img src="https://via.placeholder.com/192x192" alt="" class="box-shadow-extra-large border-radius-100px lg-w-80 md-w-95 xs-w-auto"></a>
                </div>
            </div>
            <!-- end client item -->
            <!-- start client item -->
            <div class="col text-center sm-mb-35px" data-anime='{ "translateY": [15, 0], "opacity": [0,1], "duration": 600, "delay": 700, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <div class="client-box">
                    <a href="#"><img src="https://via.placeholder.com/192x193" alt="" class="box-shadow-extra-large border-radius-100px lg-w-80 md-w-95 xs-w-auto"></a>
                </div>
            </div>
            <!-- end client item -->
            <!-- start client item -->
            <div class="col text-center sm-mb-35px" data-anime='{ "translateY": [15, 0], "opacity": [0,1], "duration": 600, "delay":1200, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <div class="client-box">
                    <a href="#"><img src="https://via.placeholder.com/192x193" alt="" class="box-shadow-extra-large border-radius-100px lg-w-80 md-w-95 xs-w-auto"></a>
                </div>
            </div>
            <!-- end client item -->
            <!-- start client item -->
            <div class="col text-center" data-anime='{ "translateY": [15, 0], "opacity": [0,1], "duration": 600, "delay": 800, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <div class="client-box">
                    <a href="#"><img src="https://via.placeholder.com/193x193" alt="" class="box-shadow-extra-large border-radius-100px lg-w-80 md-w-95 xs-w-auto"></a>
                </div>
            </div>
            <!-- end client item -->
        </div>
        <div class="row justify-content-center mt-7 mb-9 sm-mt-40px sm-mb-0">
            <div class="col-12 d-block d-sm-flex align-items-center text-center text-sm-start justify-content-center fs-22 alt-font" style="margin-block-end: inherit;">
                <div class="me-5px xs-ms-10px d-inline-block align-middle"><i class="fa-regular fa-heart text-red"></i></div>
                <div class="d-inline-block align-middle">Join the <span class="fw-800 text-dark-gray text-decoration-line-bottom-medium">10000+</span> companies
                    trusting our agency.</div>
            </div>
        </div>
    </div>
    <div class="background-position-center-bottom background-size-100 background-no-repeat h-400px sm-h-150px position-absolute sm-position-relative left-0px bottom-0 w-100 d-none d-md-block" style="background-image: url('images/demo-seo-agency-analysis-bg.png')"></div>
</section>
<!-- end section -->
<section class="cover-background one-third-screen sm-h-500px" style="background-image:url('https://via.placeholder.com/1920x760');">
    <div class="opacity-medium bg-dark-slate-blue"></div>
    <div class="container h-100">
        <div class="row align-items-center justify-content-center h-100">
            <div class="col-xxl-8 col-lg-10 mb-9 md-mb-15 sm-mb-0 position-relative z-index-1 text-center d-flex flex-wrap align-items-center justify-content-center" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <span class="ps-25px pe-25px pt-5px pb-5px mb-25px text-uppercase  fs-12 ls-1px fw-600 border-radius-100px d-flex align-items-center text-start sm-lh-20" style="background-color:#FFDA4C;color:#000000"><i class="bi bi-megaphone  d-inline-block align-middle icon-small me-10px"></i> Let's
                    make something great work together.</span>
                <h1 class="text-white fw-600 ls-minus-2px mb-45px">We make the creative solutions for <span class="fw-600" data-fancy-text='{ "effect": "rotate", "string": ["business!", "problems!", "brands!"] }'></span>
                </h1>
                <a href="#" class="btn btn-extra-large btn-switch-text btn-y-t-y btn-rounded">
                    <span>
                        <span class="btn-double-text" data-text="Got a project in mind">Got a project in mind</span>
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

