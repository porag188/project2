@extends('layouts.app')
@section('content')
<div class="container">
  <a href="/post">
    <button  >Go Back</button>
  </a>
<div class="container">

      <h1>{{$post->title}}</h1
        <div class="">
          {{$post->cost}}
              <img src="{{asset('upload/picture')}}/{{$post->image}}"  style="width: 100%; height: 100%;float: left;margin-right: 25px;">
          <small>Written on {{$post->created_at}}</small>
        </div>
        <hr>
        <hr>
        <a href="/post/{{$post->id}}/edit" class="btn btn-secondary my-2">Edit</a>

        {{Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'POST','class'=>'pull-right'])}}
          {{Form::hidden('_method','DELETE')}}
          {{Form::submit('delete',['class'=>'btn btn-danger'])}}
        {{Form::close()}}

        @include('footer.footer')
        <div class="page-footer font-small cyan darken-3">
        @yield('content')
        </div>

</div>


@endsection
