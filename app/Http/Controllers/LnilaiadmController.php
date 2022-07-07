<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Siswa;
use App\Models\Mapel;
use App\Models\Rapor;

class LnilaiadmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $id = $request->id;
        $siswa = Siswa::where('nis_siswa','=',Auth::user()->nis)->firstOrFail();
        $datas = Siswa::where('nis_siswa','=',$id)->firstOrFail();
        $datar = Rapor::all()->where('nis_rapor', '=' ,$id);
        $datam = Mapel::all();

        return view('admin.lihatrapor',compact('siswa','datas','datar','datam'));
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
        //
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
    public function update(Request $request, $kdmapelr, $nis_rapor)
    {
        $rapor = new Rapor();
        $rapor->nilai = $request->nilai;
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
        $rapor = Rapor::where('kdmapelr','=',$kdmapelr)->where('nis_rapor', '=', $nis_rapor)->update(array('nilai' => $request->nilai, 'ket' => $request->ket, 'predikat' => $rapor->predikat));
        // $nilai = Nilai::findOrFail($id);
        return back()->with('success', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($kdmapelr, $nis_rapor)
    {
        $rapor = Rapor::where('kdmapelr','=',$kdmapelr)->where('nis_rapor', '=', $nis_rapor)->delete();
        return back()->with('info', 'Data Berhasil Dihapus');
    }
}
