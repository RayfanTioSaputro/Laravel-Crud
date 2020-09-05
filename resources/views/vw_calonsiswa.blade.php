<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Calon Siswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <style>
        *{
            font-family: 'poppins';
        }
        h2{
            font-weight: 600;
        }
        .ml-4-5{
            margin-left: 2.7rem;
        }
        .alert{
            margin-top: -30px;
            margin-bottom: 30px;
        }
        .close:focus{
            outline: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-10">
                <h2>Tabel Data Calon Siswa</h2>
            </div>
            <div class="col-2">
                <a href="/calonsiswa/tambah" class="btn btn-sm btn-primary mt-2 ml-4-5">Tambah Data</a>
            </div>
        </div>
        
        @if(session()->has('sukses_tambah'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session()->get('sukses_tambah') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        @if(session()->has('sukses_edit'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session()->get('sukses_edit') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        @if(session()->has('sukses_hapus'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session()->get('sukses_hapus') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <table class="table table-striped table-bordered data">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>No. PPDB</th>
                    <th>Nama</th>
                    <th>Asal Sekolah</th>
                    <th>Pilihan Jurusan 1</th>
                    <th>Pilihan Jurusan 2</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @forelse($calonsiswa as $itemsiswa)
                    <td>{{$loop->iteration}}</td>
                    <td>{{$itemsiswa->no}}</td>
                    <td>{{$itemsiswa->nama}}</td>
                    <td>{{$itemsiswa->asal_sekolah}}</td>
                    <td>{{$itemsiswa->pilihan_jurusan1}}</td>
                    <td>{{$itemsiswa->pilihan_jurusan2}}</td>
                    <td>
                        <div class="text-center">
                            <a href="/calonsiswa/edit{{ $itemsiswa->id }}" class="btn btn-sm btn-outline-primary mr-2"><i class="fas fa-edit"></i></a>
                            <a href="/calonsiswa/hapus{{ $itemsiswa->id }}" class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></a>
                        </div>
                    </td>
                </tr>
                    @empty
                    <td colspan="8" class="text-center">Data Kosong</td>
                    @endforelse
            </tbody>
        </table>
    </div>
    

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $('.data').DataTable();
    </script>
</body>
</html>
