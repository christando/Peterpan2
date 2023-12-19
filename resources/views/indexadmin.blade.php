@extends('Layouts.homeadmin')
@section('title', 'Home Admin')
@section('content')
<div class="card-body">
    @if (session('flash'))
        <div class="alert alert-success alert-dismissible fade show" role="alert" id='alert'>
            <strong>{{ session('flash') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <script type="text/javascript">
                setTimeout(function() {

                    // Closing the alert
                    $('#alert').alert('close');
                }, 4000);
            </script>
        </div>
    @endif

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tujuan</th>
                <th scope="col">Mobil</th>
                <th scope="col">Tanggal Berangkat</th>
                <th scope="col">Tanggal Kembali</th>
                <th scope="col">Sopir</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <a href="/data/pesanan/update/{id}" class="btn btn-success"><i
                            class="bi bi-pencil-square"></i></a>
                    <a href="/data/mobil/delete/" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                </td>
            </tr>

        </tbody>
    </table>
    <span class='float-right'></span>
</div>
@endsection
