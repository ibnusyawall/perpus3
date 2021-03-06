<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;
use Validator;
use Alert;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = Pegawai::all();
        return view('pegawai.index')->with(compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pegawai.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_pegawai' => 'required|max:19',
            'nama' => 'required|max:29',
            'jenis_kelamin' => 'required'
        ]);

        if ($validator->fails()) {
            toast('Isi semua field!','warning', 'top-right');
            return redirect('pegawai/create')
                ->withErrors($validator)
                ->withInput();
        }

        $data  = new Pegawai();
        $hasil = $data->create($request->all());

        if ($hasil) {
            toast('Data berhasil disimpan.','success', 'top-right');
            return redirect()->route('pegawai.index');
        } else {
            toast('Data gagal disimpan','warning', 'top-right');
            return redirect()->route('pegawai.index');
        }
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
        $data = Pegawai::findOrFail($id);
        return view('pegawai.edit')->with(compact('data'));
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
        // var_dump($_POST);
        $data = Pegawai::findOrFail($id);
        $hasil = $data->update($request->all());

        if ($hasil) {
            toast('Data berhasil diupdate.!','success', 'top-right');
            return redirect()->route('pegawai.index');
        } else {
            toast('Data gagal diupdate.!','warning', 'top-right');
            return redirect()->route('pegawai.index');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Pegawai::findOrFail($id);
        $hasil = $data->delete();
        if ($hasil) {
            toast('Data berhasil dihapus!','success', 'top-right');
            return redirect()->route('pegawai.index');
        }
    }
}
