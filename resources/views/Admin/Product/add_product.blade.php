@extends('Admin/admin_layout')
@section('content')

<div class="row-fluid sortable">		
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon user"></i><span class="break"></span>Add Product</h2>
		</div>
		<div class="box-content">



		<form action="{{URL::to('/admin-save-product')}}" method="post" enctype="multipart/form-data">
			@csrf

			<div class="control-group">
				<label class="control-label" for="date01">Product Title</label>
				<div class="controls">
					<input type="text" class="input-xlarge" name="title" required>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="date01">Catgory Name</label>
				<div class="controls">
					<select class="input-xlarge" name="categorey_name" required>
						<option value="">Select Categorey</option>
						@if(!empty($all_categories))
						@foreach($all_categories as $categorey)
							<option value="{{$categorey->id}}">{{$categorey->categorey_name}}</option>
						@endforeach
						@endif
					</select>
					<!-- <input type="text" class="input-xlarge" name="categorey_name" required> -->
				</div>
			</div>

			
			<div class="control-group">
				<label class="control-label" for="date01">Thumbnail</label>
				<div class="controls">
					<input type="file" class="input-xlarge" name="thumbnail">
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