<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Register</title>
</head>
<body>
    <div class="container py-4">
        <div class="w-50 center border rounded px-4 py-5 mx-auto">
        <h1 class="text-center">Register</h1>
       @if(Session::has('success'))
       <div class="alert alert-success">
        {{Session::get('success')}}

       </div>
       @endif
        
        <form action="{{route('register')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Name</label>
                <input type="name" value="" name="name" class="form-control">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" value="{{old('email')}}" name="email" class="form-control">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="mb-3 d-grid">
                <button name="submit" type="submit" class="btn btn-success ">Register</button>
            </div>
        </form>
    </div> 
    </div>
</body>
</html>