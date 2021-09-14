@extends('layouts.layout')

@section('title', 'Login')

@section('content')
    <div class="container">

        @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </div>

        @endif
        <form class="form-horizontal text-center" action="{{ route('user.create') }}" method="POST">
            @csrf
            <fieldset>
                <div id="legend">
                    <legend class="">Register</legend>
                    <hr>
                </div>
                <div class="control-group m-2">
                    <!-- Username -->
                    <label class="control-label"  for="name">Username</label>
                    <div class="controls">
                        <input type="text" id="name" name="name" placeholder="" class="input-xlarge" value="{{ old('name') }}">
                    </div>
                </div>

                <div class="control-group m-2">
                    <!-- E-mail -->
                    <label class="control-label" for="email">E-mail</label>
                    <div class="controls">
                        <input type="email" id="email" name="email" placeholder="" class="input-xlarge" value="{{ old('email') }}">
                    </div>
                </div>

                <div class="control-group m-2">
                    <!-- Password-->
                    <label class="control-label" for="password">Password</label>
                    <div class="controls">
                        <input type="password" id="password" name="password" placeholder="" class="input-xlarge">
                    </div>
                </div>

                <div class="control-group m-2">
                    <!-- Password -->
                    <label class="control-label"  for="password_confirmation">Confirm Password</label>
                    <div class="controls">
                        <input type="password" id="password_confirmation" name="password_confirmation" placeholder="" class="input-xlarge">
                    </div>
                </div>

                <div class="control-group m-2">
                    <!-- Button -->
                    <div class="controls">
                        <button type="submit" class="btn btn-success">Register</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
@endsection
