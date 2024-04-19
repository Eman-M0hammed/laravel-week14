@extends('templateLayout')

@section("title")
<title>create user</title>
@endsection

@section("main")
<h1>Create User</h1>
<form method="post" action="/users">
    @csrf()

   @include("includes.input")
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror"
            id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old('email') }}">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>

        @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1"
            value="{{ old('password') }}">
        @error('password')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label d-block">Gender</label>
        <input type="radio" name="gender" id="" value="female"
            @if (old('gender') == 'female') checked @endif> female
        <input type="radio" name="gender" id="" value="male" @checked(old('gender') == 'male')> male
        <input type="radio" name="gender" id="" value="other" @checked(old('gender') == 'other')> other
        @error('gender')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

{{-- @if ($errors->any())

    @foreach ($errors->all() as $error)
        <p>{{ $error }}</p>
    @endforeach

@endif --}}

@endsection

@section("script")
<script></script>
@endsection

