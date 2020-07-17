@extends('layout')

@section('content')

    <div class="container rtl">

        <div class="container mt-3">
            <div class="row p-3 h-100 justify-content-center align-items-center bg-light rounded">
                <div class="col-12">
                    <form action="{{ route('category.update',['category'=>$category->id]) }}" method="post">
                        @csrf
                        @method('patch')
                        <div class="form-group">
                            <label for="">نام دسته بندی</label>
                            <input type="text" class="form-control" name="name" value="{{ $category->name }}">
                        </div>

                        <button class="btn btn-primary shadow">ویرایش</button>
                    </form>
                </div>

            </div>
        </div>

        <div class="container mt-3 ">
            <div class="row h-100  justify-content-center align-items-center bg-light rounded">
                <a class="btn btn-light btn-block" href="{{ route('category.index') }}">بازگشت</a>
            </div>
        </div>

    </div>

@endsection
