<nav class="container navbar bold navbar-expand-lg navbar-dark " style="direction: rtl">
    <a class="navbar-brand" href="{{ url('') }}">
        <img src="{{ asset('img/logo.png') }}" style="max-width: 40px" alt="logo" class="light-shadow circle img-fluid">
        <span>پرتو دانش</span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-2">
            <li class="mx-1 p-lg-0 p-1 my-1 my-lg-0 nav-item active bg-light rounded shadow">
                <a class="nav-link text-dark" href="/#">خانه</a>
            </li>
            <li class="mx-1 p-lg-0 p-1 my-1 my-lg-0 nav-item active bg-light rounded shadow">
                <a class="nav-link text-dark" href="/#">فروشگاه</a>
            </li>
            <li class="mx-1 p-lg-0 p-1 my-1 my-lg-0 nav-item active bg-light rounded shadow">
                <a class="nav-link text-dark" href="/#aboutus">درباره ما</a>
            </li>
            <li class="mx-1 p-lg-0 p-1 my-1 my-lg-0 nav-item active bg-light rounded shadow">
                <a class="nav-link text-dark" href="/#contactus">تماس با ما</a>
            </li>
{{--            <li class="mx-1 p-lg-0 p-1 my-1 my-lg-0 nav-item active bg-light rounded shadow">--}}
{{--                <a class="nav-link text-dark" href="/register">ثبت نام</a>--}}
{{--            </li>--}}
            @guest
                <li class="mx-1 p-lg-0 p-1 my-1 my-lg-0 nav-item active bg-light rounded shadow">
                    <a class="nav-link text-dark" href="/login">ورود</a>
                </li>
            @endguest

            @auth
                <li class="mx-1 p-lg-0 p-1 my-1 my-lg-0 nav-item active bg-primary rounded shadow">
                    <a class="nav-link" href="/my-classes">کلاس های من</a>
                </li>
                <li class="mx-1 p-lg-0 p-1 my-1 my-lg-0 nav-item active bg-danger rounded shadow">
                    <a class="nav-link" href="/logout">خروج</a>
                </li>
            @endauth
        </ul>
    </div>
</nav>
