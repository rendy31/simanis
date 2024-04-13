<div>
    <div class="container">
        <h3 class="text-dark fw-semibold mb-3">Dashboard</h3>
        <div class="row g-3">
            <div class="col-md-3">
                <a href="{{route('gedung.index')}}">
                <div class="card">
                    <div class="card-body">
                        <span class="icon mb-4"><i class="bx bx-box fs-2"></i></span>
                        <h6 class="fs-7 text-uppercase text-secondary fw-semibold mb-2">
                            Gedung
                        </h6>
                        <h4 class="text-uppercase text-dark fw-semibold">{{$gedungs}}</h4>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="{{route('ruangan.index')}}">
                <div class="card">
                    <div class="card-body">
                        <span class="icon mb-4"><i class="bx bx-box fs-2"></i></span>
                        <h6 class="fs-7 text-uppercase text-secondary fw-semibold mb-2">
                             Ruangan
                        </h6>
                        <h4 class="text-uppercase text-dark fw-semibold">{{$ruangans}}</h4>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="{{route('barang.index')}}">
                <div class="card">
                    <div class="card-body">
                        <span class="icon mb-4"><i class="bx bx-box fs-2"></i></span>
                        <h6 class="fs-7 text-uppercase text-secondary fw-semibold mb-2">
                            Barang
                        </h6>
                        <h4 class="text-uppercase text-dark fw-semibold">{{$barangs}}</h4>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="{{route('penempatan.index')}}">
                <div class="card">
                    <div class="card-body">
                        <span class="icon mb-4"><i class="bx bx-box fs-2"></i></span>
                        <h6 class="fs-7 text-uppercase text-secondary fw-semibold mb-2">
                            Barang yang sudah ditempatkan
                        </h6>
                        <h4 class="text-uppercase text-dark fw-semibold">{{$penempatans}}</h4>
                    </div>
                </div>
                </a>
            </div>
            {{-- <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <span class="icon mb-4"><i class='bx bx-line-chart fs-2'></i></span>
                        <h6 class="fs-7 text-uppercase text-secondary fw-semibold mb-2">
                            Total Pendapatan Bulan Ini
                        </h6>
                        <h4 class="text-uppercase text-dark fw-semibold">Rp. 120,000,000</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <span class="icon mb-4"><i class='bx bx-user fs-2'></i></span>
                        <h6 class="fs-7 text-uppercase text-secondary fw-semibold mb-2">
                            Total User Aplikasi
                        </h6>
                        <h4 class="text-uppercase text-dark fw-semibold">21</h4>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>
