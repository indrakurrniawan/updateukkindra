<nav class="navbar navbar-expand-lg bg-dark fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand text-white" href="#">PerPues</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="{{route('buku.index')}}">Buku</a>
          </li>
         
          <li class="nav-item">
            <a href="{{route('buku.create')}}" class="btn btn-secondary" >+buku</a>
          </li>
          <li class="nav-item">
            <a href="/logout" class="nav-link text-white" >keluar</a>
          </li>
          <li class="nav-item">
            <a href="/laporanbuku" class="nav-link text-white" >Laporan</a>
          </li>
        </ul>
        <form class="d-flex" action="{{url('buku')}}" role="search" method="GET">
          <input class="form-control me-2" type="search" name="key" value="{{Request::get('key')}}"  placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-secondary" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>