@extends('layouts.app')

@section('body')

    <h1 class="mb-0">Detail Buku</h1>
<hr/>
    <form class="row g-3">
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">buku</label>
          <input type="text" class="form-control" name="buku" value="{{$buku->buku}}" readonly>
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">judul</label>
          <input type="text" class="form-control" name="judul" value="{{$buku->judul}}" readonly>
        </div>
        <div class="col-md-6">
          <label for="inputCity" class="form-label">penulis</label>
          <input type="text" class="form-control" name="penulis "value="{{$buku->penulis}}" readonly>
        </div>
        <div class="col-md-6">
          <label for="inputCity" class="form-label">penerbit</label>
          <input type="text" class="form-control" name="penerbit" value="{{$buku->penerbit}}" readonly>
        </div><br>
        <div class="col">
            <textarea class="form-control" name="description" placeholder="description" readonly>{{$buku->description}}</textarea>
          </div><br>
</form>
@endsection