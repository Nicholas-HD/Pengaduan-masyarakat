@extends('admin.layouts.master')

@section('content')
    @if (Session::has('message-role-create'))
        <div class="alert alert-success">
            {{ Session::get('message-role-create') }}
        </div>
    @endif

    @if (Session::has('message-role-update'))
        <div class="alert alert-warning">
            {{ Session::get('message-role-update') }}
        </div>
    @endif

    @if (Session::has('message-role-delete'))
        <div class="alert alert-danger">
            {{ Session::get('message-role-delete') }}
        </div>
    @endif

                <div class="container-fluid">

                    <div class="card shadow mb-4">
                       <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Create Role</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Role</th>
                                            <th>Deskripsi</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Role</th>
                                            <th>Deskripsi</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @php
                                            $i = 1;
                                        @endphp
                                        @forelse ($roles as $role)
                                            <tr>
                                                <td>{{ $i }}</td>
                                                <td>{{ $role->name }}</td>
                                                <td>{{ $role->description }}</td>
                                                <td>
                                                    <div class="row ml-1">
                                                        <a href="{{ route('role.edit', [$role->id]) }}"><i
                                                                class="fas fa-edit text-warning mr-3"></i></a>
                                                        <form action="{{ route('role.destroy', [$role->id]) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('delete')
                                                            <button class="btn btn-white p-0"><i class="fas fa-trash text-danger"></i></button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                            @php
                                                $i++;
                                            @endphp
                                        @empty
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
@endsection
