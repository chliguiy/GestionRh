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

 {!!Form::open(array('route' => array('updateabsence', $absence->id),'files' => true,'method' => 'GET','class'=>'form-horizontal')) !!}

     <?php  $id=$absence->id_emp; 
                                 $employee=App\employee::find($id); ?>
              <div class="form-group">
                            <label class="col-md-4 control-label">employé</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control"   value="{{$employee->nom_emp}}">
                                <input type="hidden" class="form-control" name="id_emp" value="{{ $id }}">
</div>
</div>

 <div class="form-group">
                            <label class="col-md-4 control-label">type Absence</label>
                            <div class="col-md-6">
                                <select class="form-control" name="type_absence" value="{{$absence->type_absence}}">
                                    <option> annuel
                                    </option>
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
                                <input type="date" class="form-control" name="date_absence" value="{{ $absence->date_absence}}">
</div>
</div>

          <div class="form-group">
                            <label class="col-md-4 control-label">Nombre d'heure absence</label>
                            <div class="col-md-6">
                                <input type="number" class="form-control" name="nbr_heure_absence" value="{{ $absence->nbr_heure_absence}}">
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
                                    modifier absence
                                </button>
                            </div>
                        </div>

        {!! Form::close() !!}
            </div>
            </div>
            </div>
            </div>
            @endsection