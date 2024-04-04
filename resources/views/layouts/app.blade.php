
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://stikessuakainsan.ac.id/wp-content/uploads/2022/11/KAMPUS-SUAKA-INSAN.png" type="image/x-icon">
    <title>SIManis</title>

    <link rel="stylesheet" href="{{url('assets/vendors/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/vendors/boxicons/css/boxicons.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
</head>

<body class="bg-soft-blue">
    <nav class="navbar navbar-expand-lg bg-white py-3">
        <div class="container">
            <a href="." class="navbar-brand d-flex align-items-center gap-2 fw-bold">
                <img src="https://stikessuakainsan.ac.id/wp-content/uploads/2022/11/KAMPUS-SUAKA-INSAN.png" width="40" alt="">
                <div>
                    <p class="mb-0 fs-7" style="line-height: 15px;">
                        STIKES Suaka Insan <br> <span class="text-primary">siMANIS</span>
                    </p>
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarMenu">
                <ul class="navbar-nav mx-auto gap-3">
                    <li class="nav-item">
                        <a wire:navigate href="." class="nav-link active">
                            <i class="bx bxs-dashboard"></i> Dashboard
                        </a>
                    </li>
                    <li wire:click class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="bx bx-box"></i> Bangunan
                        </a>

                        <ul class="dropdown-menu mt-2">
                            <li>
                                <a wire:navigate href="{{route('gedung.index')}}" class="dropdown-item">
                                    <i class="bx bx-objects-horizontal-right"></i> Data Gedung
                                </a>
                            </li>
                            <li>
                                <a wire:navigate href="{{route('ruangan.index')}}" class="dropdown-item">
                                    <i class="bx bx-box"></i> Data Ruangan
                                </a>
                            </li>
                        </ul>

                    </li>
                    <li class="nav-item dropdown">
                        <a  href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="bx bx-box"></i> Inventarisasi
                        </a>

                        <ul class="dropdown-menu mt-2">
                            <li>
                                <a wire:navigate href="{{route('kategori.index')}}" class="dropdown-item">
                                    <i class="bx bx-objects-horizontal-right"></i> Data Kategori Barang
                                </a>
                            </li>
                            <li>
                                <a wire:navigate href="produk.html" class="dropdown-item">
                                    <i class="bx bx-box"></i> Data Barang
                                </a>
                            </li>
                            <li>
                                <a wire:navigate href="produk.html" class="dropdown-item">
                                    <i class="bx bx-box"></i> Penempatan Barang
                                </a>
                            </li>
                        </ul>
                        
                    </li>
                    <li class="nav-item">
                        <a href="transaksi.html" class="nav-link">
                            <i class='bx bx-line-chart'></i> Transaksi
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown">
                            <img src="https://ui-avatars.com/api/?name=Rendy+Dwi" class="rounded-circle" width="36"
                                alt="{{Auth::User()->name}}">
                            {{Auth::User()->name}}
                        </a>

                        <ul class="dropdown-menu dropdown-menu-end mt-2">
                            <li><a href="#" class="dropdown-item">Log Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-5">
        {{$slot}}
    </main>
    
    <script src="{{url('assets/vendors/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
</body>

</html>
