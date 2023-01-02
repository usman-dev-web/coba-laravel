
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container">
          <a class="navbar-brand" href="/">WPU BLOG</a>
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
                <a class="nav-link {{ ($active === "posts") ? 'active' : '' }}" href="/posts">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ ($active === "categories") ? 'active' : '' }}" href="/categories">Post Categories</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ ($active === "contact") ? 'active' : '' }}" href="/contact">Contact</a>
              </li>
            </ul>

            <ul class="navbar-nav ms-auto">
                  @auth
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Welcome {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> Dashboard</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#"><i class="bi bi-box-arrow-in-left"></i> Logout</a></li>
                    </ul>
                  </li>
                      @else
                  <li class="nav-item">
                    <a class="nav-link {{ ($active === "login") ? 'active' : '' }}" href="/login" ><i class="bi bi-box-arrow-in-right"></i> Login</a>
                  </li>
                  @endauth
            </ul>
          </div>
        </div>
      </nav>