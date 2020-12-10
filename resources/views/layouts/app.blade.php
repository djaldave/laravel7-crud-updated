<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>
<body style=" background-color: #222831;">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3 ">
    <div class="container">
    <a class="navbar-brand mx-auto btn btn-secondary btn-outline-warning mt-2 mb-2" href="{{ route('posts.index') }}">Home</a>
{{--    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--        <span class="navbar-toggler-icon"></span>--}}
{{--    </button>--}}
    </div>
    </nav>

    <div class="container">
       @yield('content')
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <script>
    $(function() {
        $('.alert-success').fadeOut(3000);
    });
    </script>
  <footer class="font-small footer" style=" position: absolute;bottom: 0;width: 100%;background-color: #222831;">
      <div class="footer-copyright text-center py-3 bg-dark text-white">&copy; <?php echo date('Y')?> Copyright:
          <a href="#" class="text-light">laevad</a>
      </div>
  </footer>
</body>
</html>
