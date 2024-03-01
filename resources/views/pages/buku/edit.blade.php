@extends('layouts.app')

@section('body')

    <h1 class="mb-0">Edit Buku</h1>
<hr/>
    <form class="row g-3" action="{{route('buku.update',$buku->id)}}" method="POST">
      @csrf
      @method('PUT')
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">buku</label>
          <input type="text" class="form-control" name="buku" value="{{$buku->buku}}" >
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">judul</label>
          <input type="text" class="form-control" name="judul" value="{{$buku->judul}}" >
        </div>
        <div class="col-md-6">
          <label for="inputCity" class="form-label">penulis</label>
          <input type="text" class="form-control" name="penulis "value="{{$buku->penulis}}">
        </div>
        <div class="col-md-6">
          <label for="inputCity" class="form-label">penerbit</label>
          <input type="text" class="form-control" name="penerbit" value="{{$buku->penerbit}}" >
        </div><br>
        <div class="col">
            <textarea class="form-control" name="description" placeholder="description">{{$buku->description}}</textarea>
          </div><br>

          <div class="col-12">
            <button type="submit" class="btn btn-secondary">Submit</button>
          </div>
</form>
@endsection