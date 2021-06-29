@extends('Admin/admin_layout')
@section('content')

<div class="row-fluid sortable">    
  <div class="box span12">
    <div class="box-header" data-original-title>
      <h2><i class="halflings-icon user"></i><span class="break"></span>Update Social Links</h2>
    </div>
    <div class="box-content">



    <form action="{{URL::to('admin-update-social-link')}}" method="post">
      @csrf

      <input type="hidden" name="id" value="1">
      <div class="control-group">
        <label class="control-label" for="date01">Mobile No</label>
        <div class="controls">
          <input type="number" class="input-xlarge" name="mobile_no" value="{{$all_social_links[0]->mobile_no}}">
        </div>
      </div>

      <div class="control-group">
        <label class="control-label" for="date01">Email Address</label>
        <div class="controls">
          <input type="email" class="input-xlarge" name="email_address" value="{{$all_social_links[0]->email_address}}" >
        </div>
      </div>

      <div class="control-group">
        <label class="control-label" for="date01">Facebook</label>
        <div class="controls">
          <input type="text" class="input-xlarge" name="facebook" value="{{$all_social_links[0]->facebook}}">
        </div>
      </div>

      <div class="control-group">
        <label class="control-label" for="date01">Twitter</label>
        <div class="controls">
          <input type="text" class="input-xlarge" name="twitter" value="{{$all_social_links[0]->twitter}}">
        </div>
      </div>

      <div class="control-group">
        <label class="control-label" for="date01">Linkedin</label>
        <div class="controls">
          <input type="text" class="input-xlarge" name="linkedin" value="{{$all_social_links[0]->linkedin}}">
        </div>
      </div>

      <div class="control-group">
        <label class="control-label" for="date01">Youtube</label>
        <div class="controls">
          <input type="text" class="input-xlarge" name="youtube" value="{{$all_social_links[0]->youtube}}">
        </div>
      </div>

      <div class="control-group">
        <label class="control-label" for="date01">Instagram</label>
        <div class="controls">
          <input type="text" class="input-xlarge" name="instagram" value="{{$all_social_links[0]->instagram}}">
        </div>
      </div>

      

      
      <div class="control-group">
        <div class="controls">
          <input type="submit" class="input-xlarge btn btn-primary" name="member_name" value="Update" >
        </div>
      </div>
    </form> 
    </div>
  </div><!--/span-->
      
</div><!--/row-->



@endsection