<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

class HomeController extends Controller
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
    public function index(Request $request)
    {   
        if(empty($request->selMonth)){
            $ceramahs = DB::table('ceramah')
                ->where("month",'=', Carbon::now()->month )
                ->orderBy('id', 'desc')->get();
        }else{
            $ceramahs = DB::table('ceramah')
                ->where("month",'=', $request->selMonth )
                ->orderBy('id', 'desc')->get();
        }

        foreach ($ceramahs as $ceramah) {
            $fl = $this->firstLetter($ceramah->penceramah);
            $ceramah->fl = $fl;

            $datetime = new Carbon($ceramah->tarikh);

            $ceramah->tarikh = $datetime->toFormattedDateString();
            $ceramah->diff = $datetime->diffForHumans();
            $ceramah->hari = $datetime->englishDayOfWeek;

            $ceramah->mukasurat = $this->ms($ceramah->ms);
            $ceramah->percent = $this->percent($ceramah->ms);
        }

        return view('home',compact('ceramahs'));
    }

    public function firstLetter($str){
        $words = explode(" ", $str);
        $acronym = "";

        foreach ($words as $w) {
          $acronym .= $w[0];
        }

        return $acronym;
    }

    public function ms($str){
        $words = explode("/", $str);
        $acronym = "";

        if(sizeof($words) == 2){
            $first = $words[0];
            $second = $words[1];
            $percent = $first / $second * 100;
            
            return $first;
        }else{
            return "-";
        }
    }

    public function percent($str){
        $words = explode("/", $str);
        $acronym = "";

        if(sizeof($words) == 2){
            $first = $words[0];
            $second = $words[1];
            $percent = $first / $second * 100;
            
            return $percent.'%';
        }else{
            return "100%";
        }

    }
}
