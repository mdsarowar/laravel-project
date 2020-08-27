@extends('welcome')
@section('content')
<div class="row justify-content-center">
						<div class="appoinment_form_section lite_bg">
                            <a href="{{route('catagori')}} " class="btn btn-danger" >add catagory</a>
                            <a href="{{route('allcata')}} " class="btn btn-info" >all catagory</a><br><br>
							<form class="form_area" id="myForm" action="mail.html" method="post">
                            @csrf
								<div class="row">
									<div class="col-lg-12 form_group">
                                        <label for="post title"></label><br>
                                        <input name="name" placeholder="post title" type="text"><br><br>
                                         <label for="post image"></label>
                                        <input name="email" placeholder="post image" type="file"><br><br>
                                        <label for="details"></label>
                                        <input name="name" placeholder="dtails"type="text"><br><br>
                                        
                                        <select class="default-select" name="catagoris" id="cat">
                                            <option value="">abs</option>
                                            <option value="">abs</option>
                                        </select>
										
									</div>
									<!-- <div class="col-lg-12 text-center">
										<button class="primary-btn text-uppercase">submit</button>
									</div> -->
								</div>
							</form>
						</div>
                    </div>
@endsection