@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-18">
            <div class="card">
                <div class="card-header">
                    Data
                </div>
                <div class="card-body">
                    <div class="container">
                        <div class="row justify-content-between">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-3">
                                <a name="addButon" id="addButon" class="btn btn-primary" href="{{ route('add_data') }}" role="button">Add data</a>
                            </div>
                        </div>
                    </div>
                    <br>
                    <table class="table table-striped table-inverse table-responsive">
                        <thead class="thead-default">
                            <tr>
                                <th>Id</th>
                                <th>Nama</th>
                                <th>Pekerjaan</th>
                                <!-- <th>Tanggal Lahir</th> -->
                                <th>No. Telepon</th>
                                <th>Alamat</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($biodata as $data)
                            <tr>
                                <td>{{ $data->id }}</td>
                                <td>{{ $data->nama }}</td>
                                <td>{{ $data->pekerjaan }}</td>
                                <!-- <td>{{ $data->tanggal_lahir }}</td> -->
                                <td>{{ $data->no_telp }}</td>
                                <td>{{ $data->alamat }}</td>
                                <td>
                                    <a class="btn btn-info btn-sm"  href="/biodata/update/{{ $data->id }}" role="button"><i class="bi-pencil-square" aria-hidden="true"></i></a>
                                    <a class="btn btn-danger btn-sm" href="/biodata/delete/{{ $data->id }}" role="button"><i class="bi-trash" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <br>
                    <div class="row justify-content-center">
                        <div class="col-md-4"></div>
                        <div class="col-md-4 text-align-center">
                            <h4 class="card-title">Export to:</h4>
                            <div class="row">
                                <div class="col-md-2">
                                    <a role="button" name="csv" id="csv" target="_blank" class="btn btn-primary" href="{{ route('exportCsv') }}" btn-lg btn-block>CSV</a>   
                                 
                                </div>
                                <div class="col-md-2">
                                    <a role="button" target="_blank" name="txt" id="text" class="btn btn-primary" href="{{ route('exportTxt') }}" btn-lg btn-block>txt</a>    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection