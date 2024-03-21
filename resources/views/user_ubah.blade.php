@extends('layouts.app')

{{-- Customize layout sections --}}
@section('subtitle', 'User')
@section('content_header_title', 'User')
@section('content_header_subtitle', 'Update')

{{-- Content body: main page content --}}
@section('content')
<div class="container">
    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title">Update Data User</h3>
        </div>

        <div class="card-body">
            <form method="post" action="{{ route('/user/update_simpan', $data->user_id) }}">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="level_id">Level ID</label>
                    <input type="text" class="form-control" id="level_id" name="level_id" value="{{ $data->level_id }}">
                </div>

                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" value="{{ $data->username }}">
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ $data->nama }}">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" value="">
                </div>
                <a href="{{ route('/user') }}" class="btn btn-secondary">Back</a>
                <button type="submit" class="btn btn-warning">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
