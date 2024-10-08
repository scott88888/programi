<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productControlles extends Controller
{
    public function shop()
    {
        $title1 = '美安夥伴商店串接';
        $title2 = '增加其銷售渠道的廣度和多元化';
        $firstword = '台';
        $conect1 = '灣美安夥伴商店計畫是由美安公司（Market America）推動的⼀項計畫，旨在透過提供⼀個網絡平台，使消費者能在多樣化的商店和品牌中購物，同時賺取獎勵和折扣。<br><br>';
        $conect2 = '我們可以為台灣美安的分銷商或夥伴商店提供網站串接服務，以下是⼀些實際操作基本步驟：';
        $steps = [
            [
                'title' => '1. 需求分析',
                'content' => '首先，了解美安分銷商或客戶的具體需求。這可能包括自動更新產品目錄、處理訂單、追蹤佣金等功能。<br><br>'
            ],
            [
                'title' => '2. 與美安溝通',
                'content' => '與美安方面進行溝通，確認技術合作的可行性及接口(API)的使用條件。獲得必要的API文檔，並了解相關的政策和規範。<br><br>'
            ],
            [
                'title' => '3. 設計和開發',
                'content' => '根據需求設計網站架構和用戶界面。開發過程中需整合美安提供的API，以實現產品列表、訂單管理等功能。<br><br>'
            ],
            [
                'title' => '4. 安全性考量',
                'content' => '確保網站在處理個人資料和交易時符合資訊安全標準，如使用HTTPS、資料加密和安全的支付閘道。<br><br>'
            ],
            [
                'title' => '5. 測試與部署',
                'content' => '進行廣泛的測試，以確保網站的所有功能都能正常運作，並且與美安的系統良好整合。測試階段應涵蓋功能測試、性能測試和安全測試。<br><br>'
            ],
            [
                'title' => '6. 維護與支持',
                'content' => '提供維護和技術支持服務，以處理任何後續的問題或更新需求。<br><br>'
            ],
            [
                'title' => '7. 合法性與合規性',
                'content' => '確保所有的實施步驟符合當地的法律和規範，特別是有關數據保護和消費者權益的規定。<br><br>'
            ]
        ];
        $footer = '歡迎與我們聯繫！我們的客⼾專員可以針對製作您的電商平台，並與美安串接夥伴商店，給予更多專業指導及建議';
        $img = asset('images/product/shopcom/shop_com_shop.jpg');
        $imgRound = asset('images/product/shopcom/ibv.jpg');
        return view('productservice', compact('title1', 'title2', 'firstword', 'conect1', 'conect2', 'steps', 'img', 'imgRound', 'footer'));
    }

    public function ecommerce()
    {
        $title1 = '線上電商平台';
        $title2 = '打開通往全台灣，甚⾄全世界的⼤⾨';
        $firstword = '架';
        $conect1 = '設⼀個線上購物網站涉及多個技術層⾯和服務，從前端設計到後端系統的實現，以及保護⽤⼾安全和數據的安全性。<br><br>';
        $conect2 = '下⾯列出了普洛加⺠提供的關鍵技術服務：';
        $steps = [
            [
                'title' => '1. 網站設計與開發：',
                'content' => '&nbsp;&nbsp;&nbsp;&nbsp;• 前端開發：創建⽤⼾介⾯。前端框架提⾼開發效率並增強⽤⼾體驗。<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;• 後端開發：構建服務器、數據庫和應⽤程序邏輯。<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;• 響應式設計：確保網站在各種設備上均能有效顯⽰，提⾼跨平台的可訪問性。<br><br>'
            ],
            [
                'title' => '2. 數據庫管理：',
                'content' => '&nbsp;&nbsp;&nbsp;&nbsp;• 數據庫設計：設計一個能夠有效儲存產品信息、用戶資料、訂單資料等的數據庫。<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;• 數據庫技術：選擇合適的數據庫管理系統，根據應用需求確定使用關聯型或非關聯型數據庫。<br><br>'
            ],
            [
                'title' => '3. 電子商務集成：',
                'content' => '&nbsp;&nbsp;&nbsp;&nbsp;• 支付閘道整合：整合第三方支付系統，以處理安全支付。<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;• 購物車功能：開發購物車系統，支持用戶添加商品、修改訂單數量或刪除商品。<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;• 庫存管理：實施庫存追踪功能，自動更新庫存狀態。<br><br>'
            ],
            [
                'title' => '4. 安全性措施：',
                'content' => '&nbsp;&nbsp;&nbsp;&nbsp;• 資料加密、安全協議：保護儲存和傳輸中的數據，加密網站數據。<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;• 用戶身份驗證：設計一個安全的登錄系統，可能包括雙因素認證。<br><br>'
            ],
            [
                'title' => '5. SEO 優化：',
                'content' => '&nbsp;&nbsp;&nbsp;&nbsp;• 搜尋引擎友好：優化網站結構和內容，確保搜尋引擎能夠有效索引網站頁面。<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;• 元標籤優化：合理設置標題、描述和其他元數據，提升搜尋引擎的可見度。<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;• 速度優化：提高頁面加載速度，利用緩存技術、圖片和內容優化等方法。<br><br>'
            ],
            [
                'title' => '6. 網站分析和報告：',
                'content' => '&nbsp;&nbsp;&nbsp;&nbsp;• 流量分析：追踪訪問者行為和流量來源。<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;• 性能評估：定期檢查網站性能，並根據報告調整策略。<br><br>'
            ],
            [
                'title' => '7. 技術支持與維護：',
                'content' => '&nbsp;&nbsp;&nbsp;&nbsp;• 定期更新：定期更新網站的軟件，以避免安全風險。<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;• 技術支持：提供客戶支持解決技術問題，確保網站穩定運行。<br><br>'
            ]
        ];
        $footer = '歡迎與我們聯繫！我們的客⼾專員可以提供給您，更多關於架設⼀個極具吸引⼒的購物網站專業規劃';
        $img = asset('images/product/ecommerce/E-Commerce.jpeg');
        $imgRound = asset('images/product/ecommerce/ecommerce_sq2.png');

        return view('productservice', compact('title1', 'title2', 'firstword', 'conect1', 'conect2', 'steps', 'img', 'imgRound', 'footer'));
    }

    public function hr()
    {
        $title1 = '⼈資管理系統';
        $title2 = '管理員⼯資料、出缺勤及薪資計算';
        $firstword = '專';
        $conect1 = '⾨⽤來管理員⼯出勤狀況、排班和⼯資計算的系統，包含以下幾個關鍵功能：<br><br>';
        $conect2 = '下⾯列出了普洛加⺠提供的關鍵技術服務：';
        $steps = [
            [
                'title' => '1. 出勤監控：',
                'content' => '&nbsp;&nbsp;&nbsp;&nbsp;• 記錄員⼯每⽇的上下班時間。<br>
                &nbsp;&nbsp;&nbsp;&nbsp;• 監控遲到、早退、加班以及無故缺勤的情況。<br>
                &nbsp;&nbsp;&nbsp;&nbsp;• 提供員⼯出勤狀況的即時報告和歷史資料查詢。<br><br>'
            ],
            [
                'title' => '2. 請假管理：',
                'content' => '&nbsp;&nbsp;&nbsp;&nbsp;• 允許員⼯通過系統申請各類假別，如事假、病假、年假等。<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;• 管理層可在系統中審批請假申請，並⾃動更新出勤記錄。<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;• 跟踪剩餘假期天數，並⾃動計算影響的⼯資調整。<br><br>'
            ],
            [
                'title' => '3. 排班系統：',
                'content' => '&nbsp;&nbsp;&nbsp;&nbsp;• ⾃動或⼿動排定員⼯的⼯作班次，包括正常班次、輪班和彈性⼯作時間等。<br>
                &nbsp;&nbsp;&nbsp;&nbsp;• 考慮員⼯偏好、資歷和⼯作需求來優化班次分配。<br>
                &nbsp;&nbsp;&nbsp;&nbsp;• 提供班次更換、班次交換功能，⽅便員⼯之間的協調。<br><br>'
            ],
            [
                'title' => '4. ⼯資計算：',
                'content' => '&nbsp;&nbsp;&nbsp;&nbsp;• 根據員⼯的實際出勤情況（包括加班時數和缺勤扣款）來計算⽉薪。<br>
                &nbsp;&nbsp;&nbsp;&nbsp;• 考慮各種薪資條件，如底薪、獎⾦、津貼及扣除項⽬等。<br>
                &nbsp;&nbsp;&nbsp;&nbsp;• 能夠處理特殊⽀付情況，如獎⾦發放或假期薪⽔計算。<br><br>'
            ],
            [
                'title' => '5. 報告和分析：：',
                'content' => '&nbsp;&nbsp;&nbsp;&nbsp;• ⽣成詳細的勞動⼒成本報告和員⼯出勤分析。<br>
                &nbsp;&nbsp;&nbsp;&nbsp;• 幫助管理層了解⼈⼒資源配置的效率，並作出相應調整。<br><br>'
            ]
        ];
        $footer = '歡迎與我們聯繫，您將可以索取到7天試⽤版。<br>我們將會有產品專員與您接洽，提供您更多使⽤⽅針，並能針對您的需求進⾏客製化調整。';
        $img = asset('images/product/hr/hr_large.jpg');
        $imgRound = asset('images/product/hr/hr_circle2.jpg');

        return view('productservice', compact('title1', 'title2', 'firstword', 'conect1', 'conect2', 'steps', 'img', 'imgRound', 'footer'));
    }

    public function finance()
    {
        $title1 = '財務報銷系統';
        $title2 = '簡化申報流程，提升⼯作效率';
        $firstword = '也';
        $conect1 = '被稱為員⼯報帳系統，是⼀種專⾨設計來管理企業員⼯因業務需要⽽產⽣的費⽤報銷的⼯具。<br><br>';
        $conect2 = '具有以下幾個核⼼功能：';
        $steps = [
            [
                'title' => '1. ⾃動化提交流程：',
                'content' => '&nbsp;&nbsp;&nbsp;&nbsp;• 員⼯可以透過系統界⾯直接輸入費⽤明細，並上傳相關憑證，如發票和收據。<br>
                &nbsp;&nbsp;&nbsp;&nbsp;• 系統可以⾃動識別和分類費⽤類型，簡化錄入過程。<br><br>'
            ],
            [
                'title' => '2. 多級審批結構：',
                'content' => '&nbsp;&nbsp;&nbsp;&nbsp;• 設置多級審核流程，不同層級的管理者根據設定的權限審核報銷申請。<br>
                &nbsp;&nbsp;&nbsp;&nbsp;• ⽀持設定條件審批，例如超過特定⾦額的申請需要更⾼層級的批准。<br><br>'
            ],
            [
                'title' => '3. 即時通知和更新：',
                'content' => '&nbsp;&nbsp;&nbsp;&nbsp;• 系統會⾃動通知審批者有新的報銷請求待處理。<br>
                &nbsp;&nbsp;&nbsp;&nbsp;• 員⼯可以在系統中實時查看他們的報銷申請狀態，包括已審批、待審批或被拒絕。<br><br>'
            ],
            [
                'title' => '4. 預算和費⽤控制：',
                'content' => '&nbsp;&nbsp;&nbsp;&nbsp;• 允許管理層設定預算限制，並將員⼯的報銷與部⾨或項⽬預算相關聯。<br>
                &nbsp;&nbsp;&nbsp;&nbsp;• 系統提供警告或阻⽌功能，以防⽌超出預算的⽀出。<br><br>'
            ],
            [
                'title' => '5. 報表⽣成和分析⼯具：',
                'content' => '&nbsp;&nbsp;&nbsp;&nbsp;• 提供強⼤的報表⽣成⼯具，可分析報銷趨勢、員⼯⽀出⾏為和預算執⾏情況。<br>
                &nbsp;&nbsp;&nbsp;&nbsp;• 幫助管理層做出基於數據的決策，改進財務管理和成本控制。<br><br>'
            ],
            [
                'title' => '6. 整合與互操作性：',
                'content' => ' &nbsp;&nbsp;&nbsp;&nbsp;• 可與其他財務和⼈⼒資源管理系統（如ERP或HRIS）集成，實現數據的無縫對接。<br>
                &nbsp;&nbsp;&nbsp;&nbsp;• ⽀持從外部系統導入數據和對外輸出報告，增強系統的實⽤性和靈活性。<br><br>'
            ],
        ];


        
        $footer = '歡迎與我們聯繫，您將可以索取到7天試⽤版。<br>我們將會有產品專員與您接洽，提供您更多使⽤⽅針，並能針對您的需求進⾏客製化調整。';
        $img = asset('images/product/finance/finance-1.jpg');
        $imgRound = asset('images/product/finance/finance_sq2.png');

        return view('productservice', compact('title1', 'title2', 'firstword', 'conect1', 'conect2', 'steps', 'img', 'imgRound', 'footer'));
    }

    public function education()
    {


        $title1 = '教育業管理系統';
        $title2 = '簡化溝通屏障，增加師⽣互動';
        $firstword = '教';
        $conect1 = '育業管理系統（Education Management System, EMS）是⼀種全⽅位的技術解決⽅案，旨在提升教育機構的運營效率和管理效果。
                    這類系統整合了從學⽣註冊、課程安排、考勤管理到成績管理等多個核⼼功能，並加入了財務管理模塊以處理學費收取、繳費單的⽣成與列印、以及收據的發放。<br><br>';
        $conect2 = '下⾯將詳細介紹這些功能：';



        $steps = [
            [
                'title' => '1. 學⽣註冊管理：',
                'content' => '&nbsp;&nbsp;&nbsp;&nbsp;• 員⼯可以透過系統界⾯直接輸入費⽤明細，並上傳相關憑證，如發票和收據。<br>
                &nbsp;&nbsp;&nbsp;&nbsp;• 系統可以⾃動識別和分類費⽤類型，簡化錄入過程。<br><br>'
            ],
            [
                'title' => '2. 課程安排管理：',
                'content' => '&nbsp;&nbsp;&nbsp;&nbsp;• 系統⽀持新學⽣的錄入過程，包括個⼈資料、聯絡信息和學歷背景等。<br>
                &nbsp;&nbsp;&nbsp;&nbsp;• 提供易於使⽤的介⾯供學⽣更新信息及進⾏課程選擇和註冊。<br><br>'
            ],
            [
                'title' => '3. 考勤管理：',
                'content' => '&nbsp;&nbsp;&nbsp;&nbsp;• ⾃動追踪學⽣的出席情況，並提供詳細的考勤報告。<br>
                &nbsp;&nbsp;&nbsp;&nbsp;• 系統可以設置警告和通知，針對出勤異常的學⽣進⾏提醒。<br><br>'
            ],
            [
                'title' => '4. 成績管理：',
                'content' => '&nbsp;&nbsp;&nbsp;&nbsp;• 教師可以通過系統輸入、更新學⽣的成績，並進⾏成績分析。<br>
                &nbsp;&nbsp;&nbsp;&nbsp;• 系統提供成績單⽣成和發布功能，學⽣和家長可以隨時查看。<br><br>'
            ],
            [
                'title' => '5. 財務管理與收費功能：',
                'content' => '學費設定：根據不同課程和活動設定相應的學費。<br>
                &nbsp;&nbsp;&nbsp;&nbsp;• 學費收取：系統⽀持多種⽀付⽅式，如現場⽀付、線上轉賬等。<br>
                &nbsp;&nbsp;&nbsp;&nbsp;• 繳費單與收據的⽣成和列印：當學費⽀付確認後，系統⾃動⽣成繳費單和收據。這些⽂件可以是電⼦形式，也可以實體列印，以供正式記錄和財務審計。<br><br>'
            ],
            [
                'title' => '6. ⽇常通知和作業記錄：',
                'content' => ' &nbsp;&nbsp;&nbsp;&nbsp;• 教師可以通過系統發布每⽇或每週的課程作業，特別注意事項，以及即將來臨的學校活動等信息。<br>
                &nbsp;&nbsp;&nbsp;&nbsp;• 家長和學⽣可以隨時查看這些信息，確保不錯過任何重要通知。<br><br>'
            ],
            [
                'title' => '7. 教師與家長的直接溝通：',
                'content' => ' &nbsp;&nbsp;&nbsp;&nbsp;• 教師可以通過系統發布每⽇或每週的課程作業，特別注意事項，以及即將來臨的學校活動等信息。<br>
                &nbsp;&nbsp;&nbsp;&nbsp;• 家長和學⽣可以隨時查看這些信息，確保不錯過任何重要通知。<br><br>'
            ],
            [
                'title' => '8. 學⽣表現和⾏為記錄：',
                'content' => '&nbsp;&nbsp;&nbsp;&nbsp;• 教師可以記錄學⽣在課堂上的表現、參與度以及任何需要注意的⾏為問題。<br>
                &nbsp;&nbsp;&nbsp;&nbsp;• 這些記錄對家長來說是透明的，有助於家長更好地了解孩⼦在學校的⽇常表現。<br><br>'
            ],
            [
                'title' => '9. 互動式反饋和評價：',
                'content' => '&nbsp;&nbsp;&nbsp;&nbsp;• 家長可以通過系統對學校的教學活動提供反饋，包括對教師的評價。<br>
                &nbsp;&nbsp;&nbsp;&nbsp;• 這種互動式的反饋機制有助於學校持續改進教學質量和學習環境。<br><br>'
            ],
            [
                'title' => '10. 家庭作業和測試提醒：',
                'content' => ' &nbsp;&nbsp;&nbsp;&nbsp;• 教師可以通過系統發布每⽇或每週的課程作業，特別注意事項，以及即將來臨的學校活動等信息。<br>
                &nbsp;&nbsp;&nbsp;&nbsp;• 家長和學⽣可以隨時查看這些信息，確保不錯過任何重要通知。<br><br>'
            ],
            [
                'title' => '11. 報告和分析⼯具：',
                'content' => '&nbsp;&nbsp;&nbsp;&nbsp;• 提供豐富的報告⽣成⼯具，如學⽣績效、財務狀態、考勤統計等，幫助管理層進⾏決策⽀持。<br><br>'
            ],
            [
                'title' => '',
                'content' => '這類系統不僅提⾼了教育機構管理的效率，也提升了學⽣和家長的滿意度，因為它們能夠更好地跟蹤學習進展和財務狀況。透過整合學⽣管理、課程安排、考勤、成績和財務功能於⼀體的教育業管理系統，學校能夠更有效地運作，同時減少錯誤和提⾼資料透明度。<br>'
            ],


        ];
        $footer = '歡迎與我們聯繫，您將可以索取到7天試⽤版。<br>我們將會有產品專員與您接洽，提供您更多使⽤⽅針，並能針對您的需求進⾏客製化調整。';

        $img = asset('images/product/education/educational_system2.jpg');
        $imgRound = asset('images/product/education/educational_system_sq2.png');

        return view('productservice', compact('title1', 'title2', 'firstword', 'conect1', 'conect2', 'steps', 'img', 'imgRound', 'footer'));
    }

    public function waitplusegg()
    {
        $title1 = '訂位／候位系統';
        $title2 = '強化品牌形象、降低運營成本';
        $firstword = '這';
        $conect1 = '套系統在各⾏各業中非常重要，特別是在餐飲、醫療和服務業。能夠幫助企業有效管理客⼾流、預約和等待時間，提升客⼾滿意度和操作效率。<br><br>';
        $conect2 = '以下分別介紹這三種系統的基本功能和應⽤：';

        $steps = [
            [
                'title' => '1. 預訂座位系統',
                'content' => '預訂座位系統允許客⼾提前預訂餐廳、劇院、電影院等場所的座位。<br>
                &nbsp;&nbsp;&nbsp;&nbsp;• 在線預訂功能：客⼾可以通過網站、應⽤程式預訂座位。<br>
                &nbsp;&nbsp;&nbsp;&nbsp;• 座位選擇：提供可視化的座位圖，讓顧客⾃選座位。<br>
                &nbsp;&nbsp;&nbsp;&nbsp;• ⾃動化管理：系統⾃動管理座位分配和預訂狀況，避免重複預訂和過度預訂。<br>
                &nbsp;&nbsp;&nbsp;&nbsp;• 客⼾數據收集：收集客⼾偏好和歷史預訂數據，有助於未來的市場分析和服務改進。<br><br>'
            ],
            [
                'title' => '2. 掛號系統',
                'content' => '掛號系統主要應⽤於醫療⾏業，使患者可以預約看病的時間，減少候診時間並提⾼診所的運營效率。<br>
                &nbsp;&nbsp;&nbsp;&nbsp;• 在線預約：患者可以通過醫院的網站或移動應⽤程式進⾏掛號。<br>
                &nbsp;&nbsp;&nbsp;&nbsp;• 預約確認與提醒：系統會⾃動發送預約確認和即將到來的預約提醒給患者。<br>
                &nbsp;&nbsp;&nbsp;&nbsp;• 調度管理：幫助醫療機構調度醫⽣和醫療資源，確保⾼效運營。<br>                
                &nbsp;&nbsp;&nbsp;&nbsp;• 病歷整合：整合患者的病歷資訊，⽅便醫⽣查看病史和提供個性化的醫療服務。<br><br>'
            ],
            [
                'title' => '3. 候位系統',
                'content' => '候位系統適⽤於需要管理排隊等候的場景，如餐廳、銀⾏服務台等。<br>
                &nbsp;&nbsp;&nbsp;&nbsp;• 實時候位跟踪：讓客⼾知道他們在隊列中的位置以及估計的等待時間。<br>
                &nbsp;&nbsp;&nbsp;&nbsp;• 虛擬排隊：客⼾可以透過⼿機加入虛擬排隊，不必實體站在隊伍中。<br>
                &nbsp;&nbsp;&nbsp;&nbsp;• 通知系統：當接近客⼾的輪候時，系統會通過短信或應⽤推送通知客⼾。<br>
                &nbsp;&nbsp;&nbsp;&nbsp;• 數據分析：收集等候時間和客⼾流量數據，幫助管理層優化流程和服務。<br><br>'
            ],
            [
                'title' => '',
                'content' => '這套系統可以⼤⼤提升服務質量，降低運營成本，並增強顧客滿意度。'
            ],

        ];
        $footer = '歡迎與我們聯繫，您將可以索取到30天試⽤版。<br>我們將會有產品專員與您接洽，提供您更多使⽤⽅針，並能針對您的需求進⾏客製化調整。';

        $img = asset('images/product/qwait/waitplusegg_1.jpeg');
        $imgRound = asset('images/product/qwait/waitplusegg_logo.png');

        return view('productservice', compact('title1', 'title2', 'firstword', 'conect1', 'conect2', 'steps', 'img', 'imgRound', 'footer'));
    }

    public function chatbot()
    {
        $title1 = '客服系統';
        $title2 = '提升線上客服效率，專注線上轉換';
        $firstword = '客';
        $conect1 = '服系統的功能及其在實際使⽤中的優勢非常關鍵於提升客服效率和客⼾滿意度。<br><br>';
        $conect2 = '以下是我們的客服系統核⼼功能及其實際使⽤時的優勢：';
        $steps = [
            [
                'title' => '1. 管理客服團隊上下線：',
                'content' => '&nbsp;&nbsp;&nbsp;&nbsp;• 功能：允許管理者實時監控客服人員的上線狀態，並根據需求調整人力資源配置。<br>
                &nbsp;&nbsp;&nbsp;&nbsp;• 優勢：確保在客戶需求高峰期有足夠的客服人員處理查詢，減少顧客等待時間，提升服務效率。<br><br>'
            ],
            [
                'title' => '2. 自動配對網站來客及服務人員：',
                'content' => '&nbsp;&nbsp;&nbsp;&nbsp;• 功能：根據客戶查詢的性質和服務人員的專長或可用性，自動將客戶與最合適的客服人員匹配。<br>
                &nbsp;&nbsp;&nbsp;&nbsp;• 優勢：提高解決問題的效率和準確性，同時確保客戶獲得最佳的個性化服務體驗。<br><br>'
            ],
            [
                'title' => '3. 可設置自動回應資料庫：',
                'content' => '&nbsp;&nbsp;&nbsp;&nbsp;• 功能：建立一個包含常見問題解答和標準回復的資料庫，用於自動回應客戶查詢。<br>
                &nbsp;&nbsp;&nbsp;&nbsp;• 優勢：減輕客服人員的負擔，加快回應速度，並提供24/7的即時客服支持，特別是對於簡單或重複的問題。<br><br>'
            ],
            [
                'title' => '4. 同步客戶資料管理：',
                'content' => '&nbsp;&nbsp;&nbsp;&nbsp;• 功能：集成的客戶資料管理系統，能夠同步並更新客戶的個人資料、購買歷史和互動記錄。<br>
                &nbsp;&nbsp;&nbsp;&nbsp;• 優勢：使客服⼈員能夠獲得客⼾的全⾯資訊，提供更個性化和⾼效的服務，並建立更深層的客⼾關係。<br><br>
                這些功能結合使⽤時，不僅提升了客服部⾨的運作效率，還能顯著提⾼客⼾滿意度和忠誠度。通過技術⾃動化和數據驅動的決策，企業能夠更好地應對客⼾需求，並在競爭激烈的市場中保持領先。<br>'
            ],
        ];

        $footer = '歡迎與我們聯繫，您將可以索取到7天試⽤版。<br>我們將會有產品專員與您接洽，提供您更多使⽤⽅針，並能針對您的需求進⾏客製化調';
        $img = asset('images/product/chatbot/chatbot.jpg');
        $imgRound = asset('images/product/chatbot/chat-bot2.png');

        return view('productservice', compact('title1', 'title2', 'firstword', 'conect1', 'conect2', 'steps', 'img', 'imgRound', 'footer'));
    }

    public function form()
    {
        $title1 = '⽂件管理系統';
        $title2 = '有效跟進⼯作、進⾏多部⾨整合';
        $firstword = '文';
        $conect1 = '件管理系統（Document Management System, DMS）<br><br>';
        $conect2 = '是⼀種⽤於存儲、管理和追蹤電⼦⽂件（如電⼦⽂檔）的軟體系統。這類系統主要⽬的是幫助⽤⼾⾼效地組織、查找和管理⼤量的⽂檔和資料。';
        $steps = [
            [
                'title' => '1. 存儲管理：',
                'content' => '提供一個中央存儲庫來保存所有文件，支持各種文件格式。<br><br>'
            ],
            [
                'title' => '2. 版本控制：',
                'content' => '追蹤文件的歷史版本，允許用戶訪問舊版本並了解文件的修改歷程。<br><br>'
            ],
            [
                'title' => '3. 訪問控制：',
                'content' => '設定不同的權限給不同的用戶或組，控制誰可以查看、修改或刪除文件。<br><br>'
            ],
            [
                'title' => '4. 檢索功能：',
                'content' => '提供強大的搜索工具，便於快速找到所需文件。<br><br>'
            ],
            [
                'title' => '5. 審計追蹤：',
                'content' => '記錄誰何時訪問過文件，對文件進行了什麼操作，以增強文件的安全性和合規性。<br><br>'
            ],
            [
                'title' => '6. 自動化工作流：',
                'content' => '整合業務流程，如文件審批、分發和匯報，自動化這些過程以提升效率。<br><br>'
            ]
        ];
        $footer = '歡迎與我們聯繫，您將可以索取到7天試⽤版。我們將會有產品專員
        與您接洽，提供您更多使⽤⽅針，並能針對您的需求進⾏客製化調
        整。';

        $img = asset('images/product/form/Form_system.jpg');
        $imgRound = asset('images/product/form/form_logo2.png');

        return view('productservice', compact('title1', 'title2', 'firstword', 'conect1', 'conect2', 'steps', 'img', 'imgRound', 'footer'));
    }

    public function minigame()
    {
        $title1 = '網⾴⼩遊戲訂製';
        $title2 = '增加⽤⼾黏著度，提升回頭率與忠誠度';
        $firstword = '訂';
        $conect1 = '製網⾴⼩遊戲是⼀個非常有趣且具有挑戰性的項⽬，適合企業、教育機構或個⼈希望透過遊戲來吸引觀眾、教育⽤⼾或提⾼品牌知名度。<br><br>';
        $conect2 = '  以下是訂製網⾴⼩遊戲的介紹和步驟：';
        $steps = [
            [
                'title' => '1. 確定目標與需求',
                'content' => '首先，明確你的遊戲目標。你是希望通過遊戲來宣傳品牌、教育用戶、收集數據還是提供娛樂？了解目標將有助於設計遊戲機制和內容。<br><br>'
            ],
            [
                'title' => '2. 設計遊戲概念',
                'content' => '確定遊戲的類型和概念，包括遊戲劇情、角色設定、遊戲規則等。你可以選擇動作遊戲、益智遊戲、策略遊戲等。<br><br>'
            ],
            [
                'title' => '3. 遊戲開發',
                'content' => '根據設計和需求進行遊戲開發。這包括：<br>
                &nbsp;&nbsp;&nbsp;&nbsp;• 程式設計：編寫遊戲邏輯、用戶介面和互動。<br>
                &nbsp;&nbsp;&nbsp;&nbsp;• 美術設計：設計遊戲中的圖形、動畫和視覺效果。<br>
                &nbsp;&nbsp;&nbsp;&nbsp;• 音效和音樂：增加遊戲的沉浸感和娛樂性。<br><br>'
            ]
        ];
        $footer = '歡迎與我們聯繫，我們的客⼾專員可以針對您的想法，設計客制您的網⾴⼩遊戲，給予更多專業規劃及建議';

        $img = asset('images/product/minigame/mini_games1.jpg');
        $imgRound = asset('images/product/minigame/mini_game_logo2.png');
        return view('productservice', compact('title1', 'title2', 'firstword', 'conect1', 'conect2', 'steps', 'img', 'imgRound', 'footer'));
    }
    public function customer()
    {
        $title1 = '會員註冊及積分系統';
        $title2 = '提⾼會員管理服務，有效進⾏⾏銷';
        $firstword = '會';
        $conect1 = '員註冊及積分系統是⼀個⽤於管理會員信息和積分的系統，主要功能包括會員註冊、會員資
        料管理、積分管理和報表統計。此系統可以幫助企業有效地管理會員，提升會員參與度，並通過積分激勵會員進⾏更多的互動和消費。<br><br>';
        $conect2 = '以下是該系統的詳細介紹：';
        $steps = [
            [
                'title' => '1. 會員註冊及登錄系統',
                'content' => ' &nbsp;&nbsp;&nbsp;&nbsp;• 會員註冊：新用戶可以通過提供姓名、電子郵件、密碼等基本信息來註冊成為會員。系統會對輸入信息進行驗證，確保資料的完整性和有效性。<br>
                 &nbsp;&nbsp;&nbsp;&nbsp;• 會員登錄：已註冊的會員可以使用電子郵件和密碼登錄系統，訪問其個人資料和積分信息。<br>
                 &nbsp;&nbsp;&nbsp;&nbsp;• 密碼重置及修改：會員可以重置或修改密碼，確保賬戶安全。<br><br>'
            ],
            [
                'title' => '2. 會員管理系統',
                'content' => ' &nbsp;&nbsp;&nbsp;&nbsp;• 查看會員資料：管理員和會員本人可以查看會員的基本信息，如姓名、電子郵件、註冊日期等。<br>
                 &nbsp;&nbsp;&nbsp;&nbsp;• 更新會員資料：會員可以更新其個人資料，如修改姓名、電子郵件地址等。<br>
                 &nbsp;&nbsp;&nbsp;&nbsp;• 刪除會員：管理員可以刪除不活躍或違規的會員賬戶。<br><br>'
            ],
            [
                'title' => '3. 積分管理系統',
                'content' => ' &nbsp;&nbsp;&nbsp;&nbsp;• 積分查詢：會員可以查看其當前的積分餘額及積分獲取/消耗的歷史記錄。<br>
                 &nbsp;&nbsp;&nbsp;&nbsp;• 積分增加：會員可以通過購物、參加活動等方式獲取積分。系統會自動更新積分餘額。<br>
                 &nbsp;&nbsp;&nbsp;&nbsp;• 積分扣減：會員退貨或其他情況下，系統會相應地扣減積分。<br>
                 &nbsp;&nbsp;&nbsp;&nbsp;• 積分兌換：會員可以用積分兌換獎品或優惠券，系統會記錄兌換操作並更新積分餘額。<br><br>'
            ],
            [
                'title' => '4. 報表及統計系統',
                'content' => ' &nbsp;&nbsp;&nbsp;&nbsp;• 積分累計報表：提供會員積分累計情況的報表，幫助企業了解會員活躍度和忠誠度。<br>
                 &nbsp;&nbsp;&nbsp;&nbsp;• 會員活動報表：統計會員的活動情況，如購物頻率、參與活動次數等。<br>
                 &nbsp;&nbsp;&nbsp;&nbsp;• 積分兌換報表：記錄和統計會員積分兌換情況，幫助企業了解哪些獎品或優惠最受歡迎。<br><br>'
            ]
        ];
        $footer = '歡迎與我們聯繫，您將可以索取到7天試⽤版。<br>我們將會有產品專員與您接洽，提供您更多使⽤⽅針，並能針對您的需求進⾏客製化調整。';

        $img = asset('images/product/customer_reg/customer_registration1.jpg');
        $imgRound = asset('images/product/customer_reg/customer_registration_logo2.png');
        return view('productservice', compact('title1', 'title2', 'firstword', 'conect1', 'conect2', 'steps', 'img', 'imgRound', 'footer'));
    }

    public function survery()
    {
        $title1 = '問卷調查及數據統計系統';
        $title2 = '掌握⼤數據，未來⼤獲利';
        $firstword = '問';
        $conect1 = '卷調查及數據統計系統是⼀套⽤於設計、分發問卷並分析和報告調查數據的⼯具。這套系統在學術研究、商業市場調查、社會科學研究和客⼾反饋收集中廣泛應⽤。';
        $conect2 = '以下是這套系統的主要功能及其相關介紹：';
        $steps = [
            [
                'title' => '1. 問卷設計與管理',
                'content' => '&nbsp;&nbsp;&nbsp;&nbsp;• 問卷設計：提供多種題型（如單選、多選、開放式問題、量表題等）的設計工具，支持多語言問卷設計。<br>
                &nbsp;&nbsp;&nbsp;&nbsp;• 邏輯跳轉：根據受訪者的回答，自動跳轉到相關問題，避免不相關問題干擾。<br>
                &nbsp;&nbsp;&nbsp;&nbsp;• 模板與佈局：提供豐富的問卷模板和自定義佈局選項，以提高問卷美觀度和回覆率。<br><br>'
            ],
            [
                'title' => '2. 問卷分發',
                'content' => '&nbsp;&nbsp;&nbsp;&nbsp;• 多渠道分發：支持通過電子郵件、社交媒體、短信、QR碼和嵌入網站等多種渠道分發問卷。<br>
                &nbsp;&nbsp;&nbsp;&nbsp;• 匿名與實名調查：可以選擇匿名回答或實名回答，保護受訪者隱私或收集詳細身份信息。<br><br>'
            ],
            [
                'title' => '3. 數據收集',
                'content' => '&nbsp;&nbsp;&nbsp;&nbsp;• 實時數據收集：即時收集受訪者的回應，提供實時數據更新。<br>
                &nbsp;&nbsp;&nbsp;&nbsp;• 多設備支持：支持PC、手機和平板等多種設備答題，增強受訪者的便利性。<br><br>'
            ],
            [
                'title' => '4. 數據分析',
                'content' => '&nbsp;&nbsp;&nbsp;&nbsp;• 基本統計分析：如平均值、標準差、分布等基本統計指標的計算。<br>
                &nbsp;&nbsp;&nbsp;&nbsp;• 高級分析：包括回歸分析、因素分析、聚類分析等。<br>
                &nbsp;&nbsp;&nbsp;&nbsp;• 交叉分析：對不同變量之間的關係進行分析，以發現數據中的模式和趨勢。<br>
                &nbsp;&nbsp;&nbsp;&nbsp;• 圖表生成：自動生成各類圖表（如柱狀圖、餅圖、折線圖等）以可視化數據。<br><br>'
            ],
            [
                'title' => '5. 報告生成',
                'content' => '&nbsp;&nbsp;&nbsp;&nbsp;• 自動報告：系統根據分析結果自動生成報告，包含文字總結和圖表。<br>
                &nbsp;&nbsp;&nbsp;&nbsp;• 自定義報告：用戶可根據需求定制報告格式和內容，添加評論和解釋。<br><br>'
            ],
            [
                'title' => '6. 數據導出與集成',
                'content' => '&nbsp;&nbsp;&nbsp;&nbsp;• 數據導出：支持將數據導出為多種格式（如Excel、CSV、SPSS等）以便進一步分析。<br>
                &nbsp;&nbsp;&nbsp;&nbsp;• 系統集成：與其他系統（如CRM、ERP等）集成，實現數據的自動同步和分析。<br><br>'
            ],
            [
                'title' => '系統應用場景',
                'content' => '&nbsp;&nbsp;&nbsp;&nbsp;• 市場調查：了解消費者需求和行為，評估市場潛力，制定市場策略。<br>
                &nbsp;&nbsp;&nbsp;&nbsp;• 學術研究：收集研究數據，驗證研究假設，進行學術論文寫作。<br>
                &nbsp;&nbsp;&nbsp;&nbsp;• 客戶反饋：收集客戶對產品或服務的反饋，改進產品質量和服務水平。<br>
                &nbsp;&nbsp;&nbsp;&nbsp;• 員工調查：了解員工滿意度、需求和意見，提升工作環境和企業文化。<br>
                &nbsp;&nbsp;&nbsp;&nbsp;• 公共意見調查：收集社會各界對某些公共議題的看法和建議。<br><br>'
            ]
        ];
        $footer = '歡迎與我們聯繫，您將可以索取到7天試⽤版。<br>我們將會有產品專員與您接洽，提供您更多使⽤⽅針，並能針對您的需求進⾏客製化調整。';
        $img = asset('images/product/survey/survey_system1.jpg');
        $imgRound = asset('images/product/survey/survery_logo2.png');
        return view('productservice', compact('title1', 'title2', 'firstword', 'conect1', 'conect2', 'steps', 'img', 'imgRound', 'footer'));
    }


    public function policy()
    {
        
        return view('policy');
    }
    
    public function service()
    {
        
        return view('service');
    }
}
