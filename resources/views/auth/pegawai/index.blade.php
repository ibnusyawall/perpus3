@extends('../layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Data Pegawai

                    <button type="button" class="btn btn-success ml-6"><a href="{{ route('pegawai.create') }}" class="text-light">Tambah Pegawai</a></button>
                </div>
                <div class="card-body">
                    <table class="table table-stripped">
                        <tr>
                            <th>Id pegawai</th>
                            <th>Nama</th>
                            <th>Gender</th>
                            <th>NO HP</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </tr>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $item->id_pegawai }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->jenis_kelamin }}</td>
                                <td>{{ $item->no_hp }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-success"><a href="{{ route('pegawai.edit', ['id' => $item->id ]) }}" class="text-light">Edit</a></button>
                                    <form action="{{ route('pegawai.destroy', ['id' => $item->id ]) }}" method="post">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
