<div>
    <div class="container">
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h3 class="text-dark fw-semibold">Detail Penempatan</h3>
            <a wire:navigate href="{{route('penempatan.index')}}" class="btn btn-secondary btn-sm">Kembali</a>
        </div>
        <div class="card border-0">
            <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <tr>
                                        {{-- <th class="col-3">Nama Barang</th> --}}
                                        <td>{!! '<img src="data:image/png;base64,'. DNS1D::getBarcodePNG($penempatan->barcode, 'C93',1,50,array(1,1,1), true) . '" alt="barcode"   />' !!}</td>
                                    </tr>
                                    <tr>
                                        <th class="col-3">Nama Barang</th>
                                        <td>{{ $penempatan->barang->namaBarang }}</td>
                                    </tr>
                                    <tr>
                                        <th class="col-3">Ruangan Penempatan Barang</th>
                                        <td>{{ $penempatan->ruangan->namaRuangan }}</td>
                                    </tr>
                                    <tr>
                                        <th class="col-3">Gedung Penempatan Barang</th>
                                        <td>{{ $penempatan->ruangan->gedung->namaGedung }}</td>
                                    </tr>
                                    <tr>
                                        <td class="col-3">Barang ke-</td>
                                        <td>{{ $penempatan->nomorUrut }}</td>
                                    </tr>
                                    <tr>
                                        <td class="col-3">Jumlah Beli</td>
                                        <td>{{ $penempatan->barang->jlhBeli }}</td>
                                    </tr>
                                    <tr>
                                        <td class="col-3">Tanggal Beli</td>
                                        <td>{{ $penempatan->barang->tglBeli }}</td>
                                    </tr>

                                </table>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
