<!doctype html>
<html lang="en">
  <head>
    <title>@yield('title')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>	
  </head>
  <body>
      <div class="container-fluid">
        <div class='row'>
            <div class="col-lg-12 py-2 bg-secondary">
              <div class="dropdown float-right">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                  Menu
                </button>
                <form class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                  <li><a class="dropdown-item disabled text-center"><strong>{{Auth::user()->nama_user ?? ''}}</strong></a></li>
                  <hr>
                  <li><a class="dropdown-item" href="/user"><i class="bi bi-person-fill"></i> Data User</a></li>
                  <li><a class="dropdown-item" href="/logout"><i class="bi bi-box-arrow-left"></i> Logout</a></li>
                </form>
              </div>
       
        </div>
        <div class='row'>
          <div class="col-lg-2 vh-100">
            @include('layouts.navbar')
          </div>
              <div class="col-lg-10 vh-100">
                <div class="card mt-4">
                  <div class="card-header">
                    <a name="" class="btn btn-outline-primary" href="/mahasiswa/formmahasiswa" role="button"><i class="bi bi-plus-square-fill"></i> ADD MAHASISWA</a>
                      <form class="form-inline my-2-lg-0 float-right" method="GET" action="/mahasiswa/cari">
                        <input class="form-control mr-sm-2" name="cari" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
                      </form>
                  </div>
                 
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>	
                      <strong>{{ $message }}</strong>
                    </div>
                  @endif
                
                  @if ($message = Session::get('error'))
                    <div class="alert alert-info alert-block">
                      <button type="button" class="close" data-dismiss="alert">×</button>	
                    <strong>{{ $message }}</strong>
                    </div>
                  @endif
                
                  @if ($message = Session::get('warning'))
                    <div class="alert alert-warning alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>	
                    <strong>{{ $message }}</strong>
                 
                  @endif
                    </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nim</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Jurusan</th>
                            <th scope="col">Bidang Minat</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($mahasiswa as $no => $m)
                    <tr>
                        <th scope="row">{{ $mahasiswa->firstItem() + $no }}</th>
                        <td>{{ $m->nim }}</td>
                        <td>{{ $m->nama }}</td>
                        <td>{{ $m->gender }}</td>
                        <td>{{ $m->jurusan }}</td>
                        <td>{{ $m->bidang_minat }}</td>
                        <td>
                          <a href="/mahasiswa/editmahasiswa/{{ $m->id }}" class="btn btn-outline-warning"><i class="bi bi-pencil-square"></i></a>
                          <a href="/mahasiswa/hapusmahasiswa/{{ $m->id }}" class="btn btn-outline-danger" onclick="return confirm('Apakah data dari {{$m->nama}} ingin dihapus?')"><i class="bi bi-trash3-fill"></i></a>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
               
                @section('contoh')
                @show
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