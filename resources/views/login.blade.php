{{-- @extends('master')
@section('contant')
<div class="container custom-login">
    <div class="row">
        <div class=" col-sm-4  col-sm-offset-4 ">
            <form action="/login" method="POST">
                @csrf
                {{-- <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" value="{{ old('email') }}">
                        <span class="text-danger">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </span>
                    </div> --}}
{{-- <div class="form-group">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                            value="{{ old('email') }}">
                        <span class="text-danger">
                            @error('password')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1" class="form-label">Confirmed_password</label>
                        <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1">
                        <span class="text-danger">
                            @error('password_confirmation')
                                {{ $message }}
                            @enderror
                        </span>
                    </div> --}}
{{-- <x-input>

    <button type="submit" class="btn btn-primary">login</button>
    </form>
    </div>
    </div>
    </div>
@endsection --}}
@extends('master')
@section('contant')
    <div class="contant">
        <a href="{{ '/regester' }}">
            <button type="submit" class="btn btn-danger">add</button>
        </a>
        <form action="/login" method="POST">
            @csrf

            <x-input type="text" name="name" label="Enter your  name" />
            <x-input type="email" name="email" label="Enter your email" />
            <x-input type="password" name="password" label="Enter your password" />
            <x-input type="password" name="password_confirmation" label="Enter your password_confirmation" />
            <x-input type="text" name="gender" label="Enter your gender" />
            <x-input type="date" name="date_of_birth" label="Enter your date_of_birth" />
            <x-input type="text" name="address" label="Enter your Address" />
            <button type="submit" class="btn btn-primary">login</button>
    </div>
@endsection
