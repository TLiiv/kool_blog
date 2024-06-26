@extends('partials.layout')
@section('title','Home')
@section('content')
@foreach($posts as $post)
  <div class="card">
    {{-- <figure><img src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" /></figure> --}}
    <div class="card-body">
      <h2 class="card-title">{{$post->title}}</h2>
      <p>{{$post->body}}</p>
    </div>
    <div>
        <a href="{{route('post',[post]=>)}}"></a>
    </div>
  </div>
@endforeach
@endsection
