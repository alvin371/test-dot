@extends('layout/main')
@section('title', 'Edit Penulis');
@section('container')
<div class="content">
        <div class="row">
            <div class="col-12">
                <a href=""><button class="btn btn-outline-primary">Edit Penulis</button></a>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Form Edit Penulis</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{url('/penulis/update/'.$penulis->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                            <div class="form-group">
                                <label for="nama">Nama Penulis</label>
                                <input type="text" name="nama" class="form-control" value="{{$penulis->nama}}" id="nama"
                                    aria-describedby="emailHelp">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection