@extends('layouts/master')

@section('content')


<h1>Create New Proyek</h1>

<form action="/proyek" method="post">
    @csrf
    <!-- guna csrf biar tidak ada orang yang bisa mengakses form dari luar, sehingga halaman tidak page expired -->
    <div class="form-group">
        <label for="nama">Name</label>
        <input type="text" class="form-control " id="nama" name="nama" placeholder="masukkan nama" value="{{old('nama')}}">

    </div>
    <div class="form-group">
        <label for="deskripsi">Deskripsi</label>
        <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="masukkan deskripsi">
    </div>
    <div class="form-group">
        <label for="tanggal_mulai">tanggal mulai</label>
        <input type="text" class="form-control" id="tanggal_mulai" name="tanggal_mulai" placeholder="masukkan tanggal_mulai">
    </div>
    <div class="form-group">
        <label for="tanggal_deadline">tanggal mulai</label>
        <input type="text" class="form-control " id="tanggal_mulai" name="tanggal_deadline" placeholder="masukkan tanggal_deadline">
    </div>
    <div class="form-group">
        <label for="status">status</label>
        <input type="text" class="form-control " id="status" name="status" placeholder="masukkan status">
    </div>
    <button type="submit" class="btn btn-primary">Create</button>
</form>

@endsection