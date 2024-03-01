@extends('layouts.app')

@section('body')

    <h1 class="mb-0">Pinjam Buku</h1>
<hr/>
    <form class="row g-3" action="{{route('buku.store')}}" method="POST">
        @csrf
        <div class="col-md-6">
            
            @foreach ($buku as $item)
          <label for="inputEmail4" class="form-label">buku</label>
          <input type="text" class="form-control" name="buku" value="{{$item->buku}}" readonly>
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">judul</label>
          <input type="text" class="form-control" name="judul" value="{{$item->judul}}" readonly>
        </div>
        <div class="col-md-6">
          <label for="inputCity" class="form-label">penulis</label>
          <input type="text" class="form-control" name="penulis "value="{{$item->penulis}}" readonly>
        </div>
        <div class="col-md-6">
          <label for="inputCity" class="form-label">penerbit</label>
          <input type="text" class="form-control" name="penerbit" value="{{$item->penerbit}}" readonly>
        </div>
        <div class="col-md-6">
            <label for="inputCity" class="form-label">Date</label>
            <input type="date" class="form-control" name="penulis">
          </div>
        <div class="col-12">
            <button type="submit" class="btn btn-secondary">Pinjam</button>
          </div>
          @endforeach
</form>
@endsection