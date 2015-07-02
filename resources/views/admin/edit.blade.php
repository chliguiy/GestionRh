@extends('app')

@section('title')
Add new category
@endsection
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
		

{!!Form::open(array('route' => array('update', $category->id),'files' => true,'method' => 'GET')) !!}
	 <div class="form-group">
 	 	 {!! Form::label('name', 'name') !!}
 	 	 {!! Form::text('name', Input::old('name'), array('class' => 'form-control')) !!}
 	 	 	<p> {!! $errors->first('name') !!} </p>
 	 </div>
 	
  
	{!! Form::submit('modifier', array('class' => 'btn btn-primary')) !!}

{!! Form::close() !!}
			</div>
			</div>
			</div>
			</div>
@endsection
