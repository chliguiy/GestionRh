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


<form class="form-horizontal" role="form" method="POST" action="storeemp" enctype="multipart/form-data">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

	  		 	<div class="form-group">
							<label class="col-md-4 control-label">NOm</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="nom_emp">
</div>{{ $errors->first('name') }} </p>
 	 </div>
 	 	 	 	<div class="form-group">
							<label class="col-md-4 control-label">prenom</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="prenom_emp">
</div>{{ $errors->first('name') }} </p>
 	 </div>
 			 	<div class="form-group">
							<label class="col-md-4 control-label">Sexe</label>
							<div class="col-md-6">
								<select class="form-control" name="sexe_emp">
									<option> Homme
									</option>
									<option> Femme
									</option>
								</select>
</div>
</div>
 	 
 		 	<div class="form-group">
							<label class="col-md-4 control-label">Date de naissance</label>
							<div class="col-md-6">
								<input type="date" class="form-control" name="date_naiss_emp">
</div>
</div>
 			 	<div class="form-group">
							<label class="col-md-4 control-label">adresse</label>
							<div class="col-md-6">
								<input type="textarea" class="form-control" name="adresse_emp">
</div>
</div>
		 	<div class="form-group">
							<label class="col-md-4 control-label">tél</label>
							<div class="col-md-6">
								<input type="tel" class="form-control" name="tel_emp">
</div>
</div>
	 	<div class="form-group">
							<label class="col-md-4 control-label">Photo</label>
							<div class="col-md-6">
								{!! Form::file('photo_emp') !!}
</div>
</div>
  
	<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									AJOuter Employe
								</button>
							</div>
						</div>
</form>
			</div>
			</div>
			</div>
			</div>
			<!-- Scripts -->
	 <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

@endsection
