@extends('master')
@section('title', 'Home')

@section('content')

@if ($posts->isEmpty())
    <p> There are no posts for these requirements. </p>
@else
    @if($page == 1)
        @for($i = 0; $i < 10; $i++)
            @if(count($posts) > $i) 
                <div class="post">

                    <h1> <a href="/blog/{{ $posts[$i]->url_title }}"> {{$posts[$i]->title}} </a></h1>

                    <p class="date"> <i> {{ date('F d, Y    g:i:s a', strtotime($posts[$i]->created_at)) }} </i></p>

                   {{-- @if(strlen($posts[$i]->content) >= 500)
                        <p class="content"> {!! closeUnclosedTags(substr($posts[$i]->content, 0, 500) . ' <a href="/blog/$posts[$i]->url_title">[...] </a>') !!}  </p>
                    @else
                        <p class="content"> {!! $posts[$i]->content !!}  </p>
                    @endif --}}

                    @if(strlen($posts[$i]->content) >= 500)
                        <p class="content"> {!! substr($posts[$i]->content, 0, 500) !!} <a href="/blog/{{$posts[$i]->url_title}}">[...] </a></p> 
                    @else
                        <p class="content"> {!! $posts[$i]->content !!}  </p>
                    @endif

                    <p class="tags"> Tags: 
                            {{ generateTags($posts[$i]->tags) }}
                                <br> 
                        </p>
                </div>
            @endif
        @endfor
    @else 
        @for($i = (($page-1)*10); $i < ($page * 10); $i++)
            @if(count($posts) > $i)
                <div class="post">

                    <h1> <a href="/blog/{{ $posts[$i]->url_title }}"> {{$posts[$i]->title}} </a></h1>

                    <p class="date"> <i> {{ date('F d, Y    g:i:s a', strtotime($posts[$i]->created_at)) }} </i></p>

                   {{-- @if(strlen($posts[$i]->content) >= 500)
                        <p class="content"> {!! closeUnclosedTags(substr($posts[$i]->content, 0, 500) . ' <a href="/blog/$posts[$i]->url_title">[...] </a>') !!}  </p>
                    @else
                        <p class="content"> {!! $posts[$i]->content !!}  </p>
                    @endif --}}

                    @if(strlen($posts[$i]->content) >= 500)
                        <p class="content"> {!! substr($posts[$i]->content, 0, 500) !!} <a href="/blog/{{$posts[$i]->url_title}}">[...] </a></p> 
                    @else
                        <p class="content"> {!! $posts[$i]->content !!}  </p>
                    @endif

                    <p class="tags"> Tags: 
                            {{ generateTags($posts[$i]->tags) }}
                                <br> 

                        </p>
                </div>
            @endif
        @endfor
    @endif

    
@endif


@if($page <= 1)
@else
    <div style="float:left; margin-bottom: 5em;"><a href="/{{$page-1}}" style="padding: 1em; font-size: 2em;"> <- Previous Posts</a></div>
@endif

@if(count($posts)+1 >= $page*10)

    <div style="float:right; margin-bottom: 5em;"><a href="/{{$page+1}}" style="padding: 1em; font-size: 2em;">Newer Posts -></a></div>
@endif

@endsection

 <?php

function generateTags($tags) {
    $tagsArray = array();
    $tag = "";
    for($p = 0; $p <= strlen($tags); $p++) {
        if(substr($tags, $p, 1) == ' ') {
            array_push($tagsArray, $tag);
            $tag = "";
        } else {
            $tag .= substr($tags, $p, 1);
        }

    }
    array_push($tagsArray, $tag);

    foreach ($tagsArray as $tag) {
        echo "<a href='/archive/tags/" . $tag  . "'>" . $tag . '</a> ';
    }
}
?> 