@extends('layout')

@section('content')
    <div class="container mt-5">
        <div class="row px-2 flex-lg-row flex-column-reverse">

            <div class="container rtl my-5">
                <div class="row justify-content-center">
                    <div class="rounded col-12 col-md-6">
                        <table class="text-center rounded table table-striped table-light"
                               style="box-shadow: 0px 0px 20px #ece9e6">

                            <tr class="bg-heade-table">
                                <th>نام کلاس</th>
                                <th>ساعت شروع کلاس</th>
                                <th>لینک ورود</th>
                            </tr>
                            @forelse($rooms as $room)
                                <tr>
                                    <th>{{ $room->name }}</th>
                                    <th>{{ $room->time }}</th>
                                    <th><a class="btn btn-outline-dark btn-block" href="{{ $room->link }}">ورود</a></th>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3">شما تا کنون عضو کلاسی نشده اید.</td>
                                </tr>
                            @endforelse
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
