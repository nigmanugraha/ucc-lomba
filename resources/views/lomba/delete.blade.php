@extends('layout.app')

@section('css')
@endsection

@section('content')
<center>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Delete Confirmation</h5>
            <p class="card-text">Yakin Ingin Menghapus Lomba "{{$data->name}}"?</p>
            <div class="row">
                <a href="/lomba/{{$data->id}}/confirmdelete" class="card-link col btn btn-danger">YA</a>
                <a href="/lomba" class="card-link col btn btn-primary">TIDAK</a>
            </div>
        </div>
    </div>
</center>
@endsection

@section('js')
@endsection
