@extends('layout.main')
@section('content')
<div class="container mt-3">
    <div class="row justify-content-center align-items-center">
        <div class="card">
            <div class="card-header">
                Edit Data Pembelian
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="post" action="/pembelian/{{$pembelian->id}}" id="myForm"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')  
                <div class="form-group">
                        <label for="nama">Sparepart</label>
                        <input type="hidden" name="sparepart_id" value="{{$pembelian->sparepart_id}}">
                        <select name="sparepart_id" class="form-control" id="sparepart_id" disabled>
                            @foreach ($data_spareparts as $data_spareparts)
                            <option value="{{$data_spareparts->id}}" {{$pembelian->sparepart_id == $data_spareparts->id ? 'selected' : ''}}>{{$data_spareparts->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="jumlah">Jumlah Pembelian</label>
                        <input type="text" name="jumlah" class="form-control" id="jumlah" aria-describedby="jumlah" value="{{$pembelian->jumlah}}">
                    </div> 
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</div>
@endsection