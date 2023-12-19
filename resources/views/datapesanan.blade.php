@extends('User.homeuser')
@section('title', 'pesanan')
@section('content')
<div class="card mt-4">
    <div class="card-header">
        <a href="/data/pesanan/formtambahpesanan" class="btn btn-primary" role="button"><i class="bi bi-plus-square"></i> pesanan</a>
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
                    <th scope="col">tujuan</th>
                    <th scope="col">jenis_mobil</th>
                    <th scope="col">Kapasitas</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $idx => $d)
                <tr>
                    <th scope="row">{{ $idx + $data->firstItem() }}</th>
                    <td>{{ $d->tujuan }}</td>
                    <td>{{ $d->jenis_mobil }}</td>
                    <td>{{ $d->kapasitas}}</td>
                    <td>
                        <a href="/data/pesanan/update/{{$d->id}}" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                        <a href="/data/pesanan/delete/{{$d->id}}" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <span class='float-right'></span>
    </div>
</div>
@endsection
