@extends('master')
@section('title')
	 <?PHP echo $post->title;?>
@stop
@section('content')

<div class="post">
	<h1> <a href="{!! action('PostController@show', $post->title) !!}"> {!! $post->title !!} </a> </h1>
    <p class="date"> <i> {{ date('F d, Y    g:i:s a', strtotime($post->created_at)) }} </i></p>
    <p class="content"> {!! $post->content !!} </p>
    <a href="https://www.facebook.com/sharer/sharer.php?u=http://www.tomwalker.com/blog/{{ $post->url_title }}"> <img style="width: 4em; height: 4em;" src="/facebook.png"></img> </a>
    <a href="https://twitter.com/home?status={{$post->title}}  http://wwww.tomwalker.com/blog/{{$post->url_title}}"> <img style="width: 4em; height: 4em;" src="/twitter.png"></img></a>
    <a href="https://www.linkedin.com/shareArticle?mini=true&url=http://www.tomwalker.com/blog/{{$post->url_title}}&title={{$post->title}}&summary=&source="> <img style="width: 4em; height: 4em;" src="/linkedin.png"></img></a>
    <a href="https://plus.google.com/share?url=http://www.tomwalker.com/blog/{{$post->url_title}}"> <img style="width: 4em; height: 4em;" src="/google_plus.png""></img></a>
</div>

<div id="disqus_thread"></div>
<script>
    /**
     *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
     *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables
     */
    /*
    var disqus_config = function () {
        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    */
    (function() {  // DON'T EDIT BELOW THIS LINE
        var d = document, s = d.createElement('script');
        
        s.src = '//tomwalker.disqus.com/embed.js';
        
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>


@endsection