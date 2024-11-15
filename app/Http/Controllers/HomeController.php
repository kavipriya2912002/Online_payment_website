<?php
namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // $popularServices = Service::orderBy('popularity', 'desc')->take(6)->get();
        // $testimonials = Testimonial::latest()->take(3)->get();

        return view('home');
    }

    public function pay()
    {
        // $popularServices = Service::orderBy('popularity', 'desc')->take(6)->get();
        // $testimonials = Testimonial::latest()->take(3)->get();

        return view('paytm');
    }
}
