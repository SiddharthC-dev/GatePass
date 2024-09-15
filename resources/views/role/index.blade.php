@extends('layouts.adminpanel')

@section('content')
    <div class="content">
        <div class="col-sm-3 ">

            @include('flash::message')
        </div>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><b>Roles Table</b></h3>
                <a class="btn btn-sm btn-primary float-right" href="{{ url('/role/create') }}">Add Role</a>
            </div>

            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 10px">Role id</th>
                            <th>Role Name</th>
                            <th>gaurd Name </th>

                            <th>Create</th>
                            <th>Update</th>
                            <th width="15%">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $index = 0;
                        $cnt = $roles->perPage() * ($roles->currentPage() - 1) + $index + 1;
                        ?>
                        @foreach ($roles as $role)
                            <tr>
                                <td>{{ $cnt++ }}</td>
                                <td>{{ $role->name }}</td>
                                <td>
                                    {{ $role->guard_name }}
                                </td>
                                <td>{{ $role->created_at }}</td>
                                <td>{{ $role->updated_at }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a type="button" class="btn btn-sm btn-default"
                                            href="{{ route('role.edit', $role->id) }}">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a type="button" class="btn btn-sm btn-default"
                                            href="{{ route('managepermissions.edit', $role->name) }}">
                                            <i class="fas fa-user-lock"></i>
                                        </a>
                                        <form method="post" action="{{ route('role.destroy', $role->id) }}"
                                            onclick="return confirm('Are you sure?')">
                                            @csrf
                                            {{ method_field('delete') }}
                                            <button type="submit" class="btn btn-sm btn-default">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>

                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-1 float-right">
                    <li class="page-item">
                        {{ $roles->links() }}
                    </li>
                </ul>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
