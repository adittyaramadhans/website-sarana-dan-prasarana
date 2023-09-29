@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-9 col-12 mx-auto">
            <div class="card card-body mt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">
                        <h6 class="mb-0">New Project</h6>
                        <p class="text-sm mb-0">Create new project</p>
                    </div>
                    <div class="col-auto my-4">
                        <button type="button" class="btn btn-primary add-list " data-bs-toggle="modal"
                            data-bs-target="#modalcategory"><i class="fa-solid fa-plus me-3"></i>Category</button>
                    </div>
                </div>
                <form action="{{ route('category.store') }}" method="GET">
                </form>
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <table class="table table-flush" id="datatable-category">
                                <thead class="thead-light">
                                    <tr>
                                        <th>No.</th>
                                        <th>Category</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($category as $no => $hasil)
                                        <tr>
                                            <th>{{ $no + 1 }}</th>
                                            <th>{{ $hasil->category }}</th>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="#" class="btn btn-outline-primary btn-sm mx-1"
                                                        data-bs-toggle="modal" data-bs-target="#contohmodal"><i
                                                            class="fas fa-edit"></i></a>
                                                    <form action="#" method="POST">
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




    <div class="modal fade" id="modalcategory" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalcategory">Tambah Category</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="mb-3">
                            <label for="category" class="form-label">Nama Category</label>
                            <input type="text" class="form-control" name="category" id="category">
                        </div>
                        <button type="submit" class="btn btn-primary float-end">Simpan</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="contohmodal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="contohmodal">Tambah Category</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger mb-2">{{ $error }}</div>
                @endforeach
                <div class="modal-body">

                    <form action="{{ route('category.update', $hasil->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('Patch')
                        <div class="mb-3">
                            <label for="category" class="form-label">Nama Category</label>
                            <input type="text" class="form-control" name="category" id="category">
                        </div>
                        <button type="submit" class="btn btn-primary float-end">Simpan</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
@push('script')
    <script src="{{ asset('assets/js/plugins/datatables.js') }}"></script>
    <script>
        new simpleDatatables.DataTable("#datatable-category");
    </script>
@endpush
