<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * メインコントローラークラス
 */
class IndexController extends Controller
{
    /**
     * 入口
     *
     * @return void
     */
    public function index()
    {
        $js_file = "app.js";
        $title = config('app.name', 'Laravel');
        return view('index', compact('js_file', 'title'));
    }
}