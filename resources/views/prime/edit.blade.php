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

 {!!Form::open(array('route' => array('updateprime', $prime->id),'files' => true,'method' => 'GET','class'=>'form-horizontal')) !!}

     <?php  $id=$prime->id_emp; 
                                 $employee=App\employee::find($id); ?>
              <div class="form-group">
                            <label class="col-md-4 control-label">Employeé</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control"   value="{{$employee->nom_emp}}">
                                <input type="hidden" class="form-control" name="id_emp" value="{{ $id }}">
</div>
</div>

 <div class="form-group">
                            <label class="col-md-4 control-label">libelle  de prime </label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="libelle_prime" value="{{ $prime->libelle_prime}}">
</div>
</div>
            <div class="form-group">
                            <label class="col-md-4 control-label">Date prime</label>
                            <div class="col-md-6">
                                <input type="date" class="form-control" name="date_prime" value="{{ $prime->date_prime}}">
</div>
</div>
         <div class="form-group">
                            <label class="col-md-4 control-label">type prime</label>
                            <div class="col-md-6">
                                <select class="form-control" name="type_prime" value="{{ $prime->type_prime}}">
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
                                <input type="number" class="form-control" name="montant_prime" value="{{ $prime->montant_prime}}">
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