@extends('welcome')
@section('content')
<div class="row justify-content-center">
						<div class="appoinment_form_section lite_bg">
                            <a href="{{route('catagori')}} " class="btn btn-danger" >add catagory</a>
                            <a href="{{route('allcata')}} " class="btn btn-info" >all catagory</a><br><br>

                            <div>
                            <ol>
                           <li>The id is : {{$sar->id}}</li>
                           <li>The name is : {{$sar->name}} </li>
                           <li>The slug name is : {{$sar->slug}}</li>
                           </ol>
                            </div>
						</div>
                    </div>
@endsection