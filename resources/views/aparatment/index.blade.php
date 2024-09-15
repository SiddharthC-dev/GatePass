@extends('layouts.adminpanel')

@section('content')

<div class="content">
    <div class="col-sm-4">
    @include('flash::message')
    </div>





    {{-- {{ $apartments }} --}}
<div class="card">
    <div class="card-header">
      <h3 class="card-title"><b> Apartments Table</b></h3>
      <a class="btn btn-sm btn-primary float-right" href="{{url('/aparatment/create') }}">Create New</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th style="width: 10px">#</th>
            <th>Apartment Name</th>
            <th>City</th>
            <th>State</th>
            <th width="15%">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($apartments as $apratment)
            <tr>
                <td>{{ $apratment->id }}</td>
                <td>{{ $apratment->apartment_name }}</td>
                <td>
                    {{ $apratment->apartment_city }}
                </td>
                <td>{{ $apratment->apartment_state }}</td>
                <td><div class="btn-group">
                    <a type="button" class="btn btn-sm btn-default" href="{{ route('aparatment.edit',$apratment->id) }}">
                      <i class="fas fa-edit"></i>
                    </a>
                    <form method="post" action="{{ route('aparatment.destroy',$apratment->id)}}" onclick="return confirm('Are you sure?')">
                        @csrf
                        {{ method_field('delete') }}
                        <button type="submit" class="btn btn-sm btn-default">
                        <i class="fas fa-trash"></i>
                        </button>
                    </form>
                    <a type="button" class="btn btn-sm btn-default" href="{{url('aparatment/'.$apratment->id) }}" >
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

            {{ $apartments->links() }}

      </ul>
    </div>
  </div>
</div>
  @endsection
