@extends('layout/main')
@section('title', 'Tambah Penulis');
@section('container')
<div class="content">
        <div class="row">
            <div class="col-12">
                <a href=""><button class="btn btn-outline-primary">Tambah Penulis</button></a>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Form Tambah Penulis</h4>
                    </div>
                    <div class="card-body">
                        <form action="/penulis/store" method="post" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group">
                                <label for="nama">Nama Penulis</label>
                                <input type="text" name="nama" class="form-control" id="nama"
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