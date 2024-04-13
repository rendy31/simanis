<div>
    <div class="container">
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h3 class="text-dark fw-semibold">Data Penempatan</h3>
            <a wire:navigate href="{{ route('penempatan.create') }}" class="btn btn-primary btn-sm">Tambah Penempatan</a>
        </div>
        @if (session('sukses'))
            <div class="alert alert-success">
                {{ session('sukses') }}
            </div>
        @endif
        
        <div class="card border-0">
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-5">
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">cari nama barang/ruangan</span>
                            <input  wire:model.live="search" type="text" class="form-control" name="search" aria-label="Sizing example input"
                                aria-describedby="inputGroup-sizing-sm">
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                <table class="table table-hover">
                        <thead>
                            <tr>
                                {{-- <th>#</th> --}}
                                <th> Barang</th>
                                <th>No.Urut</th>
                                <th> Ruangan</th>
                                <th> Gedung</th>
                                <th>Barcode</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($penempatans as $penempatan)
                                <tr class="align-middle">
                                    {{-- <td>{{ $loop->iteration }}</td> --}}
                                    <td>{{ $penempatan->barang->namaBarang }}</td>
                                    <td>{{ $penempatan->nomorUrut }}</td>
                                    <td>{{ $penempatan->ruangan->namaRuangan }}</td>
                                    <td>{{ $penempatan->ruangan->gedung->namaGedung }}</td>
                                    <td>{{ $penempatan->barcode }}</td>
                                    
                                    <td>

                                        <div class="d-flex gap-2">
                                            <a wire:navigate href="{{ route('penempatan.show', $penempatan->id) }}"
                                                class="btn btn-secondary btn-sm text-white">
                                                barcode
                                            </a>
                                            {{-- <a wire:navigate href="{{ route('penempatan.show', $penempatan->id) }}"
                                                class="btn btn-info btn-sm text-white">
                                                <i class="bx bxs-detail"></i>
                                            </a> --}}
                                            <a wire:navigate href="{{ route('penempatan.edit', $penempatan->id) }}"
                                                class="btn btn-warning btn-sm text-white">
                                                <i class="bx bx-edit"></i>
                                            </a>
                                            <button wire:confirm="Are you sure you want to delete ?"
                                                wire:click="delete({{ $penempatan->id }})"
                                                class="btn btn-danger btn-sm">
                                                <i class="bx bx-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col-md-11">
                            {{ $penempatans->links('pagination::bootstrap-5') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
