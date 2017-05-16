<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    // 返回用户登录表单页面
    public function create()
    {
        return '登录页面';
    }
}
