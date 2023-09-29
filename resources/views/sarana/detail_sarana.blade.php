@extends('layouts.app')
@section('content')
    <div class="card shadow-lg mx-4 mt-4 card-profile-bottom">
        <div class="card-body p-3">
            <div class="row gx-4">
                <div class="col-auto">
                    <div class="avatar avatar-xl position-relative">
                        {!! QrCode::size(60)->generate($sarana->id) !!}
                    </div>
                </div>
                <div class="col-auto my-auto">
                    <div class="h-100">
                        <h5 class="mb-1">
                            {{-- nama sarana --}}
                            {{ $sarana->sarana }}
                        </h5>
                        <p class="mb-0 font-weight-bold text-sm">
                            {{-- nama prasarana --}}
                            {{ $sarana->jenis }}
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                    <div class="nav-wrapper position-relative end-0">
                        <ul class="nav nav-pills nav-fill p-1" role="tablist">
                            <li class="nav-item">
                                {{-- <button type="button" class="btn bg-gradient-primary" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    Launch demo modal
                                </button> --}}
                                <a href="#" class="btn btn-success add-list" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal"><i class="fa fa-plus"></i></a>
                                <a href="#" class="btn btn-primary add-list"><i class="fa fa-download"></i></a>
                                <a href="#" class="btn btn-danger add-list" data-bs-toggle="modal"
                                    data-bs-target="#ContohModal"><i class="fa fa-minus"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card shadow-lg mx-4 mt-4 card-profile-bottom">
        <div class="card-body p-3">
            <div class="row gx-4">
                <div class="row">
                    <div class="col-md-8 d-flex align-items-center">
                        <h6 class="mb-1">Detail Sarana</h6>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="avatar avatar-xl position-relative">
                        <img width="80" src="{{ asset('storage/sarana/' . $sarana->photo_sarana) }}" alt="">
                    </div>
                </div>
                <div class="col-auto my-auto">
                    <div class="h-100">
                        <h5 class="mb-1">
                            {{-- nama sarana --}}
                            {{ $sarana->sarana }}
                        </h5>
                        <p class="mb-0 font-weight-bold text-sm">
                            {{-- nama prasarana --}}
                            {{ $sarana->jenis }}
                        </p>
                    </div>
                </div>
                <div class="card-body p-3">

                    <ul class="list-group">
                        <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Harga &nbsp; &nbsp;
                                &nbsp; &nbsp; &nbsp;:</strong>
                            &nbsp; Rp.{{ number_format($sarana->harga) }}</li>
                        <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Ruangan &nbsp;
                                &nbsp;:</strong>
                            &nbsp; {{ $sarana->prasarana }}</li>
                        <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Jumlah &nbsp; &nbsp;
                                &nbsp; &nbsp;:</strong>
                            &nbsp;{{ $sarana->pengadaan_sum_jumlah - $sarana->pelaporan_sum_jumlah }}
                        </li>
                        <li class="list-group-item border-0 ps-0 pb-0">
                            <strong class="text-dark text-sm">Deskripsi &nbsp; :</strong> &nbsp;
                            {!! $sarana->deskripsi !!}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="container-fluid py-4">
        <div class="row mt-3">
            <div class="col-12 col-md-6 col-xl-6 mt-md-0 mt-4">
                <div class="card h-150">
                    <div class="card-header pb-0 p-3">
                        <div class="row">
                            <div class="col-md-8 d-flex align-items-center">
                                <h6 class="mb-1">Detail Sarana</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-3">

                        <ul class="list-group">
                            <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Nama:</strong>
                                &nbsp; {{ $sarana->sarana }}</li>
                            <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Seri
                                    Barang:</strong>
                                &nbsp; {{ $sarana->jenis }}</li>
                            <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Harga:</strong>
                                &nbsp; {{ $sarana->harga }}</li>
                            <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Ruangan:</strong>
                                &nbsp; {{ $sarana->prasarana }}</li>
                            <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Jumlah:</strong>
                                &nbsp;
                            </li>
                            <li class="list-group-item border-0 ps-0 pb-0">
                                <strong class="text-dark text-sm">Deskripsi:</strong> &nbsp;
                                {!! $sarana->deskripsi !!}
                            </li>
                        </ul>
                    </div>
                </div>
            </div> --}}


    <div class="container-fluid py-4">
        <div class="row mt-3">
            <div class="col-12 col-xl-6 mt-xl-0 mt-4">
                <div class="card h-100">
                    <div class="card-header pb-0 p-3">
                        <h6 class="mb-0">History Pengadaan Barang</h6>
                    </div>
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <table class="table table-flush" id="datatable-pengadaan">

                                <thead class="thead-light">
                                    <tr>
                                        <th>No.</th>
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



            <div class="col-12 col-xl-6 mt-xl-0 mt-4">
                <div class="card h-100">
                    <div class="card-header pb-0 p-3">
                        <h6 class="mb-0">History Kerusakan Barang</h6>
                    </div>
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <table class="table table-flush" id="datatable-pelaporan">

                                <thead class="thead-light">
                                    <tr>
                                        <th>No.</th>
                                        <th>Jumlah</th>
                                        <th>Status Barang</th>
                                        <th>Tanggal</th>
                                        <th>Deskripsi</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pelaporan as $no => $hasil)
                                        <tr>
                                            <th>{{ $no + 1 }}</th>
                                            <th>{{ $hasil->jumlah }}</th>
                                            <td>{{ $hasil->status }}</td>
                                            <td>{{ $hasil->tanggal }}</td>
                                            <td>{{ $hasil->deskripsi }}</td>
                                            <td>
                                                <form action="{{ route('pelaporan.destroy', $hasil->id) }}" method="POST">
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
    </div>
