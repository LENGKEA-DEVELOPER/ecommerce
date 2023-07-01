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
                            <th>Email</th>
                            <th>Telephone</th>
                            <th>Address</th>
                            <th>Message</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    @foreach ($feedback as $item=>$val)
                    <tbody>
                        <tr>
                            <td>{{$val->id}}</td>
                            <td>{{$val->username}}</td>
                            <td>{{$val->email}}</td>
                            <td>{{$val->telephone}}</td>
                            <td>{{$val->address}}</td>
                            <td>{{$val->message}}</td>
                        <td>
                                @include('admin.feedback.delete')
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
