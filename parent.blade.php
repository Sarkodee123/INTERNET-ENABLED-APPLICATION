<!Doctype>
<html>
    <head>
        <title>NANAH'S FASHION CLOTHING</title>
        <link rel="stylesheet" type="text/css" href="{{URL::asset('css/font-awesome.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{URL::asset('css/bootstrap.min.css')}}">
    </head>
<body>

    <div class="container">
        <div class="col-md-12">
            <!--Place navigation bar-->
        @include('partials.navbar')
        </div>
        <div class="row">
            <div class="col-md-12">
                <!--Content Area-->
                @yield('killer')
            </div>
        </div>


    </div>


</body>

<script src="{{URL::asset('js/jquery.min.js')}}"></script>
<script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
</html>