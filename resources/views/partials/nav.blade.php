<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="/">Blog Kita</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ ($active === "home") ? 'active' : '' }}" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($active === "about") ? 'active' : '' }}" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($active === "categories") ? 'active' : '' }}" href="/categories">Categories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($active === "post") ? 'active' : '' }}" href="/blog">Blog</a>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto">
        @auth
        <div class="dropdown">
          <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Hallo {{auth()->user()->name}}
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Dashboard</a></li>
            <form action="/logout" method="POST">
              @csrf
              <button type="submit" class="dropdown-item">Logout</button>
            </form>
          </ul>
        </div>
        @else
        <li class="nav-item">
          <a href="/login" class="nav-link {{ ($active === "login") ? 'active' : '' }}"><i class="bi bi-arrow-right-square"></i> Login</a>
        </li>
        @endauth
      </ul>
    </div>
  </div>
</nav>

