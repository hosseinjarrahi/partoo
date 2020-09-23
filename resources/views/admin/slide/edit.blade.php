@extends('layout')

@section('content')

    <div class="container rtl">

        <div class="container mt-3">
            <div class="row p-3 h-100 justify-content-center align-items-center bg-light rounded">
                <div class="col-12">
                    <form action="{{ route('slide.update',['slide' => $slide->id]) }}" method="post" enctype="multipart/form-data">
                        @method('put')
                        @csrf


                        <div class="form-group">
                            <label for="">تصویر مطلب</label>
                            <input type="file" class="form-control" name="img">
                        </div>

                        <div class="form-group">
                            <label for="">دسته بندی کلاس</label>
                            <select id="slim" class="form-control" name="category">
                                @foreach($categories as $c)
                                    <option @if($slide->category_id == $c->id ) selected @endif value="{{ $c->id }}">{{ $c->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <button class="btn btn-primary shadow mt-3">ثبت</button>
                    </form>
                </div>

            </div>
        </div>

        <div class="container mt-3 ">
            <div class="row h-100  justify-content-center align-items-center bg-light rounded">
                <a class="btn btn-light btn-block" href="{{ route('slide.index') }}">بازگشت</a>
            </div>
        </div>

    </div>

@endsection
