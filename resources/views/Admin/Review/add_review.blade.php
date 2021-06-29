@extends('Admin/admin_layout')
@section('content')

<div class="row-fluid sortable">		
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon user"></i><span class="break"></span>Add Review</h2>
		</div>
		<div class="box-content">



		<form action="{{URL::to('/admin-save-review')}}" method="post" enctype="multipart/form-data">
			@csrf


			<div class="control-group">
				<label class="control-label" for="date01">Review Image</label>
				<div class="controls">
					<input type="file" class="input-xlarge" name="review_image" required>
				</div>
			</div>

			

            <div class="control-group">
				<label class="control-label" for="date01">Publication Status</label>
				<div class="controls">
					<input type="checkbox" class="input-xlarge" name="publication_status" value="1" required>
				</div>
			</div>

			
			<div class="control-group">
				<div class="controls">
					<input type="submit" class="input-xlarge btn btn-primary" name="member_name" value="Save" >
				</div>
			</div>
		</form>	
		</div>
	</div><!--/span-->
			
</div><!--/row-->



@endsection