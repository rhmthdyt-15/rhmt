<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Crud</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">
                <h1>Crud Laravel</h1>
                <a href="{{ url('create') }}" class="btn btn-primary">Tambah Siswa</a>
            </div>
            <a href="{{ route('logout') }}">Keluar</a>
            @csrf
            <div class="col-lg-8 mt-5">
                <table class="table table-striped">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Nim</th>
                        <th>Alamat</th>
                        <th>Action</th>
                    </tr>

                    @foreach ($data as $key => $dataSiswa )
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $dataSiswa->nama }}</td>
                        <td>{{ $dataSiswa->nim }}</td>
                        <td>{{ $dataSiswa->alamat }}</td>
                        <td>
                            <a href="{{ url('/show/'.$dataSiswa->id) }}" class="btn btn-warning">Edit</a>
                            <a href="{{ url('/destory/'.$dataSiswa->id) }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</body>

</html>