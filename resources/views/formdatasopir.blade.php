@extends('Layouts.homeadmin')
@section('content')
    <main class="mt-5 pt-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 mt-3">
                    <form action="/data/sopir/svupdate/{{ $d->id }}" method="POST">
                        @csrf
                        @method('PUT')
                        <h4 class="mb-3 fs-4 fw-bold">Input tambah Mobil</h4>
                        <div class="mb-3 row">
                            <label for="name" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input class="form-input" type="text" name="name" value="{{ $d->fname }} {{ $d->lname }}">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="sim" class="col-sm-2 col-form-label">Kapasitas Mobil</label>
                            <div class="col-sm-10">
                                <input type="checkbox" name="sim[]" value="Sim A">
                                <label for="sim">SIM A</label>
                                <br>
                                <input type="checkbox" name="sim[]" value="sim B">
                                <label for="simB">SIM B</label>
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
