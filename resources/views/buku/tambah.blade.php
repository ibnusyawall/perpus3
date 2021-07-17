@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Tambah Data Buku
                </div>
                <div class="card-body">


                    <form action="{{ route('buku.store') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="kode_buku">Kode Buku</label>
                            <input type="text" name="kode_buku" class="form-control" id="kode_buku"
                                placeholder="Masukan Kode Buku">
                        </div>
                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" name="judul" class="form-control" id="judul"
                                placeholder="Masukan Judul Buku">
                        </div>
                        <div class="form-group">
                            <label for="nama">Pengarang</label>
                            <input type="text" name="pengarang" class="form-control" id="pengarang" placeholder="Nama Pengarang">
                        </div>
                        <div class="form-group">
                            <label for="penerbit">Penerbit</label>
                            <input type="text" name="penerbit" class="form-control" id="penerbit" placeholder="Penerbit">
                        </div>
                        <div class="form-group">
                            <label for="tahun">Tahun</label>
                            <input type="text" name="tahun" class="form-control" id="tahun" placeholder="Tahun">
                        </div>
                        <div class="form-group">
                            <label for="jumlah">Jumlah</label>
                            <input type="text" name="jumlah" class="form-control" id="jumlah" placeholder="Jumlah Buku">
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
