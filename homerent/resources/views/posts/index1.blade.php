@extends('layouts.app')
@section('content')

<div class="container">
<main role="main">

    <div class="container">
      @if(count($post)>1)
      @forreach($post as $posts)
      <div class="row">
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
            <div class="card-body">
              <p class="card-text"><a href="/post/{{$posts->id}}">{{$posts->title}} </a> </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">Write on:{{$posts->created_at}}</small>
              </div>
            </div>
          </div>
        </div>
        @endforeach

    @else
        <p>No posts fount</p>
    @endif
    </div>


    @include('footer.footer1')
    <div class="page-footer font-small cyan darken-3">
    @yield('content')
    </div>
  </div>





@endsection
