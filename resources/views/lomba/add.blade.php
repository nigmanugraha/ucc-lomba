@extends('layout.app')

@section('css')
@endsection

@section('content')
    <form action="/lomba" method="post">
        {{csrf_field()}}
        <div class="form-group">
          <label for="nama">Nama</label>
          <input name="nama" type="text" class="form-control" id="nama" placeholder="Nama" required>

        </div>
        <div class="form-group">
          <label for="deskripsi">Deskripsi</label>
          <input name="deskripsi" type="text" class="form-control" id="deskripsi" placeholder="Deskripsi" required>
        </div>
        <div class="form-group">
          <label for="poster">Poster</label>
          <input name="poster" type="text" class="form-control" id="poster" placeholder="Poster" required>
        </div>
        <div class="form-group">
          <label for="tglttp">Tanggal Tutup</label>
          <input name="tglttp" type="date" class="form-control" id="tglttp" placeholder="Tanggal Tutup" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

@section('js')
@endsection
