<?php

namespace App\Http\Controllers\Setup;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Storage;
use Image;
use File;
use Carbon\Carbon;

class CeramahController extends Controller{
	public function __construct(){
        $this->middleware('auth');
    }

    public function view(Request $request){ 
        $ceramahs = DB::table('ceramah')
                    ->where("month",'=', Carbon::now()->format('M') )
                    ->orderBy('id', 'desc')->get();

        return view('setup/ceramah',compact('ceramahs'));
    }

    public function form(Request $request){
    	switch($request->oper){
            case 'add':
                return $this->add($request);
            case 'edit':
                return $this->edit($request);
            case 'del':
                return $this->del($request);
            default:
                return 'error happen..';
        }
    }

    public function add(Request $request){
        DB::beginTransaction();
        try { 

        	DB::table('ceramah')
        		->insert([
        			'name' => $request->name,
        			'ic' => $request->ic,
                    'telno' => $request->telno,
                    'alamat' => $request->alamat
        		]);

        	DB::commit();

        	return redirect()->back();

        } catch (Exception $e) {
            DB::rollback();
            report($e);

            return response('Error'.$e, 500);
        }
    	
    }

    public function edit(Request $request){
    	 DB::beginTransaction();
        try { 

            DB::table('ceramah')->where('id','=',$request->id)
                ->update([
                    'name' => $request->name,
                    'ic' => $request->ic,
                    'telno' => $request->telno,
                    'alamat' => $request->alamat
                ]);

            DB::commit();

            return redirect()->back();

        } catch (Exception $e) {
            DB::rollback();
            report($e);

            return response('Error'.$e, 500);
        }
    }

    public function del(Request $request){
    	DB::beginTransaction();
        try { 

        	DB::table('ceramah')
					->where('id','=',$request->id)
                    ->delete();

        	DB::commit();

        	return redirect()->back();

        } catch (Exception $e) {
            DB::rollback();
            report($e);

            return response('Error'.$e, 500);
        }
    }
}
