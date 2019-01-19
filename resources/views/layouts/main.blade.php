<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Laravel Skill Test</title>
    <link rel="stylesheet" href="{{ URL::asset('bootstrap/bootstrap.min.css') }}">

    @yield('style')
</head>
<body>
<div class="container">
    <div class="card">
        <div class="card-header"><h1 align="center">Laravel Skill Test</h1></div>
        <div class="card-body">
            <div class="row">
                @yield('content')
            </div>
        </div>
    </div>

</div>
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('bootstrap/bootstrap.min.js') }}"></script>
@yield('script-bottom')
</body>

</html>