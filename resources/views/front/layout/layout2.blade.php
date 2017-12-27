<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>List Agenda</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    @yield('css-include')
    <!-- Custom styles for this template -->
    <style type="text/css">
      body {
        padding-top: 20px;
      }

      .footer {
        padding-top: 40px;
        padding-bottom: 40px;
        margin-top: 40px;
        border-top: 1px solid #eee;
      }

      /* Main marketing message and sign up button */
      .jumbotron {
        text-align: center;
        background-color: transparent;
      }
      .jumbotron .btn {
        padding: 14px 24px;
        font-size: 21px;
      }

      .navbar {
        background-image: linear-gradient(to bottom, #f7f7f7 0%,#eee 100%);
        border: 1px solid #e5e5e5;
      }

      .container {
        max-width: 1700px;
      }
      @media (min-width: 768px) {
        .navbar-nav {
          display: -ms-flexbox;
          display: flex;
        }

        .navbar-nav .nav-item {
          -ms-flex: 1 0 auto;
          flex: 1 0 auto;
        }
      }

      /* Responsive: Portrait tablets and up */
      @media screen and (min-width: 768px) {
        /* Remove the padding we set earlier */
        .masthead,
        .marketing,
        .footer {
          padding-right: 0;
          padding-left: 0;
        }
      }

    </style>
    @yield('css-custom')
  </head>

  <body>

    <div class="container">

      <header class="masthead">
        <h3 class="text-muted">AGENDA KEGIATAN</h3>
        <h4 class="text-muted">DIREKTORAT SINKRONISASI URUSAN PEMERINTAH DAERAH I</h4>
        @include('front.layout.menu')
        
      </header>

      <main role="main">
        @yield('main')
        

      </main>

      <!-- Site footer -->
      <footer class="footer">
        <p>&copy; Direktorat Sinkronisasi 2017</p>
      </footer>

    </div> <!-- /container -->


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
