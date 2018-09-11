<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('partials._head')
</head>

<body>

@yield('content')

@include('partials._footer')

@include('partials._javascript')
@yield('scripts')
</body>
</html>
