@extends("layout.master")

@section("title")

    Halaman Program Studi

@endsection

@section("content")

<h3>Fakultas Ilmu Komputer dan Rekayasa</h3>

<ol>
    @foreach($prodi as $key => $value)
        <li>
            {{ $value->kode_prodi }} | {{ $value->nama_prodi }} | <a href="{{route('detail-prodi', [$value->id])}}"> Detail </a>
        </li>
    @endforeach
</ol>

@endsection
