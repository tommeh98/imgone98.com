@extends('master')
@section('title', 'Home')

@section('content')

<div id="form">
    <form role="form" method="POST" action="{{ url('/register') }}">
    {{ csrf_field() }}

    <section>
        <label for="name">Username</label>
        <input id="name" type="text" name="name" value="{{ old('name') }}">

        @if ($errors->has('name'))
            <span>
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
    </section>

    <section>
        <label for="email" class="col-md-4 control-label">E-Mail Address</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}">

        @if ($errors->has('email'))
            <span>
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif

    </section>

    <section>
            <label for="password">Password</label>
            <input id="password" type="password" name="password">

            @if ($errors->has('password'))
                <span>
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif

    </section>

    <section>
        <label for="password-confirm">Confirm Password</label>
        <input id="password-confirm" type="password" name="password_confirmation">

        @if ($errors->has('password_confirmation'))
            <span>
                <strong>{{ $errors->first('password_confirmation') }}</strong>
            </span>
        @endif

    </section>

    <section>
        <button type="submit">
            Register
        </button>
    </section>
</div>
@endsection
