<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Login</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">
    <link href="https://getbootstrap.com/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">




<style> 
p {
  line-height:10%;
}
</style>

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/5.2/examples/sign-in/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">

<main class="form-signin w-100 m-auto">
  <form action="/user/ceklogin" method="POST">
    @if ($message = Session::get('error'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Berhasil Logout</strong> 
      <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="outline: none;">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @endif
    @if ($message = Session::get('gagal'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Email atau Password salah</strong> 
      <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="outline: none;">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @endif
    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Berhasil registrasi</strong> 
      <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="outline: none;">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @endif
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script>
      document.addEventListener('DOMContentLoaded', () => {
        $('.alert').alert()
      })
    </script>

 
    @csrf
    <img class="mb-4" src="https://www.ukdw.ac.id/wp-content/uploads/2017/10/logo-ukdw.png" alt="" width="200" height="200">
    <h1 class="h3 mb-3 fw-normal">Silahkan Login</h1>
    <div class="form-floating">
      <input type="email" name="email" class="form-control"  id="floatingInput" required autofocus>
      <label for="floatingInput">Email</label>
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control"  id="floatingPassword" required>
      <label for="floatingPassword">Password</label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
  
    <p class="mt-5 mb-3 text-muted">Belum punya akun? Silahkan <a href="/registrasi"> registrasi</a></p>
    <p class="mt-5 mb-3 text-muted">List Mahasiswa<a href="https://private-3bb77-fefeffe.apiary-mock.com/mahasiswa/all"> API</a> </p>
    <p class="mt-5 mb-3 text-muted">72200407 - Franklin David Hengkengbala</p>
  
   
  </form>

</main>

  </body>
</html>
