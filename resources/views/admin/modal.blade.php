<!-- Large modal -->
@extends('app')

@section('content')
<a  class="btn btn-primary" type="button"  data-toggle="modal" data-target=".bs-example-modal-lg"><b class="glyphicon glyphicon-pencil"></b></a>


<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
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
    </div>
  </div>
</div>
@endsection