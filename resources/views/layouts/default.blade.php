<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title', 'Sample') - Laravel新手入门教程</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    @include('layouts._header')
    <div class="container">
        <div class="col-md-offset-1 col-md-10">
            @include('shared._messages')
            @yield('content')
            @include('layouts._footer')
        </div>
    </div>
    <script src="/js/app.js"></script> 
</body>
</html>
