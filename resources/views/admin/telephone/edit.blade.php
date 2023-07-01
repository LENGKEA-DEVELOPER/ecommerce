@extends('admin.admin_master')
@section('admin')

<div class="col-12 page-content">
    <div class="container-fluid ">
        <div style="overflow: hidden;class="slide position-relative">
            <form action="{{route('telephone.update',$telephone->id)}}" method="post">
                @csrf

                <label for="" class="form-label">Telephone</label>
                <input type="text" name="telephone" value="{{$telephone->telephone}}"class="form-control">
                 <button class="btn btn-primary mt-3 float-end" type="submit">update</button>


        </form>
    </div>
</div>

@endsection

