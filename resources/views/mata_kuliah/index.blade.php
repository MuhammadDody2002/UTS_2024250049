@extends("layout.master")

@section("title")

    Halaman Program Studi

@endsection

@section("content")

<h3>Mata Kuliah</h3>

<ol>
    @foreach($mata_kuliah as $key => $value)
        <li>
            {{ $value->kode_mk }} | {{ $value->nama_mk }} | <a href="{{route('detail-mk', [$value->id])}}"> Detail </a>
        </li>
    @endforeach
</ol>

@endsection
