@extends('Layouts.homeadmin')
@section('content')
    <main class="mt-5 pt-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 mt-3">
                    <form action="/tambahmobil" method="POST">
                        @csrf
                        <h4 class="mb-3 fs-4 fw-bold">Input tambah Mobil</h4>
                        <div class="mb-3 row">
                            <label for="jenis" class="col-sm-2 col-form-label">Merk Mobil</label>
                            <div class="col-sm-10">
                                <select class="form-select" name="merk" aria-label="Default select example"
                                    required>
                                    <option selected>Pilih Merk Mobil</option>
                                    <option value="SUV">Honda</option>
                                    <option value="Sedan">Toyota</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="jenis" class="col-sm-2 col-form-label">Warna Mobil</label>
                            <div class="col-sm-10">
                                <input class="form-input" type="text" name="warna">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="jenis" class="col-sm-2 col-form-label">Jenis Mobil</label>
                            <div class="col-sm-10">
                                <select class="form-select" name="jenis" aria-label="Default select example"
                                    required>
                                    <option selected>Pilih Jenis Mobil</option>
                                    <option value="SUV">SUV</option>
                                    <option value="Sedan">Sedan</option>
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
                            <label for="jenis" class="col-sm-2 col-form-label">Nomor Plat Mobil</label>
                            <div class="col-sm-10">
                                <input class="form-input" type="text" name="nopol">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="ket_stnk" class="col-sm-2 col-form-label">Keterangan STNK</label>
                            <div class="col-sm-10">
                                <input class="form-input" type="date" name="ket_stnk">
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
