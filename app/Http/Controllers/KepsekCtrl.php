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


class KepsekCtrl extends Controller
{
    
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if(!Session::get('login-kps')){
                return redirect('/login')->with('alert-danger','Dilarang Masuk Terlarang');
            }
            return $next($request);
        });
        
    }
    






}
