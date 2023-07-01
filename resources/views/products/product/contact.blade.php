@extends('layout')
@section('content')
<div class="contact2">
  <div class="follow_us1">
                            <h4 class="title" style="text-align: center">FOLLOW US</h4>
                            <div class="centera">
                                <h3>សូមស្វាគមន៍</h3>
                            <h5>
                                បើលោកអ្នកមានបញ្ហា ឬ មានសំនួរ លោកអ្នកអាចទាក់ទងមកកាន់លេខទូរស័ព្ទខាងក្រោមនេះ៖</h5>
@php
$phonenumber=App\Models\telephone::all();
@endphp
@foreach ($phonenumber as $item=>$val)
<h4>{{$val->telephone}}</h4>

@endforeach
@php
$map=App\Models\location::where('status','=','header')->limit(1)->get();
@endphp
@foreach ($map as $item=>$val)
<iframe src="{{$val->url}}" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

@endforeach

                        </div>
                </div>
                  <div class="feedback1">
                            <h4 class="title">FEEDBACK TO US</h4>

                            <form action="{{route('contact.store')}}" method="post">
                                @csrf


                                        <label for="" class="form-label">Name</label>
                                        <input type="text" class="form-control" name="username" placeholder="Username" required>


                                        <label for="" class="form-label">Email</label>
                                        <input type="email" class="form-control" name="email" placeholder="Email" required>


                                        <label for="" class="form-label">Telephone</label>
                                        <input type="tel" class="form-control" name="telephone" placeholder="Telephone" required minlength="9" maxlength="10">


                                        <label for="" class="form-label">Address</label>
                                        <input type="text"class="form-control"name="address" placeholder="Address" required>

                                        <label for="" class="form-label">Message</label>
                                        <textarea cols="30" rows="7" name="message" class="form-control" placeholder="Message Here" required></textarea>


                            <button class="btn btn-primary mt-1" type="submit">Submit</button>

                                </div>
                            </form>
                </div>
            </div>
            <br>
@include('footer')
@endsection
