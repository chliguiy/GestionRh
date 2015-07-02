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

 {!!Form::open(array('route' => array('update', $contrat->id),'files' => true,'method' => 'GET','class'=>'form-horizontal')) !!}

     <?php  $id=$contrat->id_emp; 
                                 $employee=App\employee::find($id); ?>
              <div class="form-group">
                            <label class="col-md-4 control-label">Employé</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control"   value="{{$employee->nom_emp}}">
                                <input type="hidden" class="form-control" name="id_emp" value="{{ $id }}">
</div>
</div>


            <div class="form-group">
                            <label class="col-md-4 control-label">Date de début</label>
                            <div class="col-md-6">
                                <input type="date" class="form-control" name="date_debut_travail"  value="{{$contrat->date_debut_travail}}">
</div>
</div>

          <div class="form-group">
                            <label class="col-md-4 control-label">Date de fin</label>
                            <div class="col-md-6">
                                <input type="date" class="form-control" name="date_fin_travail" value="{{ $contrat->date_fin_travail}}">
</div>
</div>
                <div class="form-group">
                            <label class="col-md-4 control-label">type contrat</label>
                            <div class="col-md-6">
                                <select class="form-control" name="type_contrat" valuel="{{ $contrat->type_contrat}}">
                                    <option> CDI
                                    </option>
                                    <option> CDD
                                    </option>
                                    <option> mi-temps
                                    </option>
                                </select>
</div>
</div>
     
  
                <div class="form-group">
                            <label class="col-md-4 control-label">salaire</label>
                            <div class="col-md-6">
                                <input type="number" class="form-control" name="salaire" value="{{ $contrat->salaire}}">
</div>
</div>

  
    <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Modifier contrat

                                </button>
                            </div>
                        </div>
{!! Form::close() !!}
            </div>
            </div>
            </div>
            </div>
            @endsection