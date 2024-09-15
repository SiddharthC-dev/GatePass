@extends('layouts.adminpanel')

@section('content')
<div class="content">
    <div class="col-sm-4">
        @include('flash::message')
        </div>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"><b>Permissions Table</b> </h3>
    <a class="btn btn-sm btn-primary float-right" href="{{url('/permission/create') }}">Add Permission</a>
    </Div>




    <div class="card-body">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th style="width: 10px">Permission id</th>
            <th>Permission Name</th>
            <th>Gaurd Name </th>
            <th>Create</th>
            <th>Update</th>
            <th width="15%">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($permissions as $permission)
            <tr>
                <td>{{ $permission->id }}</td>
                <td>{{ $permission->name }}</td>
                <td>
                    {{ $permission->guard_name }}
                </td>
                <td>{{ $permission->created_at}}</td>
                <td>{{ $permission->updated_at}}</td>
                <td><div class="btn-group">
                    <a type="button" class="btn btn-sm btn-default" href="{{ route('permission.edit',$permission->id) }}">
                      <i class="fas fa-edit"></i>
                    </a>
                    <form method="post" action="{{ route('permission.destroy',$permission->id)}}" onclick="return confirm('Are you sure?')">
                        @csrf
                        {{ method_field('delete') }}
                        <button type="submit" class="btn btn-sm btn-default">
                        <i class="fas fa-trash"></i>
                        </button>
                    </form>

                  </div></td>
              </tr>
            @endforeach

        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
    <div class="card-footer clearfix">
        <ul class="pagination pagination-sm m-1 float-right">
          <li class="page-item">
              {{ $permissions->links() }}
            </li>
        </ul>
      </div>
  </div>
</div>
</div>
</div>
  @endsection
