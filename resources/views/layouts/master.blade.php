
<!doctype html>
<html lang="nl" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#">
    <head data-enhance="false">

        @include('partials.meta-tags')

        <link rel="icon" href="{{ asset('/img/logo/favicon.png') }}" type="image/x-icon" />

        <title>Merpho | @yield('title')</title>


        <link rel="stylesheet" type="text/css" href="{{ URL::asset('plugins/normalize/css/normalize.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('plugins/bootstrap/css/bootstrap.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('plugins/animate/css/animate.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/main.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/loader.css') }}" />
        @yield('css')
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/font.css') }}" />
    </head>
    <body>
        <!-- start of the page content -->
        <div style="height: 100%; width: 100%; padding: 0; margin: 0;" data-enhance="false" data-role="page">
            <div class="row" style="height: 100vh; width: 100vw; margin: 0; padding: 0;">
              <!-- loader -->
              <div class="loader"> <img src="/img/loader/pageloader.png" class="image" style="" alt="">

              </div>
              <!-- page content -->
                @yield('content')
            </div>
        </div>

        <!-- js includes -->
        <script src="{{ URL::asset('/plugins/jquery/js/jquery-3.2.1.min.js')}}"></script>
        <script src="{{ URL::asset('/plugins/tether/js/tether.min.js')}}"></script>
        <script src="{{ URL::asset('/plugins/bootstrap/js/bootstrap.js')}}"></script>
        <script type="text/javascript">
          $(window).on('load', function() {
            setTimeout(function(){
              $(".loader").fadeOut("slow");
            }, 100);
          });
        </script>
        @yield('js')
    </body>
</html>
