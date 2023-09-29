@extends('layouts.app')
@section('content')
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger mb-2">{{ $error }}</div>
    @endforeach
    <form action="{{ route('pengadaan.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="sarana_id" value="">
        <div class="row">
            <div class="col-lg-9 col-12 mx-auto">
                <div class="card card-body mt-4">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto mt-1">
                            <h6 class="mb-0">Pengadaan Sarana Baru</h6>
                            <p class="text-sm mb-0">Create new project</p>
                        </div>
                        <div class="col-auto my-4">
                            <a href="{{ route('sarana.index') }}" class="btn btn-primary add-list"><i
                                    class="fa fa-table me-3"></i>pengadaan</a>
                        </div>
                    </div>
                    <hr class="horizontal dark my-3">

                    {{-- jumlah --}}
                    <div class="col-6">
                        <label for="jumlah" class="form-label">Jumlah</label>
                        <input type="text" class="form-control" id="jumlah" name="jumlah">
                    </div>
                    {{-- end jumlah --}}

                    {{-- category --}}
                    <div class="row gx-3 mb-3">
                        <!-- Form Group (type of product category) -->
                        <div class="col-md-6">
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
                        </div>
                        <!-- Form Group (type of product unit) -->

                    </div>
                    {{-- end category --}}

                    {{-- tanggal --}}
                    <div class="row">
                        <div class="col-6">
                            <label class="form-label">Tanggal Masuk</label>
                            <input class="form-control datetimepicker" type="text" id="tanggal" name="tanggal"
                                placeholder="Please select start date" data-input>
                        </div>
                        {{-- <div class="col-6">
                        <label class="form-label">End Date</label>
                        <input class="form-control datetimepicker" type="text" placeholder="Please select end date"
                            data-input>
                    </div> --}}
                    </div>
                    {{-- end tanggal --}}

                    {{-- category --}}
                    <div class="row gx-3 mb-3">
                        <!-- Form Group (type of product category) -->
                        <div class="col-md-6">
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

                    </div>
                    {{-- end category --}}

                    <div class="d-flex justify-content-end mt-4">
                        <button type="button" name="button" class="btn btn-light m-0">Cancel</button>
                        <button type="submit" name="button" class="btn bg-gradient-primary m-0 ms-2">Create
                            Project</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
@push('script')
    <script src="{{ asset('assets/js/plugins/choices.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/quill.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/flatpickr.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/dropzone.min.js') }}"></script>
    <script>
        if (document.getElementById('editor')) {
            var quill = new Quill('#editor', {
                theme: 'snow' // Specify theme in configuration
            });
        }

        if (document.getElementById('choices-multiple-remove-button')) {
            var element = document.getElementById('choices-multiple-remove-button');
            const example = new Choices(element, {
                removeItemButton: true
            });

            example.setChoices(
                [{
                        value: 'One',
                        label: 'Label One',
                        disabled: true
                    },
                    {
                        value: 'Two',
                        label: 'Label Two',
                        selected: true
                    },
                    {
                        value: 'Three',
                        label: 'Label Three'
                    },
                ],
                'value',
                'label',
                false,
            );
        }

        if (document.querySelector('.datetimepicker')) {
            flatpickr('.datetimepicker', {
                allowInput: true
            }); // flatpickr
        }

        Dropzone.autoDiscover = false;
        var drop = document.getElementById('dropzone')
        var myDropzone = new Dropzone(drop, {
            url: "/file/post",
            addRemoveLinks: true
        });
    </script>
@endpush
