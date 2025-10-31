<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Service;
use App\Models\Ressume;
use App\Models\Skills;
use App\Models\Settings;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $banners=Banner::all();
        $foot_banners=Banner::all();
        $services=Service::all();
        $ressumes=Ressume::all();
        $skills=Skills::all();
        $settings = Settings::first();
        return view('frontend.pages.index', compact('banners','foot_banners','services', 'ressumes','skills','settings'));
    }
}
