<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use App\Models\Siswa;
use App\Models\Rapor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RaporController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = Siswa::where('nis_siswa','=',Auth::user()->nis)->firstOrFail();
        $datas = Siswa::all();
        $datar = Rapor::all();
        $datam = Mapel::all();

        return view('admin/raporadd',compact('siswa','datas','datar','datam'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // @dd($request->all());
        $rapor = new Rapor();

        $datar = Rapor::where([['nis_rapor', $request->nis], ['kdmapelr', $request->kdmapelr],])->first();
        // @dd($datar);
        // if ($datar) {
        //     return back()->with('info', 'Duplikat data (Data sudah terdaftar di dalam sistem)');
        // }
        $rapor->nis_rapor = $request->nis;
        $rapor->kdmapelr = $request->kdmapelr;
        $rapor->nilai = $request->nilai;
        $rapor->ket = $request->ket;

        switch ($rapor->nilai) {
            case $rapor->nilai >= 90 && $rapor->nilai <=100:
                $hasil = "A";
                break;

            case $rapor->nilai >= 80 && $rapor->nilai <90:
                $hasil = "B";
                break;

            case $rapor->nilai >= 70 && $rapor->nilai <80:
                $hasil = "C";
                break;

            default:
                $hasil = "D";
                break;
        }
        $rapor->predikat = $hasil;
        $rapor->save();
        return back()->with('success', 'Data Berhasil ditambah');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
