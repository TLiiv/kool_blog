@extends('partials.layout')
@section('title','Home')
@section('content')

  <div class="card">
    {{-- <figure><img src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" /></figure> --}}
    <div class="card-body">
        {{-- <p>{!! nl2br{$post->body} !!}</p> --}}
        <p>{{$post->body}}</p>
      <h2 class="card-title">{{$post->title}}</h2>
      <p>{{$post->body}}</p>
    </div>
  </div>

  @foreach($post->comments as $comment)
  <div class="card">
    <div class="card-body">
        <p>{{$comment->body}}</p>
      <p>{{$comment->user->name}}</p>
      <p><b>Comments: </b> {{$post->comments()->count()}}</p>
    </div>
  </div>
  @endforeach

@endsection
