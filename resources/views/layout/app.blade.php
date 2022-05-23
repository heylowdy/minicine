<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('./css/app.css')}}" rel="stylesheet" />
    <title>libaires</title>
</head>

    <nav>
    @include('layout.nav')
    </nav>


@yield('header')



<main class="h-screen">
     
      
    

   
    
    </main>
      @yield('main')

<div class="footer">
   @include('layout.footer')


</div>
@yield('footer')
</body>
</html>