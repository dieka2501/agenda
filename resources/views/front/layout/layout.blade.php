<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>AGENDA FRONT END</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    

    @yield('css-include')

    <!-- Custom styles for this template -->
    <style type="text/css">
      /*
       * Base structure
       */

      /* Move down content because we have a fixed navbar that is 3.5rem tall */
      body {
        padding-top: 3.5rem;
      }

      /*
       * Typography
       */

      h1 {
        padding-bottom: 9px;
        margin-bottom: 20px;
        border-bottom: 1px solid #eee;
      }

      /*
       * Sidebar
       */

      .sidebar {
        position: fixed;
        top: 51px;
        bottom: 0;
        left: 0;
        z-index: 1000;
        padding: 20px 0;
        overflow-x: hidden;
        overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
        border-right: 1px solid #eee;
      }

      .sidebar .nav {
        margin-bottom: 20px;
      }

      .sidebar .nav-item {
        width: 100%;
      }

      .sidebar .nav-item + .nav-item {
        margin-left: 0;
      }

      .sidebar .nav-link {
        border-radius: 0;
      }

      /*
       * Dashboard
       */

      /* Placeholders */
      .placeholders {
        padding-bottom: 3rem;
      }

      .placeholder img {
        padding-top: 1.5rem;
        padding-bottom: 1.5rem;
      }
    </style>
    @yield('css-custom')
  </head>

  <body>
    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Halaman Depan</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        </div>
        <!-- <form class="form-inline mt-2 mt-md-0">
            <a href="{{ route('get.logout') }}" class="btn btn-outline-success my-2 my-sm-0">Logout</a>
          </form> -->
      </nav>
    </header>

    <div class="container-fluid">
      <div class="row">
        
        <!-- Main Section -->
        @yield('main')
        <!-- End Of Main Section-->
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <!-- <script>window.jQuery || document.write('')</script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    @yield('js-include')
    @yield('js-custom')
  </body>
</html>
