@extends('layout/main')
@section('title', 'Detail Buku');
@section('container')
<div class="content">
        <div class="row">
            <div class="col-12">
                <a href=""><button class="btn btn-outline-primary">Detail Buku</button></a>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Detail Buku</h4>
                    </div>
                    <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class=" text-primary">
                                            <th>
                                                Data
                                            </th>
                                            <th>
                                                Isi
                                            </th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                Judul
                                                </td>
                                                <td>
                                                    {{$row->judul}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                Isi
                                                </td>
                                                <td>
                                                    {{$row->isi}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                Gambar
                                                </td>
                                                <td>
                                                    <img src="{{asset('storage/'.$row->gambar)}}" alt="">
                                                    
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                Banyak Halaman
                                                </td>
                                                <td>
                                                    {{$row->halaman}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Nama Penulis
                                                </td>
                                                <td>
                                                    <ul>
                                                        @foreach($row->penulis as $p)
                                                        <li>{{$p->nama}}</li>
                                                        @endforeach
                                                    </ul>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection