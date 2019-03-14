<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

class InfoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function sejarah(Request $request)
    {   
        return view('sejarah');
    }

    public function visi(Request $request)
    {   
        return view('visi');
    }

    public function biro(Request $request)
    {   
        return view('biro');
    }

    public function jawatankuasa(Request $request)
    {   
        return view('jawatankuasa');
    }
    
    public function pencapaian(Request $request)
    {   
        return view('pencapaian');
    }
    
    public function aktiviti(Request $request)
    {   
        return view('aktiviti');
    }
    
    public function jadual(Request $request)
    {   
        return view('jadual');
    }
    
    public function galeri(Request $request)
    {   
        return view('galeri');
    }
}
