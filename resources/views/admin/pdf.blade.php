@extends('app')
@section('title')
 new category
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

{!!Form::open(array('route' => array('pdf'),'files' => true,'method' => 'GET','class'=>'form-horizontal')) !!}

{!! Form::select('id_emp', App\employee::lists('nom_emp','id'), null, ['class'=> 'form-control']) !!}
</br>
         <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Rechercher 
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