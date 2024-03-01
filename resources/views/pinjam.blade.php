@extends('layouts.app')
@section('body')

<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>H.peminjam</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
   
      <div class="container-fluid text-center mt-3">
        <div class="d-flex justify-content-start row p-1 g-1">
            @foreach ($huhu as $item)
            <div class="card" style="width: 18rem;">
              <img src="https://cdn.gramedia.com/uploads/items/Cover-Depan-Malin-Kundang-Cikal-Aksara-600x771.jpg" class="" alt="...">
              <div class="card-body">
                <h5 class="card-title">{{$item->buku}}</h5>
                <h5 class="card-title">{{$item->judul}}</h5>
                <p class="card-text">{{$item->judul}}</p>
                <p class="card-text">{{$item->penulis}}</p>
                <p class="card-text">{{$item->penerbit}}</p>
                <p class="card-text">{{$item->description}}</p>
                <a href="/pinjam" class="btn btn-primary">Pinjam</a>
              </div>
        </div>
        @endforeach
      </div>
      </div>
  </body>
</html>
@endsection
