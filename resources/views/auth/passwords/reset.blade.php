@extends('master')
@section('title', 'Home')

@section('content')

<div id="form">
    <form role="form" method="POST" action="{{ url('/password/reset') }}">
        {{ csrf_field() }}

        <input type="hidden" name="token" value="{{ $token }}">

        <label for="email">E-Mail Address</label>

        <input id="email" type="email" name="email" value="{{ $email or old('email') }}">

        @if ($errors->has('email'))
            <span>
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif

        <label for="password">Password</label>
        <input id="password" type="password" name="password">

        @if ($errors->has('password'))
            <span>
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif



         <label for="password-confirm">Confirm Password</label>
        <input id="password-confirm" type="password" name="password_confirmation">

        @if ($errors->has('password_confirmation'))
            <span>
                <strong>{{ $errors->first('password_confirmation') }}</strong>
            </span>
        @endif

        <button type="submit">
             Reset Password
        </button>

    </form>
</div>
@endsection
