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
        $data=Nilai::orderBy('id','desc')->get();
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

    function transkrip(){
        $data=Nilai::orderBy('id','desc')->get();
        return view('kepala.transkip_siswa',[
            'data' =>$data
        ]);
    }

    function cetak_nilai(){
        $data=Nilai::orderBy('rata_raport','asc')->get();
        return view('cetak.cetak_nilai',[
            'data' =>$data
        ]);
    }

    function cetak_daftar_nilai($id){
        $dt=Nilai::where('id',$id)->first();
        $siswa=Siswa::where('id',$dt->siswa_id)->first();
        return view('cetak.cetak_dnilai',[
            'dt' =>$dt,
            'siswa' =>$siswa
        ]);
    }

    function cetak_ijazah($id){
        $dt=Nilai::where('id',$id)->first();
        $siswa=Siswa::where('id',$dt->siswa_id)->first();
        return view('cetak.cetak_ijazah',[
            'dt' =>$dt,
            'siswa' =>$siswa
        ]);
    }


    

    function role(){
        $data=Admin::orderBy('id','asc')->get();
        return view('admin.k_role_data',[
            'data' =>$data
        ]);
    }
   
     function role_edit($id){
        $data_user=Admin::where('id',$id)->first();
        $data=Admin::orderBy('id','asc')->get();
   
        return view('admin.k_role_data',[
            'data' =>$data,
            'd_user' =>$data_user
        ]);
    }
   
     function role_update(Request $request){
       $request->validate([
            'username' => 'required',
            'password' => 'required',
            'role' => 'required',
       ]);
       $cek_admin=Admin::where('level',1)->count();
       $cek_kapus=Admin::where('level',2)->count();
   
   
       if($cek_admin < 3 || $cek_kapus < 1 ){
           if($request->role == 1){
               Admin::insert([
                   'username' => $request->username,
                   'password' => bcrypt($request->password),
                   'level' => 1,
                   'status' => 1,
               ]);
        return redirect('/dashboard/kepsek/role/data')->with('alert-success','data telah berhasil ditambahkan');
   
            }elseif($request->role == 2){
           Admin::insert([
                'username' => $request->username,
               'password' => bcrypt($request->password),
               'level' => 2,
               'status' => 1
           ]);
        return redirect('/dashboard/kepsek/role/data')->with('alert-success','data telah berhasil ditambahkan');
   
       }
       }else{
   
        return redirect('/dashboard/kepsek/role/data')->with('alert-success','maaf data sudah maksimal');
   
       }
       
    }
   
    function role_delete($id){
        Admin::where('id',$id)->delete();
        return redirect('/dashboard/kepsek/role/data')->with('alert-success','Data telah terhapus');
   
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
