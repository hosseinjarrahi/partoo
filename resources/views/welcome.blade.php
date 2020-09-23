@extends('layout')

@section('content')
    <div id="baller" class="overflow-hidden container my-5" data-aos="zoom-in">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-11">
                <img src="{{ asset('img/main.png') }}" class="img-fluid">
            </div>
        </div>
    </div>

    {{--    @include('categories',['categories' => $categories])--}}

    @include('slider',['slides' => $slides])


    <div class="container my-5">
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
        @foreach($categories as $category)
            <div class="row  my-5 justify-content-center">
                <div class="col-12 d-flex justify-content-center my-3">
                    <a class="btn mx-1 my-1 btn-light shadow px-5"
                       href="{{ route('category.home',['category' => $category->id]) }}">
                        {{ $category->name }}
                    </a>
                </div>
                @php($posts = $category->posts()->orderByDesc('id')->paginate(3))

                @foreach($posts as $post)
                    <div class="col-12 rtl my-1 col-lg-4">
                        <x-post-card
                            :post="$post"
                        ></x-post-card>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>


    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6" id="aboutus">
                <img src="{{ asset('img/aboutus.svg') }}" alt="aboutus" class="img-fluid">
                <article class="text-justify rounded shadow p-2 py-3 px-4 bg-light">
                    <h3 class="mb-3 mx-auto text-center">درباره ما</h3>
                    <p>آموزشگاه پرتودانش با هدف خدمت رسانی به قشر دانش آموز و تلاش هرچه بیشتر جهت ارتقا فرهنگ ایران
                        عزیزمان شکل گرفته است.</p>
                    <p>این مجموعه در نظر دارد کلاس های تقویتی ، تیزهشان و آمادگی برای کنکور سراسری را به صورت حضوری و
                        غیر حضوری و آنلاین ، توسط معلمین متعهد ، با تجربه و دلسوز برگزار دارد.</p>
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

    {{--    @include('our-team')--}}

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
