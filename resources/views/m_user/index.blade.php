@extends('layouts.app')

{{-- Customize layout sections --}}
@section('subtitle', 'User')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'User')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Manage User</div>
            <div class="card-body">
                <a href="{{ route('m_user.create') }}" class="btn btn-secondary mb-3">+ Tambah User</a>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th width="20px" class="text-center">User id</th>
                            <th width="150px" class="text-center">Level id</th>
                            <th width="200px" class="text-center">Username</th>
                            <th width="200px" class="text-center">Nama</th>
                            <th width="150px" class="text-center">Password</th>
                            <th width="150px" class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($useri as $m_user)
                            <tr>
                                <td>{{ $m_user->user_id }}</td>
                                <td>{{ $m_user->level_id }}</td>
                                <td>{{ $m_user->username }}</td>
                                <td>{{ $m_user->nama }}</td>
                                <td>{{ $m_user->password }}</td>
                                <td class="text-center">
                                    <form action="{{ route('m_user.destroy', $m_user->user_id) }}" method="POST">
                                        <a class="btn btn-info btn-sm" href="{{ route('m_user.show', $m_user->user_id) }}">Show</a>
                                        <a class="btn btn-primary btn-sm" href="{{ route('m_user.edit', $m_user->user_id) }}">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection


