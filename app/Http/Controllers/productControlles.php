<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productControlles extends Controller
{
    public function shop()
    {
        $title1 = '美安系統串接';
        $title2 = '增加其銷售渠道的廣度和多元化';
        $firstword = '台';
        $conect1 = '灣美安夥伴商店計畫是由美安公司（Market America）推動的⼀項計畫，旨在透過提供⼀個網絡平台，使消費者能在多樣化的商店和品牌中購物，同時賺取獎勵和折扣。';
        $conect2 = '我們可以為台灣美安的分銷商或夥伴商店提供網站串接服務，以下是⼀些實際操作基本步驟：';
        $steps = [
            [
                'title' => '1. 需求分析',
                'content' => '首先，了解美安分銷商或客戶的具體需求。這可能包括自動更新產品目錄、處理訂單、追蹤佣金等功能。'
            ],
            [
                'title' => '2. 與美安溝通',
                'content' => '與美安方面進行溝通，確認技術合作的可行性及接口(API)的使用條件。獲得必要的API文檔，並了解相關的政策和規範。'
            ],
            [
                'title' => '3. 設計和開發',
                'content' => '根據需求設計網站架構和用戶界面。開發過程中需整合美安提供的API，以實現產品列表、訂單管理等功能。'
            ],
            [
                'title' => '4. 安全性考量',
                'content' => '確保網站在處理個人資料和交易時符合資訊安全標準，如使用HTTPS、資料加密和安全的支付閘道。'
            ],
            [
                'title' => '5. 測試與部署',
                'content' => '進行廣泛的測試，以確保網站的所有功能都能正常運作，並且與美安的系統良好整合。測試階段應涵蓋功能測試、性能測試和安全測試。'
            ],
            [
                'title' => '6. 維護與支持',
                'content' => '提供維護和技術支持服務，以處理任何後續的問題或更新需求。'
            ],
            [
                'title' => '7. 合法性與合規性',
                'content' => '確保所有的實施步驟符合當地的法律和規範，特別是有關數據保護和消費者權益的規定。'
            ]
        ];
        $img = asset('images/product/shopcom/shop_com_shop.jpg');
        $imgRound = asset('images/product/shopcom/ibv.jpg');
        $menuItems = $this->productMenu();
        return view('productservice', compact('title1', 'title2', 'firstword', 'conect1', 'conect2', 'steps', 'img', 'imgRound','menuItems'));
    }

    public function ecommerce()
    {
        $title1 = '線上購物平台';
        $title2 = '打開通往全台灣甚至全世界的大門';
        $firstword = '架';
        $conect1 = '設⼀個線上購物網站涉及多個技術層⾯和服務，從前端設計到後端系統的實現，以及保護⽤⼾安全和數據的安全性。';
        $conect2 = '下⾯列出了普洛加⺠提供的關鍵技術服務：';
        $steps = [
            [
                'title' => '1. 網站設計與開發：',
                'content' => '• 前端開發：創建⽤⼾介⾯。前端框架提⾼開發效率並增強⽤⼾體驗。
                            • 後端開發：構建服務器、數據庫和應⽤程序邏輯。
                            • 響應式設計：確保網站在各種設備上均能有效顯⽰，提⾼跨平台的可訪問性。'
            ],
            [
                'title' => '2. 數據庫管理：',
                'content' => '• 數據庫設計：設計一個能夠有效儲存產品信息、用戶資料、訂單資料等的數據庫。
                            • 數據庫技術：選擇合適的數據庫管理系統，根據應用需求確定使用關聯型或非關聯型數據庫。'
            ],
            [
                'title' => '3. 電子商務集成：',
                'content' => '• 支付閘道整合：整合第三方支付系統，以處理安全支付。
                            • 購物車功能：開發購物車系統，支持用戶添加商品、修改訂單數量或刪除商品。
                            • 庫存管理：實施庫存追踪功能，自動更新庫存狀態。'
            ],
            [
                'title' => '4. 安全性措施：',
                'content' => '• 資料加密、安全協議：保護儲存和傳輸中的數據，加密網站數據。
                            • 用戶身份驗證：設計一個安全的登錄系統，可能包括雙因素認證。'
            ],
            [
                'title' => '5. SEO 優化：',
                'content' => '• 搜尋引擎友好：優化網站結構和內容，確保搜尋引擎能夠有效索引網站頁面。
                            • 元標籤優化：合理設置標題、描述和其他元數據，提升搜尋引擎的可見度。
                            • 速度優化：提高頁面加載速度，利用緩存技術、圖片和內容優化等方法。'
            ],
            [
                'title' => '6. 網站分析和報告：',
                'content' => '• 流量分析：追踪訪問者行為和流量來源。
                            • 性能評估：定期檢查網站性能，並根據報告調整策略。'
            ],
            [
                'title' => '7. 技術支持與維護：',
                'content' => '• 定期更新：定期更新網站的軟件，以避免安全風險。
                            • 技術支持：提供客戶支持解決技術問題，確保網站穩定運行。'
            ]
        ];
        $img = asset('images/product/ecommerce/E-Commerce.jpeg');
        $imgRound = asset('images/product/ecommerce/ecommerce_sq.jpg');

        $menuItems = $this->productMenu();
   
        return view('productservice', compact('title1', 'title2', 'firstword', 'conect1', 'conect2', 'steps', 'img', 'imgRound','menuItems' ));
    }


    public function productMenu()
    {
        $menuItems = [
            ['link' => 'shop', 'text' => 'Shop.com夥伴商店串接'],
            ['link' => 'ecommerce', 'text' => '線上購物平台'],
            ['link' => 'index', 'text' => '人事差勤管理系統'],
            ['link' => 'index', 'text' => '財務報銷系統'],
            ['link' => 'index', 'text' => '教育業管理系統'],
            ['link' => 'index', 'text' => '訂位／候位系統'],
            ['link' => 'index', 'text' => '客服系統'],
            ['link' => 'index', 'text' => '文件管理系統'],
            ['link' => 'index', 'text' => '網頁小遊戲訂製'],
            ['link' => 'index', 'text' => '會員註冊及積分統計系統'],
            ['link' => 'index', 'text' => '問卷調查及數據統計系統'],
        ];

        return $menuItems;
    }
}
