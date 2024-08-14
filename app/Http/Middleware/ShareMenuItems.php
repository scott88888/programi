<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ShareMenuItems
{
    public function handle(Request $request, Closure $next)
    {
        $menuItems = [
            ['link' => 'shop', 'text' => 'SHOP·COM夥伴商店串接'],
            ['link' => 'ecommerce', 'text' => '線上購物平台'],
            ['link' => 'hr', 'text' => '人事差勤管理系統'],
            ['link' => 'finance', 'text' => '財務報銷系統'],
            ['link' => 'education', 'text' => '教育業管理系統'],
            ['link' => 'waitforegg', 'text' => '訂位／候位系統'],
            ['link' => 'chatbot', 'text' => '客服系統'],
            ['link' => 'form', 'text' => '文件管理系統'],
            ['link' => 'minigame', 'text' => '網頁小遊戲訂製'],
            ['link' => 'customer', 'text' => '會員註冊及積分統計系統'],
            ['link' => 'survery', 'text' => '問卷調查及數據統計系統'],
        ];

        View::share('menuItems', $menuItems);

        return $next($request);
    }
}