@extends('master')
@section('title', 'Home')

@section('content')

<div id="form">
    <form role="form" method="POST" action="{{ url('/login') }}">
            {{ csrf_field() }}
        <section>
            <label for="email">E-Mail Address</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}">

            @if ($errors->has('email'))
                <span>
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif 
        </section>
        <section>
            <label for="password">Password</label>
            <input id="password" type="password" class="form-control" name="password">

            @if ($errors->has('password'))
                <span>
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </section>
        <section class="checkbox">
             <label>
                <input type="radio" name="remember"> Remember Me
            </label>

        </section>
        <section>
             <button type="submit">
                <i></i> Login
            </button>
        </section>
        <section id="post">
            <a href="{{ url('/password/reset') }}">Forgot Your Password?</a>
        </section>

        <section id="post">
            <p> If you do not have an account please register <a href="{{ url('/register') }}">here</a></p>
        </section>
    </form>
</div>
@endsection
