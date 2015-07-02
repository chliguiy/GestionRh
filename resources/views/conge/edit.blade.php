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

 {!!Form::open(array('route' => array('updateconge', $conge->id),'files' => true,'method' => 'GET','class'=>'form-horizontal')) !!}

     <?php  $id=$conge->id_emp; 
                                 $employee=App\employee::find($id); ?>
              <div class="form-group">
                            <label class="col-md-4 control-label">Employé</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control"   value="{{$employee->nom_emp}}">
                                <input type="hidden" class="form-control" name="id_emp" value="{{ $id }}">
</div>
</div>

 <div class="form-group">
                            <label class="col-md-4 control-label">type conge</label>
                            <div class="col-md-6">
                                <select class="form-control" name="type_conge" value="{{$conge->type_conge}}">
                                    <option> annuel
                                    </option>
                                  
                                    <option> personnel 
                                    </option>
                                    <option> professionel
                                    </option>
                                </select>
</div>
</div>
            <div class="form-group">
                            <label class="col-md-4 control-label">Date debut</label>
                            <div class="col-md-6">
                                <input type="date" class="form-control" name="date_debut_conge" value="{{ $conge->date_debut_conge}}">
</div>
</div>

              <div class="form-group">
                            <label class="col-md-4 control-label">Date fin</label>
                            <div class="col-md-6">
                                <input type="date" class="form-control" name="date_fin_conge" value="{{ $conge->date_fin_conge}}">
</div>
</div>
     

    <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    modifier conge
                                </button>
                            </div>
                        </div>

        {!! Form::close() !!}
            </div>
            </div>
            </div>
            </div>
            @endsection