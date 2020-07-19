<!doctype html>
<html lang="fa">
<head>
    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css"
          integrity="sha384-vus3nQHTD+5mpDiZ4rkEPlnkcyTP+49BhJ4wJeJunw06ZAp+wzzeBPUXr42fi8If" crossorigin="anonymous">
    <meta charset="UTF-8">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/slim-select/1.26.0/slimselect.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slim-select/1.26.0/slimselect.min.css" rel="stylesheet"></link>

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>@yield('title')</title>
    <style>
        body{
            background: #2193b0;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #6dd5ed, #2193b0);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #6dd5ed, #2193b0); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            direction: rtl;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="row h-100 justify-content-center align-items-center bg-light rounded">
        <a class="btn mx-2 my-2 btn-info rounded" href="{{ route('user.index') }}">مدیریت کاربران</a>
        <a class="btn mx-2 my-2 btn-info rounded" href="{{ route('room.index') }}">مدیریت کلاس ها</a>
        <a class="btn mx-2 my-2 btn-info rounded" href="{{ route('category.index') }}">مدیریت دسته بندی ها</a>
        <a class="btn mx-2 my-2 btn-info rounded" href="{{ route('post.index') }}">مدیریت پست ها</a>
    </div>
</div>


@yield('content')

</body>
<script>
    new SlimSelect({
        select: '#slim'
    })
</script>
</html>
