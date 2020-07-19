@extends('layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6 bg-light shadow rounded p-3 my-5">
                <form action="{{ route('login.post') }}" method="post">
                    @csrf
                    <img src="{{ asset('img/login.svg') }}" class="img-fluid mx-auto d-block">
                    <div class="form-group">
                        <label for="">تلفن همراه</label>
                        <input type="text" name="phone" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">رمز عبور</label>
                        <input type="password" name="password" class="form-control">
                    </div>
{{--                    <a href="{{ asset('register') }}" class="btn">ثبت نام</a>--}}
                    <button class="btn btn-primary btn-block">ورود</button>
                </form>
            </div>
        </div>
    </div>
@endsection
