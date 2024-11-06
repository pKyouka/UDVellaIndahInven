@extends('layouts.user_type.auth')

@section('content')

<main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg">
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Detail Pasien</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2 ms-4 me-4">
                        <div class="table-responsive p-0">
                            <form action="{{ route('tablesedit', $editbarang->kode) }}" method="POST">
                                @csrf
                                @method('POST')
                                <table class="table align-items-center mb-0">
                                    <tbody>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">No. RM</th>
                                            <td>
                                                <input type="text" class="form-control" name="kode" value="{{ $editbarang->kode }}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama</th>
                                            <td>
                                                <input type="text" class="form-control" name="tipe" value="{{ $editbarang->tipe }}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tanggal Lahir</th>
                                            <td>
                                                <input type="text" class="form-control" name="barang" value="{{ $editbarang->barang }}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Bangsal</th>
                                            <td>
                                                <input type="text" class="form-control" name="harga_jual" value="{{ $editbarang->harga_jual }}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Diagnosis Gizi</th>
                                            <td>
                                                <input type="text" class="form-control" name="harga_beli" value="{{ $editbarang->harga_beli }}">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
