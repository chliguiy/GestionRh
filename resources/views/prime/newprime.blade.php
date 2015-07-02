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


<form class="form-horizontal" role="form" method="POST" action="{{route('storeprime')}}" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

     
{!! Form::select('id_emp', App\employee::lists('nom_emp','id'), null, ['class'=> 'form-control','style'=>'widht:100px;']) !!}
  
         <div class="form-group">
                            <label class="col-md-4 control-label">libelle  de prime </label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="libelle_prime">
</div>
</div>
            <div class="form-group">
                            <label class="col-md-4 control-label">Date prime</label>
                            <div class="col-md-6">
                                <input type="date" class="form-control" name="date_prime">
</div>
</div>
         <div class="form-group">
                            <label class="col-md-4 control-label">type prime</label>
                            <div class="col-md-6">
                                <select class="form-control" name="type_prime">
                                    <option> annuel
                                    </option>
                                    <option> mansuel
                                    </option>
                                    <option> ancienneté
                                    </option>
                                </select>
</div>
</div>
          <div class="form-group">
                            <label class="col-md-4 control-label">montant de prime </label>
                            <div class="col-md-6">
                                <input type="number" class="form-control" name="montant_prime">
</div>
</div>
     

  
    <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    AJOuter prime
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