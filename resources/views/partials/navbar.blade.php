<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <p style="margin-right: 20px;">{{ Carbon\Carbon::now()->format('l, j F Y H:i') }}</p>
    <a href="#" class="navbar-brand" style="font-weight: bold;">Collage Student Room</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <form class="d-flex ms-auto" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
