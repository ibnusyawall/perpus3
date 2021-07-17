<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;
use Validator;
use Alert;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Buku::all();
        return view('buku.index')->with(compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('buku.tambah');
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
            'kode_buku' => 'required|max:30',
            'judul' => 'required|max:30',
            'pengarang' => 'required|max:30',
            'penerbit' => 'required|max:30',
            'jumlah' => 'required',
            'tahun' => 'required'
        ]);

        if ($validator->fails()) {
            toast('Gagal menyimpan data Buku', 'warning', 'top-right');
            return redirect()->route('buku.create');
        }

        $data  = new Buku();
        $hasil = $data->create($request->all());

        if ($hasil) {
            toast('Data berhasil dimasukan.', 'success', 'top-right');
            return redirect()->route('buku.index');
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
        $data = Buku::findOrFail($id);
        return view('buku.edit')->with(compact('data'));
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
        $validator = Validator::make($request->all(), [
            'kode_buku' => 'required|max:30',
            'judul' => 'required|max:30',
            'pengarang' => 'required|max:30',
            'penerbit' => 'required|max:30',
            'jumlah' => 'required',
            'tahun' => 'required'
        ]);

        if ($validator->fails()) {
            toast('Gagal menyimpan data Buku', 'warning', 'top-right');
            return redirect()->route('buku.index');
        }

        $data = Buku::findOrFail($id);
        $hasil = $data->update($request->all());

        if ($hasil) {
            toast('Data berhasil diupdate.', 'success', 'top-right');
            return redirect()->route('buku.index');
        } else {
            toast('Data gagal diupdate.', 'warning', 'top-right');
            return redirect()->route('buku.index');
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
        $data = Buku::findOrFail($id);
        $hasil = $data->delete();

        if ($hasil) {
            toast('Data berhasil dihapus.', 'success', 'top-right');
            return redirect()->route('buku.index');
        }
    }
}
