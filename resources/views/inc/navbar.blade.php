<nav class="navbar-expand-lg navbar navbar-dark bg-primary">
<a class="navbar-brand" href="/">BasicWebsite</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link {{ Request::is('about') ? 'active' : '' }}" href="/about">About Us</a>
      <a class="nav-item nav-link {{ Request::is('contact') ? 'active' : '' }}" href="/contact">Contact Us</a>
      <a class="nav-item nav-link {{ Request::is('messages') ? 'active' : '' }}" href="/messages">Messages</a>
    </div>
  </div>
</nav>