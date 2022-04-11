@extends("layout.master")

@section("title")

    Halaman Utama

@endsection

@section("content")

    <h3><a href="{{ url('matakuliah') }}">Mata Kuliah</a></h3>
    <h3><a href="{{ url('programstudi') }}">Program Studi</a></h3>

@endsection
