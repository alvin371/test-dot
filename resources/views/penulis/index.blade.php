@extends('layout.main')
@section('title', 'Halaman Penulis')
@section('container')
<div class="content">
    <div class="row">
        <div class="col-12 justify-content-end text-right">
            <a href="{{url('/penulis/add')}}">
                <button class="btn btn-outline-primary">Tambah Penulis</button>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Daftar Nama Penulis</h4>
                </div>
                <div class="card-body">
                    <div id="app">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Nama Penulis
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
</div>


@endsection
@section('script')
<script>
    $('#movie-list').html('')
    $.ajax({
        url:'http://localhost:8000/api/penulis',
        type:'get',
        dataType:'json',
        success: function(result) {
                
                $.each(result, function(i,data){
                    $('#movie-list').append(`
                    <tr>
                        <td>
                            `+data.id+`
                        </td>
                        <td>
                            `+data.nama+`
                        </td>
                        <td>
                            <div class="row">
                                <div class="col-12 text-left align-item-center mx-auto justify-between">
                                    <a href="{{url('/penulis/edit/`+data.id+`')}}">
                                        <button class="btn btn-outline-primary">Edit</button>
                                    </a>
                                    <form action="/penulis/delete/`+data.id+`" method="post">
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