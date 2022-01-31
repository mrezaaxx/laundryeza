<!-- Modal -->
<div class="modal fade" id="formInputMember" tabindex="-1" role="dialog" aria-labelledby="ModalMember" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ModalMember">Data Member</h5>
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form action="{{ route('member.store') }}" method="post">
            @csrf
            <div class="form-body">
                <div class="form-group">
                    <label for="nama">Nama </label>
                    <input type="text" class="form-control" id="nama" placeholder="" name="nama">
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin">jenis kelamin</label>
                    <select class="form-control col-sm-3" id="jenis_kelamin" name="jenis_kelamin">
                        <option value="L">L</option>
                        <option value="P">P</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="tlp">Telepon</label>
                    <input type="text" class="form-control" id="tlp" placeholder="" name="tlp">
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    </div>
  </div>
</div>