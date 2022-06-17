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
                  <li><a class="dropdown-item" href="/mahasiswa"><i class="bi bi-people-fill"></i> Data Mahasiswa</a></li>
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
                    <a name="" class="btn btn-outline-primary" href="/user/formuliruser" role="button"><i class="bi bi-plus-square-fill"></i> ADD USER</a>
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
                            <th scope="col">Nama User</th>
                            <th scope="col">Email User</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($user as $no => $u)
                    <tr>
                        <th scope="row">{{ $user->firstItem() + $no }}</th>
                        <td>{{ $u->nim_user }}</td>
                        <td>{{ $u->nama_user }}</td>
                        <td>{{ $u->email }}</td>
                        <td>
                        <a href="/user/edituser/{{ $u->id }}" class="btn btn-outline-warning"><i class="bi bi-pencil-square"></i></a>
                        <a href="/user/hapususer/{{ $u->id }}" class="btn btn-outline-danger" onclick="return confirm('Apakah data dari {{$u->nama_user}} ingin dihapus?')"><i class="bi bi-trash3-fill"></i></a>
                        </tbody>
                    </tr>
                    @endforeach
                   
                </table>
                  </div>
                </div>
                <span class="float-right">{{ $user -> links()}}</span>
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