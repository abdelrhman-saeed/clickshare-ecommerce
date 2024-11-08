<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="{{asset('css/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap/classes.css')}}" rel="stylesheet">

    <script src="{{asset('js/jquery-3.7.1.min.js')}}"></script>
    <script src="{{'js/bootstrap/bootstrap.min.js'}}"></script>

    <title> {{env('APP_NAME')}} </title>

    <!-- head seaction -->
    @yield('head')
    <!-- /head seaction -->

</head>
<body>

    <!--  body section -->
    @yield('body')
    <!--  /body section -->


    @yield('script')
</body>

<footer>

    <!-- footer section -->
    @yield('footer')
    <!-- /footer section -->

</footer>

</html>
