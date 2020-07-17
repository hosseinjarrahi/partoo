@extends('layout')

@section('content')

    <div class="container rtl">

        <div class="container mt-3">
            <div class="row p-3 h-100 justify-content-center align-items-center bg-light rounded">
                <div class="col-12">
                    <form action="{{ route('user.update',['user'=>$user->id]) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="">نام کاربر</label>
                            <input type="text" class="form-control" name="name" value="{{ $user->name }}">
                        </div>

                        <div class="form-group">
                            <label for="">شماره تلفن</label>
                            <input type="text" class="form-control" name="phone" value="{{ $user->phone }}">
                        </div>

                        <div class="form-group">
                            <label for="">رمز ( درصورتی که نمیخواهید رمز تغییر کند این فیلد را رها کنید )</label>
                            <input type="password" class="form-control" name="password">
                        </div>

                        <div class="form-group">
                            <label for="">دسته بندی </label>
                            <select id="slim" class="form-control" name="categories[]" multiple>
                                @foreach($categories as $c)
                                    <option @if(!$user->categories->where('id',$c->id)->isEmpty()) selected  @endif value="{{ $c->id }}">{{ $c->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <button class="btn btn-primary shadow">ویرایش</button>
                    </form>
                </div>

            </div>
        </div>

        <div class="container mt-3 ">
            <div class="row h-100  justify-content-center align-items-center bg-light rounded">
                <a class="btn btn-light btn-block" href="{{ route('user.index') }}">بازگشت</a>
            </div>
        </div>

    </div>

@endsection
