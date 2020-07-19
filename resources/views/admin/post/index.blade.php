@extends('layout')

@section('head')
    @trixassets
@endsection

@section('content')

    <div class="container rtl">

        <div class="container mt-3">
            <div class="row p-3 h-100 justify-content-center align-items-center bg-light rounded">
                <div class="col-12">
                    <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="">عنوان مطلب</label>
                            <input type="text" class="form-control" name="title">
                        </div>

                        <div class="form-group">
                            <label for="">تصویر مطلب</label>
                            <input type="file" class="form-control" name="img">
                        </div>

                        <div class="form-group">
                            <label for="">توضیحات کوتاه</label>
                            <textarea class="form-control" name="short_desc"></textarea>
                        </div>

                        ادامه مطلب:

                        @trix(\App\Post::class, 'content')

                        <button class="btn btn-primary shadow mt-3">ثبت</button>
                    </form>
                </div>

            </div>
        </div>

        <div class="container mt-3 ">
            <div class="row h-100  justify-content-center align-items-center bg-light rounded">

                <table class="table  table-hover table-striped ">
                    <tr>
                        <th> عنوان مطلب</th>
                        <th> حذف</th>
                        <th> ویرایش</th>
                    </tr>
                    @foreach($posts as $post)
                        <tr>
                            <td>{{ $post->title }}</td>
                            <td><a class="btn btn-primary" href="{{ route('post.edit',['post' => $post->id]) }}">ویرایش</a></td>
                            <td>
                                <form action="{{ route('post.destroy',['post' => $post->id]) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger">حذف</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>

            </div>
        </div>

    </div>

@endsection
