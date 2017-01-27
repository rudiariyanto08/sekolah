<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\siswa;
use App\mapel;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function siswa()
    {
        // $siswa = siswa::all();
        // return view('siswas.siswa', ['sis'=>$siswa]);
        $siswa = siswa::paginate(2);
        return view('siswas.siswa',compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mapel = mapel::all();
        return view('siswas.tambah', ['mapel'=>$mapel]);

        //return view('siswas.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this -> validate($request, [
            'nis' => 'required|int'
        ]);

        $input =$request->all();
        Siswa::create($input);
        return redirect('/siswa')->with('massage','Berhasil Tambah Data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //return view('siswas/detail');
        $siswa = Siswa::findOrFail($id);
        return view('siswas.detail', compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // return view('siswas.edit');
        $siswa = Siswa::findOrFail($id);
        return view('siswas.edit', compact('siswa'));
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
        $siswa = Siswa::findOrFail($id);
        $siswa->nis = $request->nis;
        $siswa->nmsiswa = $request->nmsiswa;
        $siswa->agama = $request->agama;
        $siswa->kelas = $request->kelas;
        $siswa->save();
        return redirect('/siswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();
        return redirect('/siswa');
    }
}
