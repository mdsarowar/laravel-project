@extends('welcome')
@section('content')
<div class="row justify-content-center">
						<div class="appoinment_form_section lite_bg">
                            <a href="{{route('catagori')}} " class="btn btn-danger" >add catagory</a>
                            <a href="" class="btn btn-info" >all catagory</a><br><br>

							@if ($errors->any())
								<div class="alert alert-danger">
									<ul>
										@foreach ($errors->all() as $error)
											<li>{{ $error }}</li>
										@endforeach
									</ul>
								</div>
							@endif
							<form class="form_area" id="myForm" action="{{route('incatagori')}}" method="post">
							@csrf
								<div class="row">
									<div class="col-lg-12 form_group">
                                        <label for="post title"></label><br>
                                        <input name="name" placeholder="name" type="text"><br><br>
                                         <label for="post image"></label>
                                        <input name="slug" placeholder="slug" type="text"><br><br>
                                        
										
									</div>
									<div class="col-lg-12 text-center">
										<button class="primary-btn text-uppercase">submit</button>
									</div>
								</div>
							</form>
						</div>
                    </div>
@endsection