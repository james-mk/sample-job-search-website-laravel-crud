<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

       
        <title>Job Hunter</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
       
        <link rel="stylesheet" href="{{asset('css/app.css')}}"> 
        <link rel="stylesheet" href="{{asset('css/main.css')}}"> 
       
        {{-- <script src="{{asset('js/jquery.js')}}"></script>
        <link rel="stylesheet" href="{{asset('css/materialize.css')}}">
        <script src="{{asset('js/materialize.js')}}"></script> --}}

    </head>
    <body>
    <!-- include header -->
    @include('includes/header')

   <div class="container text-center">
         @include('includes/messages')
   </div>
  
    <!-- main content -->
    @yield('content')
  
  

    <!-- include footer -->
     @include('includes/footer')
 
      <!-- js links -->
    <script src="{{asset('js/jquery.js')}}"></script>
     <script src="{{asset('js/app.js')}}"></script>
     <script src="{{asset('js/scripts.js')}}"></script>
    </body>
</html>
