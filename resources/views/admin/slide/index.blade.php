@extends('layout')

@section('content')

    <div class="container rtl">

        <div class="container mt-3">
            <div class="row p-3 h-100 justify-content-center align-items-center bg-light rounded">
                <div class="col-12">
                    <form action="{{ route('slide.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="">تصویر مطلب</label>
                            <input type="file" class="form-control" name="img">
                        </div>

                        <div class="form-group">
                            <label for="">دسته بندی کلاس</label>
                            <select id="slim" class="form-control" name="category">
                                @foreach($categories as $c)
                                    <option value="{{ $c->id }}">{{ $c->name }}</option>
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

                <table class="table  table-hover table-striped ">
                    <tr>
                        <th>اسلاید</th>
                        <th> حذف</th>
{{--                        <th> ویرایش</th>--}}
                    </tr>
                    @foreach($slides as $slide)
                        <tr>
                            <td ><img style="height: 100px;" src="{{ $slide->pic }}" class="img-fluid"></td>
{{--                            <td><a class="btn btn-primary" href="{{ route('slide.edit',['slide' => $slide->id]) }}">ویرایش</a></td>--}}
                            <td>
                                <form action="{{ route('slide.destroy',['slide' => $slide->id]) }}" method="post">
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
