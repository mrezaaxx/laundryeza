<!-- Modal -->
<div class="modal fade" id="formUpdatePaket{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="ModalPaket" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalPaket">Data Paket</h5>
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="/paket/update" method="post">
          @csrf
          <input type="hidden" name="id" value="{{ $item->id }}">
          <div class="form-body">
              <div class="form-group">
                  <label for="nama_paket">Nama Paket</label>
                  <input type="text" class="form-control" id="nama_paket" placeholder="nama paket..." name="nama_paket" value="{{ $item->name_paket }}">
              </div>
              <div class="form-group">
                  <label for="jenis">Jenis</label>
                  <select type="text" class="form-control col-sm-3" id="jenis" placeholder="jenis..." name="jenis" value="{{ $item->jenis }}">
                      <option value="kiloan">Kiloan</option>
                      <option value="selimut">Selimut</option>
                      <option value="bed_cover">Bed Cover</option>
                      <option value="kaos">Kaos</option>
                      <option value="lain">Lainnya</option>
                  </select>
              </div>
              <div class="form-group">
                  <label for="harga">Harga</label>
                  <input type="text" class="form-control" id="harga" placeholder="Harga.." name="harga" value="{{ $item->harga }}">
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