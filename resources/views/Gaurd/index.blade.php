@extends('layouts.adminpanel')

@section('content')

<div class="content">
    <div class="col-sm-4">
    @include('flash::message')
    </div>





    {{-- {{ $apartments }} --}}
<div class="card">
    <div class="card-header">
      <h3 class="card-title"><b> gaurd Information Table</b></h3>
      <a class="btn btn-sm btn-primary float-right" href="{{url('/gaurd/create') }}">Create New</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th style="width: 10px">Sr.No</th>
            <th>Gaurd Name</th>
            <th>Address</th>
            <th>Mobile Number</th>
            <th>Start Shift</th>
            <th>End Shift</th>

            <th width="15%">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($gaurds as $gaurd)
            <tr>
                <td>{{ $gaurd->id }}</td>
                <td>{{ $gaurd->name }}</td>
                <td>
                    {{ $gaurd->address }}
                </td>
                <td>{{ $gaurd->mobile_no }}</td>
                <td>{{ $gaurd->start_shift }}</td>
                <td>{{ $gaurd->end_shift }}</td>

                <td><div class="btn-group">
                    <a type="button" class="btn btn-sm btn-default" href="{{ route('gaurd.edit',$gaurd->id) }}">
                      <i class="fas fa-edit"></i>
                    </a>
                    <form method="post" action="{{ route('gaurd.destroy',$gaurd->id)}}" onclick="return confirm('Are you sure?')">
                        @csrf
                        {{ method_field('delete') }}
                        <button type="submit" class="btn btn-sm btn-default">
                        <i class="fas fa-trash"></i>
                        </button>
                    </form>
                    <a type="button" class="btn btn-sm btn-default" href="{{url('gaurd/'.$gaurd->id) }}" >
                      <i class="fas fa-eye"></i>
                    </a>
                  </div></td>
              </tr>
            @endforeach

        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
    <div class="card-footer clearfix">
      <ul class="pagination pagination-sm m-0 float-right">

            {{ $gaurds->links() }}

      </ul>
    </div>
  </div>
</div>
  @endsection
