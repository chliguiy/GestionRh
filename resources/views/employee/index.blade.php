@extends('app')
@section('title')
 new category
@endsection
@section('content')
	


<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="public/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="public/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="public/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="public/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <!-- <link href="../dist/css/sb-admin-2.css" rel="stylesheet"> -->

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tables</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a  class="btn btn-primary" type="button"  data-toggle="modal" data-target=".bs-example-modal-lg"><b class="glyphicon glyphicon-plus"></b></a>



                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                    	     <tr>
                                            <th>Nom</th>
                                            <th>prenom</th>
                                            <th>sexe</td>
                                            <th>date Naissance</th>
                                            <th>adresse</th>
                                            <th>tel</th>
                                            <th>photo</th>
                                            <th>Supprimer</th>
                                            <th>modifier</th>
                                           
                                        </tr>
                                    </thead>
                              	@foreach($employee as $emp)

	<tr id="<?php echo "row_".$emp->id; ?>"> 
		<td>{!!  $emp->nom_emp !!}</td>
            <td>{!!  $emp->prenom_emp !!}</td>
                <td>{!!  $emp->sexe_emp !!}</td>
                    <td>{!!  $emp->date_naiss_emp !!}</td>
                    <td>{!!  $emp->adresse_emp !!}</td>
                    <td>{!!  $emp->tel_emp !!}</td>
                    <td><img  style="width:50px; hiegth:50px;"src="{!!  $emp->photo_emp !!}"/>{!!  $emp->photo_emp !!}</td>
		<td>  <a   type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal"><b class="glyphicon glyphicon-trash"></b></td>
	<td><a href="employee/edit/<?php echo  $emp->id; ?>"><b class="glyphicon glyphicon-pencil"></b></a>


</td>
</tr>
@endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                     
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
           

	
</tr>



<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
   Voulez Vous supprimez cet employé 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
     <a type="button" class="btn btn-primary"  href="employee/delete/<?php echo  $emp->id; ?>">Supprimer</a>
      </div>
    </div>
  </div>
</div>

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
     <div class="container-fluid">
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


<form class="form-horizontal" role="form" method="POST" action="employee/storeemp" enctype="multipart/form-data">
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
                                    Ajouter Employé
                                </button>
                            </div>
                        </div>
</form>
            </div>
            </div>
            </div>
            </div>	</div>
    </div>
  </div>
</div>




	
</table>
</div>

@endsection
