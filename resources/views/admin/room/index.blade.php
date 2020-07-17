@extends('layout')

@section('content')

    <div class="container rtl">

        <div class="container mt-3">
            <div class="row p-3 h-100 justify-content-center align-items-center bg-light rounded">
                <div class="col-12">
                    <form action="{{ route('room.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">نام کلاس</label>
                            <input type="text" class="form-control" name="name">
                        </div>

                        <div class="form-group">
                            <label for="">لینک کلاس</label>
                            <input type="text" class="form-control" name="link">
                        </div>

                        <div class="form-group">
                            <label for="">ساعت کلاس</label>
                            <input type="text" class="form-control" name="time">
                        </div>

                        <div class="form-group">
                            <label for="">دسته بندی کلاس</label>
                            <select id="slim" class="form-control" name="categories[]" multiple>
                                @foreach($categories as $c)
                                    <option value="{{ $c->id }}">{{ $c->name }}</option>
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

                <table class="table  table-hover table-striped ">
                    <tr>
                        <th> نام کاربر</th>
                        <th> لینک کلاس</th>
                        <th> ساعت کلاس</th>
                        <th> حذف</th>
                        <th> ویرایش</th>
                    </tr>
                    @foreach($rooms as $room)
                        <tr>
                            <td>{{ $room->name }}</td>
                            <td>{{ $room->link }}</td>
                            <td>{{ $room->time }}</td>
                            <td><a class="btn btn-primary" href="{{ route('room.edit',['room' => $room->id]) }}">ویرایش</a></td>
                            <td>
                                <form action="{{ route('room.destroy',['room' => $room->id]) }}" method="post">
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
