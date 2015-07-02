@extends('app')
@section('title')
 new category
@endsection
@section('content')
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tables des Chefs d'agences</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
               <p>ajouter chef d'agence</p>             <a  class="btn btn-primary" type="button"  data-toggle="modal" data-target=".bs-example-modal-lg"><b class="glyphicon glyphicon-plus"></b></a>



                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                    	     <tr>
                                            <th>Employeé</th>
                                            <th>Bureau</th>
                                
                                            
                                            <th>Modifier</th>
                                            <th>Supprimer</th>
                                           
                                        </tr>
                                    </thead>
                                    <?php try {
                                        
                                  ?>
                              	@foreach($chef_agence as $emp)
                                <?php  

                                $id=$emp->id_emp; 
                                 $idb=$emp->id_bureau ;
                                 $employee=App\employee::find($id);
                                
                                 $bureau=App\bureau::find($idb); ?>
	<tr > 
		<td>{!!$employee->nom_emp !!}  {!!$employee->prenom_emp !!}</td>
            <td>{!!  $bureau->libelle_bureau !!}</td>
              
    	<td><a href="chef_agence/edit/<?php echo  $emp->id; ?>"><b class="glyphicon glyphicon-pencil"></b></a>
<td>  <a   type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal"><b class="glyphicon glyphicon-trash"></b></td>


</td>
</tr>
@endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                          


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
   Voulez Vous supprimez ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
     <a type="button" class="btn btn-primary"  href="chef_agence/delete/<?php echo  $emp->id; ?>">Supprimer</a>
      </div>
    </div>
  </div>
</div>

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
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


<form class="form-horizontal" role="form" method="POST" action="{{route('storeconge')}}" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

     
{!! Form::select('id_emp', App\employee::lists('nom_emp','id'), null, ['class'=> 'form-control','style'=>'widht:100px;']) !!}
           <div class="form-group">
                            <label class="col-md-4 control-label">type conge</label>
                            <div class="col-md-6">
                                <select class="form-control" name="type_conge">
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
                            <label class="col-md-4 control-label">Date début</label>
                            <div class="col-md-6">
                                <input type="date" class="form-control" name="date_debut_conge">
</div>
</div>

          <div class="form-group">
                            <label class="col-md-4 control-label">date fin</label>
                            <div class="col-md-6">
                                <input type="date" class="form-control" name="date_fin_conge">
</div>
</div>
     

  
    <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    AJOuter congé
                                </button>
                            </div>
                        </div>
</form>
            </div>
            </div>
            </div>
            </div>
 
</div>
    </div>
  </div>
</div>




	
</table>
</div>
<?php }catch (Exception $e) {
    echo $e;
                                
                                    }

	?>
       <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

@endsection
