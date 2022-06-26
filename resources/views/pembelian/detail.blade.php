@extends('layout.main')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card">
            <div class="card-header">
                Detail Pembelian
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Id Pembelian        : </b>{{$pembelian->id}}</li>
                    <li class="list-group-item"><b>Nama Sparepart : </b>{{$pembelian->sparepart->nama}}</li>
                    <li class="list-group-item"><b>Jumlah : </b>{{$pembelian->jumlah}}</li>
                </ul>
            </div>
            <a class="btn btn-success mt-3" href="/pembelian">Kembali</a>
        </div>
    </div>
</div>
@endsection