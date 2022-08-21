<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

use Illuminate\Support\Str;

use Illuminate\Support\Facades\Hash;


use App\Models\User;
use App\Models\Admin;
use App\Models\Siswa;
use App\Models\Nilai;
use App\Models\Transaksi;




class AdminCtrl extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

	public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if(!Session::get('login-adm')){
                return redirect('/login')->with('alert-danger','Dilarang Masuk Terlarang');
            }
            return $next($request);
        });
        
    }
    public function __invoke(Request $request)
    {
       

    }

    function index(){
          return view('admin.admin');
    }

    // data siswa

    function siswa(){
        $data=Siswa::orderBy('id','desc')->get();
        return view('admin.siswa_data',[
            'data'=>$data
        ]);
    }

    function siswa_add(){
        return view('admin.siswa_add');
    }
    function siswa_act(Request $request){
        $request->validate([
            'nama' => 'required'
        ]);

         $date=date('Y-m-d');

     DB::table('siswa')->insert([
        'nama' => $request->nama,
        'nis' =>$request->nis,
        'jenis_kelamin' => $request->kelamin,
        'tgl_lhr' => $request->tgl_lhr,
        'tmp_lhr' => $request->tmp_lhr,
        'nisn' =>$request->nisn,
        'no_un' =>$request->no_un,
        'tanggal' =>$date,
        'status' => 1
    ]);
    return redirect('/dashboard/siswa/data')->with('alert-success','Data Berhasil disimpan');

    }
    function siswa_edit($id){
        $data=Siswa::where('id',$id)->get();
        return view('admin.siswa_edit',[
            'data' =>$data
        ]);
    }


    function siswa_update(Request $request){
        $request->validate([
            'nama' => 'required'
        ]);
        $id=$request->id;


        DB::table('siswa')->where('id',$id)->update([
            'nama' => $request->nama,
            'nis' =>$request->nis,
            'jenis_kelamin' => $request->kelamin,
            'tgl_lhr' => $request->tgl_lhr,
            'tmp_lhr' => $request->tmp_lhr,
            'nisn' =>$request->nisn,
            'no_un' =>$request->no_un,
        
        ]);
        return redirect('/dashboard/siswa/data')->with('alert-success','Data Berhasil disimpan');

    }

    function siswa_delete($id){
        Siswa::where('id',$id)->delete();
        return redirect('/dashboard/siswa/data')->with('alert-success','Data Berhasil disimpan');

    }

   


function cetak_kwitansi($id){
    $dt=Rekam::where('id',$id)->first();
    return view('cetak.kwitansi',[
        'dt'=> $dt
    ]);
}

function cetak_rujukan($id){
    $dt=Rujukan::where('id_rekam',$id)->first();

    return view('cetak.surat_rujuk',[
        'dt'=> $dt
    ]);
}


 function role(){
     $data=Admin::orderBy('id','asc')->get();
     return view('admin.r_role_data',[
         'data' =>$data
     ]);
 }

  function role_edit($id){
     $data_user=Admin::where('id',$id)->first();
     $data=Admin::orderBy('id','asc')->get();

     return view('admin.r_role_data',[
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
     return redirect('/dashboard/role/data')->with('alert-success','data telah berhasil ditambahkan');

         }elseif($request->role == 2){
        Admin::insert([
             'username' => $request->username,
            'password' => bcrypt($request->password),
            'level' => 2,
            'status' => 1
        ]);
     return redirect('/dashboard/role/data')->with('alert-success','data telah berhasil ditambahkan');

    }
    }else{

     return redirect('/dashboard/role/data')->with('alert-success','maaf data sudah maksimal');

    }
    
 }

 function role_delete($id){
     Admin::where('id',$id)->delete();
     return redirect('/dashboard/role/data')->with('alert-success','Data telah terhapus');

 }



 function pengaturan(){
     $username= Session::get('adm_username');
    $data= Admin::where('username',$username)->first();
    return view('admin.pengaturan',[
        'data'=> $data
    ]);

 }

  function pengaturan_update(Request $request){
     $username= Session::get('adm_username');
   
     if($request->password == ""){
        return redirect('/dashboard')->with('alert-success','Tidak Ada perubahan');
     }else{
         Admin::where('level','1')->update([
             'password' =>bcrypt($request->password)
         ]);
        return redirect('/dashboard/pengaturan/data')->with('alert-success','Password telah berubah');

     }

 }






}
