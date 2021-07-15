@extends('../layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Edit Data Pegawai
                </div>
                <div class="card-body">
                    {!! Form::model($data, ['route' => ['pegawai.update', $data->id], 'method' => 'PUT']) !!}
                    <div class="form-group">
                        {!! Form::text('id_pegawai', null, ['class' => 'form-control', 'id' => 'id_pegawai']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::text('nama', null, ['class' => 'form-control', 'id' => 'nama']) !!}
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select class="form-control" id="jenis_kelamin">
                            <option {{ old('jenis_kelamin', $data->jenis_kelamin) == 'Pria' ? 'selected' : '' }}
                                value="Pria">Pria</option>
                            <option {{ old('jenis_kelamin', $data->jenis_kelamin) == 'Wanita' ? 'selected' : '' }}
                                value="Wanita">Wanita</option>
                        </select>
                    </div>
                    <div class="form-group">
                        {!! Form::text('no_hp', null, ['class' => 'form-control', 'id' => 'no_hp']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::text('alamat', null, ['class' => 'form-control', 'id' => 'alamat']) !!}
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
