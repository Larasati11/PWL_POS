@extends('layouts.app')

{{-- Customize layout sections --}}
@section('subtitle', 'User')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'User')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Show User</div>
            <div class="card-body">
                <div class="row">
                </div>

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>User_id:</strong>
                            {{ $useri->user_id }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Level_id:</strong>
                            {{ $useri->level_id }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Username:</strong>
                            {{ $useri->username }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Nama:</strong>
                            {{ $useri->nama }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Password:</strong>
                            {{ $useri->password }}
                        </div>
                    </div>
                    <div class="col-lg-12 margin-tb">
                        <div class="float-right">
                            <a class="btn btn-secondary" href="{{ route('m_user.index') }}">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
