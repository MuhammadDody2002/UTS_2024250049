<!-- @include("layout.header") -->

@extends("layout.master")

@section('title')

    Halaman Detail Fakultas

@endsection

@section('content')

    <h1>Detail Program Studi</h1>
    <p>
        Kode Prodi = {{ $prodi->id }}<br>
        Nama = {{ $prodi->nama_prodi }}<br>
        Alamat = {{ $prodi->alamat }}<br>
        Telepon = {{ $prodi->telp }}<br>
        Website = {{ $prodi->website }}<br>
        Fakultas = {{ $fakultas->nama_fakultas }}</p>

@endsection

<!-- @include("layout.footer") -->
