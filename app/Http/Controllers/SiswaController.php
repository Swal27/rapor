<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = Siswa::where('nis_siswa','=',Auth::user()->nis)->firstOrFail();
        $datas = User::paginate(6);

        return view('admin/useradd',compact('siswa', 'datas'));
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
        $siswa = new Siswa();
        $user = new User();
        $data_siswa = Siswa::where('nis_siswa', '=', $request->nis)->first();
        if ($data_siswa) {
            return back()->with('info', 'Duplikat data (Data Siswa Sudah Ada)');
        }

        $siswa->nis_siswa = $request->nis;
        $siswa->nama = $request->nama;
        $siswa->alamat = $request->alamat;
        $siswa->telp = $request->telp;
        $siswa->tgllhr = $request->tgllhr;
        $user->username = $request->username;
        $user->password = bcrypt($request->password);
        $user->nis = $request->nis;


        $siswa->save();
        $user->save();
        return back()->with('success', 'Data Berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(Siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Siswa $siswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $siswa = Siswa::findorfail($id);
        $pass = bcrypt($request->password);
        $user = User::where('nis', '=', $id)->update(array('username' => $request->username, 'password' => $pass));
        $siswa->update($request->all());
        return back()->with('success', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = Siswa::where('nis_siswa','=',$id)->firstOrFail();
        $siswa->delete();
        return back()->with('info', 'Data Berhasil Dihapus');
    }
}
