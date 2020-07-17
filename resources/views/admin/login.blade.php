<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css"
          integrity="sha384-vus3nQHTD+5mpDiZ4rkEPlnkcyTP+49BhJ4wJeJunw06ZAp+wzzeBPUXr42fi8If" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            background: #00B4DB;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #0083B0, #00B4DB);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #0083B0, #00B4DB); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }
    </style>
</head>
<body class="w-100 h-100 d-flex flex-row justify-content-center align-items-center">
    <div class="w-100 h-100 d-flex flex-row justify-content-center align-items-center">
        <div class="bg-light col-11 col-md-5 shadow p-5 rtl mt-5" style="border-radius: 10px;">
            <form action="{{ route('login') }}" method="post">
                @csrf

                <div class="form-group">
                    <label for="">نام کاربری</label>
                    <input type="text" name="phone" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">رمز عبور</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <button class="btn btn-primary btn-block">ورود</button>
            </form>
        </div>
    </div>
</body>
</html>
