@extends('layout.main')
@section('content')
<div class="container mt-3">
    <div class="row justify-content-center align-items-center">
        <div class="card">
            <div class="card-header">
                Edit Customer
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
                <form method="post" action="/datacustomer/{{$data_customers->id}}" id="myForm"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" name="image" class="form-control" id="image" ariadescribedby="image"
                            value="{{ $data_customers -> image }}">
                        <img width="150px" src="{{asset('storage/'.$data_customers -> image)}}"
                            alt="{{ $data_customers -> image }}">
                    </div>
                    <div class="form-group">
                        <label for="Nama">Nama</label>
                        <input type="text" name="nama" class="form-control" id="Nama" value="{{ $data_customers->nama }}"
                            aria-describedby="Nama">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" class="form-control" id="alamat" value="{{ $data_customers->alamat }}"
                            aria-describedby="alamat">
                    </div>

                    <div class="form-group">
                        <label for="notelp">No Telepon</label>
                        <input type="text" name="notelp" class="form-control" id="notelp" value="{{ $data_customers->notelp }}"
                            aria-describedby="Notelp">
                    </div>

                    
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</div>
@endsection