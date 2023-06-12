@extends('layouts.parent')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Edit Transaction</h5>

                <table class="table table-bordered">
                    <tr>
                        <th>Status</th>
                        <td>
                            <form action="{{ route('dashboard.transaction.update', $transaction->id) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="input-group mb-3">
                                    <select class="form-select" name="status" id="status">
                                        <option value="PENDING" @selected($transaction->status == 'PENDING')>
                                            PENDING</option>
                                        <option value="SUCCESS" @selected($transaction->status == 'SUCCESS')>
                                            SUCCESS</option>
                                        <option value="SHIPPING" @selected($transaction->status == 'SHIPPING')>
                                            SHIPPING</option>
                                        <option value="SHIPPED" @selected($transaction->status == 'SHIPPED')>
                                            SHIPPED</option>
                                        <option value="FAILED" @selected($transaction->status == 'FAILED')>
                                            FAILED</option>
                                    </select>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    {{-- <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('description');
    </script> --}}
@endsection
