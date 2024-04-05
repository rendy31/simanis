<div>
    <div class="container">
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h3 class="text-dark fw-semibold">Update Barang</h3>
            <a wire:navigate href="{{route('barang.index')}}" class="btn btn-secondary">Batal</a>
        </div>
        <div class="card border-0">
            <div class="card-body">
                <form wire:submit="save">
                    <div class="row">
                        <div class="col-12">

                            <div class="mb-3">
                                <label for="namabarang">Nama Barang</label>
                                <input type="text" wire:model="namaBarang" id="namaBarang" class="form-control">
                                <div class="text-danger fs-7">@error('namaBarang') {{ $message }} @enderror</div>
                            </div>

                            <div class="mb-3 col-6">
                                <label for="kategori_id"> Kategori</label>
                                <select wire:model="kategori_id" id="kategori_id" class="form-select">
                                    <option>== Pilih Kategori ==</option>
                                    @foreach ($kategoris as $kategori)
                                    <option value="{{$kategori->id}}">{{$kategori->namaKategori}}</option>
                                    @endforeach
                                </select>
                                <div class="text-danger fs-7">@error('kategori_id') {{ $message }} @enderror</div>
                            </div>

                            <div class="mb-3 col-3">
                                <label for="tglBeli">Tanggal Beli</label>
                                {{-- <input type="text" wire:model="tglBeli" id="tglBeli" class="form-control"> --}}
                                <input type="date" wire:model="tglBeli" class="form-control  @error('tglBeli') is-invalid @enderror" id="tglBeli" value="{{ old('tglBeli') }}">
                                <div class="text-danger fs-7">@error('tglBeli') {{ $message }} @enderror</div>
                            </div>

                            <div class="mb-3 col-3">
                                <label for="jlhBeli">Jumlah Beli</label>
                                <input type="number" wire:model="jlhBeli" id="jlhBeli" class="form-control">
                                <div class="text-danger fs-7">@error('jlhBeli') {{ $message }} @enderror</div>
                            </div>
                            <div class="mb-3 col-3">
                                <label for="hargaSatuan">Harga Satuan</label>
                                <input type="number" wire:model="hargaSatuan" id="hargaSatuan" class="form-control">
                                <div class="text-danger fs-7">@error('hargaSatuan') {{ $message }} @enderror</div>
                            </div>
                            <div class="mb-3">
                                <label for="tempatBeli">Tempat Beli</label>
                                <input type="text" wire:model="tempatBeli" id="tempatBeli" class="form-control">
                                <div class="text-danger fs-7">@error('tempatBeli') {{ $message }} @enderror</div>
                            </div>
                            <div class="mb-3">
                                <label for="asalBarang">Asal Barang</label>
                                <input type="text" wire:model="asalBarang" id="asalBarang" class="form-control">
                                <div class="text-danger fs-7">@error('asalBarang') {{ $message }} @enderror</div>
                            </div>
                            <div class="mb-3">
                                <label for="kepemilikan">Kepemilikan</label>
                                <input type="text" wire:model="kepemilikan" id="kepemilikan" class="form-control">
                                <div class="text-danger fs-7">@error('kepemilikan') {{ $message }} @enderror</div>
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
