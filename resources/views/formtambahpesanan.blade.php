@extends('User.indexuser')
@section('content')
    <main class="mt-5 pt-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 mt-3">
                    <form action="/tambahpesanan" method="POST">
                        @csrf
                        <h4 class="mb-3 fs-4 fw-bold">Input tambah Pesanan</h4>
                        <div class="mb-3 row">
                            <label for="tujuan" class="col-sm-2 col-form-label">Tujuan</label>
                            <div class="col-sm-10">
                                <input class="form-input" type="text" name="tujuan">
                            </div>
                        </div>
                </div>

            </div>
            <div class="mb-3 row">
                <label for="jenis" class="col-sm-2 col-form-label">Jenis Mobil</label>
                <div class="col-sm-10">
                    <select class="form-select" name="jenis_mobil" aria-label="Default select example" required>
                        @foreach ($data as $d)
                            <option value="{{ $d->jenis }}">{{ $d->jenis }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="jenis" class="col-sm-2 col-form-label">Kapasitas Mobil</label>
                <div class="col-sm-10">
                    <input class="form-input" type="text" name="kapasitas">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="jenis" class="col-sm-2 col-form-label">Tanggal_berangkat</label>
                <div class="col-sm-10">
                    <input class="form-input" type="date" name="tanggal_berangkat">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="jenis" class="col-sm-2 col-form-label">Tanggal_sampai</label>
                <div class="col-sm-10">
                    <input class="form-input" type="date" name="tanggal_sampai">
                </div>
            </div>

        </div>
        <div class="col-md-12 px-4 text-end mb-4">
            <button type="submit" class="btn btn-primary px-4">Submit</button>

        </div>
        </form>
        </div>
        </div>

        </div>
    </main>
@endsection
