
@extends("templateLayout")


@section("main")
    {{-- Session::has("success") => true false --}}
    @if(Session::has("success"))
        <div class="alert alert-success">{{Session::get("success")}}</div>
    @endif
    <h1>All Users</h1>

    <img src="{{asset("images/image.jpg")}}" alt="" class="image">

    @if (isset($users))
        <table border=1>
            <thead>
                <th>index</th>
                <th>id</th>
                <th>name</th>
                <th>email</th>
                <th>password</th>
            </thead>

            <tbody>
                @php
                    $index = 0;
                @endphp

                @foreach ($users as $user)
                    <tr @class(['odd' => $loop->odd, 'active'])>
                        {{-- <tr class="@if ($loop->odd) odd @endif"> --}}
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->password }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{-- {{$users->links()}} --}}

        <div>
            @if($users->onFirstPage())
            <span>Previous</span>
            @else
            <a href="{{$users->previousPageUrl()}}">Previous</a>
            @endif
            @if($users->onLastPage())
            <span>next</span>
            @else
            <a href="{{$users->nextPageUrl()}}">next</a>
            @endif



        </div>


    @else
        not found data
    @endif

    @php

    @endphp
    {{-- @isset($users)
        <table border=1>
            <thead>
                <th>index</th>
                <th>name</th>
                <th>email</th>
                <th>password</th>
            </thead>

            <tbody>
                @php
                    $index = 0;
                @endphp

                @foreach ($users as $user)
                    <tr @class(['odd' => $loop->odd, 'active'])> --}}
                        {{-- <tr class="@if ($loop->odd) odd @endif"> --}}
                        {{-- <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->password }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endisset --}}


    {{--
        @foreach ($users as $user)

        <div style="border:1px solid black; width: 600px; margin-bottom: 20px">
            <h1>username: {{$user->name}}/h1>
                <p>email: {{$user->email}}</p>
        </div>

        @endforeach --}}

    {{-- comment --}}
    <!-- comment -->

@endsection
