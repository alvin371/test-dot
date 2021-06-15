@extends('layout.main')
@section('title', 'Halaman Buku')
@section('container')


<div class="content">
                <div class="row">
                    <div class="col-12 justify-content-end text-right">
                        <a href="{{url('/buku/add')}}">
                            <button class="btn btn-outline-primary">Tambah Buku</button>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"> Daftar Buku</h4>
                            </div>
                            @if (session('status'))
                                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                            <strong>{{ session('status') }}</strong>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>
                            @endif
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class=" text-primary">
                                            <th>
                                                Judul Buku
                                            </th>
                                            <th>
                                                Banyak Halaman
                                            </th>
                                            <th>
                                                Waktu Pembuatan
                                            </th>
                                            <th>
                                                Aksi
                                            </th>
                                        </thead>
                                        <tbody id="movie-list">
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            

@endsection
@section('script')
<script>
    $('#movie-list').html('')
    $.ajax({
        url:'http://localhost:8000/api/daftar-buku',
        type:'get',
        dataType:'json',
        success: function(result) {
                
                $.each(result, function(i,data){
                    
                    $('#movie-list').append(`
                    <tr>
                        <td>
                            `+data.judul+`
                        </td>
                        <td>
                            `+data.halaman+`
                        </td>
                        <td>
                            `+data.waktu+`
                        </td>
                        <td>
                            <div class="row">
                                <div class="col-12 text-left align-item-center mx-auto justify-between">
                                    <a href="{{url('/buku/`+data.id+`')}}">
                                        <button class="btn btn-outline-primary">Detail</button>
                                    </a>
                                    <a href="{{url('/buku/edit/`+data.id+`')}}">
                                        <button class="btn btn-outline-primary">Edit</button>
                                    </a>
                                    <form action="{{url('/buku/delete/`+data.id+`')}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-outline-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                    `)
                })
        }
    });
</script>

@endsection