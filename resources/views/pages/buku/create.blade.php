@extends('layouts.app')

@section('body')

    <h1 class="mb-0">Tambah Buku</h1>
<hr/>
<form action="{{route('buku.store')}}"  method="POST">
    @csrf
    <form class="row g-3">
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">buku</label>
          <input type="text" class="form-control" name="buku">
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">judul</label>
          <input type="name" class="form-control" name="judul">
        </div>
        <div class="col-md-6">
          <label for="inputCity" class="form-label">penulis</label>
          <input type="text" class="form-control" name="penulis">
        </div>
        <div class="col-md-6">
          <label for="inputCity" class="form-label">penerbit</label>
          <input type="text" class="form-control" name="penerbit">
        </div><br>
        <div class="col">
            <textarea class="form-control" name="description" placeholder="description"  ></textarea>
          </div><br>
        <div class="col-12">
          <button type="submit" class="btn btn-secondary">Submit</button>
        </div>
      </form>
</form>
@endsection