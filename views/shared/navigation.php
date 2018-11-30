<nav class="navbar fixed-top navbar-expand-xl navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img src="./assets/img/Alzurius_1.png" width="100%" height="40" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar"
    aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbar">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/contact">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/blog">Blog</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="/shop" id="dropdown" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Catalog</a>
        <div class="dropdown-menu" aria-labelledby="dropdown">
          <a class="dropdown-item" href="/action">Action</a>
          <a class="dropdown-item" href="/another_action">Another action</a>
          <a class="dropdown-item" href="/else_action">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" id="cart-trigger"><i class="fas fa-shopping-cart"></i>&nbsp;Cart</a></li>
    </ul>
    <form class="form-inline my-2 my-md-0 ">
      <input class="form-control" type="text" placeholder="Search">
    </form>
  </div>
</nav>