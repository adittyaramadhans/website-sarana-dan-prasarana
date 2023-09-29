@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="card  mb-4">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Today's Money</p>
                                        <h5 class="font-weight-bolder">
                                            $53,000
                                        </h5>
                                    </div>
                                    <a class="small text-dark stretched-link" href="#">View Details</a>
                                    <div class="small text-dark"><i class="fas fa-angle-right"></i></div>

                                </div>
                                <div class="col-4 text-end">
                                    <div
                                        class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                                        <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="card  mb-4">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Today's Users</p>
                                        <h5 class="font-weight-bolder">
                                            2,300
                                        </h5>
                                        <p class="mb-0">
                                            <span class="text-success text-sm font-weight-bolder">+3%</span>
                                            since last week
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div
                                        class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                                        <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="card  mb-4">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-uppercase font-weight-bold">New Clients</p>
                                        <h5 class="font-weight-bolder">
                                            +3,462
                                        </h5>
                                        <p class="mb-0">
                                            <span class="text-danger text-sm font-weight-bolder">-2%</span>
                                            since last quarter
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div
                                        class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                                        <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="card  mb-4">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Sales</p>
                                        <h5 class="font-weight-bolder">
                                            $103,430
                                        </h5>
                                        <p class="mb-0">
                                            <span class="text-success text-sm font-weight-bolder">+5%</span> than last month
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div
                                        class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                                        <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-20 col-12 mx-auto">
            <div class="card z-index-2 h-100">
                <div class="card-header pb-0 pt-3 bg-transparent">
                    <h6 class="text-capitalize">Sales overview</h6>
                    <p class="text-sm mb-0">
                        <i class="fa fa-arrow-up text-success"></i>
                        <span class="font-weight-bold">4% more</span>
                        <select>
                            <option>2021</option>
                            <option>2022</option>
                            <option>2023</option>
                        </select>
                    </p>
                </div>
                <div class="card-body p-3">
                    <div class="chart">
                        <canvas id="chart-line" class="chart-canvas" height="300"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-20 col-12 mx-auto">
            <div class="card card-body mt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">
                        <h6 class="mb-0">Sarana</h6>
                        <p class="text-sm mb-0">Note:</p>
                    </div>
                    <div class="col-auto my-4">
                        <a href="{{ route('sarana.create') }}" class="btn btn-primary add-list"><i
                                class="fa-solid fa-plus me-3"></i>sarana</a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead class="thead-light">
                                <tr>
                                    <th>No.</th>
                                    <th>Code Barang</th>
                                    <th>Nama Barang</th>
                                    <th>Foto Barang</th>
                                    <th>Ruangan</th>
                                    <th>Category</th>
                                    <th>Jenis Barang</th>
                                    <th>Jumlah</th>
                                    <th>Harga</th>
                                    <th>Deskripsi</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach ($prasarana as $no => $hasil)
                                            <tr>
                                                <th>{{ $no + 1 }}</th>
                                                <th>{{ $hasil->nama_prasarana }}</th>
                                                <td>
                                                    <img width="80"
                                                        src="{{ asset('storage/prasarana/' . $hasil->photo) }}"
                                                        alt="">
                                                </td>
                                                <td>{{ $hasil->bangunan }}</td>
                                                <td>{{ $hasil->category_name->category }}</td>
                                                <td>{{ $hasil->luas }}</td>
                                                <td>{{ $hasil->deskripsi }}</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="#" class="btn btn-outline-primary btn-sm mx-1"><i
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
                                        @endforeach --}}
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

        </div>



    </div>
    </div>
    </div>



    {{-- table --}}
    <div>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-dark text-xxs font-weight-bolder opacity-7">Project</th>
                                <th class="text-uppercase text-dark text-xxs font-weight-bolder opacity-7 ps-2">Budget
                                </th>
                                <th class="text-uppercase text-dark text-xxs font-weight-bolder opacity-7 ps-2">Status
                                </th>
                                <th class="text-uppercase text-dark text-xxs font-weight-bolder opacity-7 ps-2">
                                    Completion</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex px-2">
                                        <div>
                                            <img src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/logos/small-logos/logo-spotify.svg"
                                                class="avatar avatar-sm rounded-circle me-2">
                                        </div>
                                        <div class="my-auto">
                                            <h6 class="mb-0 text-xs">Spotify</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">$2,500</p>
                                </td>
                                <td>
                                    <span class="badge badge-dot me-4">
                                        <i class="bg-info"></i>
                                        <span class="text-dark text-xs">working</span>
                                    </span>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="d-flex align-items-center">
                                        <span class="me-2 text-xs">60%</span>
                                        <div>
                                            <div class="progress">
                                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="60"
                                                    aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <button class="btn btn-link text-dark mb-0">
                                        <i class="fa fa-ellipsis-v text-xs" aria-hidden="true"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex px-2">
                                        <div>
                                            <img src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/logos/small-logos/logo-invision.svg"
                                                class="avatar avatar-sm rounded-circle me-2">
                                        </div>
                                        <div class="my-auto">
                                            <h6 class="mb-0 text-xs">Invision</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">$5,000</p>
                                </td>
                                <td>
                                    <span class="badge badge-dot me-4">
                                        <i class="bg-success"></i>
                                        <span class="text-dark text-xs">done</span>
                                    </span>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="d-flex align-items-center">
                                        <span class="me-2 text-xs">100%</span>
                                        <div>
                                            <div class="progress">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                    aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"
                                                    style="width: 100%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <button class="btn btn-link text-dark mb-0" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="fa fa-ellipsis-v text-xs" aria-hidden="true"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex px-2">
                                        <div>
                                            <img src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/logos/small-logos/logo-jira.svg"
                                                class="avatar avatar-sm rounded-circle me-2">
                                        </div>
                                        <div class="my-auto">
                                            <h6 class="mb-0 text-xs">Jira</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">$3,400</p>
                                </td>
                                <td>
                                    <span class="badge badge-dot me-4">
                                        <i class="bg-danger"></i>
                                        <span class="text-dark text-xs">canceled</span>
                                    </span>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="d-flex align-items-center">
                                        <span class="me-2 text-xs">30%</span>
                                        <div>
                                            <div class="progress">
                                                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="30"
                                                    aria-valuemin="0" aria-valuemax="30" style="width: 30%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <button class="btn btn-link text-dark mb-0" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="fa fa-ellipsis-v text-xs" aria-hidden="true"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex px-2">
                                        <div>
                                            <img src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/logos/small-logos/logo-slack.svg"
                                                class="avatar avatar-sm rounded-circle me-2">
                                        </div>
                                        <div class="my-auto">
                                            <h6 class="mb-0 text-xs">Slack</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">$1,000</p>
                                </td>
                                <td>
                                    <span class="badge badge-dot me-4">
                                        <i class="bg-danger"></i>
                                        <span class="text-dark text-xs">canceled</span>
                                    </span>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="d-flex align-items-center">
                                        <span class="me-2 text-xs">10%</span>
                                        <div>
                                            <div class="progress">
                                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="0"
                                                    aria-valuemin="0" aria-valuemax="0" style="width: 100%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <button class="btn btn-link text-dark mb-0" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="fa fa-ellipsis-v text-xs" aria-hidden="true"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex px-2">
                                        <div>
                                            <img src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/logos/small-logos/logo-webdev.svg"
                                                class="avatar avatar-sm rounded-circle me-2">
                                        </div>
                                        <div class="my-auto">
                                            <h6 class="mb-0 text-xs">Webdev</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">$14,000</p>
                                </td>
                                <td>
                                    <span class="badge badge-dot me-4">
                                        <i class="bg-info"></i>
                                        <span class="text-dark text-xs">working</span>
                                    </span>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="d-flex align-items-center">
                                        <span class="me-2 text-xs">80%</span>
                                        <div>
                                            <div class="progress">
                                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="80"
                                                    aria-valuemin="0" aria-valuemax="80" style="width: 80%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <button class="btn btn-link text-dark mb-0" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="fa fa-ellipsis-v text-xs" aria-hidden="true"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex px-2">
                                        <div>
                                            <img src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/logos/small-logos/logo-xd.svg"
                                                class="avatar avatar-sm rounded-circle me-2">
                                        </div>
                                        <div class="my-auto">
                                            <h6 class="mb-0 text-xs">Adobe XD</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">$2,300</p>
                                </td>
                                <td>
                                    <span class="badge badge-dot me-4">
                                        <i class="bg-success"></i>
                                        <span class="text-dark text-xs">done</span>
                                    </span>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="d-flex align-items-center">
                                        <span class="me-2 text-xs">100%</span>
                                        <div>
                                            <div class="progress">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                    aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"
                                                    style="width: 100%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <button class="btn btn-link text-dark mb-0" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="fa fa-ellipsis-v text-xs" aria-hidden="true"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
