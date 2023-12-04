<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor02">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="{{ route('homepage') }}">Home
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('about') }}">About</a>
        </li>
        <li class="nav-item dropdown">
          <!-- Button trigger modal -->
          <a style="cursor: pointer" class="nav-link modale" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Category
          </a>

          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="accordion" id="accordionExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Category
                      </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        @foreach ($categories as $category)
                        <div class="categories-item my-3">
                          <a class="dropdown-item" href="/homepage/categories/{{ $category->id }}">{{ $category->name }}</a>
                        </div>
                        @endforeach
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>
      </ul>
      
      {{-- if user are not login --}}
      @if (!auth()->check())
      <ul class="navbar-nav me-auto">
        <li class="nav-item mx-3">
          <a class="btn btn-primary" href="/login">Login</a>
        </li>
        <li class="nav-item mx-3">
          <a class="btn btn-primary" href="/register">register</a>
        </li>
        <form class="d-flex">
          <input class="form-control me-sm-2" type="search" placeholder="Search">
          <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
        </form>
      </ul>
      @endif

      {{-- If user are login --}}
      @if (auth()->check())
      <ul class="navbar-nav me-auto">
        <li class="nav-item mx-3">
          <a class="btn btn-primary" href="{{ route('profile') }}">Profile</a>
        </li>
        <li class="nav-item mx-3">
          <a class="btn btn-primary" href="{{ route('addPost.create') }}">Add</a>
        </li>
        <form action="/logout" method="post">
          @csrf
          <button class="btn btn-primary mx-3">Logout</button>
        </form>
        <form class="d-flex">
          <input class="form-control me-sm-2" type="search" placeholder="Search">
          <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
        </form>
      </ul>
      @endif
    </div>
  </div>
</nav>