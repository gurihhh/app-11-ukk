@extends('layout.app')
@section('konten')
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              TAMBAH BUKU
            </div>
            <div class="card-body">
              <form action="simpan-siswa.php" method="POST">
                
                <div class="form-group">
                  <label>id buku</label>
                  <input type="text" name="id buuku" placeholder="Masukkan id buku" class="form-control">
                </div>

                <div class="form-group">
                  <label>id kategori</label>
                  <input type="text" name="id kategori" placeholder="Masukkan id kategori" class="form-control">
                </div>

                <div class="form-group">
                  <label>Judul Buku</label>
                 <input type="text" name="juduk buku" placeholder="Masukkan Judul Buku" class="form-control">
                </div>

                <div class="form-group">
                    <label>Penulis</label>
                   <input type="text" name="penulis" placeholder="Masukkan Penulis" class="form-control">
                  </div>

                  <div class="form-group">
                    <label>Penerbit</label>
                   <input type="text" name="penerbit" placeholder="Masukkan Penerbit" class="form-control">
                  </div>

                  <div class="form-group">
                    <label>Tahun Terbit</label>
                   <input type="text" name="tahun terbit" placeholder="Masukkan Tahun Terbit" class="form-control">
                  </div>

                  <div class="form-group">
                    <label>Stok</label>
                   <input type="text" name="stok" placeholder="Masukkan Stok" class="form-control">
                  </div>
                
                <button type="submit" class="btn btn-success">SIMPAN</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>
@endsection
