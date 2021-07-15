@extends('../layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Tambah Data Pegawai
                </div>
                <div class="card-body">
                    <form action="{{ route('pegawai.store') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="id_pegawai">Id Pegawai</label>
                            <input type="text" name="id_pegawai" class="form-control" id="id_pegawai"
                                placeholder="Masukan Id Pegawai">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama Pegawai</label>
                            <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Pegawai">
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select class="form-control" id="jenis_kelamin">
                                <option values="Pria">Pria</option>
                                <option values="Wanita">Wanita</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="no_hp">No hp Pegawai</label>
                            <input type="text" name="no_hp" class="form-control" id="no_hp" placeholder="Kontak Pegawai">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat Pegawai</label>
                            <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat Pegawai">
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
