@extends('layouts.app')
@section('content')
    <form action="{{ route('prasarana.store') }}" method="GET">
        <div class="row">
            <div class="col-lg-20 col-12 mx-auto">
                <div class="card card-body mt-4">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto mt-4">
                            <h6 class="mb-0">New Project</h6>
                            <p class="text-sm mb-0">Create new project</p>
                        </div>
                        <div class="col-auto my-4">
                            <a href="{{ route('prasarana.create') }}" class="btn btn-primary add-list"><i
                                    class="fa-solid fa-plus me-3"></i>Prasarana</a>
                        </div>
                    </div>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                            <div class="col-lg-12">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <table class="table table-flush" id="datatable-prasarana">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Foto </th>
                                                    <th>Nama </th>
                                                    <th>Gedung </th>
                                                    <th>Category </th>
                                                    <th>Luas</th>
                                                    <th>Deskripsi</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($prasarana as $no => $hasil)
                                                    <tr>
                                                        <th>{{ $no + 1 }}</th>
                                                        <td>
                                                            <img width="80"
                                                                src="{{ asset('storage/prasarana/' . $hasil->photo) }}"
                                                                alt="">
                                                        </td>
                                                        <th>{{ $hasil->nama_prasarana }}</th>
                                                        <td>{{ $hasil->bangunan }}</td>
                                                        <td>{{ $hasil->category_name->category }}</td>
                                                        <td>{{ $hasil->luas }}</td>
                                                        <td>{!! $hasil->deskripsi !!}</td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <a href="{{ route('prasarana.edit', $hasil->id) }}"
                                                                    class="btn btn-outline-primary btn-sm mx-1"><i
                                                                        class="fas fa-edit"></i></a>
                                                                <a href="{{ route('prasarana.show', $hasil->id) }}"
                                                                    class="btn btn-outline-primary btn-sm mx-1"><i
                                                                        class="fas fa-eye"></i></a>
                                                                <form action="{{ route('prasarana.destroy', $hasil->id) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit"
                                                                        class="btn btn-outline-danger btn-sm"
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
    </form>
@endsection
@push('script')
    <script src="{{ asset('assets/js/plugins/datatables.js') }}"></script>
    <script>
        new simpleDatatables.DataTable("#datatable-prasarana");
    </script>
@endpush
