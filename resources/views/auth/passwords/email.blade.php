@extends('master')
@section('title', 'Home')

@section('content')

<div id="form">
    <form role="form" method="POST" action="{{ url('/password/email') }}">
        {{ csrf_field() }}

         <label for="email">E-Mail Address</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}">

        @if ($errors->has('email'))
            <span>
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif

         <button type="submit">
            <i></i> Send Password Reset Link
        </button>


    </form>
</div>
@endsection
