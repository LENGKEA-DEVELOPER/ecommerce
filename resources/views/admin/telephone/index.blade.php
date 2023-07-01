@extends('admin.admin_master')
@section('admin')

<div class="col-12 page-content">
    <div class="container-fluid ">
        <div style="overflow: hidden;class="slide position-relative">


                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Telephone</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    @foreach ($telephone as $item=>$val)
                    <tbody>
                        <tr>
                            <td>{{$val->id}}</td>
                            <td>{{$val->telephone}}</td>
                        <td>
                                <a href="{{route('telephone.edit',$val->id)}}" class="btn btn-warning"  style="font-size:15px; border-radius:5px ;"><i class="fa-regular fa-pen-to-square"></i></a>&nbsp;
                                @include('admin.telephone.delete')
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
