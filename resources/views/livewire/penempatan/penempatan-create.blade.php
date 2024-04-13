<div>
    <div class="container">
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h3 class="text-dark fw-semibold">Penempatan Barang</h3>
            <a wire:navigate href="{{route('penempatan.index')}}" class="btn btn-secondary btn-sm">Batal</a>
        </div>
        @if (session('gagal'))
            <div class="alert alert-danger">
                {{ session('gagal') }}
            </div>
        @endif
        <div class="card border-0">
            <div class="card-body">
                <form wire:submit="save">
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3 col-6">
                                <label for="namaBarang">Nama Barang</label>
                                <select wire:model="barang_id" name="barang_id" id="barang_id" class="form-select">
                                    <option>== Pilih Barang ==</option>
                                    @foreach ($barangs as $barang)
                                    <option value="{{$barang->id}}">{{$barang->namaBarang}}</option>
                                    @endforeach
                                </select>
                                <div class="text-danger fs-7">@error('barang_id') {{ $message }} @enderror</div>
                            </div>
                            <div class="mb-3 col-6">
                                <label for="ruangan_id"> Ruang Penempatan</label>
                                <select wire:model="ruangan_id" name="ruangan_id" id="ruangan_id" class="form-select">
                                    <option>== Pilih Ruangan ==</option>
                                    @foreach ($ruangans as $ruangan)
                                    <option value="{{$ruangan->id}}">{{$ruangan->namaRuangan}}</option>
                                    @endforeach
                                </select>
                                <div class="text-danger fs-7">@error('ruangan_id') {{ $message }} @enderror</div>
                            </div>
                            <div class="mb-3 col-3">
                                <label for="nomorUrut">Nomor Urut Barang</label>
                                <input type="number" wire:model="nomorUrut" id="nomorUrut" class="form-control">
                                <div class="text-danger fs-7">@error('nomorUrut') {{ $message }} @enderror</div>
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
