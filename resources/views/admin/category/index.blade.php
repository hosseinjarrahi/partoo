@extends('layout')

@section('content')

    <div class="container rtl">

        <div class="container mt-3">
            <div class="row p-3 h-100 justify-content-center align-items-center bg-light rounded">
                <div class="col-12">
                    <form action="{{ route('category.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">نام دسته بندی</label>
                            <input type="text" class="form-control" name="name">
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
                        <th> نام دسته بندی</th>
                        <th> ویرایش</th>
                        <th> حذف</th>
                    </tr>
                    @foreach($categories as $category)
                        <tr>
                            <td class="w-100">{{ $category->name }}</td>
                            <td><a class="btn btn-info" href="{{ route('category.edit',['category'=>$category->id]) }}">ویرایش</a></td>
                            <td>
                                <form action="{{ route('category.destroy',['category' => $category->id]) }}" method="post">
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
