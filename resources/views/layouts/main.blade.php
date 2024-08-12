<!doctype html>

<html lang="en">
    <head>
   @include('includes.head')
    </head>
    
    <body>
    @include('includes.preload')
      
        <main>
        @include('includes.navbar')

        @yield('content')
        @include('includes.footer')

</main>
@yield('team')

@include('includes.jsfooter')


</body>
</html>

