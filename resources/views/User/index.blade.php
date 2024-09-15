@extends('layouts.adminpanel')

@section('content')
    <div class="content">
        <div class="col-sm-4">
            @include('flash::message')
        </div>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title "><b>Users Table</b></h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 10px">Sr.No</th>
                            <th>User Name</th>
                            <th>Email</th>
                            <th>Create</th>
                            <th>Update</th>
                            <th width="15%">Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $index = 0;
                        $cnt = $users->perPage() * ($users->currentPage() - 1) + $index + 1;
                        ?>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $cnt++ }}</td>
                                <td>{{ $user->name }}</td>
                                <td>
                                    {{ $user->email }}
                                </td>
                                <td>{{ $user->created_at }}</td>
                                <td>{{ $user->updated_at }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a type="button" class="btn btn-sm btn-default"
                                            href="{{ route('user.edit', $user->id) }}">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form method="post" action="{{ route('user.destroy', $user->id) }}"
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
            <!-- /.pagination -->
            <div class="card-footer clearfix float-right">
                <ul class="pagination pagination-sm m-1 float-right">
                    <li class="page-item">
                        {{ $users->links() }}
                    </li>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
