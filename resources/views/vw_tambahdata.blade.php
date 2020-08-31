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
        .back,.back:hover{
            color: #000;
        }
        
    </style>
</head>
<body>
    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-11">
                <h2>Tambah Data Calon Siswa</h2>
            </div>
            <div class="col-1 mt-2">
                <i class="fas fa-arrow-left"></i>
                <a href="/calonsiswa" class="back">Back</a>
            </div>
        </div>         
        <form class="pt-4" action="/calonsiswa/tambahdata" method="post">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label>No. PPDB</label>
                        <input type="text" name="no" id="no" class="form-control">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>Nama Siswa</label>
                        <input type="text" name="nama_siswa" id="nama_siswa" class="form-control">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>Asal Sekolah</label>
                        <input type="text" name="asal_sekolah" id="asal_sekolah" class="form-control">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>Pilihan Jurusan 1</label>
                        <select class="form-control" name="pilihan_jurusan1" id="pilihan_jurusan1">
                            <option selected>Pilih...</option>
                            <option value="TKJ">TKJ</option>
                            <option value="MM">MM</option>
                            <option value="RPL">RPL</option>
                            <option value="TEI">TEI</option>
                            <option value="BC">BC</option>
                        </select>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>Pilihan Jurusan 2</label>
                        <select class="form-control" name="pilihan_jurusan2" id="pilihan_jurusan2">
                            <option selected>Pilih...</option>
                            <option value="TKJ">TKJ</option>
                            <option value="MM">MM</option>
                            <option value="RPL">RPL</option>
                            <option value="TEI">TEI</option>
                            <option value="BC">BC</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <button type="submit" class="btn btn-outline-danger mr-2 pr-3 pl-3">Clear</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>          
        </form>
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