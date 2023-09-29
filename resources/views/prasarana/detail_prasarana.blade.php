@extends('layouts.app')
@section('content')
    <div class="card shadow-lg mx-4 mt-4 card-profile-bottom">
        <div class="card-body p-3">
            <div class="row gx-4">
                <div class="col-auto">
                    <div class="avatar avatar-xl position-relative">
                        <img width="80" src="{{ asset('storage/prasarana/' . $prasarana->photo) }}" alt="">
                    </div>
                </div>
                <div class="col-auto my-auto">
                    <div class="h-100">
                        <h5 class="mb-1">
                            {{-- nama prasarana --}}
                            {{ $prasarana->nama_prasarana }}
                        </h5>
                        <p class="mb-0 font-weight-bold text-sm">
                            {{-- luas prasarana --}}
                            {{ $prasarana->luas }}
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                    <div class="nav-wrapper position-relative end-0">
                        <ul class="nav nav-pills nav-fill p-1" role="tablist">
                            <li class="nav-item">

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-4">
        <div class="row mt-3">
            <div class="col-12 col-md-6 col-xl-6 mt-md-0 mt-4">
                <div class="card h-150">
                    <div class="card-header pb-0 p-3">
                        <div class="row">
                            <div class="col-md-8 d-flex align-items-center">
                                <h6 class="mb-1">Detail Prasarana</h6>
                            </div>
                            {{-- <div class="col-md-4 text-end">
                                <a href="javascript:;">
                                    <i class="fas fa-user-edit text-secondary text-sm" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Edit Profile"></i>
                                </a>
                            </div> --}}
                        </div>
                    </div>
                    <div class="card-body p-3">

                        <ul class="list-group">
                            <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Nama:</strong>
                                &nbsp; {{ $prasarana->nama_prasarana }} </li>
                            <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Luas
                                    Ruangan:</strong>
                                &nbsp; {{ $prasarana->luas }}</li>
                            <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Gedung:</strong>
                                &nbsp; {{ $prasarana->bangunan }}
                            </li>
                            <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Category:</strong>
                                &nbsp; {{ $prasarana->category_name->category }}
                            </li>
                            <li class="list-group-item border-0 ps-0 pb-0">
                                <strong class="text-dark text-sm">Deskripsi:</strong> &nbsp;
                                {!! $prasarana->deskripsi !!}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-6 mt-md-0 mt-4">
                <div class="card h-150">
                    <div class="card-header pb-0 p-3">
                        <div class="row">
                            <div class="col-md-8 d-flex align-items-center">
                                <h6 class="mb-1">Detail Sarana Didalam Ruangan</h6>
                            </div>
                            {{-- <div class="col-md-4 text-end">
                                <a href="javascript:;">
                                    <i class="fas fa-user-edit text-secondary text-sm" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Edit Profile"></i>
                                </a>
                            </div> --}}
                        </div>
                    </div>
                    <div class="card-body p-3">

                        <ul class="list-group">
                            <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">
                                    Kursi:</strong>
                                &nbsp; </li>
                            <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">
                                    Meja:</strong>
                                &nbsp; </li>
                            <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">
                                    Komputer:</strong>
                                &nbsp;
                            </li>
                            <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark"> AC:</strong>
                                &nbsp;
                            </li>
                            <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark"> Papan
                                    Tulis:</strong>
                                &nbsp;
                            </li>
                            <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">
                                    Laptop:</strong>
                                &nbsp;
                            </li>
                            <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">
                                    Lemari:</strong>
                                &nbsp;
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('script')
    <script src="{{ asset('assets/js/plugins/datatables.js') }}"></script>
    <script>
        const dataTableSearch = new simpleDatatables.DataTable("#datatable-search", {
            searchable: true,
            fixedHeight: true
        });
    </script>
@endpush
