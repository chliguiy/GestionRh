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


<form class="form-horizontal" role="form" method="POST" action="{{route('storeabsence')}}" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

     
{!! Form::select('id_emp', App\employee::lists('nom_emp','id'), null, ['class'=> 'form-control']) !!}
           <div class="form-group">
                            <label class="col-md-4 control-label">type Absence</label>
                            <div class="col-md-6">
                                <select class="form-control" name="type_absence">
                                    <option> maladie
                                    </option>
                                    <option> personnel 
                                    </option>
                                    <option> professionel
                                    </option>
                                </select>
</div>
</div>
            <div class="form-group">
                            <label class="col-md-4 control-label">Date d'absence</label>
                            <div class="col-md-6">
                                <input type="date" class="form-control" name="date_absence">
</div>
</div>

          <div class="form-group">
                            <label class="col-md-4 control-label">Nombre d'heure absence</label>
                            <div class="col-md-6">
                                <input type="number" class="form-control" name="nbr_heure_absence">
</div>
</div>
     
     
<div class="form-group">
                            <label class="col-md-4 control-label">justification</label>
                            <div class="col-md-6">
                                {!! Form::file('justification') !!}
</div>
</div>
  
    <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Ajouter
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