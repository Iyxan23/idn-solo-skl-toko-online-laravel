@extends('layouts.parent')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">
                    Transaction
                </h5>

                <table class="table table-striped table-bordered datatable">
                    <thead>
                        <tr>
                            <td scope="col">#</td>
                            <td scope="col">Name Account</td>
                            <td scope="col">Name</td>
                            <td scope="col">Email</td>
                            <td scope="col">Phone</td>
                            <td scope="col">Total Price</td>
                            <td scope="col">Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($transactions as $row)
                            <tr>
                                <td scope="col">{{ $loop->iteration }}</td>
                                <td scope="col">{{ $row->user->name }}</td>
                                <td scope="col">{{ $row->name }}</td>
                                <td scope="col">{{ $row->email }}</td>
                                <td scope="col">{{ $row->phone }}</td>
                                <td scope="col">{{ $row->courier }}</td>
                                <td scope="col">{{ number_format($row->total_price) }}</td>
                                <td scope="col">
                                    @if ($row->status == 'PENDING')
                                        <span class="badge bg-warning">PENDING</span>
                                    @elseif ($row->status == 'SUCCESS')
                                        <span class="badge bg-success">SUCCESS</span>
                                    @elseif ($row->status == 'FAILED')
                                        <span class="badge bg-danger">FAILED</span>
                                    @elseif ($row->status == 'SHIPPING')
                                        <span class="badge bg-info">SHIPPING</span>
                                    @elseif ($row->status == 'SHIPPED')
                                        <span class="badge bg-primary">SHIPPED</span>
                                    @endif
                                </td>
                                <td scope="col">
                                    <a href="{{ route('dashboard.transaction.show', $row->id) }}" class="btn btn-info">
                                        <i class="bi bi-eye"></i>
                                        Show
                                    </a>

                                    <a href="{{ route('dashboard.transaction.edit', $row->id) }}" class="btn btn-warning">
                                        <i class="bi bi-pencil"></i>
                                        Edit
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center">Data Transaction Kosong</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
