@extends('backend.template')
@section('content')
<div class="row">
    <div class="col-xl-12 mb-5 mb-xl-0">
        <div class="card shadow">
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="mb-0">{{ $title }}</h3>
                    </div>
                    <div class="col text-right">
                        <a href="{{ route('data_hp.create') }}" class="btn btn-sm btn-primary">Tambah Data</a>
                    </div>
                </div>
            </div>
            <div class="table-responsive" style="width: 98%; margin: 10px">
                <!-- Projects table -->
                <table id="example" class="table align-items-center table-flush" style="width:100%">
                    <thead class="thead-light">
                        <tr>
                            <th>Id</th>
                            <th>Merk HP</th>
                            <th>Harga</th>
                            <th>Gambar</th>
                            <th>Ram</th>
                            <th>Storage</th>
                            <th>Camera</th>
                            <th>Color</th>
                            <th>Battery</th>
                            <th>Size</th>
                            <th>Sound</th>
                            <th>Dual SIM</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($data as $item)
                        <tr>
                            <td>
                                {{ $item->id }}
                            </td>
                            <td>
                                {{ $item->name }}
                            </td>
                            <td>{{ $item->harga }}</td>
                            <td>
                                @foreach (json_decode($item->gambar) as $key => $value)
                                <img src="{{ asset('/files/'.$value)}}" height="50%" width="">
                                @endforeach
                            </td>
                            <td>{{ $item->ram->size }} GB</td>
                            <td>{{ $item->storage->size }} GB</td>
                            <td>{{ $item->camera->size }} MP</td>
                            <td>{{ $item->color->name }}</td>
                            <td>{{ $item->battery->size }} mAh</td>

                            <td class="text-left">
                                <div class="dropdown">
                                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ni ni-settings"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                        <form action="{{ route('data_hp.destroy', $item->id) }}" id="delete-kodekel" method="POST">
                                            <a class="dropdown-item" href="{{ route('data_hp.edit', $item->id) }}">Edit</a>
                                            @csrf
                                            @method('DELETE')
                                            <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('delete-kodekel').submit();">Delete</a>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="13" style="text-align: center"><b><h3>Data Masih Kosong</h3></b></td>
                        </tr>
                        @endforelse
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Merk HP</th>
                            <th>Harga</th>
                            <th>Gambar</th>
                            <th>Ram</th>
                            <th>Storage</th>
                            <th>Camera</th>
                            <th>Color</th>
                            <th>Battery</th>
                            <th>Size</th>
                            <th>Sound</th>
                            <th>Dual SIM</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
@push('js')
<script>
    $(document).ready(function() {
        $('#example').DataTable({
            language: {
                paginate: {
                    previous: "<",
                    next: ">"
                }
            },
        });
    });
</script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
@endpush
@push('css')
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
@endpush
