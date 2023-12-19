@extends('Driver.indexdriver')
@section('title', 'home Driver')
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
                @foreach ($data as $idx => $d)
                    <tr>
                        <th scope="row">{{ $idx + $data->firstItem() }}</th>
                        <td>{{ $d->tujuan }}</td>
                        <td>{{ $d->jenis_mobil }}</td>
                        <td>{{ $d->tanggal_berangkat }}</td>
                        <td>{{ $d->tanggal_sampai }}</td>
                        <td>{{ $d->driver }}</td>
                        <td>
                            <a href="/data/pesanan/update/{id}" class="btn btn-success"><i
                                    class="bi bi-check-circle-fill"></i></a>
                            <a href="/data/mobil/delete/" class="btn btn-danger"><i class="bi bi-x-circle-fill"></i></a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
        <div class="container">
            {{-- @foreach ($reports as $report)
            <p><strong>Star Rating:</strong></p>
            <div class="star-rating">
                @for ($i = 1; $i <= 5; $i++)
                    <i class="fas fa-star{{ $i <= $report->star_rating ? ' filled' : '' }}"></i>
                @endfor
            </div>
        @endforeach --}}
        </div>
        <span class='float-right'></span>
    </div>
@endsection
