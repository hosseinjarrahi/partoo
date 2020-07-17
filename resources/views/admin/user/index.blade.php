@extends('layout')

@section('content')

    <div class="container rtl">

        <div class="container mt-3">
            <div class="row p-3 h-100 justify-content-center align-items-center bg-light rounded">
                <div class="col-12">
                    <form action="{{ route('user.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">نام کاربر</label>
                            <input type="text" class="form-control" name="name">
                        </div>

                        <div class="form-group">
                            <label for="">شماره تلفن</label>
                            <input type="text" class="form-control" name="phone">
                        </div>

                        <div class="form-group">
                            <label for="">رمز</label>
                            <input type="password" class="form-control" name="password">
                        </div>

                        <div class="form-group">
                            <label for="">دسته بندی </label>
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
                        <th> شماره تلفن</th>
                        <th> ویرایش</th>
                        <th> حذف</th>
                    </tr>
                    @foreach($users as $user)
                        <tr>
                            <th>{{ $user->name }}</th>
                            <th>{{ $user->phone }}</th>
                            <th><a class="btn btn-primary" href="{{ route('user.edit',['user' => $user->id]) }}">ویرایش</a></th>
                            <th>
                                <form action="{{ route('user.destroy',['user'=>$user->id]) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger">حذف</button>
                                </form>
                            </th>
                        </tr>
                    @endforeach
                </table>

            </div>
        </div>

    </div>

@endsection
