@extends('layouts.parent')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Edit User</h5>

                <table class="table table-bordered">
                    <tr>
                        <th>Role</th>
                        <td>
                            <form action="{{ route('dashboard.user.update', $user->id) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="input-group mb-3">
                                    <select class="form-select" name="role" id="role">
                                        <option value="ADMIN" @selected($user->roles === 'ADMIN')>
                                            ADMIN</option>
                                        <option value="USER" @selected($user->roles === 'USER')>
                                            USER</option>
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
