

<a href="" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fal fa-shopping-cart cart" ></i></a>
<form action="" method="POST" enctype="multipart/form-data">
  @csrf
  <!-- Button trigger modal -->

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Buy</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <label for="" class="form-label">name</label>
            <input type="text" name="customer" class="form-control">
            <label for="" class="form-label">Gmail</label>
            <input type="text" name="gmail" class="form-control">
            <label for="" class="form-label">Phone Number</label>
            <input type="text" name="telephone" class="form-control">
            <input type="hidden" name="product" value="{{$val->name}}">
            <input type="hidden" name="image" value="{{$val->image}}">
            <input type="hidden" name="price" value="{{$val->price}}">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Order</button>
        </div>
      </div>
    </div>
  </div>
