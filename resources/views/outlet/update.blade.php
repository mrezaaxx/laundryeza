<!-- Modal -->
<div class="modal fade" id="formUpdateOutlet{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="ModalOutlet" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalOutlet">Data Outlet</h5>
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="/outlet/update" method="post">
          @csrf
          <input type="hidden" name="id" value="{{ $item->id }}">
          <div class="form-body">
              <div class="form-group">
                  <label for="nama">Nama </label>
                  <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="..." name="nama" value="{{ $item->nama }}" >
                  @error('nama')
                  <div class="text-muted">{{ $message }}</div>
                  @enderror
              </div>
              <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" placeholder="alamat..." name="alamat" value="{{ $item->alamat }}">
                  @error('alamat')
                  <div class="text-muted">{{ $message }}</div>
                  @enderror
              </div>
              <div class="form-group">
                  <label for="tlp">Telepon</label>
                  <input type="text" class="form-control @error('tlp') is-invalid @enderror" id="tlp" placeholder="no telpon..." name="tlp" value="{{ $item->tlp }}">
                  @error('tlp')
                  <div class="text-muted">{{ $message }}</div>
                  @enderror
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

