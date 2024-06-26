@extends('app')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3>{{ $title }}</h3>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped m-0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nama</th>
                        <th>Atribut</th>
                        <th>Bobot</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                @foreach ($kriterias as $kriteria)
                    <tr>
                        <td>{{ $kriteria->id_kriteria }}</td>
                        <td>{{ $kriteria->nama_kriteria }}</td>
                        <td>{{ $kriteria->atribut }}</td>
                        <td>{{ $kriteria->bobot }}</td>
                        <td>
                            <a href="{{ route('kriteria.edit', $kriteria->id_kriteria) }}" class="btn btn-primary btn-sm">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
