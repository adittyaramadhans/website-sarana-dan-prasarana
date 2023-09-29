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
                        <a href="{{ route('sarana.create') }}" class="btn btn-primary add-list"><i
                                class="fa-solid fa-plus me-3"></i>sarana</a>
                        <a href="#" class="btn btn-primary add-list"><i class="fa fa-download"></i></a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <table class="table table-flush" id="datatable-sarana">
                                <thead class="thead-light">
                                    <tr>
                                        <th>No.</th>
                                        <th>Qode Barang</th>
                                        <th>Nama Barang</th>
                                        <th>Seri Barang</th>
                                        <th>Ruangan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sarana as $no => $hasil)
                                        <tr>
                                            <th>{{ $no + 1 }}</th>
                                            <td>{!! QrCode::size(60)->generate($hasil->id . $hasil->sarana) !!}</td>
                                            <th>{{ $hasil->sarana }}</th>
                                            <th>{{ $hasil->jenis }}</th>
                                            <td>{{ $hasil->prasarana }}</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="{{ route('sarana.show', $hasil->id) }}"
                                                        class="btn btn-outline-warning btn-sm mx-1"><i
                                                            class="fas fa-eye"></i></a>
                                                    <a href="{{ route('sarana.edit', $hasil->id) }}"
                                                        class="btn btn-outline-primary btn-sm mx-1"><i
                                                            class="fas fa-edit"></i></a>
                                                    <form action="{{ route('sarana.destroy', $hasil->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-outline-danger btn-sm"
                                                            onclick="return confirm('Are you sure you want to delete this record?')">
                                                            <i class="far fa-trash-alt"></i>
                                                        </button>
                                                    </form>
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
    </div>
    </div>
@endsection
@push('script')
    <script src="{{ asset('assets/js/plugins/datatables.js') }}"></script>
    <script>
        new simpleDatatables.DataTable("#datatable-sarana");
    </script>
@endpush
