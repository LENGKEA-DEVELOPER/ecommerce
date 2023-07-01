@extends('admin.admin_master')
@section('admin')

<div class="col-12 page-content">
    <div class="container-fluid ">
        <div style="overflow: hidden;class="slide position-relative">


                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Status</th>
                            <th>Title</th>
                            <th>URL</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    @foreach ($location as $item=>$val)
                    <tbody>
                        <tr>
                            <td>{{$val->id}}</td>
                            <td>{{$val->status}}</td>
                            <td style="
                            white-space: nowrap;
                            overflow:hidden;
                            text-overflow:ellipsis;
                            max-width: 100px;
                            ">{{$val->title}}</td>
                            <td style="
                            white-space: nowrap;
                            overflow:hidden;
                            text-overflow:ellipsis;
                            max-width: 100px;
                            ">{{$val->url}}</td>
                        <td>
                                <a href="{{route('location.edit',$val->id)}}" class="btn btn-warning"  style="font-size:15px; border-radius:5px ;"><i class="fa-regular fa-pen-to-square"></i></a>&nbsp;
                                @include('admin.shop_location.delete')
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
