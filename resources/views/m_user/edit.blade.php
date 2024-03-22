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
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Ops!</strong> Error <br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="post" action="{{ route('m_user.update', $useri->user_id) }}">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="userid">User ID</label>
                    <input type="text" class="form-control" id="userid" name="userid" value="{{ $useri->user_id }}" placeholder="Masukkan User ID">
                </div>

                <div class="form-group">
                    <label for="levelid">Level ID</label>
                    <input type="text" class="form-control" id="levelid" name="levelid" value="{{ $useri->level_id }}" placeholder="Masukkan Level ID">
                </div>

                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" value="{{ $useri->username }}" placeholder="Masukkan Username">
                </div>

                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ $useri->nama }}" placeholder="Masukkan Nama">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" value="{{ $useri->password }}" placeholder="Masukkan Password">
                </div>

                <button type="submit" class="btn btn-warning">Update</button>
                <a href="{{ route('m_user.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection
