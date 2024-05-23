@extends('layoutss.template')

@section("content")
<div class="card card-outline card-primary my-5">
    <div class="card-header bg-primary text-white">
        <h3 class="card-title">{{ $page->title }}</h3>
    </div>
    <div class="card-body">
        <div class="row g-3">
            <div class="col-md-4">
                <img src="{{ $path }}" alt="Image Preview" class="img-fluid rounded">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <table class="table table-hover table-bordered">
                        <tbody>
                            <tr>
                                <td class="fw-bold">Nama Asli Gambar</td>
                                <td>:</td>
                                <td>{{ $oldName }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold">Nama Baru Gambar</td>
                                <td>:</td>
                                <td>{{ $newName }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold">Lokasi Gambar</td>
                                <td>:</td>
                                <td><a href="{{ $path }}" class="text-decoration-none">{{ $path }}</a></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-end mt-4">
                        {{-- <a href="{{url('/imgUpload')}}" class="btn btn-secondary me-2">Kembali</a> --}}
                        <a href="{{ $path }}" download="{{ $newName }}" class="btn btn-primary">
                            <i class="fas fa-download me-1"></i> Download
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
