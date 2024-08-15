<?php

namespace App\Http\Controllers\Clint;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    // دالة لعرض صفحة الخدمات
    public function ourServices()
    {
        return view('Clint.ourservices');
    }

    // دالة لعرض الصفحة الرئيسية
    public function index()
    {
        return view('Clint.index');
    }

    // دالة لعرض صفحة اتصل بنا
    public function contactUs()
    {
        return view('Clint.contactus');
    }

    // دالة لعرض صفحة حولنا
    public function aboutUs()
    {
        return view('Clint.aboutus');
    }
}
