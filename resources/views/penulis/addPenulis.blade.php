@extends('template/adminView')
@section('title','Admin Tambah Penulis')
@section('container')


<!-- Begin Page Content -->
<div class="container-fluid">


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Penulis</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <form method="post" enctype="multipart/form-data" action="{{url('/penulis/store')}}">
                    @csrf
                        <div class="form-group">
                            <label for="nama">Nama Penulis</label>
                            <input type="text" name="nama" class="form-control" id="nama"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="ttl">Tempat Tanggal Lahir</label>
                            <input type="text" name="ttl" class="form-control" id="ttl"
                                aria-describedby="emailHelp">
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label" for="">Input Karya Buku</label>
                            @foreach($buku as $row)
                                @if(!empty($row->judul))
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="{{$row->id_buku}}" name="id_buku" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        {{$row->judul}}
                                </label>
                            </div>
                                @endif
                            @endforeach
                        </div>
                        <div class="d-flex mb-2">
                            <div class="ml-auto p-2">

                                <button type="submit" class="btn btn-primary  mt-3">Submit</button>
                            </div>
                        </div>
                    </form>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection
@section('javascript')
<script src="{{asset('cssAdmin/ckeditor/ckeditor.js')}}"></script>
<script>
    CKEDITOR.replace('artikel');

</script>
<script>    
    $('.custom-file-input').on('change', function () {
            let fileName = $(this).val().split('\\').pop();
            $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });
</script>
@endsection