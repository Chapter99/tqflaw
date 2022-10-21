<?php

namespace App\Http\Controllers;

use App\Model\Tqf;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        //return view('frontend.pages.index');
        $tqfs = Tqf::latest()->paginate(10);
        return view('frontend.pages.index', compact('tqfs'))->with('i', (request()->input('page', 1) -1 ) * 10);
    }

    public function login(){
        return view('frontend.pages.login');
    }

    public function register(){
        return view('frontend.pages.register');
    }

    public function forgotpass(){
        return view('frontend.pages.forgotpass');
    }

    // ฟังก์ชัน about
    public function about(){
        return view('frontend.pages.about');
    }
}
