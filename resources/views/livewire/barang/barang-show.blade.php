<div>
    <div class="container">
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h3 class="text-dark fw-semibold">Detail Barang</h3>
            <a wire:navigate href="{{route('barang.index')}}" class="btn btn-secondary">Kembali</a>
        </div>
        <div class="card border-0">
            <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <tr>
                                        <th class="col-3">Nama Barang</th>
                                        <td>{{ $barang->namaBarang }}</td>
                                    </tr>
                                    <tr>
                                        <th class="col-3">Kategori</th>
                                        <td>{{ $barang->kategori->namaKategori }}</td>
                                    </tr>
                                    <tr>
                                        <th class="col-3">Tanggal Beli</th>
                                        <td>{{ $barang->tglBeli }}</td>
                                    </tr>
                                    <tr>
                                        <th class="col-3">Jumlah Beli</th>
                                        <td>{{ $barang->jlhBeli }}</td>
                                    </tr>
                                    <tr>
                                        <th class="col-3">Harga Satuan</th>
                                        <td>{{ 'Rp ' . number_format($barang->hargaSatuan, 0, ',', '.') }}</td>
                                        {{-- <td>{{ $barang->hargaSatuan }}</td> --}}
                                    </tr>
                                    <tr>
                                        <th class="col-3">Total Harga</th>
                                        <td>{{ 'Rp ' . number_format($barang->totalHarga, 0, ',', '.') }}</td>
                                        {{-- <td>{{ $barang->totalHarga }}</td> --}}
                                    </tr>
                                    <tr>
                                        <th class="col-3">Tempat Beli</th>
                                        <td>{{ $barang->tempatBeli }}</td>
                                    </tr>
                                    <tr>
                                        <th class="col-3">Asal Barang</th>
                                        <td>{{ $barang->asalBarang }}</td>
                                    </tr>
                                    <tr>
                                        <th class="col-3">Kepemilikan</th>
                                        <td>{{ $barang->kepemilikan }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
