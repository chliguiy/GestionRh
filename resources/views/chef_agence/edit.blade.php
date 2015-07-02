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

 {!!Form::open(array('route' => array('updatechef', $chef->id),'files' => true,'method' => 'GET','class'=>'form-horizontal')) !!}
s
{!! Form::select('id_emp', App\employee::lists('nom_emp','id'), null, ['class'=> 'form-control','style'=>'widht:100px;']) !!}
{!! Form::select('id_bureau', App\bureau::lists('libelle_bureau','id'), null, ['class'=> 'form-control','style'=>'widht:100px;']) !!}
           </br>
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