<!-- @include("layout.header") -->

@extends("layout.master")

@section('title')

    Halaman Detail Fakultas

@endsection

@section('content')

    <h1>Detail Mata Kuliah</h1>
    <p>
        Prodi = {{ $prodi->nama_prodi }}<br>
        Kode MK = {{ $mata_kuliah->kode_mk }}<br>
        Nama = {{ $mata_kuliah->nama_mk }}<br>
        SKS = {{ $mata_kuliah->sks_mk }}<br>
        SKS Praktik = {{ $mata_kuliah->sks_praktik }}<br>
        SKS Teori = {{ $mata_kuliah->sks_teori }}<br>
    </p>

@endsection

<!-- @include("layout.footer") -->
