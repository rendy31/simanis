<div>
    <div class="container">
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h3 class="text-dark fw-semibold">Data Gedung</h3>
            <a wire:navigate href="{{route('gedung.create')}}" class="btn btn-primary btn-sm">Tambah Gedung</a>
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
                                <th>Nama Gedung</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($gedungs as $gedung)
                            <tr class="align-middle">
                                <td>{{$loop->iteration}}</td>
                                <td>{{$gedung->namaGedung}}</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a wire:navigate href="{{route('gedung.edit',$gedung->id)}}" class="btn btn-warning btn-sm text-white">
                                            <i class="bx bx-edit"></i> Edit
                                        </a>
                                        <button wire:confirm="Are you sure you want to delete ?" wire:click="delete({{ $gedung->id }})" class="btn btn-danger btn-sm">
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
