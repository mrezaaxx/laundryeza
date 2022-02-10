<div class="modal fade" id="formInputPaket" tabindex="-1" role="dialog" aria-labelledby="ModalPaket" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ModalPaket">Data Paket</h5>
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form action="{{ route('paket.store') }}" method="post">
            @csrf
            <div class="form-body">
                <div class="form-group">
                    <label for="nama_paket">Nama Paket</label>
                    <input type="text" class="form-control" id="nama_paket" placeholder="" name="nama_paket">
                </div>
                {{-- <div class="form-group">
                    <label for="id_outlet">Nama Outlet</label>
                    <select type="text" class="form-control" id="id_outlet">
                      <option value="">Pilih Outlet</option>
                    @foreach ($outlet as $out)  
                      <option value="{{ $out->id }}">{{ $out->nama }}</option>
                    @endforeach
                  </select>
                </div> --}}
                <div class="form-group">
                    <label for="jenis">Jenis</label>
                    <select type="text" class="form-control col-sm-3" id="jenis" placeholder="jenis" name="jenis">
                        <option value="Kiloan">Kiloan</option>
                        <option value="Selimut">Selimut</option>
                        <option value="Bedcover">Bed Cover</option>
                        <option value="Kaos">Kaos</option>
                        <option value="Lain">Lainnya</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="text" class="form-control" id="harga" placeholder="Harga" name="harga">
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