<!doctype html>
<html class="no-js" lang="tw">

<head>
    
    <title>@yield('title', 'Programi')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="ThemeZaa">
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="description"
        content="Elevate your online presence with Crafto - a modern, versatile, multipurpose Bootstrap 5 responsive HTML5, SCSS template using highly creative 48+ ready demos.">
    <link rel="shortcut icon" href="images/programilogo3232.png">
    <link rel="apple-touch-icon" href="images/programilogo5757.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/programilogo7272.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/programilogo114114.png"> 
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link rel="stylesheet" href="{{asset('/css/vendors.min.css')}}" />
    <link rel="stylesheet" href="{{asset('/css/icon.min.css')}}" />
    <link rel="stylesheet" href="{{asset('/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('/css/responsive.css')}}" />
    <link rel="stylesheet" href="{{asset('/demos/seo-agency/seo-agency.css')}}" />



</head>
@yield('extra_head')
<body data-mobile-nav-style="full-screen-menu" data-mobile-nav-bg-color="#2a2b3f" class="custom-cursor">
@yield('content')

<!-- start footer -->
<footer class="footer-light">

    <div class="container">
        <div class="row align-items-center justify-content-center">
            <!-- start footer column -->
            <div class="col-auto d-flex flex-column flex-md-row align-items-center text-center text-md-start">
                <div class="text-dark-gray fs-28 alt-font fw-500">我們已預備提供<span class="fw-700 text-decoration-line-bottom">諮詢與服務</span></div>
                <div class="bg-white border-radius-50px d-flex align-items-center p-10px ps-35px ms-20px md-ps-20px md-ms-15px box-shadow-medium sm-m-20px">
                    <a href="mailto:pm@programi.com.tw" class="text-dark-gray fs-22 alt-font fw-500 me-10px overflow-hidden">Say, <span class="fw-700 w-65px text-start d-inline-block" data-fancy-text='{ "effect": "rotate", "string": ["Hello!", "Salve!", "Hallå!"] }'></span></a>
                    <span class="text-dark-gray h-45px w-45px text-center d-flex align-items-center justify-content-center border-radius-100 bg-base-color-transparent fs-20">&#128075;</span>
                </div>
            </div>
            <!-- end footer column -->
        </div>
        <div class="row justify-content-center mt-5 mb-4 sm-mb-35px">
            <!-- start footer column -->
            <div class="col-lg-3 last-paragraph-no-margin md-mb-35px text-center text-lg-start">
                <a href="index" class="footer-logo mb-10px d-inline-block"><img style="width: 160px !important;max-height: 60px !important;" src="images/logo2.png" data-at2x="images/logo2.png" alt=""></a>
                <p class="w-85 lg-w-100">擁有15年以上的程式開發經驗，為您和您公司提升科技等級</p>
                <div class="elements-social social-icon-style-02 mt-15px">
                    <!-- <ul class="small-icon dark">
                        <li><a class="facebook" href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a class="dribbble" href="http://www.dribbble.com" target="_blank"><i class="fa-brands fa-dribbble"></i></a></li>
                        <li><a class="twitter" href="http://www.twitter.com" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a class="instagram" href="http://www.instagram.com" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                    </ul> -->
                </div>
            </div>
            <!-- end footer column -->
            <!-- start footer column -->
            <div class="col-8 col-lg-2 col-md-3 sm-mb-25px">
                <span class="alt-font fs-18 fw-600 d-block text-dark-gray mb-5px">公司</span>
                <ul>
                    <li><a href="index">首頁</a></li>
                    <li><a href="about">關於我們</a></li>
                    <li><a href="productservice">產品/服務</a></li>
                    <li><a href="contact">聯絡我們</a></li>
                    <li><a href="faq">常見問題（FAQ）</a></li>
                </ul>
            </div>
            <!-- end footer column -->

            <!-- start footer column -->
            <div class="col-6 col-lg-3 col-md-3">
                <span class="alt-font fs-18 fw-600 d-block text-dark-gray mb-10px">需要諮詢嗎？</span>
                <span class="d-block lh-normal">E-mail</span>
                <a href="mailto:pm@programi.com.tw" class="text-dark-gray text-decoration-line-bottom lh-22 d-inline-block mb-20px">programi.com.tw</a>
                <span class="d-block lh-normal">LINE</span>
                <a href="tel:12345678910" class="text-dark-gray text-decoration-line-bottom lh-22 d-inline-block">+886 987 350 606</a>    
            </div>
            <!-- end footer column -->
        </div>
        <!-- start footer content -->
        <div class="border-top border-color-extra-medium-gray pt-35px pb-35px text-center">
            <span class="fs-13 w-60 lg-w-70 md-w-90 sm-w-100 d-block mx-auto lh-22">© 2024 Programi Solutions Limited, All rights reserved.
            </span>
        </div>
        <!-- end footer content -->
    </div>
</footer>

<!-- end footer -->
<!-- start scroll progress -->
<div class="scroll-progress d-none d-xxl-block">
    <a href="#" class="scroll-top" aria-label="scroll">
        <span class="scroll-text">Scroll</span><span class="scroll-line"><span class="scroll-point"></span></span>
    </a>
</div>
<!-- end scroll progress -->
<!-- javascript libraries -->
<script type="text/javascript" src="{{asset('js/jquery.js')}}";></script>
<script type="text/javascript" src="{{asset('js/vendors.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/main.js')}}"></script>

</body>
</html>