<?php

namespace App\Http\Controllers;

use app\models\Banner;
use app\models\Service;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $banners=Banner::all();
        $foot_banners=Banner::all();
        $services=Service::all();
        return view('frontend.pages.index', compact('banners','foot_banners','services'));
    }
}
