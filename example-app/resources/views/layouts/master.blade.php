<html>
    <head>
        <title>Sample2 - @yield('title')</title>
        <link rel="stylesheet" type="text/css" href="{{asset('/css/bootstrap.min.css')}}">
    </head>
    <body>

        <div class="container">
            @yield('content')
        </div>

  	  <script type="text/javascript" src="{{asset('/js/bootstrap.min.js')}}"></script>
    </body>
</html>
