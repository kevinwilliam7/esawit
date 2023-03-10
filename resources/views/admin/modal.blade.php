<div class="modal" tabindex="-1" id="modal-create-admin">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title"></h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <form action="" method="post" id="form-create-admin" enctype="multipart/form-data">
                  @csrf
                  @method('POST')
                  <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" name="name" id="name" class="form-control">
                        @error('name')
                                <div class="text-danger">{{ $message }}</div>
                        @enderror
                  </div>
                  <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control">
                        @error('email')
                                <div class="text-danger">{{ $message }}</div>
                        @enderror
                  </div>
                  <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                        @error('password')
                                <div class="text-danger">{{ $message }}</div>
                        @enderror
                  </div>
              </form>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-primary" form="form-create-admin">Simpan</button>
          </div>
      </div>
  </div>
</div>
