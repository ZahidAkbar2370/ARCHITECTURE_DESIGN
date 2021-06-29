@extends('Admin/admin_layout')
@section('content')

<div class="row-fluid sortable"> 

<div class="box span12">
  <a href="{{url('admin-add-product')}}"><button class="btn btn-primary">Add Product</button></a>
  <div class="box-header" data-original-title>
    <h2><i class="halflings-icon user"></i><span class="break"></span>All Products</h2>
  </div>

  <div class="box-content">

    <table class="table table-striped table-bordered">
        <thead>
        <tr>
          <th>ID</th>
          <th>Thumbnail</th>
          <th>Title</th>
          <th>Categorey Name</th>
          <th>Publication Status</th>
          <th>Action</th>
        </tr>
      </thead>

      <tbody>
        
          @if(!empty($all_products))  
          
            @foreach ($all_products as $product)
                <tr>
                  <td>{{ $product->id }}</td>
                  <td><img src="images/productThumbnail/{{ $product->thumbnail }}" style="width: 70px;height: 50px;"></td>
                  <td>{{ $product->title }}</td>
                  <td>{{ $product->categorey_id }}</td>

                  @if($product->publication_status == "1")
                    <td class="center">
                      <span class="label label-success">Active</span>
                    </td>
                  @else
                    <td class="center">
                      <span class="label label-danger">Unactive</span>
                    </td>
                  @endif

                  <td>

                    @if(($product->publication_status)=="1")
											<a class="btn btn-danger" href="{{URL::to('admin-product-unapprove/'.$product->id)}}">
												<i class="halflings-icon white thumbs-down"></i>  
											</a>
										@else
												<a class="btn btn-success" href="{{URL::to('admin-product-approve/'.$product->id)}}">
												<i class="halflings-icon white thumbs-up"></i>  
											</a>
										@endif
                      <a class="btn btn-info" href="{{URL::to('admin-edit-product/'.$product->id)}}"><i class="halflings-icon white edit"></i></a>
                      <a class="btn btn-danger" href="admin-delete-product/{{$product->id}}"><i class="halflings-icon white trash"></i></a>
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