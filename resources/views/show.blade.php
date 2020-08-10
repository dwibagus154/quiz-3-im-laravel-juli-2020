@extends('layouts.master')


@section('content')


<div class="row">
    <div class="col-lg-6">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{$proyek["nama"]}}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{$proyek["deskripsi"]}}</h6>
                <p class="card-text">{{$proyek["tanggal_mulai"]}} dan {{$student["tanggal_deadline"]}}</p>
                <a href="/proyek" class="card-link">kembali</a>
            </div>
        </div>
    </div>
</div>

@endsection