<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
  </head>
  <body>
    <div id="app">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <router-link to="/circle" class="nav-link">
                Circle
              </router-link>
            </li>
            <li class="nav-item">
              <router-link to="/rectangle" class="nav-link">
                Rectangle
              </router-link>
            </li>
            <li class="nav-item">
              <router-link to="/triangle" class="nav-link">
                Triangle
              </router-link>
            </li>
          </ul>
        </div>
      </nav>

      <div class="container">
        <router-view></router-view>
      </div>
    </div>

    <script src="{{asset('js/app.js')}}"></script>
  </body>
</html>
