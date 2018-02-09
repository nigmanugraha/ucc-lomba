@extends('layout.app')

@section('css')

@endsection

@section('content')
    <a href="/lomba/add" class="btn btn-primary">Tambah Lomba</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Poster</th>
            <th scope="col">Tanggal Tutup</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
            <?php
                $lombas = \App\Lomba::get();         
            ?>
            @for($i=0;$i<sizeof($lombas);$i++)
                <tr>
                    <th scope="row">{{($i+1)}}</th>
                    <td><a href="/lomba/{{$lombas[$i]->id}}">{{$lombas[$i]->name}}</a></td>
                    <td>{{$lombas[$i]->deskripsi}}</td>
                    <td><img src="{{$lombas[$i]->poster}}" width="100"/></td>
                    <td>{{$lombas[$i]->tanggal_tutup}}</td>
                    <td>
                        <a href="/lomba/{{$lombas[$i]->id}}/edit"><button type="button" class="btn btn-primary">Edit</button></a>
                        <a href="/lomba/{{$lombas[$i]->id}}/hapus"><button type="button" class="btn btn-danger">Hapus</button></a>
                    </td>
                </tr>
            @endfor
        </tbody>
    </table>
@endsection

@section('js')

@endsection