@extends('layout')

@section('content')

    <div class="container rtl">

        <div class="container mt-3">
            <div class="row p-3 h-100 justify-content-center align-items-center bg-light rounded">
                <div class="col-12">
                    <form action="{{ route('room.update',['room'=>$room->id]) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="">نام کلاس</label>
                            <input type="text" class="form-control" name="name" value="{{ $room->name }}">
                        </div>

                        <div class="form-group">
                            <label for="">لینک کلاس</label>
                            <input type="text" class="form-control" name="link" value="{{ $room->link }}">
                        </div>

                        <div class="form-group">
                            <label for="">ساعت کلاس</label>
                            <input type="text" class="form-control" name="time" value="{{ $room->time }}">
                        </div>

                        <div class="form-group">
                            <label for="">دسته بندی کلاس</label>
                            <select id="slim" class="form-control" name="categories[]" multiple>
                                @foreach($categories as $c)
                                    <option @if(!$room->categories->where('id',$c->id)->isEmpty()) selected @endif value="{{ $c->id }}">{{ $c->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <button class="btn btn-primary shadow">ثبت</button>
                    </form>
                </div>

            </div>
        </div>

        <div class="container mt-3 ">
            <div class="row h-100  justify-content-center align-items-center bg-light rounded">
                <a class="btn btn-light btn-block" href="{{ route('room.index') }}">بازگشت</a>
            </div>
        </div>

    </div>

@endsection
