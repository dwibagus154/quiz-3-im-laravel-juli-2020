@extends('layouts.master')

@section('content')
<a href="/proyek/create" class="badge badge-primary" style="margin-top: 20px;">Tambah data mahasiswa</a>

<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">deskripsi</th>
            <th scope="col">tanggal_mulai</th>
            <th scope="col">tanggal_deadline</th>
            <th scope="col">status</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($proyeks as $proyek)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{$proyek->nama}}</td>
            <td>{{$proyek->deskripsi}}</td>
            <td>{{$proyek->tanggal_mulai}}</td>
            <td>{{$proyek->tanggal_deadline}}</td>
            <td>{{$proyek->status}}</td>
            <td>
                <a href="/proyek/{{$proyek->id}}/edit" class="badge badge-alert">edit</a>
                <a href="/proyek/{{$proyek->id}}" class="badge badge-success">detail</a>
                <form action="./proyek/{{$proyek->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="badge badge-warning"> hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection

@push('scripts')
<script>

</script>
@endpush