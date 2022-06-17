@extends('layouts.main')
@section('title', 'Mahasiswa')
@section('contoh')
<span class="float-right">{{ $mahasiswa -> links()}}</span>
Isi data per halaman = {{ $mahasiswa -> count()}}<br>
Jumlah total data ={{ $mahasiswacount }}
@endsection
