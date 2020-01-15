@extends('layouts.app')

@section('content')

<div class="container">
  <h1>create Post</h1>
  {{ Form::open(['action'=>['PostsController@update',$post->id],'method'=>'POST']) }}
  <div class="form-row">
  <div class="form-group col-md-6">
    {{Form::label('title','Title')}}
    {{Form::text('title',$post->title,['class'=>'form-control','placeholder'=>'Title'])}}
  </div>
  <div class="form-group col-md-6">
    {{Form::label('cantact','Contact Number')}}
    {{Form::number('contact',$post->contact,['class'=>'form-control','placeholder'=>'Body text'])}}
  </div>
   <div class="form-group col-md-6">
    {{Form::label('address','Address')}}
    {{Form::text('address',$post->address,['class'=>'form-control','placeholder'=>'Title'])}}
  </div>
  <div class="form-group col-md-6">
    {{Form::label('city','Police Station')}}
    {{Form::text('city',$post->city,['class'=>'form-control','placeholder'=>'Body text'])}}
  </div>
  <div class="form-group col-md-4">
        {{Form::label('thana','Police Station')}}
        {{Form::text('thana',$post->thana,['class'=>'form-control','placeholder'=>'Dhaka'])}}
      </div>
      <div class="form-group col-md-4">
        {{Form::label('road','Road')}}
        {{Form::text('road',$post->road,['class'=>'form-control','placeholder'=>'23/4motijil'])}}
      </div>
      <div class="form-group col-md-4">
        {{Form::label('cost','Total Cost')}}
        {{Form::number('cost',$post->cost,['class'=>'form-control','placeholder'=>'5000'])}}
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
        {{Form::month('month',$post->month,['class'=>'form-control','placeholder'=>'5000'])}}
      </div>

          <div class="form-group col-md-4">
            {{Form::label('seat','Seat')}}
            {{Form::select("seat",['1' => '1-Seat', '2' => '2-Seat','1-Room' => '1-Room'], null,
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
         </div>
  

  <div class="form-group">
   <br><br>
   {{Form::hidden('_method','PUT')}}
   {{Form::submit('Submit',['class'=>'btn btn-primary btn-block'])}}
 </div>
</div>
  {{ Form::close() }}
  @include('footer.footer')
  <div class="page-footer font-small cyan darken-3">
  @yield('content')
  </div>

</div>
@endsection
