<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand" href="/">Berita Jombang</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">

          <li class="nav-item">
            <a class="nav-link {{ ($pageTitle === 'Berita Jombang' ? 'active' : '') }}" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($pageTitle === 'Categories' ? 'active' : '') }}" aria-current="page" href="/categories">Categories</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
