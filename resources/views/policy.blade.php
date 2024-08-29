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

    .text-container {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
        text-align: center;
    }

    .intro-text {
        width: 100%;
        margin-bottom: 10px;
    }

    .fancy-text {
        width: 100%;
        font-size: 50px;
        font-weight: 700;
        letter-spacing: -1px;
    }

    @media (max-width: 768px) {
        .fancy-text {
            font-size: 40px;
        }
    }

    body {
        font-family: Arial, sans-serif;
        line-height: 1.6;
        margin: 0 auto;
        max-width: 800px;
        padding: 20px;
    }

    h1 {
        margin-top: 100px;
        text-align: center;
    }

    h5 {
        margin: 50px 0 2px 0;
    }

    ul {
        padding-left: 20px;
    }

    p {
        margin-bottom: 0px;
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
                            <a href="index" class="nav-link" style="color: #000000;">首頁</a>
                        </li>

                        <li class="nav-item">
                            <a href="about" class="nav-link" style="color: #000000;">關於我們</a>
                        </li>
                        <li class="nav-item dropdown simple-dropdown">
                            <a href="#" class="nav-link" style="color: #000000;">產品/服務</a>
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
                        <li class="nav-item ">
                            <a href="pastworks" class="nav-link" style="color: #000000;">專案資歷</a>
                        </li>
                        <li class="nav-item">
                            <a href="contact" class="nav-link" style="color: #000000;">聯絡我們</a>
                        </li>
                        <li class="nav-item ">
                            <a href="faq" class="nav-link" style="color: #000000;">常見問題</a>
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
<h1>隱私權政策</h1>

<p>歡迎您使用普洛加民數位科技有限公司（以下簡稱「本公司」）提供的服務。本公司十分重視您的隱私權保護，特制定本隱私權政策，說明我們如何蒐集、使用、揭露及保護您的個人資料。請您詳細閱讀以下內容：</p>

<h5>1. 資料蒐集</h5>
<p>本公司可能會蒐集以下類型的個人資料：</p>
<ul>
    <li>• 基本資料：如姓名、電子郵件地址、電話號碼等。</li>
    <li>• 帳戶資料：如用戶名稱、密碼等。</li>
    <li>• 使用者行為資料：如您在我們網站上的瀏覽記錄、搜尋歷史等。</li>
    <li>• 設備資訊：如IP地址、瀏覽器類型、操作系統等。</li>
</ul>

<h5>2. 資料使用</h4>
    <p>我們使用您的個人資料主要用於：</p>
    <ul>
        <li>• 提供、維護和改進我們的服務。</li>
        <li>• 處理您的查詢和請求。</li>
        <li>• 發送服務通知和更新資訊。</li>
        <li>• 防止、偵測和調查潛在的非法活動。</li>
    </ul>

    <h5>3. 資料共享</h5>
    <p>除非得到您的同意或法律要求，我們不會與第三方分享您的個人資料。但在以下情況下，我們可能會共享您的資料：</p>
    <ul>
        <li>• 與我們的合作夥伴共享以提供服務。</li>
        <li>• 遵守法律要求或回應法律程序。</li>
        <li>• 保護本公司或他人的權利、財產或安全。</li>
    </ul>

    <h5>4. 資料安全</h5>
    <p>我們採取適當的技術和組織措施來保護您的個人資料，防止未經授權的訪問、使用或披露。</p>

    <h5>5. 您的權利</h5>
    <p>您有權：</p>
    <ul>
        <li>• 查閱您的個人資料。</li>
        <li>• 要求更正不準確的資料。</li>
        <li>• 要求刪除您的個人資料。</li>
        <li>• 反對或限制我們處理您的資料。</li>
    </ul>

    <h5>6. Cookie 使用</h5>
    <p>我們使用cookies和類似技術來改善用戶體驗和分析網站使用情況。您可以通過瀏覽器設置來管理cookie偏好。</p>

    <h5>7. 隱私權政策的變更</h5>
    <p>我們可能會不時更新本隱私權政策。更新後的政策將在網站上公佈，重大變更時我們會通知您。</p>

    <h5>8. 聯絡我們</h5>
    <p>如果您對本隱私權政策有任何疑問或顧慮，請聯絡我們：</p>
    <p>
        普洛加民數位科技有限公司<br>
        Email: <a href="mailto:pm@programi.com.tw" class="text-dark-gray text-decoration-line-bottom lh-22 d-inline-block mb-20px">pm@programi.com.tw</a><br>
        地址: 臺北市松山區八德路3段218號7樓
    </p>

    <p>最後更新日期：30/8/2024</p>
    @endsection