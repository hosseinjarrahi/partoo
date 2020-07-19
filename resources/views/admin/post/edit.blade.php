@extends('layout')

@section('head')
    @trixassets
@endsection

@section('content')

    <div class="container rtl">

        <div class="container mt-3">
            <div class="row p-3 h-100 justify-content-center align-items-center bg-light rounded">
                <div class="col-12">
                    <form action="{{ route('post.update',['post' => $post->id]) }}" method="post" enctype="multipart/form-data">
                        @method('put')
                        @csrf

                        <div class="form-group">
                            <label for="">عنوان مطلب</label>
                            <input type="text" class="form-control" name="title" value="{{ $post->title ?? '' }}">
                        </div>

                        <div class="form-group">
                            <label for="">تصویر مطلب</label>
                            <input type="file" class="form-control" name="img">
                        </div>

                        <div class="form-group">
                            <label for="">توضیحات کوتاه</label>
                            <textarea class="form-control" name="short_desc">{{ $post->short_desc ?? '' }}</textarea>
                        </div>

                        ادامه مطلب:

                        {!! $post->trix('content') !!}

                        <button class="btn btn-primary shadow mt-3">ثبت</button>
                    </form>
                </div>

            </div>
        </div>

        <div class="container mt-3 ">
            <div class="row h-100  justify-content-center align-items-center bg-light rounded">
                <a class="btn btn-light btn-block" href="{{ route('post.index') }}">بازگشت</a>
            </div>
        </div>

    </div>

@endsection
