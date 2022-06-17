@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
        <div class="card">
            <div class="card-header">
                Dashboard
            </div>
            <div class="card-body">
                <div class="container">
                    <div class="row justify-content-center">
                        <a name="seeTable" id="seeTable" class="btn btn-primary" href="{{ route('biodata') }}" role="button">lihat table</a>
                    </div>
                </div>
                <br>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
