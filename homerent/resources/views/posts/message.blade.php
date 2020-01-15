@extends('layouts.app')

@section('content')

<div class="container">
  <h1>create Post</h1>
  {{ Form::open(['action'=>'PostsController@store','method'=>'POST','enctype'=>'multipart/form-data' ]) }}
  <div class="form-row">
    <div class="form-group col-md-6">
      {{Form::label('name','Name')}}
      {{Form::text('name','',['class'=>'form-control','placeholder'=>'Enter your full name'])}}
    </div>
    <div class="form-group col-md-6">
      {{Form::label('mail','You Mail Address')}}
      {{Form::number('mail','',['class'=>'form-control','placeholder'=>'some.one@mail.com'])}}
    </div>

      <div class="form-group col-md-12">
        {{Form::label('message','Complaine')}}
        {{Form::textarea('message','',['class'=>'form-control','placeholder'=>'please warning your Complaine or addvices....'])}}
      </div>

      <div class="form-group">
        <br><br>
        {{Form::submit('Submit',['class'=>'btn btn-primary btn-block'])}}
      </div>
       {{ Form::close() }}
     </div>

     @include('footer.footer')
     <div class="page-footer font-small cyan darken-3">
     @yield('content')
     </div>
     @endsection
