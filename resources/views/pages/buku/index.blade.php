@extends('layouts.app')

@section('body')
<div class="d-flex align-items-center justify-content-between">
    <h1 class="mb-0">List Buku</h1>
    
</div>
<hr/>
@if(Session::has('success'))
<div class="alert alert-success">
    {{Session::get('success')}}
</div>
@endif
<div >
    <table class="table table-hover table-bordered border-dark text-center">
        <thead class="table-dark text-white text-uppercase">
            <tr>
                <th>No</th>
                <th>Buku</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            @if($bukus->count()>0)
            @foreach ($bukus as $buku)
                
            <tr>
                <td class="algin-middle">{{$loop->iteration}}</td>
                <td class="algin-middle">{{$buku->buku}}</td>
                <td class="algin-middle">{{$buku->judul}}</td>
                <td class="algin-middle">{{$buku->penulis}}</td>
                <td class="algin-middle">{{$buku->penerbit}}</td>
                <td>
                    <div class="btn-group">
                        <a href={{route('buku.show',$buku->id)}} class="btn btn-warning">detail</a>
                        <a href={{route('buku.edit',$buku->id)}} class="btn btn-secondary">edit</a>
                        <form action="{{route('buku.destroy',$buku->id)}}" method="POST"  class="btn btn-danger" onsubmit="return confirm('delete?')" >
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger p-0">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
            @else
            <tr>
                <td class="text-center" colspan="6">BUKU TIDAK ADA</td>
            </tr>
            @endif
        </tbody>
    </table>

</div>
    
@endsection