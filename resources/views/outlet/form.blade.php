<div class="modal fade" id="formInputOutlet" tabindex="-1" role="dialog" aria-labelledby="ModalOutlet" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ModalOutlet">Data Outlet</h5>
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form action="{{ route('outlet.store') }}" method="post">
            @csrf
            <div class="form-body">
                <div class="form-group">
                    <label for="nama">Nama </label>
                    <input type="text" class="form-control" id="nama" placeholder="nama.." name="nama">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" id="alamat" placeholder="alamat.." name="alamat">
                </div>
                <div class="form-group">
                    <label for="tlp">Telepon</label>
                    <input type="text" class="form-control" id="tlp" placeholder="telpon.." name="tlp">
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