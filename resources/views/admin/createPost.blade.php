@extends('master')
@section('title', 'Home')

@section('content')

<div id="form"> 
	<form method="post">
	    {{ csrf_field() }}

	    @foreach ($errors->all() as $error)
		    <p>{{ $error }}</p>
		@endforeach

	   <section>
	   		<label id="left">Title</label>
	    	<input id="right" type="text" name="title">
	   </section>
	   <section>
	   		<label id="left">Content</label>
	   		<input name="content" type="text" style="height: 20em; width: 25em;">
	   </section>
	   <section>
	   		<label id="left">Tags</label>
	   		<input name="tags" type="text">
	   </section>
	   <section>
             <button type="submit">
                Submit
            </button>
        </section>

	   </form>

</div>

@endsection