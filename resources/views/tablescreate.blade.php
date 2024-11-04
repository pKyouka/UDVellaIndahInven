@extends('layouts.user_type.auth')

@section('content')
    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h6 class="mb-0">Tambah Barang</h6>
            </div>
            <div class="card-body pt-4 p-3">
                <form action="{{ route('tablescreate') }}" method="POST" role="form text-left">
                    @csrf
                    @if(session('success'))
                        <div class="m-3 alert alert-success alert-dismissible fade show" id="alert-success" role="alert">
                            <span class="alert-text text-white">
                            {{ session('success') }}</span>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                <i class="fa fa-close" aria-hidden="true"></i>
                            </button>
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="kode" class="form-control-label">{{ __('Kode') }}</label>
                                <div class="@error('kode')border border-danger rounded-3 @enderror">
                                    <input class="form-control" type="text" placeholder="Kode" id="kode" name="kode" value="{{ old('kode') }}">
                                        @error('kode')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tipe" class="form-control-label">{{ __('Tipe') }}</label>
                                <div class="@error('tipe')border border-danger rounded-3 @enderror">
                                    <input class="form-control" type="text" placeholder="Tipe" id="tipe" name="tipe" value="{{ old('tipe') }}">
                                        @error('tipe')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="barang" class="form-control-label">{{ __('Barang') }}</label>
                                <div class="@error('barang')border border-danger rounded-3 @enderror">
                                    <input class="form-control" type="text" placeholder="Barang" id="barang" name="barang" value="{{ old('barang') }}">
                                        @error('barang')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="harga_jual" class="form-control-label">{{ __('Harga Jual') }}</label>
                                <div class="@error('harga_jual')border border-danger rounded-3 @enderror">
                                    <input class="form-control" type="number" placeholder="Harga Jual" id="harga_jual" name="harga_jual" value="{{ old('harga_jual') }}">
                                        @error('harga_jual')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="harga_beli">{{ 'Harga Beli' }}</label>
                        <div class="@error('harga_beli')border border-danger rounded-3 @enderror">
                            <input class="form-control" type="number" placeholder="Harga Beli" id="harga_beli" name="harga_beli" value="{{ old('harga_beli') }}">
                                @error('harga_beli')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
