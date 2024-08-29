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

    <h1>服務條款</h1>

    <p>歡迎使用普洛加民數位科技有限公司（以下簡稱「本公司」）提供的服務。請仔細閱讀以下服務條款，使用我們的服務即表示您同意受以下條款的約束。</p>

    <h5>1. 服務說明</h5>
    <p>本公司提供數位科技諮詢及製作服務。我們保留隨時修改、暫停或終止全部或部分服務的權利，恕不另行通知。</p>
    <h5>2. 用戶責任</h5>
    <p>2.1 您同意：</p>
    <ul>
        <li>•提供準確、完整和最新的個人資料。</li>
        <li>•維護您帳戶的保密性。</li>
        <li>•對您帳戶下的所有活動負責。</li>
    </ul>
    <p>2.2 您不得：</p>
    <ul>
        <li>•違反任何適用法律或法規。</li>
        <li>•侵犯他人的知識產權或其他權利。</li>
        <li>•傳播垃圾郵件、病毒或其他惡意軟體。</li>
    </ul>
    <h5>3. 知識產權</h5>
    <p>本服務中的所有內容、設計、軟體等知識產權均屬於本公司或其授權方所有。未經本公司書面許可，您不得使用、複製或分發这些資料。</p>
    <h5>4. 免責聲明</h5>
    <p>4.1 本服務「按原樣」提供，不提供任何明示或暗示的保證。</p>
    <p>4.2 本公司不對因使用本服務而導致的任何直接、間接、附帶、特殊或衍生性損害承擔責任。</p>
    <h5>5. 賠償</h5>
    <p>您同意賠償並使本公司免受因您違反本條款或使用我們的服務而產生的任何索賠、損失或需求。</p>
    <h5>6. 終止</h5>
    <p>本公司可以隨時因任何原因終止您的帳戶或使用權限，恕不另行通知。</p>
    <h5>7. 法律適用和管轄</h5>
    <p>本條款受台灣法律管轄，任何爭議應由台灣法院管轄。</p>
    <h5>8. 修改條款</h5>
    <p>本公司保留隨時修改這些條款的權利。修改後的條款將在網站上發布，繼續使用本服務即表示您接受修改後的條款。</p>
    <h5>9. 聯絡我們</h5>
    <p>如果您對本服務條款有任何問題或意見，請聯絡我們：</p>
    <p>普洛加民數位科技有限公司<br></p>
    <p>Email: pm@programi.com.tw<br></p>
    <p>地址: 臺北市松山區八德路3段218號7樓<br></p>
    最後更新日期：30/8/2024
</header>
<!-- end header -->

@endsection