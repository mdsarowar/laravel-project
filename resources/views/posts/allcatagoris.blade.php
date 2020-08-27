@extends('welcome')
@section('content')
<div class="row justify-content-center">
						<div class="appoinment_form_section lite_bg">
                            <a href="{{route('catagori')}} " class="btn btn-danger" >add catagory</a>
                            <a href="{{route('allcata')}} " class="btn btn-info" >all catagory</a><br><br>
							
                            <table class="table table-responsive">
                            <tr>
                                <th>sl</th>
                                <th>name</th>
                                <th>slug name</th>
                                
                            </tr>
                            <tr>
                            @foreach($alldata as $row)
                                <td>{{$row->id}}</td>
                                <td>{{$row->name}}</td>
                                <td>{{$row->slug}}</td>
                                <td>
                                <a href="" class="btn btn-sm btn-info">edit</a>
                                <a href="" class="btn btn-sm btn-denger">delet</a>
                                <a href="{{URL('viewdata/'.$row->id)}}" class="btn btn-sm btn-success">view</a>
                                </td>
                            </tr>
                            @endforeach
                            </table>

						</div>
                    </div>
@endsection