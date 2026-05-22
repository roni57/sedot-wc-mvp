<?php

namespace App\Http\Controllers;

use App\Models\SiteSetting;
use App\Models\Service;
use App\Models\Benefit;
use App\Models\Testimonial;
use App\Models\Step;
use App\Models\Stat;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $settings = SiteSetting::all()->pluck('value', 'key')->toArray();
        $services = Service::orderBy('order_index')->get();
        $benefits = Benefit::orderBy('order_index')->get();
        $testimonials = Testimonial::orderBy('order_index')->get();
        $steps = Step::orderBy('order_index')->get();
        $stats = Stat::orderBy('order_index')->get();

        return view('welcome', compact('settings', 'services', 'benefits', 'testimonials', 'steps', 'stats'));
    }
}
