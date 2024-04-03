<div>
    <div class="container">
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h3 class="text-dark fw-semibold">Edit Ruangan</h3>
            <a wire:navigate href="{{route('ruangan.index')}}" class="btn btn-secondary">Batal</a>
        </div>
        <div class="card border-0">
            <div class="card-body">
                <form wire:submit="save">
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="namaRuangan">Nama Ruangan</label>
                                <input type="text" wire:model="namaRuangan" id="namaRuangan" class="form-control">
                                <div class="text-danger fs-7">@error('namaRuangan') {{ $message }} @enderror</div>
                            </div>
                            <div class="mb-3">
                                <label for="gedung_id"> Gedung</label>
                                <select wire:model="gedung_id" name="gedung_id" id="gedung_id" class="form-select">
                                    <option>== Pilih Gedung ==</option>
                                    @foreach ($gedungs as $gedung)
                                    <option value="{{$gedung->id}}">{{$gedung->namaGedung}}</option>
                                    @endforeach
                                </select>
                                <div class="text-danger fs-7">@error('gedung_id') {{ $message }} @enderror</div>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-sm btn-primary" type="submit">
                                <i class="bx bx-save"></i> Simpan
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
