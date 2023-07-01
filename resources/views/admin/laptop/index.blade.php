@extends('admin.admin_master')
@section('admin')

<div class="col-12 page-content">
    <div class="container-fluid ">
        <div style="overflow: hidden;class="slide position-relative">


                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Viewer</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    @foreach ($laptop as $item=>$val)
                    <tbody>
                        <tr>
                            <td>{{$val->id}}</td>
                            <td>{{$val->name}}</td>
                            <td>{{$val->viewer}}</td>
                            <td><img src="img/{{$val->image}}" alt="" width="50px" height="50px"></td>
                        <td>
                                <a href="{{route('laptop.show',$val->id)}}" class="btn btn-primary" style="font-size:15px; border-radius:5px ;"><i class="fa fa-eye"></i></a>&nbsp;
                                <a href="{{route('laptop.edit',$val->id)}}" class="btn btn-warning"  style="font-size:15px; border-radius:5px ;"><i class="fa-regular fa-pen-to-square"></i></a>&nbsp;
                                @include('admin.laptop.delete')
                            </td>


                        </tr>
                    </tbody>
                    @endforeach

                 </table>

            </div>
        </div>
    </div>
</div>

@endsection
