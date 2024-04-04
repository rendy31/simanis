<div>
    <div class="container">
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h3 class="text-dark fw-semibold">Tambah Kategori</h3>
            <a wire:navigate href="{{route('kategori.index')}}" class="btn btn-secondary">Batal</a>
        </div>
        <div class="card border-0">
            <div class="card-body">
                <form wire:submit="save">
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="namaKategori">Nama Kategori</label>
                                <input type="text" wire:model="namaKategori" id="namaKategori" class="form-control">
                                <div class="text-danger fs-7">@error('namaKategori') {{ $message }} @enderror</div>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-sm btn-primary" type="submit">
                                <i class="bx bx-save"></i> Simpan
                            </button>
                            <div wire:loading> 
                                Saving...
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
