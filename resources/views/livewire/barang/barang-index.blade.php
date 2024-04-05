<div>
    <div class="container">
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h3 class="text-dark fw-semibold">Data Barang</h3>
            <a wire:navigate href="{{route('barang.create')}}" class="btn btn-primary btn-sm">Tambah Barang</a>
        </div>
        @if (session('sukses'))
        <div class="alert alert-success">
            {{ session('sukses') }}
        </div>
    @endif
        <div class="card border-0">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
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
                                <td>{{$loop->iteration}}</td>
                                <td>{{$barang->namaBarang}}</td>
                                {{-- <td>{{$barang->kategori->namaKategori}}</td> --}}
                                <td>{{$barang->tglBeli}}</td>
                                <td>{{$barang->jlhBeli}}</td>
                                <td>{{ 'Rp ' . number_format($barang->hargaSatuan, 0, ',', '.') }}</td>
                                {{-- <td>{{$barang->totalHarga}}</td> --}}
                                {{-- <td>{{$barang->tempatBeli}}</td> --}}
                                {{-- <td>{{$barang->asalBarang}}</td> --}}
                                {{-- <td>{{$barang->kepemilikan}}</td> --}}
                                <td>
                                    <div class="d-flex gap-2">
                                        <a wire:navigate href="{{route('barang.show',$barang->id)}}" class="btn btn-info btn-sm text-white">
                                            <i class='bx bxs-detail'></i> detail
                                        </a>
                                        <a wire:navigate href="{{route('barang.edit',$barang->id)}}" class="btn btn-warning btn-sm text-white">
                                            <i class="bx bx-edit"></i> Edit
                                        </a>
                                        <button wire:confirm="Are you sure you want to delete ?" wire:click="delete({{ $barang->id }})" class="btn btn-danger btn-sm">
                                            <i class="bx bx-trash"></i> Hapus
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
