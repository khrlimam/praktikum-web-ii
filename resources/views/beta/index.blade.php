@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('beta.create') }}" class="btn btn-outline-primary float-right">Tambah Data</a>
                        <h3 class="card-title">Beta!</h3>
                    </div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-striped">
                        <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Merek</th>
                            <th>Tipe</th>
                            <th>Pembuat</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>???</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->merek }}</td>
                                <td>{{ ucfirst($item->tipe) }}</td>
                                <td>{{ $item->pembuat }}</td>
                                <td>{{ $item->hargaIdr() }}</td>
                                <td>{{ $item->stok }}</td>
                                <td>
                                    <form action="{{ route('beta.destroy', $item->id) }}" method="POST"
                                          onsubmit="event.preventDefault(); deleteConfirmation(this)">
                                        @method('DELETE')
                                        @csrf
                                        <button
                                                type="submit" class="btn btn-outline-danger btn-sm">Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')

    <script>
        function deleteConfirmation(form) {
            isConfirmed = confirm("Apakah anda yakin ingin menghapus data?")
            if (isConfirmed)
                form.submit();
        }
    </script>

@endsection