@endsection
@push('script')
    <script src="{{ asset('assets/js/plugins/datatables.js') }}"></script>
    <script>
        new simpleDatatables.DataTable("#datatable-pengadaan");
        new simpleDatatables.DataTable("#datatable-pelaporan");
    </script>
@endpush



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('pengadaan.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="sarana_id" value="{{ $sarana->id }}">
                <div class="modal-body">
                    {{-- jumlah --}}
                    <label for="jumlah" class="form-label">Jumlah</label>
                    <input type="text" class="form-control" id="jumlah" name="jumlah">
                    {{-- end jumlah --}}
                    <!-- Form Group (type of product category) -->
                    <label class="small mb-1" for="category_id">Category </label>
                    <select class="form-select form-control-solid @error('category_id') is-invalid @enderror"
                        id="category" name="category">
                        <option selected="" disabled="">Pilih Category:</option>
                        @foreach ($category as $category)
                            <option value="{{ $category->id }}"
                                @if (old('category_id') == $category->id) selected="selected" @endif>
                                {{ $category->category }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                    <label class="form-label">Tanggal Masuk</label>
                    <input class="form-control datetimepicker" type="date" id="tanggal" name="tanggal"
                        placeholder="Please select start date" data-input>

                    <label class="small mb-1" for="status">Status Barang </label>
                    <select class="form-select form-control-solid @error('status') is-invalid @enderror"
                        id="status" name="status">
                        <option selected="" disabled="">Pilih Status:</option>
                        <option>Baru</option>
                        <option>Bekas</option>
                    </select>
                    @error('category_id')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>


                <!-- Form Group (type of product unit) -->


                <div class="modal-footer">
                    <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn bg-gradient-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>



<div class="modal fade" id="ContohModal" tabindex="-1" role="dialog" aria-labelledby="ContohModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ContohModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger mb-2">{{ $error }}</div>
            @endforeach
            <form action="{{ route('pelaporan.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="sarana_id" value="{{ $sarana->id }}">
                <div class="modal-body">

                    <label for="jumlah" class="form-label">Jumlah</label>
                    <input type="text" class="form-control" id="jumlah" name="jumlah">

                    <label class="small mb-1" for="status">Status </label>
                    <select class="form-select form-control-solid @error('status') is-invalid @enderror"
                        id="status" name="status">
                        <option selected="" disabled="">Pilih Status:</option>
                        <option>Rusak</option>
                        <option>Hilang</option>
                        <option>Hilang</option>
                        <option>Dimaling Adit</option>
                    </select>
                    @error('category_id')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                    <label class="form-label">Tanggal</label>
                    <input class="form-control datetimepicker" type="date" id="tanggal" name="tanggal"
                        placeholder="Please select start date" data-input>


                    <label class="mt-4">Project Description</label>
                    <p class="form-text text-muted text-xs ms-1">
                        This is how others will learn about the project, so make it good!
                    </p>
                    <div>
                        <textarea class="summernote-container form-control" rows="10" maxlength="200" name="deskripsi"></textarea>

                        <p><br></p>
                    </div>




                    <div class="modal-footer">
                        <button type="button" class="btn bg-gradient-secondary"
                            data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn bg-gradient-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
