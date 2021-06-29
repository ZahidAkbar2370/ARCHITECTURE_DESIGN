@extends('App/app_layout')
@section('content')

<div class="wrapper " >
                <div class="content " style="background-color: white">
                    <div class="container a1 well">
                        <div class="row" style="padding: 10px;border: 1px solid; border-radius: 5px;  box-shadow: 5px 5px 5px 5px #888888">
                        <div class="col-md-6 contacts">
                            <h1>Contact</h1>
                            <div class="col-md-6 iae">
                                <h4>Email</h4>
                                <p><a href="#">{{$all_social_links[0]->email_address}}</a></p>
                            </div>
                            <div class="col-md-6 fbh">
                                <h4>Phone</h4>
                                <p>{{$all_social_links[0]->mobile_no}}</p>
                            </div>
<br><br>
                            <div class="col-md-6 iae">
                                 <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="{{$all_social_links[0]->facebook}}" target="_blank"><i class="fa fa-facebook"></i></a></li>

                                <li><a href="{{$all_social_links[0]->twitter}}" target="_blank"><i class="fa fa-twitter"></i></a></li>

                                <li><a href="{{$all_social_links[0]->linkedin}}" target="_blank"><i class="fa fa-linkedin"></i></a></li>

                                <li class="sociallinks"><a href="{{$all_social_links[0]->instagram}}" target="_blank"><i class="fa fa-instagram"></i></a></li>

                                <li class="sociallinks"><a href="{{$all_social_links[0]->youtube}}" target="_blank"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div>
                            </div>
                            
                          
                        </div>

                        
                        <div class="col-md-6 pannel" style="margin-top: 20px">
                           <h1>Message</h1>

                           @if(!empty($message))
                           		<p style="color: green"><b>{{$message}}</b></p>
                           @endif
                           
                           <form action="{{URL::to('save-contact-us-message')}}" method="POST">

                           	@csrf
                            <input type="text" name="name" placeholder="Name" style="width:100%;height:40px;border-radius: 5px;border: 1px solid;padding-left: 15px" required=""><br><br>
                            
                            <input type="text" name="sender_email" placeholder="Example@gmail.com" style="width:100%;height:40px;border-radius: 5px;border: 1px solid;padding-left: 15px" required=""><br><br>

                            <textarea style="height: 130px;border: 1px solid;background-color: white;padding-left: 15px;border-radius: 5px" name="message" required="" placeholder="Enter You Message Here..."></textarea>
                            <!-- <input type="text" style="width:100%;height: 140px" name="message"> -->
                                
                            <br><br>
                            <input type="submit" name="message_submit" class="btn btn-primary" style="width: 150px">
                            </form>

                        </div>
                    </div>
                </div>
                </div>
                </div>

@endsection