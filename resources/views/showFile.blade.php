<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Tampilan File</title>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
        h2 {
            font-size: 2.5rem;
            color: #ff79a1;
        }
        .card {
            border-radius: 15px;
            border: none;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            position: relative;
        }
        .card-title {
            font-size: 1.5rem;
            color: #343a40;
        }
        .table-hover tbody tr:hover {
            background-color: #f1f1f1;
        }
        .bottom-right-buttons {
            position: absolute;
            bottom: 16px;
            right: 16px;
        }
        .btn-success {
            background-color: #28a745;
            border-color: #28a745;
        }
        .btn-success:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }
        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
        }
        .btn-secondary:hover {
            background-color: #5a6268;
            border-color: #545b62;
        }
        .card-body {
            padding-bottom: 80px; /* Add space for the buttons */
        }
        .detail-item {
            background-color: #e9ecef;
            border-radius: 10px;
            padding: 10px;
            margin-bottom: 10px;
        }
        .detail-label {
            font-weight: bold;
            color: #495057;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center">Tampilan File Gambar Yang Diunggah</h2>
        <hr>
        <div class="card mt-4">
            <div class="row g-0">
                <div class="col-md-6">
                    <img src="{{$path}}" alt="Uploaded Image" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <h4 class="card-title">Detail File</h4>
                        <div class="detail-item">
                            <span class="detail-label">Nama Asli File:</span>
                            <span>{{$oldName}}</span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Nama Baru File:</span>
                            <span>{{$newName}}</span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Format/Extension File:</span>
                            <span>{{$extension}}</span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Ukuran File:</span>
                            <span>{{$size}} Byte</span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Lokasi File:</span>
                            <span>{{$path}}</span>
                        </div>
                        <div class="bottom-right-buttons">
                            <a href="{{$path}}" download="{{$newName}}" class="btn btn-success me-2">Download</a>
                            <a href="{{url('/formUpload')}}" class="btn btn-secondary">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
