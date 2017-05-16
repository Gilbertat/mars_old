<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    // 返回静态视图 例如 header, footer, 静态body等
    public function create()
    {
        return '返回静态页面';
    }
}
