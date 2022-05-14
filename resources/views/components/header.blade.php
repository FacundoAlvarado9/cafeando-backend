<div class="header">
<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Cafeando</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/variedades">Variedades</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/tostadurias">Tostadurias</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/origenes">Orígenes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/ciudades">Ciudades</a>
        </li>
      </ul>

      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item" style="margin-right: 1em;">
          <a style="color:white;">Logueado como: <i>{{ Auth::user()->name }}</i> </a>
        </li>

        <li class="nav-item">
          <form method="POST" action="{{ route('logout') }}">
              @csrf

              <a href="route('logout')" style="color: white;" onclick="event.preventDefault(); this.closest('form').submit();">
                  {{ __('Log Out') }}
              </a>
          </form>
        </li>
      </ul>

    </div>
  </div>
</nav>
</div>
