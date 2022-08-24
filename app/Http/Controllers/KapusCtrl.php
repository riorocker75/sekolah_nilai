<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

use Illuminate\Support\Str;

use Illuminate\Support\Facades\Hash;


use App\Models\User;
use App\Models\Siswa;
use App\Models\Nilai;
use App\Models\Transaksi;



use App\Models\Admin;

class KapusCtrl extends Controller
{
  	public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if(!Session::get('login-kp')){
                return redirect('/login')->with('alert-danger','Dilarang Masuk Terlarang');
            }
            return $next($request);
        });
        
    }
    
    function index(){
        return view('kepala.kepala');
    }

    function siswa(){
        $data=Siswa::orderBy('id','desc')->get();
        return view('kepala.siswa_data',[
            'data' =>$data
        ]);
    }

    function nilai(){
        $data=Nilai::orderBy('id','desc')->get();
        return view('kepala.nilai_data',[
            'data' =>$data
        ]);
    }


      
    function pengaturan(){
        $username= Session::get('kp_username');
        $data= Admin::where('username',$username)->first();
        return view('kepala.pengaturan',[
            'data'=> $data
        ]);

    }

     function pengaturan_update(Request $request){
   
        if($request->password == ""){
            return redirect('/dashboard/kepsek')->with('alert-success','Tidak Ada perubahan');
        }else{
            Admin::where('level','2')->update([
                'password' =>bcrypt($request->password)
            ]);
            return redirect('/kepsek/pengaturan/data')->with('alert-success','Password telah berubah');

        }

    }




}
