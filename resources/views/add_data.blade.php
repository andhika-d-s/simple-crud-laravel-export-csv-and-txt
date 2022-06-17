@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Form Tambah Biodata
                </div>
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <form action="{{ route('post_biodata') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                                <div class="form-group">
                                  <label for="nama">Nama</label>
                                  <input type="text"
                                    class="form-control" name="nama" id="nama" aria-describedby="namaId" placeholder="Nama">
                                  <label for="pekerjaan">Pekerjaan</label>
                                  <input type="text"
                                    class="form-control" name="pekerjaan" id="pekerjaan" aria-describedby="pekerjaanId" placeholder="Pekerjaan">
                                  <label for="tanggal_lahir">Tanggal Lahir</label>
                                  <input type="date"
                                    class="form-control" name="tanggal_lahir" id="tanggal_lahir" aria-describedby="tanggal_lahirId" placeholder="">
                                  <label for="no_telp">No. Telepon</label>
                                  <input type="text"
                                    class="form-control" name="no_telp" id="no_telp" aria-describedby="no_telpId" placeholder="No. Telepon">
                                  <label for="alamat">Alamat</label>
                                  <input type="text"
                                    class="form-control" name="alamat" id="alamat" aria-describedby="alamatId" placeholder="Alamat">
                                    <br>
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <button  class="btn btn-primary" role="submit">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <br>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection