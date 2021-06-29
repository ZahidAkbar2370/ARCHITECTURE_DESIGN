@extends("App/app_layout")
@section("content")

	<div class="container-fluid">
		<div class="row-fluid" style="background-image: url('../images/productThumbnail/{{$select_project->thumbnail}}');background-color: rgba(255, 255, 255, 0);
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
		    padding-left: 30px;background-color: rgba(0, 0, 0, 0.48); background-position: left top; background-blend-mode: overlay;">
			
			<center><h1 style="color:white;"> {{$select_project->title}}</h1></center>
			
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-6" style="margin-bottom: 20px;">
				<img src="../images/productImages/1a.jpg" style="width: 100%;border-radius: 20px;">
			</div>

			<div class="col-md-6" style="margin-bottom: 20px;">
				<img src="../images/productImages/1b.jpg" style="width: 100%;border-radius: 20px;">
			</div>

			<div class="col-md-6" style="margin-bottom: 20px;">
				<img src="../images/productImages/1c.jpg" style="width: 100%;border-radius: 20px;">
			</div>

			<div class="col-md-6" style="margin-bottom: 20px;">
				<img src="../images/productImages/1d.jpg" style="width: 100%;border-radius: 20px;">
			</div>

			<div class="col-md-6" style="margin-bottom: 20px;">
				<img src="../images/productImages/1e.jpg" style="width: 100%;border-radius: 20px;">
			</div>

			<div class="col-md-6" style="margin-bottom: 20px;">
				<img src="../images/productImages/1f.jpg" style="width: 100%;border-radius: 20px;">
			</div>
			
		</div>
		
	</div>

	<style type="text/css">
		img:hover{
   -ms-transform: scale(0.9); /* IE 9 */
  -webkit-transform: scale(0.9); /* Safari 3-8 */
  transform: scale(0.9); 

  border-radius: 20px;

		}
	</style>

@endsection