<div>
    <div class="container">
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h3 class="text-dark fw-semibold">Data Barang</h3>
            <a wire:navigate href="{{ route('barang.create') }}" class="btn btn-primary btn-sm">Tambah Barang</a>
        </div>
        @if (session('sukses'))
            <div class="alert alert-success">
                {{ session('sukses') }}
            </div>
        @endif
        @if (session('gagal'))
            <div class="alert alert-danger">
                {{ session('gagal') }}
            </div>
        @endif
        <div class="card border-0">
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-5">
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">cari nama barang</span>
                            <input  wire:model.live="search" type="text" class="form-control" name="search" aria-label="Sizing example input"
                                aria-describedby="inputGroup-sizing-sm">
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                {{-- <th>#</th> --}}
                                <th>Nama Barang</th>
                                {{-- <th>Kategori</th> --}}
                                <th>Tgl Beli</th>
                                <th>Jumlah Beli</th>
                                <th>Harga Satuan</th>
                                {{-- <th>Total Harga</th> --}}
                                {{-- <th>Tempat Beli</th> --}}
                                {{-- <th>Asal Barang</th> --}}
                                {{-- <th>Kepemilikan</th> --}}
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($barangs as $barang)
                                <tr class="align-middle">
                                    {{-- <td>{{ $loop->iteration }}</td> --}}
                                    <td>{{ $barang->namaBarang }}</td>
                                    {{-- <td>{{$barang->kategori->namaKategori}}</td> --}}
                                    <td>{{ $barang->tglBeli }}</td>
                                    <td>{{ $barang->jlhBeli }}</td>
                                    <td>{{ 'Rp ' . number_format($barang->hargaSatuan, 0, ',', '.') }}</td>
                                    {{-- <td>{{$barang->totalHarga}}</td> --}}
                                    {{-- <td>{{$barang->tempatBeli}}</td> --}}
                                    {{-- <td>{{$barang->asalBarang}}</td> --}}
                                    {{-- <td>{{$barang->kepemilikan}}</td> --}}
                                    <td>
                                        <div class="d-flex gap-2">
                                            <a wire:navigate href="{{ route('barang.show', $barang->id) }}"
                                                class="btn btn-info btn-sm text-white">
                                                <i class='bx bxs-detail'></i> detail
                                            </a>
                                            <a wire:navigate href="{{ route('barang.edit', $barang->id) }}"
                                                class="btn btn-warning btn-sm text-white">
                                                <i class="bx bx-edit"></i> Edit
                                            </a>
                                            <button wire:confirm="Are you sure you want to delete ?"
                                                wire:click="delete({{ $barang->id }})" class="btn btn-danger btn-sm">
                                                <i class="bx bx-trash"></i> Hapus
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="row">
                        {{-- <div class="col-md-1">
                            <select wire:model.live="page" class="form-select" name="page" id="page">
                                <option value="10">10</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                        </div> --}}
                        <div class="col-md-11">
                            {{ $barangs->links('pagination::bootstrap-5') }}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
