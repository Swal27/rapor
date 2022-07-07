<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use Illuminate\Http\Request;
use App\Models\Siswa;
use Illuminate\Support\Facades\Auth;

class DashboarduserController extends Controller
{
    public function index(){
        $siswa = Siswa::where('nis_siswa','=',Auth::user()->nis)->firstOrFail();
        $total_siswa = Siswa::count()-1;
        $mapelrec = Mapel::count();

        return view('user/dashboard', compact('siswa','total_siswa','mapelrec'));
    }
}
