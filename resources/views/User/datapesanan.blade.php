@extends('User.homeuser')
@section('title', 'List Pesanan')
@section('content')
<div class="card mt-4">
    <div class="card-header">
        <a href="#" class="btn btn-primary" role="button"><i class="bi bi-plus-square"></i> Pemesanan </a>

        <form action="#" method="GET" class="form-inline my-2 my-lg-0 float-right">
            <input name="q" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
    <div class="card-body">
        @if(session('flash'))
        <div class="alert alert-success alert-dismissible fade show" role="alert" id='alert'>
            <strong>{{session('flash')}}</strong>
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
                    <th scope="col">NIM</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Gender</th>
                    <th scope="col">prodi</th>
                    <th scope="col">Minat</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <th scope="row"></th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <a href="#" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                        <a href="#" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                    </td>
                </tr>

            </tbody>
        </table>
        <span class='float-right'></span>
    </div>
</div>
@endsection