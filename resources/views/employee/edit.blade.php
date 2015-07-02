@extends('app')

@section('title')
Add new category
@endsection
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif


 {!!Form::open(array('route' => array('updateemp', $employee->id),'files' => true,'method' => 'GET','class'=>'form-horizontal')) !!}

	  		 	<div class="form-group">
							<label class="col-md-4 control-label">NOm</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="nom_emp" value="{{ $employee->nom_emp }}">
</div>{{ $errors->first('name') }} </p>
 	 </div>
 	 	 	 	<div class="form-group">
							<label class="col-md-4 control-label">prenom</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="prenom_emp" value="{{ $employee->nom_emp }}">
</div>{{ $errors->first('name') }} </p>
 	 </div>
 			 	<div class="form-group">
							<label class="col-md-4 control-label">Sexe</label>
							<div class="col-md-6">
								<select class="form-control" name="sexe_emp" value="{{ $employee->sexe_emp }}">
									<option> Homme
									</option>
									<option> Femme
									</option>
								</select>
</div>
</div>
 	 


 			 	<div class="form-group">
							<label class="col-md-4 control-label">adresse</label>
							<div class="col-md-6">
								<input type="textarea" class="form-control" name="adresse_emp" value="{{ $employee->adresse_emp }}">
</div>
</div>
		 	<div class="form-group">
							<label class="col-md-4 control-label">tél</label>
							<div class="col-md-6">
								<input type="tel" class="form-control" name="tel_emp" value="{{ $employee->tel_emp }}">
</div>
</div>
<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									modifier Employé
								</button>
							</div>
						</div>
{!! Form::close() !!}
			</div>
			</div>
			</div>
			</div>
@endsection
