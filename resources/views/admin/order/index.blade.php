@extends('admin.admin_master')
@section('admin')

<div class="col-12 page-content">
    <div class="container-fluid ">
        <div style="overflow: hidden;class="slide position-relative">


                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Customer</th>
                            <th>Product</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    @foreach ($order as $item=>$val)
                    <tbody>
                        <tr>
                            <td>{{$val->id}}</td>
                            <td>{{$val->customer}}</td>
                            <td>{{$val->product}}</td>
                            <td><img src="/img/{{$val->image}}" alt="" width="50px" height="50px"></td>
                        <td>
                                <a href="{{route('order.show',$val->id)}}" class="btn btn-warning"  style="font-size:15px; border-radius:5px ;"><i class="fa fa-eye"></i></a>&nbsp;
                                @include('admin.order.delete')
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
