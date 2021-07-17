@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Edit Data Pegawai
                </div>
                <div class="card-body">
                    {!! Form::model($data, ['route' => ['buku.update', $data->id], 'method' => 'PUT']) !!}
                    <div class="form-group">
                        {!! Form::text('kode_buku', null, ['class' => 'form-control', 'id' => 'kode_buku']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::text('judul', null, ['class' => 'form-control', 'id' => 'judul']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::text('pengarang', null, ['class' => 'form-control', 'id' => 'pengarang']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::text('penerbit', null, ['class' => 'form-control', 'id' => 'penerbit']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::text('tahun', null, ['class' => 'form-control', 'id' => 'tahun']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::text('jumlah', null, ['class' => 'form-control', 'id' => 'jumlah']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::submit('Simpan', ['class' => 'btn btn-primary']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection
