<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Unit 13 Productions | <?= $title; ?></title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  </head>

  <body>
<div class="container-fluid"> {{-- Start of Main Container --}}

        <nav class="navbar navbar-expand-lg navbar-light bg-white">
                <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('img/logo.png') }}" alt="Unit 13 Music Productions" id="logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar7">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse justify-content-stretch" id="navbar7">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('about') }}">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('services') }}">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('contact') }}">Contact Us</a>
                        </li>
                        <li class="nav-item" hidden>
                            <a class="nav-link" href="{{ url('reviews') }}" hidden>Reviews</a>
                        </li>
                    </ul>
                </div>
            </nav>

      {{-- Start Display the content --}}
      <div class="container-fluid bg-white">
            @yield('content')

        <footer class="footer">
                <div class="container">
                      <span class="text-muted">Designed &amp; Developed by: <a href="http://www.syn-code.co.uk">Syn-Code</a> &copy; <?= date('Y'); ?></span>
                </div>
        </footer>
      </div>
      {{-- End of Display Content --}}


</div> {{-- End of Main Container --}}


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="{{ asset('js/jquery-3.3.1.slim.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  </body>
</html>
