@extends('layouts.app')

@section('content')

<div class="container">
  <h1>create Post</h1>
  {{ Form::open(['action'=>'PostsController@store','method'=>'POST','enctype'=>'multipart/form-data' ]) }}
  <div class="form-row">
    <div class="form-group col-md-6">
      {{Form::label('title','Title')}}
      {{Form::text('title','',['class'=>'form-control','placeholder'=>'Title'])}}
    </div>
    <div class="form-group col-md-6">
      {{Form::label('contact','Contact Number')}}
      {{Form::number('contact','',['class'=>'form-control','placeholder'=>'01710000000'])}}
    </div>

      <div class="form-group col-md-6">
        {{Form::label('address','Address')}}
        {{Form::text('address','',['class'=>'form-control','placeholder'=>'Address'])}}
      </div>
      <div class="form-group col-md-6">
        {{Form::label('city','City')}}
        {{Form::text('city','',['class'=>'form-control','placeholder'=>'Dhaka'])}}
      </div>
      <div class="form-group col-md-4">
        {{Form::label('thana','Police Station')}}
        {{Form::text('thana','',['class'=>'form-control','placeholder'=>'Dhaka'])}}
      </div>
      <div class="form-group col-md-4">
        {{Form::label('road','Road')}}
        {{Form::text('road','',['class'=>'form-control','placeholder'=>'23/4motijil'])}}
      </div>
      <div class="form-group col-md-4">
        {{Form::label('cost','Total Cost')}}
        {{Form::number('cost','',['class'=>'form-control','placeholder'=>'5000'])}}
      </div>
      <div class="form-group col-md-4">
            {{Form::label('house_type','House Type')}}
            {{Form::select("house_type",['Family' => 'Family', 'Bacheler Male' => 'Bacheler Male','Bacheler Female' => 'Bacheler Female','Hostal Male' => 'Hostal Male','Hostal Female' => 'Hostal Female'], null,
                     [
                        "class" => "custom-select",
                        "placeholder" => "House Type"
                     ])
                   }}
          </div>
          <div class="form-group col-md-4">
        {{Form::label('month','Require Moth')}}
        {{Form::month('month','',['class'=>'form-control','placeholder'=>'5000'])}}
      </div>

          <div class="form-group col-md-4">
            {{Form::label('seat','Seat')}}
            {{Form::select("seat",['1-seat' => '1-Seat', '2-seat' => '2-Seat','1-Room' => '1-Room','flat' => 'flat'], null,
                     [
                        "class" => "custom-select",
                        "placeholder" => "Seat"
                     ])
                   }}
          </div>
        </div>
          <div class="form-group ">
            {{Form::label('overview','Given overview')}}
            {{Form::textarea('overview','',['class'=>'form-control','row'=>'4', 'placeholder'=>'overview'])}}
          </div>
          <div class="custom-file">
            {{Form::label('image','Upload Image')}}<br>
            {{Form::file("image",
            [
               "class" => "form-control-file border",
            ])
           }}
         </div><br>
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
