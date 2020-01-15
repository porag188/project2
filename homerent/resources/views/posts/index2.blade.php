@extends('layouts.app')

@section('content')

<div class="container">
  <h1>Post all messages</h1>
    @if(count($post) >1)
            @foreach($post as $posts)
            <div class="col-md-4">
            <h3><a href="/post/{{$posts->id}}"> {{$posts->title}}</a> </h3>
            <div class="col-md-8">
              <div class="text-center">
                    <small>police {{$posts->thana}}</small>
                <img src="{{asset('upload/picture')}}/{{$posts->image}}"  style="width: 150px; height: 150px;float: left;margin-right: 25px;"><br><br><br> <br><br>
                <br><br><br>
              </div>
              <small>Writen on {{$posts->created_at}}</small>
            </div>
            @endforeach

    @else
        <p>No posts fount</p>
    @endif
    @include('footer.footer')
    <div class="page-footer font-small cyan darken-3">
    @yield('content')
</div>
@endsection
