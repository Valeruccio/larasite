<!-- Stored in resources/views/layouts/master.blade.php -->

<html>
<head>
{{--Тайтл берется отсюда (!)--}}
    <title>App Name - @yield('title')</title>
</head>
<body>
{{--Секцию переопределим--}}
@section('sidebar')
    Это - главный сайдбар.
@show

<div class="container">
    @yield('content')
</div>
</body>
</html>
