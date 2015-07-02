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

 {!!Form::open(array('route' => array('updatebureau', $employeb->id),'files' => true,'method' => 'GET','class'=>'form-horizontal')) !!}

     <?php  $id=$employeb->id_emp; 
                                 $employee=App\employee::find($id); ?>
              <div class="form-group">
                            <label class="col-md-4 control-label">Employeé</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control"   value="{{$employee->nom_emp}}">
                                <input type="hidden" class="form-control" name="id_emp" value="{{ $id }}">
</div>
</div>

 {!! Form::select('id_bureau', App\bureau::lists('libelle_bureau','id'), null, ['class'=> 'form-control','style'=>'widht:100px;']) !!}

            <div class="form-group">
                            <label class="col-md-4 control-label">fonctionalité</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="fonctionalite" value="{{ $employeb->fonctionalite}}">
</div>
</div>
         <div class="form-group">
                            <label class="col-md-4 control-label">echelle</label>
                            <div class="col-md-6">
               
                                <input type="number" class="form-control" name="echelle" value="{{ $employeb->echelle}}">
</div>
</div>
     

  
    <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    modifier 
                                </button>
                            </div>
                        </div>

        {!! Form::close() !!}
            </div>
            </div>
            </div>
            </div>
            @endsection