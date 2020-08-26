
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
    @stack('css');

    <title>Twitter!</title>
  </head>
  <body>
    <section id="header">
        <p>HOME</p>
    </section>
    <div class="spacer"></div>
    <div class="containe">
        <!-- Post Section Start -->
        @yield('form')
        <!-- Post Section End -->

        <!-- Post Content Section Start -->
        <div class="spacer"></div>
        @yield('post')
        <!-- Post Contant Section Start -->
        
        
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    @stack('js');
  </body>
</html>