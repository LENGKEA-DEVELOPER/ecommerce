<button type = "button" class = "buy-now-btn"  data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="qty();"><i class = "fas fa-wallet"></i>buy now</button>
<form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
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
            <input type="text" name="customer" placeholder="Name" class="form-control">
            <label for="" class="form-label">Email</label>
            <input type="text" name="gmail" placeholder="Email" class="form-control">
            <label for="" class="form-label">Phone Number</label>
            <input type="text" name="telephone" placeholder="Phone Number" class="form-control">
            <label for="" class="form-label">Address</label>
            <input type="text" name="address" placeholder="Address" class="form-control">
            <input type="hidden" id="result2" name="qty">
            <input type="hidden" name="product" value="{{$val->name}}">
            <input type="hidden" name="image" value="{{$val->image}}">
            <input type="hidden" name="price" value="{{$val->price}}">
            <input type="hidden" name="total"id="result3">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Order</button>
        </div>
      </div>
    </div>
  </div>
</form>
