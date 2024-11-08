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

    <nav class="navbar navbar-expand-lg navbar-light default-bg p-4">

        <a class="navbar-brand fw-bold text-light" href="{{url('/')}}">Click Share</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">

                <li class="nav-item active">
                    <a class="nav-link text-light" href="{{url('/')}}">Home</a>
                </li>

                @auth

                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{route('products.index')}}">Products</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{route('signout')}}">Logout</a>
                    </li>

                @endauth

            </ul>
        </div>

    </nav>
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
