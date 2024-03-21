@extends('layouts.app')

{{-- Customize layout sections --}}
@section('subtitle', 'Level')
@section('content_header_title', 'Level')
@section('content_header_subtitle', 'Update')

{{-- Content body: main page content --}}
@section('content')
<div class="container">
    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title">Update Data Level</h3>
        </div>

        <div class="card-body">
            <form method="post" action="{{ route('/level/update_simpan', $data->level_id) }}">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="kodeLevel">Kode Level</label>
                    <input type="text" class="form-control" id="kodeLevel" name="kodeLevel" value="{{ $data->level_kode }}">
                </div>

                <div class="form-group">
                    <label for="namaLevel">Nama Level</label>
                    <input type="text" class="form-control" id="namaLevel" name="namaLevel" value="{{ $data->level_nama }}">
                </div>
                <a href="{{ route('/level') }}" class="btn btn-secondary">Back</a>
                <button type="submit" class="btn btn-warning">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
