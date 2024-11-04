@extends('layouts.user_type.auth')

@section('content')

  <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Authors table</h6>

                <div class="col-12">
                    <a href="{{ route('tablescreate') }}" class="btn btn-primary">Tambah Barang</a>
                    </div>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kode Barang</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tipe Barang</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Barang</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Harga Beli</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Harga Jual</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                <tbody>
                    @foreach($showbarang as $item)
                        <tr>
                            <td class="text-center text-xs font-weight-bold mb-0">{{ $item->kode }}</td>
                            <td class="text-center text-xs font-weight-bold mb-0">{{ $item->tipe }}</td>
                            <td class="text-center text-xs font-weight-bold mb-0">{{ $item->barang }}</td>
                            <td class="text-center text-xs font-weight-bold mb-0">Rp.{{ $item->harga_jual }}</td>
                            <td class="text-center text-xs font-weight-bold mb-0">Rp.{{ $item->harga_beli }}</td>
                            <td class="text-center text-xs font-weight-bold mb-0">
                                <a href="{{ route('tablesedit', $item->kode) }}" class="btn btn-warning">Edit</a>
                                <a href="{{ route('tablesdelete', $item->kode) }}" class="btn btn-danger">Delete</a>
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
  </main>

  @endsection
