<div>
    <div class="container">
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h3 class="text-dark fw-semibold">Data Ruangan</h3>
            <a wire:navigate href="{{route('ruangan.create')}}" class="btn btn-primary btn-sm">Tambah Ruangan</a>
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
                                <th>Nama Ruangan</th>
                                <th>Nama Gedung</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ruangans as $ruangan)
                            <tr class="align-middle">
                                <td>{{$loop->iteration}}</td>
                                <td>{{$ruangan->namaRuangan}}</td>
                                <td>{{$ruangan->gedung->namaGedung}}</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a wire:navigate href="{{route('ruangan.edit',$ruangan->id)}}" class="btn btn-warning btn-sm text-white">
                                            <i class="bx bx-edit"></i> Edit
                                        </a>
                                        <button wire:confirm="Are you sure you want to delete ?" wire:click="delete({{ $ruangan->id }})" class="btn btn-danger btn-sm">
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
