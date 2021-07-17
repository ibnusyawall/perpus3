@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Data Buku

                    <button type="button" class="btn btn-success ml-6"><a href="{{ route('buku.create') }}"
                            class="text-light">Tambah Buku</a></button>
                </div>
                <div class="card-body">
                    <table class="table table-stripped" id="myTable">
                        <thead>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Pengarang</th>
                            <th>Penerbit</th>
                            <th>Tahun</th>
                            <th>Jumlah</th>
                            <th>Aksi</th>
                        </thead>
                        @php
                            $index = 1;
                        @endphp
                        @foreach ($data as $item)
                            <tbody>
                                <td>{{ $index++ }}</td>
                                <td>{{ $item->judul }}</td>
                                <td>{{ $item->pengarang }}</td>
                                <td>{{ $item->penerbit }}</td>
                                <td>{{ $item->tahun }}</td>
                                <td>{{ $item->jumlah }}</td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-success"><a
                                            href="{{ route('buku.edit', ['id' => $item->id]) }}"
                                            class="text-light">Edit</a></button>
                                    <form action="{{ route('buku.destroy', ['id' => $item->id]) }}" method="post">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                    </form>
                                </td>
                            </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
