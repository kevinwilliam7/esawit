<div class="modal" tabindex="-1" id="modal-supplier">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title"></h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <form action="" method="post" id="form-supplier">
                  @csrf
                  @method('POST')
                  <div class="mb-3">
                      <label for="nama-perkebunan" class="form-label">Kebun supplier</label>
                      <input type="text" name="nama_perkebunan" id="nama-perkebunan" class="form-control" required>
                  </div>
                  <div class="mb-3">
                      <label for="jumlah-supply" class="form-label">Jumlah Supply (Ton)</label>
                      <input type="number" name="jumlah_supply" id="jumlah-supply" min="0" step="0.01" class="form-control" required>
                  </div>
                  <div class="mb-3">
                    <label for="jangka-waktu" class="form-label">Jangka Waktu Supply</label>
                    <input type="number" name="jangka_waktu" id="jangka-waktu" min="0" step="0.01" class="form-control" required>
                </div>
              </form>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-primary" form="form-supplier">Simpan</button>
          </div>
      </div>
  </div>
</div>
