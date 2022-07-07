<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Siswa;
use App\Models\Mapel;
use App\Models\Rapor;

class RaporviewController extends Controller
{
    public function index(Request $request)
    {
        $siswa = Siswa::where('nis_siswa','=',Auth::user()->nis)->firstOrFail();
        $datar = Rapor::all()->where('nis_rapor', '=' ,Auth::user()->nis);
        $datam = Mapel::all();

        return view('user/raporview',compact('siswa','datar','datam'));
    }
}
