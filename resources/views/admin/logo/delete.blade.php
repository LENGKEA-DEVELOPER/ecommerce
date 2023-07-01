<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#ModalDelete{{$val->id}}">
    <i class="fa-solid fa-trash"></i>
</button>


<form action="{{route('logo.delete',$val->id)}}" method="POST" enctype="multipart/form-data">
  @method('DELETE')
  @csrf


  <div class="modal fade" id="ModalDelete{{$val->id}}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Do you want to Delete ?</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"></span>
          </button>
        </div>
        <div class="modal body">You sure want to delete <b>{{$val->id}}</b></div>
        <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-danger">Delete</button>
        </div>
      </div>
    </div>
  </div>
</form>
