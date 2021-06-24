<div class="modal" id="deleteModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Bạn có chắc chắn xoá khách hàng này không?</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form>
        @csrf
        @method('DELETE')
        <div class="d-flex">
        <input class="d-none" id="delete-id" value="">
        <button type="button" id="btn-delete" class="btn btn-primary mr-2" data-id="">Có</button>
        <button type="button" id="cancel" class="btn btn-success">Không</button>
        </div>
        </form>
      </div>

      <!-- Modal footer -->
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div> -->

    </div>
  </div>
</div>