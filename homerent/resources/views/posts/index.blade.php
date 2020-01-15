@extends('layouts.app')

@section('content')

<div class="container">
  <h1>Post all messages</h1>
  <div class="row">
    @if(count($post) >1)
            @foreach($post as $posts)

            <div class="col-lg-4 col-md-6 col-xs-12">
              <div class="radius-mask tour-block hover-aqua">
                <div class="post-images">
                    <img src="{{asset('upload/picture')}}/{{$posts->image}}"  style="width: 100%; height: 100%;float: left;margin-right: 25px;">
                    <h3> {{$posts->title}}</a> </h3>
                    <p>{{$posts->house_type}}</p>
                    <small>Cost: {{$posts->cost}}TK</small>
                    <small >Post Time: {{$posts->created_at}}</small><br>
                    <a href="/post/{{$posts->id}}"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                </div>

              <div class="col-md-8">
                <div class="text-center">

                  <br><br><br>
                </div>
              </div>
            </div>
          </div>
            @endforeach

    @else
        <p>No posts fount</p>
    @endif
    </div>
    @include('footer.footer')
    <div class="page-footer font-small cyan darken-3">
    @yield('content')
</div>
@endsection
