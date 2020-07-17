@extends('layout')

@section('content')
    <div id="baller" class="overflow-hidden container my-5" data-aos="zoom-in">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-11">
                <img src="{{ asset('img/main.png') }}" class="img-fluid">
            </div>
        </div>
    </div>
    @include('slider')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 d-flex justify-content-center my-3">
                <h5 class="rounded shadow p-2 px-4 bg-light">آخرین مطالب سایت</h5>
            </div>
            @foreach($posts as $post)
                <div class="col-12 rtl my-1 col-lg-4">
                    <x-post-card
                        :post="$post"
                    ></x-post-card>
                </div>
            @endforeach
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6" id="aboutus">
                <img src="{{ asset('img/aboutus.svg') }}" alt="aboutus" class="img-fluid">
                <article class="text-justify rounded shadow p-2 py-3 px-4 bg-light">
                    <h3 class="mb-3 mx-auto text-center">درباره ما</h3>
                    <span>
                        آموزشگاه مجازی به بخشی گفته می‌شود که در آن دوره‌های آموزش مجازی یا آنلاین یا آفلاین ارائه می‌شود. آموزشگاه مجازی موقعیت فیزیکی ندارد و توسط برنامه‌های کامپیوتری ساخته می‌شود. در آموزشگاه مجازی دوره‌های کوتاه مدت برگزار می‌شود. اما در دانشگاه مجازی دانشجویان رشته‌های دانشگاهی را مطالعه می‌کنند.[۱]
آموزشگاه مجازی یکی از بخش‌های آموزش الکترونیکی است. در آموزش الکترونیکی محدودیت‌های زمانی و مکانی دیگر برای معلم (یاد دهنده) و شاگرد (یاد گیرنده) اهمیت ندارد. در این سیستم آموزش هر فردی می‌تواند خود هم یاد دهنده باشد هم یادگیرنده. آموزش الکترونیک یا e-Learning توسط نرم‌افزارهای تحت وب به عنوان مدیریت سیستم آموزشی LMS و سیستم مدیریت محتوای آموزشی LCMS تولید و مدیریت می‌شود. از این موارد می توان به عنوان یک شیوه موفق به آموزش زبان به شیوه آنلاین اشاره داشت. در این روش با پشتیبانی یک راهبر خودآموزی صورت می پذیرد.
                    </span>
                </article>
            </div>
            <div class="col-12 col-lg-6" id="contactus">
                <img src="{{ asset('img/contactus.svg') }}" alt="aboutus" class="img-fluid">
                <article class="text-justify rounded shadow p-2 py-3 px-4 bg-light">
                    <h3 class="mb-3 mx-auto text-center">تماس با ما</h3>
                    <span class="d-block mx-auto my-2 text-center bold">
                        تلفن : 09304343213 - 09197802410
                    </span>
                    <span class="d-block mx-auto my-2 text-center bold">
                        <span>آدرس : </span>
                        <span>خ 17 شهریور جنوبی،مابین مسجد رضوان و حسینیه ی کاشانی ها(حاج بابایی)،پلاک358</span>
                    </span>
                </article>
            </div>
        </div>
    </div>

    @include('our-team')

    <script>
        // Some random colors
        const colors = ["white", "#2AA7FF", "#1B1B1B", "white", "#F85F36"];

        const numBalls = 50;
        const balls = [];

        for (let i = 0; i < numBalls; i++) {
            let ball = document.createElement("div");
            ball.classList.add("ball");
            ball.style.background = colors[Math.floor(Math.random() * colors.length)];
            ball.style.left = `${Math.floor(Math.random() * 100)}vw`;
            ball.style.top = `${Math.floor(Math.random() * 100)}vh`;
            ball.style.transform = `scale(${Math.random()})`;
            ball.style.width = `${Math.random()}em`;
            ball.style.height = ball.style.width;

            balls.push(ball);
            baller.append(ball);
        }

        // Keyframes
        balls.forEach((el, i, ra) => {
            let to = {
                x: Math.random() * (i % 2 === 0 ? -11 : 11),
                y: Math.random() * 12
            };

            let anim = el.animate(
                [
                    {transform: "translate(0, 0)"},
                    {transform: `translate(${to.x}rem, ${to.y}rem)`}
                ],
                {
                    duration: (Math.random() + 1) * 2000, // random duration
                    direction: "alternate",
                    fill: "both",
                    iterations: Infinity,
                    easing: "ease-in-out"
                }
            );
        });

    </script>
@endsection
