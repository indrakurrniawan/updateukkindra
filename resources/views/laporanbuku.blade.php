<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Laporan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
 <center>
    <h1 class="pt-5">Data Buku</h1>
 </center>

 <div class="p-5 pt-4">
    <table class="table table-dark my-4">
        <thead>
            <tr>
                <th>NO</th>
                <th>BUKU</th>
                <th>JUDUL</th>
                <th>PENULIS</th>
                <th>PENERBIT</th>
            </tr>
        </thead>
        <tbody>
            @if($bukus->count()>0)
            @foreach($bukus as $lp)
            <tr class="table table-light">
                <td>{{$loop->iteration}}</td>
                <td>{{$lp->buku}}</td>
                <td>{{$lp->judul}}</td>
                <td>{{$lp->penulis}}</td>
                <td>{{$lp->penerbit}}</td>

            </tr>
            @endforeach
            @endif
        </tbody>

    </table>

 </div>

<script type="text/javascript">
widow.print();
</script>
  </body>
</html>