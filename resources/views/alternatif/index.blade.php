@extends('app')
@section('content')
    <div class="card">
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped m-0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nama</th>
                    </tr>
                </thead>
                @foreach ($alternatifs as $alternatif)
                    <tr>
                        <td>{{ $alternatif->id_alternatif }}</td>
                        <td>{{ $alternatif->nama_alternatif }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection