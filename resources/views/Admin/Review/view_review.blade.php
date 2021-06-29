@extends('Admin/admin_layout')
@section('content')

<div class="row-fluid sortable"> 

<div class="box span12">
  <a href="{{url('admin-add-review')}}"><button class="btn btn-primary">Add Review</button></a>
  <div class="box-header" data-original-title>
    <h2><i class="halflings-icon user"></i><span class="break"></span>All Products</h2>
  </div>

  <div class="box-content">

    <table class="table table-striped table-bordered">
        <thead>
        <tr>
          <th>ID</th>
          <th>Review Image</th>
          <th>Publication Status</th>
          <th>Action</th>
        </tr>
      </thead>

      <tbody>
        
          @if(!empty($all_reviews))  
          
            @foreach ($all_reviews as $reviews)
                <tr>
                  <td>{{ $reviews->id }}</td>
                  <td><img src="images/reviewImages/{{ $reviews->review_image }}" style="width: 70px;height: 50px;"></td>

                  @if($reviews->publication_status == "1")
                    <td class="center">
                      <span class="label label-success">Active</span>
                    </td>
                  @else
                    <td class="center">
                      <span class="label label-danger">Unactive</span>
                    </td>
                  @endif

                  <td>

                    @if(($reviews->publication_status)=="1")
											<a class="btn btn-danger" href="{{URL::to('admin-review-unapprove/'.$reviews->id)}}">
												<i class="halflings-icon white thumbs-down"></i>  
											</a>
										@else
												<a class="btn btn-success" href="{{URL::to('admin-review-approve/'.$reviews->id)}}">
												<i class="halflings-icon white thumbs-up"></i>  
											</a>
										@endif
                      
                      <a class="btn btn-danger" href="admin-delete-review/{{$reviews->id}}"><i class="halflings-icon white trash"></i></a>
                  </td>

                  
                </tr>
            @endforeach
          @endif
       
      </tbody>
        
      
    </table>            
  </div>
</div><!--/span-->

</div><!--/row-->

    

@endsection