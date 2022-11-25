<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mata Kuliah</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class="container pt-4 bg-white">
        <div class="col-md-12">
            <div class="d-flex justify-content-between">
                <h2>Daftar Mata Kuliah</h2>
            </div>
            <div class="row">
                @forelse ($matakuliahs as $matakuliah)
                <div class="col-sm-6 pt-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <h5 class="card-title">{{$matakuliah->nama_mk}} (<span class="text-danger fw-normal">{{$matakuliah->kode_mk}}</span>)</h5>
                                <span class="d-flex justify-content-between fw-normal">{{$matakuliah->sks}} SKS</span>
                            </div>
                            <p class="card-text">{{$matakuliah->nama_dosen}}</p>
                        </div>
                    </div>
                </div> 
                @empty
                @endforelse 
            </div>
            <p></p>
            <br>
            <p></p>
        </div>
    </div>
</body>
</html>