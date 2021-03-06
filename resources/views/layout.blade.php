<!doctype html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css"
          integrity="sha384-vus3nQHTD+5mpDiZ4rkEPlnkcyTP+49BhJ4wJeJunw06ZAp+wzzeBPUXr42fi8If" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('main.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    @yield('head')
    <title>پرتو دانش</title>
</head>
<body>
@include('header')

@if (auth()->check() && auth()->user()->isAdmin())
    <div class="container mt-5 shadow">
        <div class="row h-100 justify-content-center align-items-center bg-light rounded">
            <a class="btn mx-2 my-2 btn-info rounded" href="{{ route('user.index') }}">مدیریت کاربران</a>
            <a class="btn mx-2 my-2 btn-info rounded" href="{{ route('room.index') }}">مدیریت کلاس ها</a>
            <a class="btn mx-2 my-2 btn-info rounded" href="{{ route('category.index') }}">مدیریت دسته بندی ها</a>
            <a class="btn mx-2 my-2 btn-info rounded" href="{{ route('post.index') }}">مدیریت پست ها</a>
            <a class="btn mx-2 my-2 btn-info rounded" href="{{ route('slide.index') }}">مدیریت اسلاید ها</a>
        </div>
    </div>
@endif

@yield('content')
@include('footer')
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://cdn.rtlcss.com/bootstrap/v4.2.1/js/bootstrap.min.js"
        integrity="sha384-a9xOd0rz8w0J8zqj1qJic7GPFfyMfoiuDjC9rqXlVOcGO/dmRqzMn34gZYDTel8k"
        crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 700,
        delay: 100,
    });
</script>
@yield('script')
</html>
