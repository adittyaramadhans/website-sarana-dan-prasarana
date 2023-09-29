@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-20 col-12 mx-auto">
            <div class="card card-body mt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">
                        <h6 class="mb-0">Sarana</h6>
                        <p class="text-sm mb-0">Note: seri barang pada barang non electronic bisa dibuat dengan bahan apa
                            barang itu dibuat</p>
                    </div>
                    <div class="col-auto my-4">
                        <a href="#" class="btn btn-primary add-list"><i class="fa-solid fa-plus me-3"></i>Pengadaan</a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-flush" id="datatable-pengadaan">

                            <thead class="thead-light">
                                <tr>
                                    <th>No.</th>
                                    <th>Sarana</th>
                                    <th>Jumlah</th>
                                    <th>Category</th>
                                    <th>Status Barang</th>
                                    <th>Tanggal Masuk</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pengadaan as $no => $hasil)
                                    <tr>
                                        <th>{{ $no + 1 }}</th>
                                        <th>{{ $hasil->sarana_id }}</th>
                                        <th>{{ $hasil->jumlah }}</th>
                                        <td>{{ $hasil->category_name->category }}</td>
                                        <td>{{ $hasil->status }}</td>
                                        <td>{{ $hasil->tanggal }}</td>
                                        <td>
                                            <form action="{{ route('pengadaan.destroy', $hasil->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <div class="d-flex gap-2">
                                                    <a href="#" class="btn btn-outline-primary "><i
                                                            class="fas fa-edit"></i></a>
                                                    <button type="submit" class="btn btn-outline-danger btn-sm"
                                                        onclick="return confirm('Are you sure you want to delete this record?')">
                                                        <i class="far fa-trash-alt"></i>
                                                    </button>
                                                </div>
                                            </form>
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
@endsection
@push('script')
    <script src="{{ asset('assets/js/plugins/datatables.js') }}"></script>
    <script>
        new simpleDatatables.DataTable("#datatable-pengadaan");
    </script>
@endpush
