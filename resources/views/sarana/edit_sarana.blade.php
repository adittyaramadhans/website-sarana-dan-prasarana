@extends('layouts.app')
@section('content')
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger mb-2">{{ $error }}</div>
    @endforeach
    <form action="{{ route('sarana.update', $sarana->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('Patch')
        <div class="row">
            <div class="col-lg-9 col-12 mx-auto">
                <div class="card card-body mt-4">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto mt-1">
                            <h6 class="mb-0">Edit Sarana</h6>
                            <p class="text-sm mb-0">Note:</p>
                        </div>
                        <div class="col-auto my-4">
                            <a href="{{ route('sarana.index') }}" class="btn btn-primary add-list"><i
                                    class="fa fa-table me-3"></i>sarana</a>
                        </div>
                    </div>

                    <hr class="horizontal dark my-3">
                    {{-- sarana --}}

                    <label for="sarana" class="form-label">Sarana</label>
                    <input type="text" class="form-control" id="sarana" name="sarana">
                    {{-- end sarana --}}

                    {{-- jumlah --}}
                    {{-- <label for="jumlah" class="form-label">Jumlah</label>
                    <input type="text" class="form-control" id="jumlah" name="jumlah"> --}}
                    {{-- end jumlah --}}

                    {{-- seri --}}
                    <label for="jenis" class="form-label">Seri Barang</label>
                    <input type="text" class="form-control" id="jenis" name="jenis">
                    {{-- end seri --}}

                    <label class="mt-4 form-label">Starting Files</label>
                    <div class="form-control dropzone" id="dropzone">
                        <div class="fallback">
                            <input class="form-control form-control-solid mb-2 @error('product_image') is-invalid @enderror"
                                type="file" id="photo_sarana" name="photo_sarana" accept="image/*"
                                onchange="previewImage();">
                        </div>
                    </div>
                    {{-- <div class="row mt-4">
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label>
                                Private Project
                            </label>
                            <p class="form-text text-muted text-xs ms-1">
                                If you are available for hire outside of the current situation, you can encourage others to
                                hire you.
                            </p>
                            <div class="form-check form-switch ms-1">
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault"
                                    onclick="notify(this)" data-type="warning"
                                    data-content="Once a project is made private, you cannot revert it to a public project."
                                    data-title="Warning" data-icon="ni ni-bell-55">
                                <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                            </div>
                        </div>
                    </div>
                </div> --}}


                    {{-- category --}}
                    {{-- <div class="row gx-3 mb-3">
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
                        </div> --}}
                    <!-- Form Group (type of product unit) -->

                    <!-- Form Group (type of product category) -->
                    <div class="col-md-6">
                        <label class="small mb-1" for="prasarana_id">Ruangan </label>
                        <select class="form-select form-control-solid @error('prasarana_id') is-invalid @enderror"
                            id="prasarana" name="prasarana">
                            <option selected="" disabled="">Pilih Ruangan:</option>
                            @foreach ($prasarana as $prasarana)
                                <option value="{{ $prasarana->id }}"
                                    @if (old('prasarana') == $prasarana->id) selected="selected" @endif>
                                    {{ $prasarana->nama_prasarana }}</option>
                            @endforeach
                        </select>
                        @error('prasarana_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <!-- Form Group (type of product unit) -->

                </div>
                {{-- end bangunan --}}

                {{-- harga --}}
                <label for="harga" class="form-label">Harga</label>
                <input type="text" class="form-control" id="harga" name="harga">
                {{-- end harga --}}

                {{-- tanggal --}}
                {{-- <div class="row">
                        <div class="col-12">
                            <label class="form-label">Start Date</label>
                            <input class="form-control datetimepicker" type="text" id="tanggal" name="tanggal"
                                placeholder="Please select start date" data-input>
                        </div>
                        {{-- <div class="col-6">
                        <label class="form-label">End Date</label>
                        <input class="form-control datetimepicker" type="text" placeholder="Please select end date"
                            data-input>
                    </div> --}}
                {{-- </div> --}}
                {{-- end tanggal --}}

                {{-- deskripsi --}}
                <label class="mt-4">Project Description</label>
                <p class="form-text text-muted text-xs ms-1">
                    This is how others will learn about the project, so make it good!
                </p>
                <div>
                    <textarea class="summernote-container form-control" rows="10" maxlength="200" name="deskripsi" id="editor"></textarea>

                    <p><br></p>
                </div>

                <div class="d-flex justify-content-end mt-4">
                    <button type="button" name="button" class="btn btn-light m-0">Cancel</button>
                    <button type="submit" name="button" class="btn bg-gradient-primary m-0 ms-2">Tambahkan</button>
                </div>
            </div>
        </div>
        </div>
    </form>
@endsection
@push('script')
    <script src="{{ asset('assets/js/plugins/choices.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/flatpickr.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/dropzone.min.js') }}"></script>
    <script src="https://cdn.tiny.cloud/1/lgw3uczikd5jv8h45lbadfu5lm3lqze9x07xyk5gykf9ncpv/tinymce/5/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script>
        if (document.getElementById('editor')) {
            tinymce.init({
                selector: '#editor'
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
            autoProcessQueue: false,
            addRemoveLinks: true
        });
    </script>
@endpush
