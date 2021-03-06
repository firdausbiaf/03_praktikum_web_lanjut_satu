<html>
<head>
    <title> {{ $title }}</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css')}}">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 bg-primary">
                @include('minggu3.header')
            </div>
        </div>
        <div class="row">
            <div class="col-3 bg-warning">
                @include('minggu3.sidebar')
        </div>
            <div class="col-9 bg-success">
                @yield('content')
            </div>
    </div>
    <script type="text/javascript" src="{{ asset('/js/app.js')}}"></script>
</body>
</html>