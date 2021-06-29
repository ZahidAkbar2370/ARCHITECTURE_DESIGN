@extends("App/app_layout")
@section("content")

	<div class="container">
		<div class="row"  class="my_project_page_wallpaper" style="background-image:url('images/wallpaper/client-review.jpg');
			background-color: rgba(255, 255, 255, 0);
		    background-position: center center;
		    background-repeat: no-repeat;
		    background-blend-mode: overlay;
		    border-width: 0px;
		    border-color: rgb(234, 233, 233);
		    border-style: solid;
		    background-size: cover;padding-top: 150px;
		    margin-top: 0px;
		    padding-right: 30px;
		    padding-bottom: 100px;
		    margin-bottom: 50px;
		    padding-left: 30px;">

		<center>
			<h1 style="color: white;">Clients Review</h1>

			<p style="color: white;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</center>
				
		</div>
		
	</div>


	<div class="container">
		<div class="row">
			<center><h1>Client Reviews</h1></center>
			<!-- <hr style="width: 70px;"> -->

			<p style="padding-left: 20px;padding-right: 20px; text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>


			@foreach($all_reviews as $review)
			<div class="col-md-4" style="margin-top: 30px;">

				<div style="background-image:url('images/reviewImages/{{$review->review_image}}');padding:90px;margin-right: 10px; margin-bottom: 20px;border-radius: 10px;width: 100%;height: 480px;background-color: rgba(0, 0, 0, 0.48); background-position: left top; background-blend-mode: overlay; background-repeat: no-repeat; background-size: cover; border-radius: 10px;">
					
					

			</center>
				</div>
				
			</div>
			@endforeach
		</div>
	</div>

	
<style type="text/css">
	
	
	button:hover{
		opacity: 0.6;
	}
</style>
@endsection