<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route ('introduccion')}}">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route ('introduccion')}}">Introduccion</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Problemas
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="{{ route('problema', ['numero' => 1]) }}">Problema - 1</a></li>
          <li><a class="dropdown-item" href="{{ route('problema', ['numero' => 2]) }}">Problema - 2</a></li>
          <li><a class="dropdown-item" href="{{ route('cifrado') }}">Problema - 3</a></li>
          <li><a class="dropdown-item" href="{{ route('cifradoM') }}">Problema - 4</a></li>
          <li><a class="dropdown-item" href="{{ route('problema', ['numero' => 5]) }}">Problema - 5</a></li>
          <li><a class="dropdown-item" href="{{ route('problema', ['numero' => 6]) }}">Problema - 6</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button> 
      </form>
    </div>
  </div>
</nav>
