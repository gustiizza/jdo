<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Juragan Donat Admin</title>
    <link href="{{ url('https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <script src="{{ url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js') }}" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    @include('layouts.backend.partial.navbar')

    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            @include('layouts.backend.partial.sidebar')
        </div>
        <div id="layoutSidenav_content">
            @yield('content')

            @include('layouts.backend.partial.footer')
        </div>
    </div>
    <script src="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js') }}" crossorigin="anonymous"></script>
    <script src="{{ url('js/scripts.js') }}"></script>
    <script src="{{ url('https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js') }}" crossorigin="anonymous"></script>
    <script src="{{ url('assets/demo/chart-area-demo.js') }}"></script>
    <script src="{{ url('assets/demo/chart-bar-demo.js') }}"></script>
    <script src="{{ url('https://cdn.jsdelivr.net/npm/simple-datatables@latest') }}" crossorigin="anonymous"></script>
    <script src="{{ url('js/datatables-simple-demo.js') }}"></script>
</body>

</html>
