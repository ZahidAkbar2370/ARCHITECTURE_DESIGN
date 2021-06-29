@extends("App/app_layout")
@section("content")

	<div class="container-fluid">
		<div class="row" style="background-image: url('images/wallpaper/home.jpg');padding: 80px; background-position: center center ;
		    background-repeat: no-repeat;
		    background-blend-mode: overlay;
		    border-width: 0px;
		    border-color: rgb(234, 233, 233);
		    border-style: solid;
		    background-size: cover;
		    padding-top: 150px;
		    margin-top: 0px;
		    padding-right: 30px;
		    padding-bottom: 180px;
		    margin-bottom: 50px;
		    padding-left: 30px;background-color: rgba(0, 0, 0, 0.48); background-position: left top; background-blend-mode: overlay;">
				<div class="row" style="margin-left: 90px;margin-right:90px">
					<center><h1 style="color:white">Home</h1></center>
			</div>
			
		</div>
		
	</div>

<center><h1>Welcome To Design</h1></center>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
	</div>
</div>




<center><h2 style="margin-bottom: 30px">Our Services</h2></center>

	
<div class="container">
    <div class="col-md-12 padding-right">
        <div class="features_items">
            <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    @foreach($all_categoreies as $categorey)
						<div class="col-sm-3">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center shadow-none p-3 bg-light" style="border: 1px solid;border-radius: 10px;">

                                    <img src="images/categoreyThumbnail/{{$categorey->thumbnail}}" width="250px" height="190px" alt="" style="background-color: rgba(0, 0, 0, 0.26); background-position: center center; background-blend-mode: overlay; background-repeat: no-repeat; background-size: cover; border-radius: 10px;overflow:hidden;height: 330px;width: 100%;" />

                                    <h5 style="color: #FE980F" >{{$categorey->categorey_name}}</h5>

                                    <a href="cartegorey-detail/{{$categorey->id}}"><button style="background-color:rgba(0, 0, 0, 0.48);border:1px solid #ffb83a;color: #ffb83a;padding: 10px;width: 150px;margin-bottom: 5px;">View Detail</button></a>
                                                           
                                                        
                            </div>
                        </div>
                    </div>
                </div>
@endforeach
            </div>
        </div>
    </div>
</div>
</div></div>



           <div class="container">
           		<div class="row">
           			<iframe width="100%" height="520px" 
						src="https://www.youtube.com/embed/tgbNymZ7vqY">
					</iframe>
           		</div>
           </div>



@endsection