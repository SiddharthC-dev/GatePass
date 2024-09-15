@extends('layouts.adminpanel')

@section('content')

<div class="content">
    <div class="col-sm-4">
    @include('flash::message')
    </div>





    {{-- {{ $item }} --}}
<div class="card">
    <div class="card-header">
      <h3 class="card-title"><b> Visiting Information Table</b></h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table class="table table-bordered">
        <thead>
          <tr>
            {{-- <th style="width: 10px">#</th> --}}


            <th>Visitor Full Name</th>
            <th>user_id</th>
            <th>User Name</th>
            <th>flat_No</th>
            <th>Meeting Purpose</th>
            <th>vehicle_no</th>
            <th> Date time</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($visit as $item)
            <tr>
                <td>{{ $item->visitorProfile->name }}</td>
                <td>{{ $item->user_id }}</td>
                <td>{{ $item->user_name }}</td>
                <td>
                    {{ $item->flate_No }}
                </td>
                <td>{{ $item->meeting_Purpose }}</td>
                <td>{{ $item->vehicle_no }}</td>
                <td>{{ $item->created_at }}</td>


              </tr>
            @endforeach

        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
    <div class="card-footer clearfix">
      <ul class="pagination pagination-sm m-0 float-right">

            {{-- {{ $item->links() }}////// --}}

      </ul>
    </div>
  </div>
</div>

  @endsection
