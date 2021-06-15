@extends('layout/main')
@section('title', 'Edit Buku');
@section('container')
<div class="content">
        <div class="row">
            <div class="col-12">
                <a href=""><button class="btn btn-outline-primary">Edit Buku</button></a>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Form Edit Buku</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{url('buku/update/'.$buku->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                            <div class="form-group">
                                <label for="judul">Judul Buku</label>
                                <input type="text" name="judul" class="form-control" id="judul"
                                    aria-describedby="emailHelp" value="{{$buku->judul}}">
                            </div>
                            <div class="form-group">
                                <label for="halaman">Jumlah Halaman</label>
                                <input type="text" name="halaman" class="form-control" id="halaman" value="{{$buku->halaman}}">
                            </div>
                            <div class="form-group">
                                <label for="waktu">Waktu Pembuatan Buku</label>
                                <input type="text" name="waktu" class="form-control" id="waktu" value="{{$buku->waktu}}">
                            </div>
                            <div class="form-group">
                                <label for="isi">Isi</label>
                                <input type="text" name="isi" class="form-control" id="isi" value="{{$buku->isi}}">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="gambar">Gambar Buku</label>
                                <div class="input-group mb-3">
                                    <div class="custom-file">
                                        <input type="file"
                                            class="custom-file-input  @error('gambar') is-invalid @enderror"
                                            value="{{old('gambar')}}" name="gambar"
                                            id="gambar" aria-describedby="inputGroupFileAddon01" >
                                        @error('gambar')
                                        <div id="gambar" class="invalid-feedback">{{$message}}
                                        </div>
                                        @enderror
                                        <label class="custom-file-label" for="inputGroupFile01">Choose
                                            file</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="">Input Nama Penulis</label>
                            @if(!empty($buku->penulis))
                                @foreach($penulis as $row)
                                    <input class="mx-3" type="checkbox" value="{{$row->id}}" name="n_penulis[]" id="defaultCheck1">{{$row->nama}}

                                @endforeach
                                
                            @else
                                @foreach($buku->penulis as $row)
                                    <input class="mx-3" type="checkbox" value="{{$row->id}}" name="n_penulis[]" id="defaultCheck1">{{$row->nama}}

                                @endforeach
                            @endif
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection