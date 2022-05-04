<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
    <div class="container-fluid">
      <a class="navbar-brand" href="/lsapp/public/">{{config('app.name', 'LSAPP')}}</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/lsapp/public/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/lsapp/public/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/lsapp/public/services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/lsapp/public/posts">Blog</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>