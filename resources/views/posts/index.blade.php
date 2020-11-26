@extends('layouts.app')


@section('content')
   @foreach ($posts as $post)
       <p>{{ $post->content }}</p>
       <br>

       <div class="d-flex align-items" id="form-js">
        <div id="count-js">{{ $post->likes()->count() }} Like(s)</div>

        <form action="{{ route('post.likes') }}">
 
          <input type="hidden" id="post-id-js" value="{{ $post->id }}">
          <button type="submit" class="btn btn-link btn-sm">j'aime</button>
        </form>
       </div>
       
       
   @endforeach
@endsection