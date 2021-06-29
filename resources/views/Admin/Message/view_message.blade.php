@extends('Admin/admin_layout')
@section('content')

<div class="row-fluid sortable"> 

<div class="box span12">
  <div class="box-header" data-original-title>
    <h2><i class="halflings-icon user"></i><span class="break"></span>All Messages</h2>
  </div>

  <div class="box-content">

    <table class="table table-striped table-bordered">
        <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Sender Email</th>
          <th>Message</th>
          <th>Action</th>
        </tr>
      </thead>

      <tbody>
          @if(!empty($all_messages))
            @foreach ($all_messages as $message)
                <tr>
                  <td>{{ $message->id }}</td>
                  <td>{{ $message->name }}</td>
                  <td>{{ $message->sender_email }}</td>
                   <td>{{ $message->message }}</td>
                 

                  <td>
                      <a class="btn btn-danger" href="admin-delete-message/{{$message->id}}"><i class="halflings-icon white trash"></i></a>
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