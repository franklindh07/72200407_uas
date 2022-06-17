<!doctype html>
<html lang="en">
  <head>
    <title>@yield('title')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>          
        <div class='row'>
            <div class="col-lg-12 py-4 bg-secondary"></div>
        </div>
          <div class='row'>
              <div class="col-lg-2 vh-100">
                @include('layouts.navbar')
              </div>
              <div class="col-lg-10 vh-100">
                <div class="card mt-4">
                  <div class="card-header"></div>
                  <div class="card-body">
                      <div class="container-fluid">
                        <form action="/mahasiswa/simpanmahasiswa" method="POST" class="pt-2 pb-2">
                          @csrf
                          <div class="form-group w-25">
                          <label>Nim</label>
                          <input type="number" name="nim" class="form-control" placeholder="Masukan Nim" required>
                          </div>
                          <div class="form-group w-25">
                          <label>Nama</label>
                          <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" required>
                          </div>
                          <label>Gender</label>
                          <div class="form-check w-25">                         
                          <input type="radio" name="gender" class="form-check-input" value="Laki-Laki">
                            <label>Laki-Laki</label>
                          </div>
                          <div class="form-check w-25">
                            <input type="radio" name="gender" class="form-check-input" value="Perempuan">
                              <label>Perempuan</label>
                            </div>
                          <div class="form-group w-25">
                            <label>Jurusan</label>
                            <select name="jurusan" class="form-control">
                              <option value="0">---Pilih Jurusan---</option>
                              <option value="Sistem Informasi">Sistem Informasi</option>
                              <option value="Informatika">Informatika</option>
                              <option value="Kedokteran">Kedokteran</option>
                              <option value="Arsitektur">Arsitektur</option>
                            </select>
                      </div>
                      <label>Bidang Minat</label>
                      <div class="form-check w-25">
                        <input type="checkbox" name="bidang_minat[]" value="Contoh 1" class="form-check-input">
                        <label>Contoh 1</label>
                      </div>
                      <div class="form-check w-25">
                        <input type="checkbox" name="bidang_minat[]" value="Contoh 2" class="form-check-input">
                        <label>Contoh 2</label>
                      </div>
                      <div class="form-check w-25">
                        <input type="checkbox" name="bidang_minat[]" value="Contoh 3" class="form-check-input">
                        <label>Contoh 3</label>
                      </div>
                      <div class="form-group pt-4">
                        <input type="submit" value="SIMPAN" class="btn btn-outline-primary ">
                        <a class="btn btn-outline-primary float-right" href="{{ url()->previous() }}" role="button">Kembali</a>
                      </div>
                        </form>
                        
            
                  </div>
                </div>
              </div>
          </div>

      </div>
      
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>