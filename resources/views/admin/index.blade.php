@extends('app')
@section('title')
 new category
@endsection
@section('content')
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js" >
</script>
<script>
	

	function delete_pizza(pizza_id)
		{
			var result = confirm('are you sure ?');
			if(result == true)
				{
					$.ajax({
						type : 'GET',
						url  : '/admin/delete',
						data : {'id': category_id},
                        success: function(data)
							{
								if(data.response == 'the selected category was successfuly deleted')
									{
									$("#row_"+category_id).fadeOut(2000, function(){
									$("#row_"+category_id).remove(); });	
									}
								else
									{
										alert("category could not be deleted");
									}
								
							},
						failure: function()
							{
								alert(" cate not connect to the delete action");
							}
					});
				}
			
			
		}
</script>
<link href="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
<link href="../bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

	
</tr>

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
     <div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
		

{!!Form::open(array('route' => array('update', $category->id),'files' => true,'method' => 'GET')) !!}
	 <div class="form-group">
 	 	 {!! Form::label('name', 'name') !!}
 	 	 {!! Form::text('name', Input::old('name'), array('class' => 'form-control')) !!}
 	 	 	<p> {!! $errors->first('name') !!} </p>
 	 </div>
 	
  
	{!! Form::submit('modifier', array('class' => 'btn btn-primary')) !!}

{!! Form::close() !!}
			</div>
			</div>
			</div>
			</div>
    </div>
  </div>
</div>




	
</table>
</div>

	
@endsection
