@extends("App/app_layout")
@section("content")

	<div class="container-fluid">
		<div class="row-fluid" style="background-image: url('../images/categoreyThumbnail/{{$select_categorey->thumbnail}}');background-color: rgba(255, 255, 255, 0);
		    background-position: center center ;
		    background-repeat: no-repeat;
		    background-blend-mode: overlay;
		    border-width: 0px;
		    border-color: rgb(234, 233, 233);
		    border-style: solid;
		    background-size: cover;
		    padding-top: 190px;
		    margin-top: 0px;
		    padding-right: 30px;
		    padding-bottom: 150px;
		    margin-bottom: 50px;
		    padding-left: 30px;
		    background-color: rgba(0, 0, 0, 0.48);
		    background-position: left top; 
		    background-blend-mode: overlay;">
			
			<center><h1 style="color:white;"> {{$select_categorey->categorey_name}}</h1></center>
			
		</div>
	</div>

<div class="container">
		<div class="row">
			<center><h1>Projects at a Glance</h1></center>
			<hr style="width: 70px;">

			<p style="padding-left: 20px;padding-right: 20px; text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>

			@if(!empty($all_projects))
			@foreach($all_projects as $project)
			<div class="col-md-4" style="margin-top: 30px;">

				<div style="background-image:url('../images/productThumbnail/{{$project->thumbnail}}');padding:90px;margin-right: 10px; margin-bottom: 20px;border-radius: 10px;width: 100%;height: 100%;background-color: rgba(0, 0, 0, 0.48); background-position: left top; background-blend-mode: overlay; background-repeat: no-repeat; background-size: cover; border-radius: 10px;">
					
					<center>
					<h3 style="color:white;">{{$project->title}}</h3>
					<p style="color:white;">categorey</p>
					<a href="{{url('project-detail/'.$project->id)}}"><button style="background-color:rgba(0, 0, 0, 0.48);border:1px solid #ffb83a;color: #ffb83a;padding: 10px;width: 150px;">View Detail</button></a>

			</center>
				</div>
				
			</div>
			@endforeach
			@endif
		</div>
	</div>

	
<style type="text/css">
	
	
	button:hover{
		opacity: 0.6;
	}
</style>

@endsection